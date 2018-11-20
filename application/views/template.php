<!DOCTYPE html>
<html lang="en">
<head>

    <base href="<?php echo base_url(); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSNF Resource Center</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="user_login.php"><img src="assets/images/logo.png" style="width: 100px; height: 70px; margin-top: -15px;" /></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome back,  <?php echo $this->session->userdata('first_name '); echo $this->session->userdata('last_name ');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    <!-- <?php //if ( isset($show_sidebar) && $show_sidebar ) : ?> -->
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">                    
                
                <li class="active">
                    <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>

                <li>
                    <a href="courselist.php"><i class="fa fa-fw fa-table"></i> Add Client Info</a>
                </li>
                <li>
                    <a href="noteslist.php"><i class="fa fa-fw fa-bar-chart-o"></i>General Data</a>
                </li>
                <li>
                    <a href="assignment.php"><i class="fa fa-fw fa-users"></i> Analysis</a>
                </li>
                <li>
                    <a href="studentlist.php"><i class="fa fa-fw fa-user"></i> Graphs</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#setting"><i class="fa fa-fw fa-gear"></i> Settings <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="setting" class="collapse">
                        <li>
                            <a href="settings.php">Reasons Setting</a>
                        </li>
                        <li>
                            <a href="settings.php">Change Password</a>
                        </li>
                        <li>
                            <a href="users.php">Users</a>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    <?php //endif; ?>
    
    <?php $this->load->view('notifications'); ?>
    <?php $this->load->view($main_content); ?>
</div>

<!-- jQuery Version 1.11.0 -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/myscript.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="assets/js/plugins/morris/raphael.min.js"></script>
<script src="assets/js/plugins/morris/morris.min.js"></script>
<script src="assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>