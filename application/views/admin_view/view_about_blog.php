<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>About Company Blog</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<div class="media-body">
										<div class="clearfix">
											<a href="<?php echo base_url();?>about/add_new_blog" class="btn btn-primary">
												Add Blog
												</a>
										</div>
										<div class="clearfix">
										</div>
									</div>
								</div>
							<div class="stream-list">
								<?php $no=1; foreach ($ab_blog as $value) {?>
								<div class="media stream">
									<div class="media-body">
										<div class="stream-headline">
											<h5 class="stream-author">
													Title : <?php echo $value->blog_title;?>
													
												</h5>
											<div class="stream-text">
											<b>Description :</b>
												 <?php echo $value->description;?>

							                  </div><p></p>
							        <img src="<?php echo base_url().'company_about_img/'.$value->blog_img;?>"  width="100"/> 
										</div>
										<div class="stream-options">
											<a href="<?php echo base_url();?>about/update_about_blog/<?php echo $no;?>" class="btn btn-small">
											<i class="icon-edit"></i>
												Edit
											</a>
											<a href="<?php echo base_url();?>about/delete_about_blog/<?php echo $no;?>" onclick="return confirm('Are you sure you want to delete ?');" class="btn btn-small">
													<i class="icon-remove"></i>
													Delete
												</a>
											
										</div>
										<div class="clearfix">
										</div>
									</div>
								</div>
								<?php $no++;} ?>
							       </div>
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

