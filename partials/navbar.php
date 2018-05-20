<?php 
    require_once './lib/connect.php';
?>   
    <nav class="navbar navbar-expand-lg navbar-dark elegant-color" id="secondnav">

    <!-- Navbar brand -->
    <a class="navbar-brand ml-2" href="./index.php">Pure Food</a>
    <div class="ml-auto d-none d-lg-block">
        <ul class="navbar-nav">
            <li class="nav-item">
                <span class="nav-link white-text">Our Partners:</span>
            </li>
            <li class="nav-item">
                <a class="nav-link partner-links" href="http://puretoolshardware-com.stackstaging.com" target="_blank">Pure Tools</a>
            </li>

            <li class="nav-item partner-links">

                <a class="nav-link partner-links" href="#">Pure Scents</a>
            </li>
            <li class="nav-item partner-links">

                <a class="nav-link partner-links" href="#">Pure Style</a>
            </li>
            <li class="nav-item partner-links">
                <a class="nav-link" href="#">Pure Tech</a>
            </li>
            <li class="nav-item partner-links">
                <a class="nav-link" href="#">Pure Cafe</a>
            </li>
        </ul>
    </div>

</nav>
<!--/.Navbar-->



<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar" id="mainnav">
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="./index.php#mainnav">PureFood Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./catalog.php#mainnav">Products</a>
        </li>
        <?php if (isset($_SESSION['user'])): ?>
        <li class="nav-item">
            <a class="nav-link" href="./orderhistory.php#mainnav">Order History</a>
        </li>
        <?php endif; ?>
        <li class="nav-item">
            <a class="nav-link" href="./cart.php#mainnav"><i class="fa fa-cart-plus" aria-hidden="true"></i>Cart
                <span class="totalprice">
                    <?php 
                        if(isset($_SESSION['total_amount']))
                            echo "(₱".$_SESSION['total_amount'].")";
                    ?>
                </span></a>
        </li>
    </ul>
    <!-- Links -->

    <form class="form-inline">
        <div class="md-form mt-0">
            <ul class="navbar-nav mr-auto">
            
            <?php  if (!isset($_SESSION['user'])):?>
                
                <li class="nav-item">
                <a class="nav-link" href="./register.php#mainnav">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./login.php#mainnav">Log-in</a>
                </li>
                    
            <?php else:?>
                    
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, <?=$_SESSION['user'];?></a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./profile.php#mainnav">Profile</a>
                        <?php 
                            $usertocheck = $_SESSION['user'];
                            $role_qry = "SELECT r.roleName 
                            FROM users u
                            JOIN roles r
                            ON(r.roleID=u.userRole)
                            WHERE u.userUid = '$usertocheck'";
                            $result_roleqry = mysqli_query($conn,$role_qry);
                            $roleinfo = mysqli_fetch_assoc($result_roleqry);
                        ?>
                        <?php if($roleinfo['roleName']=='admin'):?>
                            <a class="dropdown-item" href="./admin/index.php">Admin Panel</a>
                        <?php endif;?>
                        <a class="dropdown-item" href="./logout.php#mainnav">Log-out</a>
                    </div>
                </li>
                    
            <?php endif;?>
            
            </ul>

        </div>
    </form>
</nav>
    <!--/.Navbar-->

