<?php $this->view("asu/header");?>
<?php
if (isset($_SESSION['name']))
    $name = $_SESSION['name'];
else
    $name = "";
?>
<style>
	form {
		width: 1140px;
		margin: 50px auto;
		height: 820px;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}
	.name-box {display: flex; justify-content: space-between; font-size: 20px;}
	.subject-input {padding: 8px; width: 100%; outline: none; border: 1px solid black; font-size: 20px;}
	textarea {width: 100%; height: 700px; outline: none;
		border: 1px solid black; padding: 8px; font-size: 30px; resize: none;}
	.buttons {display: flex; justify-content: space-between; align-items: center;}
	.right-btn {display: flex; align-items: center; width: 100px; justify-content: space-between;}
	.buttons button {
		padding: 6px;
	}
</style> 


<form name="freeboard" method="post" enctype="multipart/form-data">
        <div class="name-box">
            <div class="name">
                닉네임 : <span><?=$name?></span>
            </div>
            <div class="anony">
                <input type="checkbox" name="anony" value="checked">익명으로
            </div>
        </div>
        <input type="text" name="subject" class="subject-input" placeholder="제목을 입력해주세요.">
        <textarea name="content"></textarea>
        <div class="buttons">
            <button class="upfile-btn btn">
                파일업로드
            </button>
            <div class="right-btn">
                <button class="delete-btn btn">
                    취소
                </button>
                <button type="submit" class="submit-btn btn" >
                    등록
                </button>
            </div>

        </div>

</form>
</body>
</html>