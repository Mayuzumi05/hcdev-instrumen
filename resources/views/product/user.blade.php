<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumen III</title>
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                    <div class="name-unit">
                        <p class="body-2" style="margin-bottom:4px;color:#1D242A;">Himawan Alan Novianto</p>
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
            <p class="h5" style="color:#489742;">Daftar Pengguna</p>
            <div style="display:flex;justify-content:space-between;color:#777986;">
                <p class="body-1">Sistem pengelolaan data pengguna</p>
                <p class="body-1">Pengguna</p>
            </div>
            <div class="section" style="padding:24px 40px;margin:40px 0;">
                <p class="h5" style="color:#489742;">Data Pengguna</p>
                <div style="display:flex;margin:24px 0;justify-content:space-between;">
                    <div style="display:flex;">
                        <img class="img-search" src="img/Search.svg" alt="">
                        <input id="search-bar" type="text" placeholder="Pencarian">
                        <button class="btn-filter" style="margin-left:16px;display:flex;" data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="body-2">Filter</p>
                            <img src="img/filter.svg" style="height:24px;width:24px;" alt="">
                        </button>
                        <ul class="dropdown-menu" style="max-height:200px;">
                            <li style="padding:8px 16px;display:flex;">
                                <p class="body-2">Unit</p>
                            </li>
                            <li style="padding:8px 16px;display:flex;">
                                <input class="cb-filter" type="checkbox">
                                <p class="body-2">SA I</p>
                            </li>
                            <li style="padding:8px 16px;display:flex;">
                                <input class="cb-filter" type="checkbox">
                                <p class="body-2">SA I</p>
                            </li>
                            <li style="padding:8px 16px;display:flex;">
                                <input class="cb-filter" type="checkbox">
                                <p class="body-2">SA I</p>
                            </li>
                            <li style="padding:8px 16px;display:flex;">
                                <input class="cb-filter" type="checkbox">
                                <p class="body-2">SA I</p>
                            </li>
                            <li style="padding:8px 16px;display:flex;">
                                <input class="cb-filter" type="checkbox">
                                <p class="body-2">SA I</p>
                            </li>
                            <li style="padding:8px 16px;display:flex;">
                                <input class="cb-filter" type="checkbox">
                                <p class="body-2">SA I</p>
                            </li>
                            <li style="padding:8px 16px;display:flex;">
                                <input class="cb-filter" type="checkbox">
                                <p class="body-2">SA I</p>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <button class="btn-tambah-data" data-bs-toggle="modal" data-bs-target="#tambahPenggunaModal">
                            <img src="img/plus.svg" alt="">
                            <p class="body-2">Tambah Data</p>
                        </button>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr style="background:#4abdac;" >
                            <th scope="col">
                                <input type="checkbox" onclick="toggle(this);">
                            </th>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Unit Bagian</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="user-table" style="cursor:pointer;">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($user as $item)
                        <tr data-bs-toggle="modal" data-bs-target="#detailPenggunaModal{{ $item->id }}">
                            <td>
                                <input type="checkbox" name="check-tbl">
                            </td>
                            <td scope="row">{{ $no ++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->NIK }}</td>
                            <td>{{ $item->nama_unit }}</td>
                            <td>{{ $item->no_telepon }}</td>
                            <td>
                                <img src="img/delete-icon.svg" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#hapusModal{{ $item->id }}" alt="">
                                <img src="img/view-icon.svg" style="cursor:pointer;" alt="">
                            </td>
                        </tr>
                        @endforeach
                        <tr data-bs-toggle="modal" data-bs-target="#detailPenggunaModal">
                            <td>
                                <input type="checkbox" name="check-tbl">
                            </td>
                            <td scope="row">2</td>
                            <td>Bambang Sugeni</td>
                            <td>0987654321098765</td>
                            <td>SA I</td>
                            <td>089876543210</td>
                            <td>
                                <button class="btn-tolak" data-bs-toggle="modal" data-bs-target="#tolakModal">Tolak</button>
                                <button class="btn-terima" data-bs-toggle="modal" data-bs-target="#simpanModal">Terima</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="body-2" style="margin:32px 0 0 0;text-align: center;color:#777986;">Copyright @Petrokimia Gresik 2023. All Rights Reserved.</p>
        </div>
        @foreach ($user as $a)
        <div class="modal fade" id="hapusModal{{ $a->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div style="display:flex;direction:rtl;">
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;margin:24px 24px 0 0;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <img src="img/story-delete.svg" style="width:240px;margin:48px auto;" alt="">
                    <p class="h6" style="margin:0 auto;">Apakah anda yakin ingin menghapus item ini?</p>
                    <form action="user/destroy/{{$a->id}}" method="GET">
                        @csrf
                        <div class="modal-foot" style="margin:16px;">
                            <button type="button" class="btn-kembali" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn-konfirmasi-hapus">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @foreach ($user as $b)
        <div class="modal fade" id="detailPenggunaModal{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body" style="padding:24px;">
                    <div style="display:flex;direction:rtl;">
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <div style="display:flex;justify-content:center;">
                        <img class="edit-profile" src="img/persona-1.svg" alt="">
                    </div>
                    <div style="display:flex;justify-content:space-between;">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama</label>
                                <input type="text" class="form-control" id="recipient-name" value="{{ $b->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">NIK</label>
                                <input type="text" class="form-control" id="recipient-name" value="{{ $b->NIK }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Unit Bagian</label>
                                <input type="text" class="form-control" id="recipient-name" value="{{ $b->unit_bagian }}" disabled>
                            </div>
                        </form>
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="recipient-name" value="{{ $b->no_telepon }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="recipient-name" value="{{ $b->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Username</label>
                                <input type="text" class="form-control" id="recipient-name" value="{{ $b->username }}" disabled>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="modal fade" id="tambahPenggunaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body" style="padding:24px;">
                    <div style="display:flex;direction:rtl;">
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <div style="display:flex;justify-content:center;">
                        <img class="edit-profile" src="img/persona-1.svg" alt="">
                    </div>
                    <div style="display:flex;justify-content:space-between;">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">NIK</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Unit Bagian</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Jabatan</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </form>
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Alamat</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div style="margin:24px 0 8px 0;display:flex;direction:rtl;">
                        <button type="button" class="btn-simpan" data-bs-toggle="modal" data-bs-target="#simpanModal">Simpan</button>
                        <button type="button" class="btn-kembali" data-bs-dismiss="modal">Kembali</button>
                    </div>
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
                    <p class="h6" style="margin:0 auto;">Apakah anda yakin ingin menerima akun ini?</p>
                    <div class="modal-foot" style="margin:16px;">
                        <button type="button" class="btn-kembali" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn-simpan">Terima</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="tolakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div style="display:flex;direction:rtl;">
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;margin:24px 24px 0 0;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <img src="img/story-reject.svg" style="width:240px;height:160px;margin:48px auto;" alt="">
                    <p class="h6" style="margin:0 auto;">Apakah anda yakin ingin menolak akun ini?</p>
                    <div class="modal-foot" style="margin:16px;">
                        <button type="button" class="btn-kembali" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn-konfirmasi-hapus">Tolak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="overlay"></section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
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
        
        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        })
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
        $(document).ready(function(){
        $("#search-bar").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#user-table tr").filter(function() {	
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>
</body>
</html>