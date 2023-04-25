<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            // Get all order from database
            $orders = Order::all();
    
            // Return view with cars 
            return view('cart', compact('cars'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carsAdminCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $order = new Order();

        $order->order_name = $request->order_name;
        $order->rental_id = $request->rental_id;
        $order->order_id = $request->order_id;
        $order->customer_id = $request->customer_id;
        $order->admin_id = $request->admin_id;
        $order->order_date = $request->order_date;


        $order->save();

        return redirect('/cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);

        return view('cart', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);
        return view('carsAdminEdit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);
        $order->order_name = $request->order_name;
        $order->rental_id = $request->rental_id;
        $order->order_id = $request->order_id;
        $order->customer_id = $request->customer_id;
        $order->admin_id = $request->admin_id;
        $order->order_date = $request->order_date;
        $order->save();

        return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect('/carsAdmin');
    }
}
