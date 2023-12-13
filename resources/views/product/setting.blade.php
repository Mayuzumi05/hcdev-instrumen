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
                    <div class="name-unit">
                        <p class="body-2" style="margin-bottom:4px;color:#1D242A;">{{ auth()->user()->name }}</p>
                        <p class="body-2" style="color:#B3B5BD;">Instrumen III</p>
                    </div>
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
            <p class="h5" style="color:#489742;">Pengaturan</p>
            <div style="display:flex;justify-content:space-between;color:#777986;">
                <p class="body-1">Pengaturan akun pengguna</p>
                <p class="body-1">Pengaturan</p>
            </div>
            <div class="isi-pengaturan">
                <div style="detailAkunContainer">
                    <div class="detail-akun">
                        <p class="h5">Detail Akun</p>
                        <div style="display:flex;align-items:center;">
                            <img class="edit-profile" src="img/persona-1.svg" alt="">
                            <button class="btn-hapus-profil" style="align-items:center;" data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</button>
                        </div>
                        <div style="display:flex;">
                            <div>
                                <p class="body-2">Nama Pengguna</p>
                                <input type="text" class="input-form" name="" id="" style="margin-top:8px;" value="{{ auth()->user()->username }}">
                            </div>
                            <div style="margin-left:16px;">
                                <p class="body-2">Email</p>
                                <input type="text" class="input-form" name="" id="" style="margin-top:8px;" value="{{ auth()->user()->email }}">
                            </div>
                        </div>
                        <div style="display:flex;margin-top:8px;">
                            <div>
                                <p class="body-2">Nama</p>
                                <input type="text" class="input-form" name="" id="" style="margin-top:8px;" value="{{ auth()->user()->name }}">
                            </div>
                            <div style="margin-left:16px;">
                                <p class="body-2">No. Telepon</p>
                                <input type="text" class="input-form" name="" id="" style="margin-top:8px;" value="{{ auth()->user()->no_telepon }}">
                            </div>
                        </div>
                        <div style="display:flex;margin-top:8px;">
                            <div>
                                <p class="body-2">NIK</p>
                                <input type="text" class="input-form" name="" id="" style="margin-top:8px;" value="{{ auth()->user()->NIK }}">
                            </div>
                            <div style="margin-left:16px;">
                                <p class="body-2">Unit Bagian</p>
                                <input type="text" class="input-form" name="" id="" style="margin-top:8px;" value="{{ auth()->user()->unit_bagian }}">
                            </div>
                        </div>
                        <div>
                            <button class="btn-ubah-sandi" data-bs-toggle="modal" data-bs-target="#ubahDetailAkunModal">Ubah Detail Akun</button>
                        </div>
                    </div>
                </div>
                <div class="ubah-kata-sandi">
                    <p class="h5">Ubah Kata Sandi</p>
                    <p class="body-1" style="margin-top:16px;color:#8F959D;">Ubah kata sandi anda kapanpun<br>dengan memasukkan kata sandi baru</p>
                    <div>
                        <button class="btn-ubah-sandi" data-bs-toggle="modal" data-bs-target="#ubahKataSandiModal">Ubah Kata Sandi</button>
                    </div>
                </div>
            </div>
            <p class="body-2" style="margin:32px 0 0 0;text-align: center;color:#777986;">Copyright @Petrokimia Gresik 2023. All Rights Reserved.</p>
        </div>
        <div class="modal fade" id="ubahKataSandiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body">
                    <div style="display:flex;justify-content:space-between;margin:16px 0 16px 0">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Kata Sandi</h5>
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Kata Sandi Sekarang</label>
                            <input type="password" class="form-control" id="recipient-name" >
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Kata Sandi Baru</label>
                            <input type="password" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Masukkan Kata Sandi Baru</label>
                            <input type="password" class="form-control" id="recipient-name">
                        </div>
                    </form>
                    <div style="margin:24px 0 8px 0;display:flex;direction:rtl;">
                        <button type="button" class="btn-simpan" data-bs-toggle="modal" data-bs-target="#simpanModal">Simpan</button>
                        <button type="button" class="btn-kembali" data-bs-dismiss="modal">Kembali</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ubahDetailAkunModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body">
                    <div style="display:flex;justify-content:space-between;margin:16px 0 16px 0">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Detail Akun</h5>
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <form method="POST" action="/setting/update/{{auth()->user()->id}}">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama pengguna</label>
                            <input type="text" class="form-control" id="recipient-name" name="username" value="{{ auth()->user()->username }}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="recipient-name" name="email" value="{{ auth()->user()->email }}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" id="recipient-name" name="name" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="recipient-name" name="no_telepon" value="{{ auth()->user()->no_telepon }}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">NIK</label>
                            <input type="text" class="form-control" id="recipient-name" name="NIK" value="{{ auth()->user()->NIK }}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Unit Bagian</label>
                            <input type="text" class="form-control" id="recipient-name" name="unit_bagian" value="{{ auth()->user()->unit_bagian }}">
                        </div>    
                        <div style="margin:24px 0 8px 0;display:flex;direction:rtl;">
                            <button type="submit" class="btn-simpan" data-bs-toggle="modal" data-bs-target="#simpanModal">Simpan</button>
                            <button type="button" class="btn-kembali" data-bs-dismiss="modal">Kembali</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div style="display:flex;direction:rtl;">
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;margin:24px 24px 0 0;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <img src="img/story-delete.svg" style="width:240px;margin:48px auto;" alt="">
                    <p class="h6" style="margin:0 auto;">Apakah anda yakin ingin menghapus item ini?</p>
                    <div class="modal-foot" style="margin:16px;">
                        <button type="button" class="btn-kembali" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn-konfirmasi-hapus">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="simpanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div style="display:flex;direction:rtl;">
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;margin:24px 24px 0 0;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <img src="img/story-save.svg" style="width:240px;margin:48px auto;" alt="">
                    <p class="h6" style="margin:0 auto;">Apakah anda yakin ingin menyimpan perubahan?</p>
                    <div class="modal-foot" style="margin:16px;">
                        <button type="button" class="btn-kembali" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn-simpan">Simpan</button>
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
</body>
</html>