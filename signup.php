<?php
    require_once __DIR__ . '/header2.php';
?>
<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>プロフィール</title>
</head>
<body>
<div class="form-group" style="text-align:center;">

<h1>ユーザーページの登録</h1>
<form class="form-horizontal">
<table>
    <tr><td><img src="./profile_image.png" width="100" height=100"></td><td colspan="2"><button type="button" class="btn btn-default">画像を選択</button></td></tr>
    <tr><td>名前</td><td colspan="2"><input type="text" class="form-control" placeholder="神戸 太郎" required></td></tr>
    <tr><td>Pass</td><td colspan="2"><input type="password" class="form-control"  placeholder="パスワードを入力してください" required></td></tr>
    <tr><td>Mail</td><td colspan="2"><input type="text" class="form" placeholder="taro" required>@<input type="text" class="form" placeholder="example.co.jp" required></td></tr>
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

<table>
    <tr><td colspan="4">スキル</td></tr>
    <tr><td colspan="4" style="font-size: 12px"><b>*スキルレベル指標<br><br>1: 触ったことがある　2: マニュアルを見ずに使える　3: 他人に教えられる</b></td></tr>
    <tr><td>技術</td><td>スキルレベル<br>1　2　3</td><td>経験年数(年)</td><td>用途</td></tr>

    <!-- ここから -->
    <tr><td>
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
        </select>
        </td>
        <td>
            <input type="radio" name="aaaa" value="1">
            <input type="radio" name="aaaa" value="2">
            <input type="radio" name="aaaa" value="3" checked>
        </td>
        <td>2.5</td>
        <td><input type="text" class="form-control" placeholder="OS開発"></td>
    </tr>

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
        </select>
        </td>
        <td>
            <input type="radio" name="bbbb" value="1" checked>
            <input type="radio" name="bbbb" value="2">
            <input type="radio" name="bbbb" value="3">
        </td>
        <td>1</td><td><input type="text" class="form-control" placeholder="SECCONで問題を解く程度"></td>
    </tr>
    
    <tr><td>
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
    </select>
    <!-- ここまでひどすぎ -->
    </td>

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
    <td><input type='text' class="form-control"></td>
    </tr>
</table>

</form>

<div class="btn-group" role="group">
    <button type="button" class="btn btn-default">追加</button>
    <button type="button" class="btn btn-default">削除</button>
</div>

<br><br><br><button type="button" onclick="location.href='signup_success.php'" class="btn btn-success">送信</button>

</body>
</html>
