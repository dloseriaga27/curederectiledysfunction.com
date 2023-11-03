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