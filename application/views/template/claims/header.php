<!DOCTYPE html>
<html>
    <head>
        <title>
            Claims
        </title>
        <link href="<?=base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/css/app.css') ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/dataTables.bootstrap.min.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/fs/css/font-awesome.min.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/datepicker/css/bootstrap-datepicker.min.css') ?>" />
        
        <script type="text/javascript" src="<?=base_url('assets/js/jquery.js') ?>"></script>
        <!-- Plugins -->
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/dataTables.bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.validator.js') ?>"></script>
    </head>
    <body>
        <!-- HEADER -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="navbar-brand" href="<?= site_url('claims/dashboard') ?>">
                        CLAIMS
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#">
                                Link
                                <span class="sr-only">
                                    (current)
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Link
                            </a>
                        </li>
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                Dropdown
                                <span class="caret">
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Something else here
                                    </a>
                                </li>
                                <li class="divider" role="separator">
                                </li>
                                <li>
                                    <a href="#">
                                        Separated link
                                    </a>
                                </li>
                                <li class="divider" role="separator">
                                </li>
                                <li>
                                    <a href="#">
                                        One more separated link
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input class="form-control" placeholder="Search" type="text">
                            </input>
                        </div>
                        <button class="btn btn-default" type="submit">
                            Submit
                        </button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                Link
                            </a>
                        </li>
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                <i class="fa fa-cogs" aria-hidden="true"></i> 
                                Maintenance
                                <span class="caret">
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        Claims
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Claims Batch
                                    </a>
                                </li>
                                <li class="divider" role="separator">
                                </li>
                                <li>
                                    <a href="#">
                                        Approval Routes
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Claims Cutoff
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.HEADER -->

        <!-- BODY -->
        <div class="container">