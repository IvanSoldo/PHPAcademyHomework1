<?php

$errors = array('first' => '', 'second' => '', 'oper' => '');
$firstNumber = "";
$secondNumber = "";
$operator = "";
$result = "";


if (isset($_POST['calculate'])) {

    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];
    $operator = $_POST['operator'];

    if (empty($_POST['firstNumber'])) {
        $errors['first'] = 'First number is required. <br />';
    } else if (!filter_var($firstNumber, FILTER_VALIDATE_FLOAT)) {
            $errors['first'] = "You have to type a number.";

    }

    if (empty($_POST['secondNumber'])) {
        $errors['second'] = 'Second number is required. <br />';
    } else if (!filter_var($secondNumber, FILTER_VALIDATE_FLOAT)) {
            $errors['second'] = "You have to type a number.";

    }

    if (empty($_POST['operator'])) {
        $errors['oper'] = 'Operator is required. <br />';
    } else {
        if ($operator == '+') {
            $result = $firstNumber + $secondNumber;
        } else if ($operator === '-') {
            $result = $firstNumber - $secondNumber;
        } else if ($operator == '/') {
            $result = $firstNumber / $secondNumber;
        } else if ($operator == '*') {
            $result = $firstNumber * $secondNumber;
        } else if ($operator == '%') {
            $result = $firstNumber % $secondNumber;
        } else {
            $errors['oper'] = 'Invalid operator. Operator must be: +, -, *, / or %.';
        }
    }

}


?>

<!doctype html>
<html lang="en">

<?php require('templates/header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Calculator</h4>
    <form action="calculator.php" class="white" method="POST">
        <label>First Number:</label>
        <input placeholder="1" type="text" name="firstNumber" value="<?= $firstNumber; ?>">
        <div class="red-text"><?= $errors['first']; ?></div>
        <label>Second Number:</label>
        <input placeholder="2" type="text" name="secondNumber" value="<?= $secondNumber; ?>">
        <div class="red-text"><?= $errors['second']; ?></div>
        <label>Operator:</label>
        <input placeholder="+,-,*,/ or %" type="text" name="operator" value="<?= $operator; ?>">
        <div class="red-text"><?= $errors['oper']; ?></div>
        <label>Result:</label>
        <div class="card-panel blue lighten-5">
            <input placeholder="Result" type="text" name="result" disabled value="<?= $result; ?>">
        </div>
        <div class="center">
            <input type="submit" name="calculate" value="calculate" class="btn brand z-depth-0">
        </div>

    </form>

</section>

<?php include('templates/footer.php'); ?>

</html>