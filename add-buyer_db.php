
<?php

session_start();

   $buyer_name=$_POST['buyer_name'];
  
   $buyer_userid=$_POST['userid'];
  
   $buyer_password=$_POST['pass_word'];
  
    $conntactperson=$_POST['contact'];
  
    $buyer_email=$_POST['email-id'];
  
    $phone=$_POST['phone'];
  
     $address=$_POST['add'];
  
   $country=$_POST['country'];
  
    $state=$_POST['state'];
  
    $city=$_POST['city'];
  
    $currency=$_POST['currency'];
  


  include 'lib/db.php';
  $target_dir = "Logo_images/";
   $target_file = $target_dir . basename($_FILES["file"]["name"]);
   $filename=basename($_FILES["file"]["name"]);
  $uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
      header('location:add-buyer.php?checked_p3=p3');
       
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($target_file)) {
  header('location:add-buyer.php?checked_p4=p4');
    //echo "<center>Sorry, file already exists.</center>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
  header('location:add-buyer.php?checked_p5=p5');
    
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "<center>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</center>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "<center>Sorry, your file was not uploaded.</center>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "<center><i><h4>The file ". basename( $_FILES["file"]["name"]). " has been uploaded.</h4></i></center>";
        $country_name=mysqli_query($conn,"SELECT `country_name` FROM `country` WHERE id=$country;");
        while($info=mysqli_fetch_assoc($country_name))
        {
         $country_new_name=$info['country_name'];
         
        }
      
        $state_name=mysqli_query($conn,"SELECT `name` FROM `states` WHERE id=$state;");
        while($info=mysqli_fetch_assoc($state_name))
        {
         $state_new_name=$info['name'];
        }
        $city_name=mysqli_query($conn,"SELECT `name` FROM `city` WHERE id='$city';");
        while($info=mysqli_fetch_assoc($city_name))
        {
         $city_new_name=$info['name'];
        }
      
      
        $create_buyerid=mysqli_query($conn,"SELECT * FROM `buyer_add`");
         echo $new_id=5486;
         $sr=1;
        while($information=mysqli_fetch_assoc($create_buyerid))
        {
      echo $new_id=$information['BUYER_ID'];
      $sr=$information['SR_NO'];
       $new_id++;
       $sr++;
       }
       $insert_query=
       "INSERT INTO `buyer_add` VALUES(
         '$sr',
        '$new_id',
       '$buyer_name',
       '$buyer_userid',
       '$buyer_password',
       '$conntactperson',
       '$buyer_email',
       '$phone',
       '$address',
       '$city_new_name',
       '$state_new_name',
       '$country_new_name',
       '$currency',
       '$filename',
       '')";
        $run_insert=mysqli_query($conn,$insert_query);
        if($run_insert){
         header('location:add-buyer.php?checked_p1=p1');
      }
        else{
         header('location:add-buyer.php?checked_p2=p2');
        }
      
      

    } else {
      header('location:add-buyer.php?checked_p6=p6');
        
    }

 
}

?>