
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>keterangan</title>

   <?php $this->load->view("tambahan/header/index.php") ?>

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">
            <?php $this->load->view("tambahan/sidebar.php") ?>
    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view("tambahan/navbar copy.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Keterangan</h1>
                    </div>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Keterangan</h6>
                        </div>
                        <div class="card-body">
                                <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <!-- <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info"> -->
                                    <table class="table table-bordered dataTable" id="bootstrap-data-table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Penyakit</th>
                                            <th>img</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>img</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        // print_r($data);
                                            foreach ($data as $no => $v) {
                                                echo "
                                                    <tr>
                                                        <td>".($no+1)."</td>
                                                        <td>".$v['nmPenyakit']."</td>
                                                        <td>
                                                            <button class='btn btn-outline-primary btn-circle' onclick='_viewImage(".'"'.$v['img'].'"'.")' title='lihat gambar'>
                                                                <i class='fa fa-eye'></i>
                                                            </button>
                                                        </td>
                                                        <td> 
                                                            <a class='btn bg-info btn-flat margin text-white' onclick='detail(".$no.")'><i class='fa fa-puzzle-piece' aria-hidden='true'></i> Detail</a>
                                                            <a class='btn bg-success btn-flat margin text-white' onclick='saran(".$no.")'><i class='fa fa-quote-right' aria-hidden='true'></i> Saran</a>
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
        $dt=array();
        $dt['id']="detail";
        $dt['judul']="Detail";
        $dt['form']='
        <div class="form-group mb-3">
            <label class="label" for="name"></label>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        '; 
        
        $this->load->view("tambahan/modal.php",$dt);

        $dt=array();
        $dt['id']="saran";
        $dt['judul']="Saran";
        $dt['form']='
        <div class="form-group mb-3">
            <label class="label" for="name"></label>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        '; 
        $this->load->view("tambahan/modal.php",$dt);
    ?>

    <?php $this->load->view("tambahan/js/index.php") ?>
    <script>
        var url='<?php echo base_url(); ?>'; 
        var data=JSON.parse('<?php echo json_encode($data) ?>');
        // console.log(data);
        var index = 0;
        // $('#delete').modal('show');
        function detail(ind){
            $('#detail').modal('show');
            $('.modal-body').html(data[ind].detailPenyakit);
        }
        function saran(ind){
            $('#saran').modal('show');
            $('.modal-body').html(data[ind].saran);
            index = ind;
        }
        function _delete(ind){
            $('#delete').modal('show');
            index=ind;
        }
        function saved(){
           var params={
                nama:$('#nama').val(),
                detail:$('#detail').val(),
                img:$('#img').val(),
                srn:$('#saran').val()
           }
           $.ajax({
               url:url+"index.php/aksi/inputPenyakit",
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
                   kode : data[index].kdPenyakit,
                   nama:$('#namma').val(),
                   detail:$('#detaill').val(),
                   saran:$('#sarann').val(),
                   img:$('#imgg').val()
               }
               $.ajax({
               url:url+"index.php/aksi/updatePenyakit",
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
                   kode : data[index].kdPenyakit,
               }
               $.ajax({
               url:url+"index.php/aksi/deletePenyakit",
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
        
        function _viewImage(namaFile){
            window.open(url+"assets/upload/"+namaFile, '_blank');
        }
    </script>

<?php $this->load->view("tambahan/logout modal2.php") ?>
</body>

</html>