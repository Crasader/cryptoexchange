<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="a bitcoin trading lab">
    <meta name="author" description="Crypto Exchange Option">
    <meta property="og:url"           content="{{ url('/') }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Crypto Exchange Option" />
    <meta property="og:description"   content="a bitcoin exchange website" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Welcome to Crypto Exchange Option</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="{!! asset('images/logo.png') !!}" width="40px">

@yield('styles')
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../lib/html5shiv/html5shiv.js"></script>
    <script src="../lib/respond/respond.src.js"></script>
    <![endif]-->
    <!-- pass php vars to javascript -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'appUrl' => url("/"),
            'siteUser' => auth()->user(),
        ]); ?>
    </script>
    <div id="google_translate_element" align="right"></div><script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
        }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<body>
<div id="index">
<header>
    <div class="headerpanel">

        <div class="logopanel">
            <h2><a href=""><img src="{!! asset('images/logo-white.png') !!}" width="180px"></a></h2>

        </div><!-- logopanel -->

        <div class="headerbar">

            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

            <div class="searchpanel">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                </div><!-- input-group -->
            </div><!-- searchpanel -->
            <Notification v-bind:notifications="notifications"></Notification>
        </div><!-- headerbar -->
    </div><!-- header-->
</header>
    <!-- Header End -->
@yield('content')
</div>
@yield('scripts')
<script>
    function delete_transaction(transaction_id) {
        var g = confirm('Are you sure you want to delete this transaction?');
        if (g) {
            window.location = "{{  url('user/admin-transactions/') }}" + '/' + transaction_id;
        }
    }
</script>
<script>
    function delete_referral(referral_id) {
        var g = confirm('Are you sure you want to delete this referral details?');
        if (g) {
            window.location = "{{  url('user/admin-referrals/') }}" + '/' + referral_id;
        }
    }
</script>
<script>
    function delete_withdrawal(withdrawal_id) {
        var g = confirm('Are you sure you want to delete this withdrawal details?');
        if (g) {
            window.location = "{{  url('user/admin-withdrawals/') }}" + '/' + withdrawal_id;
        }
    }
</script>
</body>
</html>