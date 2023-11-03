@include('inc.header')



<section class="wc-section login">
      <div class="w-layout-vflex wc-container v-center">
        <div class="w-layout-vflex wc-admin-login-wrapper">
          <h1 class="wc-heading">{{ __('Reset Password') }}</h1>
          
          <div class="wc-form-wrapper mw-400 top-40 w-form">
            <form id="email-form" name="email-form" data-name="Email Form" method="POST" action="{{ route('password.email') }}" class="wc-form" data-wf-page-id="653e9eec5152222d5e068cb8" data-wf-element-id="1dcfd2f7-ba35-8c36-9ab4-716221c72ad0">
                @csrf
                <label for="name" class="wc-label">{{ __('Email Address') }}</label>
                  <input id="email" type="email" class="wc-input w-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            

               

                <input type="submit" value="{{ __('Send Password Reset Link') }}" data-wait="Please wait..." class="wc-button w-button"></form>
           <p>Back to <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </p>
          </div>
        </div>
      </div>
    </section>


@include('inc.footer')