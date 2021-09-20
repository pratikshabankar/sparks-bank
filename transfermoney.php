<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color :black ;">
<?php
    include 'conf.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color:white;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2" style="color:white;">ID</th>
                            <th scope="col" class="text-center py-2" style="color:white;">Name</th>
                            <th scope="col" class="text-center py-2" style="color:white;">E-Mail</th>
                            <th scope="col" class="text-center py-2" style="color:white;">Balance</th>
                            <th scope="col" class="text-center py-2" style="color:white;">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    $counter=0;
                    while($rows=mysqli_fetch_assoc($result)){
                 ?>
                    <tr style="color:white;">
                        <td class="py-2"><?php echo ++$counter;?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>

                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id']?>"><button type="button" class="btn">Transact</button></a></td>
                        </tr>
                <?php
}
?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div> 
</body>
</html>  
0 comments on commit 205f80f