<?php

namespace App\Http\Controllers;

use App\Models\Producer_detail;


use App\Models\Product;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class ProducerDetailController extends Controller
{

    public function __construct()
    {
       $this->middleware('can:producer_details.index')->only('index');
       $this->middleware('can:producer_details.create')->only('create');
       $this->middleware('can:producer_details.show')->only('show');
       $this->middleware('can:show2')->only('show2');
       $this->middleware('can:producer_details.store')->only('store');
       $this->middleware('can:producer_details.edit')->only('edit');
       $this->middleware('can:producer_details.update')->only('update');
       $this->middleware('can:producer_details.destroy')->only('destroy');

    }
    
    public function index()
    {
        
        $producer_details = Producer_detail::join('products','producer_details.product_id', '=', 'products.id')
            ->select('products.*', 'producer_details.*')->paginate(6);

            $products = Product::all();

           
        return view('all-products',compact('producer_details','products'));
    }

    public function producer_info($id_user,$id_pdetail){
        
         $user = User::find($id_user);

        return view('producer_detail.producer_info',compact('user','id_pdetail'));
    }

    public function search(Request $request){

        $product_id = $request->search_product;

        $product_find = Product::find($product_id);

        $products = Product::all();
        
            $producer_details = Producer_detail::join('products','producer_details.product_id', '=', 'products.id')
            ->select('products.*', 'producer_details.*')->where('product_id',$product_id)->get();
    
            return view('producer_detail.search',compact('products','producer_details','product_find'));

  
    }

  
    public function create()
    {

        $products = Product::all();

        return view('producer_detail.create',compact('products'));
    }

   
    public function store(Request $request)
    {

        $producer_detail=$request->validate ([
            'product_location'=>'required',
            'quantity'=>'required',
            'weight'=>'required',
            'price'=>'required',
            'product_id'=>'required',
            'produceruser_id'=>'required',
            
        ]);

        Producer_detail::create($producer_detail);
     
         return redirect()->route('products.index')->with('Success','Producto Publicado Con Exito');
      
    }

    
    public function show(Producer_detail $producer_detail)
    {
        $product_id=$producer_detail->product_id;
        $produceruser_id=$producer_detail->produceruser_id;

        $product=Product::find($product_id);
        $users=User::find($produceruser_id);

       return view('producer_detail.show',compact('producer_detail','product','users'));
    }

    public function show2 (Producer_detail $producer_detail)
    {
        $product_id=$producer_detail->product_id;
        $produceruser_id=$producer_detail->produceruser_id;

        $product=Product::find($product_id);
        $users=User::find($produceruser_id);

       return view('producer_detail.show-private',compact('producer_detail','product','users'));
    }


   
    public function edit(Producer_detail $producer_detail)
    {
        $products = Product::all();

        return view('producer_detail.edit',compact('products','producer_detail'));
    }

    public function update(Request $request, Producer_detail $producer_detail)
    {
        $producer_detail_new=$request->validate([
            'product_location'=>'required',
            'quantity'=>'required',
            'weight'=>'required',
            'price'=>'required',
            'product_id'=>'required',
            'produceruser_id'=>'required',
            
        ]);
        $producer_detail->update($producer_detail_new);

        
        return redirect()->route('products.index',)->with('Success','Producto Actualizado Con Exitoo');
    }

   
    public function destroy(Producer_detail $producer_detail)
    {
        $producer_detail->delete();
        return redirect()->route('products.index')->with('Delete','Producto Eliminado Con Exito');
    }

}
