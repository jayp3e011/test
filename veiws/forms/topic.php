<form class="form-horizontal" role="form" method="POST" action="">
    <div class="form-group">
        <label class="col-md-4 control-label">Topic name</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="topic_name" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="subject_id" >Subject</label>
        <div class="col-md-6">
            <select class="form-control select" name="subject_id" >
              <option selected="selected">Theory of Accounts</option>
              <option>Practical Accounting 1</option>
              <option>Practical Accounting 2</option>  
              <option>Auditing Theory</option>
              <option>Auditing Problems</option>
              <option>Business Law & Taxation</option>
              <option>Management Advisory Services</option>
            </select>
        </div>
        <br>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Date</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="topic_date" value="">
        </div>
    </div>
		 <!-- /.form group -->
    <!-- </div> -->
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                 Add
            </button>
        </div>
    </div>
</form>