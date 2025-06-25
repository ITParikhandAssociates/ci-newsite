<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Blog List</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									
									<div class="media-body">
										
										<div class="clearfix">
											<a href="<?php echo base_url();?>blog/add_new_blog" class="btn btn-primary">
												Add Blog  
												</a>
										
										</div>
									</div>
								</div>

								 <div class="stream-list">
								
									<?php  $no=1; foreach($blog_detail as $value){?>
									<div class="media stream">
										
									
										 
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
											       No : <?php echo $no;?>
													
												</h5>
												
												 <div class="stream-attachment photo">
													<div class="responsive-photo">
														 <?php echo $value->title;?>
															
													</div>
												</div>
												 <div class="stream-attachment photo">
													<div class="responsive-photo">
														 <?php echo $value->now_date;?>
															
													</div>
												</div>
											

								                            <div class="stream-attachment photo">
													<div class="responsive-photo">
														 <?php echo $value->description1;?>
															
													</div>
												</div>
												
								                                              
								                      <div class="stream-attachment photo">
													<div class="responsive-photo">
														 <?php echo $value->description2;?>
															
													</div>
												</div>
								                                                
								                                               
								
								                                                
												<div class="stream-attachment photo">
													<div class="responsive-photo">
													
														 <img  align="center" src="<?php echo base_url().'blog_image/'.$value->blog_img;?>" /> 
													</div>
												</div>
											</div>
								
											<div class="stream-options">
												<a href="<?php echo base_url();?>blog/update_blog_detail/<?php echo $no;?>" class="btn btn-small">
													<i class="icon-edit"></i>
													Edit
												</a>
												<a href="<?php echo base_url();?>blog/delete_blog_detail/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-small">
													<i class="icon-remove"></i>
													Delete
												</a>
												
											</div>
										</div>
								
								
									</div>
								
								
											<?php $no++; } ?>
									
									
								                                    
								                                    
									
								
									
								</div> 
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

