<?php session_start();
$page="register";

include 'include/inc_constants.php';
include 'include/inc_head.php';
include 'include/inc_db_connection.php';
include 'include/inc_idcard.php';
include 'include/inc_error_messages.php';
include 'include/inc_menu.php';?>


<div class="jumbotron text-center">
  <h1>Organisation</h1>
  <p>Enter your details</p>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-10">

		<?php print_alerts(); ?>



		<?php if(isset($msg)){ echo $msg;	} ?>

      <h3>Enter Details below</h3>



			<p>    <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


			<div class="form-group">
				<label class="control-label col-sm-3" for="email">Email</label>
				<div class="col-sm-5">
      					<input name="email" value = "<?php echo $email;?>" type="email" class="form-control" id="email" placeholder="<?php echo $email;?>">
				</div>
				<div class=col-sm-4>
					<span class="text-danger"><?php echo $err_email;?></span>
				</div>
			</div>



			<div class="form-group">

				<label class="control-label col-sm-3" for password>PF Number</label>
				<div class="col-sm-5">
					<input type="password" name="password" class="form-control" id="password" />

				</div>

				<div class=col-sm-4>
					<span class="text-danger"><?php echo $err_password;?></span>
				</div>
			</div>


		   	 <!-- input type="submit" value="Register"/-->
		    	<button type="submit" class="btn btn-primary"  onclick="return validate();">Submit</button>
		    </form>
			</p>




    </div>
    <div class="col-sm-2">
      <h3>Details</h3>
      <p>Please enter your details here</p>
      <p>and ensure that all fields are entered correctly</p>
    </div>
  </div>
</div>



<br />



<?php include 'include/inc_footer.php';
// DB Connection -------------------------------------- CLOSE
$conn = null; ?>


