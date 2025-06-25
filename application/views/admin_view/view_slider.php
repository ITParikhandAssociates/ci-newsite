<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Slider View</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									
									<div class="media-body">
										
										<div class="clearfix">
											<a href="<?php echo base_url();?>admin/add_new_slider" class="btn btn-primary">
												Add Slider
												</a>
										
										</div>
									</div>
								</div>

								<div class="stream-list">
									<?php $no=1; foreach ($slider as $value) {?>
									<div class="media stream">
										
										<!-- <h3>No:<?php echo $no;?></h3> -->
										<!-- <a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo base_url();?>design_admin/images/user.png">
										</a> -->
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													Title : <?php echo $value->slider_title;?>
													
												</h5>
												<div class="stream-text">
													
													Description : <?php echo $value->description;?>
													 
												
                                              
                                                
                                                
                                               

                                                
                                                </div>
												<div class="stream-attachment photo">
													<div class="responsive-photo">
														<img src="<?php echo base_url().'slider_image/'.$value->slider_img;?>" />
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="<?php echo base_url();?>admin/update_slider/<?php echo $no;?>" class="btn btn-small">
													<i class="icon-edit"></i>
													Edit
												</a>
												<a href="<?php echo base_url();?>admin/delete_slider/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-small">
													<i class="icon-remove"></i>
													Delete
												</a>
												
											</div>
										</div>

								
									</div><!--/.media .stream-->
								
								
	<?php $no++;} ?>
									
									
                                    
                                    
									

									
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

