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
        <title>Delete Book Record</title>
        <link rel="stylesheet" href="viewStyle.css" />
    </head>
    <body>
        <h1>Book Record Managment</h1>
        <form action="deletion.php" method="POST" >
        <table id = view_table>
        <tr>
        <th>Book Id</th>
        <th>Book Tiltle</th>
        <th>Book price</th>
        <th>Book Author</th>
        <th>Select to delete</th>
        </tr>
        <?php
        for($i=1;$i<=$num;$i++)
        {
            $row=mysqli_fetch_array($result);
        ?>
        <tr>
        <td><?php echo $row['bookid'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['author'] ?></td>
        <td><input type="checkbox" value="<?php echo $row['bookid'] ?>" name="b<?php echo $i; ?>" /> </td>
        </tr>
        <?php
        }
        ?>
        <tr>
        <td colspan = "5"><input type="submit" value="Delete" /></td>
        </tr>
        </table>
        </form>
    </body>
</html>