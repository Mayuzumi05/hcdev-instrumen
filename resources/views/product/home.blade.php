<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumen III</title>
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <link href="img/icon.svg" rel="shortcut icon"/>
</head>
<body style="background-color: #F9FEF6;">
    <div class="isi">
        <nav>
            <div class="navigation">
                <div class="logo" style="float:left;width:50%;">
                    <i class="bx bx-menu menu-icon"></i>
                    <a href="home">
                        <img src="img/logo.png" style="height:40px" alt="">
                    </a>
                </div>
                <div class="right-nav" style="margin-right:40px;">
                    <img class="img-search" src="img/Search.svg" alt="">
                    <input class="main-search-bar" type="text" placeholder="Pencarian">
                    <div class="dropdown">
                        <img src="img/notification.svg" style="margin:0 24px;width:24px;cursor:pointer;" data-bs-toggle="dropdown" aria-expanded="false" alt="">
                        <ul class="dropdown-menu">
                            <li style="display:flex;justify-content:space-between;padding:8px 16px;align-items:center;">
                                <p class="body-1">Notifikasi</p>
                                <button id="sudah-dibaca">Tandai sudah dibaca</button>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="notification-list--unread" style="padding:8px 16px;">
                                <div style="display:flex;">
                                    <img src="img/persona-1.svg" style="width:40px;height:40px;border-radius:300px;" alt="">
                                    <div>
                                        <p class="body-2" style="margin-left:16px;">
                                            <span style="color:#404252;">Himawan Alan Novianto</span>
                                            <span style="color:#777986;">ingin bergabung ke</span>
                                            <a style="color:#1B954C;text-decoration:none;" href="user">Data Pengguna</a>
                                        </p>
                                        <p class="caption" style="color:#777986;margin:4px 0 0 16px;" >5 menit yang lalu</p>
                                    </div>
                                </div>
                                <div style="margin:8px 0 0 56px;">
                                    <button class="btn-tolak" data-bs-toggle="modal" data-bs-target="#tolakModal">Tolak</button>
                                    <button class="btn-terima" data-bs-toggle="modal" data-bs-target="#simpanModal">Terima</button>
                                </div>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="notification-list" style="padding:8px 16px;">
                                <div style="display:flex;">
                                    <img src="img/persona-1.svg" style="width:40px;height:40px;border-radius:300px;" alt="">
                                    <div>
                                        <p class="body-2" style="margin-left:16px;">
                                            <span style="color:#404252;">Bambang Sugeni</span>
                                            <span style="color:#777986;">telah ditambahkan ke</span>
                                            <a style="color:#1B954C;text-decoration:none;" href="user">Data Pengguna</a>
                                        </p>
                                        <p class="caption" style="color:#777986;margin:4px 0 0 16px;" >1 hari yang lalu</p>
                                    </div>
                                </div>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li style="display:flex;justify-content:center;padding:8px 16px;">
                                <a class="body-2" style="color:#1B954C;text-decoration:none;" href="notification" >Lihat Semua</a>
                            </li>
                        </ul>
                    </div>
                    <div class="box photo-profile">
                        <a href="setting">
                            <img src="img/persona-1.jpg" style="object-fit:cover;width:100%;height:100%;border-radius:4px;" alt="">
                        </a>
                    </div>
                    @foreach ($user as $item)
                    <div class="name-unit">
                        <p class="body-2" style="margin-bottom:4px;color:#1D242A;">{{ $item->name }}</p>
                        <p class="body-2" style="color:#B3B5BD;">{{ $item->nama_unit }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="sidebar">
                <div class="logo">
                    <i class="bx bx-menu menu-icon"></i>
                    <img src="img/logo.png" style="height:40px" alt="">
                </div>
                <div class="sidebar-content">
                    <ul class="lists">
                        <li class="list">
                            <a href="home" class="nav-link">
                                <img src="img/home.svg" alt="">
                                <span class="link">Beranda</span>
                            </a>
                        </li>
                        @if (auth()->user()->unit_bagian == 8)
                        <li class="list">
                            <a href="user" class="nav-link">
                                <img src="img/user.svg" alt="">
                                <span class="link">Pengguna</span>
                            </a>
                        </li>
                        @endif
                        @if (auth()->user()->unit_bagian != 8)
                        <li class="list">
                            <a href="pindah" class="nav-link">
                                <img src="img/deliver.svg" alt="">
                                <span class="link">Pindah Barang</span>
                            </a>
                        </li>
                        @endif
                        <li class="list">
                            <a href="barang" class="nav-link">
                                <img src="img/instrument.svg" alt="">
                                <span class="link">Data Barang</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="history" class="nav-link">
                                <img src="img/history.svg" alt="">
                                <span class="link">Riwayat Perpindahan</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="notification" class="nav-link">
                                <img src="img/notification.svg" alt="">
                                <span class="link">Notifikasi</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="setting" class="nav-link">
                                <img src="img/setting.svg" alt="">
                                <span class="link">Pengaturan</span>
                            </a>
                        </li>
                    </ul>
                    <div class="bottom-cotent">
                        <li class="list">
                            <a href="{{route('logout')}}" class="nav-link">
                                <img src="img/logout.svg" alt="">
                                <span class="link">Logout</span>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
        <div class="konten">
            <p class="h5" style="color:#489742;">Beranda</p>
            <div style="display:flex;justify-content:space-between;color:#777986;">
                <p class="body-1">Selamat datang di sistem monitoring perpindahan barang di Instrumen III</p>
                <p class="body-1">Beranda</p>
            </div>
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"></i>
                    <ul class="carousel">
                        <li class="card">
                            <div style="display:flex;">
                                <img src="img/factory.svg" style="width:24px;margin:24px 0 0 24px;"alt="">
                                <p class="body-1" style="margin:24px 0 0 8px;">Shop</p>
                            </div>
                            <div style="display:flex;padding:24px 0 0 24px;align-items:end;">
                                <p class="h4" style="margin-bottom:0;">400</p>
                            </div>
                        </li>
                        <li class="card">
                            <div style="display:flex;">
                                <img src="img/factory.svg" style="width:24px;margin:24px 0 0 24px;"alt="">
                                <p class="body-1" style="margin:24px 0 0 8px;">ZA II</p>
                            </div>
                            <p class="h4" style="margin:24px 0 0 24px;">200</p>
                        </li>
                        <li class="card">
                            <div style="display:flex;">
                                <img src="img/factory.svg" style="width:24px;margin:24px 0 0 24px;"alt="">
                                <p class="body-1" style="margin:24px 0 0 8px;">PA II</p>
                            </div>
                            <p class="h4" style="margin:24px 0 0 24px;">200</p>
                        </li>
                        <li class="card">
                            <div style="display:flex;">
                                <img src="img/factory.svg" style="width:24px;margin:24px 0 0 24px;"alt="">
                                <p class="body-1" style="margin:24px 0 0 8px;">SA II</p>
                            </div>
                            <p class="h4" style="margin:24px 0 0 24px;">200</p>
                        </li>
                        <li class="card">
                            <div style="display:flex;">
                                <img src="img/factory.svg" style="width:24px;margin:24px 0 0 24px;"alt="">
                                <p class="body-1" style="margin:24px 0 0 8px;">UBB</p>
                            </div>
                            <p class="h4" style="margin:24px 0 0 24px;">200</p>
                        </li>
                        <li class="card">
                            <div style="display:flex;">
                                <img src="img/factory.svg" style="width:24px;margin:24px 0 0 24px;"alt="">
                                <p class="body-1" style="margin:24px 0 0 8px;">PA I</p>
                            </div>
                            <p class="h4" style="margin:24px 0 0 24px;">200</p>
                        </li>
                        <li class="card">
                            <div style="display:flex;">
                                <img src="img/factory.svg" style="width:24px;margin:24px 0 0 24px;"alt="">
                                <p class="body-1" style="margin:24px 0 0 8px;">SA I</p>
                            </div>
                            <p class="h4" style="margin:24px 0 0 24px;">200</p>
                        </li>
                        <li class="card">
                            <div style="display:flex;">
                                <img src="img/factory.svg" style="width:24px;margin:24px 0 0 24px;"alt="">
                                <p class="body-1" style="margin:24px 0 0 8px;">Alf</p>
                            </div>
                            <p class="h4" style="margin:24px 0 0 24px;">400</p>
                        </li>
                    </ul>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
            <div class="section" style="padding:24px 40px;">
                <p class="h5" style="color:#489742;">Riwayat Perpindahan</p>
                <div style="display:flex;margin:24px 0;">
                    <img class="img-search" src="img/Search.svg" alt="">
                    <input id="search-bar" type="text" placeholder="Pencarian">
                    <button class="btn-filter" style="margin-left:16px;display:flex;">
                        <p class="body-2">Filter</p>
                        <img src="img/filter.svg" style="height:16px;width:16px;" alt="">
                    </button>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr style="background:#4abdac;">
                            <th scope="col">
                                <input type="checkbox" onclick="toggle(this);">
                            </th>
                            <th scope="col">No.</th>
                            <th scope="col">Tanggal Perpindahan</th>
                            <th scope="col">Unit Pemilik</th>
                            <th scope="col">Nama Penerima</th>
                            <th scope="col">Unit Penerima</th>
                        </tr>
                    </thead>
                    <tbody style="cursor:pointer;">
                        <tr data-bs-toggle="modal" data-bs-target="#detailRiwayatModal">
                            <td>
                                <input type="checkbox" name="check-tbl">
                            </td>
                            <td scope="row">1</td>
                            <td>10-08-2023</td>
                            <td>Himawan Alan Novianto</td>
                            <td>Shop</td>
                            <td>Alan Novianto</td>
                        </tr>
                        <tr data-bs-toggle="modal" data-bs-target="#detailRiwayatModal">
                            <td>
                                <input type="checkbox" name="check-tbl">
                            </td>
                            <td scope="row">2</td>
                            <td>10-08-2023</td>
                            <td>Himawan Alan Novianto</td>
                            <td>Shop</td>
                            <td>Alan Novianto</td>
                        </tr>
                        <tr data-bs-toggle="modal" data-bs-target="#detailRiwayatModal">
                            <td>
                                <input type="checkbox" name="check-tbl">
                            </td>
                            <td scope="row">3</td>
                            <td>10-08-2023</td>
                            <td>Himawan Alan Novianto</td>
                            <td>Shop</td>
                            <td>Alan Novianto</td>
                        </tr>
                    </tbody>
                </table>
                <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->
            </div>
            <p class="body-2" style="margin:32px 0 0 0;text-align: center;color:#777986;">Copyright @Petrokimia Gresik 2023. All Rights Reserved.</p>
        </div>
        <div class="modal fade" id="detailRiwayatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body" style="padding:24px;">
                    <div style="display:flex;justify-content:space-between;">
                        <p class="h6" style="margin-bottom:0;line-height:24px;">Detail Perpindahan Barang</p>
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <div style="display:flex;justify-content:space-between;margin:16px 0 24px 0;">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tanggal</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Pemberi</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Unit Pemberi</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </form>
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Penerima</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Unit Penerima</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </form>
                    </div>
                    <table class="table">
                        <thead>
                            <tr style="background:#4abdac;">
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah Dikirim</th>
                                <th scope="col">Jumlah Tersisa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" style="max-width: 32ch;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">PI LOKAL 25KG (GAUGE PRESS;100MM;0-25KG/CM2;1/2NPT;BTM)</td>
                                <td>6</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td scope="row" style="max-width: 32ch;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">HFS-25 WATER FLOW CONTROL 1' NPT 10KG 100C SPDT 15A 250V</td>
                                <td>2</td>
                                <td>9</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        
    </div>
    <section class="overlay"></section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

        menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
            navBar.classList.toggle("open");
        });
        });

        overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
     });
    </script>
    <script>
        const wrapper = document.querySelector(".wrapper");
        const carousel = document.querySelector(".carousel");
        const firstCardWidth = carousel.querySelector(".card").offsetWidth;
        const arrowBtns = document.querySelectorAll(".wrapper i");
        const carouselChildrens = [...carousel.children];
        let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;
        // Get the number of cards that can fit in the carousel at once
        let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);
        // Insert copies of the last few cards to beginning of carousel for infinite scrolling
        carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
            carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
        });
        // Insert copies of the first few cards to end of carousel for infinite scrolling
        carouselChildrens.slice(0, cardPerView).forEach(card => {
            carousel.insertAdjacentHTML("beforeend", card.outerHTML);
        });
        // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
        // Add event listeners for the arrow buttons to scroll the carousel left and right
        arrowBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
            });
        });
        const dragStart = (e) => {
            isDragging = true;
            carousel.classList.add("dragging");
            // Records the initial cursor and scroll position of the carousel
            startX = e.pageX;
            startScrollLeft = carousel.scrollLeft;
        }
        const dragging = (e) => {
            if(!isDragging) return; // if isDragging is false return from here
            // Updates the scroll position of the carousel based on the cursor movement
            carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
        }
        const dragStop = () => {
            isDragging = false;
            carousel.classList.remove("dragging");
        }
        const infiniteScroll = () => {
            // If the carousel is at the beginning, scroll to the end
            if(carousel.scrollLeft === 0) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
                carousel.classList.remove("no-transition");
            }
            // If the carousel is at the end, scroll to the beginning
            else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = carousel.offsetWidth;
                carousel.classList.remove("no-transition");
            }
            // Clear existing timeout & start autoplay if mouse is not hovering over carousel
            clearTimeout(timeoutId);
            if(!wrapper.matches(":hover")) autoPlay();
        }
        const autoPlay = () => {
            if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
            // Autoplay the carousel after every 2500 ms
            timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
        }
        autoPlay();
        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("mousemove", dragging);
        document.addEventListener("mouseup", dragStop);
        carousel.addEventListener("scroll", infiniteScroll);
        wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
        wrapper.addEventListener("mouseleave", autoPlay);
    </script>
    <script language="JavaScript">
        function toggle(source) {
            checkboxes = document.getElementsByName('check-tbl');
            for(var i=0, n=checkboxes.length;i<n;i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
    <script>
        // Fungsi untuk mengubah kelas elemen
        function ubahKelas() {
            var elements = document.querySelectorAll('.dropdown-menu .notification-list--unread');

            elements.forEach(function(elements) {
                elements.classList.toggle('notification-list');
            });
        }
        // Menambahkan event listener untuk tombol
        document.getElementById('sudah-dibaca').addEventListener('click', ubahKelas);
  </script>
</body>
</html>