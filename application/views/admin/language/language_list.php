<!-- datatable -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css">   

<div class="content-wrapper">
 <section class="content">
  <div class="card">
    <div class="card-header">
      <div class="d-inline-block">
        <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Languages List</h3>
      </div>
      <div class="d-inline-block float-right">
        <?php if($this->rbac->check_operation_permission('state_add')): ?>
        <a href="<?= base_url('admin/languages/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Language</a>
        <?php endif; ?>
      </div>
    </div>
    <div class="card-body table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Name</th>
          <th>Short Name</th>
          <th>Status</th>
          <th style="width: 150px;" class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
          <?php 
            $count=0; foreach($all_languages as $row):
            $status = ($row['status'] == 0)? 'Inactive': 'Active'.'<span>';
          ?>
          <tr>
            <td><?= $row['name']; ?></td>
            <td><?= $row['short_name']; ?></td>
            <td><span class="btn btn-xs btn-success" title="status"><?= $status ?><span></td>
            <td>
              <a title="Edit" class="update btn btn-sm btn-warning" href="<?= base_url('admin/languages/edit/'.$row['id'])?>"> <i class="fa fa-pencil-square-o"></i></a>
              <a title="Delete" class="delete btn btn-sm btn-danger" href="<?= base_url('admin/languages/del/'.$row['id']); ?>" > <i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>  
</div>


  <!-- Scripts for this page -->
  <!-- Scripts for this page -->
  <script type="text/javascript">
     $(document).ready(function(){
      $(".btn-delete").click(function(){
        if (!confirm("Do you want to delete")){
          return false;
        }
      });
    });
  </script>
 <!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
    });
  </script>

  <script>
    $("#language").addClass('active');
  </script>

