@include('inc.header')


<section class="wc-section login">
      <div class="w-layout-vflex wc-container v-center">
        <div class="w-layout-vflex wc-admin-login-wrapper">
          <h1 class="wc-heading">{{ __('Confirm Password') }}</h1>
          <br>
          <p>{{ __('Please confirm your password before continuing.') }}</p>
         <p>Did you 
            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
          </p>  
          <div class="wc-form-wrapper mw-400 top-40 w-form">
            <form id="email-form" name="email-form" data-name="Email Form" method="POST" action="{{ route('password.confirm') }}" class="wc-form" data-wf-page-id="653e9eec5152222d5e068cb8" data-wf-element-id="1dcfd2f7-ba35-8c36-9ab4-716221c72ad0">
                @csrf
                <label for="name" class="wc-label">{{ __('Password') }}</label>
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                       {{ $message }}
                                    </span>
                                @enderror

                <input type="submit" value=" {{ __('Confirm Password') }}" data-wait="Please wait..." class="wc-button w-button"></form>
           
          </div>
        </div>
      </div>
    </section>


@include('inc.footer')