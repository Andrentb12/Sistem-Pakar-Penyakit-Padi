<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ubah password</title>

  <?php $this->load->view("tambahan/header/index.php") ?> 
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    
    <?php $this->load->view("tambahan/sidebar.php") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <?php $this->load->view("tambahan/navbar.php") ?>
		<!-- Main content -->
		<section class="content">
				<div class="card shadow mb-4">
					<div class="card-header py-2">
						<title>Ubah Password - Sistem Pakar Padi</title>

			        <form method='post' action='?module=password&act=updatepassword'>
				        <table class='table table-bordered'>
				            <br>
                                <tr>
                            <td width=220>Masukkan password lama</td>
                                <td><input class='form-control' autocomplete='off' placeholder='Ketik password lama...' type='password' name='oldPass' /></td>
                                    </tr>
				                        <br>
                            <tr>
                            <td>Masukkan password baru</td>
                                <td>
                                    <input class='form-control' autocomplete='off' placeholder='Ketik password baru...' type='password' name='newPass1' /></td>
                                        </tr>
                                            <br>
                                                <tr>
                            <td>Masukkan kembali password baru</td>
                                <td>
                                    <input class='form-control' autocomplete='off' placeholder='Ulangi password baru...' type='password' name='newPass2' /></td>
                                        </tr>
                                            </table>
                            <td>
				            <input class='btn btn-success' type=submit name=submit title='Simpan' alt='Simpan' value='Simpan' />
				            <input type='hidden' name='pass' value='21232f297a57a5a743894a0e4a801fc3'>
				            <input type='hidden' name='nama' value='admin'></td>		
				        </form>		
					</div>
				</div>
				</section>
				<!-- /.content -->
				
                <?php $this->load->view("tambahan/footer/index.php") ?>

        </div>
        <!-- End of Content Wrapper -->

        <?php $this->load->view("tambahan/js/index.php") ?>

</body>

</html>
