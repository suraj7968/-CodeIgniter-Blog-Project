<?php $this->load->view('users/header.php'); ?>
<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
   <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">Add</span> Article
   </h4>
   <div class="row">
      <!-- FormValidation -->
      <div class="col-12">
         <div class="card">
            <h5 class="card-header">Article</h5>
            <div class="card-body">
               <form action="<?php echo base_url('users/Articles/create') ?>" method="post" enctype="multipart/form-data" class="row g-3">
                  <div class="col-md-12">
                     <label class="form-label" for="formValidationName">Categories</label>
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
                  <div class="col-md-12">
                     <label class="form-label" for="title">Title</label>
                     <input type="text" id="title" class="form-control <?php echo (form_error('title') != "" ) ? "is-invalid" : ""; ?>" placeholder="Enter Article Title" name="title" />
                     <?php echo form_error('title'); ?>
                  </div>
                  <div class="col-md-12">
                     <label class="form-label" for="description">Description</label>
                     <textarea class="form-control <?php echo (form_error('description') != "" ) ? "is-invalid" : ""; ?>" name="description" id="description"></textarea>
                     <?php echo form_error('description'); ?>
                  </div>
                  <div class="col-md-12">
                     <label class="form-label" for="author">Author</label>
                     <input type="text" id="author" class="form-control <?php echo (form_error('author') != "" ) ? "is-invalid" : ""; ?>" placeholder="Enter Author Name" name="author" />
                     <?php echo form_error('author'); ?>
                  </div>
                  <!-- Personal Info -->
                  <div class="col-md-12">
                     <label for="image" class="form-label">Article Image</label>
                     <input class="form-control <?php echo (!empty($imageError)) ? "is-invalid" : ""; ?>" type="file" id="image" name="image">
                     <?php if(!empty($imageError)) echo $imageError ?>
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
                     <a href="<?php echo base_url('users/Articles/list') ?>" class="btn btn-success">Back</a>
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