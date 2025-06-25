


				<div class="span9">
					<div class="content">
							<a href="<?php echo base_url();?>admin/new_sub_child_header_menu" class="btn btn-primary">
											Sub Child Menu
											</a>
							<br>
							<br>

						<div class="module">
							<div class="module-head">
								<h3>Header Sub Child Menu List</h3>
							</div>
							<div class="module-body">
								

								
								 <table class="table table-striped">
								  <thead>
								 									<tr>
								 									  <th>No</th>
								 									  <th>On Screen</th>
								 									  <th>Main Menu </th>
								 									  <th>Sub Menu </th>
								 									  <th>Child Menu</th>
								 									  <th>Action</th>
								 									 
								 									</tr>
								  </thead>
								  <tbody>
								 									<?php $no=1; foreach ($child_menu as $key) {?>
								 									
								 								
								 									<tr>
								 									  <td><?php echo $no;?></td>
								 									  <td><?php echo $key->on_screen;?></td>
								 									  <td><?php echo $key->main_header_name;?></td>
								 									   <td><?php echo $key->sub_menu_name;?></td>
								 									   <td><?php echo $key->header_child_menu_name;?></td>
								 									  <td><a href="<?php echo base_url();?>admin/edit_child_header_menu/<?php echo $no;?>">
								 									<i class="icon-edit"></i></a> <a href="<?php echo base_url();?>admin/delete_child_header_menu/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');">&nbsp;<i class="icon-zoom-in"></i>
								 									
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

	