@include('inc.header')

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