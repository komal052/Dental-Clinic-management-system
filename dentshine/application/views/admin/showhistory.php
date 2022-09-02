<?php include 'includes/header.php'; ?>

	<div class="page-container">
			
	<div class="page-content-wrapper">
		<div class="page-content">						
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">History List</div>
					</div>
						<ol class="breadcrumb page-breadcrumb pull-right">
							<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url();?>Clinic_controller/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>

							<li><a class="parent-item" href="#">History</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>

							<li class="active">History List</li>
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
															<a href="<?php echo base_url();?>Clinic_controller/addpatient" id="addRow"class="btn btn-info">Add New <i class="fa fa-plus"></i>
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
																<li><a href="javascript:;">
																	<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
																</li>
																<li><a href="javascript:;">
																	<i class="fa fa-file-excel-o"></i>Export to Excel </a>
																</li>
															</ul>
														</div>
													</div>
												</div>
					<div class="table-scrollable">
					<table class="table table-hover table-checkable order-column full-width" id="example4">
						
							<!-- <input type="button" name="search" value="search"> -->
						<thead>

							<tr>
								<th>Sr.No</th>
								<th>Patient name</th>
								<th> Treatment name </th>
								<th> Doctor name </th>
								<th> Time</th>
								<th> Date</th>
								<th> Total amount</th>
								<th>Return date</th>
								
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
							
							<?php $no=1;
                          foreach($history_data as $history)
                          {
                            
                           ?>
                         <!--   <script type="text/javascript">
                           	alert("hello");
                           </script> -->
                           <tr>
                            <td><?php echo $no++;?></td>
                          
                            <td><?php echo $history['patient_name'];?> </td>
                            <td><?php echo $history['treatment_name'];?></td>
                            <td><?php echo $history['doctor_name'];?></td>
                            <td><?php echo $history['time'];?></td>
                            <td><?php echo $history['date'];?></td>
                             <td><?php echo $history['total_amount'];?></td>
                            <td><?php echo $history['return_date'];?></td>
                   
                             
                            <td>
							<a href="<?php echo base_url();?>Clinic_controller/deletehistory/<?php echo $history['history_id_pk']; ?>" class="btn btn-danger btn-xs">
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
										<div class="tab-pane" id="tab2">
								      <div class="row">
									<?php foreach($history_data as $history)
									{ ?>
									<div class="col-md-4">
										<div class="card card-topline-aqua">
											<div class="card-body no-padding ">
												<div class="doctor-profile">

												
													<div class="profile-usertitle">
														<div class="doctor-name"><?php echo $history['patient_name'];?> 
													</div>
                                                       <div class="name-center">Treatment name:<?php echo $history['treatment_name'];?>
                                                       	
                                                       </div> 

														<div class="name-center">time:<?php echo $history['time'];?>
															
														</div>
														<div class="name-center">Date:<?php echo $history['date'];?>
															
														</div>

                                                 
                                                      <div class="name-center">return date:<?php echo $history['return_date'];?>
                                                      	
                                                     </div>
													 </div>

														</div>
													</div>
												</div>
											</div>
										
									</div>
										<?php } ?>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	

<?php include 'includes/footer.php';