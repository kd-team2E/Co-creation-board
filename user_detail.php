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
    <tr><td><img src="./pikaso.png" width="100" height=100"></td><td colspan="2"><button type="button" class="btn btn-default">画像を選択</button></td></tr>
    <tr><td>名前</td><td colspan="2"><input type="text" value="パブロ・ピカソ"></td></tr>
    <tr><td>Mail</td><td colspan="2"><input type="text" value="taro@example.co.jp"></td></tr>
    <tr><td>性別</td><td colspan="2">男<input type="radio" name="gender" value="男" checked>　女<input type="radio" name="gender" value="女"><br>
    <tr><td>職業</td><td colspan="2"><input type="text" value="芸術家"</td></tr>
    <tr><td>活動可能時間帯</td><td colspan="2"><select>
    <?php
        for ( $i = 0 ; $i <= 24 ; $i++ ) {
            echo "<option value='" . $i . "'";
            if($i == 10){
                echo " selected>";
            }else{
                echo ">";
            }
            echo $i . ":00" . "</option>";
        }
        echo "</select>~<select>";
        for ( $i = 0 ; $i <= 24 ; $i++ ) {
            echo "<option value='" . $i . "'";
            if($i == 17){
                echo " selected>";
            }else{
                echo ">";
            }
            echo $i . ":00" . "</option>";
        }
    ?>
</select>
    </td></tr>
    <tr><td>過去成果物</td><td></td>
    <tr><td>アピールポイント</td><td colspan="2"><textarea cols="50" rows="5">特になし</textarea></td></tr>
</table>
<table>
    <tr><td colspan="4">スキル</td></tr>
    <tr><td colspan="4" style="font-size: 12px"><b>*スキルレベル指標<br><br>1: 触ったことがある　2: マニュアルを見ずに使える　3: 他人に教えられる</b></td></tr>
    <tr><td>技術</td><td>スキルレベル<br>1　2　3</td><td>経験年数(年)</td><td>用途</td></tr>
    <!-- ここから -->
    <tr>
        <td><tr><td>
        <select name='skill'>
            <option value=''>
            <optgroup label='プログラマ'>
                <option value='IT'>C
                <option value='IT'>C++
                <option value='IT'>C#
                <option value='IT'>Java
                <option value='IT'>PHP
                <option value='IT'>Ruby
            </optgroup>
            <optgroup label='ゲームエンジニア'>
                <option value='game'>2D
                <option value='game'>3D
                <option value='game'>VR
            </optgroup>
            <optgroup label='電子工学'>
                <option value='game'>回路設計
            </optgroup>
                <optgroup label='グラフィック'>
                <option value=''>webデザイン
                <option value='' selected>グラフィックデザイン
            </optgroup>
            <optgroup label='その他'>
                <option value='game'>その他
            </optgroup>
        </select></td>
        <td>
            <input type="radio" name="aaaa" value="1">
            <input type="radio" name="aaaa" value="2">
            <input type="radio" name="aaaa" value="3" checked>
        </td>
        <td><input type=text" value="15"></td>
        <td><input type=text" value="絵"></td>
    </tr>
    <tr>
        <td><tr><td>
        <select name='skill'>
            <option value=''>
            <optgroup label='プログラマ'>
                <option value='IT' selected>C
                <option value='IT'>C++
                <option value='IT'>C#
                <option value='IT'>Java
                <option value='IT'>PHP
                <option value='IT'>Ruby
            </optgroup>
            <optgroup label='ゲームエンジニア'>
                <option value='game'>2D
                <option value='game'>3D
                <option value='game'>VR
            </optgroup>
            <optgroup label='電子工学'>
                <option value='game'>回路設計
            </optgroup>
                <optgroup label='グラフィック'>
                <option value='' selected>webデザイン
                <option value=''>グラフィックデザイン
            </optgroup>
            <optgroup label='その他'>
                <option value='game'>その他
            </optgroup>
        </select></td>
        <td>
            <input type="radio" name="bbbb" value="1">
            <input type="radio" name="bbbb" value="2">
            <input type="radio" name="bbbb" value="3" checked>
        </td>
        <td><input type=text" value="15"></td>
        <td><input type=text" value="Webページのデザイン"></td>
    </tr>
</table>
<?php
    if(!empty($_POST["s"])){
        echo "<p>編集しました</p>";
    }else{
        echo '<form method="post" action="user_detail.php">
                <input type="submit" name="s" value="編集を確定">
            </form>';
    }
?>
</body>
</html>
