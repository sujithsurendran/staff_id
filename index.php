<?php
$page="index";
include 'include/inc_head.php';
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

      <h3>Register</h3>



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

