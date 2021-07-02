<?php include('inc/header.php'); ?>
		<?php include('inc/nav.php');
    if(ISSET($_SESSION["account"]) && $_SESSION["account"]) header("Location: profile.php");?>
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
    <div class="collection_text">Login / Register</div>
    <div class="layout_padding contact_section">
    	<div class="container-fluid ram">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="email_box">
              <div class="input_main">
                  <div class="container">
                    <form action="inc/login_form.php" method="POST">
                      <input type="hidden" name="login" value="login">
                      <h2 style="color: white"><strong>LOGIN</strong></h2>
                      <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Username / E-Mail" name="username" required="required">
                      </div>
                      <div class="form-group">
                        <input type="password" class="email-bt" placeholder="Password" name="password" required="required">
                      </div> 
                      <div class="send_btn">
                          <button type="submit" class="main_bt">Send</button>
                      </div>
                    </form>   
                  </div>
              </div>
            </div>
              </div>
              <div class="col-md-6">
            <div class="email_box">
              <div class="input_main">
                  <div class="container">
                    <form action="inc/register_form.php" method="POST">
                      <input type="hidden" name="register" value="register">
                      <h2 style="color: white"><strong>REGISTER</strong></h2>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="Username" name="username" required="required">
                        </div>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="E-Mail" name="mail" required="required">
                        </div>
                        <div class="form-group">
                          <input type="password" class="email-bt" placeholder="Password" name="password" required="required">
                        </div>
                        <div class="form-group">
                          <input type="password" class="email-bt" placeholder="Password" name="password" required="required">
                        </div>
                        <div class="send_btn">
                          <button type="submit" class="main_bt">Send</button>
                        </div>
                        </form>
                       </div>                
                    </div>
    			</div>
    		</div>
    	</div>
    </div>
   	<!-- contact section end -->
</div>
<!-- info text end -->
<?php include('inc/footer.php'); ?>

