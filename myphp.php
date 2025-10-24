<!DOCTYPE html>
<html>
<head>
    <title>我的PHP網頁</title>
</head>
<body>
    <h1>
        <?php
            echo "哈囉，這是一個PHP網頁！";
        ?>
    </h1>
    <p>
        <h2>
        <?php
            // Y: 四位數的年份 (例如 2025)
// m: 兩位數的月份 (01-12)
// d: 兩位數的日期 (01-31)
        $today_date = date("Y-m-d");

// 將變數印出
        echo $today_date; 
// 輸出會是 (假設今天是 2025年10月24日): 2025-10-24
        ?>
        </h2>
    </p>
</body>
</html>
