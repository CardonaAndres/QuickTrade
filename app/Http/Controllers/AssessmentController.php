<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Producer_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{
    public function __construct()
    {
       $this->middleware('can:producer_details.index')->only('comments_product');   
    }

    public function index($producer_detail)

    {   $pdetail = Producer_detail::join('products','producer_details.product_id', '=', 'products.id')
        ->select('products.*','producer_details.*','producer_details.id as producer_detail_id')->find($producer_detail);
          
       $comments = Assessment::where('producer_detail_id',$producer_detail)->paginate(5);
    
       return view('assessment.index',compact('pdetail','comments'));
    }

    public function comments_done($id_user, $id_product) { 
    
        $pdetail = Producer_detail::join('products','producer_details.product_id', '=', 'products.id')
        ->select('products.*','producer_details.*','producer_details.id as producer_detail_id')->find($id_product);

        $assessments = Assessment::where('user_id',$id_user)->where('producer_detail_id',$id_product)->paginate(5);
            
        return view('assessment.done',compact('assessments','pdetail'));
    }

    public function comments_product($id_product, $id_user){

        $comments = Assessment::where('producer_detail_id',$id_product)->get();

        return view('producer_detail.comments',compact('comments','id_product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = $request->validate([
            'comment_ad'=>'required',
            'user_id'=>'required',
            'producer_detail_id'=>'required',
        ]);

        Assessment::create($comment);

        return redirect()->route('coments.index',$request->producer_detail_id);
    }

  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
          $comment  = Assessment::find($request->assessment);

          return view('assessment.edit',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)

    {   
    
        $comment_new = Assessment::create([
            'user_id'=>$request->user_id,
            'comment_ad'=>$request->comment_ad,
            'producer_detail_id'=>$request->producer_detail_id,
        ]);

        $assessment = Assessment::find($request->comment_id);

        $assessment->delete();

        return redirect()->route('comments_done',[Auth::user()->id,$request->producer_detail_id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request){

        $assessment = Assessment::find($request->assessment);

        $assessment->delete();

        return redirect()->route('comments_done',[Auth::user()->id,$request->pdetail])
        ->with('danger','Comentario Eliminado Con Exito');
    }
}
