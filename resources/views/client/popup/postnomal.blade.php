<div class="post-popup wh_post">
	<div class="post-project">
		<h3>Chia sẻ cộng đồng</h3>
		<div class="post-project-fields">
			<form autocomplete="off" action="{{url('/client/addjob')}}" method="post" enctype="multipart/form-data">
				<input type="hidden" value="{{csrf_token()}}" name="_token">
				<input type="hidden" name="type_feed" value="2">
				<div class="row">
					<div class="col-lg-12">
						<input type="text" name="title" placeholder="Tiêu đề">
					</div>
					<div class="col-lg-12">
						<ul id="skills_changed_1"></ul>
						<input type="text" name="skills" placeholder="Kỹ năng liên quan" id="country_name_1">
						<div id="countryList_1"></div>
						{{ csrf_field() }}
					</div>
					<div class="col-lg-12">
						
							<input type="file" name="hinh" id="file">
						
					</div>
					<div class="col-lg-12">
						<textarea name="description" id="editor-feed-add-1" placeholder="Chi tiết"></textarea>
					</div>
					<div class="col-lg-12">
						<ul>
							<li><button class="active" type="submit" value="post">Đăng bài</button></li>
							<li><a title="" id="an_1">Hủy</a></li>
						</ul>
					</div>
				</div>
			</form>
		</div><!--post-project-fields end-->
		<a href="#" title=""><i class="la la-times-circle-o"></i></a>
	</div>
</div>