<?php $this->load->view('admin/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create New Articles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/Home/index') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/Articles/index') ?>">Articles</a></li>
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
                <h2 class="card-title">Create New Articles</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php base_url('admin/Articles/create') ?>" method="post" role="form" enctype="multipart/form-data" id="quickForm" novalidate="novalidate">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName1">Categories</label>
                    <select name="category_id" class="form-control <?php echo (form_error('category_id') != "" ) ? "is-invalid" : ""; ?>" id="category_id">
                        <option value="">Select a Category</option>
                        <?php if (!empty($categories)) {
                            foreach ($categories as $category) { ?>
                                    <option <?php echo set_select('category_id',$category['id'],false); ?> value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                            <?php
                            }
                        } ?>
                    </select>
                    <?php echo form_error('category_id'); ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" name="title" value="<?php echo set_value('title'); ?>" class="form-control <?php echo (form_error('title') != "" ) ? "is-invalid" : ""; ?>" id="title" placeholder="Enter Article title">
                    <?php echo form_error('title'); ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Description</label>
                    <textarea class="textarea" name="description" id="description" placeholder="Place some text here"
                 style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Author</label>
                    <input type="text" name="author" value="<?php echo set_value('author'); ?>" class="form-control <?php echo (form_error('author') != "" ) ? "is-invalid" : ""; ?>" id="author" placeholder="Enter Author Name">
                    <?php echo form_error('author'); ?>
                  </div>

                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control <?php echo (!empty($imageError)) ? "is-invalid" : ""; ?>" id="image">
                    <?php if(!empty($imageError)) echo $imageError ?>
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
                  <a href="<?php echo base_url('admin/Articles/index') ?>" class="btn btn-success">Back</a>
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