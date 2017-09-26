<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>BUS Login</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/maruti-login.css" />
    </head>
    <body>
        <div id="loginbox">            
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="control-group normal_text"> <h3><img src="img/logo2.png" alt="Logo" /></h3></div>
                        <div class="control-group">
                            <div>
                            
                                <div class="main_input_box">

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            

                           
                                <span class="add-on"><i class="icon-user"></i></span><input id="email" type="email"  name="email" placeholder="Username" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                           
                        </div>
                        
                                </div>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <div>
                            
                                <div class="main_input_box">

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            

                            
                            
                                <span class="add-on"><i class="icon-lock"></i></span><input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                            
                        </div>
                                </div>
                            </div>
                        </div>

                        
                        

                        <div class="form-group" align="center">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Login
                                </button>

                            </div>
                        </div>
                        <br>
                    </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/maruti.login.js"></script> 
    </body>

</html>
