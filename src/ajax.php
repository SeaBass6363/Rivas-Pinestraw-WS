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

function deleteEntry($id) {
    global $conn;

    $del = "DELETE FROM People WHERE id = '$id' ";
    $result = $conn->query($del);
}
 
function insertPerson($firstname, $lastname, $telephone) {
    global $conn;
   
    $insert = "INSERT INTO People (id, firstname, lastname, telephone) VALUES (NULL, '$firstname', '$lastname', '$telephone')";
    $result = $conn->query($insert);
}
 
 
 
function showPeople() {
    global $conn;

    $sql = "SELECT id, firstname, lastname, telephone FROM People";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $delurl = "[<a href='' onclick=return(deleteEntry('$id'))>delete</a>]";
        echo "id: " . $row["id"]. " - First Name: " . $row["firstname"]." - Last Name: " . $row["lastname"]." - Telephone Number: " . $row["telephone"]. " $delurl<br>";
      }
    } else {
      echo "0 results";
    }
}

$cmd = $_GET['cmd'];
 
if($cmd == 'create' ) {
    insertPerson($_GET['firstname'], $_GET['lastname'], $_GET['telephone']);
    showPeople();
} else if($cmd == 'delete') {
    $id = $_GET['id'];
    deleteEntry($id);
    showPeople();
} else if($cmd == 'show') {
    showPeople();
}
 

mysqli_close($conn);
 
?>
