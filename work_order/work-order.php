<?php

  session_start();
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    require'config/koneksi.php';
    if (!$_SESSION['level'] == "Super Admin") {
        echo "<script>alert ('Anda harus login terlebih dahulu'); window.location.href = 'index.php'</script>";
    }
    
  $nav            ="";
  $ambil          ="home.php";
  $class          ="";
  $ambilcss1      ="";
  $ambilcss2      ="";
  $ambilcss3      ="";
  $ambilcss4      ="";
  $ambilcss5      ="";
  $ambilcss6      ="";
  $ambilcss7      ="";
  $ambilcss8      ="";
  $ambilcss9      ="";
  $ambilcss10     ="";

  $ambiljs0       ="";
  $ambiljs1       ="";
  $ambiljs2       ="";
  $ambiljs3       ="";
  $ambiljs4       ="";
  $ambiljs5       ="";
  $ambiljs6       ="";
  $ambiljs7       ="";
  $ambiljs8       ="";
  $ambiljs9       ="";
  $ambiljs10      ="";
  $ambiljs11      ="";
  $ambiljs12      ="";
  $ambilfungsi    ="";
  $ambilfungsi2   ="";

  $id         = isset($_GET['id']) ? $_GET['id'] : "";
  if ($id == "") {
    $nav         = "Dashboard";
    $ambil       = "home.php";
    $class       = "active";
    $ambilcss1   = "";
    $ambilcss2   = "";
    $ambiljs0    = "vendors/echarts/map/js/world.js";
    $ambiljs1    = "vendors/echarts/dist/echarts.min.js";
  } elseif ($id == "upd-project") {
    $nav         = "Update Project";
    $ambil       = "project/update-project.php";
    $class       = "active";
    $ambilcss1   = "vendors/normalize-css/normalize.css";
    $ambilcss2   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss3   = "project/css/style.css";
    $ambilcss4   = "vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css";
    $ambilcss5   = "vendors/bootstrap-daterangepicker/daterangepicker.css";
    $ambiljs0    = "https://code.jquery.com/jquery-3.2.1.min.js";
    $ambiljs1    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs2    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs3    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs4    = "project/teknisi/script/auto.js";
    $ambiljs5    = "project/script/date-picker.js";
    $ambiljs6    = "vendors/moment/min/moment.min.js";
    $ambiljs7    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "add-project") {
    $nav         = "Add Project";
    $ambil       = "project/add-project.php";
    $class       = "active";
    $ambilcss1   = "vendors/normalize-css/normalize.css";
    $ambilcss2   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss3   = "project/css/style.css";
    $ambilcss4   = "vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css";
    $ambilcss5   = "vendors/bootstrap-daterangepicker/daterangepicker.css";
    $ambiljs0    = "https://code.jquery.com/jquery-3.2.1.min.js";
    $ambiljs1    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs2    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs3    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs4    = "vendors/moment/min/moment.min.js";
    $ambiljs5    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
    $ambiljs6    = "project/script/wizard.js";
    $ambiljs7    = "project/script/date-picker.js";
  } elseif ($id == "project") {
    $nav         = "Project List";
    $ambil       = "project/project-data.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "view") {
    $nav         = "Detail Project";
    $ambil       = "project/view-detail.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "cash-receipt") {
    $nav         = "Cash Receipt";
    $ambil       = "finance/kasbon/kasbon.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "income") {
    $nav         = "Incoming Founds";
    $ambil       = "finance/income/income.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "ptjb") {
    $nav         = "Cash Receipt";
    $ambil       = "finance/ptjb/ptjb.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "kasbon") {
    $nav         = "Cash Receipt";
    $ambil       = "finance/kasbon/cash.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "add-income") {
    $nav         = "Add Income";
    $ambil       = "finance/income/add-income.php";
    $class       = "active";
    $ambilcss1   = "vendors/normalize-css/normalize.css";
    $ambilcss2   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss3   = "project/css/style.css";
    $ambilcss4   = "vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css";
    $ambilcss5   = "vendors/bootstrap-daterangepicker/daterangepicker.css";
    $ambiljs0    = "https://code.jquery.com/jquery-3.2.1.min.js";
    $ambiljs1    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs2    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs3    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs4    = "project/teknisi/script/auto.js";
    $ambiljs5    = "project/script/date-picker.js";
    $ambiljs6    = "vendors/moment/min/moment.min.js";
    $ambiljs7    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
    $ambiljs8    = "js/my.js";
  } elseif ($id == "upd-income") {
    $nav         = "Update Income";
    $ambil       = "finance/income/upd-income.php";
    $class       = "active";    
    $ambilcss1   = "vendors/normalize-css/normalize.css";
    $ambilcss2   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss3   = "project/css/style.css";
    $ambilcss4   = "vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css";
    $ambilcss5   = "vendors/bootstrap-daterangepicker/daterangepicker.css";
    $ambiljs0    = "https://code.jquery.com/jquery-3.2.1.min.js";
    $ambiljs1    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs2    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs3    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs4    = "vendors/moment/min/moment.min.js";
    $ambiljs5    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
    $ambiljs7    = "project/script/date-picker.js";
  } elseif ($id == "add-cash-receipt") {
    $nav         = "Add Cash Receipt";
    $ambil       = "finance/kasbon/add-kasbon.php";
    $class       = "active";
    $ambilcss1   = "vendors/normalize-css/normalize.css";
    $ambilcss2   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss3   = "project/css/style.css";
    $ambilcss4   = "vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css";
    $ambilcss5   = "vendors/bootstrap-daterangepicker/daterangepicker.css";
    $ambiljs0    = "https://code.jquery.com/jquery-3.2.1.min.js";
    $ambiljs1    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs2    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs3    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs4    = "project/teknisi/script/auto.js";
    $ambiljs5    = "project/script/date-picker.js";
    $ambiljs6    = "vendors/moment/min/moment.min.js";
    $ambiljs7    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "add-ptjb") {
    $nav         = "Add Cash Receipt";
    $ambil       = "finance/ptjb/add-ptjb.php";
    $class       = "active";
    $ambilcss1   = "vendors/normalize-css/normalize.css";
    $ambilcss2   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss3   = "project/css/style.css";
    $ambilcss4   = "vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css";
    $ambilcss5   = "vendors/bootstrap-daterangepicker/daterangepicker.css";
    $ambilcss6   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss7   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambiljs0    = "https://code.jquery.com/jquery-3.2.1.min.js";
    $ambiljs1    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs2    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs3    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs4    = "vendors/moment/min/moment.min.js";
    $ambiljs5    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
    $ambiljs6    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs7    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs8    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs9    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs10   = "js/my.js";
  } elseif ($id == "view-income") {
    $nav         = "Detail Income";
    $ambil       = "finance/income/view-detail.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "view-kasbon") {
    $nav         = "Detail Cash Receipt";
    $ambil       = "finance/kasbon/view-detail.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "view-ptjb") {
    $nav         = "Detail Cash Receipt";
    $ambil       = "finance/ptjb/view-detail.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "technician") {
    $nav         = "PKL Technician Name";
    $ambil       = "reference/technician-name.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "technician-pkl") {
    $nav         = "PKL Technician Name";
    $ambil       = "reference/technician-pkl-name.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "subcon-free") {
    $nav         = "Subcon - Freelancer Name";
    $ambil       = "reference/subcon-free-name.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  }  elseif ($id == "project-title") {
    $nav         = "Project Title";
    $ambil       = "reference/project-title.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "kategori") {
    $nav         = "Kategori Kasbon";
    $ambil       = "reference/kategori-kasbon.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "list-user") {
    $nav         = "List User";
    $ambil       = "reference/list-user.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "report-order") {
    $nav         = "Report Book Of Life";
    $ambil       = "report/order.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
    $ambiljs3    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "book-of-live") {
    $nav         = "Report Book Of Life";
    $ambil       = "report/Book-Of-Live.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
    $ambiljs3    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "report-order-t") {
    $nav         = "Report Schedule Order";
    $ambil       = "report/order-t.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
    $ambiljs3    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "report-income") {
    $nav         = "Report Income";
    $ambil       = "report/income.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
    $ambiljs3    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "report-cash-receipt") {
    $nav         = "Report Cash Receipt";
    $ambil       = "report/cash-receipt.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
    $ambiljs3    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "report-ptjb") {
    $nav         = "Report PTJB";
    $ambil       = "report/ptjb.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
    $ambiljs3    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "report-technician1") {
    $nav         = "Report Technician";
    $ambil       = "report/technician1.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
  } elseif ($id == "report-technician2") {
    $nav         = "Report Technician";
    $ambil       = "report/technician2.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
  } elseif ($id == "report-income-ex") {
    $nav         = "Report Finance";
    $ambil       = "report/finance.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
  } elseif ($id == "report-order-w-t") {
    $nav         = "Report Order Without Technician";
    $ambil       = "report/order-without-technician.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
    $ambiljs3    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "report-id-wo-n-i") {
    $nav         = "Report Id WO No Incoming Founds";
    $ambil       = "report/id-wo-no-income.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
    $ambiljs3    = "vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js";
  } elseif ($id == "report-wo-n-i") {
    $nav         = "Incoming Founds";
    $ambil       = "report/wo-no-income.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "view-wo-no-income") {
    $nav         = "Detail Income";
    $ambil       = "report/view-wo-no-income.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss6   = "vendors/normalize-css/normalize.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "vendors/pdfmake/build/pdfmake.min.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
  } elseif ($id == "summary-benefit") {
    $nav         = "Benefit";
    $ambil       = "summary/benefit.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
  } elseif ($id == "summary-teknisi") {
    $nav         = "Benefit";
    $ambil       = "summary/teknisi.php";
    $class       = "active";
    $ambilcss1   = "vendors/datatables.net-bs/css/dataTables.bootstrap.min.css";
    $ambilcss2   = "vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css";
    $ambilcss3   = "vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css";
    $ambilcss4   = "vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css";
    $ambilcss5   = "vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css";
    $ambilcss6   = "vendors/iCheck/skins/flat/green.css";
    $ambilcss7   = "vendors/normalize-css/normalize.css";
    $ambilcss8   = "https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css";
    $ambilcss9   = "css/datatables.min.css";
    $ambiljs0    = "vendors/iCheck/icheck.min.js";
    $ambiljs1    = "vendors/datatables.net/js/jquery.dataTables.min.js";
    $ambiljs2    = "vendors/datatables.net-bs/js/dataTables.bootstrap.min.js";
    $ambiljs3    = "vendors/datatables.net-buttons/js/dataTables.buttons.min.js";
    $ambiljs4    = "vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js";
    $ambiljs5    = "vendors/datatables.net-buttons/js/buttons.flash.min.js";
    $ambiljs6    = "vendors/datatables.net-buttons/js/buttons.html5.min.js";
    $ambiljs7    = "vendors/datatables.net-buttons/js/buttons.print.min.js";
    $ambiljs8    = "vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js";
    $ambiljs9    = "vendors/datatables.net-keytable/js/dataTables.keyTable.min.js";
    $ambiljs10    = "vendors/datatables.net-responsive/js/dataTables.responsive.min.js";
    $ambiljs11    = "vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js";
    $ambiljs12    = "vendors/datatables.net-scroller/js/dataTables.scroller.min.js";
    $ambiljs13    = "vendors/jszip/dist/jszip.min.js";
    $ambiljs14    = "reference/script/modal.js";
    $ambiljs15    = "vendors/pdfmake/build/vfs_fonts.js";
    $ambiljs17    = "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js";
    $ambiljs18    = "https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js";
    $ambiljs19    = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js";
    $ambiljs20    = "js/jquery.datatables.min.js";
    $ambiljs21    = "js/datatables.min.js";
  } else {
    $nav         = "Dashboard";
    $ambil       = "home.php";
    $class       = "active";
    $ambilcss1   = "";
    $ambilcss2   = "";
    $ambiljs0    = "vendors/echarts/map/js/world.js";
    $ambiljs1    = "vendors/echarts/dist/echarts.min.js";
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/icon.png" type="image/ico" />

    <title>Aplikasi Work Order </title>

    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">

    <link href="<?php echo $ambilcss1; ?>" rel="stylesheet">
    <link href="<?php echo $ambilcss2; ?>" rel="stylesheet">
    <link href="<?php echo $ambilcss3; ?>" rel="stylesheet">
    <link href="<?php echo $ambilcss4; ?>" rel="stylesheet">
    <link href="<?php echo $ambilcss5; ?>" rel="stylesheet">
    <link href="<?php echo $ambilcss6; ?>" rel="stylesheet">
    <link href="<?php echo $ambilcss7; ?>" rel="stylesheet">
    <link href="<?php echo $ambilcss8; ?>" rel="stylesheet">
    <link href="<?php echo $ambilcss9; ?>" rel="stylesheet">
    <link href="<?php echo $ambilcss10 ;?>" rel="stylesheet">
    <link href="<?php echo $ambilcss11 ;?>" rel="stylesheet">

    <style type="text/css">
        .ui-autocomplete{
            max-height: 200px;
            max-width: auto;
            overflow: auto;
        }
        .ui-corner-all{
            border-radius:0;
        }
        .ui-menu-item a:hover{
            background-image:none;
            background-color: #f1d597;
            border: none;
        }
        
        th, td {
            text-align: center;
        }

        .td1 {
            background-color: steelblue;
            color: white;
            font-weight: bold;
        }

        .td2 {
            background-color: orange;
            color: black;
            font-weight: bold;
        }

        .td3 {
            background-color: maroon;
            color: white;
            font-weight: bold;
        }
    </style>
    
    <script language="javascript" type="text/javascript">
        function randomString() {
            var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var string_length = 8;
            var randomstring = '';
            for (var i=0; i<string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                randomstring += chars.substring(rnum,rnum+1);
            }
            document.randform.idwo.value = randomstring;
        }
    </script>

    <script language="javascript" type="text/javascript">
        function randomString2() {
            var chars2 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var string_length2 = 8;
            var randomstring2 = '';
            for (var x=0; x<string_length2; x++) {
                var rnum2 = Math.floor(Math.random() * chars2.length);
                randomstring2 += chars2.substring(rnum2,rnum2+1);
            }
            document.randform.idso.value = randomstring2;
        }
    </script>

    <script language="javascript" type="text/javascript">
        function randomString3() {
            var chars3 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var string_length3 = 8;
            var randomstring3 = '';
            for (var y=0; y<string_length3; y++) {
                var rnum3 = Math.floor(Math.random() * chars3.length);
                randomstring3 += chars3.substring(rnum3,rnum3+1);
            }
            document.randform.idwo.value = randomstring3;
        }
    </script>

    <script language="javascript" type="text/javascript">
        function randomString4() {
            var chars4 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var string_length4 = 8;
            var randomstring4 = '';
            for (var z=0; z<string_length3; z++) {
                var rnum4 = Math.floor(Math.random() * chars4.length);
                randomstring4 += chars4.substring(rnum4,rnum4+1);
            }
            document.randform.idso.value = randomstring4;
        }
    </script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="?id=home" class="site_title"><i class="fa fa-line-chart"></i> <span>Work-Order</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/avatar.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['namauser']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li class=""><a href="?id=home"><i class="fa fa-bar-chart"></i> Chart</a>
                  </li>

                  <li class=""><a><i class="fa fa-archive"></i> Reference <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?id=technician">Technician Name</a></li>
                      <li><a href="?id=technician-pkl">PKL Technician Name</a></li>
                      <li><a href="?id=subcon-free">Subcon - Freelancer Name</a></li>
                      <li><a href="?id=project-title">Project Title</a></li>
                      <li><a href="?id=kategori">Cash Receipt Category</a></li>
                      <li><a href="?id=list-user">List User</a></li>
                    </ul>
                  </li>

                  <li class=""><a><i class="fa fa-edit"></i> Project <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?id=add-project&mod=tambah">Add Project</a></li>
                      <li><a href="?id=upd-project&mod=update">Update Project</a></li>
                      <li><a href="?id=project&view=project">Project List</a></li>
                    </ul>
                  </li>

                    <li class=""><a><i class="fa fa-money"></i> Income <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="?id=project&view=income">Add Income</a></li>
                            <li><a href="?id=upd-income&mod=Update">Update Income</a></li>
                            <li><a href="?id=income">Income List</a></li>
                        </ul>
                    </li>

                    <li class=""><a><i class="fa fa-credit-card"></i> Cash Receipt<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class=""><a>Kasbon<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                            <li><a href="?id=project&view=kasbon">Add Kasbon</a></li>
                            <li><a href="?id=cash-receipt">Kasbon List</a></li>
                            </ul>
                          </li>
                          <li class=""><a>PTJB<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                            <li><a href="?id=project&view=ptjb">Add PTJB</a></li>
                            <li><a href="?id=ptjb">PTJB List</a></li>
                            </ul>
                          </li>
                        </ul>
                    </li>
                    
                    <li class=""><a><i class="fa fa-list"></i> Summary <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="?id=summary-benefit&mod=search">Summary Benefit</a></li>
                            <li><a href="?id=summary-teknisi&mod=search">Summary Teknisi</a></li>
                        </ul>
                    </li>

                  <li><a><i class="fa fa-calendar-check-o"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li class=""><a>Excel<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="?id=report-order">Book Of Live</a></li>
                          <li><a href="?id=report-order-t">Order</a></li>
                          <li><a href="?id=report-income">Income</a></li>
                          <li><a href="?id=report-cash-receipt">Kasbon</a></li>
                          <li><a href="?id=report-ptjb">PTJB</a></li>
                        </ul>
                      </li>
                      <li class=""><a>Kasbon Teknisi<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="?id=report-technician1&mod=search">Kasbon</a></li>
                          <li><a href="?id=report-technician2&mod=search">PTJB</a></li>
                        </ul>
                      </li>
                      <li><a href="?id=report-income-ex&mod=search">Income, Expenditure</a></li>
                      <li><a href="?id=report-order-w-t">Order Without Technician</a></li>
                      <li><a href="?id=report-id-wo-n-i">ID WO No Income</a></li>
                    </ul>
                  </li>
              </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/avatar.png" alt=""><?php echo $_SESSION['namauser']; ?> &nbsp
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li class="" style="font-size: 15px;"><a href="logout.php?id=logout" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')"><i class="fa fa-sign-out"></i> Logout </a>
                  </li>
                  </ul>
                </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- /top tiles -->
          <?php include $ambil; ?>
          
        </div>
         <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div style="text-align: center;">
            <p>&copy; <?php echo $year = date("Y"); ?> PT. Lumbung Riang Communication | All Right Reserved </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

        <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <script src="<?php echo $ambiljs0; ?>"></script>
    <script src="<?php echo $ambiljs1; ?>"></script>
    <script src="<?php echo $ambiljs2; ?>"></script>
    <script src="<?php echo $ambiljs3; ?>"></script>
    <script src="<?php echo $ambiljs4; ?>"></script>
    <script src="<?php echo $ambiljs5; ?>"></script>
    <script src="<?php echo $ambiljs6; ?>"></script>
    <script src="<?php echo $ambiljs7; ?>"></script>
    <script src="<?php echo $ambiljs8; ?>"></script>
    <script src="<?php echo $ambiljs9; ?>"></script>
    <script src="<?php echo $ambiljs10; ?>"></script>
    <script src="<?php echo $ambiljs11; ?>"></script>
    <script src="<?php echo $ambiljs12; ?>"></script>
    <script src="<?php echo $ambiljs13; ?>"></script>
    <script src="<?php echo $ambiljs14; ?>"></script>
    <script src="<?php echo $ambiljs15; ?>"></script>
    <script src="<?php echo $ambiljs16; ?>"></script>
    <script src="<?php echo $ambiljs17; ?>"></script>
    <script src="<?php echo $ambiljs18; ?>"></script>
    <script src="<?php echo $ambiljs19; ?>"></script>
    <script src="<?php echo $ambiljs20; ?>"></script>
    <script src="<?php echo $ambiljs21; ?>"></script>
    <script src="<?php echo $ambiljs22; ?>"></script>
    <script src="<?php echo $ambiljs23; ?>"></script>
    <script src="<?php echo $ambiljs24; ?>"></script>

    <script>
      $('#myDatepicker').datepicker({
        format: 'MM/DD/YYYY'
      });
    </script>
    
    <script>
      $(document).ready(function() {
        $('#dataTables').DataTable();
      } );
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('#wo').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-wo.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#wo').val(ui.item.wo);
            $('#idproject').val(ui.item.idproject);
            $('#kodeproject').val(ui.item.kodeproject);
            $('#kodejadwal').val(ui.item.kodejadwal);
            $('#kodeteknisi').val(ui.item.kodeteknisi);
            $('#level').val(ui.item.level);
            $('#date').val(ui.item.date);
            $('#project').val(ui.item.project);
            $('#so').val(ui.item.so);
            $('#customer').val(ui.item.customer);
            $('#lokasi').val(ui.item.lokasi);
            $('#pic').val(ui.item.pic);
            $('#tgl').val(ui.item.tgl);
          }
        })
      });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
        $('#so').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-so.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#so').val(ui.item.so);
            $('#woid').val(ui.item.woid);
          }
        })
      });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
        $('#ba').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-ba.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#ba').val(ui.item.ba);
            $('#wo').val(ui.item.wo);
            $('#so').val(ui.item.so);
            $('#tglba').val(ui.item.tglba);
            $('#pm').val(ui.item.pm);
            $('#desk').val(ui.item.desk);
          }
        })
      });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
        $('#project').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-pro.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#project').val(ui.item.project);
          }
        })
      });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('#woid').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-woid.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#woid').val(ui.item.woid);
            $('#so').val(ui.item.so);
          }
        })
      });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('#tgl').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-tgl.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#tgl').val(ui.item.tgl);
          }
        })
      });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('#pkl').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-pkl.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#pkl').val(ui.item.pkl);
          }
        })
      });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
        $('#pegawai').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-kasbon.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#pegawai').val(ui.item.pegawai);
          }
        })
      });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('#ptjb').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-ptjb.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#ptjb').val(ui.item.ptjb);
          }
        })
      });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('#customer').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-customer.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#customer').val(ui.item.customer);
          }
        })
      });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('#pm').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-pic.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#pic').val(ui.item.pic);
          }
        })
      });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
        $('#keterangan').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-ket.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#keterangan').val(ui.item.keterangan);
          }
        })
      });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
        $('#nama').autocomplete({
          minLength: 1, //minimal huruf saat autocomplete di proses
          source: 'search/search-teknisi.php', //file untuk mencari data mahasiswa
          select:function(event, ui){
            $('#nama').val(ui.item.nama);
          }
        })
      });
    </script>
    	
  </body>
</html>
