<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Our Team</h3>
							</div>
							<div class="module-body">
								
								<a href="<?php echo base_url();?>our_team/new_member" class="btn btn-primary">
											New Member
											</a>
											<?php $no=1; foreach ($our_team_view as $key) {?>
								<div class="stream-list">
									
									
									<div class="media stream">
										<a  class="media-avatar medium pull-left">
											<img src="<?php echo base_url().'our_team/'.$key->profile_img;?>">
										</a>
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													<?php echo $key->name_team;?>
													<h5><?php echo $key->mobile;?></h5>
													<h5><?php echo $key->email_id;?></h5>
												</h5>


												<div class="stream-text">
													<?php echo $key->short_description;?>
												</div>
												
												
												<div class="stream-attachment video">
													<div class="responsive-video">
                                                       <?php echo $key->description;?>
													</div>
												</div>
											</div><!--/.stream-headline-->
													<div class="stream-options">
												<a href="<?php echo base_url();?>our_team/update_profile/<?php echo $no;?>" class="btn btn-small">
													<i class="icon-edit"></i>
													Edit
												</a>
												<a href="<?php echo base_url();?>our_team/delete_profile/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-small">
													<i class="icon-remove"></i>
													Delete
												</a>
												
											</div>
										</div>
									</div><!--/.media .stream-->

									
									</div><!--/.media .stream-->
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

	