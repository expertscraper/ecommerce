<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ url('css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/login.css')}}" />
    <link href="{{ url('css/blue.css')}}" rel="stylesheet"/>

    <!-- end of page level css -->
    <style type="text/css">
        #register{
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <!-- Notifications -->
           <div id="notific">
            </div>

            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <div id="wrapper">
                        <div id="register" class="animate form">
                            <form action="{{ route('register') }}" autocomplete="on" method="post" role="form" id="register_here">
                                <h3 class="black_bg">
                                    <!-- <img src="http://joshadmin.com/assets/img/logo.png" alt="josh logo"> -->
                                    <br>Sign Up</h3>
                                    
                                    {{ csrf_field() }}
                                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label style="margin-bottom:0px;" for="first_name" class="youmail">
                                            <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            First Name
                                        </label>
                                        <input id="name" name="name" required type="text" placeholder="Su Pyae"
                                               value="{{ old('name') }}" required autofocus>
                                         @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif      
                                        <div class="col-sm-12">
                                            
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label style="margin-bottom:0px;" for="email" class="youmail">
                                            <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            E-mail
                                        </label>
                                        <input id="email" name="email" value="{{ old('email') }}" required type="email"
                                               placeholder="mysupermail@mail.com"/>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <div class="col-sm-12">
                                            
                                        </div>
                                    </div>

                                    <!-- <div class="form-group{{ $errors->has('email_confirm') ? ' has-error' : '' }}">
                                        <label style="margin-bottom:0px;" for="email" class="youmail">
                                            <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Confirm E-mail
                                        </label>
                                        <input id="email_confirm" name="email_confirm" required type="email"
                                               placeholder="mysupermail@mail.com" value=""/>
                                        <div class="col-sm-12">
                                            
                                        </div>
                                    </div> -->

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label style="margin-bottom:0px;" for="password" class="youpasswd">
                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Password
                                        </label>
                                        <input id="password" name="password" required type="password" placeholder="Password" />
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        <div class="col-sm-12">
                                            
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label style="margin-bottom:0px;" for="password-confirm" class="youpasswd">
                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Confirm Password
                                        </label>
                                        <input id="password-confirm" name="password-confirm" required type="password" placeholder="Confirm Password" />
                                        <div class="col-sm-12">
                                            
                                        </div>
                                    </div>
                                <p class="signin button">
                                    <input type="submit" class="btn btn-success" value="Sign Up" />
                                </p>
                                <p class="change_link">
                                    <a href="{{ route('login')}}" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Back</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ url('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    
    <!-- end of global js -->
</body>
</html>