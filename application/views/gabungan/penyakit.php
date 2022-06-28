
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gejala</title>

   <?php $this->load->view("tambahan/header/index.php") ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
            <?php $this->load->view("tambahan/sidebar.php") ?>;
    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <?php $this->load->view("tambahan/navbar.php") ?>

            <!-- Main Content -->
            <div id="content">
                
				
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Gejala</h1>
                    <div class="content mt-3">
                        <!-- <div class="row">
                            <div class="col-sm-12" style="margin-bottom: 10px;">
                                <button href="dashboard.php?p=input_user" class="btn btn-success" onclick= "tambah()"><i class="fa fa-plus"></i> Tambah Gabungan</button>
                            </div>
                        </div> -->

                    <!-- End of Main Content -->
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Gejala Penyakit</h6>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <!-- <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info"> -->
                                        <table class="table table-bordered dataTable" id="bootstrap-data-table" width="100%" cellspacing="20">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Gejala</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Gejala</th>
                                            <th>action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                            foreach ($data as $no => $v) {
                                              echo "
                                                   <tr>
                                                        <td>".($no+1)."</td>
                                                        <td>".$v['nmGejala']."</td>
                                                        <td>
                                                            <button type='button' class='btn btn-outline-warning btn-circle' onclick='update(".$no.")'><i class='fa fa-edit'></i></button>
                                                            <button type='button' class='btn btn-outline-danger btn-circle' onclick='_delete(".$no.")'><i class='fa fa-trash'></i></button>
                                                        </td>                                       
                                                    </tr>
                                                ";
                                            }
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

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php
        // $dt=array();
        // $dt['id']="tambah";
        // $dt['judul']="Tambah Gejala";
        // $dt['form']='
        // <div class="form-group mb-3">
        //     <label class="label" for="password">Nama Gejala</label>
        //     <input type="text" id="nama" class="form-control" placeholder="Nama penyakit" required>
        // </div>
        // <div class="form-group mb-3">
        //     <label class="label" for="name">mb</label>
        //     <input type="number" id="mb" class="form-control" placeholder="" required>
		// </div>
        // <div class="form-group mb-3">
        //     <label class="label" for="name">md</label>
        //     <input type="number" id="md" class="form-control" placeholder="" required>
		// </div>
        // <div class="form-group mb-3">
        //     <label class="label" for="name"></label>
        //     <div class="modal-footer">
        //     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        //     <button class="btn btn-primary"  onclick="saved()">simpan</button> 
		// </div>
        // '; 
        // $this->load->view("tambahan/modal.php",$dt);

        $dt=array();
        $dt['id']="update";
        $dt['judul']="update gejala";
        $dt['form']='
            <div class="form-group mb-3">
                <label class="label" for="password">Nama Gejala</label>
                <input type="text" id="namaaa" class="form-control" placeholder="Nama penyakit" required>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="name">mb</label>
                <input type="number" id="mbb" class="form-control" placeholder="" required>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="name">md</label>
                <input type="number" id="mdd" class="form-control" placeholder="" required>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="name"></label>
                <div class="modal-footer">
                <button class="btn btn-primary"  onclick="ubah()">Update</button> 
            </div>
        '; 
        $this->load->view("tambahan/modal.php",$dt);

        $dt=array();
        $dt['id']="delete";
        $dt['judul']="delete gejala";
        $dt['form']='
                <label class="label" for="name">ingin menghapus data gejala ini ??</label>
            <div class="form-group mb-3">
                <label class="label" for="name"></label>
                <div class="modal-footer">
                <button class="btn btn-danger"  onclick="hapus()">Delete</button> 
            </div>
            '; 
        $this->load->view("tambahan/modal.php",$dt);
    ?>
    <!-- <?php print_r($data); ?> -->
    <?php $this->load->view("tambahan/js/index.php") ?>
    <script>
        var url='<?php echo base_url(); ?>';
        var data= JSON.parse('<?php print_r(json_encode($data)); ?>');
        // return console.log(data);
        // console.log(data);
        var index = 0;
        // function tambah(){
        //     $('#tambah').modal('show');
        // }
        function update(ind){
            
            $('#update').modal('show');
            $('#namaaa').val(data[ind].nmGejala);
            $('#mbb').val(data[ind].mb);
            $('#mdd').val(data[ind].md);
           
            index = ind;
            
        }
        function _delete(ind){
            $('#delete').modal('show');
            index = ind;
        }
    //    function saved(){
    //        var params={
    //             kdPenyakit:$('#penyakit').val(),
    //             nama:$('#nama').val(),
    //             mb:$('#mb').val(),
    //             md:$('#md').val()
    //        }
    //        $.ajax({
    //            url:url+"index.php/aksi/gejala",
    //            type:"post",
    //            data:params,
    //            success:function(resp){
    //                alert(resp);
    //                $('#tambah').modal('hide');
    //                location.reload();
    //            }
    //        })
    //        console.log(params);
    //    }
       function ubah(){
        // return console.log(params);
           var params={
               kode : data[index].kdGejala,
               key  : data[index].nmGejala,
               nama:$('#namaaa').val(),
               mb:$('#mbb').val(),
               md:$('#mdd').val(),
           }
           
           $.ajax({
               url:url+"index.php/aksi/updategejala1",
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
        function hapus(){
            var params={
               kode : data[index].kdGejala,
               key  : data[index].nmGejala
           }
           $.ajax({
               url:url+"index.php/aksi/deletegejala1",
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

