@extends('layouts.master')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<div class="content-header clearfix">
    <h1 class="pull-left">
        Manage Customer
    </h1>
    <div class="pull-right">
        <a href="{{ route('shops.customer.new') }}" class="btn bg-orange">
            <i class="fa fa-plus-square"></i>
            Add new Customer
        </a>
        
    </div>
</div>
<div class="flash-message">
   @foreach (['danger', 'warning', 'success', 'info'] as $msg)
   @if(Session::has('alert-' . $msg))
   <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
   @endif
   @endforeach
</div>
<div class="content">
    <div class="form-horizontal">
        <div class="panel-group">
            <div class="panel panel-default panel-search">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper">
                                    	<label class="control-label" for="SearchCategoryName" title="">Customer Code</label>
                                    	 <div class="ico-help" title="A category name."><i class="fa fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                   <p>
                                      <select class="js-example-data-array form-control" tabindex="-1" aria-hidden="true">
                                          
                                      </select>
                                    </p>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper">
                                      <label class="control-label" for="SearchCategoryName" title="">Customer name</label>
                                      <div class="ico-help" title="customer name."><i class="fa fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control text-box single-line" id="customer_name" name="SearchCategoryName" type="text" value="{{ $customer_name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="button" id="search-customer" class="btn btn-primary btn-search"><i class="fa fa-search"></i>Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- div class="panel panel-default">
                <div class="panel-body">
                    <div id="categories-grid" data-role="grid" class="k-grid k-widget">
                    <table></table>
                    </div>
                </div> -->
             <div class="box">
                @include('customer.customer')
             
            </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
    
    // var data = [
    //     {
    //         id: 0,
    //         text: 'enhancement'
    //     },
    //     {
    //         id: 1,
    //         text: 'bug'
    //     },
    //     {
    //         id: 2,
    //         text: 'duplicate'
    //     },
    //     {
    //         id: 3,
    //         text: 'invalid'
    //     },
    //     {
    //         id: 4,
    //         text: 'wontfix'
    //     }
    // ];
    //alert(data);
    // $(".js-example-data-array").select2({
    //     data: data
    //   });

    //   $(".js-example-data-array-selected").select2({
    //     data: data
    //   });
      
      $("#search-customer").click(function(){
          customer_name = $("#customer_name").val();
          $.ajax({
            url : "{{ route('shops.customer') }}" ,
            type: "POST",
            data : {
              "_token": "{{ csrf_token() }}",
              'keyword': customer_name
            },
            dataType: "html",
            success: function(data, textStatus, jqXHR)
            { 
              //alert(respnose);
              $(".box").html(data);

                // jQuery('#customer_id').html(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              alert("Someting wrong");
            }
          });
      });

     
</script>

@endsection