<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Assignment 4</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div>
      <h1>Number Chart</h1>
    </div>
<form action="" method="POST">
<p><label>Enter Limit: </label>
<input type="number" name="limit" min="10" max="500" step="10" required></p>

<input type="submit" name="submitbtn" value="Submit">
</form>

<?php

if (isset($_POST['submitbtn'])){ 

$limit = $_POST['limit'];
$tool = range(1,$limit);

$headerString = '1 - ' . $limit . ' Prime Numbers Are Red';

echo "<br>";
echo "<table border =\"1\" style='border-collapse: collapse'>";
echo "<tr> \n";

echo "<th colspan=\"10\">$headerString</th>";
echo "</tr>";

foreach($tool as $num){   
$rownum = $limit/10;
for ($tablerow=1; $tablerow <= $rownum; $tablerow++) {
    echo "<tr> \n";
for ($tablecol=1; $tablecol <= 10; $tablecol++) { 

    $val = $num++;
    $task = primeNumber($val);
    if($task == 1){
     echo "<td style='color:red; padding: 5px 10px'>$val</td>";
    }
    else{
     echo "<td style='padding: 5px 10px'>$val </td>";
    }
}
echo "</tr>";
}
      break;
      echo "</table>";
}

}
 
function primeNumber($primenum){
    if($primenum == 1){
        return 0;
    }
for($value = 2; $value <= $primenum/2; $value++){
    if($primenum % $value == 0){
        return 0;
    }
}
return 1;
}
?>

</body>
</html>