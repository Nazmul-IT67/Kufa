<?php
  session_start();
  include'include/header.php';
  require_once'../db.php';  
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $title  =$_POST['title'];
    $description=$_POST['description'];
    $icon   =$_POST['icon'];
    if ($title && $description && $icon) {
        $insert="INSERT INTO services(title, description, icon) VALUES ('$title', '$description', '$icon')";
        mysqli_query($db, $insert);
        $_SESSION['message']='Services Add Successfull';
    }
      else{
      $_SESSION['message']='Services Add Error';
    }
  }   
?>
<div class="br-mainpanel">
  <div class="pd-30">
    <h6 class="tx-gray-800 mg-b-5">
      <a class="tx-white" href="dashboard.php">Dashboard /</a>
      <a class="tx-white" href="service.php">Services</a>
    </h6>
  </div>
  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-12 m-auto">
      <div class="card mt-sm-3">     
        <div class="br-section-wrapper">
          <h6 class="text-center tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add New Services</h6>
          <?php
            if (isset($_SESSION['message'])) {
              ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['message'] ?>!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['message']);
            }
          ?>           
          <div class="form-layout form-layout-1">
            <form action="add-service.php" method="POST">
              <div class="row mg-b-20">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Titlt: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title" value="" placeholder="Service Title" required>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="description" value="" placeholder="Service Description" required>
                  </div>
                </div>               
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select class="form-control" name="icon" value="">
                    <option value="fa fa-headphones">WordPress</option>
                    <option value="fa fa-suitcase">Web Development</option>
                    <option value="fa fa-truck">Digital Marketing</option>
                    <option value="fa fa-rocket">Theme Customize</option>
                    <option value="fa fa-suitcase">SEO Optimization</option>
                    <option value="fa fa-rocket">24/7 Support</option>                    
                  </select>
                </div>
                </div>
                <div class="form-layout-footer">
                  <button class="btn btn-info">Submit Form</button>
              </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="br-footer">
  <div class="footer-left">
    <div class="tx-white" class="mg-b-2">Copyright &copy; 2017. All Rights Reserved By Nazmul Islam.</div>
  </div>
</footer>
</div>
<?php include'include/footer.php';?>
