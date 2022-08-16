<?= $this->extend('dashboard/admin_layout'); ?>
<?= $this->section('content') ?>
<!-- table start here  -->

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add or Update Contact</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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
            <div>
              <?php if(session()->getFlashdata('status')){
                 echo "<h5 class='alert alert-success' role='alert'>".session()->getFlashdata('status')."</h5>";
                }
    
              ?>
            </div>
            <div>
              <?php if(session()->getFlashdata('error')){
                 echo "<h5 class='alert alert-danger' role='alert'>".session()->getFlashdata('error')."</h5>";
                }
    
              ?>
            </div>
            <div class="row" style="display: block;">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Contact<small>Show Contact Information</small></h2><span ><a href="<?= base_url('contact/add') ?>" class="btn btn-xs btn-primary pull-right" >Add New</a></span>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-hover table-responsive">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>About Us</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(isset($list)){foreach($list as $k=>$l){ ?>
                        <tr>
                          <th scope="row"><?= ++$k ?></th>
                          <td style="width:20%; max-height:200px" ><?= $l['about_us'] ?></td>
                          <td><?= $l['email'] ?></td>
                          <td><?= $l['phone'] ?></td>
                          <td><?= $l['address'] ?></td>
                     
                          <td><a href="" class="btn btn-xs btn-primary">View</a><a href="<?= base_url('contact/edit/'.$l['id'])?>" class="btn btn-xs btn-success">Edit</a><a href="<?= base_url('contact/delete/'.$l['id']) ?>" onclick = "return confirm('Are you sure ?')"class="btn btn-xs btn-danger">Delete</a></td>
                        </tr>
                        <?php }; } ?>
                       
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
            </div>
                  
<!-- table end here  -->
<?= $this->endSection() ?>