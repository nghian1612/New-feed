
<div class="overview-box" id="experience-box-add">
	<div class="overview-edit">
		<h3>KINH NGHIỆM</h3>
		<form>
            <input type='hidden' value='' id='experienceId'>
			<input type="hidden" value="{{csrf_token()}}" name="_token">
			<input type="text" id="experienceSubject" placeholder="Kinh nghiệm">
			<textarea id="experienceDetail" placeholder="Chi tiết"></textarea>
			<button  id="experienceInsert" type="button" class="save">Lưu</button>
			<button type="button" class="cancel">Hủy</button>
		</form>
		<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
	</div>
</div>

<div class="overview-box" id="experience-box-edit">
	<div class="overview-edit">
		<h3>KINH NGHIỆM</h3>
		<form>
            <input type='hidden' value='' id='experienceIdEdit'>
			<input type="hidden" value="{{csrf_token()}}" name="_token">
			<input type="text" id="experienceSubjectEdit" placeholder="Kinh nghiệm">
			<textarea id="experienceDetailEdit" placeholder="Chi tiết"></textarea>
			<button  id="saveExp" type="button" class="save">Cập nhật</button>
			<button type="button" class="cancel">Hủy</button>
		</form>
		<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
	</div>
</div>