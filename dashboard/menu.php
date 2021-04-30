<ul class="navbar-nav bg-green-primary sidebar sidebar-dark accordion" style="background-color:green" id="accordionSidebar">


    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">zoOK


            Dashboard <sup></sup></div>
    </a>


    <hr class="sidebar-divider my-0">




    <hr class="sidebar-divider">




    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Members</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="allmembers.php">All Members</a>

                <a class="collapse-item" href="gymEnquires.php">
                    <i class="fas fa-fw fa-phone"></i>
                    <span>Enquires</span>
                </a>
            </div>
        </div>
    </li>




    <hr class="sidebar-divider">




    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-user"></i>
            <span>Trainers</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="alltrainers.php">All Trainers</a>
                <a class="collapse-item" href="adminadd.php">Add Trainers</a>
                <div class="collapse-divider"></div>

            </div>
        </div>
    </li>






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
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        <b style="color:red;"> Logout</b>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Continue
                        </a>
                    </div>
                </li>

            </ul>

        </nav>