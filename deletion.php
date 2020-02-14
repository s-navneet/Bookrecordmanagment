<?php
echo "wlcome to deletion page";
$con=mysqli_connect('localhost','root','admin123');
$status_con=mysqli_select_db($con,'BRM_DB');
if($status_con == 1)
{
    echo "  con_successfull";
}
else
{
    echo "  con_failed";
}

$size = sizeof($_POST);
echo $size;
$j=1;
for($i=1; $i<=$size; $i++,$j++)
{
    $index="b".$j;
    echo $b.$j;
    if(isset($_POST[$index]))
        $b_id[$i]=$_POST[$index];
    else
        $i--;
}

for($k=1;$k<=$size;$k++)
{
    $q="delete from book where bookid = ".$b_id[$k];
    mysqli_query($con,$q);
}
mysqli_close($con);

?>

<!Doctype html>
<html>
<head>
    <title>Deletion</title>
</head>
<body>
    <h1>Book Record Managment</h1>
    <p> <?php 
            echo $size." record deleted";
        ?>
    </p>
    <p>go back to home page<br>
    <a href="home.php">clik here</a>

</body>

</html>