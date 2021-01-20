<!-- <?php 
 include_once($_SERVER['DOCUMENT_ROOT'].'/slide/admin/classes/Process.php'); 
 $pro= new Process();
 $all_data= $pro->all_data();
 // var_dump($datas);

 while ($row=mysqli_fetch_assoc($all_data) ){
 	 $data_result[]=$row;
 }
 // var_dump($data_result);
 ?>
<?php
$title= "Antpolis"; 
$subject= "Automation";
?>
<!doctype html> -->
<!-- <html> -->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

		<title>reveal.js</title>

		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="lib/css/monokai.css">
		 <!-- sample  -->
  <link rel="stylesheet" href="base.min.css"/>
<link rel="stylesheet" href="fancy.min.css"/>
<link rel="stylesheet" href="main.css"/>
<!-- <script src="compatibility.min.js"></script> -->
<script src="theViewer.min.js"></script>
<!-- <script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script> -->
<!-- sample -->

		<!-- Printing and PDF exports -->
	<!-- 	<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script> -->


	</head>
	<body>
		<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
		<div class="reveal">
			<div class="slides">
				<section>
					<h2>Hello There</h2>
					<p>
						reveal.js enables you to create beautiful interactive slide decks using HTML. This presentation will show you examples of what it can do.
					</p>
				</section>
				<section>
					<h2>Hello There</h2>
					<p>
						reveal.js enables you to create beautiful interactive slide decks using HTML. This presentation will show you examples of what it can do.
					</p>
				</section>
			</div>
		</div>
	</div>
		<script src="js/reveal.js"></script>
		 <script src="//js.pusher.com/3.0/pusher.min.js"></script>
  		<!-- <script src="//pusher-community.github.io/pusher-revealjs-remote/js/pusher-revealjs-slides.js"></script> -->
 	<script src="client-slide.js"></script>
		<script>
			// More info about config & dependencies:
			// - https://github.com/hakimel/reveal.js#configuration
			// - https://github.com/hakimel/reveal.js#dependencies
			Reveal.initialize({
				hash: true,
				dependencies: [
					{ src: 'plugin/markdown/marked.js' },
					{ src: 'plugin/markdown/markdown.js' },
					{ src: 'plugin/highlight/highlight.js' },
					{ src: 'plugin/notes/notes.js', async: true }
				]
			});
	var pusher = new Pusher('919c37c3a2c798eea5b9', {
      // cluster: 'ap2',
      // forceTLS: true
    });
  var controller = new PusherRevealSlideController(Reveal, pusher);


		</script>
	</body>
</html>
