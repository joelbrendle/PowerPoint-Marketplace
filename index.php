<?php include('inc/header.php'); ?>
		<?php include('inc/nav.php') ?>
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-2 padding_0"></div>
					<div class="col-sm-5" id="title_box">
						<div class="col-sm-5">
							<div class="banner_taital">
								<h1 class="mens_text">PowerPoint </h1>
								<h1 class="banner_text"><strong>Marketplace</strong></h1>
								<p class="lorem_text">Gratis PowerPoints Herunterladen</p>
								<button class="buy_bt">Kategorien</button>
								<button class="more_bt">Top</button>
							</div>
					<div class="col-sm-5">
						<div class="shoes_img"></div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</section>			
			</div>
		</div>
	</div>
	<!-- header section end -->
	<!-- Beliebteste Kategorien -->
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
				<h1 class="new_text" style="color: white; margin-left: 20px;"><strong>Beliebteste Kategorien</strong></h1>
    			<?php 
					for($i=1; $i<=6; $i++) {
						?>
							<div class="col-sm-4">
								<a href="powerpoints?class=<?php echo $i; ?>">
									<div class="best_shoes">
										<p class="best_text"><?php echo $fach[$i]; ?></p>
									</div>
								</a>
							</div>
						<?php
					}
				?>
    		</div>
    		<div class="buy_now_bt">
    			<a href="categories"><button class="buy_text" style="width:200px">&nbsp;Mehr Kategorien&nbsp;</button></a>
    		</div>
    	</div>
    </div>
	<!-- Beliebteste Kategorien ende -->
	<!-- Neuste Powerpoints -->
    <div class="collection_section layout_padding" style="padding-bottom:90px;">
    	<div class="container">
    		<div class="row">
				<h1 class="new_text" style="margin-left:20px;"><strong>Neuste Powerpoints</strong></h1>
    			<?php 
					// get newest pps
					$sql = "SELECT * FROM powerpoints WHERE active LIKE 1 ORDER BY created DESC";

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
					}
				?>
    		</div>
    		<div class="buy_now_bt">
    			<a href="powerpoints.php?cat=new"><button class="buy_text" style="width:200px">&nbsp;Mehr PowerPoints&nbsp;</button></a>
    		</div>
    	</div>
    </div>
	<!-- Neuste Powerpoints ende -->
	<!-- info text start -->
    <div class="gallery_section">
    	<div class="container">
			<br><br><br><br>
    		<h1 class="new_text" style="color:#ffffff"><strong>Über PP-Marketplace</strong></h1>
    	    <p class="info_text" style="color:#ffffff">Wir sind ein Marktplatz für PowerPoints aller Art. </p>
			<p class="info_text" style="color:#ffffff">Brauchst du eine PowerPoint für Geographie?
				<li class="info_text" style="margin-top: 5px; color:#ffffff;">&nbsp;&nbsp;&nbsp;1. Gehe einfach zur <a href="powerpoints.php?class=1" style="border-bottom:2px solid #ffffff;color:#ffffff;">Kategorie Geographie</a></li>
				<li class="info_text" style="color:#ffffff">&nbsp;&nbsp;2. Such dir eine passende PowerPoint aus</li>
				<li class="info_text" style="color:#ffffff">&nbsp;&nbsp;3. Und lade sie herunter. Fertig :D</li></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
    	</div>
    </div>
	<!-- info text end -->
	<?php include('inc/footer.php'); ?>