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
		height: 880px;
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
    .hash-tag {border: 1px solid black; outline: none; padding: 8px; font-size: 18px;}
    .tag-box {display: flex;}
    .tag-box span { margin-right: 10px; cursor: pointer; padding: 2px 10px; border-radius: 25px;background-color: gainsboro;}
    
    
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
        <input type="text" name="hashtag" class="hash-tag">
        <div class="tag-box">
            
        </div>
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

<script>
    const hashTag = document.querySelector('.hash-tag');
    const tagBox = document.querySelector('.tag-box');
    var tags = [];
    hashTag.addEventListener('keydown', (event) => {
        if (event.key === "Enter" || event.keyCode == 32) {
            event.preventDefault();
            createTag();
        }

    })

    function createTag()
    {
        const tag = document.createElement('span');
        const btn = document.createElement('i');
        tag.innerHTML = '#' + hashTag.value;
        btn.className = "fa-solid fa-delete-left";
        tags.push(tag.innerHTML);
        
        const result = tags.filter((tag) => {
            return tag == '#' + hashTag.value;
        })

        if (result.length >= 2) {
            alert('중복된 값입니다!');
            tags.pop();
            hashTag.value = ""; 
        } else {
            tag.append(btn);
            tagBox.append(tag);
            hashTag.value = ""; 
            console.log(tags);
            removeTag(btn,tag,tags,result);
        }
        


    }
    function removeTag(btn,tag,tags,result)
    {
        btn.onclick = (event) => {
            
            let pos = tags.indexOf(result[0]);
            console.log(result);
            tags.splice(pos, 1);

            tag.remove();
            // event.currentTarget.remove();
        }
    }

</script>

</body>
</html>