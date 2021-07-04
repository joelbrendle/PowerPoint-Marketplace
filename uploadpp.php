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
    <div class="collection_text">New PowerPoint</div>
    <div class="layout_padding contact_section">
    	<div class="container-fluid ram">
    		<div class="text-center">
    			<h2>Lade hier deine PowerPoint hoch!</h2><br><br>
                <form class="" action="inc/uploadpp_form.php" method="POST" style="width: 40%" enctype="multipart/form-data">
                    <input type="hidden" name="uploadpp" value="uploadpp">
                    <input class="email-bt" type="text" name="title" placeholder="Titel"><br><br>
                    <input class="email-bt" type="text" name="desc" placeholder="Beschreibung"><br><br>
                    <input class="email-bt" type="text" name="fach" placeholder="Fach (1,2,3...)"><br><br>
                    <select>
                        <option>asdf</option>
                    </select>
                    <input class="email-bt" type="file" name="ppfile" placeholder="Titel" style="height:80px"><br><br>
                    <div class="send_btn">
                        <br>
                        <button type="submit" class="main_bt">Fertig :D</button>
                    </div>
                </form>
    	</div>
    </div>
   	<!-- contact section end -->
</div>
<!-- info text end -->
<?php include('inc/footer.php'); ?>

