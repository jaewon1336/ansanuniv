
<?php
    $this->view("asu/header");
    // if(isset($_SESSION['name']))
    //     $name = $_SESSION['name'];
    // else
    //     $name = "";



    $num = $_GET["num"];
    $page = $_GET["page"];
    $table = $_GET["table"];

    $con = mysqli_connect("localhost", "user", "passwd", "sample");
    $sql = "SELECT * FROM freeboard WHERE num=$num";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);

    $name = $row["name"];
    $subject = $row["subject"];
    $regist_day = $row["regist_day"];

    $content = $row["content"];
    $content = str_replace(" ", "&nbsp", $content);
    $content = str_replace("\n", "<br>", $content);




    ?>
    <form name="comments" method="post" action="<?=ROOT?>comments?table=<?= $table ?>&num=<?= $num ?>&page=<?= $page ?>" class="container">
        <div class="view-header">
            <div class="view-subject">
                <?= $subject ?>
            </div>
            <div class="view-info">
                <div class="left">
                    <div class="username">
                        <?= $name ?>
                    </div>
                    <div class="upload-date">
                        <?= $regist_day ?>
                    </div>
                </div>
                <div class="view-status">
                    조회수 : <span>30</span>
                    좋아요 : <span>30</span>
                    댓글 : <span>30</span>
                </div>
            </div>
        </div>
        <div class="view-content">
            <?= $content ?>
        </div>
        <!--comments-->
        <div class="comments">
            <div class="likes">
                <div class="likes-btn btn">
                    좋아요 <span>1</span>
                </div>
                <div class="hate-btn btn">
                    싫어요 <span>10</span>
                </div>
            </div>
            <div class="comments-text-box">
                <div class="comments-text-header">
                    <div class="username">
                        <?= $name ?>
                    </div>
                    <textarea name="comments-text" class="comments-text" required></textarea>
                </div>
                <div class="buttons">
                    <div class="delete-btn btn">
                        취소
                    </div>
                    <button class="submit-btn btn" type="submit">
                        등록
                    </button>
                </div>
            </div>



            <div class="comments-header">
                <div class="left">
                    <div class="total-comments">
                        전체 댓글 : <span>30</span>개
                    </div>
                </div>
                <div class="right">
                    <div class="locate-view">
                        본문보기
                    </div>
                    <div class="comments-off">
                        댓글닫기
                    </div>
                    <div class="refresh">
                        새로고침
                    </div>
                </div>
            </div>

            <?php

            if ($table == "_qna") {
                $con = mysqli_connect("localhost", "user", "passwd", "sample");
                $table_comment = $table . "_comments";



                $sql = "SELECT * FROM $table_comment WHERE parent = '$num' order by num";
                $comment_result = mysqli_query($con, $sql);

                // while ($row_comment_cnt = mysqli_fetch_assoc($comment_count)) {
                //     $parent_count = $row_comment_cnt["cnt"];
                // }
                while ($row_comment = mysqli_fetch_assoc($comment_result)) {
                    $num = $row_comment["num"];
                    $comment = $row_comment["comment"];
                    $regist_day = $row_comment["regist_day"];
                    $id = $row_comment["id"];
                    if(isset($_SESSION['name']))
                        $name = $_SESSION['name'];
                    else
                        $name = "";


            ?>

                    <ul class="comments-items">
                        <li class="comments-item">
                            <div class="left">
                                <div class="username">
                                    <?= $id ?>
                                </div>
                                <div class="text">
                                    <?= $comment ?>
                                </div>
                            </div>
                            <div class="right">
                                <div class="date">
                                    <?= $regist_day ?>
                                </div>

                                <div class="delete" onclick="location.href='../app/models/delete.php?table=<?= $table ?>&num=<?= $num ?>&page=<?= $page ?>&id=<?=$name?>'">
                                    삭제
                                </div>
                            </div>
                        </li>

                    </ul>
            <?php
                }
            }

            ?>

        </div>

    </form>