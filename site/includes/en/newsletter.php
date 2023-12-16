<nav class="newsletter" role="navigation">
	<div class="container">
		<form id="formNewsletter" class="row" action="<?php Section::getHost()?>contactenos.html" method="post">
			<div class="col-sm-5 col-xs-5">
				<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 control-label">Name</div>
			    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6">
			      <input type="text" class="form-control" name="inputnombre" placeholder="Name">
			    </div>
			</div>
			<div class="col-sm-4 col-xs-4">
				<div class="col-sm-2 col-xs-2 control-label">Email</div>
			    <div class="col-sm-10 col-xs-10">
			      <input type="email" class="form-control" name="inputemail" placeholder="Email">
			    </div>
			</div>
			<div class="col-sm-3 col-xs-3" >
				<button id="btnNL" class="btn btn-primary" >Subscribe</button>
			</div>
		</div>
	</div>
</nav>