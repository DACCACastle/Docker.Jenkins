<?php
    // mysqli Class
    require_once("./db_con.php");
    $page = $_GET["page"];
    session_start();
    $userid = $_SESSION["userid"];
    $userid_check_sql = "SELECT * FROM board WHERE Userid='$userid' AND No='$page'";
    $result=$conn->query($userid_check_sql);
    $num = $result->num_rows;

    if ($num > 0){
        require_once("./board_delete.php");
    }
    else {
        echo "<script>alert(\"게시글 수정 및 삭제는 작성자만 가능합니다.\");</script>";
        echo "<script>window.history.back();</script>";
    }
?>




