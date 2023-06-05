<?php
include "connect.php";
$sql = "SELECT * FROM deals";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Category</th>";
    echo "<th>Info ID</th>";
    echo "<th>IR</th>";
    echo "<th>FE</th>";
    echo "<th>Quantity</th>";
    echo "<th>Deal Value</th>";
    echo "<th>Deal Datetime</th>";
    echo "<th>Doc Created By</th>";
    echo "<th>Location</th>";
    echo "<th>Industrial Area</th>";
    echo "<th>Company Name</th>";
    echo "<th>Contact Person</th>";
    echo "<th>Email</th>";
    echo "<th>Address</th>";
    echo "<th>City</th>";
    echo "<th>State</th>";
    echo "<th>Contact Number</th>";
    echo "<th>WhatsApp Number</th>";
    echo "<th>GSTIN</th>";
    echo "<th>Order Type</th>";
    echo "<th>Material</th>";
    echo "<th>Specification</th>";
    echo "<th>DOR</th>";
    echo "<th>Exp Quotation</th>";
    echo "<th>Update</th>";
    echo "</tr>";

    // Loop through each row and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $category = $row['category'];
        $infoId = $row['infoId'];
        $ir = $row['ir'];
        $fe = $row['fe'];
        $quantity = $row['quantity'];
        $dealValue = $row['dealValue'];
        $dealDatetime = $row['dealDatetime'];
        $docCreatedby = $row['docCreatedby'];
        $location = $row['location'];
        $industrialArea = $row['industrialArea'];
        $companyName = $row['companyName'];
        $contactPerson = $row['contactPerson'];
        $email = $row['email'];
        $address = $row['address'];
        $city = $row['city'];
        $state = $row['state'];
        $contactNumber = $row['contactNumber'];
        $whatsappNumber = $row['whatsappNumber'];
        $gstin = $row['gstin'];
        $orderType = $row['orderType'];
        $material = $row['material'];
        $specification = $row['specification'];
        $dor = $row['dor'];
        $expQuotation = $row['expQuotation'];

        // Display the table rows
        echo "<tr>";
        echo "<td>$category</td>";
        echo "<td>$infoId</td>";
        echo "<td>$ir</td>";
        echo "<td>$fe</td>";
        echo "<td>$quantity</td>";
        echo "<td>$dealValue</td>";
        echo "<td>$dealDatetime</td>";
        echo "<td>$docCreatedby</td>";
        echo "<td>$location</td>";
        echo "<td>$industrialArea</td>";
        echo "<td>$companyName</td>";
        echo "<td>$contactPerson</td>";
        echo "<td>$email</td>";
        echo "<td>$address</td>";
        echo "<td>$city</td>";
        echo "<td>$state</td>";
        echo "<td>$contactNumber</td>";
        echo "<td>$whatsappNumber</td>";
        echo "<td>$gstin</td>";
        echo "<td>$orderType</td>";
        echo "<td>$material</td>";
        echo "<td>$specification</td>";
        echo "<td>$dor</td>";
        echo "<td>$expQuotation</td>";
        echo "<td><a href='edit_deal.php?id=$id'>Update</a></td>";
        echo "</tr>";
    }

    // Close the table
    echo "</table>";
} else {
    // No rows found
    echo "No data found.";
}

// Close the database connection
mysqli_close($conn);
?>
