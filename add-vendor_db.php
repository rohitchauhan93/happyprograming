
<?php

session_start();

   $vendor_name=$_POST['vendor_name'];
  
   $vendor_vendorid=$_POST['userid'];
  
   $vendor_password=$_POST['pass_word'];
  
    $conntactperson=$_POST['contact'];

    $vendor_code=$_POST['vendor_code'];
    
    $contact_person=$_POST['contactp'];


    $vendor_email=$_POST['email-id'];
  
    $phone=$_POST['phone'];
  
     $address=$_POST['add'];
  
   $country=$_POST['country'];
  
    $state=$_POST['state'];
  
    $city=$_POST['city'];
     
    $vendor_client=$_POST['vendor_client'];
  
$buyer_name=$_POST['buyer_name'];
  


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


  $create_vendorid=mysqli_query($conn,"SELECT MAX(ID) FROM `vendor_add` WHERE 1");
//$new_id=100;
  while($information=mysqli_fetch_row($create_vendorid))
  {
 $new_id=$information[0];
 echo $new_id++;

 }
 $insert_query=
 "INSERT INTO `vendor_add` VALUES(
 '$new_id',
 '$vendor_name',
 '$vendor_vendorid',
 '$vendor_password',
 '$vendor_email',
 '$vendor_code',
 '$contact_person',
 '$vendor_client',
 '$phone',
 '$address',
 '$city_new_name',
 '$state_new_name',
 '$country_new_name',
 '$buyer_name')";
  $run_insert=mysqli_query($conn,$insert_query);
  if($run_insert){
    header('location:add-vendor.php?checked_p1=p1');
    //echo "okkk";
    
}
  else{
  header('location:add-vendor.php?checked_p2=p2');
 //echo "not okk";
  }




?>