<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" />

<nav class="navbar">
    <div class="container">
        <div class="logo"><img src="images/logo.png" alt="LOGO"></div>
        <div class="push-left">
            <button id="menu-toggler" data-class="menu-active" class="hamburger">
                <span class="hamburger-line hamburger-line-top"></span>
                <span class="hamburger-line hamburger-line-middle"></span>
                <span class="hamburger-line hamburger-line-bottom"></span>
            </button>

            <!--  Menu compatible with wp_nav_menu  -->
            <ul id="primary-menu" class="menu nav-menu">
                <li class="menu-item current-menu-item"><a class="nav__link"  href="../index.php"> <i class="fa fa-home"></i> Home</a></li>
                <!-- <li class="menu-item current-menu-item"><a class="nav__link"  href="gallery.php">Gallery</a></li>
                <li class="menu-item dropdown"><a class="nav__link" >Services</a>
                    <ul class="sub-nav" >
                    <li><a class="sub-nav__link" href="break-repair.php">Brake repair</a></li>
                    <li><a class="sub-nav__link" href="tire-repair.php">Tire repair</a></li>
                    <li><a class="sub-nav__link" href="engine-repair.php">Engine repair</a></li>
                    <li><a class="sub-nav__link" href="battery-repair.php">Battery repair</a></li>
                    <li><a class="sub-nav__link" href="steering-repair.php">Steering repair</a></li>
                    </ul>

                </li>
                <li class="menu-item "><a class="nav__link"  href="book.php">Book appointments</a> -->

                </li>
            </ul>

            <div class="dropdown" style=" display: inline-block; ">
                <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="flag-icon flag-icon-us me-1"></span> <span>English</span></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dropdown-item active" href="#"><span class="flag-icon flag-icon-us me-1"></span> <span>English</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-af me-1"></span> <span>Dari</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-af me-1"></span> <span>Pushto</span></a>
                    </li>

                </ul>
            </div>

        </div>

    </div>
    </div>
</nav>

<script>
    if ($(".dropdown").length) {
        $(document).on("click", ".dropdown-menu .dropdown-item", function (e) {
            e.preventDefault();
            if (!$(this).hasClass("active")) {
                var swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-danger me-3",
                    },
                    buttonsStyling: false,
                });
                swalWithBootstrapButtons
                    .fire({
                        title: "Are you sure?",
                        text: "Do you really want to change your current language!",
                        icon: "warning",
                        confirmButtonText: "<i class='fas fa-check-circle me-1'></i> Yes, I am!",
                        cancelButtonText: "<i class='fas fa-times-circle me-1'></i> No, I'm Not",
                        showCancelButton: true,
                        reverseButtons: true,
                        focusConfirm: true,
                    })
                    .then((result) => {
                        if (result.isConfirmed) {
                            if (!$(this).hasClass("active")) {
                                $(".dropdown-menu .dropdown-item").removeClass("active");
                                $(this).addClass("active");
                                $(this)
                                    .parents(".dropdown")
                                    .find(".btn")
                                    .html("<span class='flag-icon flag-icon-us me-1'></span>" + $(this).text());
                            }
                            Swal.fire({
                                icon: "success",
                                title: "Amazing!",
                                text: "Your current language has been changed successfully.",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    });
            }
        });
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>