<!DOCTYPE html>
<html lang="en">
	<head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/head.php'; ?>
		<title>Amanda Hatzikyriakou | Gallery</title>
		<meta name="description" content="A gallery of the artist's work.">
		<link rel="stylesheet" href="/css/blueimp-gallery.min.css">
		<link rel="stylesheet" href="/css/bootstrap-image-gallery.min.css">
		<script src="/js/head.load.min.js"></script>
		<script>
			head.load("//code.jquery.com/jquery-1.11.2.min.js", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js", "/js/jquery.blueimp-gallery.min.js", "/js/bootstrap-image-gallery.min.js", "/js/gallery.js");
		</script>
	</head>
	<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/nav-banner.php'; ?>
		<div class="gallery container">
			<p>All pieces are original, one of a kind watercolor works of art on fine Arches 140 lb cold press 100% cotton paper. Each landscape is inspired by the artists' own photography from travels around the US and world.</p>
			<br />
			<form class="form-inline">
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
				</div>
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-primary btn-lg">
						<i class="glyphicon glyphicon-fullscreen"></i>
						<input id="fullscreen-checkbox" type="checkbox"> Fullscreen
					</label>
				</div>
			</form>
			<br>
			<!-- The container for the list of images -->
			<div id="links">
				<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/images/cyprus-mazotos1-lg.jpg" title="5X7 Mazotos field, Cyprus - SOLD" data-gallery>
							<img class="img-thumbnail" src="/images/cyprus-mazotos1-sm.jpg" alt="5X7 Mazotos field, Cyprus - SOLD">
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/images/cyprus-mazotos2-lg.jpg" title="8X10 Mazotos by the sea, Cyprus" data-gallery>
							<img class="img-thumbnail" src="/images/cyprus-mazotos2-sm.jpg" alt="8X10 Mazotos by the sea, Cyprus">
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/images/cyprus-mazotos3-lg.jpg" title="8X10 Road to Mazotos, Cyprus" data-gallery>
							<img class="img-thumbnail" src="/images/cyprus-mazotos3-sm.jpg" alt="8X10 Road to Mazotos, Cyprus">
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/images/cyprus-mazotos4-lg.jpg" title="5X7 Mazotos sunset, Cyprus" data-gallery>
							<img class="img-thumbnail" src="/images/cyprus-mazotos4-sm.jpg" alt="5X7 Mazotos sunset, Cyprus">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/images/cyprus-natl-park3-lg.jpg" title="5X7 Athalassa National Park sunset 1, Cyprus" data-gallery>
							<img class="img-thumbnail" src="/images/cyprus-natl-park3-sm.jpg" alt="5X7 Athalassa National Park sunset 1, Cyprus">
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/images/cyprus-thalassa1-lg.jpg" title="8X10 Aphrodite's Rock, Cyprus" data-gallery>
							<img class="img-thumbnail" src="/images/cyprus-thalassa1-sm.jpg" alt="8X10 Aphrodite's Rock, Cyprus">
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/images/cyprus-thalassa2-lg.jpg" title="8X10 Sea near Aphrodite's Rock, Cyprus" data-gallery>
							<img class="img-thumbnail" src="/images/cyprus-thalassa2-sm.jpg" alt="8X10 Sea near Aphrodite's Rock, Cyprus">
						</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/images/cyprus-natl-park2-lg.jpg" title="5X7 Athalassa National Park sunset 2, Cyprus" data-gallery>
							<img class="img-thumbnail" src="/images/cyprus-natl-park2-sm.jpg" alt="5X7 Athalassa National Park sunset 2, Cyprus">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/images/cyprus-natl-park1-lg.jpg" title="7X7 Athalassa National Park sunset 3, Cyprus - SOLD" data-gallery>
							<img class="img-thumbnail" src="/images/cyprus-natl-park1-sm.jpg" alt="7X7 Athalassa National Park sunset 3, Cyprus - SOLD">
						</a>
					</div>
				</div>
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
