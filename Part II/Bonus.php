// Write any other Situational Cases that you will encounter with your own Web Systems - related to your Systems Database. Provide similar solution using Insert
// Adding an additional menu item into the system

// Retrieve form data
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

// Insert data into menu_items table
$sql = "INSERT INTO menu_items (name, description, price) 
        VALUES ('$name', '$description', $price)";
$result = mysqli_query($conn, $sql);