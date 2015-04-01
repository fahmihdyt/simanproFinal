<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::$app->params['base']?>css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo Yii::$app->params['base']?>css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::$app->params['base']?>css/sb-admin-2.css" rel="stylesheet">
    
    <link href="<?php echo Yii::$app->params['base']?>css/jquery-ui.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::$app->params['base']?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php
		$filename = substr($_SERVER["PHP_SELF"],strrpos($_SERVER["PHP_SELF"],'/')+1);
		$filenames=$_SERVER["PHP_SELF"];
		$string=explode('/',$filenames);
		$cekString= $string[4];
	?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SIMANPRO PT JAL</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               <li><?php echo "Hello ".Yii::$app->user->identity->username."!" ?></li>
               <li><a href="<?php echo Yii::$app->params['url']?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li >
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li class='<?php echo ($cekString == "aktivitas") ? "active":"" ?>'>
                            <a href="<?php echo Yii::$app->params['url']?>aktivitas"><i class="fa fa-dashboard fa-fw"></i> Activity</a>
                        </li>
                         <li class='<?php echo ($cekString == "issue") ? "active":"" ?>'>
                            <a href="<?php echo Yii::$app->params['url']?>issue"><i class="fa fa-dashboard fa-fw"></i> Issue</a>
                        </li>
                      </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
           
                <?= $content ?>
                <!-- /.col-lg-12 -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo Yii::$app->params['base']?>js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::$app->params['base']?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo Yii::$app->params['base']?>js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::$app->params['base']?>js/sb-admin-2.js"></script>
    
    <!-- Custom Text Area -->
    <script type="text/javascript" src="<?php echo Yii::$app->params['base']?>js/tinymce/js/tinymce/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>
	
	<!--custome Date Picker-->
	<script type='text/javascript' src="<?php echo Yii::$app->params['base']?>js/jquery-ui.js"></script>
	<script>
	$(document).ready(function(){
		$( ".date" ).datepicker();
	});
	</script>
	
</body>

</html>

