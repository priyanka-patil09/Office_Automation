<!DOCTYPE html>
<html lang="en" dir="">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>OAS_Userpanel</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />

    <link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet" />

    <link href="<?=base_url() ?>Assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?=base_url() ?>Assets/css/plugins/dropzone.min.css" />
    <link rel="stylesheet" href="<?=base_url() ?>Assets/css/plugins/datatables.min.css" />

    <link rel="stylesheet" type="text/css" href="https://www.government.umikoo.com/assets2/multiselect.css">

<link rel="stylesheet" type="text/css" href="https://www.government.umikoo.com/assets2/select2.min.css">

</script>

    
    <link rel="icon" href="<?=base_url() ?>Assets/images/comlogo.png" sizes="32x32" type="image/png">
   
    <!-- ******* Added New Links***** -->
    <link rel="stylesheet" href="<?=base_url() ?>web_resources/dist/css/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.min.css"  />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- <link rel="stylesheet" type="text/css" href="<?=base_url() ?>Assets/css/loader.min.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">

    
    <script>
        var base_path="<?=base_url() ?>";
     </script>

<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
    .form-control:focus {
        border-color:#5a14c9;
        box-shadow: 0 0 0 0.2rem #9d89b5;

    } 
        .logoutbox{
            position:relative!important;
        }
        .logoutbox:after{
            content: "";
    position: absolute;
    top: -9px;
    right: 20%;
    width: 18px;
    height: 18px;
    background:#f5f4f3;
    transform: rotate(45deg);
    z-index: 1;
        }

    .form-group{ 
        position:relative;
        /* left:10px; */
        padding:8px;
    }
    .input-group{ 
        position:relative;
    }
   .field_label{
        position: absolute;
        top: -10px;
        left: 10px;
        background: white;
        padding: 0 4px;
        color:black;
    }
</style>

</head>

