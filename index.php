<?php
session_start();
$name = $_GET['name'];
$num = $_GET['num'];
$_SESSION['name'] = $name;
$_SESSION['num'] = $num;
//echo $num . $name;
$modes = [];
$modes[0] = '已通过';
$modes[1] = '已取消';
$modes[2] = '违约';

function createBookingItem($y, $m, $d, $from, $to, $mode, $id)
{
    global $modes, $name, $num;
    echo "<div class=\"lib-main-item\" " . "id=\"" . "item" . $id .
        "\" " . "onclick=\"" .
        "openInfo('$name', '$num', '$from', '$to');"
        . "\""
        . ">";
    echo "    <div class=\"lib-student\" >" . $num . "-" . $name . "</div >";
    for ($i = 0; $i < 3; $i++) {
        if ($mode[$i] != 0) {
            $style_class = "lib-student-symbol";
            if ($i >= 1 && $mode[$i] == 1) {
                $style_class = "lib-student-symbol-red";
            }
            echo "    <div class=\"$style_class\" >";
            echo $modes[$i];
            echo "    </div >";
            echo "\n";
        }
    }
    echo "    <br >";
    echo "    <div class=\"lib-student-date\"  " . "id=\"" . "date" . $id . "\">";
    echo $y . '-' . $m . '-' . $d . ' ' . $from . '点 至 ' . $to . '点';
    echo "    </div >";
    echo "    <p class=\"lib-student-type\" >";
    echo "        图书借还";
    echo "    </p >";
    echo "</div >";
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
    <link rel="stylesheet" href="./newtjutlib.css">
    <script type="application/javascript">
        function openInfo(name, num, from, to) {
            window.open("./info.php?"
                + "name=" + name.toString()
                + "&num=" + num.toString()
                + "&from=" + from.toString()
                + "&to=" + to.toString()
            );
        };
    </script>
</head>
<body style="background-color: lightgray;">
<div class="lib-main1">
    <div class="lib-header" id="header">
        <p class="lib-header-text">您本月已有&nbsp;0&nbsp;次违约行为</p>
    </div>
    <?php
    $today = getdate();
    $y = $today["year"];
    $m = $today["mon"];
    $d = $today["mday"];
    if (isset($_GET['add']) && isset($_GET['from']) && isset($_GET['to'])) {
        createBookingItem($y, $m, $d, $_GET['from'], $_GET['to'], [1, 0, 0], 0);
    }
    createBookingItem($y, $m, $d, 9, 12, [1, 0, 0], 1);
    createBookingItem($y, $m, $d, 14, 15, [1, 0, 0], 2);
    createBookingItem($y, $m, $d, 15, 18, [1, 0, 0], 3);
    createBookingItem($y, $m, $d, 19, 21, [1, 0, 0], 4);

    $pred = (int)$d;

    $c = 0;

    $id = 100;
    for (; $pred >= 1; $pred--, $c++) {
        $flag1 = 0;
        $flag2 = 0;
        if ($c % 3 == 0) $flag1 = 1;
        if ($c % 5 == 0) $flag2 = 1;
        createBookingItem($y, $m, $pred, 9, 12, [1, 0, $flag1], $id++);
        createBookingItem($y, $m, $pred, 14, 18, [1, 0, 0], $id++);
        createBookingItem($y, $m, $pred, 19, 21, [1, $flag2, 0], $id++);
    }
    ?>
    <br>
    <p style="text-align: center;font-size: 15px;color: gray;padding-bottom: 10px;">
        没有更多了
    </p>
    <div class="lib-main1-add" onclick="window.open('add.php')">
        <div class="lib-main1-add-h"></div>
        <div class="lib-main1-add-v"></div>
    </div>
</div>
</body>
</html>