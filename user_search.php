<?php
    require_once __DIR__ . './header.php';
?>
<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>

<table>
性別<br>
<select>
<option value="">男
<option value="">女
</select>
<br>

職業<br>
<select name='skill'>
    <option value=''>
    <option value='プログラマ'>プログラマ
    <option value='game'>ゲームエンジニア
    <option value='game'>電子工学
    <option value=''>グラフィックデザイン
    <option value='game'>その他
</select>

<br>

スキル<br>
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
    <option value=''>グラフィックデザイン
</optgroup>
<optgroup label='その他'>
    <option value='game'>その他
</optgroup>
</select></tr>

<br>

活動可能時間帯<br>
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
</table>

<br>

<input type="button" onclick="location.href='search_result.php'" value="検索">

<body>
</html>