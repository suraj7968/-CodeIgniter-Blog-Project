<?php $this->load->view('admin/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create New Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/Home/index') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/Category/index') ?>">Categories</a></li>
              <li class="breadcrumb-item active">Create</li>
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
          <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title">Create New Category</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php base_url('admin/Category/create') ?>" method="post" role="form" enctype="multipart/form-data" id="quickForm" novalidate="novalidate">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="name" class="form-control <?php echo (form_error('name') != "" ) ? "is-invalid" : ""; ?>" id="name" placeholder="Enter Category Name">
                    <?php echo form_error('name'); ?>
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                    <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : ''; ?>
                  </div>
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline" style="margin-right: 20px;">
                        <input type="radio" value="1" id="statusActive" name="status" checked>
                        <label for="statusActive">Active
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" value="0" id="statusBlock" name="status">
                        <label for="statusBlock">
                            Block
                        </label>
                      </div>
                    </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <a href="<?php echo base_url('admin/Category/index') ?>" class="btn btn-success">Back</a>
                </div>
              </form>
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