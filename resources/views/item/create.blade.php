@extends('layouts.master')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  
<div class="content-header clearfix">
    <h1 class="pull-left">
        Add New Item
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
<form action="{{ route('shops.items.new')}}" role="form" class="form-horizontal" method="post" accept-charset="utf-8">            
<div class="panel panel-default panel-search">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper"><label class="control-label" for="customer_name" title="">Customer Name</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>
                        <select id="customer" class="js-example-data-array form-control" tabindex="-1" aria-hidden="true">
                            
                        </select>
                      </p>
                        <!-- <input type="text" name="customer_name" id="customer_name" autocomplete="off" class="form-control ui-autocomplete-input"> -->
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="15%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="10%">Unit</th>
                    <th width="15%">Unit Price</th>
                    <th width="15%">Total</th>
                    <th width="25%">Description</th>
                    <th width="25%"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(key, item) in list" class="items">
                    <!-- <input type="hidden" name="data[@{{ key }}][invoice_id]" value=" "> -->
                    <!-- <td><input v-model="item.product_code" type="text" data-type="productCode" name="data[@{{ key }}][product_code]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off" required=""></td> -->
                    <td><input v-model="item.product_name" type="text" data-type="productName" name="data[@{{ key }}][product_name]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off" required=""></td>
                    <td><input v-model="item.qty" type="number" name="data[@{{ key }}][qty]" id="quantity_1" class="form-control" autocomplete="off" required=""></td>
                    <td><input v-model="item.unit" type="text" name="data[@{{ key }}][unit]" id="unit_1" class="form-control" autocomplete="off" required=""></td>
                    <td><input v-model="item.price" type="number" name="data[@{{ key }}][price]" id="price_1" class="form-control" autocomplete="off" required=""></td>
                    <td>
                    <span>@{{ item.qty * item.price}}</span>
                    <input v-model="item.total" type="hidden" name="data[@{{ key }}][total]" id="total_1" class="form-control" value="@{{ item.qty * item.price}}"></td>
                    <td><input v-model="item.description" type="text" data-type="description" name="data[@{{ key }}][description]" id="description" class="form-control autocomplete_txt" autocomplete="off" required=""></td>
                    <td>
                        <a class="btn btn-success" type="button" v-on:click="optionClick"><i class="fa fa-plus"></i></a>
                        <a class="btn btn-danger delete" type="button" v-on:click="removeElement(key)"><i class="fa fa-minus"></i></a>
                        <!-- <button class="btn btn-danger delete" type="button" v-on:click="removeElement(key)"><i class="fa fa-minus"></i> Delete</button> -->
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
         <div class="col-md-12">
            <br>
            
            <!-- <a class="btn btn-default btn-flat" type="button" href="javascript:addBlankRow()"><i class="glyphicon glyphicon-plus-sign"></i> Add Blank Row</a> -->
            <!-- <p class="help-block" style=""><i class="glyphicon glyphicon-warning-sign"></i> Empty rows will be ignored.</p> -->
            <div class="row" style="margin-top: -40px;">
            
            </div>
            
        </div>
            
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Due date</label>
                            
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <input id="datepicker" type="text" id="due_date" name="due_date" value="" placeholder="due_date date" class="form-control datepicker" required="">                        
                            <span class="input-group-addon" id="basic-addon2"> <i class="fa fa-calendar"></i> </span>

                        </div>   
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label class="control-label" for="summary" title="">Summary</label>
                            
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <textarea class="form-control" id="summary"></textarea>

                        </div>   
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper"><label class="control-label" for="invoice_number" title="">Invoice Type</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="invoice_type" id="invoice_type" autocomplete="off" class="form-control ui-autocomplete-input">
                        
                    </div>
                </div> -->
                
                <!-- <div class="form-group">
                    <div class="col-md-4">
                        <div class="label-wrapper">
                        <label class="control-label" for="billing_name" title="">Billing Name</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="billing_name" id="billing_name" autocomplete="off" class="form-control ui-autocomplete-input">
                    </div>
                </div> -->
               <!--  <div class="form-group">
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
            <div class="col-md-3">
                <div class="form-group">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Discount</label>
                            
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <input v-model="discounted" type="number" name="discounted" id="discounted" class="form-control" autocomplete="off" required=""></td>
                             
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
            <div class="col-md-3">
                <div class="form-group">
                    <div class="col-md-3">
                        <div class="label-wrapper">
                            <label class="control-label" for="StartDate" title="">Tax</label>
                            
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                            <input v-model="tax" type="number" name="tax" id="tax" class="form-control" autocomplete="off" required=""></td>
                             <!-- <input type="number" name="rate" id="taxrate" autocomplete="off" class="form-control ui-autocomplete-input"> -->

                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <div class="control-group col-md-6 col-md-offset-6">
                <label class="control-label"><strong>Summary</strong></label>
                <div class="controls">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>Sub-total</td>
                                <td><span id="sub-total">@{{ subtotal |currency }}</span></td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>
                                    <div>
                                        <span id="tax_rate">@{{ tax_rate }}%</span>
                                    </div>
                                        
                                    
                                    <br>
                                    <span id="tax" >@{{ (subtotal/100) * tax_rate }}</span>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>Grand Total</td>
                                <td><span id="expertSubTotalWithTax">0.00</span></td>
                            </tr> -->
                            <tr>
                                <td>Dicount</td>
                                <td>
                                    <span id="discounted">

                                    @{{ discounted }}</span>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>Paid</td>
                                <td>
                                    <span id="paid">0.00</span>
                                </td>
                            </tr> -->
                            <tr>
                                <td>Due Amount</td>
                                <td>
                                    <strong><span id="due_amount">@{{ subtotal + ((subtotal/100) * tax) - discounted|currency}}</span></strong>
                                    <input type="hidden" name="amount_total" value="@{{ subtotal + ((subtotal/100) * tax)}}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <div>
                <button type="button" class="btn btn-primary btn-flat col-xs-6 col-xs-offset-2 create"><i class="glyphicon glyphicon-ok"></i> Create New Item</button>&nbsp;
                <button type="reset" class="btn btn-default btn-flat col-xs-offset-2">Reset</button>
            </div>
    </div>                           
