<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="assets/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
<!-- css -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<?php
	include 'header.php';
?>

<div class="slideShow">
    <img class="placeHolder" src="img/pic1.jpe" alt="my slideshow">
    <div class="layer1" id="slide"><div id="inner">An awesome website</div></div>
    <div class="layer2" id="slide"><div id="inner">Built by Ruth and Ezekiel</div></div>
    <div class="layer3" id="slide"><div id="inner">For ORS</div></div>
    <div class="layer4" id="slide"><div id="inner">It's responsive, try it!</div></div>
    <div class="layer5" id="slide"><div id="inner"><div id="inner">A nice description</div></div>
    <div class="slideOverlay"><p></p></div>
</div>

<div class="container">
<div class="row col-md-12">
	<div class="panel panel-default">
	  <div class="panel-heading">About us</div>
	  <div class="panel-body">
	    lorem ipssumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
	     lorem ipssumLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	  </div>
	</div>
</div>
</div>
<?php
	include 'footer.php';
?>
<!-- js --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<script src="assets/js/main.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</body>
</html>