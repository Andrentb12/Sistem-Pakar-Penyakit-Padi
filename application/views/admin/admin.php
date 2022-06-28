
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

   <?php $this->load->view("tambahan/header/index.php") ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
            <?php $this->load->view("tambahan/sidebar.php",$user) ?>;
    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view("tambahan/navbar.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data User</h1>
                    <div class="content mt-3">
                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom: 10px;">
                                <button id="tetser" class="btn btn-success" onclick="tambah()"><i class="fa fa-plus"></i> Tambah User</button>
                            </div>
                        </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data User</h6>
                        </div>
                        <div class="card-body">

                            <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap5 no-footer">
                                <!-- <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info"> -->
                                <table class="table table-bordered dataTable" id="bootstrap-data-table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>nama</th>
                                            <th> Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                             foreach ($data as $no => $v) {
                                                 echo "
                                                     <tr>
                                                         <td>".($no+1)."</td>
                                                         <td>".$v['username']."</td>
                                                         <td>".$v['password']."</td>
                                                         <td>".$v['nama']."</td>
                                                         <td>
                                                            <button type='button' class='btn btn-outline-warning btn-circle' onclick='update(".$no.")'><i class='fa fa-edit'></i></button>
                                                            <button type='button' class='btn btn-outline-danger btn-circle' onclick='_delete(".$no.")'><i class='fa fa-trash'></i></button>
                                                         </td>
                                                     </tr>
                                                 ";
                                             }
                                            // }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        <?php $this->load->view("tambahan/footer/index.php") ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
    <?php
        $dt=array();
        $dt['id']="tambah";
        $dt['judul']="Tambah User";
        $dt['form']= '
        <div class="form-group mb-3">
            <label class="label" for="name">Username</label>
            <input type="text" id="user" class="form-control" placeholder=" Ketik Username.." required>
		</div>
        <div class="form-group mb-3">
            <label class="label" for="password">Password</label>
            <input type="password" id="password" class="form-control" placeholder=" Ketik Password.." required>
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password">Nama</label>
            <input type="text" id="nama" class="form-control" placeholder="Ketik Nama.." required>
        </div>
        <div class="form-group mb-3">
            <label class="label" for="name"></label>
            <div class="modal-footer">
            <button class="btn btn-primary" onclick="saved()">Simpan</button>
		</div>
        '; 
        $this->load->view("tambahan/modal.php",$dt); 


        $dt=array();
        $dt['id']="update";
        $dt['judul']="Update user";
        $dt['form']= '
        <div class="form-group mb-3">
            <label class="label" for="name">Username</label>
            <input type="text" id="uuser" class="form-control" placeholder=" Ketik Username.." required>
		</div>
        <div class="form-group mb-3">
            <label class="label" for="password">Password</label>
            <input type="password" id="ppassword" class="form-control" placeholder=" Ketik Password.." required>
        </div>
        <div class="form-group mb-3">
            <label class="label" for="password">Nama</label>
            <input type="text" id="namaa" class="form-control" placeholder="Ketik Nama.." required>
        </div>
        <div class="form-group mb-3">
            <label class="label" for="name"></label>
            <div class="modal-footer">
            <button class="btn btn-primary" onclick="ubah()">Update</button>
		</div>
        '; 
        $this->load->view("tambahan/modal.php",$dt);
        
        $dt=array();
        $dt['id']="delete";
        $dt['judul']="Delete User";
        $dt['form']='
                <label class="label" for="name">ingin menghapus data ini ??</label>
            <div class="form-group mb-3">
                <label class="label" for="name"></label>
                <div class="modal-footer">
                <button class="btn btn-danger"  onclick="hapusData()">Delete</button> 
            </div>
            '; 
            $this->load->view("tambahan/modal.php",$dt);
    ?>


    <?php $this->load->view("tambahan/js/index.php") ?>
    <script>
        var url='<?php echo base_url(); ?>'; 
        var data=JSON.parse('<?php echo json_encode($data); ?>');
        // console.log(data); 
        var index = 0;

        // $('#tambah').modal('show');
        function tambah(){
            $('#tambah').modal('show');
        }
        function update(ind){
            $('#update').modal('show');
            $('#uuser').val(data[ind].username);
            $('#ppassword').val(data[ind].password);
            $('#namaa').val(data[ind].nama);
            index = ind;
        }
        function _delete(ind){
            $('#delete').modal('show');
            index = ind; 
        }
        function saved(){
           var params={
                username:$('#user').val(),
                password:$('#password').val(),
                nama:$('#nama').val(),
           }
           $.ajax({
               url:url+"index.php/aksi/inputAdmin",
               type:"post",
               data:params,
               success:function(resp){
                   alert(resp);
                   $('#tambah').modal('hide');
                   location.reload();
               }
           })
           console.log(params);
        }
        function ubah(){
               var params={
                   kode : data[index].id,
                   username:$('#uuser').val(),
                   password:$('#ppassword').val(),
                   nama:$('#namaa').val(),
               }
               $.ajax({
               url:url+"index.php/aksi/updateAdmin",
               type:"post",
               data:params,
               success:function(resp){
                   alert(resp);
                   $('#update').modal('hide');
                   location.reload();
               }
           })
           console.log(params);
        }
        function hapusData(){
            var params={
                   kode : data[index].id,
               }
               $.ajax({
               url:url+"index.php/aksi/deleteAdmin",
               type:"post",
               data:params,
               success:function(resp){
                   alert(resp);
                   $('#delete').modal('hide');
                   location.reload();
                }
            })
        }
        
        $(document).ready(function() {
          $('#ootstrap-data-table-export').DataTable();
        } );
    
    </script>
<?php $this->load->view("tambahan/logout modal2.php") ?>
</body>

</html>
