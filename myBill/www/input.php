<html>
 <head>
  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3>Add Bill</h3>
        <form action="process.php?action=add" method="post">
            Name: <input type="text" name="name" required><br>
            Tax Code: <input type="number" name="taxcode" required><br>
            Price: <input type="number" name="price" required><br>
            <input type="submit">
        </form>
        <a href="index.php">
            <button>View Bill</button>
        </a> 
    </div>
</body>
</html>