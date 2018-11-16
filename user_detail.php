<?php
    require_once __DIR__ . './header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<table>
    <tr><td><img src="./profile_image.png" width="100" height=100"></td><td colspan="2"><button type="button" class="btn btn-default">画像を選択</button></td></tr>
    <tr><td>名前</td><td colspan="2">神戸 太郎</td></tr>
    <tr><td>Mail</td><td colspan="2">taro@example.co.jp</td></tr>
    <tr><td>性別</td><td colspan="2">
        男：<input type="radio" name="gender" value="男" required checked><br>
        女：<input type="radio" name="gender" value="女" required></td></tr>
    <tr><td>職業</td><td colspan="2"><input type="text" class="form-control" placeholder="学生" required></td></tr>
    <tr><td>活動可能時間帯</td><td colspan="2">
    <select>
    <?php
        for ( $i = 0 ; $i <= 24 ; $i++ ) {
            echo "<option value='start_time'>" . $i . ":00";
        }
    ?>
    </select>
    ~
    <select>
    <?php
        for ( $i = 0 ; $i <= 24 ; $i++ ) {
            echo "<option value='start_time'>" . $i . ":00";
        }
    ?>
    </select>
    </td></tr>
    <tr><td>過去成果物</td>
        
        <!--
        <td>
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    ボタン
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">aaa</a></li>
                    <li><a href="#">bbb</a></li>
                    <li><a href="#">ccc</a></li>
                </ul>
            </span>
            <input type="text" class="form-control" placeholder="テキスト入力欄">
        </div>
        </td>
        -->
    <tr><td>アピールポイント</td><td colspan="2"><textarea rows="10" cols="60"></textarea></td></tr>
</table>    
</body>
</html>