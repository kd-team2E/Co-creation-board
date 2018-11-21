<?php
    require_once __DIR__ . '/header.php';
?>
<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
</head>
<body>

<table>
性別
<select>
<option value="">指定しない
<option value="">男
<option value="">女
</select>

職業
<select name='job'>
    <option value=''>指定しない
    <option value=''>プログラマ
    <option value=''>ゲームエンジニア
    <option value=''>電子工学
    <option value=''>グラフィックデザイン
    <option value=''>その他
</select>

スキル
<select name='skill'>
    <option value=''>指定しない
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

活動可能時間帯
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

<input type="button" onclick="location.href='user_search_result.php'" value="検索">

<body>
</html>