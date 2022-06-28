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
                    <header class="mb4">
		
                       <tr> <h1 class="f3 lh-title mv2 text-dark">Sistem Pakar Diagnosa Penyakit Dan Hama Padi</h1></tr>
                        <p class="text-center">Mendiagnosa penyakit pada padi berdasarkan pengetahuan yang diberikan langsung dari pakar/ahlinya
                            dan melalui studi  literatur. Penelitian ini menggunakan metode perhitungan Certainty Factor (CF)
                            dalam menghitung tingkat kepakaran. Data penelitian ini terdiri dari data gejala dan data penyakit
                            padi, serta data aturan. Sistem pakar pada organisasi ditujukan  untuk penambahan  value, 
                            peningkatan produktivitas serta area manajerial yang dapat mengambil kesimpulan dengan cepat.
                        </p>
	 
	                     <br>

                    <!-- Content Row -->
                    
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda gila!!</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">anda yakin mau keluar ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url()."index.php/ctrl/login"?>">Ya</a>
                </div>
            </div>
        </div>
    </div>

 <?php $this->load->view("tambahan/js/index.php") ?>
</body>

</html>