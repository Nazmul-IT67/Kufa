<?php
  session_start();
  require_once'../db.php';
  $select="SELECT * FROM php";
  $users=mysqli_query($db, $select);
  $select2="SELECT COUNT(*) as total, name, email, phone FROM php";
  $users2=mysqli_query($db, $select2);
  $count=mysqli_fetch_assoc($users2);
  include'include/header.php';
?>
<div class="br-mainpanel">
  <div class="pd-30">
    <h6 class="tx-gray-800 mg-b-5">
      <a class="tx-white" href="dashboard.php">Dashboard /</a>
      <a class="tx-white" href="#">Users</a>
    </h6>
  </div>

  <div class="br-pagebody mg-t-5 pd-x-30">
    <div class="col-10 m-auto">
      <div class="card mt-sm-3">     
        <table class="table table-bordered mt-30 text-center">
          <div class="text-center bg-dark">
            <h2>All Users(<?php echo $count['total']?>)</h2>
          </div>
          <a class="text-right" href="../register.php"><i class="fa fa-plus"></i>Add</a>           
          <?php
            if (isset($_SESSION['changestatus'])) {
              ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['changestatus'] ?>!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php
              unset($_SESSION['changestatus']);
            }
          ?>
          <thead class="thead-light">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="tx-white">
            <?php
              foreach ($users as $key => $value) {
                ?>
              <tr>
                <td class="bg-dark"><?php echo ++$key?></td>
                <td class="bg-dark"><?php echo $value['name'];?></td>
                <td class="bg-dark"><?php echo $value['email'];?></td>
                <td class="bg-dark"><?php echo $value['phone'];?></td>
                <td class="bg-dark"><?php
                      if ($value['status']==1) {
                        ?>
                        <a href="status.php?status_id=<?php echo $value['id']?>" class="btn btn-secondary">Active</a>
                        <?php
                      }else{
                        ?>
                        <a href="status.php?status_id=<?php echo $value['id']?>" class="btn btn-danger">Deactive</a>
                        <?php
                      }
                    ?>  
                </td>
                <td class="bg-dark">
                  <?php 
                    if ($value['status']==1) {
                      ?>
                      <a href="../edit.php?edit_id=<?php echo $value['id']?>" class="btn btn-secondary">Edit</a>
                      <a href="../delete.php?delete_id=<?php echo $value['id']?>" class="btn btn-danger">Delete</a>
                      <?php
                    }else{
                      ?>
                        <a class="btn btn-success">Not Allow</a>
                      <?php
                    }
                  ?>
                </td>
              </tr>
              <?php
              }
            ?>          
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <footer class="br-footer">
  <div class="footer-left">
    <div class="tx-white" class="mg-b-2">Copyright &copy; 2017. All Rights Reserved By Nazmul Islam.</div>
  </div>
</footer>
</div>
<?php include'include/footer.php'?>