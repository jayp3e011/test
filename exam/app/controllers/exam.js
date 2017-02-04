$(function(){
	html = "";
	selected = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
	for(i=1;i<20;i++){
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


});	

