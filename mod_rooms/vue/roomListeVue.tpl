<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$titreVue}</title>
    <meta name="description" content="{$titreVue}">
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
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
</head>
<body>

<!-- Left Panel -->
{include file='public/left.tpl'}
<!-- Right Panel -->

<div id="right-panel" class="right-panel">
    <!-- Header -->
    {include file='public/header.tpl'}
    <!-- FIN : header -->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Gestion des Chambres</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active">Chambres</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{$titrePage}

                                <form class="pos-ajout" method="POST" action="index.php">
                                    <input type="hidden" name="gestion" value="rooms">
                                    <input type="hidden" name="action" value="form_ajouter">
                                    <label>Ajouter une chambre : 
                                        <input id="aImage" type="image" name="btn_ajouter" src='public/images/icones/a16.png'>
                                    </label>
                                </form>
                            </strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Numéro de Chambre</th>
                                    <th>Hôtel</th>
                                    <th>Nom de la Chambre</th>
                                    <th>Type de Chambre</th>
                                    <th>Prix</th>
                                    <th class="pos-actions">Consulter</th>
                                    <th class="pos-actions">Modifier</th>
                                    <th class="pos-actions">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>

                                {foreach from=$listeRooms item=room}
                                    <tr>
                                        <td>{$room->getRoomNo()}</td>
                                        <td>{$room->getHotel()}</td>
                                        <td>{$room->getRoom()}</td>
                                        <td>{$room->getRoomType()}</td>
                                        <td>{$room->getPrice()}</td>
                                        <td class="pos-actions">
                                            <form method="POST" action="index.php">
                                                <input type="hidden" name="gestion" value="rooms">
                                                <input type="hidden" name="action" value="form_consulter">
                                                <input type="hidden" name="RoomNo" value="{$room->getRoomNo()}">
                                                <input id="pImage" type="image" name="btn_consulter" src='public/images/icones/p16.png'>
                                            </form>
                                        </td>
                                        <td class="pos-actions">
                                            <form method="POST" action="index.php">
                                                <input type="hidden" name="gestion" value="rooms">
                                                <input type="hidden" name="action" value="form_modifier">
                                                <input type="hidden" name="RoomNo" value="{$room->getRoomNo()}">
                                                <input id="pImage" type="image" name="btn_modifier" src='public/images/icones/m16.png'>
                                            </form>
                                        </td>
                                        <td class="pos-actions">
                                            <form method="POST" action="index.php">
                                                <input type="hidden" name="gestion" value="rooms">
                                                <input type="hidden" name="action" value="form_supprimer">
                                                <input type="hidden" name="RoomNo" value="{$room->getRoomNo()}">
                                                <input id="sImage" type="image" name="btn_supprimer" src='public/images/icones/s16.png'>
                                            </form>
                                        </td>
                                    </tr>
                                {foreachelse}
                                    <tr>
                                        <td colspan='8'>Aucun enregistrement trouvé.</td>
                                    </tr>
                                {/foreach}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="public/assets/js/plugins.js"></script>
    <script src="public/assets/js/main.js"></script>

    <script src="public/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="public/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="public/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="public/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="public/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="public/assets/js/lib/data-table/datatables-init.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>
</body>
</html>