<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function custom()
    {
        //Customising  Page Is shown Here 

         return view('custom');//,compact('parts'));
    }
    
    public function index()
    {
        $order_id=order::pluck('order_id');
        $n= count($order_id);
        return view('orders',compact('order_id','n'));
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
        //Accepting Order From user  
        $order = new order;
        $order->shirt = $request->shirt;
        $order->collar = $request->collar;
        $order->sleeve = $request->sleeve;
        $order->button = $request->button;
        $order->pipe = $request->pipe;
        $order->cuff = $request->cuff;
        $order->save();
        return( 'succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
    
    public function sample(Request $request)
    {
       //return $request->all();
       //shows shirt according to selected order(from the index() using ajax 
        $order_id=$request->order_id;
        $shirt=order::where('order_id','=',$order_id)->get();
        return $shirt;
    }

}
