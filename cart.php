<?php
require"ini.php";
// $nam=$_POST["name"];
// $user_name=$_POST["Username"];
// $user_pass=$_POST["Password"];

// $sql_query="insert into cart values('$name','$user_name','$user_pass');";
// if(mysqli_query($con,$sql_query))
// {
//    echo "Successfull";
// }
// else{
//   echo "\nNot Successfull".mysqli_error($con);
// }
$imgFile = $_FILES['image']['name'];
  $tmp_dir = $_FILES['image']['tmp_name'];
  $iname = $_POST['Iname'];
  // $Rating = $_POST['Rating'];
  $Price=$_POST['Price'];
  //$imgSize = $_FILES['user_image']['size'];
  
  
  if(empty($iname)){
   $errMSG = "Please Enter iname.";
  }else if(empty($Price)){
   $errMSG = "Please Enter Your Description.";
  }
  else if(empty($imgFile)){
   $errMSG = "Please Select Image File.";
  }
  else
  {
   $upload_dir = 'image/'; // upload directory
     move_uploaded_file($tmp_dir,$upload_dir.$imgFile);
  }
  if(!isset($errMSG))
  {
   $sql = "INSERT INTO menu(Image,Iname,Price) VALUES('$imgFile','$iname','$Price')";
   $conn->query($sql);
   if($conn)
   {
    echo "new record succesfully inserted ...";
    header("refresh:2;index.php"); // redirects image view page after 5 seconds.
   }
   else
   {
    echo "error while inserting....";
   }
  }
 
?>
