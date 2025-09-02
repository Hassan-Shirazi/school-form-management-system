<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Details</title>
<link rel="stylesheet" href="student.css">
</head>
<body>

  <div class="form-container">    

  <?php
require 'config.php';

$cnic = $_POST['cnic'] ?? '';

$query = "SELECT * FROM data WHERE cnic = '$cnic'";

$result = mysqli_query($connect, $query);

$fetch = mysqli_fetch_assoc($result);

//  SECURE OPTION TO SAVE FROM SQL INJECTION ::

// $cnic = $_POST['cnic'] ?? '';
// $query = "SELECT * FROM `data` WHERE cnic = ?";
// $stmt = mysqli_prepare($connect, $query);
// mysqli_stmt_bind_param($stmt, "s", $cnic);
// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);
// $fetch = mysqli_fetch_assoc($result);

//  SECURE OPTION TO SAVE FROM SQL INJECTION ::

if ($fetch) {
  $id       = $fetch['id'];
  $country  = $fetch['country'];
  $city     = $fetch['city'];
  $name     = $fetch['name'];
  $father   = $fetch['father'];
  $email    = $fetch['email'];
  $no       = $fetch['no'];
  $cnic     = $fetch['cnic'];
  $f_cnic   = $fetch['f_cnic'];
  $dob      = $fetch['dob'];
  $course   = $fetch['course']; 
  $c_level  = $fetch['c_level'];
  $address  = $fetch['address'];
  $study    = $fetch['study'];
  $lap_com  = $fetch['lap_com'];
  $gender   = $fetch['gender'];
  $image    = $fetch['image'];

  echo "
    <div class='form-header'>
      <h1>Student Registration Details</h1>
      <img src='images/$image' alt='Student Photo' class='student-photo'>
    </div>

    <div class='field-group'>
      <div class='field'><label>Country</label><p>$country</p></div>
      <div class='field'><label>City</label><p>$city</p></div>
    </div>

    <div class='field-group'>
      <div class='field'><label>Full Name</label><p>$name</p></div>
      <div class='field'><label>Father Name</label><p>$father</p></div>
    </div>

    <div class='field-group'>
      <div class='field'><label>Email</label><p>$email</p></div>
      <div class='field'><label>Phone No</label><p>$no</p></div>
    </div>

    <div class='field-group'>
      <div class='field'><label>CNIC</label><p>$cnic</p></div>
      <div class='field'><label>Father CNIC</label><p>$f_cnic</p></div>
    </div>

    <div class='field-group'>
      <div class='field'><label>Date of Birth</label><p>$dob</p></div>
      <div class='field'><label>Gender</label><p>$gender</p></div>
    </div>

    <div class='field-group'>
      <div class='field'><label>Course</label><p>$course</p></div>
      <div class='field'><label>Computer Level</label><p>$c_level</p></div>
    </div>

    <div class='field-group'>
      <div class='field'><label>Last Qualification</label><p>$study</p></div>
      <div class='field'><label>Laptop/Computer</label><p>$lap_com</p></div>
    </div>

    <div class='full-width'>
      <label>Address</label><p>$address</p>
    </div>
  ";
} else {
echo "<script>
alert('No record found for CNIC check your cnic and try again: $cnic');
window.location.href = 'check.html';
</script>";
exit;

 
  
}
?>

</div>

</body>
</html>
