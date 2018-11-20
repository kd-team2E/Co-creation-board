<?php
    require_once __DIR__ . '/header.php';

    session_start();

    $projectName = $_POST['project'];
    $title = $_POST['title'];
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill2'];
    $skill3 = $_POST['skill3'];
    $detail = $_POST['detail'];
    $tag = $_POST['tag'];

    $_SESSION['project'] = $projectName;
    $_SESSION['title'] = $title;
    $_SESSION['skill1'] = $skill1;
    $_SESSION['skill2'] = $skill2;
    $_SESSION['skill3'] = $skill3;
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
            echo $skill1;
            if ($skill2 !== ""){
                echo "・". $skill2;
            }
            if($skill3 !== ""){
                echo "・". $skill3;
            }
        ?></td></tr>
        <tr><td>プロジェクト詳細</td><td><?= $detail ?></td></tr>
        <tr><td>タグ</td><td><?= $tag ?></td></tr>
    </table>

    <input type = "button" onclick = "location.href = 'create_post.php'" value = "投稿">
    <input type = "button" onclick = "location.href = 'project_create.php'" value = "内容修正">
</body>
</html>