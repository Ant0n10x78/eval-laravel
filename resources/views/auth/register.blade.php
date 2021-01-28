
@include('headfoot/header')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign up</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="login-form">
<form method="POST" action="{{ route('register') }}">
            @csrf

        <h2 class="text-center">Sign up</h2>       
        <div class="form-group">
            <!-- Name -->
            <div>
            <input for="name" type="name" id="name" class="form-control" placeholder="Votre prénom" name="name" :value="old('name')">

            </div>

             <!-- Aftername -->
             <div>

                <input for="afterName" type="afterName" id="afterName" class="form-control" placeholder="Votre Nom de famille" name="afterName" :value="old('afterName')" required autofocus>
            </div>

            <!--BirthDate-->
            <div>

                <input for="birthDate" type="date" id="birthDate" class="form-control"  name="birthDate" :value="old('birthDate')" required autofocus>
            </div>

        <!-- Email Address -->

            <input type="email" for="email" id="email" class="form-control" placeholder="Votre Email" name="email" :value="old('email')" :value="old('email')" required autofocus>
        </div>

        <!-- Password -->

        <div class="form-group">
            <input type="password" for="password" class="form-control" id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password"placeholder="Votre Mot de Passe" required autofocus>
        </div>
            <!-- Confirm Password -->
            <div class="form-group">
            <input type="password" for="password_confirmation" class="form-control" id="password_confirmation"
                                type="password_confirmation"
                                name="password_confirmation"
                                required autocomplete="current-password" placeholder="Confirmez votre Mot de Passe" required autofocus>
        </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> {{ __('Créez votre compte !') }}</button>
        </div>

        <div class="clearfix">
                <!-- Session Status -->
                <x-auth-session-status style="color:green" class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors style="color:red" class="mb-4" :errors="$errors" />
            </div>
        </div>        
    </form>
    <p class="text-center"><a href="{{ route('login') }}"><b>{{ __('Already registered?') }}</b></a></p>
</div>
</body>
</html>                                		


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