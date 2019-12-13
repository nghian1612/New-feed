$(document).ready(function(){
    $('#search-skills').on("keyup", function(){
        var query = $(this).val();
        console.log(query);
        if(query != ''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"/client/search/name",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    $('#skillList').fadeIn();  
                    $('#skillList').html(data);
                }
            });
        }
    });
    var grpskill = [];   //SELECT SKILL
	    $(document).on('click', '.w-skill', function(){
            $('#search-skills').val($(this).text());
            $('#skillList').fadeOut();  
            var skill = $('#search-skills').val();
            grpskill.push(skill);
            console.log(grpskill);
            $('#skills_changed_2').append('<li class="w-skillch"><input type="checkbox" name="grpskill[]" value="'+skill+'" checked="checked">'+skill+'</li>');
            return grpskill;
    });
    $(document).on('click', '.w-skillch', function(){
        var skill = $(this).text();
        var i = grpskill.indexOf(skill);
        if (i != -1) {
            grpskill.splice(i,1);
            return grpskill;
        }
        console.log(grpskill);
        $($(this)).remove();	
    });
})