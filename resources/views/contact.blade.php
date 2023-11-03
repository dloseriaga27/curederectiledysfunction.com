@include('inc.header')

<section class="wc-section">
      <div class="w-layout-vflex wc-container v-center">
        <h1 class="wc-heading medium">We Are Here For You<br></h1>
        <div id="w-node-ad8f48cc-f7a8-26b8-7429-280e2856be59-abef0a00" class="w-layout-layout wc-stack top-40 wf-layout-layout">
          <div id="w-node-ad8f48cc-f7a8-26b8-7429-280e2856be5a-abef0a00" class="w-layout-cell wc-stack-cel">
            <h1 class="wc-heading small">Get in touch<br></h1>
            <p class="wc-phar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.<br></p>
            <div class="wc-phar bot-10">
              <a href="#" class="wc-contact-link"><span class="wc-admin-f-icon"></span>This is some text inside of a div block.</a>
            </div>
            <div class="wc-phar bot-10">
              <a href="mailto:russ@mach1coach.com" class="wc-contact-link"><span class="wc-admin-f-icon"></span>russ@mach1coach.com</a>
            </div>
            <div class="wc-phar bot-10">
              <a href="tel:01-678-696-1258" class="wc-contact-link"><span class="wc-admin-f-icon"></span>01-678-696-1258</a>
            </div>
          </div>
          <div id="w-node-ad8f48cc-f7a8-26b8-7429-280e2856be5b-abef0a00" class="w-layout-cell wc-stack-cel">
            <div class="wc-form-wrapper w-form">
              <form id="email-form" name="email-form" data-name="Email Form" method="POST" action="/contactadd" class="wc-form" data-wf-page-id="653e9490e97d08f8abef0a00" data-wf-element-id="5ffbcc5c-e945-8a82-eb6b-fb293f0fa339">
              	{{ csrf_field() }}
              	<label for="name" class="wc-label">Name</label>
              	<input type="text" class="wc-input w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name" required>
              	<label for="email" class="wc-label">Email Address</label>
              	<input type="email" class="wc-input w-input" maxlength="256" name="email" data-name="Email" placeholder="" id="email" required>
              	<label for="Phone" class="wc-label">Phone Number</label>
              	<input type="tel" class="wc-input w-input" maxlength="256" name="phone" data-name="Phone" placeholder="" id="Phone" required>
              	<label for="field" class="wc-label">Message</label>
              	<textarea placeholder="" maxlength="5000" id="field" name="message" data-name="Field" class="wc-input textarea w-input"></textarea>
              	<input type="submit" value="Submit" data-wait="Please wait..." class="wc-button w-button"> 
              </form>
              @if(session('message'))
				<div class="w-form-done">
	                <div>{{ session('message') }}</div>
	             </div>
			  @endif
              

              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

@include('inc.footer')