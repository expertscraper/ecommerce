<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Product;
use App\Client;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('client')->paginate(5);
        //echo json_encode($invoices[0]->client);exit;
        return view('invoice.invoice',compact('invoices'));
        //return view('invoice.invoice');
    }

    public function create()
    {
        $clients = Client::select('id','name')->get();
        $items = Product::all();
        return view('invoice.addinvoice2',compact('clients','items'));
    }

    
    public function store(Request $request)
    {
        //dd($request->all());
        // $this->validate($request, [
        //     'due_date'  => 'required',
        //     'client_id'     => 'required',
        //     'itemNo'     => 'required|string|max:255',
        //     'itemName'    => 'required|string|max:255',
        //     'price'   => 'required|double',
        //     'qty'      => 'required|integer',
        //     'total'   => 'required|string',
        // ]);
        
        $invoices = Invoice::create($request->all());
        $invoices->product()->createMany($request->get('data'));
        $request->session()->flash('alert-success', 'Invoice was successful added!');
        return redirect()->route("invoices");

    }

   
    public function show($id)
    {
        $product = Product::with('invoice')
                ->where('invoice_id','=',$id)->get();
        return view('invoice.show',compact('product'));
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
