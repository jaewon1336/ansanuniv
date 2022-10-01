
<?php $this->view('asu/header') ?>

                    <?php
                    $cate1 = $_GET["cate1"];
                    $cate2 = $_GET["cate2"];
                    

                    $con = mysqli_connect("localhost", "user", "passwd", "sample");
                    $sql = "select * from product where cate = '$cate1' and cate2 = '$cate2' order by num desc;";
                    $result = mysqli_query($con, $sql);
                    $total_record = mysqli_num_rows($result);

                    ?>
 <div class="section">
        <div class="class-container">
            <ul class="class">
                <li><a href="#">1학년</a></li>
                <li><a href="#">2학년</a></li>
                <li><a href="#">3학년</a></li>
                <li><a href="#">4학년</a></li>
            </ul>
        </div>
        <div class="book-container">
            <div class="book-top">
                <div class="upload-count">
                    등록제품 : <span>10</span>개
                </div>
                <ul id="type">
                    <li><a href="#">낮은가격</a></li>
                    <li><a href="#">높은가격</a></li>
                    <li><a href="#">신상품</a></li>
                </ul>
            </div>

            <ul class="book-content">
                <?php

                for ($i = 0; $i < $total_record; $i++) {
                    
                    mysqli_data_seek($result, $i); // 가저올 레코드로 이동
                    $row = mysqli_fetch_assoc($result); // 하나의 레코드 가져오기
                    $subject = $row["subject"];
                    $price = $row["price"];
                    $upfile = $row["file_img"];
                    $num = $row["num"];
                    $active = $row['active'];

                   
                ?>

                    <li class="item">

                        <img src='../public/uploads/<?= $upfile ?>' alt="" class="book-img">

                        <div class="book-info">
                            <div class="book-title"><?= $subject ?></div>
                            <div class="book-price"><?= $price ?></div>
                            <div class="book-price-discount">판매가 : <span></span>원</div>
                        </div>
                    </li>
                <?php
                }
                ?>




            </ul>
        </div>
    </div>
</body>
</html>