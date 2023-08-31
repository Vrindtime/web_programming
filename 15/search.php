<html>
<head>
    <title>Book Details</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .container{
            width: fit-content;
            min-width: 50vw;
            padding: 0% 2%;
            align-items: center;
        }
        a{
            margin: 5%;
            text-decoration: none;
            padding: 2% 4%;
            color: whitesmoke;
            background-color: black;
            border-radius: 15px;
            width: fit-content;
        }
        table{
            width: 75vw;
            text-align: center;
            font-size: 24px;
        }
        th{
            background-color: #cfcfcf;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Book Details</h1>
    <?php
    require('./conn.php');
    if (isset($_REQUEST['title'])) {
        $title = $_REQUEST['title'];
        $query = "SELECT * FROM books WHERE title LIKE '%$title%'";
        $results = mysql_query($query) or die(mysql_error());
        if (mysql_num_rows($results) > 0) {
            echo '<table border=1 frame=void>';
            echo' <tr>
                <th>Book No</th>
                <th>Title</th>
                <th>Author</th>
                <th>price</th>
                <th>Date of Purchase</th>
                 </tr>';
            while ($row = mysql_fetch_array($results)) {
                echo '<tr>';
                echo '<td>' . $row['book_no'] . '</td>';
                echo '<td>' . $row['title'] . '</td>';
                echo '<td>' . $row['author'] . '</td>';
                echo '<td>' . $row['price'] . '</td>';
                echo '<td>' . $row['date_of_purchase'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo "<a href='./index.php'>Go back to HomePage</a>";
        } else {
            echo '<h2>No results found.</h2>';
            echo "<a href='./index.php'>Go back to HomePage</a>";
        }
    }
    ?>
    </div>
</body>
</html>