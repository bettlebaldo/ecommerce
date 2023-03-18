//BONUS: Write any other Situational Cases that you will encounter with your own Web Systems - related to your Systems Database. Provide similar solution using Update
//Updating the details for a menu item

// Retrieve form data
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

// Update data in menu_items table
$sql = "UPDATE menu_items SET name='$name', description='$description', price=$price WHERE id=$id";
$result = mysqli_query($conn, $sql);
