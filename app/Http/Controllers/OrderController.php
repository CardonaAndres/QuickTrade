<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Producer_detail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function index()
    {
        // dd(Session::get('orders'));

        if ($orders = Session::get('orders')) {
            return view('orders.index',compact('orders'));
        }
        else{
            return redirect()->route('all-products')->with('error','No Tienes Productos En Tu Canasta, Agrega Algunos');
        }
        
    }

    public function order_details(Request $request){

        $order_id = $request->order_id;
        
        $orderdetails = Order_detail::where('order_id',$order_id)->get();

        $ids = [];

       foreach ($orderdetails as $orderdetail){

        $ids[] = $orderdetail->producer_detail_id;  

       }

       $products_order = Producer_detail::join('products','producer_details.product_id', '=', 'products.id')
        ->join('order_details','order_details.producer_detail_id','=','producer_details.id')
        ->select('products.*', 'producer_details.*','order_details.*','order_details.quantity AS order_quantity')->whereIn('producer_details.id',$ids)->where('order_id',$order_id)->get();
   
     return view('orders.details',compact('products_order','order_id'));
      
    }   

    public function order_done()
    {
        $orders = Order::where('consumer_id',Auth::user()->id)->paginate(3);

        return view('orders.orders_done',compact('orders'));
    }

    public function store_sesion(Request $request)
    {
        $order = (object)array(
            'id'=>$request->id_pdetail,
            'name'=> $request->product_name,
            'image'=>$request->image,
            'price' =>$request->total_price,
            'quantity' =>$request->quantity,
            'weight' =>$request->weight,
            'sub_total'=> $request->quantity * $request->total_price,
        );

        Session::push('orders',$order);

        return redirect()->route('orders.index');
    }

    public function edit_sesion(Request $request)
    {
            
        $key = $request->key;

        $order_s=Session::get('orders')[$key];

        $product = Producer_detail::find($order_s->id);
        
        return view('orders.edit',compact('order_s','key','product'));
    }

    public function update_sesion(Request $request)
    {
        $elementoAEliminar = $request->key; // elemento a eliminar

        $orders = session('orders', []);

        if ($elementoAEliminar !== true) {
            unset($orders[$elementoAEliminar]);
            session(['orders' => $orders]);
        }

        $order = (object)array(
            'id'=>$request->id_pdetail,
            'name'=> $request->product_name,
            'image'=>$request->image,
            'price' =>$request->total_price,
            'quantity' =>$request->quantity,
            'weight' =>$request->weight,
            'sub_total'=> $request->quantity * $request->total_price,
        );

        Session::push('orders',$order);

        return redirect()->route('orders.index')->with('update','Producto Actualizado Con Exito');
    }

    public function destroy_sesion(Request $request) {
        $elementoAEliminar = $request->key; // Reemplaza esto con el elemento que deseas eliminar

        $orders = session('orders', []);

        if ($elementoAEliminar !== true) {
            unset($orders[$elementoAEliminar]);
            session(['orders' => $orders]);
        }

        
        if ($orders = Session::get('orders')) {
            return redirect()->route('orders.index')->with('error','Producto Eliminado De Tu Canasta');
        }
        else{
            return redirect()->route('all-products')->with('error_3','Upss, Has Vaciado Tu Canasta, Agrega Algunos Productos');
        }
       
    }

    public function destroy_sesion_all()

    {
        session()->forget('orders');

        return redirect()->route('all-products')->with('error_2','Has Vaciado Tu Canasta');
    }


    
    public function store(Request $request)
    {
        $suma = 0;

        $orders = Session::get('orders');
   
            foreach ($orders as $order){

                 $total_price = $suma += $order->sub_total; 
            }

            $order=Order::create([
                'total_price' => $total_price,
                'payment_method' => $request->payment_method,
                'shopping_address' => $request->shopping_address,
                'consumer_id' => $request->consumer_id,
            ]);    

            $order_id = Order::latest()->first()->id;

            foreach ($orders as $order){

                $order_detail = Order_detail::create([
                    'quantity'=>$order->quantity,
                    'price'=>$order->price,
                    'sub_total'=>$order->sub_total,
                    'producer_detail_id'=>$order->id,
                    'order_id'=>$order_id,
                ]);
            }
            
            session()->forget('orders');

            return redirect()->route('orders_done')->with('success','Orden Creada Con Exito');

    }

    
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders_done')->with('delete','Orden Cancelada Con Exito');
    }
}
