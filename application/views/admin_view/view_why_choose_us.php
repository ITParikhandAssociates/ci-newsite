<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Our Team</h3>
							</div>
							<div class="module-body">
							
								<div class="stream-list">
									<?php $no=1; foreach ($choose_us as $key) {?>
									
									<div class="media stream">
									 <a  class="media-avatar medium pull-left">
											<img src="<?php echo base_url().'company_about_img/'.$key->choose_img;?>">
										</a> 
										 
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													Why Choose Us
												</h5>


												
												
												
												<div class="stream-attachment video">
													<div class="responsive-video">
                                                       <?php echo $key->description;?>
													</div>
												</div>
											</div><!--/.stream-headline-->
													<div class="stream-options">
												<a href="<?php echo base_url();?>about/update_choose/<?php echo $no;?>" class="btn btn-small">
													<i class="icon-edit"></i>
													Edit
												</a>
												<!-- <a href="<?php echo base_url();?>our_team/delete_profile/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-small">
													<i class="icon-remove"></i>
													Delete
												</a> -->
												
											</div>
										</div>
									</div><!--/.media .stream-->

									
									</div><!--/.media .stream-->
									<div class="media stream">
										
										<div class="media-body">
											<div class="stream-headline">
												
												
											</div><!--/.stream-headline-->

											
										</div>
									</div><!--/.media .stream-->
                                    
                                    <div class="media stream">
										
										<div class="media-body">
											<div class="stream-headline">
											</div><!--/.stream-headline-->
											</div><!--/.media .stream-->
												
												
												

										
									
						</div><!--/.module-->
						<?php $no++;} ?>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>

	</div>




























					

					
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	