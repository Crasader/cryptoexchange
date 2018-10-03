<!DOCTYPE html>
<html lang="en" style="">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="a bitcoin trading platform">
  <meta name="author" content="a bitcoin trading platform">
  <link rel="icon" type="image/png" href="{!! asset('images/logo-white.png') !!}" width="140px">


  <title>Welcome to Crypto Traders Lab</title>
 <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/font-awesome.css') !!}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/weather-icons.css') !!}">
    <!-- owl-carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/toggles-full.css') !!}">
   

    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/quirk.css') !!}">

   <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'appUrl' => url("/"),
            'siteUser' => auth()->user(),
        ]); ?>
    </script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->
</head>

<body>
  <div id="index">


<section>

  <div class="notfoundpanel">
    <h1>404!</h1>
    <h3>The page you are looking for has not been found!</h3>
    <h4>The page you are looking for might have been removed, had its name changed,<br>or unavailable. Maybe you could try a search:</h4>
    <form action="">
      <div class="input-group mb15">
        <input type="text" class="form-control" placeholder="Search here">
        <span class="input-group-btn">
          <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-search"></i></button>
        </span>
      </div>
    </form>
    <hr class="darken">
    <ul class="list-inline">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">Terms of Use</a></li>
      <li><a href="{{ url('/contact') }}">Contact Us</a></li>
      <li class="pull-right">Crypto Traders Lab © 2014. All Rights Reserved.</li>
    </ul>

  </div><!-- notfoundpanel -->

</section>
</div>

<script src="{!! asset('js/admin/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/admin/bootstrap.js') !!}"></script>
    <script src="{!! asset('js/admin/modernizr.js') !!}"></script>
    <script src="{!! asset('js/admin/jquery-ui.js') !!}"></script>
    <script src="{!! asset('js/admin/toggles.js') !!}"></script>
    <script src="{!! asset('js/admin/quirk.js') !!}"></script>
  <script src="{!! asset('js/index.js') !!}"></script>


</body></html>