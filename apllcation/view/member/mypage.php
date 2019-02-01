<div class="content">
	<p>마이 페이지</p>
	<table>
			<tr>
				<td>아이디</td>
				<td><?php echo $_SESSION['member']->id ?></td>
			</tr>
			<tr>
				<td>이름</td>
				<td><?php echo $_SESSION['member']->name ?></td>
			</tr>
			<tr>
				<td>회원 가입일</td>
				<td><?php echo $_SESSION['member']->date ?></td>
			</tr>
			<tr>
				<td>최종 접속일</td>
				<td><?php echo $_SESSION['member']->change_date ?></td>
			</tr>
	</table>
	<form action="" method="post">
		<input type="hidden" name="idx" value="<?php echo $_SESSION['member']->idx ?>">
		<button type="submit">탈퇴</button>
	</form>
</div>