<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    /* Sidebar styling */
    #accordionSidebar {
        position: relative;
        top: 0;
        left: 0;
        height: 100vh;
        width: 160px; /* Fixed width */
        overflow-y: auto;
        transition: transform 0.5s ease-in-out;
        transform: translateX(0); /* Default position */
        z-index: 99;
    }

    /* Sidebar hidden */
    .sidebar-toggled #accordionSidebar {
        transform: translateX(-160px); /* Slide out */
    }

    /* Ensure the icon size remains fixed */
    #accordionSidebar .nav-link i {
        font-size: 1.5rem; /* Fixed icon size */
        transition: transform 0.5s ease-in-out; /* Smooth transition if needed */
    }

    /* Adjust content wrapper margin */
    #content-wrapper {
        transition: margin-left 0.5s ease-in-out;
        margin-left: 160px; /* Default margin */
    }

    /* Adjust content margin when sidebar is toggled */
    .sidebar-toggled #content-wrapper {
        margin-left: 0; /* Content fills the width */
    }
/* Hide the sidebar using translation (not display: none) */
.sidebar-hidden {
    transform: translateX(-250px); /* Shift sidebar out of view */
    transition: transform 0.3s ease; /* Smooth transition */    
}

/* Ensure content expands to full width when sidebar is hidden */
.full-width {
    margin-left: 0 !important;
    width: 100%; /* Expand content to full width */
    transition: width 0.3s ease; /* Smooth transition */
}



</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.getElementById('accordionSidebar');
        const contentWrapper = document.getElementById('content-wrapper');
        const sidebarToggle = document.getElementById('sidebarToggleTop');

        // Initially hide the sidebar when the page is first loaded or refreshed
        sidebar.classList.add('sidebar-hidden');

        // Add event listener for the toggle button
        sidebarToggle.addEventListener('click', function () {
            sidebar.classList.toggle('sidebar-hidden');
            contentWrapper.classList.toggle('full-width');  // Adjust the content width
        });
    });
