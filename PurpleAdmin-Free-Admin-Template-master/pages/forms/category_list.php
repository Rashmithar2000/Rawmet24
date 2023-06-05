<?php
include "connect.php";

// Fetch data from the category table
$query = "SELECT * FROM category";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // If there are categories in the database, display them in a table
    echo "<table>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Sub Category</th>
                <th>Action</th>
            </tr>";
            
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['categoryName']."</td>
                <td>".$row['subCategory']."</td>
                <td>
                    <a href='edit_category.php?id=".$row['id']."'>Edit</a>
                    <a href='delete_category.php?id=".$row['id']."'>Delete</a>
                </td>
            </tr>";
    }
    
    echo "</table>";
} else {
    echo "No categories found in the database.";
}

$conn->close();
?>