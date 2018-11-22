<?php
    require_once __DIR__ . '/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<table>
    <tr><td><img src="images/pikaso.png" width="100" height=100"></td><td colspan="2"></tr>
    <tr><td>名前</td><td colspan="2">パブロ・ピカソ</td></tr>
    <tr><td>Mail</td><td colspan="2">taro@example.co.jp</td></tr>
    <tr><td>性別</td><td colspan="2">男<br>
    <tr><td>職業</td><td colspan="2">芸術家</td></tr>
    <tr><td>活動可能時間帯</td><td colspan="2">10:00 ~ 15:00</td></tr>
    <tr><td>過去成果物</td><td></td>
    <tr><td>アピールポイント</td><td colspan="2">特になし</textarea></td></tr>
</table>

<table>
    <tr><td colspan="4">スキル</td></tr>
    <tr><td colspan="4" style="font-size: 12px"><b>*スキルレベル指標<br><br>1: 触ったことがある　2: マニュアルを見ずに使える　3: 他人に教えられる</b></td></tr>
    <tr><td>技術</td><td>スキルレベル</td><td>経験年数(年)</td><td>用途</td></tr>

    <!-- ここから -->
    <tr>
        <td>グラフィックデザイン</td>
        <td>3</td>
        <td>15</td>
        <td>絵</td>
    </tr>
    <tr>
        <td>Webデザイン</td>
        <td>3</td>
        <td>15</td>
        <td>Webページのデザイン</td>
    </tr>
</table>
<?php
    if(!empty($_POST["s"])){
        echo "<p>参加要請をしました</p>";
    }else{
        echo '<form method="post" action="user.php">
                <input type="submit" name="s" value="参加要請">
            </form>';
    }
?>
</body>
</html>
