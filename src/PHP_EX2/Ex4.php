<?php
include 'header.php';
?>
<br>
<div class="container mt-5">
    <h4> If-Else: Eligibility for Voting Form </h4>
    <form method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <br>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">CHECK ELIGIBILITY</button>
    </form>

<?php
    // If-Else: Check eligibility for voting
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];

        if ($age >= 18) {
            echo "<p>$name, you are eligible for voting.</p>";
        } else {
            echo "<p>$name, you are not eligible for voting.</p>";
        }
    }
    ?>
<br> <br>
    <!-- Switch Case: Check for August -->
    <?php
    $currentMonth = date("F");
    switch ($currentMonth) {
        case 'August':
            echo "<p>It's August, so it's still holiday.</p>";
            break;
        default:
            echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
            break;
    }
    ?>
<br><br>
    <h4> For Loop: Multiplication Table </h4>
    <form method="post" class="">
        <div class="form-group">
            <label for="number">Enter a number for multiplication table:-</label>
            <input type="number" class="form-control" id="number" name="number" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">GENERATE TABLE</button>
    </form>

    <?php
    // For Loop: Multiplication Table
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numForTable = $_POST["number"];
        echo "<p>Multiplication Table for $numForTable:</p>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $numForTable * $i;
            echo "<li>$numForTable x $i = $result</li>";
        }
        echo "</ul>";
    }
    ?>
<br> <br>
<h4> While Loop: Print Numbers from 1 to n </h4>
    <form method="post" class="mt-3">
        <div class="form-group">
            <label for="n">Enter a number to print all the numbers:-</label>
            <input type="number" class="form-control" id="n" name="n" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">PRINT NUMBERS</button>
    </form>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numForPrint = $_POST["n"];
        echo "<p>Numbers from 1 to $numForPrint:</p>";
        $counter = 1;
        while ($counter <= $numForPrint) {
            echo "$counter ";
            $counter++;
        }
    }
    ?>
<br> <br>

    <h4> Foreach Loop: Print Array Elements </h4>
    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");
    echo "<p>Array Elements:</p><ul>";
    foreach ($myarray as $element) {
        echo "<li>$element</li>";
    }
    echo "</ul>";
    ?>
    </div>


<?php
include 'footer.php';
?>