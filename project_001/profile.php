<?php

require "connection.php";
session_start();

?>

<?php
if(isset($_SESSION["u"])){
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Update Profile | C_lento</title>
    <link rel="stylesheet" href="bootstrap.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>

    <div class="col-12">
        <div class="col-12 container-fluid">
            <div class="row">
                <div class="container">
                    <!-- Home---------------------------------------------------------------------------- -->
                    <nav class="navbar bg-body-tertiary col-12 p-3">
                        <div class="container-fluid">
                            <a class="col-1" href="#"><img src="img/home/logo.png" alt="" class="home_logo"></a>
                           
            
            
                            <div
                                class=" dropdown d-inline-flex flex justify-content-center gap-1 dropstart shadow p-1 rounded-3">
            
                                <i class='bx bx-menu fs-3 nav-link mt-1' href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Account</a></li>
                                    <li><a class="dropdown-item" href="#">Notifications</a></li>
                                    <li><a class="dropdown-item" href="#">Wishlist</a></li>
                                    <li><a class="dropdown-item" href="#">Massages</a></li>
                                    <li><a class="dropdown-item" href="#">Help Center</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Log out</a></li>
                                </ul>
                                <?php
                                $email = $_SESSION["u"]["email"];

$user_rs =  Database::search("SELECT * FROM `customer` WHERE `email`='".$email."'");


$user_data = $user_rs->fetch_assoc();

$image_rs = Database::search("SELECT * FROM `profile_img` WHERE `customer_customer_id`='".$user_data["customer_id"]."'");

$image_data = $image_rs->fetch_assoc();

if($image_data == 0){
?>
<img src="img/home/male.png" alt="" class="profile_img">
<?php
}else{
?>
<img src="<?php echo $image_data["path"] ?>" alt="" class="profile_img">
<?php
}
?>
                            </div>

                        </div>
                    </nav>
            
            </div>
        </div>

        <hr/>

        <div class="col-12">
           <div class="row">

       
              <div class="col-12 col-lg-5">
                <section class="container d-flex flex-wrap justify-content-center align-items-center py-3 mt-5">
                            
                    <div class="col col-10 col-lg-6 shadow-lg border-1 p-3 mt-lg-5 justify-content-center rounded-3 d-block">
                        <div class="form-header d-flex align-items-center justify-content-center flex-row col-12 position-relative">
                            <div>
<?php
                            if($image_data == 0){
?>
 <img src="8665306_circle_user_icon.png" class="rounded-3"  style="width: 100px; height: 100px; border-radius: 100%;"/>
<?php
}else{
?>
<img src="<?php echo $image_data["path"] ?>" class="rounded-100  border-2"  style="width: 100px;  height: 100px; border-radius: 100%;">
<?php
}
?>
<input type="file" class="d-none" id="updateimage"/>
<div class="col-12" style="text-align: right;"><label class="imghov" for="updateimage"><img src="camera-fill.svg" class="opacity-75" style="margin-top: -60px; height: 30px; background-color: transparent;"/></label>
                            </div>
                               
                            </div>
                    </div>
                    <div class="form-content position-relative col-12 d-block mt-1">
                        <div class="d-block">
                        <header class="head_text start-50 d-flex fs-4 justify-content-center mb-4">Lakshan Eranga</header>
                        <p class="head_text start-50 d-flex fs-6 justify-content-center mb-4 opacity-75" style="margin-top: -20px;">Guest</p>
                    </div>
                     
                    </div>


                </section>  
              </div>
              <div class="col-12 col-lg-6">
              <section class="container d-flex flex-wrap justify-content-center align-items-center py-3">
                            
                <div class="col col-10 col-lg-12  p-3 mt-3 justify-content-center rounded-3 d-block">

                    <div class="col-12">
                        <header class="head_text start-50 d-flex fs-4 justify-content-center mb-4 ">Update Your profile</header>
                    </div>
                    <div class="row align-content-center">
                    <div class="col-6 g-2">
                        <label class="form-lable">First name</label>
                        <input type="text" class="form-control mt-1" value="<?php echo $user_data["fname"]; ?>" id="fn"/>
                    </div>
                    <div class="col-6 g-2">
                        <label class="form-lable">Last name</label>
                        <input type="text" class="form-control mt-1" value="<?php echo $user_data["lname"]; ?>" id="ln"/>
                    </div>
                    <div class="col-12 g-2">
                        <label class="form-lable">E-mail</label>
                        <input type="email" class="form-control mt-1" value="<?php echo $user_data["email"]; ?>" id="email"/>
                    </div>
                    <div class="col-6 g-2">
                        <label class="form-lable">Password</label>
                        <input type="password" class="form-control mt-1" value="<?php echo $user_data["password"]; ?>" id="pw"/>
                    </div>
                    <div class="col-6 g-2">
                        <label class="form-lable">Mobile</label>
                        <input type="text" class="form-control mt-1" value="<?php echo $user_data["mobile"]; ?>" id="mb"/>
                    </div>
                    <div class="col-6 g-2">
                        <label class="form-lable">Gender</label>
                        <select class="form-control mt-1" id="gen">
                        <option class="form-control" value="0">Select gender</option>
                        <?php
                   
                   $gender_rs = Database::search("SELECT * FROM `gender` 
                   INNER JOIN `customer` ON `gender`.gender_id=`customer`.gender_gender_id WHERE `customer`.email = '".$email."'");

                  

                   $gender_data = $gender_rs->fetch_assoc();
                   $gender_id = $gender_data["gender_id"];

                   $gender_hd = Database::search("SELECT * FROM `gender`");

                   for($x = 0;$x < $gender_hd->num_rows;$x++){
                    $gender = $gender_hd->fetch_assoc();
                    ?>
                    <option class="form-control" value="<?php echo $gender["gender_id"] ?>"
                    <?php

                    ?><?php

                    if(!empty($gender_id)){
                        if($gender["gender_id"] == $gender_id){
                            ?>selected<?php
                        }
                    }

?>>

                <?php echo $gender["gender_name"]; ?></option>
                    <?php
                   }
                        ?>

                        </select>
                    </div>
                    <div class="col-6 g-2">
                        <label class="form-lable">NIC</label>
                        <input type="text" class="form-control mt-1" value="<?php echo $user_data["nic"]; ?>" id="nic"/>
                    </div>
                    <div class="col-6 g-2">
                        <label class="form-lable">Registered date</label>
                        <input class="form-control mt-1" value="<?php echo $user_data["registered_date"]; ?>" readonly/>
                    </div>
                    <div class="col-6 g-2">
                        <label class="form-lable">Country</label>
                        <select class="form-control mt-1" id="cry">
                        <option class="form-control" value="0">Select Country</option>
                            
            <?php

              
$country = Database::search("SELECT * FROM `country` 
INNER JOIN `customer` ON `country`.country_id=`customer`.country_id WHERE `customer`.email = '".$email."'");
 $country_detail = $country->fetch_assoc();
 $country_id = $country_detail["country_id"];
 
         $country_rs = Database::search("SELECT * FROM `country`");
         for($y = 0;$y < $country_rs->num_rows;$y++){

            $country_data = $country_rs->fetch_assoc();

            ?>
 <option class="form-control" value="<?php echo $country_data["country_id"] ?>"
 <?php
           
        

            if(!empty($country)){
                if($country_data["country_id"] == $country_id){
                    ?>selected<?php
                }
            }
 ?>
                     ><?php echo $country_data["country_name"]; ?></option>
            <?php

         }

?>

                        </select>
                        
                    </div>
                    <div class="col-12 g-2">
                        <label class="form-lable">Address</label>
                        <input type="text" id="adr" class="form-control mt-1" value="<?php echo $user_data["address"]; ?>"/>
                    </div>

                    <div class="col-12 g-2">
                        <button class="btn btn-primary col-12" onclick="upprofile();">Update Your Profile</button>
                    </div>


                    </div>
                </div>        
              </section>
           </div>
        </div>

    </div>

<script src="script.js"></script>
</body>
</html>

<?php
}else{
    echo("Invalid user");
}
?>