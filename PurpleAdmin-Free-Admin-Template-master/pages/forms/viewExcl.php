<?php
include_once "connect.php";

// Retrieve data from the database
$sql = "SELECT * FROM exclusive_deals";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $data[] = $row;
    }
} else {
    echo "No data found.";
}

$conn->close();
?>

<!-- HTML table -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Info ID</th>
            <th>IR</th>
            <th>FE</th>
            <th>Quantity</th>
            <th>dealValue</th>
            <th>deal Date</th>
            <th>docCreatedby</th>
            <th>location</th>
            <th>industrialArea</th>
            <th>Company Name</th>
            <th>Contact Person</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>contactNumber</th>
            <th>whatsappNumber</th>
            <th>gstin</th>
            <th>orderType</th>
            <th>material</th>
            <th>specification</th>
            <th>dor</th>
            <th>expQuotation</th>
            <th>Image</th>
            <th>File</th>
      
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['infoId']; ?></td>
                <td><?php echo $row['ir']; ?></td>
                <td><?php echo $row['fe']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['dealValue']; ?></td>
                <td><?php echo $row['dealDatetime']; ?></td>
                <td><?php echo $row['docCreatedby']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['industrialArea']; ?></td>
                <td><?php echo $row['companyName']; ?></td>
                <td><?php echo $row['contactPerson']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['contactNumber']; ?></td>
                <td><?php echo $row['whatsappNumber']; ?></td>
                <td><?php echo $row['gstin']; ?></td>
                <td><?php echo $row['orderType']; ?></td>
                <td><?php echo $row['material']; ?></td>
                <td><?php echo $row['specification']; ?></td>
                <td><?php echo $row['dor']; ?></td>
                <td><?php echo $row['expQuotation']; ?></td>
                <td>
                    <?php
                    $images = unserialize($row['img']);
                    foreach ($images as $image) {
                        echo '<img src="uploads/' . $image . '" alt="Image" width="100" height="100">';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $files = unserialize($row['filenames']);
                    foreach ($files as $file) {
                        echo '<a href="uploads/' . $file . '">' . $file . '</a><br>';
                    }
                    ?>
                </td>
                <td>
                <form action="fetchExcl.php?g=<?php echo $row['id'];?>" method="GET">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit"><a href="fetchExcl.php? id='.$id.'"></a> Edit</button>
                </form>
        </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
