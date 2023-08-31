<!-- Check whether the given number is prime or not using php. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prime</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        height: 100vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    h2 {
        text-align: center;
    }

    .container {
        text-align: center;
        font-size: 24px;
        padding: 5%;
        margin: 5%;
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #e0e0e0;
        padding: 10%;
        width: 100%;
    }

    input[type='number'] {
        margin-top: 15px;
        padding: 5% 2%;
    }

    input[type='submit'] {
        margin-top: 15px;
        padding: 3% 3%;
        border-radius: 5px;
        background-color: green;
        border: 1px solid black;
        width: 50%;
    }
</style>

<body>
    <div class="container">
        <form action="#" method="POST">
            <h2><u>Prime Number Program</u></h2>
            <label for="id">Enter the Value here:</label><br>
            <input type="number" id="id" name="id" placeholder="Enter the value here"><br>
            <input type="submit" value="submit" name="submit"><br>
        </form>
    </div>
</body>

</html>
<?php
$num = $_REQUEST["id"];

for ($i = 2; $i <= $num / 2; $i++) {
    if ($num % $i == 0) {
        echo "<script>
                alert('$num : is not a Prime Number')
            </script>";
        return;
    }
}
echo "<script>
    alert('$num : is a Prime Number')
</script>";

?>