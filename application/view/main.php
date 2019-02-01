<div class = "content">
    <p>게시 목록</p>
    <table>
        <tr>
            <th>글번호</th>
            <th>글제목</th>
            <th>작성자</th>
            <th>작성일</th>
        </tr>
        <?php foreach($this->list as $data) :?>
            <tr>
                <td> <?php echo $data->idx ?></td>
                <td> <?php echo $data->writer ?></td>
				<td> <a href="/board/view/<?php echo $data->idx ?>"> <?php echo $data->subject ?></a></td>
				<td> <?php echo substr($data->date, 0,10) ?></td>
            </tr>
        <?php endforeach?>
    </table>
    <div>
        <?php if(isset($_SESSION['member'])) :?>
            <a href="/board/write" class="btn">글쓰기</a>
        <?php endif?>
    </div>
</div>