<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/sidebar.css" rel="stylesheet">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<style type="text/css">
		/*.show-on-hover:hover > ul.dropdown-menu {
	    display: block;    
	}*/
	</style>
</head>
<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <!-- <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>  -->
            <li class="dropdown2">

              <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			    <li><a href="#">Action</a></li>
			    <li><a href="#">Another action</a></li>
			    <li><a href="#">Something else here</a></li>
			    <li role="separator" class="divider"></li>
			    <li><a href="#">Separated link</a></li>
			  </ul> -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
            	<li><a href="" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i>Dashboard</a></li>
                <li >
                	<a href="" data-toggle="collapse" data-target="#submenu-2">
                		<i class="fa fa-tachometer"></i>  Invoices
                	</a>
                </li>
                <li><a href=""><i class="fa fa-edit"></i>  Create Invoice</a></li>
                <li>
                	<a href="" data-toggle="collapse" data-target="#submenu-2">
                		<i class="fa fa-archive"></i>  Customers
                	</a>
                </li>
                <li><a href=""><i class="fa fa-user-plus"></i>  Create Customer</a></li>		
                <li>
                	<a href="" data-toggle="collapse" data-target="#submenu-2">
                		<i class="fa fa-trophy"></i>  Products
                	</a>
                </li>
                <li><a href=""><i class="fa fa-cart-plus"></i>  Create Product</a></li>
                <li>
                	<a href="" data-toggle="collapse" data-target="#submenu-2">
                		<i class="fa fa-trophy"></i>  Users
                	</a>
                </li>
                <li><a href=""><i class="fa fa-cart-plus"></i>  Add User</a></li>
                <li><a href="#"><i class="fa fa-cart-plus"></i>  Setting</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1>Welcome Admin!</h1>
                    
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</body>
</html>