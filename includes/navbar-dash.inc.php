 <!-- Navigation -->            
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container main-nav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="img-resonsive logo" src="../img/uel2.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <div class="col-md-offset-2 nav-links">
            <ul class="nav navbar-nav">
                    <?php
                        // Define each name associated with an URL
                        $urls = array(
                            'Home' => '../home.php',
                            'Dash' => '../admin/dashboard.php',
                            'Services' => '../services.php',
                            'Interfaces' => '../interfaces.php', 
                            'Logout' => '../logout.php',
                        );

                        foreach ($urls as $name => $url) {
                            echo '<li> <a href="'.$url.'">'.$name.'</a></li>';
                        }
                    ?>

            </ul>
            </div>
        

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="../admin/dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-arrows-v"></i> User Manager <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                         <li>
                                <a href="../admin/view-user.php">View users</a>
                            </li>
                            <li>
                                <a href="../admin/int-add-user.php">Add user</a>
                            </li>
                            <li>
                                <a href="../admin/int-delete-user.php">Remove user </a>
                            </li>
                            <li>
                                <a href="../admin/int-edit-user.php">Edit user </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#interface"><i class="fa fa-fw fa-arrows-v"></i> Interfaces <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="interface" class="collapse">
                            <li>
                                <a href="../admin/int-view-interface.php">View Interfaces</a>
                            </li>
                            <li>
                                <a href="../admin/int-add-interface.php">Add Interface </a>
                            </li>
                            <li>
                                <a href="../admin/int-delete-interface.php">Delete Interface </a>
                            </li>
                            <li>
                                <a href="../admin/int-edit-interface.php">Edit Interface </a>
                            </li>
                            
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#services"><i class="fa fa-fw fa-arrows-v"></i> Services <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="services" class="collapse">
                            <li>
                                <a href="../admin/serv-view.php">View Service</a>
                            </li>
                            <li>
                                <a href="../admin/serv-add.php">Add Service </a>
                            </li>
                            <li>
                                <a href="../admin/serv-delete.php">Delete Service </a>
                            </li>
                            <li>
                                <a href="../admin/serv-edit.php">Edit Service </a>
                            </li>
                            
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>