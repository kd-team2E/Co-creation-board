<?php
    require_once __DIR__ . './header.php';

    session_start();
    $projectName = isset($_SESSION['project']) ? $_SESSION['project'] : '';
    $title = isset($_SESSION['title']) ? $_SESSION['title'] : '';
    $skill = isset($_SESSION['sill']) ? $_SESSION['skill'] : '';
    $detail = isset($_SESSION['detail']) ? $_SESSION['detail'] : '';
    $tag = isset($_SESSION['tag']) ? $_SESSION['tag'] : '';

?>
<html>
<body>
<h1>新規作成</h1>
<form method = "POST" action = "create_check.php">
    <table>
        <tr><td>プロジェクト名</td><td><input size = "50" type = "text" name = "project" value = "<?= $projectName ?>" required></td></tr>
        <tr><td>見出し</td><td><input size = "50" type = "text" name = "title" value = "<?= $title ?>" required></td></tr>
        <tr><td>募集スキル</td><td><select name = "skill1">
                                        <option value = "" selected></option>
                                        <option value = "プログラマ">プログラマ</option>
                                        <option value = "ゲームエンジニア">ゲームエンジニア</option>
                                        <option value = "電子工学">電子工学</option>
                                        <option value = "グラフィックデザイン">グラフィックデザイン</option>
                                        <option value = "サウンドクリエイト">サウンドクリエイト</option>
                                </select>
                                <select name = "skill2">
                                        <option value = ""></option>
                                        <option value = "プログラマ">プログラマ</option>
                                        <option value = "ゲームエンジニア">ゲームエンジニア</option>
                                        <option value = "電子工学">電子工学</option>
                                        <option value = "グラフィックデザイン">グラフィックデザイン</option>
                                        <option value = "サウンドクリエイト">サウンドクリエイト</option>
                                </select>
                                <select name = "skill3">
                                        <option value = ""></option>
                                        <option value = "プログラマ">プログラマ</option>
                                        <option value = "ゲームエンジニア">ゲームエンジニア</option>
                                        <option value = "電子工学">電子工学</option>
                                        <option value = "グラフィックデザイン">グラフィックデザイン</option>
                                        <option value = "サウンドクリエイト">サウンドクリエイト</option>
                                </select>
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