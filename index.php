

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="number1">
        <input type="text" name="num2" placeholder="number2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Substract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button name="submit" value="submit" type="submit">Calculate</button>
    </form>
<p>The answer is :</p>
    <?php
        if (isset($_GET['submit'])) { //isset()---> hit the submit button
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
                switch ($operator) {
                    case "None":
                        echo'<h5 style="color:red;">You need to select a method</h5>';
                        break;
                    case "Add":
                        echo $result1 + $result2;
                        break;
                    case "Substract":
                        echo $result1 - $result2;
                        break;
                    case "Multiply":
                        echo $result1 * $result2;
                        break;
                    case "Divide":
                        echo $result1 / $result2;
                        break;
                        default:
                        echo "erroeee";

                }
        };
    
    ?>

</body>
</html>