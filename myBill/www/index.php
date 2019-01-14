
<html>
 <head>
  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
include 'database.php';
$db = new database();
?>

<div class="container">
    <h3>My Bill</h3>
    <a href="add.php">
        <button>Add Bill</button>
    </a>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Tax Code</th>
            <th>Type</th>
            <th>Refundable</th>
            <th>Price</th>
            <th>Tax</th>
            <th>Amount</th>
            <th>Action</td>
        </tr>
        <?php
            $subtotal_price = 0;
            $subtotal_tax = 0;
            $subtotal_amount = 0;
            if(count($db->getBill()) > 0){
                foreach($db->getBill() as $value){
                    $subtotal_price += $value['price'];
                    $subtotal_tax += $value['tax'];
                    $subtotal_amount += $value['price']+$value['tax'];
        ?>
        <tr>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['taxcode']; ?></td>
            <td><?php echo $value['type']; ?></td>
            <td><?php echo $value['refundable']; ?></td>
            <td><?php echo $value['price']; ?></td>
            <td><?php echo $value['tax']; ?></td>
            <td><?php echo ($value['price']+$value['tax']); ?></td>
            <td>
                <a href="edit.php?id=<?php echo $value['id']; ?>">Edit</a>
                <a href="process.php?id=<?php echo $value['id']; ?>&action=delete">Delete</a>			
            </td>
        </tr>
        <?php 
                }
        ?>
        <tr>   
            <td colspan="4" align="right"><b>Sub Total</b></td>
            <td><b><?php echo $subtotal_price; ?></b></td>
            <td><b><?php echo $subtotal_tax; ?></b></td>
            <td><b><?php echo $subtotal_amount; ?></b></td>
            <td></td>
        </tr>
        <?php
            }
            else {
        ?>
        <tr>
            <td colspan="8" align="center">No Data</td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>
</body>
</html>
