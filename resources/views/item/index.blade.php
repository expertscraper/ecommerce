@extends('layouts.master')
@section('content')
<header class="head">
   <div class="main-bar row">
      <div class="col-lg-6">
         <h4 class="nav_top_align skin_txt">
            <i class="fa fa-user"></i>
            Items
         </h4>
      </div>
      <div class="col-lg-6">
         <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
            <li class="breadcrumb-item">
               <a href="{{ route('shops.index') }}">
               <i class="fa fa-home" data-pack="default" data-tags=""></i>
               Dashboard
               </a>
            </li>
            <li class="breadcrumb-item">
               <a href="{{ route('shops.items') }}">Items</a>
            </li>
            <li class="breadcrumb-item active">Item List</li>
         </ol>
      </div>
   </div>
</header>
<div class="flash-message">
   @foreach (['danger', 'warning', 'success', 'info'] as $msg)
   @if(Session::has('alert-' . $msg))
   <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
   @endif
   @endforeach
</div>
<div class="col-lg-12">
   <div class="box  box-primary">
      <div class="box-header with-border">
         <h3 class="box-title pull-right">
            <div class="box-tools ">
               <a href="{{ route('shops.items.new')}}" class="btn btn-primary btn-xs"> <i class="fa fa-plus"></i> New Item</a>
            </div>
         </h3>
      </div>
      <div class="box-body">
         <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline no-footer">
            <div class="row">
               <div class="col-sm-12">
                  <div class="pull-right">
                     <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                  </div>
                  <div class="pull-left">
                     <div class="dataTables_length" id="DataTables_Table_0_length">
                        <label>
                           Show 
                           <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control input-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                           </select>
                           entries
                        </label>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
            <table class="table table-bordered table-striped table-hover datatable dataTable no-footer" id="DataTables_Table_0" role="grid">
               <thead>
                  <tr role="row">
                     <th width="10%" class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 100px;">Invoice</th>
                     <th width="10%" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 91px;">Item Name</th>
                     <th width="10%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 91px;">Status</th>
                     <th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;">Quantity</th>
                     <th width="10%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 91px;">Price</th>
                     <th width="10%" class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 92px;">Total</th>
                     <th width="10%" class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 103px;">Grand Total</th>
                     <th width="10%" class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"  style="width: 107px;">Due Date</th>
                     <th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 148px;">Action</th>
                  </tr>
               </thead>
               <tbody>
               	@foreach($items as $item)
	                  <tr role="row" class="odd">
	                  <!-- <td>{{ $item->id }}</td> -->
	                  <td class="sorting_1">#{{ $item->invoice->invoice_id }} </td>
	                  <td class="text-right">{{ $item->item_name }} </td>
	                  <td><span class="label label-danger">{{ ($item->approval_status == "")? "Undefined" :$item->approval_status }} </span></td>
	                  <!-- <td><a href="{{ $item->id }}">{{ $item->invoice->name }}</a> </td> -->
	                  <td class="text-right">{{ $item->quantity }} </td>
	                  <td class="text-right">{{ $item->price }} </td>
	                  <td class="text-right">{{ $item->total }}</td>
	                  <td class="text-right">{{ $item->invoice->total }} </td>
	                  <td class="text-right">{{ date('Y/m/d',strtotime($item->invoice->issue_date)) }} </td>
	                  <td>
	                  	<a class="btn btn-info btn-xs" href="" data-rel="tooltip" data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a>
	                  	<a href="" data-rel="tooltip" data-placement="top" title="" class="btn btn-xs btn-primary" data-original-title="Download item"><i class="fa fa-download"></i> </a>
	                     <!-- <a href="#" data-rel="tooltip" data-toggle="ajax-modal" data-placement="top" title="" class="btn btn-xs btn-warning" data-original-title="Add Payment"><i class="fa fa-usd"></i> </a> -->
	                     <a href="#" data-rel="tooltip" data-placement="top" title="" class="btn btn-xs btn-success" data-original-title="Edit item"><i class="fa fa-pencil"></i></a>
	                     <a class="btn btn-danger btn-xs btn-delete" data-rel="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
	                  </td>
	               </tr>
	               @endforeach
               </tbody>
            </table>
            <div class="row">
               <div class="col-sm-12">
                  <div class="pull-left"></div>
                  <div class="pull-right">
                     <div class="dataTables_paginate paging_bs_normal" id="DataTables_Table_0_paginate">
                     
                        <!-- <ul class="pagination">
                           <li class="prev disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;Previous</a></li>
                           <li class="active"><a href="#">1</a></li>
                           <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li><a href="#">4</a></li>
                           <li><a href="#">5</a></li>
                           <li class="next"><a href="#">Next&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a></li>
                        </ul> -->
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End  Hover Rows  -->
</div>
@endsection