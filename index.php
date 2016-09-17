<?php include 'header.php';?>

	<div id="content" class="col-sm-9">
	
		<h1 class="page-header">Dashboard</h1>
		
		<!--
		<div class="alert alert-danger fade in">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
			<h3>This is a service notice!!!</h3>
			All servers will be restarted between 3:00 and 6:00 CET
		</div>		
		-->
		
		<section id="quick-stats" class="clearfix section">
			<div class="statbox-row clearfix">
				<div class="col-sm-3 statbox">
					<i class="fa fa-globe"></i>
					<div class="statbox-count">9</div>
					<div class="statbox-name">Domains</div>
					<div class="statbox-divider bg-primary"></div>
				</div>
				<div class="col-sm-3 statbox">
					<i class="fa fa-server"></i>
					<div class="statbox-count">1</div>
					<div class="statbox-name">Nameservers</div>
					<div class="statbox-divider bg-danger"></div>
				</div>
				<div class="col-sm-3 statbox">
					<i class="fa fa-external-link"></i>
					<div class="statbox-count">2</div>
					<div class="statbox-name">DNS-zones</div>
					<div class="statbox-divider bg-warning"></div>
				</div>
				<div class="col-sm-3 statbox">
					<i class="fa fa-shield"></i>
					<div class="statbox-count">5</div>
					<div class="statbox-name">SSL-certificates</div>
					<div class="statbox-divider bg-success"></div>
				</div>
			</div>
		</section>

		<section id="quick-domains" class="section clearfix">
			<h3 class="section-header">Domain actions</h3>		
			<div class="row clearfix">
				<div class="col-sm-4">
					<a href="#" class="btn btn-block btn-lg btn-primary">
						<i class="fa fa-fw fa-plus"></i>
						<span class="name">Register new Domain</span>
						<div class="btn-overlay"></div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" class="btn btn-block btn-lg btn-primary">
						<i class="fa fa-fw fa-exchange"></i>
						<span class="name">Transfer Domain</span>
						<div class="btn-overlay"></div>
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" class="btn btn-block btn-lg btn-primary">
						<i class="fa fa-fw fa-refresh"></i>
						<span class="name">Renew Domain</span>
						<div class="btn-overlay"></div>
					</a>
				</div>
			</div>	
		</section>	
		

		<section id="quick-news" class="clearfix section">
			<h3 class="section-header">Server status</h3>
			
			<!-- NAV -->
			<ul class="nav nav-tabs">
			  <li role="presentation" class="active"><a href="#frontNameserverFree" aria-controls="frontNameserverFree" role="tab" data-toggle="tab">Free Nameservers</a></li>
			  <li role="presentation"><a href="#frontNameserverPrivate" aria-controls="frontNameserverPrivate" role="tab" data-toggle="tab">Private Nameservers</a></li>
			</ul>
			
			<!-- START TAB CONTENT -->
			<div class="tab-content">
			
				<div class="tab-pane active" id="frontNameserverFree" role="tabpanel">	
					<div class="row clearfix">
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="status-badge bg-success"></span>
									<h4 class="panel-title">ns21.cloudns.net</h4>
								</div>
								<table class="table">
									<tbody>
										<tr>
											<th width="1%">IPv4:</th>
											<td>109.201.133.61</td>
										</tr>
										<tr>
											<th width="1%">IPv6:</th>
											<td>2a00:1768:1001:9::21</td>
										</tr>
										<tr>
											<th width="1%">Location:</th>
											<td>Netherlands</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="status-badge bg-warning"></span>
									<h4 class="panel-title">ns22.cloudns.net</h4>
								</div>
								<table class="table">
									<tbody>
										<tr>
											<th width="1%">IPv4:</th>
											<td>108.59.2.202</td>
										</tr>
										<tr>
											<th width="1%">IPv6:</th>
											<td>2604:9a00:2100:a006:4::1</td>
										</tr>
										<tr>
											<th width="1%">Location:</th>
											<td>USA</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>	
					</div>	
					<div class="row clearfix">
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="status-badge bg-danger"></span>
									<h4 class="panel-title">ns23.cloudns.net</h4>
								</div>
								<table class="table">
									<tbody>
										<tr>
											<th width="1%">IPv4:</th>
											<td>178.32.152.117</td>
										</tr>
										<tr>
											<th width="1%">IPv6:</th>
											<td><span class="label label-danger">Currently not available</span></td>
										</tr>
										<tr>
											<th width="1%">Location:</th>
											<td>France</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="status-badge bg-success"></span>
									<h4 class="panel-title">ns24.cloudns.net</h4>
								</div>
								<table class="table">
									<tbody>
										<tr>
											<th width="1%">IPv4:</th>
											<td>46.165.221.164</td>
										</tr>
										<tr>
											<th width="1%">IPv6:</th>
											<td>2a00:c98:2030:a006:2::1</td>
										</tr>
										<tr>
											<th width="1%">Location:</th>
											<td>Germany</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- END TAB PANE -->
			
				<div class="tab-pane" id="frontNameserverPrivate" role="tabpanel">	
					<div class="row clearfix">
						<div class="col-sm-6">
							<div class="panel panel-warning">
								<div class="panel-heading">
									<span class="status-badge bg-success"></span>
									<h4 class="panel-title">ns1.mydomainname.com</h4>
								</div>
								<table class="table">
									<tbody>
										<tr>
											<th width="1%">IPv4:</th>
											<td>109.201.133.61</td>
										</tr>
										<tr>
											<th width="1%">IPv6:</th>
											<td>2a00:1768:1001:9::21</td>
										</tr>
										<tr>
											<th width="1%">Location:</th>
											<td>Denmark</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="panel panel-warning">
								<div class="panel-heading">
									<span class="status-badge bg-warning"></span>
									<h4 class="panel-title">ns2.mydomainname.com</h4>
								</div>
								<table class="table">
									<tbody>
										<tr>
											<th width="1%">IPv4:</th>
											<td>108.59.2.202</td>
										</tr>
										<tr>
											<th width="1%">IPv6:</th>
											<td>2604:9a00:2100:a006:4::1</td>
										</tr>
										<tr>
											<th width="1%">Location:</th>
											<td>Sweden</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>	
					</div>			
				</div><!-- END TAB PANE -->
			
			</div><!-- END TAB CONTENT -->
			
		</section>
		
	</div>
	
<?php include 'footer.php';?>