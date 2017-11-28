@extends('layouts.master')
@section('content')
<header class="head">
   <div class="main-bar row">
      <div class="col-lg-6">
         <h4 class="nav_top_align skin_txt">
            <i class="fa fa-user"></i>
            Client List
         </h4>
      </div>
      <div class="col-lg-6">
         <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
            <li class="breadcrumb-item">
               <a href="{{ route('home') }}">
               <i class="fa fa-home" data-pack="default" data-tags=""></i>
               Dashboard
               </a>
            </li>
            <li class="breadcrumb-item">
               <a href="{{ route('clients') }}">Clients</a>
            </li>
            <li class="breadcrumb-item active">Client List</li>
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
            <a href="{{ route('addclient')}}" class="btn btn-primary btn-xs"> <i class="fa fa-plus"></i> New Client</a>
         </div>
      </h3>
   </div>
   <div class="box-body">
      <!-- <div class="table-responsive"> -->
      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline no-footer">
         <div class="row">
            <div class="col-sm-12">
               <div class="pull-right">
                  <div id="DataTables_Table_0_filter" class="dataTables_filter">
                     <label><input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                  </div>
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
                  <th width="10%" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 91px;">Id</th>
                  <th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 147px;">Client Name</th>
                  <th width="15%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 147px;">Email</th>
                  <th width="10%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 147px;">Phone</th>
                  <th width="10%" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 92px;">Gender</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach($clients as $client)
               <tr role="row" class="odd">
                  <td>{{ $client->id }}</td>
                  <td>{{ $client->name }}</td>
                  <td>{{ $client->email }}</td>
                  <td>{{ $client->phone }}</td>
                  <td>{{ $client->gender }}</td>
                  <td>
                     <!-- <a class="btn btn-info btn-xs" href="" data-rel="tooltip" data-placement="top" title="" data-original-title="View" data-toggle="modal" data-target="#modal-default"><i class="fa fa-eye"></i></a>                                                                    <a href="http://ci.elantsys.com/invoices/pdf/e3aaeaf7-7dcf-450f-969f-50fcde63a1b7" data-rel="tooltip" data-placement="top" title="" class="btn btn-xs btn-primary" data-original-title="Download Invoice"><i class="fa fa-download"></i> </a> -->
                     <!-- <a href="" data-rel="tooltip" data-toggle="ajax-modal" data-placement="top" title="" class="btn btn-xs btn-warning" data-original-title="Add Payment"><i class="fa fa-usd"></i> </a> -->
                     <a href="{{ route('editClient', $client->id ) }}" data-rel="tooltip" data-placement="top" title="" class="btn btn-xs btn-success" data-original-title="Edit Invoice"><i class="fa fa-pencil"></i></a>
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
                     {{ $clients->links() }}
                  </div>
               </div>
               <div class="clearfix">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End  Hover Rows  -->
<div class="modal fade in" id="modal-default" style="display: none; padding-right: 17px;">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Default Modal</h4>
         </div>
         <div class="modal-body">
            <p>One fine body…</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
@endsection