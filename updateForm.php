<?php
$con=mysqli_connect('localhost','root','admin123');
$status_con=mysqli_select_db($con,'BRM_DB');
if($status_con == 1)
{
    echo "con_successfull";
}
else
{
    echo "con_failed";
}
$q = " Select * from book ";
$result=mysqli_query($con,$q);
if($result)
{
    echo "con_successfull";
}
else
{
    echo "con_failed";
}
$num=mysqli_num_rows($result);
mysqli_close($con); 
?>

<!doctype html>
<html>
    <head>
        <title>Update Form</title>
        <link rel="stylesheet" href="viewStyle.css" />
    </head>
    <body>
        <h1>Book Record Managment</h1>
        <form action="updation.php" method="POST">
        <table id = view_table>
        <tr>
        <th>Book Id</th>
        <th>Book Tiltle</th>
        <th>Book price</th>
        <th>Book Author</th>
        </tr>
        <?php
        for($i=1;$i<=$num;$i++)
        {
            $row=mysqli_fetch_array($result);
        ?>
        <tr>
        <td><?php echo $row['bookid'] ?>
            <input type="hidden" name="bookid<?php echo $i ?>" value="<?php echo $row['bookid'] ?>"/></td>
        <td><input type="text" name="price<?php echo $i ?>" value="<?php echo $row['price'] ?>" /> </td>
        <td><input type="text" name="title<?php echo $i ?>" value="<?php echo $row['title'] ?>" /></td>
        <td><input type="text" name="author<?php echo $i ?>" value="<?php echo $row['author'] ?>" /></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <input type="submit" value="update" />
        </form>
    </body>
</html>