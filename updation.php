<?php
$size=sizeof($_POST);
$records=$size/4;
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
for($i=1;$i<=$records;$i++)
{
    $index1="bookid".$i;
    $bookid[$i]=$_post[$index1];
    $index2="title".$i;
    $title[$i]=$_post[$index1];
    $index3="price".$i;
    $price[$i]=$_post[$index1];
    $index4="author".$i;
    $author[$i]=$_post[$index1];
}

for($i=1;$i<=$records;$i++)
$q="update book SET title='$title[$i]', price=$price[$i], author='$author[$i]' where bookid=$bookid[$i]";
mysqli_close($con);
?>

<!Doctype html>
<html>
<head>
    <title>updation</title>
</head>
<body>
    <h1>Book Record Managment</h1>
    <p> <?php 
            echo $records." record updated";
        ?>
    </p>
    <p>go back to home page<br>
    <a href="home.php">clik here</a>

</body>

</html>