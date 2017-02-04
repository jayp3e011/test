<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('admin/addquestions/importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
	<!-- <div class="form-group"> -->
        <label>Subject</label>
        <select class="form-control select2" style="width: 100%;" onchange="document.getElementById('imp').style.display = 'block';">
          <option selected="selected">Theory of Accounts</option>
          <option>Practical Accounting 1</option>
          <option>Practical Accounting 2</option>  
          <option>Auditing Theory</option>
          <option>Auditing Problems</option>
          <option>Business Law & Taxation</option>
          <option>Management Advisory Services</option>
        </select>
        <br>
    <!-- </div> -->
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div id="imp" style="display: none;">
		<input type="file" name="import_file" />
		<br>
		<button class="btn btn-primary"><i class="fa fa-btn fa-file-excel-o"></i> Import Excel File</button>
	</div>
</form>

<script type="text/javascript">
	function importMe() {
		alert('wew');
	// if (document.getElementById("yesCheck").checked) {
	    document.getElementById('imp').style.display = 'block';
	// } else {
	    // document.getElementById("ifYes").style.display = "none";
	}
</script>