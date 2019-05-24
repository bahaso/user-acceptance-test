<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{url ('assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{url('assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
    <div class="background-setting">
        <div class="container login-container">
            <div class="card login-card">
                <form class="form-signin" action="{{url('doLogin')}}" method="post">
                    {{csrf_field()}}
                  <h2 class="form-signin-heading card-title">Bahaso UAT</h2>
                  <label for="inputEmail" class="sr-only">Username</label>
                  <input type="email" id="InputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="InputPassword" class="form-control" placeholder="Password" required name="password">
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
              </div>
              <footer class="footer">
                    <div class="container-fluid">
                        <p class="copyright" style="text-align:center">
                            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.bahaso.com">Bahaso</a>
                        </p>
                    </div>
                </footer>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>


</html>
