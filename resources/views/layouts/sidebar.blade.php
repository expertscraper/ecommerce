<ul class="sidebar-menu" data-widget="tree">
<li class="header">MAIN NAVIGATION</li>
<!-- <li class="treeview menu-open">
  <a href="#">
    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
  </a>
</li> -->
<li class="treeview">
  <a href="#">
    <i class="fa fa-list-alt"></i>
    <span>Estimate</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li @if (Request::is('shops/estimates')) class="active" @endif ><a href="{{ route('shops.estimates') }}"><i class="fa fa-circle-o"></i> Estimate</a></li>
    <li @if (Request::is('shops/estimates/new')) class="active" @endif><a href="{{ route('shops.estimates.new') }}"><i class="fa fa-circle-o"></i> Add New Estimate</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-list-alt"></i>
    <span>Invoice</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li @if (Request::is('shops/invoices')) class="active" @endif ><a href="{{ route('shops.invoices') }}"><i class="fa fa-circle-o"></i> Invoices</a></li>
    <li @if (Request::is('shops/invoices/new')) class="active" @endif><a href="{{ route('shops.invoices.new') }}"><i class="fa fa-circle-o"></i> Add New Invoice</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-list-alt"></i>
    <span>Category</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li @if (Request::is('shops/category')) class="active" @endif ><a href="{{ route('shops.category') }}"><i class="fa fa-circle-o"></i> Categories</a></li>
    <li @if (Request::is('shops/category/new')) class="active" @endif><a href="{{ route('shops.category.new') }}"><i class="fa fa-circle-o"></i> Add New Category</a></li>
  </ul>
</li>
</ul>