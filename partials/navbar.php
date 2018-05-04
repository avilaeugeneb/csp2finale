<nav class="navbar navbar-expand-lg navbar-dark elegant-color">

    <!-- Navbar brand -->
    <a class="navbar-brand ml-2" href="#">Pure Food</a>
    <div class="ml-auto d-none d-md-block">
        <ul class="navbar-nav">
            <a class="navbar-brand white-text">Our Partners:</a>

            <li class="nav-item">
                <a class="nav-link partner-links" href="#">Pure Tools</a>
            </li>

            <li class="nav-item partner-links">

                <a class="nav-link partner-links" href="#">Pure Trek</a>
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
<nav class="navbar navbar-expand-lg navbar-dark brown darken-4 scrolling-navbar" id="mainnav">
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="./home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./catalog.php">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./cart.php">Cart</a>
        </li>
    </ul>
    <!-- Links -->

    <form class="form-inline">
        <div class="md-form mt-0">
            <ul class="navbar-nav mr-auto">
                <?php 

                if (!isset($_SESSION['user'])){
                     echo '
                     <li class="nav-item">
                     <a class="nav-link" href="./register.php">Register</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="./login.php">Log-in</a>
                     </li>
                     ';
                 }
                 else{
                   echo '
                   <li class="nav-item">
                   <a class="nav-link" href="./profile.php">Profile</a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link" href="./logout.php">Log-out</a>
                   </li>
                   ';
               }

           ?>


       </ul>

   </div>
</form>
</nav>
    <!--/.Navbar-->