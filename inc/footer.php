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
    				    <h2 class="shop_text">Über uns</h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Über uns</li>
    				    		<li>Kontakt</li>
    				    		<li>Datenschutz</li>
    				    		<li>AGBs</li>
    				    	</ul>
    				    </div>
    		        </div>
					<div class="col-sm-6 col-lg-3">
						<h2 class="adderess_text">Seiten</h2>
						<div class="delivery_text">
    				    	<ul>
                                <a href="categories.php" style="color:white;"><li>Kategorien</li></a>
    				    		<a href="powerpoints.php?cat=top" style="color:white;"><li>Top</li></a>
    				    		<a href="powerpoints.php?cat=new" style="color:white;"><li>Neuste</li></a>
    				    		<a href="ppinfo.php?id=<?php $sql = "SELECT id FROM powerpoints WHERE active LIKE 1 ORDER BY rand() LIMIT 1"; $result = $mysqli->query($sql); while($row = $result->fetch_assoc()) { echo $row["id"]; } ?>" style="color:white;"><li>Zufällig</li></a>
    				    		<!-- <a href="" style="color:white;"><li>Suche</li></a> -->
    				    	</ul>
    				    </div>
    				</div>
    			</div>
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright"><?php echo date('Y'); ?> PowerPoint Marketplace</div>


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
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
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