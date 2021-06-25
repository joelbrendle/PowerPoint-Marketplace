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

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-1 padding_0"></div>
					<div class="col-sm-5" id="title_box">
						<div class="col-sm-5">
							<div class="banner_taital">
								<h1 class="mens_text">PowerPoint </h1>
								<h1 class="banner_text"><strong>Marketplace</strong></h1>
								<p class="lorem_text">Gratis PowerPoints Herunterladen</p>
								<button class="buy_bt">Kategorien</button>
								<button class="more_bt">Best</button>
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
	<!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
				<h1 class="new_text" style="color: white; margin-left: 20px;"><strong>Beliebteste Kategorien</strong></h1>
    			<?php 
					for($i=1; $i<=6; $i++) {
						?>
							<div class="col-sm-4">
								<a href="powerpoints.php?class=<?php echo $i; ?>">
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
    			<a href="categories.php"><button class="buy_text" style="width:200px">&nbsp;Mehr Kategorien&nbsp;</button></a>
    		</div>
    	</div>
    </div>
   	<!-- New Arrivals section end -->
	<!-- info text start -->
    <div class="layout_padding collection_section">
    	
    </div>
    <div class="collection_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Über PP-Marketplace</strong></h1>
    	    <p class="info_text">Wir sind ein Marktplatz für PowerPoints aller Art. </p>
			<p class="info_text">Brauchst du eine PowerPoint für Geographie?
				<li class="info_text" style="margin-top: 5px;">&nbsp;&nbsp;&nbsp;1. Gehe einfach zur Kategorie Geographie</li>
				<li class="info_text">&nbsp;&nbsp;2. Such dir eine passende PowerPoint aus</li>
				<li class="info_text">&nbsp;&nbsp;3. Und lade sie herunter. Fertig :D</li></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
    	</div>
    </div>
	<!-- info text end -->
	<?php include('inc/footer.php'); ?>