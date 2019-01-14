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
    $value = $db->editBill($_GET['id']);
    ?>

    <div class="container">
        <h3>Edit Bill</h3>
        <form action="process.php?action=edit" method="post">
            <input type="hidden" name="id" value="<?php echo $value['id'] ?>" required>
            Name: <input type="text" name="name" value="<?php echo $value['name'] ?>" required><br>
            Tax Code: <input type="number" name="taxcode" value="<?php echo $value['taxcode'] ?>" required><br>
            Price: <input type="number" name="price" value="<?php echo $value['price'] ?>"><br>
            <input type="submit">
        </form>
        <a href="index.php">
            <button>View Bill</button>
        </a> 
    </div>
</body>
</html>