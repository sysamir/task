<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/ctadmin/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/ctadmin/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/ctadmin/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/ctadmin/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/ctadmin/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/home" class="simple-text">
                    Tapşırıq
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="/home/create">
                        <i class="pe-7s-plus"></i>
                        <p>Əlavə Et</p>
                    </a>
                </li>


            </ul>
    	</div>
    </div>





    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">

                    <a class="navbar-brand" href="/home"> Əsas Səhifə</a>
                </div>
                <div class="collapse navbar-collapse">


                    <ul class="nav navbar-nav navbar-right">

                        <li>  <a href="{{ url('/logout') }}"
													>
															Çıxış
													</a>


                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

							      @yield('content')

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    &copy; 2016 <a href="hasanzade.az">Hasanzade.az
                </p>
            </div>
        </footer>

    </div>
</div>


</body>



    <!--   Core JS Files   -->
    <script src="/ctadmin/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/ctadmin/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/ctadmin/assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="/ctadmin/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/ctadmin/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="/ctadmin/assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="/ctadmin/assets/js/demo.js"></script>
<!--
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Xoş Gəlmişsiniz"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script> -->

	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

	<script>
			CKEDITOR.replace( 'ckeditor', {
					filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
					filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
					filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
					filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}',
					extraPlugins: 'colorbutton,font,justify,codesnippet,smiley,iframe,print,scayt,templates,find,flash',
					skin: 'kama',
					language: 'tr',
			});
	</script>



	<script>
			CKEDITOR.replace( 'ckeditor1', {
					filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
					filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
					filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
					filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}',
					extraPlugins: 'colorbutton,font,justify,codesnippet,smiley,iframe,print,scayt,templates,find,flash',
					skin: 'kama',
					language: 'tr',
			});

	</script>



</html>
