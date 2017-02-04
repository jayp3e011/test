function renderTable(id,data,columns,actions){
	var arrofobj = JSON.parse(data);

	if(id=='#exam'){
		_EXAMTABLE_SELECTED_ID = id;		
	}		
	else if(id=='#subject'){
		_SUBJECTTABLE_SELECTED_ID = id;		
	}	

    var html = "";
    html += "<thead>";
    html += "<tr>";
    for(col in columns)
    	html += "<th>"+columns[col].toUpperCase()+"</th>";
    html += "</tr>";
    html += "</thead>";
    html += "<tbody>";
    for(obj in arrofobj){
      html += "<tr>";
      for(o in arrofobj[obj])
        html += '<td>'+arrofobj[obj][o]+'</td>';
      html += "</tr>"
    }
    html+="</tbody>"
    $(id+'table').html(html);
    var table = $(id+'table').DataTable({
    	"language":{
    		search: "_INPUT_",
    		searchPlaceholder: "Search entry..."
    	}
    });        
    $('.dataTables_filter input[type="search"]').css({'width':'350px','display':'inline-block'});
    $(id + 'table tbody').on( 'click', 'tr', function () {
    	if($(this).hasClass('active')){
    		$(this).removeClass('active');  
    		// console.log('Nothing selected'); 
    		_EXAMTABLE_SELECTED_ID = 0;
    		$(id+'table-status').html('<i class="fa fa-info-circle text-gray"></i> &nbsp;&nbsp;Nothing Selected');
    		for(act in actions)if(actions[act]!='create')$(id +'table-btn' + actions[act]).attr('disabled','disabled');
    	} else {
    		$(this).addClass('active').siblings().removeClass('active');
    		// console.log($(this)[0].childNodes[0].innerHTML);
    		_EXAMTABLE_SELECTED_ID = $(this)[0].childNodes[0].innerHTML;
    		$(id+'table-status').html('<i class="fa fa-info-circle text-gray"></i> &nbsp;&nbsp; You selected Entry ID: <span class="text-green" style="font-weight:bold">'+_EXAMTABLE_SELECTED_ID+'</span>!');
			for(act in actions)if(actions[act]!='create')$(id +'table-btn' + actions[act]).removeAttr('disabled');			
    	}    	
    }); 
    $(id+'table-loading').hide();
    $(id+'table-status').html('<i class="fa fa-info-circle text-gray"></i> &nbsp;&nbsp;Nothing Selected');
    for(act in actions){
    	$(id +'table-btn' + actions[act]).show();
    	// console.log(actions[act]); 	  	
    }

    if(id=='#exam')renderExamModals();
}

function renderExamModals(){
	/*
	$(id + 'modal-create').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('id') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('Create')
	  modal.find('.modal-body input').val(recipient)
	});
	*/
	$(_EXAMTABLE_SELECTED_ID + 'modal-read').on('show.bs.modal', function (event) {
	  var modal = $(this);
	  modal.find('.modal-title').text('Read Entry ID: ' + _EXAMTABLE_SELECTED_ID)	  
	  modal.find('.modal-body input').attr('readonly','readonly');
	  modal.find('#examquestion').attr('readonly','readonly');

	  _EXAMTABLE_DATA.map(function(examobj){
	  	if(examobj.id===_EXAMTABLE_SELECTED_ID){
		  	_USERTABLE_DATA.map(function(userobj){
		  		if(userobj.id===examobj.user_id){
		  			_SUBJECTTABLE_DATA.map(function(subjectobj){
		  				if(subjectobj.id===examobj.subject_id){
		  					_QUESTIONTABLE_DATA.map(function(questionobj){
		  						if(questionobj.id===examobj.question_id){
		  							modal.find('#examuser').val(userobj.lastname.toUpperCase()+', '+userobj.firstname.toUpperCase());
		  							modal.find('#examsubject').val(subjectobj.name);
		  							modal.find('#examquestion').val(questionobj.question);
		  							modal.find('#examuseranswer').val(examobj.answer);
		  							modal.find('#examimockanswer').val(questionobj.answer);
		  							(examobj.answer===questionobj.answer)?
		  							modal.find('#examresult').val("CORRECT"):
		  							modal.find('#examresult').val("INCORRECT");				  				
		  							return;
		  						}					  	
		  					});
		  					return;
		  				}
		  			});
		  			return;
		  		}
		  	});
	  	return;
	  }
	});
	  
	});
}


var _EXAMTABLE_SELECTED_ID=0;
var _SUBJECTTABLE_SELECTED_ID=0;
var _QUESTIONTABLE_SELECTED_ID=0;
var _USERTABLE_SELECTED_ID=0;
var _EXAMTABLE_DATA=[];
var _SUBJECTTABLE_DATA=[];
var _QUESTIONTABLE_DATA=[];
var _USERTABLE_DATA=[];