<!DOCTYPE html>
<html lang="en">

<?php
include "head.php";
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
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
                                                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
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
                               
                               <li >
                                   <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                               </li>
                               <li >
                                   <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                               </li>
                               <li class="active">
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

              <div class="row">
                  <div class="col-lg-12">
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover table-striped">
                              <thead>
                                  <tr>
                                      <th>Student ID</th>
                                      <th>Room Type</th>
                                      <th>Hostel Name</th>
                                      <th>Date Booked</th>
                                  </tr>
                              </thead>
                              <?php  
                            
                              $sqltest2 = " SELECT * FROM reservations";
                              $query_run2 = mysql_query($sqltest2);

                                 while($row=mysql_fetch_array($query_run2)){
                                  $hostel_id = $row['hostel_id'];

                                  $sql2= "SELECT hostelName FROM hostels WHERE hostel_id = $hostel_id";
                                  $run = mysql_query($sql2);
                                 
                                  $hostelname= mysql_result($run, 0,"hostelName");

                                  ?>
                              <tbody>
                                  
                                  <tr class="success">
                                      <td><?php echo $row['student_id'] ;?> </td>
                                      <td><?php echo $row['room_type'] ;?></td>
                                      <td><?php echo $hostelname ;?></td>
                                      <td><?php echo $row['date'] ;?></td>
                                  </tr>
                                 
                               
                                 
                              </tbody>

                              <?php
                          }
                          ?>
                          </table>
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

</body>

</html>
