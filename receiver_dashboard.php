<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script defer src="./js/donorvalidation.js"></script>
        <title>Realtime location tracker</title>
        

        <!-- leaflet css  -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

        <style>
            body {
                margin: 0;
                padding: 0;
            }

            #map {
                width: 50%;
                height: 50vh;
            }
        </style>
    </head>

    <body class="registration">
      <?php include('header.php');?>

   
      <section class="products">

          <h1 class="title">latest products</h1>

          <div class="box-container">

            <?php 
            include 'request_result.php';
    
                // $name= $_POST["name"];
                // $name = $_POST["name"];
                $blood_group = $_POST['blood_group'];
              
                $select_donors = mysqli_query($conn, "SELECT * FROM donor_info WHERE bgroup = '$blood_group'`") or die('query failed');
                if(mysqli_num_rows($select_donors) > 0){
                  while($fetch_donors = mysqli_fetch_assoc($select_donors)){
            ?>
            <form action="" method="post" class="box">
            <img class="image" src="./images/userimage.png" alt="">
            <div class="name">Donor Name:<?php echo $fetch_donors['name']; ?></div>
            <div class="price"> Blood Group: <?php echo $fetch_donors['bgroup']; ?>/-</div>
            <div class="price"> Donor ID:  <?php echo $fetch_donors['donor_id']; ?>/-</div>

            <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty"> -->
            <input type="hidden" name="donor_name" value="<?php echo $fetch_donors['name']; ?>">
            <input type="hidden" name="blood_group" value="<?php echo $fetch_donors['bgroup']; ?>">
            <input type="hidden" name="donor_id" value="<?php echo $fetch_donors['donor_id']; ?>">
            <input type="submit" value="Request for Blood" name="add_to_cart" class="btn">
            </form>
            <?php
                }
            }else{
                echo '<p class="empty">no products added yet!</p>';
            }
          
            ?>
          </div>

</section>
<?php include('footer.php');?>
    </body>

    </body>
    </html>