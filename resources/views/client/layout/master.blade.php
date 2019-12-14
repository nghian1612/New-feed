
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>WorkWise Html Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<base href = "{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/fixcss.css">
</head>

<body>	

	<div class="wrapper">	
		
    @include('client.layout.header')
    @yield('content')
    @include('client.layout.footer')

	</div>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/show-hide-pass.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/front-end/profile.js"></script>
<script type="text/javascript" src="js/front-end/post.js"></script>

	@yield('script')
</body>
</html>