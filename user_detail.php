<?php
    require_once __DIR__ . '/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>

<table class="table" style="width: 80%">
    <thead class="thead-dark">
        <tr><th colspan="2">ユーザ情報</th></tr>
    </thead>
    <tr><td style="width:30%"><img src="images/kobedenshi.jpg" width="100" height=100"></td><td colspan="2"></td></tr>
    <tr><td>名前</td><td colspan="2"><input type="text" class="form-control" value="神戸 電子"></td></tr>
    <tr><td>Mail</td><td colspan="2"><input type="text" class="form-control" value="kobe@denshi.co.jp"></td></tr>
    <tr><td>性別</td><td colspan="2">
        男：<input type="radio" name="gender" value="男" required checked>
        女：<input type="radio" name="gender" value="女" required>
    </td></tr>
    <tr><td>学科・コース</td><td colspan="2"><input type="text" class="form-control" value="ITエキスパート学科"></td></tr>
    <tr><td>活動可能時間帯</td><td colspan="2">
    <select>
    <?php
        for ( $i = 0 ; $i <= 24 ; $i++ ) {
            if ( $i == 10 ) {
                echo "<option selected>" . $i . ":00</option>";
            }
            else {
                echo "<option>" . $i . ":00</option>";
            }
        }
    ?>
    </select>
    ~
    <select>
    <?php
        for ( $i = 0 ; $i <= 24 ; $i++ ) {
            if ( $i == 15 ) {
                echo "<option selected>" . $i . ":00";
            }
            else {
                echo "<option value>" . $i . ":00";
            }
        }
    ?>
    </select>
    
    </td></tr>
    <tr><td>過去成果物</td><td><input type="text" class="form-control" value="https://github.com/kd-team2E/Co-c..."></td>
    <tr><td>アピールポイント</td><td colspan="2"><input type="text" class="form-control" value="色々な分野に挑戦していきたいと思っています！
楽しく制作できるメンバーを募集しているので、
一緒に頑張っていきましょう！"></textarea></td></tr>
</table>

<table class="table" style="width: 80%">
    <thead class="thead-dark">
        <tr><th colspan="4">スキル</th></tr>
    </thead>
    <tr>
        <td colspan="4" style="font-size: 12px">
            <b>*スキルレベル指標<br><br>
            1: 触ったことがある　2: マニュアルを見ずに使える　3: 他人に教えられる</b>
        </td>
    </tr>
    <tr>
        <td style="width: 20%">技術</td>
        <td style="width: 25%">スキルレベル<br>1　2　3</td>
        <td style="width: 20%">経験年数(年)</td>
        <td>用途</td>
    </tr>
    <tr><td>
        <select name='skill' style="width: 100%">
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
        </select></td>
        <td>
            <input type="radio" name="aaaa" value="1">
            <input type="radio" name="aaaa" value="2" checked>
            <input type="radio" name="aaaa" value="3">
        </td>
        <td><select>
        <?php
                
            for ( $i = 0 ; $i <= 7 ; $i += 0.5 ) {
                if ( $i == 1.5 ) {
                    echo "<option value='" . $i . "' selected>" . $i . "</option>";
                }
                else {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            }
        ?>        
        </select></td>
        <td><input type=text" class="form-control" value="プロンプト上で動くゲーム"></td>
    </tr>
    <tr>
        <td>
        <select name='skill' style="width: 100%">
            <option value=''>
            <optgroup label='プログラマ'>
                <option value='IT'>C
                <option value='IT'>C++
                <option value='IT'>C#
                <option value='IT' selected>Java
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
        </select></td>
        <td>
            <input type="radio" name="bbbb" value="1" checked>
            <input type="radio" name="bbbb" value="2">
            <input type="radio" name="bbbb" value="3">
        </td>
        <td><select>
        <?php
                
            for ( $i = 0 ; $i <= 7 ; $i += 0.5 ) {
                if ( $i == 0.5 ) {
                    echo "<option value='" . $i . "' selected>" . $i . "</option>";
                }
                else {
                    echo "<option value='" . $i . "'>" . $i . "</option>";
                }
            }
        ?>        
        </select></td>
        <td><input type=text" class="form-control" value="Webアプリケーション"></td>
    </tr>
</table>
<?php
    if(!empty($_POST["s"])){
        echo "<p>編集しました</p>";
    }else{
        echo '<form method="post" action="user_detail.php">
                <input type="submit" name="s" class="btn btn-primary" value="編集を確定">
            </form>';
    }
?>
</body>
</html>
