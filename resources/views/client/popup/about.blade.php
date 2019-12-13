<div class="overview-box" id="overview-box">
	<div class="overview-edit">
		<h3>GIỚI THIỆU</h3>
		<span>5000 character left</span>
		 <form>
			<input type="hidden" value="{{csrf_token()}}" name="_token">
			<input type="hidden" id="idUser" name="id" value="{{$pro->id}}">
			<textarea name="editorAbout" id='editorAbout' ></textarea>
			<button type="button" id="saveAbout" class="save">Lưu</button>
		</form>
		<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
	</div>
</div>