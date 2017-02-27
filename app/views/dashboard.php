<?php session_start(); ?>
<div class="content-wrapper" style="background-color: #999">
	<div class="container">
		<section class="content">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Dashboard</h3>
				</div>
				<div>
					<?php
						if(isset($_SESSION['_ISTOKENVALID'])){
							if($_SESSION['_ISTOKENVALID']){
								echo "TOKEN IS VALID!";
							}
							else{
								echo "TOKEN IS INVALID!";
							}
						}
						else{
							header("Location: /test/public/?page=error");
							die();	
						}
					?>
					<h1>Welcome Student</h1>
					<br>	
					<br>	
					<br>	
					<br>	
					<br>
				</div>
					
				<!-- /.box-body -->
			</div>
		</section>
	</div>
	<!-- /.container -->
</div>
