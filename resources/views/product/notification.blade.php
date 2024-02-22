<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumen III</title>
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                            <li style="display:flex;justify-content:space-between;padding:8px 16px;">
                                <p class="body-1">Notifikasi</p>
                                <p class="body-2" style="color:#007DD1;">Tandai sudah dibaca</p>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li style="padding:8px 16px;">
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
                            <li style="padding:8px 16px;">
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
                    @foreach ($userwithid as $item)
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
                            <a href="login" class="nav-link">
                                <img src="img/logout.svg" alt="">
                                <span class="link">Logout</span>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
        <div class="konten">
            <p class="h5" style="color:#489742;">Notifikasi</p>
            <div style="display:flex;justify-content:space-between;color:#777986;margin-bottom:40px">
                <p class="body-1">Lihat semua notifikasi yang masuk ke akun anda</p>
                <p class="body-1">Notifikasi</p>
            </div>
            @foreach ($notification as $item)
            <div style="display:flex;">
                <p class="body-2" style="color:#777986;margin:auto 0;">{{$item->created_at}}</p>
                <div style="display:flex;width:64px;position:relative;">
                    <div class="vertical-line"></div>
                    <div class="circle-border"></div>
                </div>
                @if ($item->id_tipe == 1)
                <div class="isi-notifikasi">
                    <span class="circle-solid"></span>
                    <div style="margin:auto 0;">
                        <div style="display:flex;margin-bottom:4px;">
                            <p class="body-2" style="color:#404252;margin-right:2px;">{{$item->name}} dari {{$item->nama_unit}}</p>
                            <p class="body-2" style="color:#777986;margin-right:2px;">Telah Mengambil Barang Dari</p>
                            <a class="body-2" style="color:#31C453;text-decoration:none;" href="history">Unit Anda</a>
                        </div>
                        <p class="body-2" style="color:#B3B5BD;">{{$item->created_at}}</p>
                    </div>
                </div>
                @elseif ($item->id_tipe == 2)
                <div class="isi-notifikasi">
                    <span class="circle-solid"></span>
                    <div style="margin:auto 0;">
                        <div style="display:flex;margin-bottom:4px;">
                            <p class="body-2" style="color:#404252;margin-right:2px;">Anda</p>
                            <p class="body-2" style="color:#B3B5BD;margin-right:2px;">Telah Mengambil</p>
                            <a class="body-2" style="color:#31C453;text-decoration:none;" href="history">Barang</a>
                        </div>
                        <p class="body-2" style="color:#B3B5BD;">{{$item->created_at}}</p>
                    </div>
                </div>
                @elseif ($item->id_tipe == 3)
                    @if ($item->id_transaksi == 1 )
                    <div class="isi-notifikasi">
                        <span class="circle-solid"></span>
                        <div style="margin:auto 0;">
                            <div style="display:flex;margin-bottom:4px;">
                                <p class="body-2" style="color:#404252;margin-right:2px;">{{$item->name}}</p>
                                <p class="body-2" style="color:#777986;margin-right:2px;">Ingin Bergabung Ke</p>
                                <a class="body-2" style="color:#31C453;text-decoration:none;" href="user">Data Pengguna</a>
                            </div>
                            <p class="body-2" style="color:#B3B5BD;">{{$item->created_at}}</p>
                        </div>
                    </div>
                    @elseif ($item->id_transaksi == 0)
                    <div class="isi-notifikasi">
                        <span class="circle-solid"></span>
                        <div style="margin:auto 0;">
                            <div style="display:flex;margin-bottom:4px;">
                                <p class="body-2" style="color:#404252;margin-right:2px;">{{$item->name}}</p>
                                <p class="body-2" style="color:#777986;margin-right:2px;">Telah Ditambahkan Ke</p>
                                <a class="body-2" style="color:#31C453;text-decoration:none;" href="user">Data Pengguna</a>
                            </div>
                            <p class="body-2" style="color:#B3B5BD;">{{$item->created_at}}</p>
                        </div>
                    </div>
                    @endif
                @endif
            </div>
            @endforeach
            <p class="body-2" style="margin:32px 0 0 0;text-align: center;color:#777986;">Copyright @Petrokimia Gresik 2023. All Rights Reserved.</p>
        </div>
    </div>
    <section class="overlay"></section>
    <!-- <div>
        <nav class="nav-custom">
            <div class="data-pribadi">
                <p class="nama">Himawan Alan Novianto</p>
                <p class="nrp">2110191002</p>
            </div>
        </nav>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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
</body>
</html>