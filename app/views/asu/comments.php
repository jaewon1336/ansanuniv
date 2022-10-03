<?php
session_start();
$con = mysqli_connect("localhost", "user", "passwd", "sample");
$name = $_SESSION['name'];
$num = $_GET["num"];
$page = $_GET["page"];
$table = $_GET["table"];



$comments = $_POST["comments-text"];

$regist_day = date("Y-m-d");  // UTC 기준 현재의 '년-월-일 (시:분)'
$comments = htmlspecialchars($comments, ENT_QUOTES);    // 내용 HTML 특수문자 변환 


$sql = "insert into _qna_comments (comment, regist_day, parent,id)";

if ($comments) {
    $sql .= "values('$comments','$regist_day', '$num','$name')";

    mysqli_query($con, $sql);  // $sql에 저장된 명령 실행

    mysqli_close($con);       // DB 연결 끊기

    // 목록 페이지로 이동
    echo "<script>
            location.href = '../public/inner?table=$table&num=$num&page=$page';
        </script>";
} else {
}

?>