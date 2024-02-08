<?php $this->load->view('admin/header.php');
?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Articles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/Home/index') ?>">Home</a></li>
              <li class="breadcrumb-item active">Articles</li>
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
            <?php if($this->session->flashdata('error') != "" ){ ?>
            <div class="alert alert-danger"> <?php echo $this->session->flashdata('error'); ?></div>
            <?php } ?>
            <div class="card">
            <div class="card-header">
                <div class="card-tools float-left" style="margin-top: 10px;">
                <form action="" method="get">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" value="" name="q" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
                </div>
                <div class="card-tools">
                <a href="<?php echo base_url('admin/Articles/create') ?>" class="btn btn-block btn-primary btn-md"><i class="fa-solid fa-plus"></i> Create</a>
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
                    <?php if(!empty($articles)){ ?>
                      <?php foreach ($articles as $article_Row) { ?>
                     <tr>
                      <td><?php echo $article_Row['id'] ?></td>
                      <td><?php echo $article_Row['title'] ?></td>
                      <td> <span class="badge badge-<?php if($article_Row['status'] == 1 ) { echo 'success'; } else { echo 'danger'; } ?>"><?php if ($article_Row['status'] == 1) {
                        echo 'Active';
                      } else { echo 'Block'; } ?></span> </td>
                      <td>
                            <a href="<?php echo base_url('admin/Articles/edit/').$article_Row['id'] ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square fa-sm"></i> Edit</a>

                            <a href="javascript:void(0)" onclick="deleteCategory(<?php echo $article_Row['id']; ?>)" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash fa-sm"></i> Delete</a>
                      </td>
                     </tr>
                     <?php } ?>
                     <?php }  else {?>  
                      <tr>
                        <td colspan="4">Records Not Found</td>
                      </tr>
                     <?php } ?>
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
  <script>
    function deleteCategory(id) {
      if (confirm("Are You Sure You Want To Delete This user")) {
        window.location.href="<?php echo base_url('admin/Category/delete/')?>"+id;
      }
    }
  </script>