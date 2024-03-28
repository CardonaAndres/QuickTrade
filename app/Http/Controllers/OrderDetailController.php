<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Producer_detail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class OrderDetailController extends Controller
{
    public function __construct()
    {
       $this->middleware('can:producer_details.index')->only('index');
       $this->middleware('can:producer_details.show')->only('show');
       $this->middleware('can:producer_details.destroy')->only('destroy');

    }

    public function index()
    {     
       $order_details = Order_detail::join('orders','order_details.order_id', '=', 'orders.id')
       ->join('producer_details','order_details.producer_detail_id', '=', 'producer_details.id')
       ->select('orders.*', 'producer_details.*','producer_details.produceruser_id','order_details.*')
       ->where('produceruser_id',Auth::user()->id)
       ->get();

       return view('order_detail.index',compact('order_details'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Order_detail $order_detail)
    {

        $producer_detail = Producer_detail::find($order_detail->producer_detail_id);
        $order = Order::find($order_detail->order_id);
        $product = Product::find($producer_detail->product_id);
        $user = User::find($order->consumer_id);
        

        return view('order_detail.show',compact('producer_detail','order','user','product','order_detail'));
    }

    
    public function destroy(Order_detail $order_detail)
    {
        $order_detail->delete();

        return redirect()->route('order_details.index');
    }
}
