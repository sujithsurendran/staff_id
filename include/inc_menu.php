<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!--div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div-->
    <ul class="nav navbar-nav">
      <li <?php if($page=='index') echo 'class="active"' ?>><a href="index.php">Home</a></li>
      <li <?php if($page=='idcard') echo 'class="active"' ?>><a href="idcard.php">ID</a></li>
      	  <?php if(isset($_SESSION['login'])){
				echo "<li style='text-align:right;'><a href='logout.php'>Logout " . $_SESSION['login'] . "</a></li>";
			}else{

				if($page=='idcard') echo '<li><a href="login.php">login</a></li>';

			}


			?></div>
    </ul>
  </div>
</nav>
<div>
