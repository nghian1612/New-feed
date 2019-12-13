<div class="post-popup job_post">
	<div class="post-project">
		<h3>Đăng việc làm</h3>
		<div class="post-project-fields">
			<form autocomplete="off" action="{{url('/client/addjob')}}" method="post">
				<input type="hidden" value="{{csrf_token()}}" name="_token">
				<input type="hidden" name="type_feed" value="1">
				<div class="row">
					<div class="col-lg-12">
						<input type="text" name="titlePostAdd" placeholder="Tiêu đề">
					</div>
					<div class="col-lg-6">
						<input type="text" name="locationPostAdd" placeholder="Địa chỉ làm việc">
					</div>
					<div class="col-lg-6">
						<input type="number" name="levelPostAdd" placeholder="số năm kinh nghiệp">
					</div>
					<div class="col-lg-12">
						<ul id="skills_changed"></ul>
						<input type="text" name="skills" placeholder="Kỹ năng cần có" id="country_name">
						<div id="countryList"></div>
						{{ csrf_field() }}
					</div>
					<div class="col-lg-6">
						<div class="price-br">
							<input type="text" name="salaryPostAdd" placeholder="Mức lương">
							<i class="la la-dollar"></i>
						</div>
					</div>
                    <div class="col-lg-6">
						<input type="date" name="timeonPostAdd" placeholder="Từ ngày">
					</div>
                    <div class="col-lg-6">
						<div class="inp-field">
							<select name="typejobPostAdd">
								<option value="1">Full Time</option>
								<option value="2">Part time</option>
							</select>
						</div>
					</div>
                    <div class="col-lg-6">
						<input type="date" name="timeoffPostAdd" placeholder="Đến ngày">
					</div>

					
					<div class="col-lg-12">
						<textarea name="editorPostJobAdd" id="editorPostJobAdd" placeholder="Chi tiết công việc"></textarea>
					</div>
					<div class="col-lg-12">
						<ul>
							<li><button class="active" type="submit" id="postJobInsert">Đăng bài</button></li>
							<li><a id="an">Hủy</a></li>
						</ul>
					</div>
				</div>
			</form>
		</div><!--post-project-fields end-->
		<a href="#" title=""><i class="la la-times-circle-o"></i></a>
	</div>
</div>