<?php

  require 'config.php';

  if(isset($_REQUEST['btn'])){

  $country = $_REQUEST['country'];
  $city = $_REQUEST['city'];
  $name = $_REQUEST['name'];
  $f_name = $_REQUEST['f_name'];
  $email = $_REQUEST['email'];
  $no = $_REQUEST['no'];
  $cnic = $_REQUEST['cnic'];
  $f_cnic = $_REQUEST['f_cnic'];
  $dob = $_REQUEST['dob'];
  $course = $_REQUEST['course'];
  $c_level =$_REQUEST['c_level'];
  $address = $_REQUEST['address'];
  $study = $_REQUEST['study'];
  $lap_com = $_REQUEST['lap_com'];
  $gender = $_REQUEST['gender'];

  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];

    //  THIS WILL KEEP UNIQUE NAME FOR EACH THING::
  $ext = pathinfo($image, PATHINFO_EXTENSION);
  $newName = uniqid() . "." . $ext;
    //  THIS WILL KEEP UNIQUE NAME FOR EACH THING::

  move_uploaded_file($tmp_name, "images/$newName");


  $query = "INSERT INTO `data`(`country`, `city`, `name`, `father`, `email`, `no`, `cnic`, `f_cnic`, `dob`, `course`, `c_level`, `address`, `study`, `lap_com`, `gender`, `image`) 
  VALUES ('$country','$city','$name','$f_name','$email','$no','$cnic','$f_cnic','$dob','$course','$c_level','$address','$study','$lap_com','$gender','$newName')";

  $run = mysqli_query($connect , $query);

  header("Location: submit.html");
  exit;
    
}

  ?>