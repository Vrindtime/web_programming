<!-- Check whether the given number is Armstrong or not. -->

<html>
<head>
    <title>Armstrong</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            width: 100vw;
            display: grid;
            place-content: center;
            font-size: 24px;
            background-color: #f5f5f5;
            text-transform: uppercase;
        }

        h2 {
            text-align: center;
        }

        .container {
            text-align: center;
            font-size: 24px;
            width: 30vw;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            border-radius: 25px;
            border: 1px solid black;
            padding: 10%;
            box-shadow: 2px 2px 50px gray;
        }

        input[type='number'] {
            margin-top: 15px;
            padding: 3% 0%;
            text-align: center;
            font-size: 24px;
        }

        input[type='submit'] {
            font-size: 24px;
            margin-top: 15px;
            padding: 3% 2%;
            border-radius: 5px;
            background-color: #5f5f5f;
            border: 1px solid black;
            width: 50%;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <h2><u>Armstrong </u></h2>
            <label for="id">Enter the Value here:</label><br>
            <input type="number" id="id" name="id" placeholder="Enter the value here"><br>
            <input type="submit" value="submit" name="submit"><br>
            <p id="result"><?php echo $res ?></p>
        </form>
    </div>
    <?php
    $res = ""; 
    
    if (isset($_REQUEST["submit"])) {
        $num = $_POST["id"];
        $n = $num;
        $sum = 0;

        while ($n != 0) {
            $d = $n % 10;
            $sum = $sum + ($d * $d * $d);
            $n = (int)($n / 10); 
        }

        if ($sum == $num) {
            $res = "$num : is an Armstrong Number";
        } else {
            $res = "$num : is not an Armstrong Number";
        }
    }
    ?>

    <script>
        document.getElementById("id").value = "<?php echo $num; ?>";
        document.getElementById("result").textContent = "<?php echo $res; ?>";
    </script>
</body>

</html>

