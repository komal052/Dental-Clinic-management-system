<?php include 'includes/header.php'; ?>
	<div class="page-container">
			<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content">						
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">prescriptions List</div>
					</div>
						<ol class="breadcrumb page-breadcrumb pull-right">
							<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url();?>Clinic_controller/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>

							<li><a class="parent-item" href="#">prescriptions</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>

							<li class="active">prescription List</li>
						</ol>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable-line">
						<ul class="nav customtab nav-tabs" role="tablist">
							<li class="nav-item"><a href="#tab1" class="nav-link active" datatoggle="tab">List
							View</a></li>

							<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid View</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active fontawesome-demo" id="tab1">
								<div class="row">
									<div class="col-md-12">
										<div class="card card-topline-red">
											<div class="card-head">
												<header></header>
												<div class="tools">
													<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
													<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
													<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
												</div>
											</div>
										    <div class="card-body ">
									            <div class="row">
													<div class="col-md-6 col-sm-6 col-xs-6">
													    <div class="btn-group">
															<a href="<?php echo base_url();?>Clinic_controller/addprescription" id="addRow"class="btn btn-info">Add New <i class="fa fa-plus"></i>
															</a>
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-6">
														<div class="btn-group pull-right">
															<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"data-toggle="dropdown">Tools
															<i class="fa fa-angle-down"></i>
															</a>
															<ul class="dropdown-menu pull-right">
																<li><a href="javascript:window.print();">
																	<i class="fa fa-print"></i> Print </a>
																</li>
																
																
															</ul>
														</div>
													</div>
												</div>
					<div class="table-scrollable">
					<table class="table table-hover table-checkable order-column full-width" id="example4">
						<thead>

							<tr>
								<th>Sr.No</th>
								<th>Patient Name</th>
								
								<th>Treatment </th>
								<th>Medicine</th>
								<th>date</th>
								<th>Description</th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
							
							
							<?php $no=1;
                          foreach($prescription_data as $prdata)
                          {

                           ?>
                           <script type="text/javascript">alert('hello');</script>
                           
                           <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $prdata['patient_name'];?> </td>
                           
                            <td><?php echo $prdata['treatment_name'];?></td>
                            <td><?php echo  $prdata['medicine_name'];?></td>
                            <td><?php echo $prdata['date'];?></td>
                            <td><?php echo $prdata['description'];?></td>
                            <td>
							<a href="<?php echo base_url();?>Clinic_controller/editprescription/<?php echo $prdata['prescription_id_pk']; ?>" class="btn btn-primary btn-xs">		
								<i class="fa fa-pencil"></i>
							</a>
							<a href="<?php echo base_url();?>Clinic_controller/deleteprescription/<?php echo $prdata['prescription_id_pk']; ?>" class="btn btn-danger btn-xs">
								<i class="fa fa-trash-o "></i>
							</a>
							</td>
                            
                          </tr>

                          <?php
                          }
                          ?>
						</tbody>
						</table>
						</div>
						</div>
						</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
		
		<!-- end page container -->
		<!-- start footer -->


<?php include 'includes/footer.php';