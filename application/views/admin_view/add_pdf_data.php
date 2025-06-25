<div class="span9">
					<div class="content">
							<div class="module">
							<div class="module-head">
								<h3>Add New PDF</h3>
							</div>
							<div class="module-body">

									
	<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>blog/new_pdf" enctype="multipart/form-data">

										<div class="control-group">
											<label class="control-label" for="basicinput">On Screen</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here...." class="span8" name="on_screen">
													<option value="">Select Here....</option>
													<?php foreach($trad_typ as $value){?>
													<option value="<?php echo $value->trand_id;?>"><?php echo $value->title;?></option>
													<?php } ?>
												
												</select>
											</div>
										</div>

									

									


										<div class="control-group">
											<label class="control-label" for="basicinput">PDF</label>
											<div class="controls">
												<input type="file" id="basicinput" name="image"  class="span8" required>
												
											</div>
										</div>
										
										
										

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Submit</button>
											</div>
										</div>
									</form>
							</div>
						</div>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

