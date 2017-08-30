<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::all();
        return view('product.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $product = new product;
        $product->pattern = $request->pattern;
        $product->desc = $request->desc;
        $product->save();

        return redirect()->action('ProductController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);

        return view('product.OptionsList',compact('id'));
       // return view('product.viewProduct',compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item=product::find($id);
        $item->delete();
         return redirect('/product');


    }

    public function add(Request $request)
    {
        //dd($request);

        if($request->hasFile('image')){
            $request->file('image');
         $id= $request->product_id;
         $pic = front::orderBy('id', 'desc')->pluck('id')->first();
         $name='shirtVariant'.$pic.'.png';
         $request->image->storeAs('public/shirt',$name);

         $shirt = new front;
         $shirt->product_id=$id;
         $shirt->pattern=$name;
         $shirt->rate=$request->rate;
         $shirt->desc=$request->desc;
        $shirt->save();
        return ' true';

        }
        else
        {
            return('sorry');
        }

    }
}
