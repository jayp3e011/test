var _EXAMTABLE_SELECTED_ID;
function renderTable(id,data,columns,actions){
	_EXAMTABLE_SELECTED_ID = 0;
	// $(id +'-btncreate').hide();
	// $(id +'-btnread').hide();
	// $(id +'-btnupdate').hide();
	// $(id +'-btndelete').hide();
	var arrofobj = JSON.parse(data);
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
    		searchPlaceholder: "Search records..."
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
    		$(id+'table-status').html('<i class="fa fa-info-circle text-gray"></i> &nbsp;&nbsp; You selected ID: <span class="text-red">'+_EXAMTABLE_SELECTED_ID+'</span>!');
			for(act in actions)if(actions[act]!='create')$(id +'table-btn' + actions[act]).removeAttr('disabled');			
    	}    	
    }); 
    $(id+'table-loading').hide();
    $(id+'table-status').html('<i class="fa fa-info-circle text-gray"></i> &nbsp;&nbsp;Nothing Selected');
    for(act in actions){
    	$(id +'table-btn' + actions[act]).show();
    	// console.log(actions[act]); 	  	
    }

	$(id + 'modal-create').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('id') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('Create')
	  modal.find('.modal-body input').val(recipient)
	});
	$(id + 'modal-read').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('id') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('Read id: ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	});
	$(id + 'modal-update').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('id') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('Update id: ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	});
	$(id + 'modal-delete').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('id') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('Delete id: ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	});
}