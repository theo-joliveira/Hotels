<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$titreVue}</title>
    <meta name="description" content="{$titreVue}">
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
{include file='public/left.tpl'}
<!-- Right Panel -->

<div id="right-panel" class="right-panel">
    <!--Header -->
    {include file='public/header.tpl'}
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
                                <input type="hidden" name="action" value="{$action}">

                                <div class="form-group">
                                    <label for="RoomNo" class="form-control-label">Room Number</label>
                                    <input type="text" id="RoomNo" name="RoomNo" class="form-control" value="{$uneRoom->getRoomNo()}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="Hotel" class="form-control-label">Hotel</label>
                                    <input type="text" id="Hotel" name="Hotel" class="form-control" value="{$uneRoom->getHotel()}" {$readonly}>
                                </div>
                                <div class="form-group">
                                    <label for="Room" class="form-control-label">Room Name</label>
                                    <input type="text" id="Room" name="Room" class="form-control" value="{$uneRoom->getRoom()}" {$readonly}>
                                </div>
                                <div class="form-group">
                                    <label for="RoomType" class="form-control-label">Room Type</label>
                                    <input type="text" id="RoomType" name="RoomType" class="form-control" value="{$uneRoom->getRoomType()}" {$readonly}>
                                </div>
                                <div class="form-group">
                                    <label for="Price" class="form-control-label">Price</label>
                                    <input type="text" id="Price" name="Price" class="form-control" value="{$uneRoom->getPrice()}" {$readonly}>
                                </div>
                                <div class="form-group">
                                    <label for="Comments" class="form-control-label">Comments</label>
                                    <input type="text" id="Comments" name="Comments" class="form-control" value="{$uneRoom->getComments()}" {$readonly}>
                                </div>
                                <div class="form-group">
                                    <label for="RoomStatus" class="form-control-label">Room Status</label>
                                    <input type="text" id="RoomStatus" name="RoomStatus" class="form-control" value="{$uneRoom->getRoomStatus()}" {$readonly}>
                                </div>
                                
                                <div class="card-body card-block">
                                    <div class="col-md-6">
                                        <input type='button' class="btn btn-submit" value='Retour' onclick='location.href = "index.php?gestion=rooms"'>
                                    </div>
                                    {if $action != 'consulter'}
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">{$BtnSubmit}</button>
                                        </div>
                                    {/if}
                                    <br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .content -->
    </div><!-- /#right-panel -->

    <script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="public/assets/js/plugins.js"></script>
    <script src="public/assets/js/main.js"></script>
</body>
</html>