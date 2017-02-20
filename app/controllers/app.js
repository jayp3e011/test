

function renderTable(id,data,columns,actions){
	var arrofobj = JSON.parse(data);
	// console.log(arrofobj);

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
    	destroy: true,
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
    if(id=='#subject')renderSubjectModals();
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

function renderSubjectModals(){

	$(_SUBJECTTABLE_SELECTED_ID + 'modal-read').on('show.bs.modal', function (event) {
		// console.log("I'm here");
	  var modal = $(this);
	  modal.find('.modal-title').text('Read Entry ID: ' + _SUBJECTTABLE_SELECTED_ID)	  
	  modal.find('.modal-body input').attr('readonly','readonly');
	  modal.find('#subjectdescription').attr('readonly','readonly');

	  _EXAMTABLE_DATA.map(function(examobj){
	  	if(examobj.id===_EXAMTABLE_SELECTED_ID){
	  		_USERTABLE_DATA.map(function(userobj){
	  			if(userobj.id===examobj.user_id){
	  				_SUBJECTTABLE_DATA.map(function(subjectobj){
	  					if(subjectobj.id===examobj.subject_id){
	  						_QUESTIONTABLE_DATA.map(function(questionobj){
	  							if(questionobj.id===examobj.question_id){
	  								modal.find('#subjectname').val(subjectobj.name);
	  								modal.find('#subjecttimeduration').val(subjectobj.timeduration);
	  								modal.find('#subjectpassingrate').val(subjectobj.passingrate);
	  								modal.find('#subjectdescription').val(subjectobj.description);
	  								modal.find('#subjectattempt').val(subjectobj.attempt);		  									  				
	  								modal.find('#subjectitems').val(subjectobj.items);		  									  				
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

	$('#subjectbtnmodalcreate').on('click',function(){				
		console.log("clicked");
		var newSubject = {
			name:$('#subjectcreatename').val(),
			timeduration:$('#subjectcreatetimeduration').val(),
			passingrate:$('#subjectcreatepassingrate').val(),
			description:$('#subjectcreatedescription').val(),
			attempt:$('#subjectcreateattempt').val(),
			items:$('#subjectcreateitems').val()
		};
		console.log(newSubject);
		$.ajax({
	        method: "POST",
	        url: "../app/models/subject.php",
	        data: {
	        	action:'createsubject',
	        	name:newSubject.name,	        	
	        	timeduration:newSubject.timeduration,	        	
	        	passingrate:newSubject.passingrate,	        	
	        	description:newSubject.description,	        	
	        	attempt:newSubject.attempt,	        	
	        	items:newSubject.items     	
	        }
	    }).done(function(res){
	    	// console.log(res);
	    	$('#subjectmodal-create').modal('hide');
	    	$('#subjectcreatename').val("");$('#subjectcreatetimeduration').val("");
	    	$('#subjectcreatepassingrate').val("");$('#subjectcreatedescription').val("");
	    	$('#subjectcreateattempt').val("");$('#subjectcreateitems').val("");
	    	setTimeout(function(){
	    		$('#subjecttable-loading').html('<i class="fa fa-spinner"></i> Loading...');
	    		doRenderTable('#subject');
	    		swal("Success!", "New subject has been created!", "success");
	    	},1000);	    	
	    });
	});
}


/* EXAM FUNCTIONS */
function exam_changeSubject(){
	console.log("Changed!");
}

let _EXAMTABLE_SELECTED_ID=0;
let _SUBJECTTABLE_SELECTED_ID=0;
let _QUESTIONTABLE_SELECTED_ID=0;
let _USERTABLE_SELECTED_ID=0;
let _EXAMTABLE_DATA=[];
let _SUBJECTTABLE_DATA=[];
let _QUESTIONTABLE_DATA=[];
let _USERTABLE_DATA=[];


/*  EXAM CLASS DEFINITION HERE*/
class Exam{
	doRenderSubject(subjectid){
		$.ajax({
	        method: "POST",
	        url: "../app/models/exam.php",
	        data:{'subjectid':subjectid,'action':'getquestions'}
    	}).done(function(questions){
    		// console.log(`Subject ID: ${subjectid}`);
    		// console.log(questions);
    		var subjectinfo = getSubjectInfo(subjectid);
    		// console.log(subjectinfo);
    		$('#subjecttitle').html(subjectinfo.name);
    		$('#subjectdesc').html(
    			'Description: ' + subjectinfo.description + '<br/>' +
    			'Time duration: ' + subjectinfo.timeduration + '<br/>' +
    			'Passing Rate: ' + subjectinfo.passingrate + '<br/>' +
    			'No. of attempts: ' + subjectinfo.attempt + '<br/>' +
    			'No. of items: ' + subjectinfo.items + '<br/>'
    		);
    		// $('#subjectdesc').html(getSubjectDesc(subjectid));
    		let quest = JSON.parse(questions);
    		// console.log(quest)
    		let html = "";
    		var i = 1;
    		for(let q in quest){
    			html += '<tr>';
    			html += '<td><div style="position: absolute;margin-left: 7px;margin-top:1px;">A</div><input type="radio" name="item'+i+'" /></td>';
    			html += '<td><div style="position: absolute;margin-left: 7px;margin-top:1px;">B</div><input type="radio" name="item'+i+'" /></td>';
    			html += '<td><div style="position: absolute;margin-left: 7px;margin-top:1px;">C</div><input type="radio" name="item'+i+'" /></td>';
    			html += '<td><div style="position: absolute;margin-left: 7px;margin-top:1px;">D</div><input type="radio" name="item'+i+'" /></td>';
    			html += '<td style="text-align: center;">'+ i++ +'</td>';
    			html += '<td>';
    			html += quest[q].question;
    			html += '<br>A. ' + quest[q].choice_a;
    			html += '<br>B. ' + quest[q].choice_b;
    			html += '<br>C. ' + quest[q].choice_c;
    			html += '<br>D. ' + quest[q].choice_d;
    			html += '</td>';
    			html += '</tr>';
    		}
    		$('#items').html(html);
			$('input[type=radio]').iCheck({
				checkboxClass: 'icheckbox_square-green',
				radioClass: 'iradio_square-green',
		    		increaseArea: '20%' // optional
		    });
    	});

    	function getSubjectInfo(subjectid){
    		let obj = {};
    		let info = _SUBJECTTABLE_DATA.map(function(studentobj){
    			if(studentobj.id==subjectid){		
    				obj = studentobj;
    			}
    		});		
    		return obj;
    	}
	}

	updateSubjectList(){
		_SUBJECTTABLE_DATA.map(function(subjectobj){			
			$('#listofsubjects').append(`<li><a href="#" onclick="exam.doRenderSubject(${subjectobj.id})">${subjectobj.name}</a></li>`);
		});
	}
}
let exam = new Exam();