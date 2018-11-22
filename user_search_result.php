<?php
    require_once __DIR__ . '/header.php';
?>
<DOCTYPE html>
<html lang="ja">
<head>
</head>
<body>

<b>スキル: グラフィックデザイン</b>で検索をかけました。<br><br>

<table border="1">
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
    <option value='' selected>グラフィックデザイン
</optgroup>
<optgroup label='その他'>
    <option value='game'>その他
</optgroup>
</select>

  活動可能時間帯
<select>
<?php
    for ( $i = 0 ; $i <= 24 ; $i++ ) {
        echo "<option>" . $i . ":00</option>";
    }
?>
</select>
~
<select>
<?php
    for ( $i = 0 ; $i <= 24 ; $i++ ) {
        echo "<option>" . $i . ":00</option>";
    }
?>
</select>

<br><br>
<input type="button" onclick="location.href='user_search_result.php'" value="再検索">
</table>

<table width="80%">
<tr><td width="10%">性別</td><td width="30%">名前</td><td width="15%">職業</td><td width="15%">スキル</td><td>活動可能時間帯</td><td rowspan="2"><input type="button" class="btn" onclick="location.href='user.php'" value="ユーザーページ参照"></td></tr>
<tr><td>男</td><td>パブロ・ピカソ</td><td>学生</td><td>C, Java</td><td>10:00 ~ 15:00</td></tr>
</table>

<table width="80%">
<tr><td width="10%">性別</td><td width="30%">名前</td><td width="15%">職業</td><td width="15%">スキル</td><td>活動可能時間帯</td><td rowspan="2"><input type="button" class="btn" onclick="location.href='user_detail.php'" value="ユーザーページ参照"></td></tr>
<tr><td>女</td><td>オスカー・ワイルド</td><td>学生</td><td>Java</td><td>14:00 ~ 15:00</td></tr>
</table>

<table width="80%">
<tr><td width="10%">性別</td><td width="30%">名前</td><td width="15%">職業</td><td width="15%">スキル</td><td>活動可能時間帯</td><td rowspan="2"><input type="button" class="btn" onclick="location.href='user_detail.php'" value="ユーザーページ参照"></td></tr>
<tr><td>男</td><td>貴志祐介</td><td>SE</td><td>Java</td><td>8:00 ~ 14:00</td></tr>
</table>

<table width="80%">
<tr><td width="10%">性別</td><td width="30%">名前</td><td width="15%">職業</td><td width="15%">スキル</td><td>活動可能時間帯</td><td rowspan="2"><input type="button" class="btn" onclick="location.href='user_detail.php'" value="ユーザーページ参照"></td></tr>
<tr><td>女</td><td>カズオ・イシグロ</td><td>学生</td><td>Java, Python</td><td>11:00 ~ 15:00</td></tr>
</table>

</body>
</html>
