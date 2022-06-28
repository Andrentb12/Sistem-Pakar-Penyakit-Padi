<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diagnosa</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Diagnosa Penyakit</h1>
                       
                    </div>
                </div>
            <!-- End of Main Content -->
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-exclamation-triangle"></i>Perhatian !</h4>
                        Silahkan memilih gejala sesuai dengan kondisi padi anda, anda dapat memilih kepastian kondisi padi dari pasti tidak, sampai pasti ya. jika sudah tekan tombol proses (<i class="fa fa-search-plus"></i>)  di bawah untuk melihat hasil.
              </div>
             <!-- DataTales Example -->
             <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col"> 
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel Diagnosa</h6>
                                </div>
                                <div class="col">
                                    <button onclick="diagnosa()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="float: right;"><i
                                    class="fa fa-search-plus fa-sm text-white-50"></i>Diagnosa</button>
                                    
                                </div>
                            </div>
                        
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gejala</th>
                                            <th>Pilih Kondisi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Gejala</th>
                                            <th>Pilih Kondisi</th>
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
                                                            <select class='btn btn-success' onchange='_selected(this,".$no.")'>
                                                                <option value=''> pilih jika sesuai </option>
                                                                <option value='-1'> pasti tidak </option>
                                                                <option value='-0.8'> hampir pasti tidak </option>
                                                                <option value='-0.6'> kemungkinan besar tidak </option>
                                                                <option value='-0.4'> mungkin tidak </option>
                                                                <option value='0.2'> tidak tahu </option>
                                                                <option value='0.4'> mungkin </option>
                                                                <option value='0.6'> kemungkinan besar </option>
                                                                <option value='0.8'> hampir pasti </option>
                                                                <option value='1.0'> pasti </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                ";
                                            }
                                        ?>    
                                        <!-- <input type = 'checkbox' onclick='_checked(this,".$no.")'> -->
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
    var data=JSON.parse('<?php echo json_encode($data) ?>');
    function _checked(v,ind){
        data[ind].cek=v.checked;
    }
    function _selected(v,ind){
        data[ind].mb1=v.value;
    }
    function diagnosa(){
        var send=[];
        for(let a=0;a<data.length;a++){
            if(data[a].mb1!=''){
                send.push(data[a]);
            }
        }
        if(send.length==0){
            return alert("silakan pilih gejala !!");
        }
        $.ajax({
               url:url+"index.php/aksi/diagnosa",
               type:"post",
               data:{data:JSON.stringify(send)},
               success:function(resp){
                    $('#informasi').modal('show');
                    $('.modal-body').html(resp);
                //    alert(resp);
                // console.log(resp);
                //    $('#update').modal('hide');
                //    location.reload();
               }
           })
    }
</script>
<?php $this->load->view("tambahan/logout modal2.php") ?>
</body>
                                    
</html>