$(function () {
	function doRenderTable(id){
	    $.ajax({
	        method: "POST",
	        url: "../app/models/exam.php"
	    }).done(function(data){
	    	//renderTable([id],[data],[table columns],[actions])
	        renderTable(id,data,['id','user_id','subject_id','question_id','answer'],['read']);	        
	    });	
	}
	setTimeout(doRenderTable('#exam'),1000);
});
