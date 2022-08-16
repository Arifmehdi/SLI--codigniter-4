<?= $this->extend('dashboard/admin_layout') ?>
<?= $this->section('content') ?>
<!-- from start here  -->
<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Update Your Founder</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Update Founder </h2><span ><a href="<?= base_url('founder/view') ?>" class="btn btn-xs btn-danger pull-right" >Back</a></span>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
								
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php if(isset($list)){ echo base_url('founder/update/'.$list['id']);}  ?>" method="post" enctype="multipart/Form-data">
										<input type="hidden" name="_method" value="PUT">
										
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="img">Photo <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="img" required="required" class="form-control " name="photo" >
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="title" name="name" required="required" class="form-control" value="<?= $list['name']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="subtitle" class="col-form-label col-md-3 col-sm-3 label-align">Designation</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="subtitle" class="form-control" type="text" name="designation" value="<?= $list['designation']?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="subtitle" class="col-form-label col-md-3 col-sm-3 label-align">Details</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="details" id="" cols="30" rows="5" class="form-control"><?= $list['details']?></textarea>
												
											</div>
										</div>
									
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
					</div>
					</div>
<!-- from end here  -->
<?= $this->endSection() ?>