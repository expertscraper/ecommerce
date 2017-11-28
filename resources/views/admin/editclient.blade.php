@extends('layouts.master')
@section('content')
<header class="head">
   <div class="main-bar row">
      <div class="col-lg-6">
         <h4 class="nav_top_align skin_txt">
            <i class="fa fa-user"></i>
            Edit Client
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
            <li class="breadcrumb-item active">Edit Client</li>
         </ol>
      </div>
   </div>
</header>
@if(count($errors))
<div class="callout callout-danger lead">
   <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif 
<div class="card">
   <div class="card-block m-t-35">
      <div>
         <h4>Personal Information</h4>
      </div>
      <form class="form-horizontal login_validator bv-form" id="tryitForm" action="{{ route('updateclient',$client->id)}}" method="post" novalidate="novalidate">
         {{ csrf_field() }}
         {{ method_field('PUT')}}
         <!-- <input type="hidden" name="id" value="{{ $client_id }}"> -->
         <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
         <!--<form role="form" id="tryitForm" action="add_user.html" class="form-horizontal" method="post" auete="on">-->
         <div class="row">
            <div class="col-xs-12">
               <div class="form-group row m-t-25">
                  <div class="col-lg-3 text-xs-center text-lg-right">
                     <label class="form-control-label">Profile Pic</label>
                  </div>
                  <div class="col-lg-6 text-xs-center text-lg-left">
                     <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-thumbnail text-xs-center">
                           <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMzEiIGhlaWdodD0iMTcxIj48cmVjdCB3aWR0aD0iMjMxIiBoZWlnaHQ9IjE3MSIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjExNS41IiB5PSI4NS41IiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjE0cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjMxeDE3MTwvdGV4dD48L3N2Zz4=" data-src="holder.js/100%x100%" alt="100%x100%" style="height: 100%; width: 100%; display: block;">
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                        <div class="m-t-20 text-xs-center">
                           <span class="btn btn-primary btn-file">
                           <span class="fileinput-new">Select image</span>
                           <span class="fileinput-exists">Change</span>
                           <input type="file" name="..."></span>
                           <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group row m-t-25">
                  <div class="col-lg-3 text-lg-right">
                     <label for="u-name" class="form-control-label">
                     Name *</label>
                  </div>
                  <div class="col-xl-6 col-lg-8">
                     <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                        </span>
                        <input type="text" name="name" id="u-name" class="form-control" data-bv-field="name" value="{{ $client->name }}">
                     </div>
                     <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the user name</small>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-3 text-lg-right">
                     <label for="email" class="form-control-label">Email
                     *</label>
                  </div>
                  <div class="col-xl-6 col-lg-8">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                        <input type="text" placeholder="" value="{{ $client->email }}" id="email" name="email" class="form-control" data-bv-field="email" required>
                     </div>
                     <!-- <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the email address</small><small class="help-block" data-bv-validator="regexp" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The input is not a valid email address</small> -->
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-3 text-lg-right">
                     <label for="phone" class="form-control-label">Phone
                     *</label>
                  </div>
                  <div class="col-xl-6 col-lg-8">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
                        <input type="text" placeholder=" " value="{{ $client->phone }}"id="phone" name="phone" class="form-control" data-bv-field="cell" required>
                     </div>
                     <!-- <small class="help-block" data-bv-validator="notEmpty" data-bv-for="cell" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the phone number</small><small class="help-block" data-bv-validator="regexp" data-bv-for="cell" data-bv-result="NOT_VALIDATED" style="display: none;">The phone number can only consist of numbers with 10 digits</small> -->
                  </div>
               </div>
               <div class="form-group gender_message row">
                  <div class="col-lg-3 text-lg-right">
                     <label class="form-control-label">Gender *</label>
                  </div>
                  <div class="col-xl-6 col-lg-8">
                     <div class="custom-controls-stacked">
                        <label class="custom-control custom-radio">
                        <input id="radio1" type="radio" name="gender" class="custom-control-input" data-bv-field="gender" value="Male" <?php if($client->gender == "Male") echo "checked"  ?> >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Male</span>
                        </label>
                        <label class="custom-control custom-radio">
                        <input id="radio2" type="radio" name="gender" class="custom-control-input" data-bv-field="gender" value="Female" <?php if($client->gender == "Female") echo "checked"  ?> >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Female</span>
                        </label>
                     </div>
                     <!-- <small class="help-block" data-bv-validator="notEmpty" data-bv-for="gender" data-bv-result="NOT_VALIDATED" style="display: none;">Gender is required</small> -->
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-3 text-lg-right">
                     <label for="address" class="form-control-label">Address
                     *</label>
                  </div>
                  <div class="col-xl-6 col-lg-8">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                        <input type="text" placeholder=" " value="{{ $client->address }}" id="address" name="address" class="form-control" data-bv-field="address1" required>
                     </div>
                     <!-- <small class="help-block" data-bv-validator="notEmpty" data-bv-for="address1" data-bv-result="NOT_VALIDATED" style="display: none;">Enter your address</small> -->
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-3 text-lg-right">
                     <label for="city" class="form-control-label">City
                     *</label>
                  </div>
                  <div class="col-xl-6 col-lg-8">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                        <input type="text" placeholder=" " value="{{ $client->city }}" name="city" id="city" class="form-control" data-bv-field="city" required>
                     </div>
                     <!-- <small class="help-block" data-bv-validator="notEmpty" data-bv-for="city" data-bv-result="NOT_VALIDATED" style="display: none;">City is required</small> -->
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-3 text-lg-right">
                     <label for="pincode" class="form-control-label">Pincode
                     *</label>
                  </div>
                  <div class="col-xl-6 col-lg-8">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                        <input type="text" placeholder=" " value="{{ $client->pincode }}" name="pincode" id="pincode" class="form-control" data-bv-field="pincode" required>
                     </div>
                     <!-- <small class="help-block" data-bv-validator="notEmpty" data-bv-for="pincode" data-bv-result="NOT_VALIDATED" style="display: none;">Pincode number is required</small><small class="help-block" data-bv-validator="regexp" data-bv-for="pincode" data-bv-result="NOT_VALIDATED" style="display: none;">Enter valid Pincode number</small> -->
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-lg-9 push-lg-3">
                     <button class="btn btn-primary" type="submit">
                     <i class="fa fa-user"></i>
                     Update User
                     </button>
                     <button class="btn btn-warning" type="reset" id="clear">
                     <i class="fa fa-refresh"></i>
                     Reset
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
@endsection