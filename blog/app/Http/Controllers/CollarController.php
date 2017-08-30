<?php

namespace App\Http\Controllers;

use App\product;
use DummyFullModelClass;
use App\collar;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollarController extends Controller
{

    public function index( $product)

    {
      //  return  ($product);
     $product_id=$product;
     $items=collar::where('front_id','=',$product_id)->get();
     return view('product.ItemGallary',compact('items','product_id'));
    //  return view('product.Parts.Show.collar',compact('items','product_id'));


    }

    public function create( $product)
    {
         //return  ('create');
       return view('product.Parts.Create.collar',compact('product'));
        // s

    }



    public function store(Request $request,  $product)
    {

      if($request->hasFile('image'))
      {

       $pic = collar::pluck('id')->last();
       $request->file('image');
       $name='collarVariant'.$pic.'.png';
      Storage::putFileAs('public/images/collar',$request->file('image'),$name);
      //  $request->image->storeAs('public/collar',$name);


        $collar = new collar;
        $collar->front_id=$product;
        $collar->pattern = $name;
        $collar->rate = $request->rate;
        $collar->desc = $request->desc;
        $collar->save();
      }
      else{
        return ('unsucess');
      }
      return redirect('product/'.$product.'/collar');
    }



    public function show(product $product, DummyModelClass $DummyModelVariable)
    {
     return "Show";
    }



    public function edit( $product, $DummyModelVariable)
    {

        // collar::where('front_id','=',$product)->get();
        $item=collar::where('front_id','=',$product)->find($DummyModelVariable);
        return view('product.Parts.Edit.collar',compact('item'));
        // return $item ;
    }




    public function update(Request $request,  $product,  $DummyModelVariable)
    {
        // $id=$DummyModelVariable->DummyModelVariable;
        $collar =collar::find($DummyModelVariable);
        // $collar->front_id=$product;
        $name=$collar->pattern;
        if($request->hasFile('image'))
        {
          Storage::putFileAs('public/images/collar',$request->file('image'),$name);
        $collar->pattern = $name;
        }
        $collar->rate = $request->rate;
        $collar->desc = $request->desc;
        $collar->save();

        $product=$product;
        return redirect('product/'.$product.'/collar');
         // return $request->all();
        //
    }




    public function destroy( $product,  $DummyModelVariable)
    {
        // return $DummyModelVariable->all();
        $item=Collar::find($DummyModelVariable);
        $item->delete();
        return redirect('product/'.$product.'/collar');
    }
}
