<!doctype html>
<html>
    <head>
        <title>Insert Form</title>
    </head>
    <body>
        <h1>Wellcone In Book Record Managment</h1>

        <form action="insertion.php" method="POST">
            <table>
            <tr>
                    <th>Bookid</th>
                    <td><input type="text" name="bookid" required /></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="title" required /></td>
                </tr>
                <th>Price</th>
                    <td><input type="text" name="price" required /></td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td><input type="text" name="author" required /></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" vale="insert" required /></td>
                </tr>

	<h3>if you add more record </h3>
	<a href="insertion.php">click here</a>
    </body>
</html>
