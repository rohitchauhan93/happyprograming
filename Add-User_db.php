
<?php

session_start();

   $user_name=$_POST['User_name'];
  
   $user_userid=$_POST['userid'];
  
   $user_password=$_POST['pass_word'];
  
    $conntactperson=$_POST['contact'];
  
    $user_email=$_POST['email-id'];
  
    $phone=$_POST['phone'];
  
     $address=$_POST['add'];
  
   $country=$_POST['country'];
  
    $state=$_POST['state'];
  
    $city=$_POST['city'];
  
    $buyer_name=$_POST['buyer'];
  


  include 'lib/db.php';

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


  $create_userid=mysqli_query($conn,"SELECT MAX(ID) FROM `user_add` WHERE 1");
//$new_id=100;
  while($information=mysqli_fetch_row($create_userid))
  {
 $new_id=$information[0];
 echo $new_id++;

 }
 $insert_query=
 "INSERT INTO `user_add` VALUES(
  '$new_id',
 '$user_name',
 '$user_userid',
 '$user_password',
 '$user_email',
 '$phone',
 '$address',
 '$city_new_name',
 '$state_new_name',
 '$country_new_name',
 '$buyer_name')";
  $run_insert=mysqli_query($conn,$insert_query);
  if($run_insert){
    header('location:add-user.php?checked_p1=p1');
}
  else{
  header('location:add-user.php?checked_p2=p2');
  }




?>