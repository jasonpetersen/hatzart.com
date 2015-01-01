<!DOCTYPE html>
<html lang="en">
	<head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/head.php'; ?>
		<title>Amanda Hatzikyriakou | Gallery</title>
		<meta name="description" content="">
		<link rel="stylesheet" href="/css/blueimp-gallery.min.css">
		<link rel="stylesheet" href="/css/bootstrap-image-gallery.min.css">
		<script src="/js/head.load.min.js"></script>
		<script>
			head.load("//code.jquery.com/jquery-1.11.2.min.js", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js", "/js/jquery.blueimp-gallery.min.js", "/js/bootstrap-image-gallery.min.js", "/js/demo.js");
		</script>
	</head>
	<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/nav-banner.php'; ?>
		<div class="container">
			<h1>Bootstrap Image Gallery Demo</h1>
			<blockquote>
				<p>Bootstrap Image Gallery is an extension to <a href="http://blueimp.github.io/Gallery/">blueimp Gallery</a>, a touch-enabled, responsive and customizable image &amp; video gallery.<br>It displays images and videos in the modal dialog of the <a href="http://getbootstrap.com/">Bootstrap</a> framework, features swipe, mouse and keyboard navigation, transition effects, fullscreen support and on-demand content loading and can be extended to display additional content types.</p>
			</blockquote>
			<form class="form-inline">
				<div class="form-group">
					<button id="video-gallery-button" type="button" class="btn btn-success btn-lg">
						<i class="glyphicon glyphicon-film"></i>
						Launch Video Gallery
					</button>
				</div>
				<div class="form-group">
					<button id="image-gallery-button" type="button" class="btn btn-primary btn-lg">
						<i class="glyphicon glyphicon-picture"></i>
						Launch Image Gallery
					</button>
				</div>
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-success btn-lg">
					<i class="glyphicon glyphicon-leaf"></i>
					<input id="borderless-checkbox" type="checkbox"> Borderless
				  </label>
				  <label class="btn btn-primary btn-lg">
					<i class="glyphicon glyphicon-fullscreen"></i>
					<input id="fullscreen-checkbox" type="checkbox"> Fullscreen
				  </label>
				</div>
			</form>
			<br>
			<!-- The container for the list of example images -->
			<div id="links">
				<a href="/images/cyprus-mazotos1-lg.jpg" title="cyprus-mazotos1" data-gallery>
					<img src="/images/cyprus-mazotos1-sm.jpg" alt="cyprus-mazotos1">
				</a>
				<a href="/images/cyprus-mazotos2-lg.jpg" title="cyprus-mazotos2" data-gallery>
					<img src="/images/cyprus-mazotos2-sm.jpg" alt="cyprus-mazotos2">
				</a>
				<a href="/images/cyprus-mazotos3-lg.jpg" title="cyprus-mazotos3" data-gallery>
					<img src="/images/cyprus-mazotos3-sm.jpg" alt="cyprus-mazotos3">
				</a>
			</div>
			<br>
		</div>
		<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
		<div id="blueimp-gallery" class="blueimp-gallery">
			<!-- The container for the modal slides -->
			<div class="slides"></div>
			<!-- Controls for the borderless lightbox -->
			<h3 class="title"></h3>
			<a class="prev">‹</a>
			<a class="next">›</a>
			<a class="close">×</a>
			<a class="play-pause"></a>
			<ol class="indicator"></ol>
			<!-- The modal dialog, which will be used to wrap the lightbox content -->
			<div class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" aria-hidden="true">&times;</button>
							<h4 class="modal-title"></h4>
						</div>
						<div class="modal-body next"></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left prev">
								<i class="glyphicon glyphicon-chevron-left"></i>
								Previous
							</button>
							<button type="button" class="btn btn-primary next">
								Next
								<i class="glyphicon glyphicon-chevron-right"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
	</body> 
</html>
