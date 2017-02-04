<div class="content-wrapper" style="background-color: #999">
	<div class="container">
		<section class="content">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Manage Exam</h3>					
				</div>
				<div class="box-body">
					<div class="btn-group" role="group" aria-label="...">
						<button id="examtable-btncreate" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exammodal-create" data-id="0" style="display:none;">
							<i class="fa fa-plus text-gray"></i> &nbsp;&nbsp;Create </button>
						<button id="examtable-btnread" type="button" class="btn btn-success" data-toggle="modal" data-target="#exammodal-read" data-id="0" style="display:none;" disabled>
							<i class="fa fa-eye text-gray"></i> &nbsp;&nbsp;Read </button>
						<button id="examtable-btnupdate" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exammodal-update" data-id="0" style="display:none;" disabled>
							<i class="fa fa-pencil text-gray"></i> &nbsp;&nbsp;Update</button>
						<button id="examtable-btndelete" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exammodal-delete" data-id="0" style="display:none;" disabled>
							<i class="fa fa-times text-gray"></i> &nbsp;&nbsp;Delete</button>
					</div>
					<div id="examtable-status" style="text-align: center"></div>
					<div>&nbsp;</div>
					<!-- datatable start-->
					<table id="examtable" class="table table-bordered table-hover">
						<div id="examtable-loading" style="text-align: center;">
							<i class="fa fa-spinner"></i> Loading...
						</div>
					</table>
					<!-- datatable end-->

				</div>
				<!-- /.box-body -->
			</div>

			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Subject: </h3>
				</div>
				<div class="box-body">
					<table class="table">
						<caption>table title and/or explanatory text</caption>
						<thead>
							<tr>
								<th colspan="5">ANSWER SHEET</th>
								<th width="6%">ITEM NO.</th>
								<th width="70%">QUESTION SHEET</th>
							</tr>
						</thead>
						<tbody id="items"></tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>			
		</section>
	</div>
	<!-- /.container -->
</div>

<!-- modals start-->
<div class="modal fade" id="exammodal-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-primary modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">New message</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Recipient:</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="message-text" class="control-label">Message:</label>
						<textarea class="form-control" id="message-text"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline">Save changes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exammodal-read" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-success modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">New message</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Recipient:</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="message-text" class="control-label">Message:</label>
						<textarea class="form-control" id="message-text"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline">Save changes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exammodal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-warning modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">New message</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Recipient:</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="message-text" class="control-label">Message:</label>
						<textarea class="form-control" id="message-text"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline">Save changes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exammodal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-danger modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">New message</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Recipient:</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="message-text" class="control-label">Message:</label>
						<textarea class="form-control" id="message-text"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- modals end-->

<script src="../app/controllers/exam.js"></script>