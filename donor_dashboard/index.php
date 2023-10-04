
<?php 
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ../login.php");
    exit;
}
include 'include/header.php';
include 'include/navbar.php';

?>

      
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                
  <h2>Request for Blood Donation</h2>

  <table class="table ">
    <thead>
        <tr>
        
        <th class="text-center"></th>
        <th class="text-center"></th>
        <th class="text-center"></th>
        <th class="text-center"> <b> Recevier Information</b></th>
        <th class="text-center"></th>
        <!-- <th class="text-center">Phone</th> -->


        <th class="text-center" colspan="2"></th>
      </tr>
        
      <tr>
        
        <th class="text-center">Sr</th>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone</th>
        <!-- <th class="text-center">Phone</th> -->


        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../connection.php";
      
    //   $sql="SELECT * from donor_info ";
    $donor_id = $_SESSION['donor_id'];
    $sql="SELECT * FROM `request _received` WHERE `donor_id`='$donor_id'";
  
    $select = $conn->query($sql);
      $count=1;
     
      if (mysqli_num_rows($select) > 0){
        while ($row = mysqli_fetch_assoc($select)) {
            $id= $row["receiver_id"];
    ?>
    <tr>
      <td><?=$count?></td>
      <!-- <td><?=$row["donor_id"]?></td> -->
      <td><?=$row["receiver_id"]?></td>      
      <td><?=$row["receiver_name"]?></td> 
      <td><?=$row["receiver_email"]?></td>     
      <td><?=$row["receiver_phone"]?></td> 
      
      <td>
        <!-- <button class="btn btn-success"><a href="" class="text-light">Accept</a></button>
        <button class="btn btn-danger"><a href="status.php?receiver_id='.$id.'&status=1">Reject</a></button> -->

          
            <?php
        if($row['status']==2){
            
            // echo '<button class="btn btn-success"><a type="button" href="status.php?receiver_id='.$row['receiver_id'].'&status=0" >Accepted</a></button>';}
          echo ' <button class="btn btn-success"><a href="status.php?receiver_id='.$id.'&status=0" class="text-light">Accept</a></button>
        <button class="btn btn-danger"><a href="status.php?receiver_id='.$id.'&status=1" class="text-light">Reject</a></button>'; }
        if($row['status']==0){
            
            // echo '<button class="btn btn-success"><a type="button" href="status.php?receiver_id='.$row['receiver_id'].'&status=0" >Accepted</a></button>';}
          echo ' <button class="btn btn-success"><a href="" class="text-light">Accepted</a></button>
        '; }
        if($row['status']==1){
            
            // echo '<button class="btn btn-success"><a type="button" href="status.php?receiver_id='.$row['receiver_id'].'&status=0" >Accepted</a></button>';}
          echo ' 
        <button class="btn btn-danger"><a href="" class="text-light">Rejected</a></button>'; }
        
        
      
        ?>
        
       


      </td>
    
        
        
       
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
                 

                   

                    <!-- Content Row -->

                  

                </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- <div id="map"></div><br> -->
    <!-- End of Page Wrapper -->
    <div id="donor_details">
    <input type="text" name="" id="">
    <body class="registration">
    <label for="latitude" id="latitude">latitude</label>
    <input value= "<?php echo $_SESSION['latitude']?>"><br>
    <label for="longitude" id="longitude">longitude</label>
    <input value= "<?php echo $_SESSION['longitude']?>"><br>
    <label for="accuracy">accuracy</label>
    <input value= "<?php echo $_SESSION['accuracy']?>"><br>
    <label for="name" id="name">name</label>
    <input value= "<?php echo $_SESSION['name']?>"><br>
    <label for="email" id="email">email</label>
    <input value= "<?php echo $_SESSION['email']?>"><br>
    <label for="donor_id" id="donor_id">donor_id</label>
    <input value= "<?php echo $_SESSION['donor_id']?>"><br>
    <label for="bgroup" id="bgroup">bgroup</label>
    <input value= "<?php echo $_SESSION['bgroup']?>"><br>
    </div>

    <div class="input-control" id="lat_long">
                <label for="Your Live Location">Your Live Location</label>
                <div id="map"></div><br>
                <input type="number" name="latitude" id="latitude" step="0.000000000000001">
                <input type="number" name="longitude" id="longitude" step="0.00000000000001">
                <input type="number" name="accuracy" id="accuracy" step="0.00000000000001">
                </div>





<?php include 'include/scripts.php';
include 'include/footer.php';
?>
