
        @include('headfoot/header')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="login-form">
<form method="POST" action="{{ route('login') }}">
            @csrf

        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
        <!-- Email Address -->

            <input type="email" for="email" id="email" class="form-control" placeholder="Votre Email" name="email" :value="old('email')" :value="old('email')" required autofocus>
        </div>

        <!-- Password -->

        <div class="form-group">
            <input type="password" for="password" class="form-control" id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password"placeholder="Password" required="required">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
        </div>
        <div class="clearfix">

                    <!-- Remember Me -->
            <label class="pull-left checkbox-inline" for="remember_me" class="inline-flex items-center"><input type="checkbox">{{ __('Remember me') }}</label>
            </div>
            <br>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <br><br>
                <!-- Session Status -->
                <x-auth-session-status style="color:green" class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors style="color:red" class="mb-4" :errors="$errors" />
            </div>
        </div>        
    </form>
    <p class="text-center"><a href="{{ route('register') }}"><b>Create an Account</b></a></p>
</div>
</body>
</html>                                		

@include('headfoot/footer')

<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>


