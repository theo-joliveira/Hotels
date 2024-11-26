<?php
/* Smarty version 4.3.4, created on 2024-10-15 14:25:23
  from '/Applications/MAMP/htdocs/hotels/mod_reservations/vue/reservationFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_670e7b5312f887_57134865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aac2ff1b4dda4177fe008fca6852b6fafba4f9d' => 
    array (
      0 => '/Applications/MAMP/htdocs/hotels/mod_reservations/vue/reservationFicheVue.tpl',
      1 => 1729002317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_670e7b5312f887_57134865 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="template/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->

</head>
<body>


<!-- Left Panel -->


<?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- FIN : Left Panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- FIN : header -->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><!-- Info --></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=reservations">Liste des réservations</a></li>
                        <li class="active">Fiche d'une réservation</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><strong>Reservation Details</strong></div>
                        <div class="card-body card-block">
                            <form action="index.php" method="POST">
                                <input type="hidden" name="gestion" value="reservations">
                                <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

                                <div class="form-group">
                                    <label for="ResNo" class="form-control-label">Reservation Number</label>
                                    <input type="text" id="ResNo" name="ResNo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getResNo();?>
" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="LastName" class="form-control-label">Last Name</label>
                                    <input type="text" id="LastName" name="LastName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getLastName();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="FirstName" class="form-control-label">First Name</label>
                                    <input type="text" id="FirstName" name="FirstName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getFirstName();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="Address" class="form-control-label">Address</label>
                                    <input type="text" id="Address" name="Address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getAddress();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="City" class="form-control-label">City</label>
                                    <input type="text" id="City" name="City" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getCity();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="State" class="form-control-label">State</label>
                                    <input type="text" id="State" name="State" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getState();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="Postal" class="form-control-label">Postal Code</label>
                                    <input type="text" id="Postal" name="Postal" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getPostal();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="Phone" class="form-control-label">Phone</label>
                                    <input type="text" id="Phone" name="Phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getPhone();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><strong>Payment and Stay Details</strong></div>
                        <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="Payment" class="form-control-label">Payment</label>
                                    <input type="text" id="Payment" name="Payment" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getPayment();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="Amout" class="form-control-label">Amount</label>
                                    <input type="text" id="Amount" name="Amount" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getAmount();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="Hotel" class="form-control-label">Hotel</label>
                                    <input type="text" id="Hotel" name="Hotel" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getHotel();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="Room" class="form-control-label">Room</label>
                                    <input type="text" id="Room" name="Room" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getRoom();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="DateIn" class="form-control-label">Date In</label>
                                    <input type="date" id="DateIn" name="DateIn" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getDateIn();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="DateOut" class="form-control-label">Date Out</label>
                                    <input type="date" id="DateOut" name="DateOut" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getDateOut();?>
"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>

                                <div class="card-body card-block">
                                    <div class="col-md-6">
                                        <input type='button' class="btn btn-submit" value='Retour' onclick='location.href = "index.php?gestion=reservations"'>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BtnSubmit']->value;?>
</button>
                                        </div>
                                    <?php }?>
                                    <br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.html5.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.print.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.colVis.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables-init.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    <?php echo '</script'; ?>
>

</body>
</html><?php }
}
