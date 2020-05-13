<?php
use \app\test;
require_once './vendor/autoload.php';

$person = new Person();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Panos site</title>
</head>
<body>

<h2>This is my official php Website</h2>

<?php
$today = date("d-m-Y");
echo "<h3>The date in Vienna is:  $today <br>";

date_default_timezone_set("Europe/Vienna");
echo "And the time is: " . date("H:i:sa"). "</h3>";

?>

<p>This is a calculator with all four operators..</p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="x">x:</label><br>
  <input type="text" id="x" name="x" placeholder="x"><br>
  <label for="y">y:</label><br>
  <input type="text" id="y" name="y" placeholder="y"><br>
  <br>
  <select name="operator">
  <option value="Add">Add</option>
  <option value="Subtract">Subtract</option>
  <option value="Multiply">Multiply</option>
  <option value="Divide">Divide</option>
  <option value="None">None</option>
  </select>
  <br>
  <br>
  <button type="submit" name="submit" value="submit">Calculate</button>
</form>

<p>Tha answer is:</p>

    <?php
    
    $x = 0;
    $y = 1;
    $error = "Please enter a non zero number";

    function addNumbers($x, $y){
        return $x + $y;
    }

    function subtractNumbers($x, $y){
        return $x - $y;
    }

    function multipleNumbers($x, $y){
        return $x * $y;
    }

    
    function divideNumbers($x, $y){
            return $x / $y;
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


    
   
if(isset($_POST['submit'])){
    $res1 = test_input($_POST['x']);
    $res2 = test_input($_POST['y']);
    $operator = test_input($_POST['operator']);

    switch ($operator) {
        case 'Add':
            echo addNumbers($res1,$res2);
            break;

        case 'Subtract':
            echo subtractNumbers($res1,$res2);
            break;

        case 'Multiply':
            echo multipleNumbers($res1,$res2);
            break;

        case 'Divide':
            echo divideNumbers($res1,$res2);
            break;

        case 'None':
            echo "You need to select a method!";
            break;

        default:
            echo "Please enter a valid number";
            break;
            
    }

}

if ( addNumbers($res1,$res2)<0 || subtractNumbers($res1,$res2)<0 || multipleNumbers($res1,$res2)<0 || divideNumbers($res1,$res2)<0 ){ ?>
    <link rel="stylesheet" href="./blue.css">
<?php }
else if ( addNumbers($res1,$res2)>0 || subtractNumbers($res1,$res2)>0 || multipleNumbers($res1,$res2)>0 || divideNumbers($res1,$res2)>0 ){ ?>
    <link rel="stylesheet" href="./green.css">
<?php }
else if (addNumbers($res1,$res2)==0 || subtractNumbers($res1,$res2)==0 || multipleNumbers($res1,$res2)==0 || divideNumbers($res1,$res2)==0) { ?>
    <link rel="stylesheet" href="./styles.css">
<?php } ?>


</body>
</html>