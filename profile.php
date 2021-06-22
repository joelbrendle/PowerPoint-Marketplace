<?php include('inc/header.php'); ?>
		<?php include('inc/nav.php') ?>
        <?php if(!ISSET($_SESSION["account"])) header("Location: login.php"); ?>
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
    <!-- contact section start -->
    <div class="collection_text">Profile</div>
    <div class="layout_padding contact_section">
    	<div class="container-fluid ram">
    		<div class="text-center">
    			<h2>Willkommen <?php echo $_SESSION["account"]; ?></h2><br><br>
                <a href="uploadpp.php"><button class="main_bt" style="background-color: green; width:250px;">Neue PowerPoint</button></a>
                <br><br><br>
                <form action="inc/loggout_form.php" method="POST">
                <input type="hidden" name="loggout" value="loggout">
                <div class="send_btn">
                    <button type="submit" class="main_bt">Abmelden</button>
                </div>
                </form>
    	</div>
    </div>
   	<!-- contact section end -->
</div>
<!-- info text end -->
<?php include('inc/footer.php'); ?>

