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
    			<h2>Willkommen <strong><?php echo getCurrentUsername(); ?><strong> 😃</h2><br><br>
                <a href="uploadpp.php"><button class="main_bt" style="background-color: green; width:250px;">Neue PowerPoint</button></a>
                <br><br><br>
                <form action="inc/loggout_form.php" method="POST">
                    <input type="hidden" name="loggout" value="loggout">
                    <div class="send_btn">
                        <button type="submit" class="main_bt">Abmelden</button>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h2 style="text-decoration: underline;">Meine PowerPoints:</h2>
                <br>
                <?php
                    $sql = "SELECT * FROM powerpoints WHERE (active LIKE 1 AND author LIKE ".$_SESSION["account"].")";    
					$result = $mysqli->query($sql);
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div style="margin-bottom:-30px;">    
                            <a href="ppinfo.php?id=<?php echo $row["id"] ?>" class="profileMyPPs">
                                <p class="best_text" style="float:left; margin-bottom:-10px;"><b><?php echo $row["title"] ?>&nbsp;</b>
                            </a>
                            &nbsp;&nbsp;
                            <a href="inc/deletepp.php?id=<?php echo $row["id"]; ?>" onclick="return confirmDeletePP()">x</p></a>
                        </div>
                        <br>                        
                    <?php
					}
                ?>
    	    </div>
        </div>
   	<!-- contact section end -->
</div>
<!-- info text end -->
<?php include('inc/footer.php'); ?>

