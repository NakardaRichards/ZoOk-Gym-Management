<ul class="navbar-nav bg-green-primary sidebar sidebar-dark accordion" style="background-color:green" id="accordionSidebar">


    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="trainersdash.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">zoOK Trainer <sup></sup></div>
    </a>


    <hr class="sidebar-divider my-0">




    <hr class="sidebar-divider">








    <hr class="sidebar-divider">











</ul>

<div id="content-wrapper" class="d-flex flex-column">


    <div id="content">


        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>



            <ul class="navbar-nav ml-auto">


                <div class="topbar-divider d-none d-sm-block"></div>


                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Username: <?php echo '<b>' . $_SESSION['username'] . '</b>'; ?> | Gym: <?php echo '<b>' . $_SESSION['gym_name'] . '</b>'; ?></span>

                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>