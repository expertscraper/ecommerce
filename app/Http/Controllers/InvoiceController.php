<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Product;
use App\Customer;
use App\Item;

class InvoiceController extends Controller
{
    public function index()
    {
        //$customer = Customer::select('id','customer_code','customer_name','closing_date')->get();
        
        $invoices = Invoice::with('customer')->paginate(5);
        // echo json_encode($invoices);exit;
        //echo json_encode($invoices[0]->client);exit;
        return view('invoice.invoice',compact('invoices'));
        //return view('invoice.invoice');
    }

    public function create()
    {
        $customer = Customer::select('id','customer_name')->get();
        $items = Product::all();
        return view('invoice.addinvoice2',compact('customer','items'));
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
        echo json_encode($product);exit;
        return view('invoice.show',compact('product'));
    }

   
    public function edit($id)
    {
        $invoice = Invoice::with('item')
                    ->with('customer')
                    ->where('id',$id)->first();
        echo json_encode($invoice);exit;
        return view('invoice.addinvoice2',compact('invoice'));
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
