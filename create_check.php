<?php
    require_once __DIR__ . '/header.php';

    session_start();

    $projectName = $_POST['project'];
    $title = $_POST['title'];
    $skill = $_POST['skill'];
    $tec = $_POST['tec'];
    $count = $_POST['count'];
    $detail = $_POST['detail'];
    $tag = $_POST['tag'];

    $_SESSION['project'] = $projectName;
    $_SESSION['title'] = $title;
    $_SESSION['skill'] = $skill;
    $_SESSION['tec'] = $tec;
    $_SESSION['count'] = $count;
    $_SESSION['detail'] = $detail;
    $_SESSION['tag'] = $tag;
?>

<html>
<body>
    <br>以下の内容でよろしいですか<br><br>
    <table>
        <tr><td>プロジェクト名</td><td><?= $projectName ?></td></tr>
        <tr><td>見出し</td><td><?= $title ?></td></tr>
        <tr><td>募集スキル</td><td>
        <?php
            echo "役割：" . $skill;
            if ($tec !== ""){
                echo "使用技術：". $tec;
            }
            if($count !== ""){
                echo "募集人数：". $count;
            }
        ?></td></tr>
        <tr><td>プロジェクト詳細</td><td><?= $detail ?></td></tr>
        <tr><td>タグ</td><td><?= $tag ?></td></tr>
    </table>

    <input type = "button" onclick = "location.href = 'create_post.php'" value = "投稿">
    <input type = "button" onclick = "location.href = 'project_create.php'" value = "内容修正">
</body>
</html>