<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>

<body>

    <div id="wrapper">
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
                    
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li  class="active">
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

              
              <div class="row">
                <div class="col-lg-12">

                    <!-- /.row -->
                        <div class="row">
                         


                                           <?php 

                                           $sqltest = " SELECT hostel_id FROM hostels where hostelName = '".mysql_real_escape_string($hName)."'   ";
                                           
                                           if($query_run2= mysql_query($sqltest)){

                                            $hostel_id =  mysql_result ($query_run2,  0, 'hostel_id');


                                            $sqltest1 = " SELECT * FROM hostels where hostel_id = '$hostel_id'   ";
                                            $query_run = mysql_query($sqltest1);
                                               while($row=mysql_fetch_array($query_run)){

                                               $longitude= $row["longitude"];
                                               $latitude = $row['latitude'];

                                            ?>

                                            
                                        
                                          <div class="col-lg-10 col-md-12 ">
                                          <div class="aa-properties-content">            
                                         <!-- Start properties content body -->
                                         <div class="aa-properties-details">

                                         <?php
                                                echo '
                                                  
                                                    <div class="aa-properties-details-img">
                                                    <img class="img-responsive" src="../'.$row["main_picture"].'" alt="img">
                                  
                                                   </div>




                                          <div class="aa-properties-info">

                                          <p>
                                          <a  href="edit-profile.php" class="btn btn-primary">Edit Profile</a>
                                          </p><p>
                                        <i class="fa fa-fw fa-phone"></i> Phone:  '.$row["phone1"].'
                                          </p><p>
                                          <i class="fa fa-fw fa-at"></i> Email :  '.$row["email"].'
                                          </p><p>
                                          <i class="fa fa-fw fa-map-marker"></i> Location:  '.$row["location"].'
                                          </p>
                                          

                                          '
                                          ;


                                        ?>

                                         <h4>Hostel Facilities</h4>
                                     <ul>
                                        <?php
                                                     $sql = "SELECT * FROM facilities WHERE hostel_hostel_id = '$hostel_id' ";
                                                    $run = mysql_query($sql);
                                                     
                                                      if (mysql_num_rows($run)>0) {


                                                      $csv= mysql_result($run,0, 'facility');



                                                    $array= explode(",",$csv);

                                                    foreach ($array as $row ) {
                                                      echo '<li>'.$row.'</li>' ;
                                                      # code...
                                                    }

                                                    }else{
                                                      echo "NO FACILITIES AT THE MOMENT";
                                                    } 




                                                    ?>
                                     </ul>

                                     <h4>ROOM TYPES AND PRICES </h4>
                                     <table class="table table-hover table-responsive">    
                                                                      <thead>      
                                                                         <tr>         
                                                                            <th>Room Type</th>          <th>Price (₵)</th>             
                                                                          </tr>   
                                                                       </thead>   

                                                                        <tbody> 

                                                                            
                                                                    
                                                                     <?php
                                                                     $sql = "SELECT * FROM room_types WHERE hostel_hostel_id =$hostel_id";
                                                                     $run = mysql_query($sql);

                                                                     

                                                                    
                                                                    
                                                                      if (mysql_num_rows($run)>0) {
                                                                       $csv= mysql_result($run,0, 'room_type');
                                                                       $array= explode(",",$csv);

                                                                        if (mysql_num_rows($run)>0) {
                                                                        $csv2= mysql_result($run,0, 'prices');
                                                                        $array2= explode(",",$csv2);

                                                                          $arrayresult = array_merge($array, $array2);

                                                                       foreach(array_keys($array) as $i) {

                                                                           

                                                                            
                                                                         
                                                                         if(!@$array2[$i]){
                                                                           echo ' 
                                                                           <tr> 
                                                                         <td>
                                                                          '.$array[$i].'

                                                                         </td> 
                                                                         <td>
                                                                          Not Available

                                                                         </td> 
                                                                            
                                                                                  </tr>';

                                                                         }else{
                                                                            echo '
                                                                            <tr> 
                                                                         <td>
                                                                          '.$array[$i].'

                                                                         </td> 
                                                                         <td>
                                                                            '.@$array2[$i].'

                                                                         </td> 
                                                                            
                                                                                  </tr>';
                                                                         }
                                                                         
                                                                                 
                                                                       }

                                                                     }

                                                                      }else{
                                                                       echo "NO ROOMS AT THE MOMENT";
                                                                      }

                                                                  

                                                                   


                                                                    ?> 


                                                                         
                                                                        </tbody> 
                                                                     </table>

                                      <section id="aa-gallery">
                                         <div class="container">
                                           <div class="row">
                                             <div class="col-lg-10  ">
                                               <div class="aa-gallery-area">
                                                 <div class="aa-title">
                                                   <h2>Gallery</h2>
                                                   <span></span>
                                                 </div>
                                                 <!-- Start gallery -->
                                                 <div class="aa-gallery-content">
                                                  <!-- Start gallery image -->
                                                   <div id="mixit-container" class="aa-gallery-body">
                                              <?php

                                               }


                                               $sqltest2 = " SELECT * FROM pictures where hostel_hostel_id = '$hostel_id'   ";
                                                                    $query_run2 = mysql_query($sqltest2);
                                                                       while($row=mysql_fetch_array($query_run2)){

                                                      
                                                 echo '
                                                 
                              
                                 <!-- start single gallery image -->
                                 <div class="aa-single-gallery mix bedroom">                  
                                   <div class="aa-single-gallery-item">
                                     <div class="aa-single-gallery-img">
                                       <a class="" href="../img/uploads/'.$row["path"].'"><img class="img-responsive" src="../img/uploads/'.$row["path"].'" alt="img"></a>
                                     </div>
                                     <div class="aa-single-gallery-info">
                                       <a class="fancybox" data-fancybox-group="gallery" href="../img/uploads/'.$row["path"].'"><span class="fa fa-eye">
                                       </a>
                                     </div>                  
                                   </div>
                                 </div>'
                                                   
                                                   
                                     ;}

                                      ?>

                                                  </div>
                                                 
                                                 </div>
                                               </div>
                                             </div>
                                           </div>
                                         </div>
                                       </section>

                                      

                                            


                                          

                           


                                     <h4>Map</h4>
                                   <!-- New York, NY, USA (40.7127837, -74.00594130000002) -->
                                   <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $latitude;?>,<?php echo $longitude;?>&amp;key=AIzaSyAbgwDu8UWMo_-f8rVgUIcsIHQngVUY6Jk"></iframe>
                                     <?php
                                   }

                                     ?>
                                   
                                             
                                </div><!-- Start properties detail
                               -->
                        
                             

                              </div>
                              <!-- Start properties 
                               -->
                        

                        </div><!-- col -->
                          
                    </div><!-- /.row -->

                    <div>

              </div>

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

    <!-- slick slider -->
    <script type="text/javascript" src="../js/slick.js"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="../js/nouislider.js"></script>
     <!-- mixit slider -->
    <script type="text/javascript" src="../js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->        
    <script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>

    <!-- Custom js -->
    <script src="js/custom.js"></script> 

    <!-- Morris Charts JavaScript -->
   

</body>

</html>
