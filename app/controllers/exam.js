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
				    	//renderTable([id],[data],[table columns],[actions])
				        renderTable(id,examdata,['id','user_id','subject_id','question_id','answer'],['read']);

				        _QUESTIONTABLE_DATA = JSON.parse(questiondata);
				        //Other methods starts here...
				        exam.doRenderSubject(1);

				        // console.log(_SUBJECTTABLE_DATA);
				        exam.updateSubjectList();
				        
				    });
			    });	        
		    });	
		});
	}
	setTimeout(doRenderTable('#exam'),1000);

});
