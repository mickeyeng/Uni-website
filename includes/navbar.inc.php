
<!-- Navigation -->
<nav class="navbar navbar-inverse " role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="img-resonsive logo" src="./img/uel.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
                    <?php
                        // Define each name associated with an URL
                        $urls = array(
                            'Home' => 'home.php',
                            'Dashboard' => 'admin/dashboard.php',
                            'Services' => 'services.php',
                            'Interfaces' => 'interfaces.php', 
                            'Logout' => 'logout.php',
                        );

                        foreach ($urls as $name => $url) {
                            echo '<li> <a href="'.$url.'">'.$name.'</a></li>';
                        }
                    ?>

            </ul>
        

<ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>
</div>
<!-- /.navbar-collapse -->
</div>
</nav>
<!-- /.container -->