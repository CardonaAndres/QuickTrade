<?php

namespace App\Http\Controllers;

use App\Models\Producer_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
       $this->middleware('can:products-options')->only('products_options');
       $this->middleware('can:products.index')->only('index');
       $this->middleware('can:products.create')->only('create');
       $this->middleware('can:products.show')->only('show');
       $this->middleware('can:products.store')->only('store');
       $this->middleware('can:products.edit')->only('edit');
       $this->middleware('can:products.update')->only('update');
       $this->middleware('can:products.destroy')->only('destroy');
    }

    public function products_options(){
         $products = Product::paginate(5);

        return view('product.options',compact('products'));
    }

    public function all_products(){

       $producer_details = Producer_detail::all();

        $producer_details = Producer_detail::join('products','producer_details.product_id', '=', 'products.id')
            ->select('products.*', 'producer_details.*')->paginate(6);

            $products = Product::all();

     
        return view('all-products',compact('producer_details','products'));

    }

    public function index()
    {
        $user=Auth::user()->id;
        
        $products = Product::all();

        $producer_details = Producer_detail::join('products','producer_details.product_id', '=', 'products.id')
            ->select('products.*', 'producer_details.*')->where('produceruser_id',$user)->paginate(6);
           
        return view('product.index',compact('producer_details','products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
       $this->validate($request, [
        'name'=>'required',
        'description'=>'required',
        'image'=>'required|image|max:5080',   
       ]);

       $image = $request->file('image');
       $imageName = $image->getClientOriginalName();

       $rutaImage=$image->storeAs('product_images',$imageName,['disk'=>'public']);

       $dataP = $request->only('name','description');
       $dataP['image'] = $rutaImage;

       Product::create($dataP);
       
        return redirect()->route('products-options')->with('success','Agregado Con Exito');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

           if($request->hasFile('image')){
            
            $product->name = $request->name;
            $product->description = $request->description;
                   // dd($product->image);               
                $image = $request->file('image');

                $imageName = $image->getClientOriginalName();

                $rutaImage=$image->storeAs('product_images',$imageName,['disk'=>'public']);

                Storage::disk('public')->delete($product->image);

                $product->image = $rutaImage;

           }

           $product->update();
        
       
     
        return redirect()->route('products-options')->with('success','Editado Con Exito');
        
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->image);
        $product->delete();
        return redirect()->route('products-options')->with('delete','Eliminado Con Exito');;
    }
}
