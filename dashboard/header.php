<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />
    <!-- ===== Style CSS ===== -->
    <link rel="stylesheet" href="../assets/css/dashboardstyle.css">
    <title><?php echo $title;?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <div class="container">
        <!-- ------------------------ Start Aside ------------------------ -->
        <aside>

            <div class="logo">
                <h2>Dash<span class="danger">board </span></h2>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="dashboard.php"  class="<?php echo $title =='Dashboard' ? 'active' : '';?>">
                    <span class="material-symbols-sharp ">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="Admin.php" class="<?php echo $title =='Costomers' ? 'active' : '';?>">
                    <span class="material-symbols-sharp">group</span>
                    <h3>Admine</h3>
                </a>
                <a href="products.php" class="<?php echo $title =='Product' ? 'active' : '';?>">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Products</h3>
                </a>
                <a href="includes/logout.php">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside> 
        <!-- ------------------------ End Aside ------------------------ -->

        <!-- ------------------------ start Main ------------------------ -->
         <main>
            <!-- --------------------- start Header --------------------- -->
            <header class="top">
                <button id="menu-btn">
                        <span class="material-symbols-sharp">menu</span>
                </button>
                <div class="profile">
                    <div class="profile-photo">
                        <img src="../assets/img/cropped-DSC_0043.jpg">
                    </div>
                    <div class="info">
                        <small class="role">Administrator</small>
                        <p><?php echo $_SESSION["Username"];?></p>
                    </div>
                </div>
            </header>
            <!-- --------------------- End Header --------------------- -->