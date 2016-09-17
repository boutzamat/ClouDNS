<?php include 'header.php';?>

	<div id="content" class="col-sm-9">
		<h1 class="page-header">Domains</h1>
		
		<table id="domains-table" class="table">
			<thead>
				<tr>
					<th>Domain name</th>
					<th width="150">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="#" class="domain-name">mydomainname.com</a>
						<small><span class="label label-info">Registered: 01/01/2016</span> <span class="label label-success">Expires: 01/01/2020</span></small>
					</td>
					<td>
						<div class="btn-group">
							<a class="btn btn-primary" title="Transfer domain" data-toggle="tooltip" data-placement="top" ><i class="fa fa-fw fa-exchange"></i></a>
							<a class="btn btn-primary" title="Renew domain" data-toggle="tooltip" data-placement="top" ><i class="fa fa-fw fa-refresh"></i></a>
							<a class="btn btn-primary" title="Settings" data-toggle="tooltip" data-placement="top" ><i class="fa fa-fw fa-gear"></i></a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		
	</div>
	
<?php include 'footer.php';?>