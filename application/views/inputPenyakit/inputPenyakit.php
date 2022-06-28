
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>penyakit</title>

   <?php $this->load->view("tambahan/header/index.php") ?>

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">
            <?php $this->load->view("tambahan/sidebar.php") ?>;
    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view("tambahan/navbar.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Penyakit dan Hama</h1>
                    <div class="content mt-3">
                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom: 10px;">
                            <button href="dashboard.php?p=input_user" class="btn btn-success" onclick="tambah()"><i class="fa fa-plus"></i> Tambah Penyakit</button>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Penyakit</h6>
                        </div>
                        <div class="card-body">
                                <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <!-- <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info"> -->
                                    <table class="table table-bordered dataTable" id="bootstrap-data-table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Penyakit</th>
                                            <th>Detail Penyakit</th>
                                            <th>Saran Penyakit</th>
                                            <th>Jenis</status>
                                            <th> Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Detail</th>
                                            <th>Saran</th>
                                            <th>Jenis</th>
                                            <th> Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                            foreach ($data as $no => $v) {
                                                echo "
                                                    <tr>
                                                        <td>".($no+1)."</td>
                                                        <td>".$v['nmPenyakit']."</td>
                                                        <td>".$v['detailPenyakit']."</td>
                                                        <td>".$v['saran']."</td>
                                                        <td>".$v['status']."</td>
                                                        <td>
                                                            <div class='btn-group'>
                                                                <button class='btn btn-outline-primary btn-circle' onclick='_viewImage(".'"'.$v['img'].'"'.")' title='lihat gambar'>
                                                                    <i class='fa fa-eye'></i>
                                                                </button>
                                                                <button type='button' class='btn btn-outline-warning btn-circle ' onclick='update(".$no.")'><i class='fa fa-edit'></i></button>
                                                            
                                                                <button type='button' class='btn btn-outline-danger btn-circle' onclick='_delete(".$no.")'><i class='fa fa-trash'></i></button>
                                                            </div>
                                                           
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
        $dt['id']="tambah";
        $dt['judul']="Tambah Penyakit";
        $dt['form']='
            <div class="form-group mb-3">
                <label class="label" for="name">Nama Penyakit</label>
                <input type="text" id="nama" class="form-control" placeholder="nama penyakit" required>
            </div>
            <div class="form-group mb-3">
                <select id="status"  class="form-control">
                    <option value="--Pilih Status--">--pilih jenis--</option>
                    <option value="Hama">Hama</option>
                    <option value="Penyakit">Penyakit</option>
                </select>
            </div>
            <label class="label" for="name">Detail penyakit</label>
            <textarea rows="4" cols="50" type="text" id="detail" class="form-control" placeholder="">
                </textarea>
            <label class="label" for="name">Saran Penyakit</label>
                <textarea rows="4" cols="50" type="text" id="saran" class="form-control" placeholder="">
                </textarea>
            <div class="form-group mb-3">
                <label class="label" for="name">Gambar</label>
                <input type="file" id="img" onchange="readURL(this)" class="form-control" placeholder="" required>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="name"></label>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary"  onclick="saved()">simpan</button> 
            </div>
        '; 
        
        $this->load->view("tambahan/modal.php",$dt);
        
        $dt=array();
        $dt['id']="update";
        $dt['judul']="Update penyakit";
        $dt['form']='
            <div class="form-group mb-3">
                <label class="label" for="name">Nama Penyakit</label>
                <input type="text" id="namma" class="form-control" placeholder="nama penyakit" required>
            </div>
            <div class="form-group mb-3">
                <select id="status2"  class="form-control">
               
                <option value="Hama">Hama</option>
                <option value="Penyakit">Penyakit</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label class="label" >Detail penyakit</label>
                <textarea   id="detaill" class="form-control" placeholder="">
                </textarea>
            </div>
            <div class="form-group mb-3">
                <label class="label" >Saran Penyakit</label>
                <textarea  id="sarann" class="form-control" placeholder="">
                </textarea>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="name">Gambar</label>
                <input type="file" id="imgg" class="form-control" placeholder="" required>
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
        $dt['judul']="Delete penyakit";
        $dt['form']='
                <label class="label" for="name">ingin menghapus data penyakit ini ??</label>
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
        // console.log(data);
        var index = 0;
        // $('#delete').modal('show');
        var srcImage=[];
        function tambah(){
            $('#tambah').modal('show');
        }
        function update(ind){
        
            $('#update').modal('show');
            $('#namma').val(data[ind].nmPenyakit);
            $('#detaill').val(data[ind].detailPenyakit);
            if(data[ind].status=="Penyakit"){
                $('#status2').html(`
                    <option value="Hama">Hama</option>
                    <option value="Penyakit" selected>Penyakit</option>
                `);
            }else{
                $('#status2').html(`
                    <option value="Hama" selected>Hama</option>
                    <option value="Penyakit" >Penyakit</option>
                `);
            }
            $('#sarann').val(data[ind].saran);
            // document.getelementById('sarann').value="sasasa";
            index = ind;
        }
        function _delete(ind){
            $('#delete').modal('show');
            index=ind;
        }
        function saved(){
           var params={
                nama:$('#nama').val(),
                status:$('#status').val(),
                detail:$('#detail').val(),
                img:srcImage,
                srn:$('#saran').val()
           }
        //    return console.log(params);
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
                   status:$('#statuss').val(),
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
       
        // $(document).ready(function() {
        //   $('#bootstrap-data-table-export').DataTable();
        // } );
        
        function _viewImage(namaFile){
            window.open(url+"assets/upload/"+namaFile, '_blank');
        }
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            new Promise(function(res){
                var img = new Image;
                reader.readAsDataURL(input.files[0]);
                reader.onload = function (e) {
                    img.src = reader.result;
                    res({
                        src :img.src,
                        nama:input.files.item(0).name,
                        size:input.files.item(0).size,
                        type:input.files.item(0).type
                    });
                }
            }).then(resp=>{
                srcImage.push(resp);
                // console.log(srcImage);
                // console.log();
                // if(resp.size<=img.size){
                //     nama=resp.nama.split(".");
                //     var checked=false;
                //     img.fileName.forEach(v => {
                //         if(nama[1]==v){
                //             checked=true;
                //         }
                //     });
                //     if(checked){
                //         if(img.data.length<=img.maxUpload){
                //             img.data.push(resp);
                //             // console.log(_getImage());
                //             $('#'+img.idView).html(_getImage());
                //         }else{
                //             _toast({isi:"cukup "+img.maxUpload+" file photo saja !!!"});
                //         }
                //     }else{
                //         var ket="";
                //         img.fileName.forEach(v => {
                //             ket+=v+" ";
                //         });
                //         _toast({isi:"Format File Harus "+ket+" !!!"});
                //     }
                // }else{
                //     _toast({isi:"Ukuran File Maksimal "+(img.size/1000000)+" MB !!!"});
                // }
            })
        }
    }
    </script>

<?php $this->load->view("tambahan/logout modal2.php") ?>
</body>

</html>