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
    <nav class="navbar navbar-dark navbar_notxs" id="mainnav">
        <!-- Links -->
        <ul class="navbar-nav">
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
            <li class="nav-item cart">
                <a class="nav-link" href="./cart.php#mainnav"><i class="fa fa-cart-plus" aria-hidden="true"></i>Cart
                    <span class="totalprice">
                        <?php 
                        if(isset($_SESSION['total_amount'])){
                            if($_SESSION['total_amount'] == 0){
                                echo " ";
                            }
                            else{
                                echo "(₱".$_SESSION['total_amount'].")";
                            }
                        }
                        ?>
                    </span>
                </a> 
            </li>
        </ul>
        <!-- Links -->

        <ul class="navbar-nav">

            <?php  if (!isset($_SESSION['user'])):?>
                <li></li>
                <div class="grid reg">
                <li class="nav-item">
                    <a class="nav-link" href="./register.php#mainnav">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.php#mainnav">Log-in</a>
                </li>
                </div>
                
            <?php else:?>
                <li></li>
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
    </nav>


    <!--/.Navbar-->
    <nav class="navbar navbar-dark scrolling-navbar navbar_xs" id="mainnav">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./index.php#mainnav"><i class="fa fa-home" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./catalog.php#mainnav"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
            </li>
            <?php if (isset($_SESSION['user'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="./orderhistory.php#mainnav"><i class="fa fa-industry" aria-hidden="true"></i></a>
                </li>
            <?php endif; ?>
            <li class="nav-item cart">
                <a class="nav-link" href="./cart.php#mainnav"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                    <span class="totalprice ">
                        <?php 
                        if(isset($_SESSION['total_amount'])){
                            if($_SESSION['total_amount'] == 0){
                                echo " ";
                            }
                            else{
                                echo "(₱".$_SESSION['total_amount'].")";
                            }
                        }
                        ?>
                    </span>
                </a>
            </li>

            <?php  if (!isset($_SESSION['user'])):?>

                        <li class="nav-item">
                            <a class="nav-link" href="./register.php#mainnav"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php#mainnav"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                        </li>
                        
                    <?php else:?>

                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
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
        <!-- Links -->
    </nav>