<?php include('inc/header.php'); ?>
		<?php include('inc/nav.php') ?>
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

        </div>
    </div>
</section>
			</div>
		</div>
	</div>
	<!-- header section end -->
    <div class="collection_section">
	<?php
	
		if (isset($_GET['id'])) {
			$sql = "SELECT * FROM powerpoints WHERE active LIKE 1 AND id LIKE ".$_GET['id'];
		} else {
			$sql = "SELECT * FROM powerpoints WHERE active LIKE 1 AND id LIKE 1";
		}

		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {


				?>
				<div class="collection_text"><?php echo $row["title"]; ?></div>
			<div class="about_main layout_padding">
				<div class="collection_section">
					<div class="container">
						<h1 class="new_text"><strong><?php echo $row["title"] . " - " . $fach[$row["fach"]]; ?></strong></h1>
						<p class="consectetur_text"><?php echo $row["tinyinfo"]; ?></p>

						<form action="inc/download_form.php" method="POST">
							<input type="hidden" name="download" value="login">
							<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
							<button class="seemore" style="width: 200px">
								<img src="images/download.svg">&nbsp;&nbsp;&nbsp;Download
							</button><br><br>
						</form>

					</div>
				</div>
				<div class="collectipn_section_3 layout_padding">
					<br><br><br>
					<div class="container">




						<script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
						<script type="text/javascript">
							window.jssor_1_slider_init = function() {

								var jssor_1_SlideshowTransitions = [
								{$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
								{$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
								{$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
								{$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
								{$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
								{$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
								{$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
								];

								var jssor_1_options = {
								$AutoPlay: 1,
								$SlideshowOptions: {
									$Class: $JssorSlideshowRunner$,
									$Transitions: jssor_1_SlideshowTransitions,
									$TransitionsOrder: 1
								},
								$ArrowNavigatorOptions: {
									$Class: $JssorArrowNavigator$
								},
								$BulletNavigatorOptions: {
									$Class: $JssorBulletNavigator$,
									$SpacingX: 16,
									$SpacingY: 16
								}
								};

								var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

								/*#region responsive code begin*/

								var MAX_WIDTH = 980;

								function ScaleSlider() {
									var containerElement = jssor_1_slider.$Elmt.parentNode;
									var containerWidth = containerElement.clientWidth;

									if (containerWidth) {

										var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

										jssor_1_slider.$ScaleWidth(expectedWidth);
									}
									else {
										window.setTimeout(ScaleSlider, 30);
									}
								}

								ScaleSlider();

								$Jssor$.$AddEvent(window, "load", ScaleSlider);
								$Jssor$.$AddEvent(window, "resize", ScaleSlider);
								$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
								/*#endregion responsive code end*/
							};
						</script>
						<style>
							/*jssor slider loading skin spin css*/
							.jssorl-009-spin img {
								animation-name: jssorl-009-spin;
								animation-duration: 1.6s;
								animation-iteration-count: infinite;
								animation-timing-function: linear;
							}

							@keyframes jssorl-009-spin {
								from { transform: rotate(0deg); }
								to { transform: rotate(360deg); }
							}

							/*jssor slider bullet skin 053 css*/
							.jssorb053 .i {position:absolute;cursor:pointer;}
							.jssorb053 .i .b {fill:#fff;fill-opacity:0.3;}
							.jssorb053 .i:hover .b {fill-opacity:.7;}
							.jssorb053 .iav .b {fill-opacity: 1;}
							.jssorb053 .i.idn {opacity:.3;}

							/*jssor slider arrow skin 093 css*/
							.jssora093 {display:block;position:absolute;cursor:pointer;}
							.jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
							.jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
							.jssora093:hover {opacity:.8;}
							.jssora093.jssora093dn {opacity:.6;}
							.jssora093.jssora093ds {opacity:.3;pointer-events:none;}
						</style>
						<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:680px;height:510px;overflow:hidden;visibility:hidden;">
							<!-- Loading Screen -->
							<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
								<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
							</div>
							<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:680px;height:510px;overflow:hidden;">
								<div>
									<img data-u="image" src="storage/images/<?php echo $row["img"]; ?>/Slide1.PNG" />
								</div>
								<div>
									<img data-u="image" src="storage/images/<?php echo $row["img"]; ?>/Slide2.PNG" />
								</div>
								<div>
									<img data-u="image" src="storage/images/<?php echo $row["img"]; ?>/Slide3.PNG" />
								</div>
								<div>
									<img data-u="image" src="storage/images/<?php echo $row["img"]; ?>/Slide4.PNG" />
								</div>
							</div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">responsive slider</a>
							<!-- Bullet Navigator -->
							<div data-u="navigator" class="jssorb053" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
								<div data-u="prototype" class="i" style="width:12px;height:12px;">
									<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
										<path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
									</svg>
								</div>
							</div>
							<!-- Arrow Navigator -->
							<div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
								<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
									<circle class="c" cx="8000" cy="8000" r="5920"></circle>
									<polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
									<line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
								</svg>
							</div>
							<div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
								<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
									<circle class="c" cx="8000" cy="8000" r="5920"></circle>
									<polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
									<line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
								</svg>
							</div>
						</div>
						<script type="text/javascript">jssor_1_slider_init();
						</script>




					</div>
				</div>
				</div>
	<?php
		}
	}
	?>
	<!-- new collection section end -->
</div>
<!-- info text end -->
<?php include('inc/footer.php'); ?>

