<?php
    require_once __DIR__ . '/header.php';
?>

<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="project.css">
    <title>プロフィール</title>
</head>
<body>

<h1>ユーザーページの登録</h1>
<table border width="70%">
    <tr><td style="width:30%"><img src="./profile_image.png" width="100" height=100"></td><td width="30%" colspan="2"><input type="submit" value="画像を選択"></td></tr>
    <tr><td style="width:30%">名前</td><td colspan="2"><input type="text" style='width:100%' value="神戸　太郎" required></td></tr>
    <tr><td style="width:30%">Pass</td><td colspan="2"><input type="password" style='width:100%' value="dolagon" required></td></tr>
    <tr><td style="width:30%">Mail</td><td colspan="2"><input type="email" style='width:100%' value="aaaaaa@bb.cc" required></td></tr>
    <tr><td style="width:30%">性別</td><td colspan="2">
        男：<input type="radio" name="gender" value="男" required checked><br>
        女：<input type="radio" name="gender" value="女" required></td></tr>
    <tr><td style="width:30%">職業</td><td colspan="2"><input type="text" style='width:100%' value="学生" required></td></tr>
    <tr><td style="width:30%">活動可能時間帯</td><td colspan="2"><input type="text" style='width:40%' value="10:00" required> ~ <input type="text" style='width:40%' value="12:00" required></td></tr>
    <tr><td style="width:30%">過去成果物</td>
        <td><textarea rows="5"></textarea>
        </td><td>
        URL:<input type='text' value="http://example.ai"><br>
        <input type='file' name='file'></td></tr>
    <tr><td style="width:30%">アピールポイント</td><td colspan="2"><textarea rows="10" cols="60"></textarea></td></tr>
</table>

<table border width="70%">
    <tr><td colspan="5">スキル</td></tr>
    <tr><td>技術</td><td>スキルレベル<br>1　2　3</td><td>経験年数</td><td>用途</td></tr>
    <tr><td>

    <!-- ここから -->
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
        <option value=''>webデザイン
        <option value=''>グラフィックデザイン
    </optgroup>
    <optgroup label='その他'>
        <option value='game'>その他
    </optgroup>

    </td><td><input type="radio" name="aaaa" value="1"><input type="radio" name="aaaa" value="2"><input type="radio" name="aaaa" value="3" checked></td><td>2.5</td><td>OS開発</td></tr>
    <tr><td>

    <select name='skill'>
        <option value=''>
    <optgroup label='プログラマ'>
        <option value='IT'>C
        <option value='IT'>C++
        <option value='IT'>C#
        <option value='IT'>Java
        <option value='IT'>PHP
        <option value='IT' selected>Ruby
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
        <option value=''>グラフィックデザイン
    </optgroup>
    <optgroup label='その他'>
        <option value='game'>その他
    </optgroup>

    </td><td><input type="radio" name="bbbb" value="1" checked><input type="radio" name="bbbb" value="2"><input type="radio" name="bbbb" value="3"></td><td>1</td><td>SECCONで問題を解く程度</td></tr>
    <tr><td width='20%'>

    <select name='skill'>
        <option value='' selected>
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
        <option value=''>グラフィックデザイン
    </optgroup>
    <optgroup label='その他'>
        <option value='game'>その他
    </optgroup>
    <!-- ここまでひどすぎ -->


    </select></td>

    <td width='20%'>
        <input type='radio' name='aaaa' value='1'>
        <input type='radio' name='aaaa' value='2'>
        <input type='radio' name='aaaa' value='3'></td>    
    <td width='15%'><select>

    <?php
            
        for ( $i = 0 ; $i <= 7 ; $i += 0.5 ) {
            echo "<option value='" . $i . "'>" . $i . "</option>";
        }
    ?>
            
    </select></td>
    <td><input type='text' style='width:100%'></td>
    </tr>
</table>

<input type="button" value="追加"><input type="button" value="削除"><br>

<br><br><input type="button" onclick="location.href='signup_success.php'" value="送信">

</body>
</html>
