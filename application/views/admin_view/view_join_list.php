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
											<th>Group</th>
											<th>Exprience</th>
											<th>Description</th>
											<th>Resume</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach($join_list as $value){?>
										<tr class="odd gradeX">
											<td><?php echo $i;?></td>
											<td><?php echo $value->fullname;?></td>
											<td><?php echo $value->email_id;?></td>
											<td><?php echo $value->mobile;?></td>
											<td><?php echo $value->grouped;?></td>
											<td><?php echo $value->exp;?></td>
											<td><?php echo $value->msg;?></td>
											<td><a target="_blank"  href="<?php echo base_url().'pdf/'.$value->file_data;?>" alt="">Click here</a></td>
											<td> <a href="<?php echo base_url();?>join_us/delete_data/<?php echo $i;?>" onclick="return confirm('Are you sure you want to delete ?');">Delete</a></td>
											
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

