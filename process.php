
<?php
if (isset($_POST['submit'])) {
    // Get the input values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Initialize result variable
    $result = "";

    // Perform the selected operation
    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error! Division by zero.";
            }
            break;
        case "**":
            $result = pow($num1, $num2);
            break;
        case "sqrt":
            $result = "Square root of $num1: " . sqrt($num1) . "<br>";
            $result .= "Square root of $num2: " . sqrt($num2);
            break;
        default:
            $result = "Invalid operator selected";
            break;
    }

    // Display the result
    echo "<h2>Result: $result</h2>";
    echo '<a href="index.html">Go back to calculator</a>';
}
?>