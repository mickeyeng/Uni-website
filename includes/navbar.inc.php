<?php session_start(); ?>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container main-nav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="" src="./img/uel2.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <div class="col-md-offset-2 nav-links">
            <ul class="nav navbar-nav">
                    <?php
                        // Define each name associated with an URL
                        $urls = array(
                            'Home' => 'home.php',
                            'Dashboard' => 'admin/dashboard.php',
                            'Services' => './services.php',
                            'Interfaces' => 'interfaces.php', 
                            'Logout' => 'logout.php',
                        );


                        foreach ($urls as $name => $url) {
                            echo '<li> <a href="'.$url.'">'.$name.'</a></li>';
                        }
                    ?>
           
            </ul>
             </div>
        

            <ul class="nav navbar-nav navbar-right">
                

                    <?php
                    if(isset($_SESSION['id'])) {

                      echo '<li><a href="#">Welcome, '. $_SESSION["id"] . '</a></li>';
                      echo '<li><a href="login.php">Log Out</a></li>';
                    } else {
                    //put login form or include here.
                        //exit();
                        echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                    }
                    ?>

                <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>