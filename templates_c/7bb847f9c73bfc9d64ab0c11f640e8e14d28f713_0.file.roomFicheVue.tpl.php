<?php
/* Smarty version 4.3.4, created on 2024-11-13 15:51:16
  from '/Applications/MAMP/htdocs/hotels/mod_rooms/vue/roomFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6734caf452d360_59034423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb847f9c73bfc9d64ab0c11f640e8e14d28f713' => 
    array (
      0 => '/Applications/MAMP/htdocs/hotels/mod_rooms/vue/roomFicheVue.tpl',
      1 => 1731512232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_6734caf452d360_59034423 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="public/favicon.ico">
    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/scss/style.css">
</head>
<body>

<!-- Left Panel -->
<?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                    <h1>Fiche d'une chambre</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=rooms">Liste des chambres</a></li>
                        <li class="active">Fiche d'une chambre</li>
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
                        <div class="card-header"><strong>Room Details</strong></div>
                        <div class="card-body card-block">
                            <form action="index.php" method="POST">
                                <input type="hidden" name="gestion" value="rooms">
                                <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

                                <div class="form-group">
                                    <label for="RoomNo" class="form-control-label">Room Number</label>
                                    <input type="text" id="RoomNo" name="RoomNo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneRoom']->value->getRoomNo();?>
" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="Hotel" class="form-control-label">Hotel</label>
                                    <input type="text" id="Hotel" name="Hotel" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneRoom']->value->getHotel();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="Room" class="form-control-label">Room Name</label>
                                    <input type="text" id="Room" name="Room" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneRoom']->value->getRoom();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="RoomType" class="form-control-label">Room Type</label>
                                    <input type="text" id="RoomType" name="RoomType" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneRoom']->value->getRoomType();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="Price" class="form-control-label">Price</label>
                                    <input type="text" id="Price" name="Price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneRoom']->value->getPrice();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="Comments" class="form-control-label">Comments</label>
                                    <input type="text" id="Comments" name="Comments" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneRoom']->value->getComments();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                <div class="form-group">
                                    <label for="RoomStatus" class="form-control-label">Room Status</label>
                                    <input type="text" id="RoomStatus" name="RoomStatus" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneRoom']->value->getRoomStatus();?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
                                </div>
                                
                                <div class="card-body card-block">
                                    <div class="col-md-6">
                                        <input type='button' class="btn btn-submit" value='Retour' onclick='location.href = "index.php?gestion=rooms"'>
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
</body>
</html><?php }
}
