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
		// $customer_name = (!empty($_GET['keyword']))? $_GET['keyword'] : '';
		$customer_name = (!empty($_POST['keyword']))? $_POST['keyword'] : '';
		$customer = Customer::where('customer_name','LIKE','%'.$customer_name.'%')->paginate(1);

		return view('customer.index',compact('customer','customer_name'));
		// $code  = array();//array('id'=>0,'text'=>'');
		// $name = array();
		// $code[] = array('id'=>0,'text'=>'');
		// // $name[] = array('id'=>'','text'=>'');
		// foreach ($customers as $key => $value) {
			
		// 	$code[] = array('id'=>$value['id'],'text'=>$value['customer_name']);
		// 	// $name[] = array('id'=>$value['id'],'text'=>$value['customer_name']);
		// }
		// $code = json_encode($code);
		// $name = json_encode($name);
		// echo json_encode($code);exit;
		// $name = Customer::select('id','customer_code')->get();
		// $code = Customer::select('id','customer_name')->get();
		// echo json_encode($name);exit;
		// return view('customer.index',compact('customers'));
	}

	public function save(Request $request)
	{
		$this->validate($request, [
            'closing_date'  => 'required',
            'customer_code'     => 'required|integer',
            'customer_name'     => 'required|string|max:255'
        ]);

		$data = $request->all();
		$data['closing_date'] = date('Y-m-d',strtotime($data['closing_date']));
        
		$customer = Customer::create($data);
        //$invoices->product()->createMany($request->get('data'));
        $request->session()->flash('alert-success', 'Customer was successful added!');
        return redirect()->route("shops.customer");
	}

	public function check($code)
	{
		$customer = Customer::select('id')
					->where('customer_code',$code)->get();
		if(sizeof($customer) > 0)
		{
			return json_encode(array('result'=>False));
		}
		
		return json_encode(array('result'=>True));
	}

	public function search()
	{
		// if(isset($_POST))
		// {
			$customer_name = (!empty($_POST['keyword']))? $_POST['keyword'] : '';
			$customer = Customer::where('customer_name','LIKE','%'.$customer_name.'%')->paginate(1);

			// return response()->json([
	  //           'status' => 'success',
	  //           'errors' => false,
	  //           'data' => [
	  //               'rows' => json_decode($customer->toJson()),
	  //               'paginationMarkup' => $customer->render()
	  //           ]
	  //       ], 200);
			// return Response::json(View::make('customer.customer', ['customer' => $customer])->render());
			return view('customer.customer',compact('customer'));
		// }
		// else{
		// 	return "There is no results";//json_encode(array('result'=>False,'message'=>'Error'));
		// }
	}
	public function edit($id)
	{
		$customer = Customer::where('id',$id)->get();
		
		return view('customer.edit',compact('customer'));
	}

}
