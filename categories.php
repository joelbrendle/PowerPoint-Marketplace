<?php include('inc/header.php'); ?>
		<?php include('inc/nav.php') ?>
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            

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
    	</div>
    </div>
   	<!-- New Arrivals section end -->
	<!-- info text start -->
    <div class="layout_padding collection_section">
    	
    </div>
    <div class="collection_section">
	<div class="container">
		<div class="row">
			<h1 class="new_text" style="color: black; margin-left: 20px;"><strong>Alle Kategorien</strong></h1>
			<?php 
				for($i=0; $i<count($fach); $i++) {
					?>
						<div class="col-sm-4">
							<a href="powerpoints?class=<?php echo $i; ?>">
								<div class="all-cat">
									<p class="best_text" style="color:white;"><?php echo $fach[$i]; ?></p>
								</div>
							</a>
						</div>
					<?php
				}
			?>
		</div>
		&nbsp;
	</div>
</div>
<!-- info text end -->
<?php include('inc/footer.php'); ?>