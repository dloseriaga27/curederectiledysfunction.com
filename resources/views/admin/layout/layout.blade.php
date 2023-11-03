<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Sun Oct 29 2023 18:38:34 GMT+0000 (Coordinated Universal Time)  -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-wf-page="653c5de5c0189b84bff0d05e" data-wf-site="653c5689c0189b84bfeaa0f4">
<head>
  <meta charset="utf-8">
  <title>dashboard</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="dashboard" property="og:title">
  <meta content="dashboard" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">


  <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>

  <link href="../../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../../css/theme.css" rel="stylesheet" type="text/css">
  <link href="../../css/sexualproblems.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../../images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="../../images/webclip.png" rel="apple-touch-icon">

</head>
<body class="wc-admin-body">
  <input type="checkbox" name="burgermenu" id="burgermenuCheck" class="burgermenuCheck" hidden>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <div class="w-layout-vflex wc-admin-main">
    <div class="w-layout-vflex wc-admin-sidepanel">
      <div class="w-layout-vflex wc-admin-sidepanel-wrapper">
        <div class="w-layout-hflex wc-admin-header">
          <div class="w-layout-hflex wc-admin-logowrapper">
            <div class="w-layout-hflex wc-admin-logo-box"><img src="../images/s.svg" loading="lazy" alt="" class="wc-admin-logo"><img src="../images/exual.svg" loading="lazy" alt="" class="wc-admin-logo child"></div>
            <div class="w-layout-hflex wc-admin-logo-box"><img src="../images/p.svg" loading="lazy" alt="" class="wc-admin-logo"><img src="../images/roblems.svg" loading="lazy" alt="" class="wc-admin-logo child"></div>
          </div>
        </div>
        <div class="w-layout-vflex wc-admin-sidepanel-navwrapper">
          <div class="text-block">MENU</div>
          <a href="/admin/dashboard" aria-current="page" class="wc-admin-nav-button w-button w--current">
            <span class="wc-shape-1"></span>
            <span class="wc-shape-2"></span>

            <span class="wc-admin-f-icon"></span>
            <span class="wc-admin-nav-button-text">Overview</span>
            <span class="wc-admin-nav-button-text popup-text">Overview</span>
          </a>
          <a href="/admin/services" class="wc-admin-nav-button w-button">
            <span class="wc-shape-1"></span>
            <span class="wc-shape-2"></span>

            <span class="wc-admin-f-icon"></span>
            <span class="wc-admin-nav-button-text">Services</span>
            <span class="wc-admin-nav-button-text popup-text">Services</span>
          </a>
          <a href="/admin/blog" class="wc-admin-nav-button w-button" hidden>
            <span class="wc-admin-f-icon"></span>
            <span class="wc-admin-nav-button-text">Blogs</span>
            <span class="wc-admin-nav-button-text popup-text">Blogs</span>
          </a>
          <a href="/admin/contact" class="wc-admin-nav-button w-button">
            <span class="wc-shape-1"></span>
            <span class="wc-shape-2"></span>

            <span class="wc-admin-f-icon"></span>
            <span class="wc-admin-nav-button-text">Contact Form</span>
            <span class="wc-admin-nav-button-text popup-text">Contact Form</span>
          </a>
          <a href="/admin/subscribers" class="wc-admin-nav-button w-button" hidden>
            <span class="wc-shape-1"></span>
            <span class="wc-shape-2"></span>

            <span class="wc-admin-f-icon"></span>
            <span class="wc-admin-nav-button-text">Subscribers</span>
            <span class="wc-admin-nav-button-text popup-text">Subscribers</span>
          </a>
          <a href="/admin/faqs" class="wc-admin-nav-button w-button">
            <span class="wc-shape-1"></span>
            <span class="wc-shape-2"></span>

            <span class="wc-admin-f-icon"></span>
            <span class="wc-admin-nav-button-text">FAQ&#x27;s</span>
            <span class="wc-admin-nav-button-text popup-text">FAQ&#x27;s</span>
          </a>
        </div>
        <label for="burgermenuCheck">
        <span class="close-btn w-button"></span>
        </label>
      </div>
      <div class="w-layout-vflex wc-admin-sidepanel-close"><label for="burgermenuCheck" style="width:100%; height:100%;"></label></div>
    </div>
    <div class="w-layout-vflex wc-admin-pagepanel">
      <div class="w-layout-hflex wc-admin-header">
        <div class="w-layout-hflex wc-admin-header-wrapper">
          <div class="mobilelogo"><div class="w-layout-hflex wc-admin-logowrapper">
            <div class="w-layout-hflex wc-admin-logo-box"><img src="../images/s.svg" loading="lazy" alt="" class="wc-admin-logo"></div>
            <div class="w-layout-hflex wc-admin-logo-box"><img src="../images/p.svg" loading="lazy" alt="" class="wc-admin-logo"></div>
          </div></div>
          <label for="burgermenuCheck" class="burgerLabel">
          <div class="wc-admin-burgermenu">
            <div class="wc-admin-burgerline"></div>
            <div class="wc-admin-burgerline"></div>
            <div class="wc-admin-burgerline"></div>
          </div>
        </label>
          <div class="w-layout-hflex wc-admin-header-info-wrapper">
            <div data-hover="false" data-delay="0" class="wc-admin-dp-wrapper w-dropdown" hidden>
              <div class="wc-admin-dp-toggle notif w-dropdown-toggle">
                <div></div>
                <div class="wc-admin-notif-text">1</div>
              </div>
              <nav class="wc-admin-dp-list notification w-dropdown-list">
                <div class="wc-admin-dp-header">
                  <div>Notification</div>
                </div>
                <div class="w-layout-vflex wc-admin-navlink-wrapper">
                  <a href="#" class="wc-admin-dp-notif w-inline-block">
                    <div class="wc-admin-dp-notif-box">
                      <div class="w-layout-hflex wc-admin-info-wrapper"><img src="../images/form.png" loading="lazy" alt="" class="wc-admin-profile-img">
                        <div class="w-layout-vflex wc-admin-vflex">
                          <div>New Form Submission</div>
                          <div class="wc-admin-mail-tx">1 minute ago</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="wc-admin-dp-notif w-inline-block">
                    <div class="wc-admin-dp-notif-box">
                      <div class="w-layout-hflex wc-admin-info-wrapper"><img src="../images/form.png" loading="lazy" alt="" class="wc-admin-profile-img">
                        <div class="w-layout-vflex wc-admin-vflex">
                          <div>New Form Submission</div>
                          <div class="wc-admin-mail-tx">3 minutes ago</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </nav>
            </div>
            <div data-hover="false" data-delay="0" class="wc-admin-dp-wrapper w-dropdown">
              <div class="wc-admin-dp-toggle w-dropdown-toggle profile-toggle"> <img src="/avatars/{{ Auth::user()->avatar }}" loading="lazy" alt="" class="wc-admin-dp-img"> </div>
              <nav class="wc-admin-dp-list profile w-dropdown-list">
                <div class="wc-admin-dp-header">
                  <div class="w-layout-hflex wc-admin-info-wrapper"><img src="/avatars/{{ Auth::user()->avatar }}" loading="lazy" alt="" class="wc-admin-profile-img">
                    <div class="w-layout-vflex wc-admin-vflex">
                      <div class="wc-admin-name-txt">{{ Auth::user()->name }}</div>
                      <div class="wc-admin-mail-tx">{{ Str::limit(Auth::user()->email, 20) }}</div>
                    </div>
                  </div>
                </div>
                <div class="w-layout-vflex wc-admin-navlink-wrapper">
                  <a href="/admin/profile" class="wc-admin-dp-navlink w-dropdown-link">Account Setting</a>
                  <a href="/" target="_blank" class="wc-admin-dp-navlink w-dropdown-link">Live Site</a>
                </div>
                <a class="wc-admin-logoutlink w-dropdown-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
               <!--  <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" href="logout" class="wc-admin-logoutlink w-dropdown-link">Logout</button>
                </form> -->
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="w-layout-vflex wc-admin-pagebody">
          @yield('content')
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=653c5689c0189b84bfeaa0f4" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../../js/webflow.js" type="text/javascript"></script>
</body>
</html>


<script type="text/javascript" src="../../js/jquery.min.js"></script>
