<?php include('inc/header.php'); ?>
		<?php include('inc/nav.php') ?>
        <?php if(!ISSET($_SESSION["account"])) header("Location: login.php"); ?>
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
    <!-- contact section start -->
    <div class="collection_text">PowerPoint Bearbeiten</div>
    <div class="layout_padding contact_section">
    	<div class="container-fluid ram">
    		<div class="text-center">
    			<h2>Hier kannst du deine PowerPoint bearbeiten</h2><br><br>
                <form class="" action="inc/editpp_form.php" method="POST" style="width:40%;margin-left:30%;" enctype="multipart/form-data">
                
                    <?php
                        $sql = "SELECT * FROM powerpoints WHERE (author LIKE ".$_SESSION["account"] . " && id LIKE " . $_GET["id"] . ");";    
                        $result = $mysqli->query($sql);
                        while($row = $result->fetch_assoc()) { ?>
                            <input type="hidden" name="editpp" value="editpp">
                            Titel: <input class="email-bt" type="text" name="title" placeholder="Titel" value="<?php echo $row["title"]; ?>"><br><br>
                            Beschreibung: <input class="email-bt" type="text" name="desc" placeholder="Beschreibung" value="<?php echo $row["tinyinfo"]; ?>"><br><br>
                            <!-- <input class="email-bt" type="text" name="fach" placeholder="Fach (1,2,3...)"><br><br> -->
                            <!--<select class="nice-select" name="fach">
                                <?php 
                                    for($i=0; $i<count($fach); $i++) {
                                        echo '<option value="'.$i.'">'.$fach[$i].'</option>';
                                    }
                                ?>
                            </select><br><br>-->
                            <!-- Neue Datei auswählen: <input class="email-bt" type="file" name="ppfile" placeholder="Titel" style="height:80px"><br><br>
                            <input type="hidden" name="fach" value="0">-->
                            <div class="send_btn">
                                <br>
                                <a href="profile.php"><input type="button" value="Abbrechen :("></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="main_bt">Aktualisieren</button>
                            </div>
                        <?php } ?>

                </form>
    	</div>
    </div>
   	<!-- contact section end -->
</div>
<!-- info text end -->
<?php include('inc/footer.php'); ?>

