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

			$fach = [
				0 => "Kein Fach",
				1 => "Deutsch",
				2 => "English",
				3 => "Geografie"
			];

	?>
	<div class="collection_text"><?php echo $row["title"]; ?></div>
   <div class="about_main layout_padding">
    <div class="collection_section">
    	<div class="container">
    		<h1 class="new_text"><strong><?php echo $row["title"] . " - " . $fach[$row["fach"]]; ?></strong></h1>
    	    <p class="consectetur_text"><?php echo $row["tinyinfo"]; ?></p>
    	</div>
    </div>
    <div class="collectipn_section_3 layout_padding">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    				<div class="col-md-8">
    					<div class="shoes-img3"><img src="storage/images/<?php echo $row["img"]; ?>/Slide1.png" style="width: 80%"></div>
    				</div>
    			</div>
    		</div>
			<iframe src='https://view.officeapps.live.com/op/embed.aspx?src=[https://www.unm.edu/~unmvclib/powerpoint/pptexamples.ppt]' width='100%' height='600px' frameborder='0'>
			<button class="seemore" style="width: 200px"><img src="images/download.svg"> Download</button>
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

