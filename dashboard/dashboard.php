<?php
  session_start();
  $title = "Dashboard";
  include_once 'header.php';
  include_once 'includes/dashboardscript.php';
  if(!isset($_SESSION["good"])){
     header("location: ../authentication/login.php");
     exit();
  }
?> 
            <h1>Dashboard</h1>

            <div class="insights">

                <div class="Product">
                    <div class="middele">
                        <span class="material-symbols-sharp">grid_view</span>
                        <h3>Total Product</h3>
                    </div>
                        <h1><?php echo totalProduct(); ?></h1>
                </div>
                
                <div class="Users">
                    <div class="middele">
                        <span class="material-symbols-sharp">group</span>
                        <h3>Total Users</h3>
                    </div>
                        <h1><?php echo totalUsers(); ?></h1>
                </div>
                
                <div class="sales">
                    <div class="middele">
                        <span class="material-symbols-sharp">analytics</span>
                        <h3>Total sales</h3>
                    </div>
                        <h1>0</h1>
                </div>
            </div>
<?php
    include_once 'footer.php'
?>