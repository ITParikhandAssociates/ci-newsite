


				<div class="span9">
					<div class="content">
							<a href="<?php echo base_url();?>admin/new_header_menu" class="btn btn-primary">
											Main Menu
											</a>
							<br>
							<br>

						<div class="module">
							<div class="module-head">
								<h3>Header Menu List</h3>
							</div>
							<div class="module-body">
								

								
								<table class="table table-striped">
								  <thead>
									<tr>
									  <th>No</th>
									  <th>On Screen</th>
									  <th>Header Name</th>
									  <th>Action</th>
									 
									</tr>
								  </thead>
								  <tbody>
									<?php $no=1; foreach ($headre_manu as $key) {?>
									

									<tr>
									  <td><?php echo $no;?></td>
									  <td><?php echo $key->on_screen;?></td>
									  <td><?php echo $key->main_header_name;?></td>
									  <td><a href="<?php echo base_url();?>admin/edit_main_header_menu/<?php echo $no;?>">
									<i class="icon-edit"></i></a> <a href="<?php echo base_url();?>admin/delete_main_header_menu/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');">&nbsp;<i class="icon-remove"></i>
									
								</a></td>
									
									</tr>
									<?php $no++; }?>
								  </tbody>
								</table>

							

								

							</div>
						</div>

					

					
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	