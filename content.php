<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="owl-carousel/owl.theme.css">
<script src="owl-carousel/owl.carousel.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>
<?php
if(isset($_GET['luachon']))
	switch($_GET['luachon'])
	{
		case 'home':
			include ("home.php");
		break;
		case 'truyencotich':
			include ("page/page_1.php");
		break;
		case 'truyenhiendai':
			include ("page/page_2.php");
		break;
		case 'truyendangian':
			include ("page/page_3.php");
		break;
		case 'taptho':
			include ("page/page_4.php");
		break;
	}
	else
	{
		include ("page/page_1.php");
	}
	?>
	</body>
	</html>
