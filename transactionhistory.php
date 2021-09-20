<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body style="background-color :black ;">

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color:white;">Transaction History</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr style="color:white;">
                <th class="text-center">Sender ID</th>
                <th class="text-center">Receiver ID</th>
                <th class="text-center">Amount Transferred</th>

            </tr>
        </thead>
        <tbody>
        <?php

            include 'conf.php';

            $sql ="select * FROM transaction_table";
            $query = mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query)){
         ?>

            <tr style="color:white;">

            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>

</tr>
<?php
}
?>
        </tbody>
    </table>

    </div>
</div>

</body>
</html>  