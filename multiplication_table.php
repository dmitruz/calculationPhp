
<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input number from the form
    $number = $_POST['number'];

    echo "<h3>Multiplication table of $number:</h3>";

    
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        
        echo "$number x $i = $result<br>";
    }
}
?>

</body>
</html>