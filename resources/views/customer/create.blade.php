@extends('layouts.master')

@section('content')
<div class="content-header clearfix">
    <h1 class="pull-left">
        Add New Customer
    </h1>
    <!-- <div class="pull-right">
        <a href="" class="btn bg-orange">
            <i class="fa fa-plus-square"></i>
            Save
        </a>
        
    </div> -->
</div>
<div class="content">
<div class="form-horizontal">
<form name="data">
<div class="panel panel-default panel-search">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-5">
            	<div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Customer Code</label>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                            <input type="text" name="customer_code" id="customer_code" autocomplete="off" class="form-control ui-autocomplete-input" size=40>

                        </div>   
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Customer Name</label>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                             <input type="text" name="customer_name" id="customer_name" autocomplete="off" class="form-control ui-autocomplete-input" size=60>

                        </div>   
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                            <label class="control-label" for="postal_code" title="">Postal Code</label>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                            <input type="text" name="postal_code" id="postal_code" autocomplete="off" class="form-control ui-autocomplete-input" size=40>

                        </div>   
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                            <label class="control-label" for="postal_code" title="">Street Address</label>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                            <input type="text" name="street_1" id="street_1" autocomplete="off" class="form-control ui-autocomplete-input" size=40>

                        </div>  
                        <div class="input-group">
                            <input type="text" name="street_2" id="street_2" autocomplete="off" class="form-control ui-autocomplete-input" size=40>
                            
                        </div> 
                    </div>
                </div>
                <div class="form-group">
                	<div class="col-md-4"></div>
                	<div class="col-md-8"><input type="checkbox" id="bill_check">Set as billing name</div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper"><label class="control-label" for="phone_number" title="">Phone Number</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                    	<input type="text" name="phone_number" id="phone_number" autocomplete="off" class="form-control ui-autocomplete-input">
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper"><label class="control-label" for="fax_number" title="">Fax Number</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="fax_number" id="fax_number" autocomplete="off" class="form-control ui-autocomplete-input">
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Closing date</label>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                            <input id="datepicker" type="text" name="closing_date" value="" placeholder="closgin date" class="form-control datepicker" required="">                        
                            <span class="input-group-addon" id="basic-addon2"> <i class="fa fa-calendar"></i> </span>

                        </div>   
                    </div>
                </div>
               <!--  <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper"><label class="control-label" for="invoice_number" title="">Invoice Type</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="invoice_type" id="invoice_type" autocomplete="off" class="form-control ui-autocomplete-input">
                        
                    </div>
                </div> -->
               <!--  <div class="form-group">
                    <div class="col-md-4">
              
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                        <label class="control-label" for="billing_name" title="">Billing Name</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="billing_name" id="billing_name" autocomplete="off" class="form-control ui-autocomplete-input">
                    </div>
                </div> -->
                <!-- <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                        <label class="control-label" for="billing_name" title="">Person in charge</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="billing_name" id="billing_name" autocomplete="off" class="form-control ui-autocomplete-input">
                    </div>
                </div> -->
            </div>


            <div class="col-md-7">
            	<div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Billing Name</label>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                             <input type="text" name="billing_name" id="billing_name" autocomplete="off" class="form-control ui-autocomplete-input" size=60>

                        </div>   
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Billing Postal Code</label>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                             <input type="text" name="billing_code" id="billing_code" autocomplete="off" class="form-control ui-autocomplete-input" size=60>

                        </div>   
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Billing Address</label>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                             <input type="text" name="billing_address_1" id="billing_address_1" autocomplete="off" class="form-control ui-autocomplete-input" size=60>

                        </div>  
                        <div class="input-group">
                             <input type="text" name="billing_address_2" id="billing_address_2" autocomplete="off" class="form-control ui-autocomplete-input" size=60>

                        </div>  
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Billing date</label>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group">
                            <input id="datepicker" type="text" name="billing_date" value="" placeholder="billing date" class="form-control datepicker" required="">                        
                            <span class="input-group-addon" id="basic-addon2"> <i class="fa fa-calendar"></i> </span>

                        </div>   
                    </div>
                </div>

                <!-- <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                        <label class="control-label" for="billing_name" title="">Client Name</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="company_name" id="company_name" autocomplete="off" class="form-control ui-autocomplete-input">
                    </div>
                </div> -->
            </div>
        </div>
        <div class="row">
            
            
            <div>
            	<button type="button" id="save" class="tn bg-orange btn-flat col-xs-6 col-xs-offset-2"><i class="fa fa-plus-square"></i> Create Customer</button>&nbsp;
                <button type="reset" class="btn btn-default btn-flat col-xs-offset-2">Reset</button>
            </div>
        </div>
    </div>                           
</div>
</form>
</div>
</div>
<!-- <script type="text/javascript" src="{{ url('js/jquery-3.1.1.min.js')}}"></script> -->

@endsection

@section('script')

<script type="text/javascript">
	
	$("#customer_code").on('change', function(){
	      code = $(this).val();
	      $.ajax({
		    type:'GET',
		    url: code+"/check",
		    //data: code,
		    dataType:'json'
		}).done(function(data){
			if(data.result == false)
			{
				alert("Already Exit!");
			}
		});
	});

	$("#bill_check").on('click',function(){
		
		if($("#bill_check").is(':checked')){
			
			$('#billing_name').val($('#customer_name').val());
			$('#billing_code').val($('#postal_code').val());
			$('#billing_address_1').val($('#street_1').val());
			$('#billing_address_2').val($('#street_2').val());
		}else{
			$('#billing_name').val("");
			$('#billing_code').val("");
			$('#billing_address_1').val("");
			$('#billing_address_2').val("");
		}
			
	});

	$("#save").on('click',function(){
		data = $("data").serialize();
		alert(data);
		// $.ajax({
		//     type:'POST',
		//     url: "save",
		//     data: data,
		//     dataType:'json'
		// }).done(function(data){
		// 	if(data.result == false)
		// 	{
		// 		alert("Already Exit!");
		// 	}
		// });
	});

</script>

@endsection