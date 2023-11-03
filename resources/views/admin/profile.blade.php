@extends('admin.layout.layout')

@section('content')


<div class="wc-admin-grid">
	<div class="wc-admin-profileWrapper">
		<form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
        @csrf
  			 <div class="avatar-upload">
		        <div class="avatar-edit">
		            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar"/>
		            <label for="imageUpload"><span class="wc-admin-f-icon"></span></label>
		        </div>
		        <div class="avatar-preview">
		            <div id="imagePreview" style="background-image: url(/avatars/{{ Auth::user()->avatar }});">
		            </div>
		        </div>
		        @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		        <button type="submit" id="avatarBtn" class="wc-admin-button" style="color:#fff; position:absolute; bottom:0px; display: none;">{{ __('Upload Profile') }}</button>
		    </div>
                      
        </form>

        <p style="font-size:18px; margin-bottom:0px; line-height:20px;">{{ Auth::user()->name }}</p>
        <p style="font-size:14px; color:gray;">{{ Str::limit(Auth::user()->email, 30) }}</p>
	</div>
	<div class="wc-admin-profileInformation">
		
		<p style="font-size:18px; letter-spacing:2px;">UPDATE PROFILE INFORMATION</p>
		<form action="/admin/profileadd" style="padding:0px;" method="post">
			@csrf

			<div class="wc-admin-from-group">
				<label for="name" class="wc-label">Name</label>
            	<input id="name" type="text" class="wc-input w-input @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
			</div>
			<div class="wc-admin-from-group">
				<label for="name" class="wc-label">Email</label>
            	<input id="email" type="email" class="wc-input w-input @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" autofocus>
			</div>

		    <button type="submit" class="wc-admin-button">Update Info</button>
		</form>

		<br><br><br>
		<p style="font-size:18px; letter-spacing:2px;">UPDATE PASSWORD</p>
		<form action="/admin/profilepassupdate" id="edit_profile_form" style="padding:0px;" method="post">
			@csrf
			<div class="wc-admin-from-group">
				<label for="name" class="wc-label">Current Password</label>
            	<input type="password" name="old_password" class="wc-input w-input" id="old_password" >
            	@if($errors->any('old_password'))
				  <span class="text-danger">{{$errors->first('old_password')}}</span>
				@endif
			</div>
			<div class="wc-admin-from-group">
				<label for="name" class="wc-label">New Password</label>
            	<input type="password" name="new_password" class="wc-input w-input" id="new_password" >
            	@if($errors->any('new_password'))
				  <span class="text-danger">{{$errors->first('new_password')}}</span>
				@endif
			</div>
			<div class="wc-admin-from-group">
				<label for="name" class="wc-label">Confirm Password</label>
            	<input type="password" name="confirm_password" class="wc-input w-input" id="confirm_password" >
            	@if($errors->any('confirm_password'))
				  <span class="text-danger">{{$errors->first('confirm_password')}}</span>
				@endif
			</div>

		    <button type="submit" class="wc-admin-button">Change Password</button>
		</form>
	</div>
</div>
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
            $("#avatarBtn").css("display", "block");
        }
        reader.readAsDataURL(input.files[0]);
    }
}
	$("#imageUpload").change(function() {
    readURL(this);
});
</script>


@endsection