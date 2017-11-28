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
		return view('customer.index');
	}

	public function save()
	{
		echo json_encode($_POST);exit;
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
