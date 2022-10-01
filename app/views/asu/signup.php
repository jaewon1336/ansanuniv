<style>
	.join_form {
		width: 320px;
		height: 100%;
		display: flex;
		flex-direction: column;
		margin: 160 auto;
	}
	.join_form button {
		background-color: dodgerblue;
	}
	.join_form input {
		outline: none;
		font-size: 15px;
		padding: 9px;
		border: 1px solid lightgray;
	}
	.join_form button {
		padding: 20px 0px;
		color: white;
		outline: none;
		cursor: pointer;
		margin-top: 80px;
		border: 1px solid white;
	}
	.join_form label {
		margin-top: 30px;
		margin-bottom: 5px;
	}
	
</style>

<form class="join_form" name="join_form" method="post" >
	<img src="<?=ASSETS?>imgs/logo.png">
	<label>아이디</label>
	<input type="text" name="name" placeholder="4-15자 이내로 입력해주세요.">
	<label>비밀번호</label>
	<input type="password" name="pass" placeholder="영문 소문자,숫자 조합 6자 이상의 비밀번호">
	<label>이메일</label>
	<input type="email" name="email" placeholder="ansan@ansan.ac.kr">
	<button type="button" onclick="signup_btn_click()">회원가입</button>
</form>
<?php
echo htmlspecialchars("hello");


?>
<script>
function signup_btn_click()
{
  if (!document.join_form.name.value) {
  	alert("아이디를 확인해주세요.");
  	document.join_form.name.focus();
  	return;
  }
  if (!document.join_form.pass.value) {
  	alert("비밀번호를 확인해주세요.");
  	document.join_form.name.focus();
  	return;
  }
  if (!document.join_form.email.value) {
  	alert("이메일을 확인해주세요.");
  	document.join_form.name.focus();
  	return;
  }
  document.join_form.submit();

}
</script>


