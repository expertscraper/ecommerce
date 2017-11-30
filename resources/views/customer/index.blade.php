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
            <form name="data_search" method="post" action="{{ route('shops.customer.search') }}">
            <div class="panel panel-default panel-search">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper">
                                    	<label class="control-label" for="SearchCategoryName" title="">Customer Code</label>
                                    	<!-- <div class="ico-help" title="A category name."><i class="fa fa-question-circle"></i></div> -->
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>
                                      <select class="js-example-data-array form-control" tabindex="-1" aria-hidden="true">
                                          
                                      </select>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="label-wrapper">
                                      <label class="control-label" for="SearchCategoryName" title="">Customer name</label>
                                      <div class="ico-help" title="A category name."><i class="fa fa-question-circle"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control text-box single-line" id="SearchCategoryName" name="SearchCategoryName" type="text" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="button" id="search-categories" class="btn btn-primary btn-search"><i class="fa fa-search"></i>Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </form>
            <!-- div class="panel panel-default">
                <div class="panel-body">
                    <div id="categories-grid" data-role="grid" class="k-grid k-widget">
                    <table></table>
                    </div>
                </div> -->
             <div class="box">
            <!-- <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div>
                <div class="row"><div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 223px;">Browser</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 155px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">CSS grade</th></tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Firefox 1.5</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Firefox 2.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Firefox 3.0</td>
                  <td>Win 2k+ / OSX.3+</td>
                  <td>1.9</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Camino 1.0</td>
                  <td>OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Camino 1.5</td>
                  <td>OSX.3+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Netscape 7.2</td>
                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Netscape Browser 8</td>
                  <td>Win 98SE+</td>
                  <td>1.7</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Netscape Navigator 9</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Mozilla 1.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1</td>
                  <td>A</td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          <!-- </div> -->
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
    var data = <?= $code ?>;
    //alert(data);
    $(".js-example-data-array").select2({
        data: data
      });

      $(".js-example-data-array-selected").select2({
        data: data
      });

</script>

@endsection