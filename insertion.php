<?php
$bookid=$_POST['bookid'];
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

$con=mysqli_connect('localhost','root','admin123');
$status_con=mysqli_select_db($con,'BRM_DB');
echo "$status_con";
if($status_con==1)
                echo "s";
            else
                echo "failed";

$q="INSERT INTO book(bookid,title,price,author) values($bookid,'$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);

?>

<!Doctype html>
<html>
<head>
    <title>Insertion</title>
</head>
<body>
    <h1>Book Record Managment</h1>
    <p> <?php 
            if($status==1)
                echo "record inserted";
            else
                echo "insertion failed";
        ?>
    </p>

</body>

</html>