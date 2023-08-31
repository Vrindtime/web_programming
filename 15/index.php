<html>
<head>
    <title>Book Search</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .container {
            height: 45vh;
        }

        form {
            padding: 5%;
        }
        select {
            font-size: 14px;
            padding: 1% 0%;
            width: 50%;
        }
        input[type="text"]{
            width: 75%;
            text-align: center;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: black;
        }

        .input {
            margin: 5% 0%;
            align-items: center;
        }
        p{
            font-size: 12px;
            color: grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="./search.php" method="POST">
            <h1>Search for Books</h1>
            <div class="input">
                <input type="text" name="title" class="datatext" id="datatext" placeholder="Enter the book name here or use the dropbox">
                <select id="bid">
                    <option disabled selected>Click Here to Refer the Books</option>
                    <?php
                    require('./conn.php');
                    $s_query = "Select * from books order by title";
                    $s_result = mysql_query($s_query) or die(mysql_error());
                    while ($row = mysql_fetch_array($s_result)) {
                        $title = $row['title'];
                        $id = $row['book_no'];

                        echo "<option value='$title'>$title</option>";
                    }
                    ?>
                </select>
            </div>
            <input type="submit" name="submit">
            <p>Note: leave the text field blank to view all the books</p>
        </form>
    </div>
    <script>
        textfield = document.getElementById("datatext");
        contentselect = document.getElementById("bid");

        contentselect.onchange = function () {
            var text = contentselect.options[contentselect.selectedIndex].value
            if (text != "") {
                textfield.value = text;
            }
        }
    </script>
</body>
</html>