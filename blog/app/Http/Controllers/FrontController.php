<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function index(product $product)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function create(product $product)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, product $product)
    {

            if($request->hasFile('image'))
            {

             $pic = front::pluck('id')->last();
             $request->file('image');
             $name='FrontVariant'.$pic.'.png';
            Storage::putFileAs('public/images/front',$request->file('image'),$name);
            //  $request->image->storeAs('public/collar',$name);


              $collar = new front;
              $collar->product_id=$product;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function show(product $product, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product, DummyModelClass $DummyModelVariable)
    {
        //
    }
}
