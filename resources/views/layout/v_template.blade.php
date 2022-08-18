<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Prov. Kaltim | @yield('title')</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }} ">

  </head>
  <body>
 
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <nav id="sidebar" aria-label="Main Navigation">
        <div class="content-header">
          <a class="fw-semibold text-dual" href="{{ route('dashboard') }}">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider"> <img src="{{ asset('template/dist/img/pemprovkaltim.jpg') }} " style="width:20%" alt=""> {{ Auth::user()->name }} </span>
          </a>
          <div>
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-fw fa-times"></i>
            </a>
          </div>
        </div>

        <div class="js-sidebar-scroll">
          <div class="content-side">
            <ul class="nav-main">
              @include('layout.v_nav')
            </ul>
          </div>
        </div>
      </nav>
      <header id="page-header">
        <div class="content-header">
          <div class="d-flex align-items-center"> 
            <h4 style="padding-top: 20px">SISTEM PENDATAAN PERJANJIAN KERJASAMA</h4>
          </div>
          <div class="d-flex align-items-end">
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="{{ asset('template/dist/img/pemprovkaltim.jpg')}}" alt="Header Avatar" style="width: 21px;">
                <span class="d-none d-sm-inline-block ms-2">{{ Auth::user()->name }}</span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-2">
                  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" >                    
                    @csrf
                    <button type="submit"  class="dropdown-item d-flex align-items-center justify-content-between" >
                      <span class="fs-sm fw-medium">Log Out</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="page-header-loader" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-circle-notch fa-spin"></i>
            </div>
          </div>
        </div>
      </header>
      <main id="main-container">
        <div class="content">
          <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
            <div class="flex-grow-1 mb-1 mb-md-0">
              <h1 class="h3 fw-bold mb-2">
                @yield('title')
              </h1>
            </div>
          </div>
          @yield('content')
        </div>
      </main>
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
               <a class="fw-semibold" href="{{ route('dashboard') }}" target="_blank">INDONESIA MAJU</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="{{ route('dashboard') }}" target="_blank">Pendatakers</a> 2022 | KALTIM BERDAULAT
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="{{ asset('assets/js/oneui.app.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>
  </body>
</html>
