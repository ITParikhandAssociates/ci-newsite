

				<div class="span9">
					<div class="content">
							<a href="<?php echo base_url();?>blog/add_new_pdf" class="btn btn-primary">PDF
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
										
											<th>Title</th>
											<th>PDF</th>
										
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach($pdf_file as $key){?>
										<tr class="odd gradeX">
											<td><?php echo $no;?></td>
										
											<td><?php echo $key->tra_pdf;?></td>
											
											<td><a target="_blank"  href="<?php echo base_url().'./tranding_img/'.$key->tra_pdf;?>" alt="">Click here</a></td>
											<td>
												<a href="<?php echo base_url();?>blog/delete_pdf/<?php echo $key->pdf_id;?>" onclick="return confirm('Are you sure you want to delete ?');" >
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

	