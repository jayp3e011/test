<form class="form-horizontal" role="form" method="POST">
	<div class="form-group">
      <label class="col-md-4 control-label" for="news_name" >Name</label>
      <div class="col-md-6">
        <input type="text" name="news_name" class="form-control" placeholder="Enter ...">
      </div>
  </div>
  <div class="form-group">
      <label class="col-md-4 control-label" for="news_date">Date</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="news_date">
      </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="news_content">Content</label>
    <div class="col-md-6">
      <textarea class="form-control" name="news_content" rows="3" placeholder="Enter ..."></textarea>
    </div>
  </div>
  <div class="box-footer">
    <div class="col-md-offset-4">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>