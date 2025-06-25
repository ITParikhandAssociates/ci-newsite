

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Update Sub Header Menu</h3>
							</div>
							<div class="module-body">

									

									<form class="form-horizontal row-fluid" method="POST" action="<?php echo base_url();?>admin/update_sub_header_menu">
										<?php foreach ($sub_menu as $key) {?>
										<input type="hidden" name="header_menu_id" value="<?php echo $key->sub_menu_id;?>">

										<div class="control-group">
											<label class="control-label" for="basicinput">On Screen </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="on_screen" required>
													<option value="">Select Here.....</option>
													<option value="Y" <?php if($key->on_screen == 'Y') {?>selected="selected"<?php } ?>>Yes</option>
													<option value="N" <?php if($key->on_screen == 'N') {?>selected="selected"<?php } ?>>No</option>
													
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Header Menu Name </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select Here....." class="span8" name="header_name" required>
													<option value="">Select Here.....</option>
													<?php foreach ($headre_main_menu as  $value) { if($value->main_header_id == $key->main_menu_id){?>
													
													<option value="<?php echo $value->main_header_id;?>" selected><?php echo $value->main_header_name;?></option>
													<?php } else { ?>

													<option value="<?php echo $value->main_header_id;?>" selected><?php echo $value->main_header_name;?></option>
												<?php }}?>
													
												</select>
											</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Header Sub Menu Name</label>
											<div class="controls">
												<input type="text" id="basicinput" name="header_sub_name" placeholder="Header Menu Name Here..." class="span8"  value="<?php echo $key->sub_menu_name;?>" required>
											<!-- 	<span class="help-inline">Minimum 5 Characters</span> -->
											</div>

										</div>

											<?php } ?>

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

	