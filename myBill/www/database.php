<?php 
 
class database{
 
	var $host = "localhost";
	var $uname = "user";
	var $pass = "test";
    var $db = "myDb";
    var $conn = null;
 
	/*function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}*/
 
	function __construct(){
        $this->conn = mysqli_connect('db', 'user', 'test', "myDb");
	}
 
    function getBill(){
		$query = mysqli_query($this->conn, "select * from myBill");
        while($value = $query->fetch_array(MYSQLI_ASSOC)){
            $bill["id"] = $value["id"];
            $bill["name"] = $value["name"];
            $bill["taxcode"] = $value["taxcode"];
            $bill["price"] = $value["price"];
            
            if($value["taxcode"]==1){
                $bill["type"] = "Food & Beverage";
                $bill["refundable"] = "Yes";
                $bill["tax"] = $value["price"]*10/100;
            }
            else if($value["taxcode"]==2){
                $bill["type"] = "Tobacco";
                $bill["refundable"] = "No";
                $bill["tax"] = 10+($value["price"]*2/100);
            }
            else if($value["taxcode"]==3){
                $bill["type"] = "Entertaiment";
                $bill["refundable"] = "No";
                if($value["price"]<100 && $value["price"]>0){
                    $bill["tax"] = 0;
                }
                else if($value["price"]>=100){
                    $bill["tax"] = ($value["price"]-100)*1/100;
                }
            }
            $result[] = $bill;
        }
		return $result;
    }
    
    function insert($name,$taxcode,$price){
        mysqli_query($this->conn, "INSERT INTO myBill (name, taxcode, price) VALUES('$name', $taxcode, $price)");
    }
    
    function delete($id){
		mysqli_query($this->conn, "DELETE FROM myBill WHERE id=$id");
    }
    
    function editBill($id){
		$query = mysqli_query($this->conn, "SELECT * FROM myBill WHERE id=$id");
        $result = $query->fetch_array(MYSQLI_ASSOC);
        return $result;
    }

    function update($id, $name,$taxcode,$price){
        $hasil = mysqli_query($this->conn, "UPDATE myBill SET name = '$name', taxcode= '$taxcode', price = '$price' WHERE id = '$id'");
    }
    
} 
 
?>