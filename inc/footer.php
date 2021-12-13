	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-4 col-lg-2">
    		        </div>
					<div class="col-sm-6 col-lg-3">
    					<div><a href="#"><img src="images/Untitled.png" style="height: 100px;"></a></div>
    		        	<p class="dummy_text">Gratis PowerPoints Herunterladen</p>
    				</div>
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Infos</h2>
    				    <div class="delivery_text">
    				    	<ul>
                                <a href="impressum" style="color:white;"><li>Über uns</li></a>
    				    		<a href="mailto:info.ppmarketplace@gmail.com" style="color:white;"><li>Kontakt</li></a>
    				    		<a href="impressum" style="color:white;"><li>Impressum</li></a>
    				    		<a href="datenschutz" style="color:white;"><li>Datenschutz</li></a>
    				    		<!-- <a href="agb" style="color:white;"><li>AGB</li></a> -->
    				    	</ul>
    				    </div>
    		        </div>
					<div class="col-sm-6 col-lg-3">
						<h2 class="adderess_text">Seiten</h2>
						<div class="delivery_text">
    				    	<ul>
                                <a href="categories" style="color:white;"><li>Kategorien</li></a>
    				    		<a href="powerpoints?cat=top" style="color:white;"><li>Top</li></a>
    				    		<a href="powerpoints?cat=new" style="color:white;"><li>Neuste</li></a>
    				    		<a href="ppinfo?id=<?php $sql = "SELECT id FROM powerpoints WHERE active LIKE 1 ORDER BY rand() LIMIT 1"; $result = $mysqli->query($sql); while($row = $result->fetch_assoc()) { echo $row["id"]; } ?>" style="color:white;"><li>Zufällig</li></a>
    				    		<!-- <a href="" style="color:white;"><li>Suche</li></a> -->
    				    	</ul>
    				    </div>
    				</div>
    			</div>
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">PowerPoint Marketplace © <?php echo date('Y'); ?></div>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>