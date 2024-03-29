<?php $this->load->view('users/header.php'); ?>
          <!-- Content wrapper -->
      <div class="content-wrapper">

<!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Add</span> Category
</h4>

<div class="row">
<!-- FormValidation -->
<div class="col-12">
<div class="card">
<h5 class="card-header">Category</h5>
<div class="card-body">

<form action="<?php echo base_url('users/Category/create') ?>" method="post" enctype="multipart/form-data" class="row">


  <div class="col-md-6">
    <label class="form-label" for="formValidationName">Category Name</label>
    <input type="text" id="formValidationName" value="<?php echo set_value('name'); ?>" class="form-control" placeholder="Enter Category Name" name="name" />
    <?php echo form_error('name'); ?>
  </div>


  <!-- Personal Info -->

  <div class="col-md-12">
    <label for="formValidationFile" class="form-label">Category Image</label>
    <input class="form-control" type="file" id="image" name="image">
    <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : ''; ?>
    
  </div>
  <div class="col-md-12">
    <label class="form-label">Status</label>
    <div class="form-check custom mb-2">
      <input type="radio" id="formValidationGender" name="status" value="1" class="form-check-input" checked />
      <label class="form-check-label" for="formValidationGender">Active</label>
    </div>

    <div class="form-check custom">
      <input type="radio" id="formValidationGender2" name="status" value="0" class="form-check-input" />
      <label class="form-check-label" for="formValidationGender2">Block</label>
    </div>
  </div>

  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>
<!-- /FormValidation -->
</div>

  </div>
  <!-- / Content -->

<?php $this->load->view('users/footer.php'); ?>