<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index()
	{
		$customers = Customer::get();
		$code  = array();//array('id'=>0,'text'=>'');
		$name = array();
		$code[] = array('id'=>0,'text'=>'');
		// $name[] = array('id'=>'','text'=>'');
		foreach ($customers as $key => $value) {
			
			$code[] = array('id'=>$value['id'],'text'=>$value['customer_code']);
			// $name[] = array('id'=>$value['id'],'text'=>$value['customer_name']);
		}
		$code = json_encode($code);
		// $name = json_encode($name);
		// echo json_encode($code);exit;
		// $name = Customer::select('id','customer_code')->get();
		// $code = Customer::select('id','customer_name')->get();
		// echo json_encode($name);exit;
		return view('customer.index',compact('customers','code'));
	}

	public function save(Request $request)
	{
		$this->validate($request, [
            'closing_date'  => 'required',
            'customer_code'     => 'required|integer',
            'customer_name'     => 'required|string|max:255'
        ]);
		// echo json_encode($request->all());exit;
		$customer = Customer::create($request->all());
        //$invoices->product()->createMany($request->get('data'));
        $request->session()->flash('alert-success', 'Customer was successful added!');
        return redirect()->route("shops.customer");
	}

	public function check($code)
	{
		$customer = Customer::select('id')->get();
		if(sizeof($customer) > 0)
		{
			return json_encode(array('result'=>False));
		}
		
		return json_encode(array('result'=>True));
	}

}
