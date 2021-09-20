<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body >
<?php
    include 'conf.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into user(id,name,email,balance) values('{$id}','{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";

    }
  }
?>
<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4" style="color:white">Create a User</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAjVBMVEX/+tQAAAD//9n//9v//9j//df//92yrpZkYlXs58X28c3X07TFwaX59ND/+tXv6sc4NzAvLymjoIh4dmWCgG7SzrCqp4+TkHtAPzeZloG+up9cWk7l4b9FQzq2s5kpKCIgHxxSUEd9emkYGBYRERHLx6pta1wiIyGMiXZgXVHf27uem4VLSkDW0rRWVEhwCgiEAAAEy0lEQVR4nO2cf1PiPBDHm01SbCkWOKiCFVHBQ/R8/y/vKcwhLc32B3cnj9vvZ8Y/nAkz3W83u5tNUs8DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKjHWjK/sZd+lv8DhojC6by3Z75Os387LYwlfxBtHlWB26derKmjspAOknvlZHmzJbr08309hqIrtyC/3aU36Jgqhua3VYrseJ51ShU/qlVkx+rNmks/6hdBg8pZk2fU15d+2i9Bz5sqsuPGk5+C7PWPNpIoNQykRxUTj9pJkhHJnj8Ut1YkYy5ZFFqfI0kWVOSKQr/Ok0SpmVRRTPB8riZSp48dLM+WRKmpyOrN//gDSZQaCKxT9E2FwW9T8n1KFxUl/9C/tAV/HbPlzU0s7WeGJb0e8rrJCymssaMgZ6yx/FooFTZ7KGEliYu1O71wI+9kOYoN2bcfnCYUeueGRqJyj37i7OyVVng2ZV1Kkia8mwwdi1494UbPBYlCbB6eOTSxfdZRBOVjyxnJ5BK2n9AXk3ooYjVx2qjZfPwkpr/E2/jTaSOxAUWJSccD1kRGEzZLqUiIo1RMHeU0UfMt2ychjqLZyjRb7bp+QPwKevXVD/+P0Myu8A5nxcEXvUqFIjKPrepL3zkmD40rfrAQUbbxJdiOvsPGqn6cq8j7flS+dvVRslG/VY4XEWT5wn7P5KRe1xVZKuNWhJ/wFdtBlHzY9Gu2gJ6dmeq7oevOVbyG+qAK0axmsIolJB6/fof4JtCaiHS4eKgdG4jQpN5OpYYvs9mkoo4Rpgn9yVZXma0ETRr5SXNE+EmDeNI5TTTbhz8LEXlH3zWwdPQwHI5Gq/qBq/DS9vwNaupY9bBZbGOy2icK02hW41Uy6lh+CzDjbhFrMvYwHyyRP1hXnQKUsRlopqyBm63vuIRhdJiw+ftGhJ+w/ZPJsaY//QnZ5Kf7RzL6Jx45FzyPaeWFFLp2N+9FpGJmr3Nce3NJTx0TaCRDEs+UD5M/BA1CpbHl5vaLiBDrOfZ3rhre4/JLLToxxy3opKs0afyyS/cVhEyd0uRpLklJlB8iMvEeXZCklV1FUeScK/DyHcW2UTIvyq2UCOsVzym1XtfmzreJibA7jgeG269XjuuleznRxMs7ymtru46arCW5SW4z8Lm1Jp8nL2RsAeagwznqRUvLKDi4iZClzpHjqddtK08x8WGBnIiKJnvosDW+SlsYd5TkXdrM2UGvnym1sXn0eZtjJaI3fYq9/lz79xqK4h/rtV+ycs4B+xkt1cY2eOsmdz1b6H3AzMjj7YL7tM5I6+fuNzV1rG8I5a5cTCq/5GF1kOveC5ZkJ0ruOm3P41pLVscblRso6OqBAwpze1rLjevLSZZ0v9DBFf+9D2sK9j4msb/f9MqCbvZnSPvbceEcynssr1YrUeonXs3W/TSNwzTtR7PTw2+bbnyCi+KKw+ZF7sXPmwPWnzY6f7FMSGal5sTQuvbw2iq57kAkyZMll8oZ9B51TZEdVntzRpYsG+kOzZoCRg/6bx+F827L900UUjeSDUdWoV3H6XaRjMfjxXQbDHQXv/RYZl+s7T6SaposlwEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEjnP4FpNYkWDINWAAAAAElFTkSuQmCC" style="border: none; border-radius: 50%;" height="60%" width="60%">
        </div><br><br><br>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div><br>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div><br>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div><br>

            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>  
 95  index.php 
@@ -0,0 +1,95 @@
<!doctype html>