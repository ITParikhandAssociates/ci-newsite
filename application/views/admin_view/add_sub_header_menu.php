

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Add Sub Header Menu</h3>
							</div>
							<div class="module-body">

									

									<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>admin/sub_header_menu">

										<div class="control-group">
											<label class="control-label" for="basicinput">On Screen </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="on_screen" required>
													<option value="">Select Here.....</option>
													<option value="Y">Yes</option>
													<option value="N">No</option>
													
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Header Menu Name </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="header_name" required>
													<option value="">Select Here.....</option>
													<?php foreach ($headre_main_menu as  $value) {?>
													
													<option value="<?php echo $value->main_header_id;?>"><?php echo $value->main_header_name;?></option>
													<?php } ?>
													
												</select>
											</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Header Sub Menu Name</label>
											<div class="controls">
												<input type="text" id="basicinput" name="header_sub_name" placeholder="Header Sub Menu Name Here..." class="span8"  required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
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

	