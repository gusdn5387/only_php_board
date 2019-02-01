<div class="form">
	<p>글쓰기 페이지</p>
	<form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="insert">
		<input type="hidden" name="midx" value="<?php echo $_SESSION['member']->idx ?>">
        <table>
            <tr>
                <td><input type="text" name="writer" value="<?php echo $_SESSION['member']->name; ?>" readonly required></td>
            </tr>
            <tr>
                <td><input type="text" name="subject" placeholder="글제목" required></td>
            </tr>
            <tr>
                <td><textarea name="content" cols="30" rows="10" placeholder="글내용" required></textarea></td>
            </tr>
            <tr>
                <td><input type="file" name="file"></td>
            </tr>
        </table>
        <button type="submit">작성</button>
	</form>
</div>