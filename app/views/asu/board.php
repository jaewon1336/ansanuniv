
<?php $this->view("asu/header");?>
<?php

    if (isset($_GET['page']))
        $page = $_GET['page'];
    else
        $page = 1;

    $con = mysqli_connect("localhost", "user", "passwd", "sample");
    $sql = "SELECT * FROM freeboard ORDER BY NUM DESC ";
    $result = mysqli_query($con, $sql);

    $total_record = mysqli_num_rows($result); // 전체 글 수
    $scale = 7;

    if($total_record % $scale == 0)
                    $total_page = floor($total_record/$scale);
                else
                    $total_page = floor($total_record/$scale) + 1;

                $start = (intval($page) - 1) * $scale;
                $number = $total_record - $start;
?>
<section>

        <div class="container">
            <div class="alignment">
                <div class="sort">
                    <li>최신순</li>
                    <li>좋아요순</li>
                    <li>조회순</li>
                </div>

                <div class="make-btn" onclick="location.href='<?=ROOT?>board_form';">
                    글쓰기
                </div>
            </div>
            <div class="list2-header">
                <div class="refresh">
                    새로고침
                </div>
                <input type="text">


                <div class="page">
                    <?php
                
               
                if($page <= 1)
                {
                ?>
                    
                    
                    <a href="<?=ROOT?>board?page=1">
                        <!-- <i class="fa-solid fa-arrow-left-long"></i> -->
                    </a>
                    <span><?=$page?>/<?=$total_page?> 페이지</span>
                <?php
                } else {
                ?>     
                    <a href="<?=ROOT?>board?page=<?php echo ($page-1);?>">
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </a>
                    <span><?=$page?>/<?=$total_page?> 페이지</span>
                <?php
                }
                if ($page >= $total_page) {
                ?>
                
                <a href="<?=ROOT?>board?page=<?php echo $total_page;?>">
                    
                </a> 
                <?php
                } else {
                ?>

                <a href="<?=ROOT?>board?page=<?php echo ($page+1);?>">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>  
                <?php
                }   
                ?>
                </div>

            </div>

            <!--item-->
            <div class="items">
                <?php

                

                for ($i = $start; $i < $start+$scale && $i < $total_record; $i++) {
                    mysqli_data_seek($result, $i);         // 가져올 레코드로 위치(포인터) 이동      	
                    $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기

                    $num = $row["num"];
                    $name = $row["name"];
                    $subject = $row["subject"];
                    $regist_day = $row["regist_day"];

                    




                ?>

                    <div class="item">
                        <div class="item-top">
                            <div class="profile">
                                <img src="" alt="">
                                <div class="name">
                                    <?= $name  ?>
                                </div>
                            </div>
                            <div class="uploaded-date">
                                <?= $regist_day ?>
                            </div>
                        </div>
                        <div class="item-middle">
                            <div class="subject" onclick="location.href='<?=ROOT?>inner?table=_qna&num=<?= $num ?>&page=<?= $page ?>';">
                                <?= $subject ?>
                            </div>
                        </div>
                        <div class="item-bottom">
                            <div class="tags">
                                <a class="tag" href="">#간호학과</a>
                                <a class="tag" href="">#컴퓨터정보학과</a>
                            </div>
                            <div class="status">
                                <div class="likes">
                                    좋아요1 &nbsp;
                                </div>
                                <div class="comments">
                                    댓글1
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
            <!--item-->

        </div>
    </section>
</body>
</html>