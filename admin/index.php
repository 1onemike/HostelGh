<?php 

include "head.php";
 ?>

<!DOCTYPE html>
<html lang="en">
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
                <a class="navbar-brand" href="index.php">Hostel Admin </a>
            </div>

           
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $hName ;?> <b class="caret"></b></a>
                                 <ul class="dropdown-menu">
                                     <li>
                                         <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                                     </li>
                                     <li>
                                         <a href="#"><i class="fa fa-fw fa-envelope"></i>Inbox</a>
                                     </li>
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
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                    <li ><a href="../index.php"><i class="fa fa-fw fa-arrow-left"></i> <i class="fa fa-fw fa-home"></i> BACK TO HOME</a></li>

                     <!-- <li>
                      <a  href="../hostels.php">BROWSE HOSTELS </a>
                     
                    </li>
                       <li><a  href="../about-us.php">ABOUT US</a></li>                                       
                    
                    <li><a href="../contact.php">CONTACT US</a></li> -->
                    
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="reservations.php"><i class="fa fa-fw fa-table"></i> Reservations</a>
                    </li>
                    <li>
                        <a href="reviews.php"><i class="fa fa-fw fa-check-square-o"></i> Reviews</a>
                    </li>   
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-info"></i> Help</a>
                    </li>
                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li> -->
                 
                </ul>
            </div>


            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Overview
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
          
                <!-- /.row -->

                <div class="row">
                  
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-table fa-5x"></i>

                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <?php

                                        $counter= mysql_query("SELECT COUNT(id) FROM   reservations");
                                        $count=mysql_result($counter,0, 'COUNT(id)');
                                        if($count ==1){
                                            $label="RESERVATION";
                                        }else{
                                            $label="RESERVATIONS";
                                        }


                                        ?>
                                        <div class="huge"><?php echo $count;?></div>
                                        <div> ROOM <?php echo $label;?></div>
                                    </div>
                                </div>
                            </div>
                            <a href="reservations.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check-square-o fa-5x"></i>
                                    </div>

                                    <?php
                                     
                                    $counter= mysql_query("SELECT COUNT(review) FROM   reviews");
                                    $count=mysql_result($counter,0, 'COUNT(review)');
                                    if($count ==1){
                                        $label="REVIEW";
                                    }else{
                                        $label="REVIEWS";
                                    }
                                    ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $count ;?></div>
                                        <div><?php echo $label ;?>       </div>
                                    </div>
                                </div>
                            </div>
                            <a href="reviews.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                     <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <?php
                                    
                                    $counter= mysql_query("SELECT COUNT(id) AS 'count' FROM   ratings ");
                                    $count=mysql_result($counter,0, 'count');
                                    if($count ==1){
                                        $label="RATING";
                                    }else{
                                        $label="RATINGS";
                                    }
                                    ?>
                                    <div class="col-xs-3">
                                        <i class="fa fa-star fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $count ;?>  </div>
                                        <div><?php echo $label ;?>  </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>






                </div>



               

            </div>


                <!-- /.row -->

             
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>


    <script type="text/javascript">

    function show(){

      var textboxcount = document.getElementsByName("room").length;
      var textvalue="";
      for (var i = 0; i < textboxcount ; i++) {
        if(textvalue==""){
          textvalue= textvalue + document.getElementsByName("room").item(i).value;  
        }else{
           textvalue=textvalue+"," +document.getElementsByName("room").item(i).value; 
        }
      
      }

      document.getElementById("room_csv").value = textvalue;


      var textboxcount = document.getElementsByName("price").length;
      var textvalue2="";
      for (var i = 0; i < textboxcount ; i++) {
        if(textvalue2==""){
          textvalue2= textvalue2 + document.getElementsByName("price").item(i).value;  
        }else{
           textvalue2=textvalue2+"," +document.getElementsByName("price").item(i).value; 
        }
      
      }
      document.getElementById("price_csv").value = textvalue2;

    }


    function show2(){

      var textboxcount = document.getElementsByName("avail").length;
      var textvalue="";
      for (var i = 0; i < textboxcount ; i++) {
        if(textvalue==""){
          textvalue= textvalue + document.getElementsByName("avail").item(i).value;  
        }else{
           textvalue=textvalue+"," +document.getElementsByName("avail").item(i).value; 

        }
      
      }

            document.getElementById("avail_csv").value = textvalue;

    }


    
    </script>



   
</body>

</html>
