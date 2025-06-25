

				<div class="span9">
					<div class="content">
							<a href="<?php echo base_url();?>blog/add_new_tranding" class="btn btn-primary">Add Tranding
												</a><p>
						

						<div class="module">

							<div class="module-head">
								<h3>Trending</h3>
							</div>

							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>On Screen</th>
											<th>Title</th>
											<th>Link/Url</th>
											<th>Image</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach($tranding as $key){?>
										<tr class="odd gradeX">
											<td><?php echo $no;?></td>
											<td><?php echo $key->on_screen;?></td>
											<td><?php echo $key->title;?></td>
											<td><?php echo $key->tra_url;?></td>
											<td><img src="<?php echo base_url().'tranding_img/'.$key->tra_img;?>" width="300" height="250" /></td>
											<td><a href="<?php echo base_url();?>blog/update_tranding/<?php echo $no;?>">
													<i class="icon-edit"></i>
													
												</a>
												<a href="<?php echo base_url();?>blog/delete_tranding/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');" >
													<i class="icon-remove"></i>
													
												</a></td>
											
										</tr>
										<?php $no++;} ?>
										
										
										
									
									</tbody>
									
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	