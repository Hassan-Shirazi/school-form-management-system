<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Result</title>
  <link rel="stylesheet" href="result.css">
  <style>
    /* Simple modal styling */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.6);
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      width: 350px;
    }
    .close-btn {
      float: right;
      font-size: 22px;
      font-weight: bold;
      color: red;
      cursor: pointer;
    }
  </style>
</head>
<body>
<div class="kk">
  <div class="guide">
    <h1>Learning Guide</h1>
    <button onclick="location.href='submit.html'">Fill Form</button>
    <button onclick="location.href='check.html'">See Form</button>
    <button onclick="location.href='result.php'">See Result</button>
  </div>
</div>

<h1>Check Result</h1>
<form id="resultForm" method="POST" action="">
  <div class="full-width">
    <label for="cnic">CNIC</label>
    <input type="text" id="cnic" placeholder="Enter your CNIC" name="cnic" required><br><br>

    <label for="no">Phone</label>
    <input type="text" id="no" placeholder="Enter your phone" name="no" required>
  </div>

  <div class="full-width" style="text-align:center;">
    <button type="submit">See Result</button>
  </div>
</form>

<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cnic = mysqli_real_escape_string($connect, $_POST['cnic']);
    $no   = mysqli_real_escape_string($connect, $_POST['no']);

    $query = "SELECT * FROM `data` WHERE cnic = '$cnic' AND no = '$no' LIMIT 1";
    $run   = mysqli_query($connect, $query);

    if ($run && mysqli_num_rows($run) > 0) {
        $fetch  = mysqli_fetch_assoc($run);
        $image  = $fetch['image'];
        $name   = $fetch['name'];
        $father = $fetch['father'];

        echo "
        <div class='modal' id='resultModal' style='display:flex;'>
          <div class='modal-content'>
            <span class='close-btn' id='closeModal'>&times;</span>
            <img src='images/$image' alt='Student Image' style='max-width:150px; border-radius:10px;'><br>
            <h2>$name</h2>
            <p>Father's Name: $father</p>
            <h3 style='color: green;'>You have passed!</h3>
          </div>
        </div>
        ";
    } else {
        echo "<script>
          alert('No record found! Please check your CNIC and Phone again.');
          window.location.href = 'result.php';
        </script>";
        exit;
    }
}
?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    let modal = document.getElementById("resultModal");
    let closeBtn = document.getElementById("closeModal");
    if(closeBtn){
      closeBtn.onclick = function() {
        modal.style.display = "none";
      }
    }
    window.onclick = function(event){
      if(event.target === modal){
        modal.style.display = "none";
      }
    }
  });
</script>

</body>
</html>
