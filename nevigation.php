 <?php
  session_start();
  ?>
  
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark" style='background-color:#212529;'>
  <div class="container-fluid">
    <!-- logo -->
  <a class="navbar-brand" href="index.php">
      <img src="nahin.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
    </a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    Menu
    <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse text-uppercase"  id="navbarSupportedContent">
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
        <!-- <li class="nav-item"> -->
          <a class="nav-link active" aria-current="page" href="index.php" >Home</a>
        <!-- </li> -->
        
      <!-- </ul> -->
      <?php
      //echo $_SESSION['u_name'];
      if(isset($_SESSION['u_name'])){
        // LogIn
        //  echo '<li class="nav-item">';
         echo '<a class="nav-link" href="http://localhost/project-ghor-bari/profile.php">'.$_SESSION['u_name'].'</a>';
        //  echo '</li>';
         //<!-- Register -->
          // echo '<li class="nav-item">';
          echo '<a class="nav-link " href="http://localhost/project-ghor-bari/logout.php">Log Out</a>';
          // echo '</li>';
          
        //<!-- Search -->
          // echo '<li class="nav-item">';
          echo '<a class="nav-link " href="http://localhost/project-ghor-bari/search.php">Search</a>';
          // echo '</li>';

        //<!-- Compair -->
          // echo '<li class="nav-item">';
          echo '<a class="nav-link " href="http://localhost/project-ghor-bari/compair.php">Compair</a>';
          // echo '</li>';

        }
      else{
        //<!-- LogIn  -->
        //  echo '<li class="nav-item">';
         echo '<a class="nav-link" href="http://localhost/project-ghor-bari/login.php">Log In</a>';
        //  echo '</li>';
         //<!-- Register -->
        //  echo '<li class="nav-item">';
         echo '<a class="nav-link " href="http://localhost/project-ghor-bari/registration.php">Register</a>';
        //  echo '</li>';
        }
      ?>
      
    </div>
  </div>
</nav>
