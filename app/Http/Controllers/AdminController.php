<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\User;
use App\Product;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function getAllClient()
    {
        $clients = Client::paginate(5);
    	return view('admin.client',compact('clients'));
    }
    // public function addClient()
    // {
    // 	return view('admin.addclient');
    // }
    // public function invoice()
    // {
    // 	return view('admin.invoice');
    // }
    // public function addinvoice()
    // {
    //     $clients = Client::select('id','name')->get();
    //     //$products = Product::all();
    // 	return view('admin.addinvoice2',compact('clients'));
    // }
    public function show()
    {

    }
    public function create()
    {
    	echo "Hello";
    }
    public function createClient(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|unique:clients,name|max:255',
            'email'     => 'required|unique:clients,email|max:255',
            'phone'     => 'required|string|max:255',
            'gender'    => 'required|string',
            'address'   => 'required|string',
            'city'      => 'required|string',
            'pincode'   => 'required|string',
        ]);
        
        $client = Client::create($request->all());
        $request->session()->flash('alert-success', 'Client was successful added!');
        return redirect()->route("clients");
    }
    public function editClient($id)
    {
        $client = Client::find($id);
        return view('admin.editclient',compact('client'));
        
    }
    public function updateClient(Request $request,$id)
    {
        $client = Client::find($id)->update($request->all());
        $request->session()->flash('alert-success', 'Client was successful Updated!');
        return redirect()->route("clients");

    }
    public function createInvoice(Request $request)
    {

    }


}
