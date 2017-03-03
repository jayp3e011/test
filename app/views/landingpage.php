<div class="content-wrapper " style="background-color: #999">
	<div class="mock-content-wrapper">
		<section class="content">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Landing Page</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-sm-7">
							News
						</div>
						<div class="col-sm-5">
							<h5>Random Question</h5>
							<div style="margin-left: 20px;">
								<p>
									What is the ....
								</p>
								<div style="margin-left: 20px;">
									<table class="table table-hover">
										<tbody>
											<tr>
												<td id="_A" onclick="setAnswer(1,'A')">A. asdfasdf</td>
											</tr>
											<tr>
												<td id="_B" onclick="setAnswer(1,'B')">B. asdfasdf</td>
											</tr>
											<tr>
												<td id="_C" onclick="setAnswer(1,'C')">C. asdfasdf</td>
											</tr>
											<tr>
												<td id="_D" onclick="setAnswer(1,'D')">D. asdfasdf</td>
											</tr>
										</tbody>
									</table>	
									<div>
										<a href="#" class="btn btn-success verifyAnswer" onclick="verifyAnswer()">Verify Answer</a>
									</div>						
								</div>
							</div>
						</div>
					</div>
				</div>				
				<!-- /.box-body -->
			</div>
		</section>
	</div>
	<!-- /.container -->
</div>

<!-- modals start-->

	<!-- read modal start -->
	<div class="modal fade" id="subjectmodal-read" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-success modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">New message</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<label for="recipient-name" class="control-label">Name:</label>
									<input type="text" class="form-control" id="subjectname">
								</div>
								<div class="col-sm-4">
									<label for="recipient-name" class="control-label">Time Duration:</label>
									<input type="text" class="form-control" id="subjecttimeduration">
								</div>
								<div class="col-sm-4">
									<label for="recipient-name" class="control-label">Passing Rate:</label>
									<input type="text" class="form-control" id="subjectpassingrate">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="message-text" class="control-label">Description:</label>
							<textarea class="form-control" id="subjectdescription"></textarea>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label for="recipient-name" class="control-label">No. of attempts:</label>
									<input type="text" class="form-control" id="subjectattempt">
								</div>
								<div class="col-sm-6">
									<label for="recipient-name" class="control-label">No. of items:</label>
									<input type="text" class="form-control" id="subjectitems">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-outline">Save changes</button> -->
					<button type="button" class="btn btn-outline" data-dismiss="modal">Close</button> 
				</div>
			</div>
		</div>
	</div>
	<!-- read modal end -->

	<!-- create modal start-->
	<div class="modal fade" id="subjectmodal-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-primary modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">Create</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<label for="recipient-name" class="control-label">Name:</label>
									<input type="text" class="form-control" id="subjectcreatename">
								</div>
								<div class="col-sm-4">
									<label for="recipient-name" class="control-label">Time Duration:</label>
									<input type="text" class="form-control" id="subjectcreatetimeduration">
								</div>
								<div class="col-sm-4">
									<label for="recipient-name" class="control-label">Passing Rate:</label>
									<input type="text" class="form-control" id="subjectcreatepassingrate">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="message-text" class="control-label">Description:</label>
							<textarea class="form-control" id="subjectcreatedescription"></textarea>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label for="recipient-name" class="control-label">No. of attempts:</label>
									<input type="text" class="form-control" id="subjectcreateattempt">
								</div>
								<div class="col-sm-6">
									<label for="recipient-name" class="control-label">No. of items:</label>
									<input type="text" class="form-control" id="subjectcreateitems">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-outline" id="subjectbtnmodalcreate">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- create modal end -->

<!-- modals end-->


<script src="../app/controllers/subject.js"></script>

<script>
	function verifyAnswer(){
		$('.verifyAnswer').html('Next Question');
	}

	function setAnswer(id,letter){
		var id = "#_"+letter;
		// console.log(id);
		$(id).css('background-color','#90EE90');
		$(id).css('color','#fff');

		var arr = ['A','B','C','D'];
		for(var i=0;i<arr.length;i++){
			if(arr[i]!==letter){
				var nid = "#_"+arr[i];
				// console.log(nid);
				$(nid).css('background-color','#fff');
				$(nid).css('color','#000');				
			}
		}
	}
</script>