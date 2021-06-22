<?php

namespace App\Http\Controllers;

use App\Models\PhysicalStore;
use Illuminate\Http\Request;

class PhysicalStoreController extends Controller
{
    //
    function viewPhysicalStore()
    {
        return view('system.stores.physical_store');
    }
    function sellProduct(Request $req)
    {
        $req->validate([
            'customer_name' => ['required', 'min:3', 'max:30', 'regex:/^[a-zA-Z ]+$/'],
            'customer_address' => ['required' ,'min:3' ,'max:50'],
            'customer_phone' => ['required', 'numeric', 'digits_between:11,15'],
            'quantity' => ['required', 'min:1', 'max:20'],
            'total_price' => ['required', 'min:1']
        ]);

        $pr = new PhysicalStore();
        $pr->customer_name = $req->input('customer_name');
        $pr->address = $req->input('customer_address');
        $pr->phone = $req->input('customer_phone');
        $pr->product_id = $req->input('product_id');
        $pr->product_name = $req->input('product_name');
        $pr->unit_price = $req->input('unit_price');
        $pr->quantity = $req->input('quantity');
        $pr->total_price = $req->input('total_price');
        $pr->payment_type = $req->input('payment_type');
        $pr->status = "sold";

        $pr->save();
        $req->session()->flash('confirmation', 'Product Added');

        return redirect()->route('view-physical-store');
    }
}
