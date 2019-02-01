<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>only_php_board</title>
</head>
<body>
    <header>
		<nav>
			<div><a href="/">MAIN</a></div>
			<ul>
				<?php if (isset($_SESSION['member'])): ?>
				<li><a href="/member/mypage"><?php echo $_SESSION['member']->name ?>님</a></li>
				<li><a href="/member/logout">로그아웃</a></li>
				<?php else: ?>
				<li><a href="/member/login">로그인</a></li>
				<li><a href="/member/join">회원가입</a></li>
				<?php endif ?>
			</ul>
		</nav>
	</header>
