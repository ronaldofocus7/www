$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "ITFLab";
$conn = mysqli_connect("lab-itf-63070211-kantapak.mysql.database.azure.com", "ronaldofocus7@lab-itf-63070211-kantapak", "Ronaldo77", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM Bookings WHERE Staff_ID = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: show.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
