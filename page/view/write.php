<section class="gsp">
	<div class="gsp_main">
	<p>게시판 글쓰기</p>
	<p style="color:#ff8888">익명이 보장됩니다</p>
		<form action="/view/write_request" method="post">
			<div class="table wt_tb">
				<textarea id="title" name="text" placeholder="제목" required></textarea>
				<textarea name="wt_pp" id="writer" placeholder="글쓴이" required></textarea>
				<textarea name="area" id="content" placeholder="내용" required></textarea>
			</div>
			<div class="tb_footer">
				<button class="cancle" type="button" onclick="location='/view/noticeboard'">취소</button>
				<button class="wt" type="submit">글쓰기</button>
			</div>
		</form>
	</div>
</section>