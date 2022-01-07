<!DOCTYPE html>
<html>
<head>
    <title>Mosaico digital</title>
 <style>
   * {
box-sizing: border-box;
}

*:focus {
  outline: none;
}
body {
font-family: Arial;
background-color: #3498DB;
padding: 50px;
}
.login {
margin: 20px auto;
width: 300px;
}
.login-screen {
background-color: #FFF;
padding: 20px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #777;
}

.login-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #3498DB;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #2980B9;
}

.login-link {
  font-size: 12px;
  color: #444;
  display: block;
  margin-top: 12px;
}
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>





<div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Login</h1>
      </div>

      <div class="login-form">
        <div class="control-group">
      <form method="POST" action="{{ route('login') }}">
        @csrf

      <div class="text-centet">
          <p id="error"> </p>
        </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>

                 <div class="div">
                    <h5> <span class="icon icon-user"></span>    correo</h5>
                    <input id="email" type="email" class="login-field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i">
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">

                    <h5><span class="icon icon-key"></span>     Contraseña</h5>
                    <input id="password" type="password" class=" login-field form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                 </div>
              </div>
               <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>

              <button   type="submit" class="btn btn-primary">Iniciar Sesion</button>

            </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
