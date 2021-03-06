<?php ob_start(); ?>
<?php session_start(); ?>
<?php include realpath('config/Database.php'); ?>
<?php include realpath('config/Functions.php'); ?>
<?php $function->loggedIn(); ?>
<?php $profile = $db->query('SELECT user_pimage, user_email, user_fname, user_lname FROM users WHERE user_name = ?', $_SESSION['user_name'])->fetchArray(); ?>
<?php $pimage = !empty($profile['user_pimage']) ? 'assets/img/register-user/' . $profile['user_pimage'] : 'assets/img/register-user/avatar.png'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>LO - Startup App</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <a class="navbar-brand d-none d-sm-block" href="index.php">LO - Startup App</a>
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#">
                <i data-feather="menu"></i>
            </button>
            <form class="form-inline mr-auto d-none d-lg-block">
                <input class="form-control form-control-solid mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
            </form>
            <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="mr-2" data-feather="bell"></i>Alerts Center
                        </h6>
                        <a class="dropdown-item dropdown-notifications-item" href="#!"
                            >
                            <div class="dropdown-notifications-item-icon bg-warning">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 29, 2019</div>
                                <div class="dropdown-notifications-item-content-text">This is an alert message. It&apos;s nothing serious, but it requires your attention.</div>
                            </div>
                        </a
                        >
                        <a class="dropdown-item dropdown-notifications-item" href="#!"
                            >
                            <div class="dropdown-notifications-item-icon bg-info">
                                <i data-feather="bar-chart"></i>
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 22, 2019</div>
                                <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click here to view!</div>
                            </div>
                        </a
                        >
                        <a class="dropdown-item dropdown-notifications-item" href="#!"
                            >
                            <div class="dropdown-notifications-item-icon bg-danger">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 8, 2019</div>
                                <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
                            </div>
                        </a
                        >
                        <a class="dropdown-item dropdown-notifications-item" href="#!"
                            >
                            <div class="dropdown-notifications-item-icon bg-success">
                                <i data-feather="user-plus"></i>
                            </div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 2, 2019</div>
                                <div class="dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
                            </div>
                        </a
                        >
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="mail"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="mr-2" data-feather="mail"></i>Message Center
                        </h6>
                        <a class="dropdown-item dropdown-notifications-item" href="#!"
                            >
                            <img class="dropdown-notifications-item-img" src="https://source.unsplash.com/vTL_qy03D1I/60x60" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Emily Fowler &#xB7; 58m</div>
                            </div>
                        </a
                        >
                        <a class="dropdown-item dropdown-notifications-item" href="#!"
                            >
                            <img class="dropdown-notifications-item-img" src="https://source.unsplash.com/4ytMf8MgJlY/60x60" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Diane Chambers &#xB7; 2d</div>
                            </div>
                        </a
                        >kateg
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-fluid" src="<?= $pimage; ?>"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="<?= $pimage; ?>" />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name"><?= $profile['user_fname'] . ' ' . $profile['user_lname'] ?></div>
                                <div class="dropdown-user-details-email"><?= $profile['user_email'] ?></div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="profile.php"
                            >
                            <div class="dropdown-item-icon">
                                <i data-feather="settings"></i>
                            </div>
                            Profil
                        </a
                        >
                        <a class="dropdown-item" href="logout.php"
                            >
                            <div class="dropdown-item-icon">
                                <i data-feather="log-out"></i>
                            </div>
                            Logout
                        </a
                        >
                    </div>
                </li>
            </ul>
        </nav>