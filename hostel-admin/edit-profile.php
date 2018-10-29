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

                            <div class="row" id="edit-profile" style="">
                                <div class="col-lg-12">
                                    <div class="panel panel-primary">

                                        <div class="panel-heading">
                                            <i class="fa fa-graduation-cap"></i>
                                           EDIT PROFILE
                                  </div>



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

                                  <div class="panel-body">

                                      <!-- this shows the loading image for the upload -->
                                      <div class="profile-updated">

                                      </div>
                                      <!-- end -->

                                      <div class="hostel-form">
                                      <div class="row">
                                          <div class="col-lg-4" >
                                              <div class="preview" align="center">
                                                  
                                                  <img src="../<?php echo $row['main_picture'] ;?>" class="img-rounded" height="200px" width="200px"/>

                                         </div>

                                    <div class="message"></div>

                                </div>

                                <div class="col-lg-6" >


                                                <br><br><br>


                                                <?php


                                                ?>
                                                <form class="picture" action="" method="post">
                                                    <label>Change Image</label>
                                                    <input type="file" name="file" id="pic_file" class="file"/>

                                                    <br>

                                                    <input type="submit" class="btn btn-success btn-md " value="Upload"/>

                                                </form>


                                </div>

                            </div>

                            <br>

                  <div class="row">

                          <div class="col-lg-12" >

                              <?php


                              if(isset($_POST['submit'])){

                                
                                $name = $_POST['name'];
                               $phone1 = $_POST['phone1'];
                              $email = $_POST['email'];
                                $phone2 = $_POST['phone2'];

                                 $location = $_POST['location'];
                                $institution = $_POST['institution'];
                                $price_range_high =$_POST['price_range_high'];
                               
                                $price_range_low = $_POST['price_range_low'];
                                
                                $room_csv = $_POST['room_csv'];

                                $facilities_csv = $_POST['facilities_csv'];
                                $price_csv = $_POST['price_csv'];


                                $new="UPDATE `facilities` SET `facility`='$facilities_csv' WHERE facilities.hostel_hostel_id='$hostel_id' ";
                                mysql_query($new);



                                $new="UPDATE `room_types` SET `room_type`='$room_csv',prices ='$price_csv' WHERE room_types.hostel_hostel_id='$hostel_id' ";
                                mysql_query($new);

                                //$array= explode(",",$room_csv);
                                // $array2= explode(",",$facilities_csv);
                                   // $arrayresult = array_merge($array, $array2);
                                /* $count=2;

                                 foreach($array as $i) {
                                  if(($count%2)==0){
                                  

                                      $room_type = @$i;
                                      $new="INSERT INTO  `prices` (room_id ,`room_type`, `hostel_hostel_id`) VALUES ('','$rooms', '$hostel_id')";
                                      mysql_query($new);


                                  }else{
                                
                                     $price = @$i;
                                  }

                                 $count += 1;
                                        
                                      
                                       // echo  $price = @$array[$i+1];

                                     }*/

                             $sqltest1 = "SELECT school_id FROM schools where school_name = '$institution' ";
                              $result = mysql_query($sqltest1);
                              $select_school_id=mysql_result($result,0, 'school_id');


                              if(!empty($_POST['latitude'])&& !empty($_POST['longitude'])){

                                $longitude =$_POST['longitude'];
                                $latitude =$_POST['latitude'];


                                $query3="UPDATE `hostels` 
                                          SET `hostelName` = $name,`phone1` =$phone1,`email` = $email,`location` =$location,
                                      `latitude` = '$latitude', 
                                      `longitude` = '$longitude', 
                                      `phone2` = '$phone2', 
                                      `school_school_id` = '$select_school_id',
                                       `price_range_high` = '$price_range_high'
                                       `price_range_low` = '$price_range_low' WHERE `hostels`.`hostel_id` = '$hostel_id'";

                                       if($sql=mysql_query($query3)){
                                        echo '<div class="row">
                                          <div class="col-lg-12">
                                              <div class="alert alert-info alert-dismissable">
                                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                  <i class="fa fa-info-circle"></i> SUCCESSFULLY UPDATED INFORMATION 
                                              </div>
                                          </div>
                                      </div>';





                                      header("Location: edit-profile.php");


                                       
                                       }
                                       else
                                       {
                                          echo '<div class="row">
                                            <div class="col-lg-12">
                                                <div class="alert alert-info alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <i class="fa fa-info-circle"></i> FAILED TO UPDATE INFORMATION 2
                                                </div>
                                            </div>
                                        </div>';
                                       }
                              }else{



                               

                      $query4 ="UPDATE hostels SET `hostelName`='".mysql_real_escape_string($name)."',`phone1`='$phone1',phone2='$phone2',`email`='$email',location ='$location',school_school_id ='$select_school_id',price_range_low=$price_range_low,price_range_high=$price_range_high WHERE `hostels`.`hostel_id` =$hostel_id ";


                                       if($sql=mysql_query($query4)){
                                       
                                        session_start();
                                        $_SESSION['hostelname']=$name;



                                      header("Location: edit-profile.php?edit=true");

                                       
                                       }
                                       else
                                       {
                                          echo '<div class="row">
                                            <div class="col-lg-12">
                                                <div class="alert alert-info alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <i class="fa fa-info-circle"></i> FAILED TO UPDATE INFORMATION 3
                                                </div>
                                            </div>
                                        </div>';
                                       }
                              }




        





                              }

                              if(@$_GET['edit']=="true"){

                                  echo '<div class="row">
                                    <div class="col-lg-12">
                                        <div class="alert alert-info alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="fa fa-info-circle"></i> SUCCESSFULLY UPDATED INFORMATION 
                                        </div>
                                    </div>
                                </div>';
                                
                              }

                              ?>


                          <form  id="form1"role="form" class="" action="" method="post">

                              <div class="row">
                                  <div class="col-lg-4">
                                      <label>Hostel Name</label>
                                  </div>


                                  <div class="col-lg-7 form-group input-group">
                                      <span class="input-group-addon"><i class="fa fa-user"></i>
                                              </span>
                                      <input class="form-control" placeholder="Name" name="name" value="<?php echo $hName ;?>">
                                  </div>

                              </div>

                            

                              <div class="row">
                                  <div class="col-lg-4">
                                      <label>Email</label>
                                  </div>

                                  <div class="col-lg-7 form-group input-group">
                                      <span class="input-group-addon"><i class="fa fa-envelope"></i>
                                      </span>
                                      <input class="form-control" placeholder="Email" required="" type="email" name="email" value="<?php echo $row['email'] ;?>">
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-lg-4">
                                      <label>Phone Number</label>
                                  </div>

                                  <div class="col-lg-7 form-group input-group">
                                      <span class="input-group-addon"><i class="fa fa-phone"></i>
                                      </span>
                                      <input type="tel" class="form-control" placeholder="Phone Number" name="phone1" value="<?php echo $row['phone1'] ;?>">
                                  </div>
                              </div>


                              <div class="row">
                                  <div class="col-lg-4">
                                      <label>Secondary Phone Number (if any)</label>
                                  </div>

                                  <div class="col-lg-7 form-group input-group">
                                      <span class="input-group-addon"><i class="fa fa-phone"></i>
                                      </span>
                                      <input type="tel" class="form-control" placeholder="Phone Number 2" name="phone2"
                                      value=" <?php echo $row['phone2'] ;?>">
                                  </div>
                              </div>


                              <div class="row">
                                  <div class="col-lg-4">
                                      <label>Location</label>
                                  </div>


                                  <div class="col-lg-7 form-group input-group">
                                      <span class="input-group-addon"><i class="fa fa-map-marker"></i>
                                              </span>


                                              <input class= "form-control"placeholder="Location"type="text"  required="required" onchange="codeAddress();" aria-required="true"  name="location" value="<?php echo $row['location'] ;?>">
                                                                         
                                                 </div>

                              </div>

                              <div class="row">
                                  <div class="col-lg-4">
                                      <label>Price Range</label>
                                  </div>

                                  <div class="col-lg-3 form-group input-group">
                                      <span class="input-group-addon"><i class="fa fa-money"></i>
                                      </span>
                                      <input class="form-control" placeholder="Low" required="" type="number" name="price_range_low" value="<?php echo $row['price_range_low'];?>">

                                      <span class="input-group-addon"><i class="fa fa-money"></i>
                                      </span>
                                      <input class="form-control" placeholder="High" required="" type="number" name="price_range_high" value="<?php echo $row['price_range_high'];?>">
                                  </div>

                                 
                              </div>

                                                       

                                 
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <label>Institution</label>
                                      </div>

                                      <div class="col-lg-7 form-group input-group">
                                          <span class="input-group-addon"><i class="fa fa-university"></i>
                                          </span>
                                        <?php

                                                        $schId=$row['school_school_id'];
                                                        $sqltest1 = "SELECT school_name FROM schools where school_id =$schId";
                                                         $result = mysql_query($sqltest1);
                                                         $school_name=mysql_result($result,0, 'school_name');


                                                        $sqltest = "SELECT * FROM schools";
                                                         $result1 = mysql_query($sqltest);




                                                         echo '
                                                         
                                                         <select class="form-control" name="institution">';
                                                         while($row=mysql_fetch_array($result1))
                                                         {

                                                          if($row['school_name']==$school_name){
                                                            echo '<option selected="selected"value="' . htmlspecialchars($row['school_name']) . '">' 
                                                                . htmlspecialchars($row['school_name']) 
                                                                . '</option>';


                                                          }else{
                                                             echo '<option value="' . htmlspecialchars($row['school_name']) . '">' 
                                                                 . htmlspecialchars($row['school_name']) 
                                                                 . '</option>';

                                                          }
                                                            
                                                         }
                                                         echo '</select>';
                                                           
                                                        ?>
                                      </div>
                                  </div>


                                  <div class="row">
                                      <div class="col-lg-4">
                                          <label>ROOMS AND PRICES</label>
                                      </div>

                                      <div class="col-lg-7 form-group input-group">


                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"></h3>
                                            </div>
                                            <div class="panel-body">
                                               
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
                                       <input class="form-control" type="text" name="room" value="'.$array[$i].'" />

                                      </td> 
                                      <td>
                                        <input class="form-control" type="number" name="price" value="0" />

                                      </td> 
                                         
                                               </tr>';

                                      }else{
                                         echo '
                                         <tr> 
                                      <td>
                                       <input class="form-control" type="text" name="room" value="'.$array[$i].'" />

                                      </td> 
                                      <td>
                                          <input class="form-control" type="number" name="price" value="'.@$array2[$i].'" />

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
                                            </div>
                                        </div>
                                       
                                       
                                                   <br>
                                                  <!--  <div id="add_new">ADD NEW</div> -->
                                      </div>
                                  </div>

                                  <div class="row">
                                     <div class="col-lg-4">
                                         <label>FACILITIES AVAILABLE</label>
                                     </div>
                                      <div class="col-lg-7 form-group input-group">


                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"></h3>
                                            </div>
                                            <div class="panel-body">
                                               
                                              <table class="table table-hover table-responsive" id="facilities">    
                                  <caption><h4>Facilities</h4></caption>   
                                   <thead>      
                                      <tr>         
                                         <th>Facility</th>                     
                                       </tr>   
                                    </thead>   

                                     <tbody> 

                                         
                                 
                                  <?php
                                  $sql = "SELECT * FROM facilities WHERE hostel_hostel_id =$hostel_id";
                                  $run = mysql_query($sql);
                                  
                                
                                  

                                   if (mysql_num_rows($run)>0) {
                                    $csv= mysql_result($run,0, 'facility');
                                    $array= explode(",",$csv);

                                   

                                   

                                    foreach ( $array as $row ) {
                                      echo '<tr> 
                                      <td>
                                       <input class="form-control" type="text" name="facility" value="'.$row.'" />

                                      </td> 
                                         
                                               </tr>
                                               ';
                                      # code...
                                    


                                  }



                                   }else{
                                    echo "NO FACILITIES ";
                                   }

                               

                                 ?> 
                                      
                                     </tbody> 
                                  </table>


                                            </div>
                                        </div>
                                       
                                       
                                                   <br>

                                                   <button type="button" id="addmorePOIbutton" value="Add More POIs" onclick="addRow(facilities);">ADD NEW addr</button>
                                                   <button type="button" id="addmorePOIbutton" value="Add More POIs" onclick="insRow();">ADD NEW ins</button>

                                                  <!--  <div id="add_new">ADD NEW</div> -->
                                      </div>
                                  </div>
                                  

                                  <div>
                                    <input type="hidden" class="btn btn-danger" name="room_csv" id="room_csv" ></input>
                                    <input type="hidden" class="btn btn-danger" name="facilities_csv"id="facilities_csv" ></input>
                                    <input type="hidden" class="btn btn-danger" name="price_csv"id="price_csv" ></input>

                                    <input type="hidden" class="btn btn-danger" name="longitude" id="lon"></input>
                                    <input type="hidden" class="btn btn-danger" name="latitude"id="lat" ></input>


                                  </div>

                                 
                                  <div class="row">
                                      <div class="col-lg-12" align="center">

                                     

                                          <button id="getCords" name="submit"type="submit" class="btn btn-success" onmouseover="show(); show2(); codeAddress();"  onfocus="show(); show2(); codeAddress();">Submit</button>
                                          <button id="reset1" type="reset" class="btn btn-danger" >Reset</button>
                                      </div>
                                  </div>

                              </form>
                              </div>

                                            </div>
                                        </div>


                                    </div>

                                    <?php 

                                  }

                                  }
                                  ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end of add student panel -->


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

      var textboxcount = document.getElementsByName("facility").length;
      var textvalue="";
      for (var i = 0; i < textboxcount ; i++) {
        if(textvalue==""){
          textvalue= textvalue + document.getElementsByName("facility").item(i).value;  
        }else{
           textvalue=textvalue+"," +document.getElementsByName("facility").item(i).value; 
        }
      
      }
            document.getElementById("facilities_csv").value = textvalue;

    }

    function addRow(tableID) {
            alert("add");

            var table = document.getElementById(tableID);

            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var cell3 = row.insertCell(0);
           cell3.innerHTML = cell3.innerHTML +' <input type="text" size="20" name="values[]"/> <INPUT type="button"  class="btn_medium" value="Remove" onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);" /><br><small><font color="gray">Enter Title</font></small>';
      //cell3.innerHTML = cell3.innerHTML +' <input type="text" size="20" name="values[]"/> <INPUT type="button"  class="btn_medium" value="Remove" onclick="this.parentNode.parentNode.innerHTML=\'\';" /><br><small><font color="gray">Enter Title</font></small>';       
    }

    function insRow()


    {
    // console.log( 'hi');
    alert("ins");
        var x=document.getElementById('facilities');
        var new_row = x.rows[1].cloneNode(true);
        var len = x.rows.length;
        new_row.cells[0].innerHTML = len;
        
        var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
        inp1.id += len;
        inp1.value = '';
        var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
        inp2.id += len;
        inp2.value = '';
        x.appendChild( new_row );
    }


    
    </script>

    <!-- Morris Charts JavaScript -->
   

</body>

</html>
