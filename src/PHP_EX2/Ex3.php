<?php
$title = "Ex3.php: variable, Strings & Operatiors";
include 'header.php'; ?>


<h3>YOUR PERSONAL DATA<h3>
<br>

<form method="post" action="">
    Name: <input type="text" name="Name" required> 
    <br><br>
    Email: <input type="email" name="email" required> 
    <br><br>
    DOB: <input type="date" name="dob"> 
    <br><br>
    Select Color: <input type="color" name="color"> 
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name'];

    echo "<h4>Hello $Name, You are welcome to my site.</h4>";
}
?>

<!-- PHP script for string variables -->
<?php
    $str1 = "Hello";
    $str2 = "World";
    $resultString = $str1 . " " . $str2;
    echo "Concatenated String: $resultString<br>";
    echo "Length of the String: " . strlen($resultString) . "<br>";
    ?>

    <!-- PHP script for number addition -->
    <?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $result = $num1 + $num2 + $num3;
    echo "Sum of Numbers: $result<br>";
    ?>

    <!-- PHP script for browser detection -->
    <?php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
        $browser = 'Internet Explorer';
    } elseif (strpos($userAgent, 'Firefox') !== false) {
        $browser = 'Mozilla Firefox';
    } elseif (strpos($userAgent, 'Chrome') !== false) {
        $browser = 'Google Chrome';
    } elseif (strpos($userAgent, 'Safari') !== false) {
        $browser = 'Safari';
    } elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR') !== false) {
        $browser = 'Opera';
    } else {
        $browser = 'Unknown';
    }
    
    echo "<p>You are using: $browser</p>";
    ?>

</div>
<!-- PHP script for file modification time -->

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include 'footer.php'; ?>