<?php
    require_once __DIR__ . './header.php';
?>
<DOCTYPE html>
<html lang="ja">
<head>

</head>
<body>

<table>
性別
<select>
    <option value="">指定しない
    <option value="">男
    <option value="">女
</select><br>

職業
<select name='skill'>
    <option value=''>指定しない
    <option value='プログラマ'>プログラマ
    <option value='game'>ゲームエンジニア
    <option value='game'>電子工学
    <option value=''>グラフィックデザイン
    <option value='game'>その他
</select><br>

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
</select>
<br>
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

<input type="button" onclick="location.href='search_result.php'" value="再検索">
<br><br><br>

<table>
<tr><td>性別</td><td>男</td></tr>
<tr><td>名前</td><td>パブロ・ピカソ</td></tr>
<tr><td>職業</td><td>学生</td></tr>
<tr><td>スキル</td><td>C, Java</td></tr>
<tr><td>活動可能時間帯</td><td>10:00 ~ 15:00</td></tr>
<tr><td colspan="2"><input type="button" onclick="" value="プロジェクトへ誘う"></td></tr>
</table>

<table>
<tr><td>性別</td><td>女</td></tr>
<tr><td>名前</td><td>オスカー・ワイルド</td></tr>
<tr><td>職業</td><td>学生</td></tr>
<tr><td>スキル</td><td>Java</td></tr>
<tr><td>活動可能時間帯</td><td>14:00 ~ 15:00</td></tr>
<tr><td colspan="2"><input type="button" onclick="" value="プロジェクトへ誘う"></td></tr>
</table>

<table>
<tr><td>性別</td><td>男</td></tr>
<tr><td>名前</td><td>貴志祐介</td></tr>
<tr><td>職業</td><td>SE</td></tr>
<tr><td>スキル</td><td>Java, </td></tr>
<tr><td>活動可能時間帯</td><td>8:00 ~ 14:00</td></tr>
<tr><td colspan="2"><input type="button" onclick="" value="プロジェクトへ誘う"></td></tr>
</table>

<table>
<tr><td>性別</td><td>女</td></tr>
<tr><td>名前</td><td>カズオ・イシグロ</td></tr>
<tr><td>職業</td><td>学生</td></tr>
<tr><td>スキル</td><td>Java, Python</td></tr>
<tr><td>活動可能時間帯</td><td>11:00 ~ 15:00</td></tr>
<tr><td colspan="2"><input type="button" onclick="" value="プロジェクトへ誘う"></td></tr>
</table>

</body>
</html>
