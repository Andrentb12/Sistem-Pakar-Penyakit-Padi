<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Riwayat</title>

  <?php $this->load->view("tambahan/header/index.php") ?> 
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    
    <?php $this->load->view("tambahan/sidebar.php") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <?php $this->load->view("tambahan/navbar.php") ?>
        
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">History Diagnosa</h1>
                    </div>
                    </div>
            <!-- End of Main Content -->
             <!-- DataTales Example -->
             <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel Riwayat</h6>
                                </div>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <!-- <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info"> -->
                                            <table class="table table-bordered dataTable" id="bootstrap-data-table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Penyakit</th>
                                            <th>Persentase</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Penyakit</th>
                                            <th>Persentase</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                            foreach ($data as $no => $v) {
                                                echo "
                                                    <tr>
                                                        <td>".($no+1)."</td>
                                                        <td>".$v['tanggal']."</td>
                                                        <td>".$v['nmPenyakit']."</td>
                                                        <td>".substr($v['persentase'],0,4)." %</td>
                                                        <td>
                                                            <button class='btn btn-outline-primary btn-circle' onclick='_check(".$v['id'].")'><i class = 'fa fa-eye'></i></button>
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

            

            <?php $this->load->view("tambahan/footer/index.php") ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    
    <?php

        $dt=array();
        $dt['id']="informasi";
        $dt['judul']="Hasil Diagnosa Penyakit";
        $dt['form']='
            
            '; 
        $this->load->view("tambahan/modal.php",$dt);

    ?>
 <?php $this->load->view("tambahan/js/index.php") ?>
<script>
    var url='<?php echo base_url(); ?>'; 
    var data=JSON.parse('<?php echo json_encode($data) ?>');
    function _checked(v,ind){
        data[ind].cek=v.checked;
    }
    function _check(id){
        $.ajax({
               url:url+"index.php/aksi/history/"+id,
               type:"post",
               data:{data:id},
               success:function(resp){
                    $('#informasi').modal('show');
                    $('.modal-body').html(resp);
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