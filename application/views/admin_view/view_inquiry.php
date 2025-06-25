<div class="row">
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>View Join List</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Name</th>
											<th>E-mail</th>
											<th>Mobile</th>
											<th>Oreanization</th>
											<th>Services</th>
											<th>Message</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach($inquiry as $value){?>
										<tr class="odd gradeX">
											<td><?php echo $i;?></td>
											<td><?php echo $value->cust_name;?></td>
											<td><?php echo $value->email;?></td>
											<td><?php echo $value->mobile;?></td>
											<td><?php echo $value->org_name;?></td>
											<td><?php echo $value->service_name;?></td>
											<td><?php echo $value->msg;?></td>
											
											<td> <a href="<?php echo base_url();?>admin/delete_inquiry_data/<?php echo $i;?>" onclick="return confirm('Are you sure you want to delete ?');">Delete</a></td>
											
										</tr>
										<?php $i++;} ?> 
										
										
										
										
										
										
									</tbody>
									
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>

