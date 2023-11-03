@include('inc.header')

    
    <section class="wc-section hero-section">
      <div class="w-layout-vflex wc-bg-wrapper hero-bg-wrapper"><img src="images/old-couple-1.png" loading="lazy" sizes="100vw" srcset="images/old-couple-1-p-500.png 500w, images/old-couple-1-p-800.png 800w, images/old-couple-1-p-1080.png 1080w, images/old-couple-1.png 1440w" alt="" class="wc-bg-img hero">
        <div class="wc-bg-overlay hero-overlay"></div>
      </div>
      <div class="w-layout-vflex wc-container">
        <div class="w-layout-vflex wc-text-wrapper medium">
          <h1 class="wc-heading">Regaining Strong Lasting Erections.</h1>
          <p class="wc-phar large">Erectile Dysfunction can End with Holistic therapy. The effects of Traumatic events in your life that lead to erectile dysfunction and other disease states can also be reduced or eliminated.</p>
          <a href="#" class="wc-button w-button">Book Now</a>
        </div>
      </div>
    </section>
    <section class="wc-section">
      <div class="w-layout-vflex wc-container">
        <div id="w-node-_0424e119-d6eb-ec3d-3089-495da636ddc1-bfeaa0f8" class="w-layout-layout wc-stack margin-bottom-40 wf-layout-layout">
          <div id="w-node-_0ee40fa2-9a73-43dd-5f56-a0f2f139b0d5-bfeaa0f8" class="w-layout-cell wc-stack-cel">
            <h1 class="wc-sub-heading">INTRODUCING</h1>
            <h1 class="wc-heading small">Pain in your life is optional while suffering doesn’t help you or your health.</h1>
          </div>
          <div id="w-node-_7dc1642e-9ca3-9217-7d3c-85de6209e481-bfeaa0f8" class="w-layout-cell wc-stack-cel">
            <p class="wc-phar">We are able to cure erectile dysfunction in most cases. We are able to make great progress with clients who are willing to work using a holistic approach to their health. These individuals need to have a financial commitment to their health, beside a strong desire to make the necessary changes in their life style. Men who have had a penile implant, we aren’t able to support having a harder erection.</p>
          </div>
        </div><img src="images/old-man-meditate.png" loading="lazy" sizes="90vw" srcset="images/old-man-meditate-p-500.png 500w, images/old-man-meditate-p-800.png 800w, images/old-man-meditate-p-1080.png 1080w, images/old-man-meditate.png 1440w" alt="" class="wc-section-image">
      </div>
    </section>
   <section class="wc-section">
      <div class="w-layout-vflex wc-container v-center">
        <h1 class="wc-heading">Our Classes</h1>
        <p class="wc-phar t-center mw-800 bottom-30">We make efforts to change the way that healthcare services are offered in order to meet the changing needs of our patients, both for the present and future.<br></p>
        <div class="w-layout-grid wc-grid">

           @foreach($services as $service)

          <a href="" style="color:black;">
          <div id="w-node-_56c08935-eb45-33e7-5364-c5c45f2ab61b-ab675c2c" class="w-layout-vflex wc-grid-item v-center"><img src="{{ asset($service->s_path) }}" loading="lazy" alt="" class="wc-service-img">
            <h1 class="wc-heading xsmall"> {{$service->s_title}} </h1>
            <p style="margin-top:10px; text-align: center;"> {{$service->s_shortDesc}} </p>
          </div>
          </a>
           @endforeach   
         
        </div>
      </div>
    </section>
    <section class="wc-section">
      <div class="w-layout-vflex wc-bg-wrapper"><img src="images/Untitled-design-3.png" loading="lazy" sizes="100vw" srcset="images/Untitled-design-3-p-500.png 500w, images/Untitled-design-3-p-800.png 800w, images/Untitled-design-3-p-1080.png 1080w, images/Untitled-design-3.png 1440w" alt="" class="wc-bg-img">
        <div class="wc-bg-overlay"></div>
      </div>
      <div class="w-layout-vflex wc-container">
        <div id="w-node-_5f68b693-efaa-0a8e-48b3-4615d60e6983-bfeaa0f8" class="w-layout-layout wc-stack margin-bottom-40 wf-layout-layout">
          <div id="w-node-_5f68b693-efaa-0a8e-48b3-4615d60e6984-bfeaa0f8" class="w-layout-cell wc-stack-cel"><img src="images/Untitled-design.png" loading="lazy" sizes="90vw" srcset="images/Untitled-design-p-500.png 500w, images/Untitled-design-p-800.png 800w, images/Untitled-design-p-1080.png 1080w, images/Untitled-design.png 1440w" alt="" class="wc-section-image _500"></div>
          <div id="w-node-_5f68b693-efaa-0a8e-48b3-4615d60e6989-bfeaa0f8" class="w-layout-cell wc-stack-cel v-center">
            <h1 class="wc-heading medium">Individual Distance Healing</h1>
            <p class="wc-phar">Our Individual Reiki Healing Sessions are designed toallow for healing by release blockages that are causingboth physical and emotional pain. We suggest you startwith our longer 50 minute session and you may need afew of the touch up sessions to really work it out</p>
            <a href="#" class="wc-button w-button">Make an Appointment</a>
          </div>
        </div>
      </div>
    </section>
    <section class="wc-section">
      <div class="w-layout-vflex wc-container v-center">
        <h1 class="wc-heading medium">Frequently Asked Questions</h1>
        <p class="wc-phar t-center mw-800 bottom-30">Should you have any questions related to our health care services, billing methods, treatment plan, disease diagnosis, etc. please contact us for more info.<br></p>
        <div class="w-layout-vflex wc-faq-wrapper">

          @php
                $row = 1; //Initialize variable
          @endphp
          
          @foreach($faqs as $faq)

          <div data-hover="false" data-delay="0" data-w-id="57b5f501-5754-046f-d6bb-3f52864f80b8" class="wc-faq-dp w-dropdown">
            <div class="wc-faq-dp-btn w-dropdown-toggle">
              <div class="wc-faq-number">{{$row++;}}</div>
              <div class="text-block-2">{{$faq->f_title}}</div>
              <div class="wc-icon-wrapper">
                <div class="wc-faq-icon-line _1"></div>
                <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(90deg) skew(0, 0)" class="wc-faq-icon-line _2"></div>
              </div>
            </div>
            <nav class="wc-faq-list w-dropdown-list">
              {!!html_entity_decode($faq->f_desc)!!}
            </nav>
          </div>

          @endforeach 

        </div>
      </div>
    </section>


@include('inc.footer')