<?php
function infoPage($name, $num, $id, $from, $to, $v = 0)
{
    echo "    <div class=\"lib-main2 unvisible\" " . ($v == 0 ? "style='display: none;'" : "") . ">";
    echo "    <div class=\"lib-main2-ldiv\">";
    echo "        <span class=\"lib-main2-l\">账号</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-l\">姓名</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-l\">预约类型</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-l\">预约时段</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-l\">预约入馆时间</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-l\">预约出馆时间</span>";
    echo "        <br>";
    echo "    </div>";
    echo "    <div class=\"lib-main2-rdiv\">";
    echo "        <span class=\"lib-main2-r\">" . $num . "</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-r\">" . $name . "</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-r\">图书借还</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-r\">今天</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-r\">" . $from . "点</span>";
    echo "        <br>";
    echo "        <span class=\"lib-main2-r\">" . $to . "点</span>";
    echo "        <br>";
    echo "    </div>";
    echo "    <br>";
    echo "    <div class=\"lib-main2-btn\">";
    echo "        <button class=\"cancel\" onclick='window.open(\"success.html\")'>";
    echo "    取消预约";
    echo "        </button>";
    echo "    </div>";
    echo "</div>";
}

?>

<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>图书馆预约</title>
    <script type="application/javascript">
        function openSuccess() {
            window.open('./success.html');
        }
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: lightgray;
        }

        .lib-main2 {
            padding-top: 10px;
            position: absolute;
            width: 100%;
            height: auto;
            top: 0;
            left: 0;
            background-color: white;
            font-size: 1.2em;
        }

        .lib-main2-ldiv {
            /*padding: 10px;*/
            /*line-height: 20px;*/
            left: 15px;
            position: relative;
            float: left;
            color: gray;
        }

        .lib-main2-rdiv {
            /*padding: 10px;*/
            position: relative;
            left: 1.5em;
        }

        .lib-main2-btn {
            margin-top: 0.5em;
            padding-top: 1em;
            position: absolute;
            width: 100%;
            bottom: -3em;
        }

        .cancel {
            font-size: 1em;
            height: 2.2em;
            border: none;
            outline: none;
            width: 100%;
            background-color: #51c7c9;
            color: white;
        }
    </style>
</head>
<body>
<?php
infoPage($_GET['name'], $_GET['num'], $_GET['id'], $_GET[from], $_GET['to'], 1);
?>
</body>
</html>
