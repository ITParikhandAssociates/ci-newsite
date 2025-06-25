<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Services List</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									
									<div class="media-body">
										
										<div class="clearfix">
											<a href="<?php echo base_url();?>services/add_new_service" class="btn btn-primary">
												Add Service Detail 
												</a>
										
										</div>
									</div>
								</div>

								<div class="stream-list">
								
									<?php  $no=1; foreach($services_detail as $value){?>
									<div class="media stream">
										
									
										 <a  class="media-avatar medium pull-left">
											<img src="<?php echo base_url().'services_img/'.$value->small_image;?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													Main Type : <?php echo $value->main_header_name;?>
													
												</h5>
												<h5 class="stream-author">
													Sub Type :<?php echo $value->sub_menu_name;?>
													
												</h5>
												<div class="stream-text">
													
											 <?php echo $value->short_description;?>
													 
                                                </div>
												
                                              
                                                <div class="stream-attachment photo">
													<div class="responsive-photo">
														 <?php echo $value->description;?>
															<!-- <img src="<?php echo base_url().'slider_image/'.$value->slider_img;?>" /> -->
													</div>
												</div>
                                                
                                               

                                                
												<div class="stream-attachment photo">
													<div class="responsive-photo">
													
														 <img  align="center" src="<?php echo base_url().'services_img/'.$value->long_image;?>" /> 
													</div>
												</div>
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="<?php echo base_url();?>services/update_services_detail/<?php echo $no;?>" class="btn btn-small">
													<i class="icon-edit"></i>
													Edit
												</a>
												<a href="<?php echo base_url();?>services/delete_services_detail/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-small">
													<i class="icon-remove"></i>
													Delete
												</a>
												
											</div>
										</div>

								
									</div><!--/.media .stream-->
								
								
			<?php $no++; } ?>
									
									
                                    
                                    
									

									
								</div><!--/.stream-list-->
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

