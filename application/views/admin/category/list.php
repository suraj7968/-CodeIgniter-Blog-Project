<?php $this->load->view('admin/header.php'); ?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/Home/index') ?>">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <?php if($this->session->flashdata('success') != "" ){ ?>
            <div class="alert alert-success"> <?php echo $this->session->flashdata('success'); ?></div>
            <?php } ?>
            <div class="card">
            <div class="card-header">
                <div class="card-tools float-left" style="margin-top: 10px;">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
                <div class="card-tools">
                <a href="<?php echo base_url('admin/Category/create') ?>" class="btn btn-block btn-primary btn-md"><i class="fa-solid fa-plus"></i> Create</a>
                </div>
              </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th width="50">#</th>
                        <th>Name</th>
                        <th width="100">Status</th>
                        <th width="160" class="text-center">Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Fasion</td>
                        <td>
                            <span class="badge badge-success">Status</span>
                        </td>
                        <td class="text-center">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square fa-sm"></i> Edit</a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash fa-sm"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Fasion</td>
                        <td>
                            <span class="badge badge-success">Status</span>
                        </td>
                        <td class="text-center">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square fa-sm"></i> Edit</a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash fa-sm"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fasion</td>
                        <td>
                            <span class="badge badge-success">Status</span>
                        </td>
                        <td class="text-center">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square fa-sm"></i> Edit</a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash fa-sm"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Fasion</td>
                        <td>
                            <span class="badge badge-success">Status</span>
                        </td>
                        <td class="text-center">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square fa-sm"></i> Edit</a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash fa-sm"></i> Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/footer.php'); ?>