$(function () {
	function doRenderTable(id){
		$.ajax({
	        method: "POST",
	        url: "../app/models/user.php"
	    }).done(function(userdata){
	    	_USERTABLE_DATA = JSON.parse(userdata);
		    $.ajax({
		        method: "POST",
		        url: "../app/models/exam.php"
		    }).done(function(examdata){
		    	_EXAMTABLE_DATA = JSON.parse(examdata);
		    	$.ajax({
			        method: "POST",
			        url: "../app/models/subject.php"
		    	}).done(function(subjectdata){
		    		_SUBJECTTABLE_DATA = JSON.parse(subjectdata);
		    		$.ajax({
				        method: "POST",
				        url: "../app/models/question.php"
			    	}).done(function(questiondata){
			    		_QUESTIONTABLE_DATA = JSON.parse(questiondata);
				    	//renderTable([id],[data],[table columns],[actions])
				        renderTable(id,examdata,['id','user_id','subject_id','question_id','answer'],['read']);

				    });
			    });	        
		    });	
		});
	}
	setTimeout(doRenderTable('#exam'),1000);

	function doRenderSubject(){
		html = "";
		selected = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
		for(i=1;i<=20;i++){
			html += '<tr>';
			html += '<td><div style="position: absolute;margin-left: 7px;margin-top:1px;">A</div><input type="radio" name="item'+i+'" /></td>';
			html += '<td><div style="position: absolute;margin-left: 7px;margin-top:1px;">B</div><input type="radio" name="item'+i+'" /></td>';
			html += '<td><div style="position: absolute;margin-left: 7px;margin-top:1px;">C</div><input type="radio" name="item'+i+'" /></td>';
			html += '<td><div style="position: absolute;margin-left: 7px;margin-top:1px;">D</div><input type="radio" name="item'+i+'" /></td>';
			html += '<td><div style="position: absolute;margin-left: 7px;margin-top:1px;">E</div><input type="radio" name="item'+i+'" /></td>';
			html += '<td style="text-align: center;">'+ i +'</td>';
			html += '<td>Question goes out here!</td>';
			html += '</tr>';			
		}
		$('#items').html(html);
	}
	doRenderSubject();

	$('input[type=radio]').iCheck({
		checkboxClass: 'icheckbox_square-green',
		radioClass: 'iradio_square-green',
    		increaseArea: '20%' // optional
    });
});
