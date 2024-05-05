  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="<?= base_url('public/dist/img/slack.png');?>" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Pro Hires</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= base_url('public/dist/img/user.png');?>" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">4683Alex@gmail.com</a>
              </div>
          </div>


          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="<?= base_url('/dashboard');?>" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Postings
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?= base_url('/reqcompose');?>" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Post requirement</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= base_url('/hotcompose');?>" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Post hotlist</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?= base_url('/status');?>" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Status</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon far fa-envelope"></i>
                          <p>
                              Mailing List
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Contacts
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="<?= base_url('/upload-contact');?>" class="nav-link">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Add Contacts to List</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="<?= base_url('/find-contact');?>" class="nav-link">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Search and Edit Contacts</p>
                                      </a>
                                  </li>

                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      List
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                      <a href="<?= base_url('/list');?>" class="nav-link">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Create a List</p>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="<?= base_url('/list/find');?>" class="nav-link">
                                          <i class="far fa-dot-circle nav-icon"></i>
                                          <p>Search and Edit List</p>
                                      </a>
                                  </li>

                              </ul>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="<?= base_url('/account');?>" class="nav-link ">
                          <i class="nav-icon fas fa-key"></i>
                          <p>Account
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('/usage_policy');?>" class="nav-link ">
                          <i class="nav-icon fas fa-file-alt"></i>
                          <p>
                          Usage policy
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('/refund_policy');?>" class="nav-link ">
                          <i class="nav-icon fas fa-file-alt"></i>
                          <p>
                          Refund policy
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('/privacy_policy');?>" class="nav-link ">
                          <i class="nav-icon fas fa-file-alt"></i>
                          <p>
                          Privacy policy
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= base_url('/contactus');?>" class="nav-link ">
                          <i class="nav-icon fas fa-headset"></i>
                          <p>
                              Contact Us
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="<?= base_url('/logout');?>" class="nav-link ">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              Logout
                          </p>
                      </a>
                  </li>

                 

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>