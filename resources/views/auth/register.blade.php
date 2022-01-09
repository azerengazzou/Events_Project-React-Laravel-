@extends('voyager::auth.master')

@section('content')
    <div class="login-container">
        <p>{{ __('voyager::Register.signin_below') }}</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group form-group-default" id="nameGroup">
                <label>{{ __('Name') }}</label>
                <div class="controls">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('voyager::generic.name') }}">
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default" id="emailGroup">
                <label>{{ __('E-Mail Address') }}</label>
                <div class="controls">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('voyager::generic.email')}}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                
                </div>
            </div>

            <div class="form-group form-group-default" id="emailGroup">
                <label>{{ __('Password') }}</label>
                <div class="controls">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" autofocus placeholder="{{ __('voyager::generic.password')}}"/>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default" id="emailGroup">
                <label>{{ __('Confirm Password') }}</label>
                <div class="controls">
                    
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="{{ __('voyager::generic.password')}}">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group" id="rememberMeGroup">
                <div class="controls">
                    <input type="checkbox" name="remember" id="remember" value="1"><label for="remember" class="remember-me-text">{{ __('voyager::generic.remember_me') }}</label>
                </div>
            </div>

            <div class="row mb-0">
                    <button  type="submit" class="btn btn-primary">
                        {{ __('voyager::generic.store') }}
                    </button>
            </div>

        </form>

        <div style="clear:both"></div>

        @if(!$errors->isEmpty())
            <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div> <!-- .login-container -->
@endsection
@section('post_js')

    <script>
        var btn = document.querySelector('button[type="submit"]');
        var form = document.forms[0];
        var email = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        btn.addEventListener('click', function(ev){
            if (form.checkValidity()) {
                btn.querySelector('.signingin').className = 'signingin';
                btn.querySelector('.signin').className = 'signin hidden';
            } else {
                ev.preventDefault();
            }
        });
        email.focus();
        document.getElementById('emailGroup').classList.add("focused");

        // Focus events for email and password fields
        email.addEventListener('focusin', function(e){
            document.getElementById('emailGroup').classList.add("focused");
        });
        email.addEventListener('focusout', function(e){
            document.getElementById('emailGroup').classList.remove("focused");
        });

        password.addEventListener('focusin', function(e){
            document.getElementById('passwordGroup').classList.add("focused");
        });
        password.addEventListener('focusout', function(e){
            document.getElementById('passwordGroup').classList.remove("focused");
        });

    </script>
@endsection
