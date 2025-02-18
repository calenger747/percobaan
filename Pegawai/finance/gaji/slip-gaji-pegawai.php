<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Kepegawaian - PT. Lumbung Riang Communication</title>
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/multicheck/multicheck.css">
    <link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="../../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="background-color: #323743; background: #eaeaea; margin: 20px;" onload="window.print();">
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="padding: 10px;">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
            <?php
                error_reporting(0);

                include "../../config_config_cs/fungsi_indo_tgl.php";
                include "../../config_config_cs/koneksi-data-peg-lr-com.php";

                $get_id        = isset($_GET['id']) ? $_GET['id'] : NULL;


                $data = mysqli_query($connect, "SELECT * FROM gaji JOIN tbl_pegawai ON tbl_pegawai.nik = gaji.nik JOIN tbl_data_email_pegawai ON tbl_data_email_pegawai.nip_pegawai = gaji.nik JOIN  tbl_jabatan ON tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan JOIN tbl_data_jabatan ON tbl_jabatan.jabatan = tbl_data_jabatan.kode_jabatan JOIN tbl_pinjaman_detail ON gaji.pinjaman = tbl_pinjaman_detail.id WHERE gaji.id = '$get_id'");

                if ($data) {
                    while($b = mysqli_fetch_array($data)) {
                        $rp = 'Rp. ';
                        $p_id = $b['id'];   
                        $nik = $b['nik'];
                        $nama = $b['nama'];
                        $email = $b['email_pegawai'].$b['domain'];
                        $periode = bln_indo($b['tgl']);
                        $create = tgl_indo($b['tgl']);
                        $jabatan = $b['nama_jabatan'];
                        $gaji = $b['gaji'];
                        $tunjangan = $b['tunjangan'];
                        $insentiv = $b['insentiv'];
                        $thr = $b['thr'];
                        $bpjskes = $b['plus_kes'];
                        $bpjstk = $b['plus_tenaga'];
                        $bruto = $b['gaji_bruto'];
                        $pph21 = $b['pajak'];
                        $pbpjskes = $b['min_kes'];
                        $pbpjstk = $b['min_tenaga'];
                        $pinjaman = $b['besaran'];
                        $bersih = $b['gaji_bersih'];
                        $note = $b['note'];
                    }
                } else {
                    echo mysqli_error($connect);
                }
                
            ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="clear-fix"></div>
                                <div class="row el-element-overlay">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <center>
                                                        <img src="../../assets/images/lr.png">
                                                    </center>
                                                </div>
                                            </div>
                                                <!-- /.col -->
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <center>
                                                        <h4 class="text-left"><b>PT. Lumbung Riang Communication</b></h4>
                                                        <address class="text-left">
                                                            Jl. Pisangan Lama 1 No. 20 <br>
                                                            Pisangan Timur, Jakarta Timur - 13230<br>
                                                            Telp   : (021) 489-4061<br>
                                                            Email  : hr@lrcom.co.id<br>
                                                            Website: https://www.lrcom.co.id<br/><br/>
                                                        </address>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-md-12">
                                        <h2>
                                            <center>Slip Gaji Elektronik</center>
                                        </h2><br/><br/>
                                    </div> 

                                    <div class="col-md-12">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <div class="col-md-12">
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>Periode</td>
                                                                <td><?= $periode; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>NOMOR INDUK PEGAWAI</td>
                                                                <td><?= $nik; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>NAMA PEGAWAI</td>
                                                                <td><?= $nama; ?></td>
                                                            </tr>    
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <div class="col-md-12">
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>Jabatan</td>
                                                                <td><?= $jabatan; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td><?= $email; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Date Create</td>
                                                                <td><?= $create; ?></td>
                                                            </tr>    
                                                        </table><br/><br/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <tr>
                                                            <th style="width:30%">Gaji Pokok</th>
                                                            <td><?php echo $rp.number_format($gaji, 0, ".", "."); ?></td><td></td>
                                                            <th style="width:30%">Tunjangan</th>
                                                            <td><?php echo $rp.number_format($tunjangan, 0, ".", ".");?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Insentiv</th>
                                                            <td><?php echo $rp.number_format($insentiv, 0, ".", ".");?></td><td></td>
                                                            <th style="width:30%">Tunjangan Hari Raya</th>
                                                            <td><?php echo $rp.number_format($thr, 0, ".", ".");?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>BPJS Kesehatan(4%)</th>
                                                            <td><?php echo $rp.number_format($bpjskes, 0, ".", ".");?></td><td></td>
                                                            <th style="width:30%">BPJS Tenaga Kerja(6.24%)</th>
                                                            <td><?php echo $rp.number_format($bpjstk, 0, ".", ".");?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total Pendapatan</th>
                                                            <td><?php echo $rp.number_format($bruto, 0, ".", ".");?></td><th></th>
                                                            <th></th><td></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="table-responsive">
                                                    <div class="col-md-12">
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>PPH 21</td>
                                                                <td><?= $rp.number_format($pph21, 0, ".", "."); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pajak BPJS Kesehatan(1%)</td>
                                                                <td><?= $rp.number_format($pbpjskes, 0, ".", "."); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pajak BPJS Ketenagakerjaan(3%)</td>
                                                                <td><?= $rp.number_format($pbpjstk, 0, ".", "."); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pinjaman Karyawan</td>
                                                                <td><?= $rp.number_format($pinjaman, 0, ".", "."); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gaji Bersih</td>
                                                                <td><?= $rp.number_format($bersih, 0, ".", "."); ?></td>
                                                            </tr>    
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5" style="background-color: #e3e3e8;">
                                                <br/><br/><br/>
                                                <h5 class="well well-sm no-shadow text-center" style="margin-top: 10px;">
                                                    Slip gaji ini dibuat secara otomatis menggunakan aplikasi
                                                        <center><br>
                                                            <img src="../../assets/images/aska-online.jpg">
                                                        </center><br>
                                                    sehingga tidak memerlukan tanda tangan
                                                </h5>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="col-md-12">
                                        <br/><br/>
                                        <?php if ($note == NULL): ?>

                                        <?php else: ?>
                                            <h4>
                                                <center>"<?= $note; ?>"</center>
                                            </h4>
                                        <?php endif ?> 
                                    </div> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../../assets/libs/magnific-popup/meg.init.js"></script>
</body>

</html>