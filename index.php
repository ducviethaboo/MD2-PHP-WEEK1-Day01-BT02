<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .calculate {
            margin: 0;
            padding: 10px;
            border: 1px solid black;
            width: 300px;
            height: 250px;
        }

        .calculate input {
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="calculate">
        <input type="text" name="nowvalue" placeholder="Inventment Amount">
        <input type="text" name="yearrate" placeholder="Yearly Interest Rate">
        <input type="text" name="numofyear" placeholder="Number of Years">
        <input type="submit" value="Caculate">
        <br>
        <br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nowvalue = $_REQUEST['nowvalue'];
            $yearrate = $_REQUEST['yearrate'];
            $numofyear = $_REQUEST['numofyear'];
            $futurerate = $nowvalue + ($nowvalue * $yearrate);



            for ($i = 0; $i < $numofyear; $i++) {
                $futurerate = $nowvalue + ($nowvalue * $yearrate);
            }

            echo $futurerate;
        }
        ?>
    </div>
</form>
</body>
</html>

