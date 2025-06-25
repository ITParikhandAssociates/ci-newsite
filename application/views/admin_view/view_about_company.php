<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>About Company Profile</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									
									<div class="media-body">
										
										<div class="clearfix">
											
										
										</div>
									</div>
								</div>

								<div class="stream-list">
									<?php $no=1; foreach ($about_company as $value) {?>
									<div class="media stream">
										
										<!-- <h3>No:<?php echo $no;?></h3> -->
										<!-- <a href="#" class="media-avatar medium pull-left">
											<img src="<?php echo base_url();?>design_admin/images/user.png">
										</a> -->
										<div class="media-body">
											<div class="stream-headline">
												
												<div class="stream-text">
													
													 <?php echo $value->description;?>
													 
												
                                              
                                                
                                                
                                               

                                                
                                                </div>
												
													
														 <img src="<?php echo base_url().'company_about_img/'.$value->abou_img;?>" height="150" width="150"/> 
																		<!--  <?php echo $value->abou_img;?> -->
													
												
											</div><!--/.stream-headline-->

											<div class="stream-options">
												<a href="<?php echo base_url();?>about/update_about_company/<?php echo $no;?>" class="btn btn-small">
													<i class="icon-edit"></i>
													Edit
												</a>
												<!-- <a href="<?php echo base_url();?>admin/delete_slider/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-small">
													<i class="icon-eye-open"></i>
													On Screen
												</a> -->
												
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

