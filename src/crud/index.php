<?php
include '../PHP_EX2/header.php';
?>
<div class="container">
    <br>
<h2>Input Your Information Below:</h2>
<br>
<form name="form1" method="post" action="">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
            </div>
            <div class="col">
                <label for="groupid">Group ID:</label>
                <select class="form-control" id="groupid" name="groupid">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form><br>
<?php

if (isset($_POST['submit'])) {
    
    $fname = $_POST['fname'];     
    $lname = $_POST['lname'];     
    $city = $_POST['city'];      
    $groupid = $_POST['groupid']; 

    
    include 'db.php';

    
    $sql = "INSERT INTO StudentInfo (first_name, last_name, city, groupid)
            VALUES ('$fname', '$lname', '$city', '$groupid')";

    
    if ($conn->query($sql) === TRUE) {
        
        echo "New record added";
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>
<?php

include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM StudentInfo";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Group ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupId']}</td>
                <td><a href='updatesingle.php?id=$row[id]'>Edit</a></td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>
</div>
<?php
include '../PHP_EX2/footer.php';
?>