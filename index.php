<?php
//start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
        <h1>Jose's Super calculator!</h1>
    <form action="results.php" method="get">
    <input type="text" name="num01" placeholder='Number 1'>
    <select name="oper">
    <label>Choose Desired Operation!</label>
    <option value="add">Add</option>
    <option value="sub">Subtract</option>
    <option value="div">Divide</option>
    </select>
    <input type="text" name="num02" placeholder='Number 2'>
    <button type="submit">Calculate</button>
    </form> <br>
     <?php if(isset($_SESSION['num1']) && isset($_SESSION['opera']) && isset($_SESSION['num2']) ){
    echo 'Answer: ' . $_SESSION['answer'];
    session_destroy();
} ?>
</body>
</html>