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
                <div class="view_title"><?=$ro['title']?></div>
                <div class="view_content"><?=$ro['content']?></div>
			</div>
        <?php
            }
        ?>
			<div class="tb_footer">
				<a href="/view/noticeboard" class="view_back">뒤로가기</a>
			</div>
	</div>
</section>