<body class="text-left" style="margin-top:0px!important;">
    <div class="app-admin-wrap layout-sidebar-large" >
        <div class="main-header">
            <div class="logo">
                <img src="<?=base_url() ?>Assets/images/comlogo.png" alt="">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="d-flex align-items-center">
                <!-- Mega menu -->
                <div class="dropdown mega-menu d-none d-md-block">
                    <!-- <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a> -->
                    <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">Mega Menu <br> Sidebar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                                </p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                <button class="btn btn-xl btn-rounded btn-outline-warning">Learn More</button>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                                <div class="menu-icon-grid w-auto p-0">
                                    <a href="#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="#"><i class="i-Library"></i> UI Kits</a>
                                    <a href="#"><i class="i-Drop"></i> Apps</a>
                                    <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                    <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                    <a href="#"><i class="i-Ambulance"></i> Support</a>
                                </div>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                                <ul class="links">
                                    <li><a href="<?=base_url() ?>accordion.html">Accordion</a></li>
                                    <li><a href="<?=base_url() ?>alerts.html">Alerts</a></li>
                                    <li><a href="<?=base_url() ?>buttons.html">Buttons</a></li>
                                    <li><a href="<?=base_url() ?>badges.html">Badges</a></li>
                                    <li><a href="<?=base_url() ?>carousel.html">Carousels</a></li>
                                    <li><a href="<?=base_url() ?>lists.html">Lists</a></li>
                                    <li><a href="<?=base_url() ?>popover.html">Popover</a></li>
                                    <li><a href="<?=base_url() ?>tables.html">Tables</a></li>
                                    <li><a href="<?=base_url() ?>datatables.html">Datatables</a></li>
                                    <li><a href="<?=base_url() ?>modals.html">Modals</a></li>
                                    <li><a href="<?=base_url() ?>nouislider.html">Sliders</a></li>
                                    <li><a href="<?=base_url() ?>tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu -->
                <!-- <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div> -->
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
             
                <!-- Notificaiton -->
                <div class="dropdown">
                    <!-- <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div> -->
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                      
                    
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->
                <!-- User avatar dropdown -->
                <div class="dropdown " >
                    <div class="user col align-self-end">

                        <img src="<?=base_url() ?>Assets/images/studentlogo.png" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right logoutbox userdetailbox" aria-labelledby="userDropdown" style="background-color:#f5f4f3;">
                        <p class="px-5 "></p>
                        <p class="px-3 "></p>
                        <a class="dropdown-item text-primary" href="<?=base_url() ?>ComLogin">Log out</a>

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">

                    <li class="nav-item">
                        <a class="nav-item-hold text-decoration-none" href="<?=base_url() ?>Office">
                            <i class="fa-brands fa-hashnode fa-xl" style="color:#0613d1de;"></i>
                        <span class="nav-text">Dashboard</span></a>
                    </li>


                    <li class="nav-item" data-item="sideLinks">
                        <a class="nav-item-hold text-decoration-none">
                             <i class="fa-solid fa-user-plus fa-xl" style="color:#0613d1de;"></i>
                              <span class="nav-text">Employee</span>
                         </a>    
                    </li>

                    <li class="nav-item" data-item="sideLinks1">
                        <a class="nav-item-hold text-decoration-none">
                             <i class="fa-solid fa-chart-simple fa-xl" style="color:#0613d1de;"></i>
                              <span class="nav-text">Status</span>
                         </a>    
                    </li>


                    <li class="nav-item " data-item="sideLinks2">
                        <a class="nav-item-hold text-decoration-none">
                             <i class="fa-solid fa-calendar-check fa-xl" style="color:#0613d1de;"></i>
                              <span class="nav-text">Remainder Type</span>
                         </a>    
                    </li>
 
                    <li class="nav-item" data-item="sideLinks3">
                        <a class="nav-item-hold text-decoration-none">
                    <i class="fa-solid fa-bookmark fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Priority</span>
                    </a>
                    </li>

                    <li class="nav-item" data-item="sideLinks4">
                        <a class="nav-item-hold text-decoration-none">
                    <i class="fa-solid fa-thumbtack fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Task Type</span></a>
                    </li>

                    <li class="nav-item" data-item="sideLinks5">
                        <a class="nav-item-hold text-decoration-none">
                    <i class="fa-solid fa-money-bill-wave fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Billing Type</span></a>
                    </li> 

                    <li class="nav-item" data-item="sideLinks6"><a class="nav-item-hold text-decoration-none">
                    <i class="fa-solid fa-swatchbook fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Project Access Type</span></a>
                    </li> 

                    <li class="nav-item" data-item="sideLinks7"><a class="nav-item-hold text-decoration-none">
                    <i class="fa-solid fa-sack-dollar fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Budget Type</span></a>
                    </li> 

                    <li class="nav-item" data-item="sideLinks8"><a class="nav-item-hold text-decoration-none">
                    <i class="fa-solid fa-floppy-disk fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Project Type</span></a>
                    </li> 

                    <li class="nav-item" data-item="sideLinks9"><a class="nav-item-hold text-decoration-none">
                    <i class="fa-solid fa-tags fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Add Tags</span></a>
                    </li> 
                   
                    <li class="nav-item"><a class="nav-item-hold text-decoration-none" href="<?=base_url() ?>ComLogin">
                    <i class="fa-solid fa-right-from-bracket fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Log out</span></a>
                    </li> 
              
                   
                </ul>
            </div>


            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                   
              <ul class="childNav" data-parent="sideLinks">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index1">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Employee_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create1">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>

                </ul>

              
                <ul class="childNav" data-parent="sideLinks1">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index2">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Status_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create2">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>

                </ul>


                <ul class="childNav" data-parent="sideLinks2">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index3">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Remainder_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create3">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>
                   
                </ul>


                <ul class="childNav" data-parent="sideLinks3">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index4">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Priority_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create4">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>
                   
                </ul>

                <ul class="childNav" data-parent="sideLinks4">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index5">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Task_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create5">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>
                   
                </ul>


                <ul class="childNav" data-parent="sideLinks5">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index6">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Billing_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create6">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>
                   
                </ul>


                <ul class="childNav" data-parent="sideLinks6">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index7">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Project Access_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create7">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>
                   
                </ul>

                <ul class="childNav" data-parent="sideLinks7">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index8">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Budget_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create8">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>
                   
                </ul>

                <ul class="childNav" data-parent="sideLinks8">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index9">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Project_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create9">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>
                   
                </ul>

                <ul class="childNav" data-parent="sideLinks9">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/index10">
                    <i class="fa-solid fa-file-export fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Tags_View</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url() ?>Office/create10">
                    <i class="fa-solid fa-table fa-xl" style="color:#0613d1de;"></i>
                   &emsp;<span class="item-name">View_Details</span></a></li>
                   
                </ul>
                

            </div>
            <div class="sidebar-overlay"></div>
        </div>

