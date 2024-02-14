<?php $this->load->view('users/header.php'); 

?>
 <!-- Content wrapper -->
 <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Categories</span> List</h4>
              <div id="successAlert" class="alert alert-primary alert-dismissible" role="alert">
                  <?php echo $this->session->flashdata('success'); ?>
                  <button id="closeAlert" type="button" class="btn-close" aria-label="Close"></button>
              </div>
              <script>
                  document.getElementById('closeAlert').addEventListener('click', function() {
                      document.getElementById('successAlert').style.display = 'none'; // Hide the alert
                  });
              </script>

              <!-- Contextual Classes -->

              <div class="card">
                <h5 class="card-header">Categories</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php if(!empty($categories)){ ?>
                      <?php foreach ($categories as $categoryRow ) {?>
                      <tr class="table-default">
                        <td>
                          <span class="fw-medium"><?php echo $categoryRow['id'] ?></span>
                        </td>
                        <td><?php echo $categoryRow['name'] ?></td>
                        <td><span class="badge bg-label-primary me-1"><?php if ($categoryRow['status'] == 1) {
                              echo "Active";
                            } else
                            {
                              echo "Block";
                            } ?></span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
                    <?php } else { ?>
                      <tr>
                        <td colspan="4">Records Not Found</td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Contextual Classes -->

              <hr class="my-5" />
            </div>
            <!-- / Content -->
<?php $this->load->view('users/footer.php'); ?>