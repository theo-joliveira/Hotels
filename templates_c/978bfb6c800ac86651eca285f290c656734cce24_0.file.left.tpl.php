<?php
/* Smarty version 4.3.4, created on 2024-11-13 15:54:32
  from '/Applications/MAMP/htdocs/hotels/public/left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6734cbb88f5019_19801400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '978bfb6c800ac86651eca285f290c656734cce24' => 
    array (
      0 => '/Applications/MAMP/htdocs/hotels/public/left.tpl',
      1 => 1731513269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6734cbb88f5019_19801400 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <a href="left.tpl"></a>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#A VOUS D'ECRIRE LE LIEN">Les Hôtels</a>
                <a class="navbar-brand hidden" href="#A VOUS D'ECRIRE LE LIEN">G</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#A VOUS D'ECRIRE LE LIEN"> <i class="menu-icon fa fa-dashboard"></i>Accueil </a>
                    </li>
                    <h3 class="menu-title">ADMINISTRATION</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Modes de paiements</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="index.php?gestion=paymenttypes">Liste</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Reservations</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="index.php?gestion=reservations">Liste</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Chambres</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="index.php?gestion=room">Liste</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon ti-email"></i>xxxxxx</a>
                    </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel --><?php }
}
