@extends('layouts.app')

	<style>


* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
}

/*---------------------------------------------*/
a {
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  color: #d33f8d;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #acacac; }
input:-moz-placeholder { color: #acacac; }
input::-moz-placeholder { color: #acacac; }
input:-ms-input-placeholder { color: #acacac; }

textarea::-webkit-input-placeholder { color: #acacac; }
textarea:-moz-placeholder { color: #acacac; }
textarea::-moz-placeholder { color: #acacac; }
textarea:-ms-input-placeholder { color: #acacac; }

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}

.txt1 {
  /* font-family: Raleway-Regular; */
  font-size: 16px;
  color: #999999;
  line-height: 1.4;
}

.bo1 {
  border-bottom: 1px solid #999999;
}

.hov1:hover {
  border-color: #080808;
}


/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background: #0250c5;
  background: -webkit-linear-gradient(bottom, #0250c5, #d43f8d);
  background: -o-linear-gradient(bottom, #0250c5, #d43f8d);
  background: -moz-linear-gradient(bottom, #0250c5, #d43f8d);
  background: linear-gradient(bottom, #0250c5, #d43f8d);
  position: relative;
  z-index: 1;
}

.container-login100::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: linear-gradient(to left, #000000de, #2029284f),url({{asset('images/login_bg.jpg')}});
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.wrap-login100 {
  width: 450px;
  background: #fff;
  border-radius: 3px;
  overflow: hidden;
}



/*------------------------------------------------------------------
[  ]*/
.login100-form {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.login100-form-title {
  /* font-family: Raleway-Black; */
  font-size: 30px;
  color: #333333;
  line-height: 1.2;
  text-transform: uppercase;
  text-align: center;

  width: 100%;
  display: block;
}


/*---------------------------------------------*/
.wrap-input100 {
  position: relative;
  width: 100%;
  z-index: 1;
}

.input100 {
  /* font-family: Raleway-SemiBold; */
  font-size: 18px;
  line-height: 1.2;
  color: #686868;

  display: block;
  width: 100%;
  background: #e6e6e6;
  height: 62px;
  border-radius: 3px;
  padding: 0 30px 0 65px;
}


/*------------------------------------------------------------------
[ Focus ]*/
.focus-input100 {
  display: block;
  position: absolute;
  border-radius: 3px;
  bottom: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  box-shadow: 0px 0px 0px 0px;
  color: rgba(4, 23, 134, 0.267);
}

.input100:focus + .focus-input100 {
  -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
  animation: anim-shadow 0.5s ease-in-out forwards;
}

@-webkit-keyframes anim-shadow {
  to {
    box-shadow: 0px 0px 60px 20px;
    opacity: 0;
  }
}

@keyframes anim-shadow {
  to {
    box-shadow: 0px 0px 60px 20px;
    opacity: 0;
  }
}

.symbol-input100 {
  font-size: 24px;
  color: #999999;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  position: absolute;
  border-radius: 25px;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding-left: 23px;
  pointer-events: none;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus + .focus-input100 + .symbol-input100 {
  color: #355570;
  padding-left: 18px;
}

/*==================================================================
[ Restyle Checkbox ]*/

.input-checkbox100 {
  display: none;
}

.label-checkbox100 {
  /* font-family: Raleway-Regular; */
  font-size: 16px;
  color: #999999;
  line-height: 1.2;

  display: block;
  position: relative;
  padding-left: 26px;
  cursor: pointer;
}

.label-checkbox100::before {
  content: "\f00c";
  font-family: FontAwesome;
  font-size: 13px;
  color: transparent;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  width: 18px;
  height: 18px;
  border-radius: 3px;
  background: #fff;
  border: 2px solid #080808;
  left: 0;
  top: 48%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}

.input-checkbox100:checked + .label-checkbox100::before {
  color: #d33f8d;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
  /* font-family: Raleway-Bold; */
  font-size: 16px;
  line-height: 1.5;
  color: #fff;
  text-transform: uppercase;

  width: 100%;
  height: 62px;
  border-radius: 3px;
  background: linear-gradient(to right, #4b79a1, #283e51);
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background: #333333;
}

/*------------------------------------------------------------------
[ Button sign in with ]*/
.btn-face,
.btn-google {
  /* font-family: Raleway-Bold; */
  font-size: 16px;
  line-height: 1.2;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  width: calc((100% - 10px) / 2);
  height: 40px;
  border-radius: 3px;
  border: 1px solid #e6e6e6;
  background-color: #fff;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}


.btn-face {
  color: #3b5998;
}

.btn-face i {
  font-size: 20px;
  margin-right: 10px;
  padding-bottom: 1px;
}

.btn-google {
  color: #555555;
}

.btn-google img {
  width: 19px;
  margin-right: 10px;
  padding-bottom: 1px;
}


.btn-face:hover,
.btn-google:hover {
  border-color: #0c0c0c;
}



/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: white;
  border: 1px solid #c80000;
  border-radius: 3px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 8px;
  pointer-events: none;

  /* font-family: Raleway-SemiBold; */
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f12a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  color: #c80000;
  font-size: 15px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 13px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}

/*//////////////////////////////////////////////////////////////////
[ responsive ]*/

@media (max-width: 480px) {
  .wrap-login100 {
    padding-left: 15px;
    padding-right: 15px;
  }
}


.text-center {
    text-align: center!important;
}

.p-b-55 {
    padding-bottom: 55px;
}

.p-t-25 {
    padding-top: 25px;
}

.p-t-115 {
    padding-top: 115px;
}

.m-b-16 {
    margin-bottom: 16px;
}

.m-b-37 {
    margin-bottom: 37px;
}

.p-r-50 {
    padding-right: 50px;
}
.p-l-50 {
    padding-left: 50px;
}
.p-b-30 {
    padding-bottom: 30px;
}
.p-t-77 {
    padding-top: 77px;
}

.w-full {
    width: 100%;
}

	</style>

	
<!--===============================================================================================-->

@section('content')

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form method="POST" class="login100-form validate-form"  action="{{ url('login_starter') }}">
					@csrf
                   
					<span class="login100-form-title p-b-55">
                        <img style="width:80%" src="{{asset('images/26.png')}}" >
					</span>

					<div class="wrap-input100 validate-input m-b-37" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus required="" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                            <i class="fas fa-envelope-open-text"></i>
						</span>
					</div>

					<input type="hidden" name="allowed_role" value="starter">

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input id="password" type="password" class="input100" name="password"  placeholder="Password" required autocomplete="current-password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-lock"></i>
						</span>
					</div>

					<div class="custom-control custom-checkbox p-b-25 p-t-25">
						<input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						<label style="font-size:1.1rem;" class="custom-control-label font-weight-normal" for="remember">Remember me</label>
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button  type="submit" class="login100-form-btn">
							Login
						</button>
					</div>


                    @if ($errors->any())
					<div class="text-danger font-20 pt-2" style="text-align: center;background: #2f4f4f0f; margin-top: 21px;">
						<ul class="list-unstyled">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				    @endif

					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Not a member?
						</span>

						<a  class="txt1 bo1 hov1" href="{{ route('register_starter') }}">
							Sign up now							
						</a>
					</div>

					

				</form>
			</div>
		</div>
	</div>
	
	


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>


@endsection
