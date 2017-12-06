<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Customer;

class ItemController extends Controller
{
    public function index()
    {
        $customer = Customer::select('id','customer_code','customer_name','closing_date')->get();
        echo json_encode($customer);exit;
        $invoices = Invoice::with('client')->paginate(5);
        // echo json_encode($invoices);exit;
        //echo json_encode($invoices[0]->client);exit;
        return view('invoice.invoice',compact('invoices'));
        //return view('invoice.invoice');
    }

    public function create()
    {
        $customers = Customer::select('id','customer_name')->get();
        $name = array();
        $name[] = array('id'=>0,'text'=>'');
        // $name[] = array('id'=>'','text'=>'');
        foreach ($customers as $key => $value) {
            
         $name[] = array('id'=>$value['id'],'text'=>$value['customer_name']);
         // $name[] = array('id'=>$value['id'],'text'=>$value['customer_name']);
        }
        $customers = json_encode($name);
        //$items = Product::all();
        return view('item.create',compact('customers'));
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
