
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Our Key Point</h3>
							</div>
							<div class="module-body">

								
								
						<?php foreach($key_point as $key) {?>
									<form action="<?php echo base_url();?>admin/update_key_point" method="POST" accept-charset="utf-8">

							<input type="hidden" name="key_id" value="<?php echo $key->key_id;?>">

								<div class="stream-composer media">
									<h4>Title : <?php echo $key->key_point_title;?></h4>
									<div class="media-body">
										<div class="row-fluid">
											<textarea class="span12" style="height: 70px; resize: none;" name="description" required><?php echo $key->description;?></textarea>
										</div>
										<div class="clearfix">
											<input type="submit" href="#" class="btn btn-primary pull-right">
												 
											
										</div>
									</div>
								</div>
														
									</form>
								<?php } ?>


									
							
							</div><!--/.module-body-->
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	