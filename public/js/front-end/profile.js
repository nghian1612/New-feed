var ckExpDetail = CKEDITOR.replace( 'experienceDetail');
var ckExpDetailEdit = CKEDITOR.replace( 'experienceDetailEdit');
var ckAbout = CKEDITOR.replace( 'editorAbout');
var ckPostJobAdd = CKEDITOR.replace( 'editorPostJobAdd' );
CKEDITOR.replace( 'editor-feed-add-1' );



$(document).ready(function(){
    //  ============= POPUP EDIT ABOUT =========

    $(".overview-open").on("click", function(){ //Open popup
        $("#overview-box").addClass("open");
        $(".wrapper").addClass("overlay");
        let idUser = $('#idUser').val();
        $.ajax({
            url:"client/postAbout/" +idUser,
            method: "get",
        }).done(function(data){
            ckAbout.setData(data);
            $('#editorAbout').html(data);
        });
        
    });
    
    $('#saveAbout').on('click',function(){ //Update Info About
        var contentAbout = ckAbout.getData();
        let idUser = $('#idUser').val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url:"client/updateabout",
            method: 'post',
            data: {contentAbout:contentAbout, idUser:idUser, _token: _token }
        }).done(function(data){
            alert('Cập nhật Giới thiệu thành công');
            $('#userAbout').html(data.contentAbout);
        });
        $("#overview-box").removeClass("open");
        $(".wrapper").removeClass("overlay");
        
    });
    $(".close-box").on("click", function(){
        $("#overview-box").removeClass("open");
        $(".wrapper").removeClass("overlay");
        return false;    
    });

    //  ============= POPUP EDIT ABOUT =========
    //  ============= POPUP EDIT EXPERRIENCE =========
    
    $(".exp-bx-open-add").on("click", function(){ //OPEN INSERT EXPERRIENCE
        $("#experience-box-add").addClass("open");
        $(".wrapper").addClass("overlay");
        $('#experienceId').val("");
        $('#experienceSubject').val("");
        ckExpDetail.setData("");
        $('#experienceDetail').html('');
    });
    $("#experienceInsert").on("click", function(){ //INSERT EXPERRIENCE
        let subject= $('#experienceSubject').val();
        let detail= ckExpDetail.getData();
        let _token= $('input[name="_token"]').val();
        $.ajax({
            url:"/client/addexp",
            method: "post",
            data: {
                subject:subject,
                detail:detail,
                _token: _token
            }
        }).done(function(data){   
            alert('Thêm kinh nghiệm thành công');
            $('#infoExp').html(data);
        });
        $("#experience-box-add").removeClass("open");
        $(".wrapper").removeClass("overlay");
    });
    
    $(document).on("click",".exp-bx-open", function(){  //OPEN UPDATE EXPERRIENCE
        $("#experience-box-edit").addClass("open");
        $(".wrapper").addClass("overlay");
        var idExp = $(this).val();
        $.get("client/ajax/exp/"+idExp, function(data){
            let dataoneexp = data.oneexp;
            dataoneexp.forEach(function(dataoneexp){
                $('#experienceIdEdit').val(dataoneexp.id);
                $('#experienceSubjectEdit').val(dataoneexp.subject);
                $('#experienceDetailEdit').html(dataoneexp.detail);
                ckExpDetailEdit.setData(dataoneexp.detail);
            });
            
        });
    });
    $('#saveExp').on("click",function(){  //UPDATE EXPERRIENCE
        let subject= $('#experienceSubjectEdit').val();
        let detail= ckExpDetailEdit.getData();
        let _token= $('input[name="_token"]').val();
        let id = $('#experienceIdEdit').val();
        console.log(subject,detail);
        $.ajax({
            url:"client/updateexp",
            method: "post",
            data: {
                id :id,
                subject:subject,
                detail:detail,
                _token: _token
            }
        }).done(function(data){
            console.log(data);
            alert('Cập nhật kinh nghiệm thành công');
            $('#infoExp').html(data);
        });
        $("#experience-box-edit").removeClass("open");
        $(".wrapper").removeClass("overlay");
      
    });
    $(".close-box").on("click", function(){
        $("#experience-box-add").removeClass("open");
        $(".wrapper").removeClass("overlay");
    });
    $(".cancel").on("click", function(){
        $("#experience-box-add").removeClass("open");
        $(".wrapper").removeClass("overlay");
    });
    $(".close-box").on("click", function(){
        $("#experience-box-edit").removeClass("open");
        $(".wrapper").removeClass("overlay");
    });
    $(".cancel").on("click", function(){
        $("#experience-box-edit").removeClass("open");
        $(".wrapper").removeClass("overlay");
    });
    

    //  ============= POPUP EDIT EXPERRIENCE =========

    //  ============= POPUP POST JOB =========

    $(".feed_job").on("click", function(){ //OPEN INSERT POST JOB
        $(".post-popup.job_post").addClass("active");
        $(".wrapper").addClass("overlay");
        $('#country_name').keyup(function(){ // SEARCH SKILL
            var query = $(this).val();
            if(query != ''){
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"/client/search/name",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                        $('#countryList').fadeIn();  
                        $('#countryList').html(data);
                    }
                });
            }
        });
        var grpskill = [];   //SELECT SKILL
	    $(document).on('click', '.w-skill', function(){
            $('#country_name').val($(this).text());
            $('#countryList').fadeOut();  
            var skill = $('#country_name').val();
            grpskill.push(skill);
            console.log(grpskill);
            $('#skills_changed').append('<li class="w-skillch"><input type="checkbox" name="grpskill[]" value="'+skill+'" checked="checked">'+skill+'</li>');
            return grpskill;
        });
        $(document).on('click', '.w-skillch', function(){
            var skill = $(this).text();
            var i = grpskill.indexOf(skill);
            if (i != -1) {
                grpskill.splice(i,1);
                console.log(grpskill);
                return grpskill;
            }
            $($(this)).remove();	
        });
    });
    $(document).on('click','#an',function(){
		$(".post-popup.job_post").removeClass("active");
		$(".wrapper").removeClass("overlay");
	});
    



    //  ============= POPUP POST JOB =========


});