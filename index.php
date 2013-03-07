<?php
//Get the images from database
include 'images.php';
$protocol = 'http://';
$imgurl = $protocol . $_SERVER['SERVER_NAME'] . "/pics/";
$thumburl = $protocol . $_SERVER['SERVER_NAME'] .  "/pics/thumbnails/";

?>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Homesale | Home For Sale</title>
		<link rel="stylesheet" href="css/basic.css" type="text/css" />
		<link rel="stylesheet" href="css/galleriffic-3.css" type="text/css" />
		<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="js/jquery.history.js"></script>
		<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
		<!-- We only want the thunbnails to display when javascript is disabled -->
		<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>
	</head>
	<body>
		<div id="page">
			<div id="container">
				<h1>Welcome To OurHomeSale.co.uk</h1>
                <h2>Featured Property</h2>
                <p>This family three bedroom 1930's Bay fronted end of terrace property is
                    ideally located for access to Rochester, Chatham and the Motorway network.
                    <p>
                    Refurbished with a newly fitted kitchen and bathroom suit.
                    Benefiting from new gas central heating, double-glazing with a good-sized 60ft
                    rear garden. No onward chain.
                   It is within walking distance of Chatham mainline train station and town centre.</p>
				<h4>Click the thumbnails to see enlarged pictures (More pictures to be posted soon)</h4>

				<!-- Start Advanced Gallery Html Containers -->
				<div id="gallery" class="content">
					<div id="controls" class="controls"></div>
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					<div id="caption" class="caption-container"></div>
				</div>
				<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
                        <?php
                        foreach($result as $key => $value){  ?>
						<li>
							<a class="thumb" name="leaf" href="<?php echo $imgurl . $value['file_name']; ?>" title="<?php echo $value['title']; ?>">
								<img src="<?php echo $thumburl . $value['thumb_url']; ?>" alt="<?php echo $value['title']; ?>" />
							</a>
							<div class="caption">

								<div class="image-title"><?php echo $value['title']; ?></div>
								<div class="image-desc"><?php echo $value['description']; ?></div>
							</div>
						</li>
                    <?php } ?>

					</ul>
				</div>
				<!-- End Advanced Gallery Html Containers -->
				<div style="clear: both;"></div>
                <div>
                    <h2>Ground Floor</h2>
                    <p><span class="bold">ENTRANCE PORCH:</span>Hardwood entrance door. With double glazed side
                    panels</p>

                    <p><span class="bold">ENTRANCE HALL: </span>Radiator, under stairs storage cupboard housing meters.
                    Stairs to first floor.</p>

                    <p><span class="bold">LOUNGE: </span>14'1" x 11'4" (4.29m x 3.45m), Double glazed window to front,
                    radiator</p>

                    <p><span class="bold">DINING ROOM:</span> 14'0" x 9'6" (4.27m x 2.90m), patio doors leading to garden
                    radiator.</p>

                    <p><span class="bold">KITCHEN: </span>8'2" x 6'9" (2.49m x 2.06m), Double glazed door and side window.
                    Range of new wall and base units with easy wipe down work surfaces, single
                    drainer sink with mixer tap, space for slim line dishwasher, space for fridge,
                    space for washing machine.</p>

                    <h2>FIRST FLOOR</h2>

                    <p><span class="bold">LANDING:</span> Loft access.</p>

                    <p><span class="bold">BEDROOM 1: </span>13'6" x 10'5" (4.11m x 3.18m), into bay. Double-glazed bay
                    window to front, built in wardrobes, radiator.</p>

                    <p><span class="bold">BEDROOM 2:</span> 11'2" x 10'5" (3.40m x 3.18m), Window to rear, radiator, built in
                    wardrobes which houses boiler and airing cupboard.</p>

                    <p><span class="bold">BEDROOM 3:</span> 6'9" x 6'3" (2.06m x 1.91m), Double-glazed window to front,
                    radiator.</p>

                    <p><span class="bold">BATHROOM:</span> Double-glazed frosted window to rear, panelled bath, low-level
                    WC, wash hand basin and vanity unit, radiator.</p>

                    <h2>OUTSIDE</h2>

                    <p><span class="bold"> FRONT GARDEN:</span> New off road parking</p>

                    <p><span class="bold">REAR GARDEN:</span> Side access into gated alleyway, shed to remain, 60ft long
                    garden, mainly patio with fruit tree, fir tree shrubs and flowers.</p>

                    <p><span class="bold">VIEWINGS:</span> Strictly by appointment. Please call <span class="bold">01634 844230</span> or mobile
                        <span class="bold">07758343971[best] </span> Email <a href="mailto:hadlum@hotmail.com">hadlum@hotmail.com</a> </p>
                    <p class="small">These particulars are for general guidance only. We have not carried out a detailed survey, nor tested the appliances,
                        services and fittings. Room sizes should not be relied upon for carpets and furniture. Prospective purchasers are
                        responsible to confirm accuracy by inspection.</p>
                </div>
			</div>
		</div>
		<div id="footer"></div>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '300px', 'float' : 'left'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 15,
					preloadAhead:              10,
					enableTopPager:            true,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             true,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});

				/**** Functions to support integration of galleriffic with the jquery.history plugin ****/

				// PageLoad function
				// This function is called when:
				// 1. after calling $.historyInit();
				// 2. after calling $.historyLoad();
				// 3. after pushing "Go Back" button of a browser
				function pageload(hash) {
					// alert("pageload: " + hash);
					// hash doesn't contain the first # character.
					if(hash) {
						$.galleriffic.gotoImage(hash);
					} else {
						gallery.gotoIndex(0);
					}
				}

				// Initialize history plugin.
				// The callback is called at once by present location.hash. 
				$.historyInit(pageload, "advanced.html");

				// set onlick event for buttons using the jQuery 1.3 live method
				$("a[rel='history']").live('click', function(e) {
					if (e.button != 0) return true;
					
					var hash = this.href;
					hash = hash.replace(/^.*#/, '');

					// moves to a new page. 
					// pageload is called at once. 
					// hash don't contain "#", "?"
					$.historyLoad(hash);

					return false;
				});

				/****************************************************************************************/
			});
		</script>
	</body>
</html>