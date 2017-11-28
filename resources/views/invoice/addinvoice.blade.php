@extends('layouts.master')

@section('content')
<header class="head">
    <div class="main-bar row">
        <div class="col-lg-6">
            <h4 class="nav_top_align skin_txt">
                <i class="fa fa-user"></i>
                Invoices
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
                    <a href="{{ route('invoices') }}">Invoices</a>
                </li>
                <li class="breadcrumb-item active">Invoice List</li>
            </ol>
        </div>
    </div>
</header>

<div id="invoice">
        <div class="panel panel-default" v-cloak>
            <!-- <div class="panel-heading">
                <div class="clearfix">
                    <span class="panel-title">Create Invoice</span>
                    <a href="" class="btn btn-default pull-right">Back</a>
                </div>
            </div> -->
            <div class="panel-body">
                <div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>Invoice No.</label>
            <input type="text" class="form-control" v-model="form.invoice_no">
            <p v-if="errors.invoice_no" class="error">@{{errors.invoice_no[0]}}</p>
        </div>
        <div class="form-group">
            <label>Client</label>
            <input type="text" class="form-control" v-model="form.client">
            <p v-if="errors.client" class="error">@{{errors.client[0]}}</p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Client Address</label>
            <textarea class="form-control" v-model="form.client_address"></textarea>
            <p v-if="errors.client_address" class="error">@{{errors.client_address[0]}}</p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" v-model="form.title">
            <p v-if="errors.title" class="error">@{{errors.title[0]}}</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label>Invoice Date</label>
                <input type="date" class="form-control" v-model="form.invoice_date">
                <p v-if="errors.invoice_date" class="error">@{{errors.invoice_date[0]}}</p>
            </div>
            <div class="col-sm-6">
                <label>Due Date</label>
                <input type="date" class="form-control" v-model="form.due_date">
                <p v-if="errors.due_date" class="error">@{{errors.due_date[0]}}</p>
            </div>
        </div>
    </div>
</div>
<hr>
<div v-if="errors.products_empty">
    <p class="alert alert-danger">@{{errors.products_empty[0]}}</p>
    <hr>
</div>
<table class="table table-bordered table-form">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="product in form.products">
            <td class="table-name" :class="{'table-error': errors['products.' + $index + '.name']}">
                <textarea class="table-control" v-model="product.name"></textarea>
            </td>
            <td class="table-price" :class="{'table-error': errors['products.' + $index + '.price']}">
                <input type="text" class="table-control"  v-model="product.price">
            </td>
            <td class="table-qty" :class="{'table-error': errors['products.' + $index + '.qty']}">
                <input type="text" class="table-control" v-model="product.qty">
            </td>
            <td class="table-total">
                <span class="table-text">@{{product.qty * product.price}}</span>
            </td>
            <td class="table-remove">
                <span @click="remove(product)" class="table-remove-btn">&times;</span>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td class="table-empty" colspan="2">
                <span @click="addLine" class="table-add_line">Add Line</span>
            </td>
            <td class="table-label">Sub Total</td>
            <td class="table-amount">@{{subTotal}}</td>
        </tr>
        <tr>
            <td class="table-empty" colspan="2"></td>
            <td class="table-label">Discount</td>
            <td class="table-discount" :class="{'table-error': errors.discount}">
                <input type="text" class="table-discount_input" v-model="form.discount">
            </td>
        </tr>
        <tr>
            <td class="table-empty" colspan="2"></td>
            <td class="table-label">Grand Total</td>
            <td class="table-amount">@{{grandTotal}}</td>
        </tr>
    </tfoot>
</table>
            </div>
            <div class="panel-footer">
                <a href="" class="btn btn-default">CANCEL</a>
                <button class="btn btn-success" @click="create" :disabled="isProcessing">CREATE</button>
            </div>
        </div>
    </div>
<!-- <form id="listing" method="post" action="{{ url('invoice/create') }}">
    <div class="field columns">
        <div class="field-label is-normal column is-narrow">
         <label class="label is-2">Invoice Name :</label>
        </div>
        <div class="field-body">
         <div class="field is-grouped ">
            <p class="control">
              <input name="invoice_name" class="input is-3" type="text" placeholder="Name">
          </p>
        </div>
    </div>
    </div>
    
    {{ csrf_field() }}
		<div class="columns is-desktop">
		<div class="column" align="center">Item Name</div>
		<div class="column" align="center"># of items</div>
		<div class="column" align="center">Price</div>
		<div class="column" align="center">Total</div>
		<div class="column" align="center"></div>

		</div>
		<ul v-show="listStatus">
		  <li v-for="(key, item) in list" style="margin-bottom: 5px;">
	      	<div class="col-xs-6 form-group">
	            <label>Label1</label>
	            <input class="form-control" type="text"/>
	        </div>
	        <div class="col-xs-6 form-group">
	            <label>Label2</label>
	            <input class="form-control" type="text"/>
	        </div>
		      <div class="columns is-desktop">
		        <div class="column"><input type="text" class="form-control" name="item[]" v-model="item.item"></div>
		        <div class="column"><input type="number" class="form-control" name="qty[]" v-model="item.qty" placeholder="Quantity"></div>
		        <div class="column"><input type="number" class="form-control" name="price[]" v-model="item.price" placeholder="Price"></div>
		        <div class="column"><input type="text" class="form-control" name="total[]" v-model="item.total" placeholder="Total" value="@{{ item.qty * item.price | currency}}" disabled></div>
		        <div class="column">
		        <a class="delete is-medium" href="#" v-on:click="removeElement(index)"></a>
		        </div>

		      </div>
	       
	      </li>
	    </ul>
	    <button type="button" class="button is-dark is-focused" v-on:click="optionClick">+ Add Item</button>
      <div class="field has-addons has-addons-right">
        <p class="control">
          <label class="label">SubTotal: @{{ subtotal |currency }}</label>
          <label class="label">Tax:&nbsp;&nbsp;&nbsp;<input type="text" name="tax" v-model="tax" ></label>
          <label class="label">Total:&nbsp;@{{ subtotal + ((subtotal/100) * tax) |currency}}<input type="hidden" name="total" v-model="total" value="@{{ subtotal + ((subtotal/100) * tax)}}"></label>
        </p>
      </div>
      <div class="block">
      <button class="button is-warning" >Create</button>
      </div>
	</form> -->
</div>	

<script type="text/javascript" src="{{ url('js/vue.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery.js')}}"></script>
  <script>
    new Vue({
        el: '#app',
        data: {      
             list: [],
             listResult: '',
             tax : 0,
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
          }
      },
        methods: {
          optionClick: function() {
            this.list.push({
              item: '',
              qty: '',
              price: '',
              total: '',
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
            this.list.splice(index, 1);
          },
          
        }
    })
    
  </script>
    
@endsection