</div>


    {{ csrf_field() }}
    <!-- <label for="billing_date" class="col-md-2 hidden-sm hidden-xs control-label">Billing Date: *</label>
    <div class="col-md-2 col-xs-6">
        <div class="input-group">
            <input id="datepicker" type="text" name="billing_date" value="" placeholder="billing date" class="form-control datepicker" required="">                        
            <span class="input-group-addon" id="basic-addon2"> <i class="fa fa-calendar"></i> </span>

        </div>                
    </div> -->
    
    <!-- <label for="status" class="col-md-2 hidden-sm hidden-xs control-label">Status: </label>
    <div class="col-md-2 col-xs-6">
        <select name="status" id="status" class="form-control" required="required">
            <option value="Unpaid">Unpaid</option>
            <option value="Paid">Paid</option>
            <option value="Partial">Partial</option>
            <option value="Due">Due</option>
            <option value="Overdue">Overdue</option>
            <option value="Draft">Draft</option>
        </select>
    </div> -->
    <!-- <label for="due_date" class="col-md-2 hidden-sm hidden-xs control-label">Due Date: *</label>
    <div class="col-md-2 col-xs-6">
        <div class="input-group">
            <input id="datepicker" type="text" name="due_date" value="" placeholder="Due Date" class="form-control datepicker" required="">                        
                <span class="input-group-addon" id="basic-addon2"> <i class="fa fa-calendar"></i> </span>
        </div>                
    </div>
    <span class="visible-sm visible-xs"><br><br></span>
    <label for="client" class="col-md-1 hidden-sm hidden-xs control-label">Client: *</label>
    <div class="col-md-2 col-xs-6">
        <select  v-model="selected" id="client" class="form-control" required="required">
            <option v-for="item in clients" v-bind:value="item.id" >@{{ item.name }}</option>
        </select>
        <input type="hidden" name="client_id" value="@{{ selected }}">
    </div>
    <div class="col-md-1 col-xs-6">
        <a href="#" class="btn btn-default btn-flat col-xs-12">
        <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Client"><i class="fa fa-user-plus"></i></span></a>
    </div>
</div> -->
<!-- <div class="form-group">
    <label for="currency" class="col-md-2 hidden-sm hidden-xs control-label">Currency: </label>
    <div class="col-md-2 col-xs-6">
        <select name="currency" id="currency" class="form-control">
        <option value="8">Australian Dollar</option>
        <option value="18">Brazilian Real</option>
        <option value="27">Canadian Dollar</option>
        <option value="41">Czech Koruna</option>
        <option value="43">Danish Krone</option>
        <option value="49" selected="">Euro</option>
        <option value="60">Hong Kong Dollar</option>
        <option value="183">Israeli New Sheqel</option>
        <option value="1000">Japanese Yen</option>
        <option value="104">Malaysian Ringgit</option>
        <option value="102">Mexican Peso</option>
        <option value="111">New Zealand Dollar</option>
        <option value="116">Philippine Peso</option>
        <option value="52">Pound Sterling</option>
        <option value="123">Russian Ruble</option>
        <option value="130">Singapore Dollar</option>
        <option value="129">Swedish Krona</option>
        <option value="30">Swiss Franc</option>
        <option value="1001">Taiwan New Dollar</option>
        <option value="151">US Dollar</option>
    </select>
    </div>
    <label for="tax_rate" class="col-md-2 hidden-sm hidden-xs control-label">Tax Rate: </label>
    <div class="col-md-2 col-xs-6">
        <div class="input-group">
            <input type="text" name="tax" v-model="tax" placeholder="Tax Rate" class="form-control" aria-describedby="basic-addon2">                        
            <span class="input-group-addon" id="basic-addon2"> % </span>
        </div>                
    </div>
    <span class="visible-sm visible-xs"><br><br></span>
    <label for="discount" class="col-md-1 hidden-sm hidden-xs control-label">Discount: </label>
    <div class="col-md-2 col-xs-6">
        <input type="text" name="discount" value="0" id="discount" placeholder="Discount" class="form-control">                
        </div>
    <div class="col-md-1 col-xs-6">
        <select name="discount_type" id="discount_type" class="form-control">
            <option value="%"> % </option>
            <option value="$"> $ </option>
        </select>
    </div>
