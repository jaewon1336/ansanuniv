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
	img {
		
	}
</style>

<form class="join_form" name="login_form" method="post" >
	<img src="<?=ASSETS?>imgs/logo.png">
	<label>아이디</label>
	<input type="text" name="name">
	<label>비밀번호</label>
	<input type="password" name="pass">
	<button type="submit">로그인</button>
</form>

<script>
function signup_btn_click()
{
  if (!document.login_form.name.value) {
  	alert("아이디를 확인해주세요.");
  	document.login_form.name.focus();
  	return;
  }
  if (!document.login_form.pass.value) {
  	alert("비밀번호를 확인해주세요.");
  	document.login_form.name.focus();
  	return;
  }
  
  document.login_form.submit();
  
}
</script>