<!DOCTYPE HTML>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="my.css"/>
</head>
<body>
<div id="content">
    <h3>Investigate Calculator</h3>
    <form method="post">
        <label>Investment Amount</label>
        <span><?php echo $_POST['amount'] ?></span><br>
        <label>Yearly Interest Rate</label>
        <span><?php echo $_POST['percent'] ?>%</span><br>
        <label>Number of Year</label>
        <span><?php echo $_POST['year'] ?></span><br>
        <label>Future Value</label>
        <span><?php $value = $_POST['amount'] + ($_POST['amount'] * $_POST['percent'] / 100);
            $futureValue = ($value - $_POST['amount']) * $_POST['year'];
            echo $futureValue + $_POST['amount']; ?></span>
    </form>

</div>
</body>
</html>