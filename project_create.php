<?php
    require_once __DIR__ . './header.php';

    session_start();
    $projectName = isset($_SESSION['project']) ? $_SESSION['project'] : '';
    $title = isset($_SESSION['title']) ? $_SESSION['title'] : '';
    $skill = isset($_SESSION['skill']) ? $_SESSION['skill'] : '';
    $detail = isset($_SESSION['detail']) ? $_SESSION['detail'] : '';
    $tag = isset($_SESSION['tag']) ? $_SESSION['tag'] : '';
    $tec = isset($_SESSION['tec']) ? $_SESSION['tec'] : '';
    $count = isset($_SESSION['count']) ? $_SESSION['skill'] : '';

?>
<html>
<body>
<h1>新規作成</h1>
<form method = "POST" action = "create_check.php">
    <table>
        <tr><td>プロジェクト名</td><td><input size = "50" type = "text" name = "project" value = "<?= $projectName ?>" required></td></tr>
        <tr><td>PR文</td><td><input size = "50" type = "text" name = "title" value = "<?= $title ?>" required></td></tr>
        <tr><td>募集スキル</td><td>役割
            <select name = "skill1">
                <option value = ""></option>
                <option value = "プログラマ">プログラマ</option>
                <option value = "ゲームエンジニア">ゲームエンジニア</option>
                <option value = "電子工学">電子工学</option>
                <option value = "グラフィックデザイン">グラフィックデザイン</option>
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
                <option value='グラフィックデザイン'>グラフィックデザイン
            </optgroup>
            <optgroup label='サウンドクリエイト'>
                <option value='サウンド'>サウンド
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
                <option value = "4">4</option>
                <option value = "5">5</option>
            </select>
            <input type = "button" value = "追加">
        </td></tr>
        <tr><td>プロジェクト詳細</td><td><textarea cols = "80" rows = "10" name = "detail"><?= $detail ?></textarea></td></tr>
        <tr><td>タグ</td><td><input size = "50" type = "text" name = "tag" value = "<?= $tag ?>"></td></tr>
    </table>
    <input type = "submit" value = "投稿する">&nbsp;
    <?php
        session_destroy();
    ?>
    <input type = "button" onclick = "location.href = 'project_create.php'" value = "内容クリア">
</form>
</body>
</html>