<!doctype html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" 
  dir="ltr" data-theme="theme-default"
  data-template="vertical-menu-template-free" data-style="light">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>Books Demo</title>
      <meta name="description" content="" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </head>
  <body>
    <div>
      <!-- Navbar -->
      @include('nav')

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <div class="container-fluid flex-grow-1 container-p-y">
          <div class="row g-6">
            <div class="col-12">
              <div class="card">
                <h5 class="card-header">@yield('pagename')</h5>
                <div class="card-body">
                  @yield('content')
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Footer -->
        @include('footer')
        <!-- / Footer -->
      </div>
    </div>
  </body>
</html>
