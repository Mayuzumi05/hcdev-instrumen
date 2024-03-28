<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumen III</title>
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                        <li class="list">
                            <a href="homebom" class="nav-link">
                                <img src="img/bom-grey.svg" alt="">
                                <span class="link">Bill Of Material</span>
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
                        @foreach ($unit as $item)
                        <li class="card">
                            <div style="display:flex;">
                                <img src="img/factory.svg" style="width:24px;margin:24px 0 0 24px;"alt="">
                                <p class="body-1" style="margin:24px 0 0 8px;">{{$item->nama_unit}}</p>
                            </div>
                            @foreach ($barang as $b)
                            <?php $total = $b->where('lokasi', $item->id)->count();?>
                            @endforeach
                            <div style="display:flex;padding:24px 0 0 24px;align-items:end;">
                                <p class="h4" style="margin-bottom:0;">{{$total}}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
            <div class="section" style="padding:24px 40px;margin:40px 0;">
                <p class="h5" style="color:#489742;margin:0;">Riwayat Perpindahan</p>
                <div style="display:flex;margin:24px 0;">
                    <img class="img-search" src="img/Search.svg" alt="">
                    <input id="search-bar" type="text" placeholder="Pencarian">
                    <button class="btn-filter" style="margin-left:16px;display:flex;" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="body-2">Filter</p>
                        <img src="img/filter.svg" style="height:24px;width:24px;" alt="">
                    </button>
                    <ul class="dropdown-menu">
                        <li style="padding:8px 16px;">
                            <p class="body-2" style="color:#404252;">Rentang Tanggal</p>
                        </li>
                        <li style="padding:8px 16px;">
                            <div style="display:flex;align-items:center;">
                                <input class="range-date" type="date">
                                <p class="caption" style="margin:0 8px;color:#8F959D;">s/d</p>
                                <input class="range-date" type="date">
                            </div>
                        </li>
                    </ul>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr style="background:#4abdac;">
                            <th scope="col">No.</th>
                            <th scope="col">Tanggal Perpindahan</th>
                            <th scope="col">Jumlah Barang</th>
                            <th scope="col">Unit Penerima</th>
                        </tr>
                    </thead>
                    <tbody id="history-table" style="cursor:pointer;">
                        <?php $no = 1; ?>
                        @foreach ($transaksi as $item)
                        <tr data-bs-toggle="modal" data-bs-target="#detailRiwayatModal{{ $item->id }}" class="transaksi-modal" data-id="{{ $item->id }}" data-url="{{ route('fetchhome', $item->id) }}">
                            <td scope="row">{{ $no ++ }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->jumlah_barang }}</td>
                            <td>{{ $item->nama_unit }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="display:flex;direction:rtl;margin:16px 0 0 0;">
                    <img src="img/arrow-right.svg" alt="">
                    <a href="history" class="body-2" style="text-decoration:none;margin-right:0;color:#404252;line-height: 24px;margin-right:8px;">Lihat Selengkapnya</a>
                </div>
            </div>
            <p class="body-2" style="margin:32px 0 0 0;text-align: center;color:#777986;">Copyright @Petrokimia Gresik 2023. All Rights Reserved.</p>
        </div>
        @foreach ($transaksi as $t)
        <div class="modal fade" id="detailRiwayatModal{{ $t->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
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
                                <input type="text" class="form-control" id="recipient-name" value="{{ $t->created_at }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Jumlah Barang</label>
                                <input type="text" class="form-control" id="recipient-name" value="{{ $t->jumlah_barang }}" disabled>
                            </div>
                        </form>
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Unit Penerima</label>
                                <input type="text" class="form-control" id="recipient-name" value="{{ $t->nama_unit }}" disabled>
                            </div>
                        </form>
                    </div>
                    <table class="table">
                        <thead>
                            <tr style="background:#4abdac;">
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah Dikirim</th>
                                <th scope="col">Unit Pemilik</th>
                            </tr>
                        </thead>
                        <tbody class="history-detail-{{ $t->id }}">
                            <input type="hidden" name="transaksi_id" id="transaksi_id" value="{{ $t->id }}">
                            <tr>
                                <td id="nama-barang"></td>
                                <td id="jumlah-barang"></td>
                                <td id="unit-pemilik"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        
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
    <script>
        $(document).ready(function (){

            $('.transaksi-modal').click(function () {
                // var kodeTransaksi = document.getElementById("#transaksi_id").value;

                // console.log(kodeTransaksi); 

                
                var kodeTransaksi = $(this).data('id');

                console.log(kodeTransaksi)
                $('#detailRiwayatModal' + kodeTransaksi).modal('show');
                
                // $.get(kodeTransaksi, function(data){
                //     $('#nama-barang').text(data.nama_barang);
                //     $('#jumlah-barang').text(data.jumlah_barang);
                //     $('#unit-pemilik').text(data.nama_unit);
                // })

                $.ajax({
                    type: "GET",
                    url: "/home/" + kodeTransaksi,
                    dataType: "json",
                    success: function (response) {
                        $('.history-detail-' + kodeTransaksi).html("");
                        var listElement = ""
                        $.each(response, function (key, item) {
                            listElement += `
                                <tr>
                                    <td>${item.nama_barang}</td>
                                    <td>${item.jumlah_barang}</td>
                                    <td>${item.nama_unit}</td>
                                </tr>
                            `
                        });  
                        $('.history-detail-' + kodeTransaksi).append(listElement);
                    }
                });

            });
        });
    </script>
</body>
</html>