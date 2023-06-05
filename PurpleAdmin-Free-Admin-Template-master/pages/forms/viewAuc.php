<?php
include_once "connect.php";

// Retrieve data from the database
$sql = "SELECT * FROM auction";
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
            <th>Ownership</th>
            <th>Auction Location</th>
            <th>Sector</th>
            <th>Auction Number</th>
            <th>Auction Description</th>
            <th>Auction Value</th>   
            <th>Auction Source</th>  
            <th>Material</th>
            <th>Quantity</th>
            <th>ePublishingDateTime</th>
            <th>Start Date and Time</th>
            <th>Inspection Start</th>
            <th>Inspection End</th>
            <th>EMD Type</th>
            <th>EMD Amount</th>
            <th>Company Name</th>
            <th>Location</th>
            <th>Street</th>
            <th>City</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Contact Person</th>
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
                <td><?php echo $row['ownership']; ?></td>
                <td><?php echo $row['aucLocation']; ?></td>
                <td><?php echo $row['sector']; ?></td>
                <td><?php echo $row['aucNumber']; ?></td>
                <td><?php echo $row['aucDescription']; ?></td>
                <td><?php echo $row['aucValue']; ?></td>
                <td><?php echo $row['aucSource']; ?></td>
                <td><?php echo $row['material']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['ePublishingDateTime']; ?></td>
                <td><?php echo $row['startDatetime']; ?></td>
                <td><?php echo $row['endDatetime']; ?></td>
                <td><?php echo $row['insStartdatetime']; ?></td>
                <td><?php echo $row['insEnddatetime']; ?></td>
                <td><?php echo $row['emdType']; ?></td>
                <td><?php echo $row['emdAmt']; ?></td>
                <td><?php echo $row['companyName']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['street']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['telephone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contactPerson']; ?></td>
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
                    $files = unserialize($row['file']);
                    foreach ($files as $file) {
                        echo '<a href="uploads/' . $file . '">' . $file . '</a><br>';
                    }
                    ?>
                </td>
                <td>
                <form action="fetchAuc.php?g=<?php echo $row['id'];?>" method="GET">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit"><a href="fetchAuc.php? id='.$id.'"></a> Edit</button>
                </form>
        </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
