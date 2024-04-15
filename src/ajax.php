<?PHP
 
define( 'DB_NAME', 'rivas-lands' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'CoolCat2024' );
define( 'DB_HOST', 'localhost' );
 
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

function deleteOrder($id) {
    global $conn;

    $del = "DELETE FROM Order WHERE id = '$id' ";
    $result = $conn->query($del);
}
 
function insertOrder($ordername, $address, $phone , $product, $service, $total) {
    global $conn;
   
    $insert = "INSERT INTO Order (id, ordername, address, phone, product, service, total) VALUES (NULL, '$ordername', '$address', '$phone' , '$product', '$service', '$total', null)";
    $result = $conn->query($insert);
}
 
 
 
function showOrders() {
    global $conn;

    $sql = "SELECT * FROM Order";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $delurl = "[<a href='' onclick=return(deleteOrder('$id'))>delete</a>]";
        echo "Qty: " . $row["quantity"]. " - Product: " . $row["product"]." - Service: " . $row["service"]." - Date Placed: " . $row["timestamp"]. " $delurl<br>";
      }
    } else {
      echo "0 results";
    }
}

$cmd = $_GET['cmd'];
 
if($cmd == 'create' ) {
    insertOrder($_GET['ordername'], $_GET['address'], $_GET['phone'], $_GET['product'], $_GET['quantity'], $_GET['service'], $_GET['total']);
    showOrders();
} else if($cmd == 'delete') {
    $id = $_GET['id'];
    deleteOrder($id);
    showOrders();
} else if($cmd == 'show') {
    showOrders();
}
 

mysqli_close($conn);
 
?>