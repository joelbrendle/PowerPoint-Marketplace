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
	<!-- New Arrivals section start -->
	<div class="collection_text">PowerPoints</div>
    <div class="layout_padding gallery_section">
    	<div class="container">
				<?php
				
					if (isset($_GET['cat']) && $_GET['cat'] == 'top') {
						$sql = "SELECT * FROM powerpoints WHERE active LIKE 1 ORDER BY downloads DESC";
					} elseif (isset($_GET['cat']) && $_GET['cat'] == 'new') {
						$sql = "SELECT * FROM powerpoints WHERE active LIKE 1 ORDER BY created DESC";
					} elseif (isset($_GET['class'])) {
						$sql = "SELECT * FROM powerpoints WHERE active LIKE 1 AND fach LIKE ".$_GET['class'];
					} else {
						$sql = "SELECT * FROM powerpoints WHERE active LIKE 1";
					}
    
					$result = $mysqli->query($sql);

					$counter = 1;
					
					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						if ($counter == 1) echo '<div class="row">';
						?>
						<a href="ppinfo.php?id=<?php echo $row["id"] ?>">
						<div class="col-sm-4 pp-link">
							<div class="best_shoes">
								<p class="best_text"><?php echo $row["title"] ?> </p>
								<div class="shoes_icon"><img src="storage/images/<?php echo $row["img"]; ?>/Slide1.PNG" width="280" max-height="183" style="margin-left:17px"></div>
								<div class="star_text">
									<div class="left_part">
										<ul>
											<?php for($i=0; $i<$row["stars"]; $i++) { ?>
												<li><a href="#"><img src="images/star-icon.png"></a></li>
											<?php }
											if ($row["stars"] <= 0) { ?>
												<li><a href="#"></a></li>
											<?php } ?>
										</ul>
									</div>
									<div class="right_part">
										<div class="shoes_price"><img src="images/download.svg"> <span style="color: #ff4e5b;"><?php echo $row["downloads"]; ?></span></div>
									</div>
								</div>
							</div>
						</div>
						</a>
						<?php
						if ($counter == 3) {
							echo '</div>';
							$counter = 0;
						}
						$counter++;
					}
				} ?>
    	</div>
    </div>
   	<!-- New Arrivals section end -->
</div>
<!-- info text end -->
<?php include('inc/footer.php'); ?>