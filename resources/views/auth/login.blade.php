@extends('layouts.app')

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
{{ csrf_field() }}
<div class="login-wrap">
	<div class="login-html" >
	<div style="width:100%;margin:auto;position:relative;width:100%;">
	<center><img src="img/IDBOOK_PN.png" style="max-width:100px;align:middle"></center>
	</div>
	<br/>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
                    <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
                    <input id="password" type="password" class="input" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" name="remember" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Login">
				</div>
				<center><p style="color:white;">Dont already have account <u><a href="{{url('/register')}}">SIGN UP</a></u></p></center>
				<div class="hr"></div>
				<div class="foot-lnk">

					<a class="btn btn-link" href="{{ url('/password/reset') }}">
                        Forgot Your Password?
                    </a>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
@endsection
