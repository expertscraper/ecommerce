<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ShopController extends Controller
{
    public function index()
    {
        //$invoices = Invoice::with('client')->paginate(5);
        //echo json_encode($invoices[0]->client);exit;
        return view('shops.category');
        //return view('invoice.invoice');
    }

    // public function create()
    // {
    //     $clients = Client::select('id','name')->get();
    //     $items = Product::all();
    //     return view('invoice.addinvoice2',compact('clients','items'));
    // }

}
