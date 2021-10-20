<?php
include 'hlavickaAdmin.php';
//include 'navbarAdmin.php';
?>

	<body style="background-color:powderblue;">

	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	  <a class="navbar-brand text-white" href="#">Admin</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse " id="navbarNavSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link text-light " href="">Odhlásiť sa</a>
	      </li>
	    </ul>
	  </div>
	</nav>



	<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;height: 881px;">
	    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
	     <img src="" alt="">
	    </a>
	    <hr>
	    <ul class="nav nav-pills flex-column mb-auto">
	      <li class="nav-item">
	        <a href="../public/theme/domov/index.php" class="nav-link  text-white" aria-current="page">
	          Domov
	        </a>
	      </li>
	      <li>
	        <a href="../public/theme/spravy/index.php" class="nav-link text-white">
	          Správy
	        </a>
	      </li>
	      <li>
	        <a href="../public/theme/onas/index.php" class="nav-link text-white">
	          O nás
	        </a>
	      </li>
	      <li>
	        <a href="../public/theme/galeria/index.php" class="nav-link text-white">
	          Fotogaléria
	        </a>
	      </li>
	      <li>
	        <a href="../public/theme/blog/index.php" class="nav-link text-white">
	          Blog
	        </a>
	      </li>
	      <li>
	        <a href="../public/theme/kontakt/index.php../public/theme/blog/index.php" class="nav-link text-white">
	          Menu
	        </a>
	      </li>
	    </ul>
	</div>

<?php
include 'pataAdmin.php';
?>