</div> -->
<!-- <div class="form-group">
    <label for="note" class="col-md-2 col-xs-6 control-label">Send to Client: </label>
    <div class="col-md-3 col-xs-6">
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default active">
            <input type="radio" name="send" value="0" id="option1" autocomplete="off" checked=""> No
          </label>
          <label class="btn btn-default">
            <input type="radio" name="send" value="1" id="option2" autocomplete="off"> Yes
          </label>
        </div>
    </div>
    <span class="visible-sm visible-xs"><br><br></span>
    <label for="note" class="col-md-1 hidden-sm hidden-xs control-label">Note: </label>
    <div class="col-md-6 col-xs-12">
        <textarea name="note" cols="40" rows="1" id="note" placeholder="Invoice note" class="form-control"></textarea>                </div>
</div> -->

</form>
</div>
<script type="text/javascript" src="{{ url('js/vue.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery-3.1.1.min.js')}}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script type="text/javascript" src="{{ url('js/bootstrap-datepicker.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script type="text/javascript">
    //Datepicker
    $(document).ready(function(){
        
    });
    $('#datepicker').datepicker({
      autoclose: true
    });
    $("#datepicker").datepicker({
        format: 'yyyy-mm-dd'
    });
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
        var data = {!! $customers !!}
        $(".js-example-data-array").select2({
          data: data
        });

        $(".js-example-data-array-selected").select2({
          data: data
        });
    

</script>
  <script>
    new Vue({
        el: '#app',
        data: {      
             list: [{
                product_code: '',
                product_name: '',
                price: '',
                qty: '',
                total: '',
                description : ''
             }],
             // listResult: '',
             tax : 0,
             discounted: 0,
             clients: {!! $customers !!},
             selected: ''
             
             
        },
        computed: {
          listStatus: function () {
            return (this.list.length > 0) ? true : false; 
          },
          total: function (){
            return this.list.item.qty  *  this.list.item.price;
          },
          subtotal:function()
          {
            return this.list.reduce(function(total,item){
                return  total + (item.qty * item.price);
            },0);
          },
          tax_rate:function(){
             return this.tax;
          },
          tax_amt:function(){
             return (subtotal/100) * this.tax;
          },
          // discounted:function(){
          //    return ((subtotal/100) * this.tax) - this.discounted;
          // },
      },
        methods: {
          optionClick: function() {
            this.list.push({
              itemNo: '',
              itemName: '',
              price: '',
              qty: '',
              total: '',
              description: ''
            });
          },
          total:function(){
            var total=0;
            this.list.forEach(function(){
              total=this.item.qty*this.item.price;
            });
            return total;
          },

          removeElement: function (index) {
            console.log(index);
            if(index > 0)
            {
                this.list.splice(index, 1);    
            }
          },
          
        }
    })
    
    
    $('.create').click(function(){
        debugger;
        items = [];
        $('.items').each(function(){
            arr = {
                item_name : $(this).find('#itemName_1').val(),
                quantity :$(this).find('#quantity_1').val(),
                unit : $(this).find('#unit_1').val(),
                price : $(this).find('#price_1').val(),
                total : $(this).find('#total_1').val(),
                description : $(this).find('#description').val()
            };

            if(arr.quantity != "", arr.price !="")
            {
                items.push(arr);
            }
        });

        if($('#due_date').val() != "" && $('#customer').val() != ""){
            postdata = {
                items : items,
                due_date : $('#due_date').val(),
                discount : $('#discounted').val(),
                tax : $('#tax').text(),
                sub_total : $('#sub-total').text(),
                total : $('#due_amount').text(),
                summary : $('#summary').val(),
                customer : $('#customer').val()

            };
            
            $.ajax({
                url : "{{ route('shops.items.save') }}" ,
                type: "POST",
                data : {
                  "_token": "{{ csrf_token() }}",
                  'data': postdata
                },
                dataType: "html",
                success: function(data, textStatus, jqXHR)
                { 
                  alert(data);
                  //$(".box").html(data);

                    // jQuery('#customer_id').html(data);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                  alert("Someting wrong");
                }
              });
        }
        
    });
  </script>

@endsection