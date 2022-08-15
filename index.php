<?php
    include 'includes/db.inc.php';
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Ufesa Drawing Contest</title>
</head>

<body>
    <div class="deadline">
        <p>Drawing Submission Deadline</p>
    </div>

    <!-- CountDown Timer Starts -->
    <div class="main-container">
        <div class="countdown-container">
            <div class="countdown-el days-c">
                <p class="big-text" id="days">0</p>
                <span>Days</span>
            </div>

            <div class="countdown-el hours-c">
                <p class="big-text" id="hours">0</p>
                <span>Hours</span>
            </div>

            <div class="countdown-el mins-c">
                <p class="big-text" id="mins">0</p>
                <span>Mins</span>
            </div>

            <div class="countdown-el second-c">
                <p class="big-text" id="seconds">0</p>
                <span>Seconds</span>
            </div>
        </div>
    </div>

    <!-- CountDown Timer Ends -->

    <!-- Form Starts -->
    <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
        <div class="wrapper">
            <div class="img">
              <img src="images/img.png" alt="Drawing Contest">
            </div>

            <div class="form">
              <div class="inputfield">
                <label>Name</label>
                <input type="text" class="input" name="name" id="name" required>
              </div>

              <div class="inputfield">
                <label>Age</label>
                <input type="number" class="input" name="age" id="age" min="1" max="10" required>
              </div>

              <div class="inputfield">
                <label>File Upload</label>
                <input type="file" class="input" name="file" id="file" required>
              </div>

              <div class="inputfield" id="special-case">
                <input type="submit" value="Submit" name="submit" id="btn" class="btn">
              </div>
            </div>
        </div>
    </form>
    <!-- Form Ends -->


    <!-- Link the required javascript function -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="app.js"></script>

</body>
</html>
