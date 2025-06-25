<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Contact View</h3>
							</div>
							<div class="module-body">
							
								<div class="stream-list">
									<?php $no=1; foreach ($contact_detail as $key) {?>

										<div class="media stream">
									<div class="media-body">
										<div class="stream-headline">
									
											<div class="stream-text">
											<b>Mobile :</b>
												 <?php echo $key->mobile;?></br>

												 	<b>E-Mail :</b>
												  <?php echo $key->email_id;?></br>

												 <b>Address :</b>
												  <?php echo $key->address;?></br>

												   <b>About Us :</b>
												  <?php echo $key->about_comany;?></br>

							                  </div><p></p>
							     
										</div>
										
										<div class="clearfix">
										</div>
									</div>
								</div>

									
									<div class="media stream">
									
										 
										<div class="media-body">
											<div class="stream-headline">
												<h5 class="stream-author">
													Map View
												</h5>


												
												
												
												<div class="stream-attachment video">
													<div class="responsive-video">
                                                       <?php echo $key->contact_map;?></br>
                                                      
													</div>
												</div>
											</div><!--/.stream-headline-->
													<div class="stream-options">
												<a href="<?php echo base_url();?>contact/update_contact/<?php echo $no;?>" class="btn btn-small">
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

	