</script>






  
<body id="page-top" class="sidebar-toggled">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-white sidebar toggled sidebar-whitw accordion" id="accordionSidebar" style="height: 100vh; width: 160px;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="/assets/icon/logo.png" alt="Desktop Icon" class="logo">
            </a>
            
            <style>
              .logo {
                width: 150px;
                height: 25px;
                max-width: 100%; /* Memastikan logo tidak melebihi lebar kontainer */
                height: auto; /* Menjaga rasio aspek gambar */
              }
            </style>
    
            
             

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" style="color: #808080;">
                <a class="nav-link collapsed" href="login" style="color: #808080;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#808080" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                    </svg>
                    <span>Beranda</span>
                </a>
            </li>
            

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item" style="color: #808080">
                <a class="nav-link collapsed" href="#" style="color: #808080">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#808080" class="bi bi-book-fill" viewBox="0 0 16 16">
                        <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783">
                      </svg>
                    <span>Rekomendasi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" style="color: #808080">
                <a class="nav-link collapsed" href="#" style="color: #808080">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#808080" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                        <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                      </svg>
                    <span>Wishlist</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item" style="color: #808080">
                <a class="nav-link" href="charts.html" style="color: #808080">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#808080" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                      </svg>
                    <span>Setting</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg=dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link  rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
            
                    <div class="container mt-3">
                        <div class="col-lg-5">
                            <div class="input-group">
                                <input type="text" id="searchKodeBuku" class="form-control" placeholder="Cari Kode Buku..." onkeyup="searchBooks()">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" onclick="searchBooks()">Search</button>
                                </div>
                            </div>
                            <div class="dropdown-menu" id="kodeBukuDropdown" style="display: none;">
                                @foreach($buku as $b)
                                    <a href="{{ url('buku/' . $b->kode_buku) }}" class="dropdown-item kode-buku-item">
                                        {{ $b->kode_buku }} - {{ $b->judul }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">
                    <div class="col-lg 8">
                        <div class="card shadow mb-4">
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap justify-content-start">
                                    @foreach ($buku as $b)
                                        @if ($b) <!-- Check if $b is valid -->
                                            <div class="card m-2" style="width: 180px;">
                                                <div class="card-body text-center">
                                                    @if ($b->data_gambar)
                                                        <img src="data:image/jpeg;base64,{{ base64_encode($b->data_gambar) }}"
                                                            alt="{{ $b->nama_file }}"
                                                            class="img-fluid mb-2"
                                                            style="width: 120px; height: 150px; cursor: pointer; border-radius: 20px">
                                                        <div class="card-title mt-2">{{ $b->judul }}</div>     <a href="{{ url('buku/' . $b->kode_buku) }}" class="btn btn-primary btn-sm mt-2">Pinjam</a>
                                                    @else
                                                        <p>No image</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="container-fluid">
                    <div class="col-lg 12">
                        <div class="card shadow mb-3">
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap justify-content-start">
                                    @foreach ($buku as $b)
                                        @if ($b) <!-- Check if $b is valid -->
                                            <div class="card m-2" style="width: 180px;">
                                                <div class="card-body text-center">
                                                    @if ($b->data_gambar)
                                                        <img src="data:image/jpeg;base64,{{ base64_encode($b->data_gambar) }}"
                                                            alt="{{ $b->nama_file }}"
                                                            class="img-fluid mb-2"
                                                            style="width: 120px; height: 150px; cursor: pointer; border-radius: 20px">
                                                        <div class="card-title mt-2">{{ $b->judul }}</div>
                                                        <a href="{{ url('buku/' . $b->kode_buku) }}" class="btn btn-primary btn-sm mt-2">Detail</a>
                                                    @else
                                                        <p>No image</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </div>
                
                    <style>
  .card-body {
            padding: 20px; /* Add padding inside the card body */
        }
        .chart-area {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Add spacing between images */
        }
        .chart-area img {
            width: 130px;
            height: 170px;
            border: 2px solid #dee2e6; /* Add border around images */
            border-radius: 4px; /* Optional: Rounded corners */
        }
                .fixed-size-img {
                    width: 100%; /* Lebar gambar 100% dari kontainer */
                    height: 220px; /* Tinggi otomatis sesuai dengan rasio gambar */
                    max-width: 150px; /* Maksimal lebar gambar */
                    max-height: 250px; /* Maksimal tinggi gambar */
                }
       
                    </style>
                    <!-- Content Row -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Close dropdown when clicking outside the search bar
                            document.addEventListener('click', function(event) {
                                const searchInput = document.getElementById('searchKodeBuku');
                                const dropdown = document.getElementById('kodeBukuDropdown');
                                
                                if (!searchInput.contains(event.target) && !dropdown.contains(event.target)) {
                                    dropdown.style.display = 'none';
                                }
                            });
                        });
                        
                        function searchBooks() {
                            let input = document.getElementById('searchKodeBuku').value.toLowerCase();
                            let dropdown = document.getElementById('kodeBukuDropdown');
                            let items = dropdown.getElementsByClassName('kode-buku-item');
                            
                            let found = false;
                        
                            // Hide dropdown if input is cleared
                            if (input === "") {
                                dropdown.style.display = "none";
                                return;
                            }
                        
                            // Loop through all dropdown items and hide those that don't match the input
                            for (let i = 0; i < items.length; i++) {
                                let itemText = items[i].textContent.toLowerCase();
                                if (itemText.includes(input)) {
                                    items[i].style.display = "block";
                                    found = true;
                                } else {
                                    items[i].style.display = "none";
                                }
                            }
                        
                            // Show dropdown if matching results are found, otherwise hide it
                            dropdown.style.display = found ? "block" : "none";
                        }
                        </script>
                </div>
                
                        </div>

                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    @include('assets.footer')