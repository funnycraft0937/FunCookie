<!DOCTYPE html>
<html>
<head>
    <title>注册页面</title>
</head>
<body>
    <form method="GET" action="">
        <label for="qq">QQ号:</label>
        <input type="text" name="qq" id="qq" required><br><br>
        <label for="card">卡密:</label>
        <input type="text" name="card" id="card" required><br><br>
        <input type="submit" name="submit" value="注册">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $qq = $_GET['qq'];
        $card = $_GET['card'];
        
        // 构建URL
        $url = "http://49.233.36.252:73/?qq=" . urlencode($qq) . "&card=" . urlencode($card);
        
        // 输出网页内容
        $content = file_get_contents($url);
        echo $content;
    }
    ?>
</body>
</html>
