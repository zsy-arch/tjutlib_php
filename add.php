<?php
session_start();
$name = "";
$num = "";
if (isset($_SESSION['name']) && isset($_SESSION['num'])) {
    $name = $_SESSION['name'];
    $num = $_SESSION['num'];
}
?>

<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .myform-maindiv {
            width: 100%;
            height: auto;
            position: absolute;
            /*top: 0;*/
            /*bottom: 0;*/
            /*left: 0;*/
            /*right: 0;*/
            /*margin: auto;*/
        }


        .myform-ldiv, .myform {
            /*display: inline-block;*/
        }

        .myform {
            width: 40%;
            position: relative;
            /*float: left;*/
            left: 1em;
        }


        input.myform-maindiv-i {
            margin-left: 20px;
            font-size: 1.2em;
            text-align: center;
            line-height: 1.4em;
            width: 15em;
            height: 1.5em;
        }

        #btn1 {
            position: absolute;
            margin-top: 20px;
            width: 50%;
            height: 25px;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
        }

        span {
            /*font-size: 10px;*/
        }
    </style>
</head>
<body>
<div class="myform-maindiv">
    <form class="myform" action="./index.php" method="get">
        <input type="text" name="add" id="" value="add" style="display: none;"/>
        <span>姓名</span>&nbsp;<input type="text" name="name" id="" class="myform-maindiv-i" value="<?=$name?>">
        <br>
        <span>学号</span>&nbsp;<input type="text" name="num" id="" class="myform-maindiv-i" value="<?=$num?>">
        <br>
        <span>开始</span>&nbsp;<input type="text" name="from" id="" class="myform-maindiv-i" value="">
        <br>
        <span>结束</span>&nbsp;<input type="text" name="to" class="myform-maindiv-i">
        <input type="submit" name="" id="btn1" value="Submit">
    </form>
</div>
</body>
</html>