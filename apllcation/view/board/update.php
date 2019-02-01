<div class="form">
	<p>글수정 페이지</p>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="action" value="update">
        <table>
            <tr>
                <td><input type="text" name="writer" value="<?php echo $this->view->writer; ?>" readonly required></td>
            </tr>
            <tr>
                <td><input type="text" name="subject" placeholder="글제목" value="<?php echo $this->view->subject; ?>" required></td>
            </tr>
            <tr>
                <td><textarea name="content" placeholder="글내용" required><?php echo $this->view->content; ?></textarea></td>
            </tr>
            <tr>
                <td><input type="file" name="file"></td>
            </tr>
        </table>
        <button type="submit">수정</button>
	</form>
</div>