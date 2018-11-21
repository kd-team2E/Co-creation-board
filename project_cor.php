<?php
    require_once __DIR__ . './header.php';
?>
<html>
<body>
<h1>プロジェクト編集</h1>
<form method = "POST" action = "cor_post.php">
    <table>
        <tr><td>プロジェクト名</td><td><input size = "50" type = "text" name = "project" value = "ゲーム制作メンバー募集！" required></td></tr>
        <tr><td>PR文</td><td><input size = "50" type = "text" name = "title" value = "現在ゲーム制作の為プログラム、グラフィック、サウンド担当者を募集しています！" required></td></tr>
        <tr><td>募集スキル</td><td>役割
            <select name = "skill1">
                <option value = ""></option>
                <option value = "プログラマ" selected>プログラマ</option>
                <option value = "ゲームエンジニア">ゲームエンジニア</option>
                <option value = "電子工学">電子工学</option>
                <option value = "グラフィックデザイン">グラフィックデザイン</option>
                <option value = "サウンドクリエイト">サウンドクリエイト</option>
            </select>使用技術
            <select name = "tec">
            <option value=''>
            <optgroup label='プログラマ'>
                <option value='C' selected>C
                <option value='C++'>C++
                <option value='C#'>C#
                <option value='Java'>Java
                <option value='PHP'>PHP
                <option value='Ruby'>Ruby
            </optgroup>
            <optgroup label='ゲームエンジニア'>
                <option value='2D'>2D
                <option value='3D'>3D
                <option value='VR'>VR
            </optgroup>
            <optgroup label='電子工学'>
                <option value='回路設計'>回路設計
            </optgroup>
                <optgroup label='グラフィック'>
                <option value='webデザイン'>webデザイン
                <option value='グラフィックデザイン'>グラフィックデザイン
            </optgroup>
            <optgroup label='サウンドクリエイト'>
                <option value='サウンド'>
            </optgroup>
            <optgroup label='その他'>
                <option value='その他'>その他
            </optgroup>
            </select>募集人数
            <select name = "count">
                <option value = ""></option>
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4" selected>4</option>
                <option value = "5">5</option>
            </select>
        </td><tr><td></td><td>役割
            <select name = "skill1">
                <option value = ""></option>
                <option value = "プログラマ">プログラマ</option>
                <option value = "ゲームエンジニア">ゲームエンジニア</option>
                <option value = "電子工学">電子工学</option>
                <option value = "グラフィックデザイン" selected>グラフィックデザイン</option>
                <option value = "サウンドクリエイト">サウンドクリエイト</option>
            </select>使用技術
            <select name = "tec">
            <option value=''>
            <optgroup label='プログラマ'>
                <option value='C'>C
                <option value='C++'>C++
                <option value='C#'>C#
                <option value='Java'>Java
                <option value='PHP'>PHP
                <option value='Ruby'>Ruby
            </optgroup>
            <optgroup label='ゲームエンジニア'>
                <option value='2D'>2D
                <option value='3D'>3D
                <option value='VR'>VR
            </optgroup>
            <optgroup label='電子工学'>
                <option value='回路設計'>回路設計
            </optgroup>
                <optgroup label='グラフィック'>
                <option value='webデザイン'>webデザイン
                <option value='グラフィックデザイン' selected>グラフィックデザイン
            </optgroup>
            <optgroup label='サウンドクリエイト'>
                <option value='サウンド'>
            </optgroup>
            <optgroup label='その他'>
                <option value='その他'>その他
            </optgroup>
            </select>募集人数
            <select name = "count">
                <option value = ""></option>
                <option value = "1">1</option>
                <option value = "2" selected>2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
                <option value = "5">5</option>
            </select>
        </td></tr><tr><td></td><td>役割
            <select name = "skill1">
                <option value = ""></option>
                <option value = "プログラマ">プログラマ</option>
                <option value = "ゲームエンジニア">ゲームエンジニア</option>
                <option value = "電子工学">電子工学</option>
                <option value = "グラフィックデザイン">グラフィックデザイン</option>
                <option value = "サウンドクリエイト" selected>サウンドクリエイト</option>
            </select>使用技術
            <select name = "tec">
            <option value=''>
            <optgroup label='プログラマ'>
                <option value='C'>C
                <option value='C++'>C++
                <option value='C#'>C#
                <option value='Java'>Java
                <option value='PHP'>PHP
                <option value='Ruby'>Ruby
            </optgroup>
            <optgroup label='ゲームエンジニア'>
                <option value='2D'>2D
                <option value='3D'>3D
                <option value='VR'>VR
            </optgroup>
            <optgroup label='電子工学'>
                <option value='回路設計'>回路設計
            </optgroup>
                <optgroup label='グラフィック'>
                <option value='webデザイン'>webデザイン
                <option value='グラフィックデザイン'>グラフィックデザイン
            </optgroup>
            <optgroup label='サウンドクリエイト'>
                <option value='サウンド' selected>サウンド
            </optgroup>
            <optgroup label='その他'>
                <option value='その他'>その他
            </optgroup>
            </select>募集人数
            <select name = "count">
                <option value = ""></option>
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3" selected>3</option>
                <option value = "4">4</option>
                <option value = "5">5</option>
            </select>
            <input type = "button" value = "追加">
        </td></tr>
        <tr><td>プロジェクト詳細</td><td><textarea cols = "80" rows = "10" name = "detail">初めての試みの為、必要な技術として足りない分野の作業や、明らかに人数の足りない分野の募集がありましたら一声頂けると嬉しいです。メンバー全員で楽しく作っていきたいと思っています。宜しくお願いします</textarea></td></tr>
        <tr><td>タグ</td><td><input size = "50" type = "text" name = "tag" value = "プログラマー、グラフィックデザイナー、サウンドクリエイター、ゲーム制作"></td></tr>
    </table>
    <input type = "submit" value = "編集確定">&nbsp;
    <input type = "reset"  value = "内容クリア">
</form>
</body>
</html>