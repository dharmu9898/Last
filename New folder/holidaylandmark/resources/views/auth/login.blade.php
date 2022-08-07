<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Transparent Login Form UI</title> -->
    <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>

   <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  user-select: none;
}
.bg-img{
  background: url('bg.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}

.bg-img:after{
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0,0,0,0.7);
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 370px;
  transform: translate(-50%,-50%);
  background: rgba(255,255,255,0.04);
  box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
}
.content header{
  color: white;
  font-size: 33px;
  font-weight: 600;
  margin: 0 0 35px 0;
  font-family: 'Montserrat',sans-serif;
}
.field{
  position: relative;
  height: 45px;
  width: 100%;
  display: flex;
  background: rgba(255,255,255,0.94);
}
.field span{
  color: #222;
  width: 40px;
  line-height: 45px;
}
.field input{
  height: 100%;
  width: 100%;
  background: transparent;
  border: none;
  outline: none;
  color: #222;
  font-size: 16px;
  font-family: 'Poppins',sans-serif;
}
.space{
  margin-top: 16px;
}
.show{
  position: absolute;
  right: 13px;
  font-size: 13px;
  font-weight: 700;
  color: #222;
  display: none;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}
.pass-key:valid ~ .show{
  display: block;
}
.pass{
  text-align: left;
  margin: 10px 0;
}
.pass a{
  color: white;
  text-decoration: none;
  font-family: 'Poppins',sans-serif;
}
.pass:hover a{
  text-decoration: underline;
}
.field input[type="submit"]{
  background: #3498db;
  border: 1px solid #2691d9;
  color: white;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}
.field input[type="submit"]:hover{
  background: #2691d9;
}
.login{
  color: white;
  margin: 20px 0;
  font-family: 'Poppins',sans-serif;
}
.links{
  display: flex;
  cursor: pointer;
  color: white;
  margin: 0 0 20px 0;
}
.facebook,.google{
  width: 100%;
  height: 45px;
  line-height: 45px;
  margin-left: 0px;
}
.facebook{
  margin-left: 0;
  background: #4267B2;
  border: 1px solid #3e61a8;
}
.google{
  background: #db4c3e;
  border: 1px solid #df2060;
}
.facebook:hover{
  background: #3e61a8;
}
.instagram:hover{
  background: #df2060;
}
.links i{
  font-size: 17px;
}
i span{
  margin-left: 8px;
  font-weight: 500;
  letter-spacing: 1px;
  font-size: 16px;
  font-family: 'Poppins',sans-serif;
}
.signup{
  font-size: 15px;
  color: white;
  font-family: 'Poppins',sans-serif;
}
.signup a{
  color: #3498db;
  text-decoration: none;
}
.signup a:hover{
  text-decoration: underline;
}

   </style>
  </head>


  <body>
  
  
    <div class="bg-img">
      <div class="content">
      <div class="bg-imgs">
        <header>Login Form</header>
        <form method="POST" action="{{ route('login') }}">
         @csrf
          <div class="field">
            <span class="fa fa-user"></span>
             <input id="email" style="height:30px;" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          </div>
          <div class="col-md-12">
            
          @error('email')
    <span class="invalid-feedback" role="alert">
        <strong style="color:white">{{ $message }}</strong>
    </span>
@enderror
                        <span class="show">SHOW</span>
                      </div>
<div class="field space">
            <span class="fa fa-lock"></span>
            <input id="password" style="height:30px;" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="current-password">


            <span class="show">SHOW</span>
          </div>

          <div class="col-md-12">
            
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong  style="color:white">{{ $message }}</strong>
    </span>
@enderror
            <span class="show">SHOW</span>
          </div>
<div class="pass">
@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
          </div>
<div class="field">
<button type="submit" style="width: 400px;background-color:#5b98e0;font-size:20px;color:white" class="btn btn-primary">
                                    {{ __('Login') }}

                                    
                                </button>
          </div>
          


<div class="login">
Or login with</div>

<div class="links">
<div class="google">
            <i class="fab fa-google"><span> <a   style="color:white;text-decoration:none;" href="{{ url('auth/google')}}" class=""> Sign-up with Google</a></span></i>
          </div>

</div>
<div class="links">
          <div class="facebook">
            <i class="fab fa-facebook-f"><span> <a   style="color:white;text-decoration:none;" href="{{ url('auth/facebook')}}" class="btn btn-neutral btn-icon"> Sign-up with facebook</a></span></i>
          </div>

</div>



</form>
<div class="signup">
Don't have account?
<a href="#" class="float-right">Create an account </a>
        </div>
</div>
</div>
<script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>
  </body>
</html>
