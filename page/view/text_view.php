<?php
    $sql = "select * from noticeboard where idx='{$_GET['idx']}'";
    $see = $db->prepare($sql);
    $see->execute();
    $result = $see->fetchAll();
?>
<section class="view">
	<div class="view_main">
	<p>게시판 보기</p>
	<p style="color:#ff8888">자유롭게 보세요</p>
        <?php
            foreach($result as $ro){
        ?>
			<div class="view_header">
                <div class="view_title"> 글제목 :  <?=$ro['title']?></div>
                <div class="view_name"> 글쓴이:  <?=$ro['writer']?></div>
                <div class="view_date"><?=$ro['date']?></div>
                <div class="view_content"><?=$ro['content']?></div>
			</div>
        <?php
            }
        ?>
			<form action="del.php" method="post">
			    <div class="view_footer">
			            <a href="/view/del" class="view_del">삭제</a>
			            <a href="/view/noticeboard" class="view_back">목록</a>
			    </div>
			</form>
	</div>
</section>