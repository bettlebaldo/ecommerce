//BONUS: Write any other Situational Cases that you will encounter with your own Web Systems - related to your Systems Database. Provide similar solution using Update
//Delete the information for a menu item

// Retrieve ID of menu item to be deleted
$id = $_GET['id'];

// Delete record from menu_items table
$sql = "DELETE FROM menu_items WHERE id=$id";
$result = mysqli_query($conn, $sql);
