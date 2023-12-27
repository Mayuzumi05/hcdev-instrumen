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
            <p class="h5" style="color:#489742;" >Data Barang</p>
            <div style="display:flex;justify-content:space-between;color:#777986;">
                <p class="body-1">Sistem pengelolaan data barang di Instrumen III</p>
                <p class="body-1">Data Barang</p>
            </div>
            <div class="section" style="padding:24px 40px;margin:40px 0;">
                <p class="h5" style="color:#489742;">Data Barang</p>
                <div style="display:flex;margin:24px 0;justify-content:space-between;">
                    <div style="display:flex;">
                        <img class="img-search" src="img/Search.svg" alt="">
                        <input id="search-bar" type="text" placeholder="Pencarian">
                        <button class="btn-filter" style="margin-left:16px;display:flex;">
                            <p class="body-2">Filter</p>
                            <img src="img/filter.svg" style="height:24px;width:24px;" alt="">
                        </button>
                    </div>
                    <div style="display:flex">
                        <a href="{{ route('exportbarang') }}" style="text-decoration:none;">
                            <button class="btn-tambah-data">
                                <img src="img/download.svg" style="margin-right:8px;" alt="">
                                <p class="body-2">Export Data</p>
                            </button>
                        </a>
                        <button class="btn-tambah-data" style="margin-left:16px;" data-bs-toggle="modal" data-bs-target="#pilihInputModal">
                            <img src="img/plus.svg" style="margin-right:8px;" alt="">
                            <p class="body-2">Tambah Data</p>
                        </button>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr style="background:#4abdac;">
                            <th scope="col">
                                <input type="checkbox" onclick="toggle(this);">
                            </th>
                            <th scope="col">No.</th>
                            <th scope="col">Material Number</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="barang-table" style="cursor:pointer;">
                        <?php $no = ($barang->currentpage()-1)* $barang->perpage() + 1;?>
                        @foreach ($barang as $item)
                        <tr data-bs-toggle="modal" data-bs-target="#detailBarangModal{{ $item->id }}">
                            <td>
                                <input type="checkbox" name="check-tbl">
                            </td>
                            <td scope="row">{{ $no ++ }}</td>
                            <td>{{ $item->material_number }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->jumlah_barang }}</td>
                            <td>{{ $item->nama_unit }}</td>
                            <td>
                                <img src="img/view-icon.svg" style="cursor:pointer;" alt="">
                                @if (auth()->user()->unit_bagian == $item->lokasi)
                                <img src="img/edit-icon.svg" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#editBarangModal{{ $item->id }}" alt="">
                                <img src="img/delete-icon.svg" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#hapusModal{{ $item->id }}" alt="">
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {!! $barang->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
            <p class="body-2" style="margin:32px 0 0 0;text-align: center;color:#777986;">Copyright @Petrokimia Gresik 2023. All Rights Reserved.</p>
        </div>
        @foreach ($barang as $b)
        <div class="modal fade" id="detailBarangModal{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body" style="padding:24px;">
                    <div style="display:flex;justify-content:space-between;">
                        <p class="h6" style="margin-bottom:0;line-height:24px;">Detail Data Barang</p>
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <div style="display:flex;justify-content:space-between;margin:16px 0 24px 0;">
                        <div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Material Number</label>
                                <input type="text" class="form-control" name="material_number" value="{{ $b->material_number }}" id="recipient-name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" value="{{ $b->nama_barang }}" id="recipient-name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Range Pengukuran</label>
                                <input type="text" class="form-control" name="range_pengukuran" value="{{ $b->range_pengukuran }}" id="recipient-name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Satuan Pengukuran</label>
                                <input type="text" class="form-control" name="satuan_pengukuran" value="{{ $b->satuan_pengukuran }}" id="recipient-name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kondisi</label>
                                <input type="text" class="form-control" name="kondisi" value="{{ $b->kondisi }}" id="recipient-name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Merk</label>
                                <input type="text" class="form-control" name="merk" value="{{ $b->merk }}" id="recipient-name" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" value="{{ $b->deskripsi }}" id="message-text" disabled>{{ $b->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tipe</label>
                                <input type="text" class="form-control" name="tipe" value="{{ $b->tipe }}" id="recipient-name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Jumlah Barang</label>
                                <input type="text" class="form-control" name="jumlah_barang" value="{{ $b->jumlah_barang }}" id="recipient-name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Satuan Barang</label>
                                <input type="text" class="form-control" name="id_satuan_barang" value="{{ $b->id_satuan_barang }}" id="recipient-name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" value="{{ $b->nama_unit }}" id="recipient-name" disabled>
                            </div>
                        </div>
                    </div>
                    <p class="body-1">Barcode Barang</p>
                    <div style="display:flex;align-items:center;margin:16px 0 24px 0">
                        <img src="img/barcode.svg" alt="">
                        <button class="btn-simpan" style="height: fit-content;margin-left:16px;">Unduh</button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr style="background:#4abdac;">
                                <th scope="col">Unit Penempatan</th>
                                <th scope="col">Barang Tersedia/Spare</th>
                                <th scope="col">Jumlah Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Shop</td>
                                <td>6</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td scope="row">ZA II</td>
                                <td>2</td>
                                <td>9</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="modal fade" id="pilihInputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">    
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body" style="padding:24px;">
                    <div style="display:flex;justify-content:space-between;">
                        <p class="h6" style="margin-bottom:0;line-height:24px;">Pilih Metode</p>
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <div style="display:flex;margin-top:16px;">
                        <div class="input-satuan" data-bs-toggle="modal" data-bs-target="#tambahBarangModal">
                            <div style="width:32px;margin:0 auto 8px auto;">
                                <img src="img/icon_plus.svg" alt="">
                            </div>
                            <p class="body-2" style="color:white;">Input satuan</p>
                        </div>
                        <div class="input-satuan" style="margin-left:16px;" data-bs-toggle="modal" data-bs-target="#importExcelModal">
                            <div style="width:32px;margin:0 auto 8px auto;">
                                <img src="img/arrow-up.svg" alt="">
                            </div>
                            <p class="body-2" style="color:white;">Import excel</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="tambahBarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body" style="padding:24px;">
                    <form  method="POST" action="/barang/store">
                        @csrf
                        <div style="display:flex;justify-content:space-between;">
                            <p class="h6" style="margin-bottom:0;line-height:24px;">Input Data Barang</p>
                            <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                        </div>
                        <div style="display:flex;justify-content:space-between;margin:16px 0 24px 0;">
                            <div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Material Number</label>
                                    <input type="text" class="form-control" name="material_number" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Range Pengukuran</label>
                                    <input type="text" class="form-control" name="range_pengukuran" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Satuan Pengukuran</label>
                                    <input type="text" class="form-control" name="satuan_pengukuran" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Kondisi</label>
                                    <input type="text" class="form-control" name="kondisi" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Merk</label>
                                    <input type="text" class="form-control" name="merk" id="recipient-name">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="message-text"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Tipe</label>
                                    <input type="text" class="form-control" name="tipe" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Jumlah Barang</label>
                                    <input type="text" class="form-control" name="jumlah_barang" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Satuan Barang</label>
                                    <input type="text" class="form-control" name="id_satuan_barang" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi" id="recipient-name">
                                </div>
                            </div>
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
        <div class="modal fade" id="importExcelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">    
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body" style="padding:24px;">
                        <div style="display:flex;justify-content:space-between;">
                            <p class="h6" style="margin-bottom:0;line-height:24px;">Pilih file</p>
                            <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                        </div>
                        <form action="{{ route('importbarang') }}" method="post" enctype="multipart/form-data">
                            <div style="display:flex;margin:24px 0 16px 0;">
                                <p class="body-2">Template File : </p>
                                <a class="body-2" href="excel/Template Input Data Barang Instrumen III.xlsx" style="text-decoration:none;" download>&emsp;Download Template</a>
                            </div>
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control" id="recipient-name" name="file" required="required">
                            </div>
                            <div style="margin:24px 0 8px 0;display:flex;direction:rtl;">
                                <button type="submit" class="btn-simpan">Simpan</button>
                                <button type="button" class="btn-kembali" data-bs-dismiss="modal">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($barang as $c)
        <div class="modal fade" id="editBarangModal{{ $c->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-body" style="padding:24px;">
                    <div style="display:flex;justify-content:space-between;">
                        <p class="h6" style="margin-bottom:0;line-height:24px;">Edit Data Barang</p>
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <form method="POST" action="barang/update/{{$c->id}}">
                        @csrf
                        <div style="display:flex;justify-content:space-between;margin:16px 0 24px 0;">
                            <div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Material Number</label>
                                    <input type="text" class="form-control" name="material_number" value="{{ $c->material_number }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang" value="{{ $c->nama_barang }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Range Pengukuran</label>
                                    <input type="text" class="form-control" name="range_pengukuran" value="{{ $c->range_pengukuran }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Satuan Pengukuran</label>
                                    <input type="text" class="form-control" name="satuan_pengukuran" value="{{ $c->satuan_pengukuran }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Kondisi</label>
                                    <input type="text" class="form-control" name="kondisi" value="{{ $c->kondisi }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Merk</label>
                                    <input type="text" class="form-control" name="merk" value="{{ $c->merk }}" id="recipient-name">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" value="{{ $b->deskripsi }}" id="message-text">{{ $c->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Tipe</label>
                                    <input type="text" class="form-control" name="tipe" value="{{ $c->tipe }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Jumlah Barang</label>
                                    <input type="text" class="form-control" name="jumlah_barang" value="{{ $c->jumlah_barang }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Satuan Barang</label>
                                    <input type="text" class="form-control" name="id_satuan_barang" value="{{ $c->id_satuan_barang }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi" value="{{ $c->lokasi }}" id="recipient-name">
                                </div>
                            </div>
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
        @endforeach
        @foreach ($barang as $a)
        <div class="modal fade" id="hapusModal{{ $a->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div style="display:flex;direction:rtl;">
                        <img src="img/close-icon.svg" style="width:24px;cursor:pointer;margin:24px 24px 0 0;" data-bs-dismiss="modal" aria-label="Close" alt="">
                    </div>
                    <img src="img/story-delete.svg" style="width:240px;margin:48px auto;" alt="">
                    <p class="h6" style="margin:0 auto;">Apakah anda yakin ingin menghapus item ini?</p>
                    <form action="barang/destroy/{{$a->id}}" method="GET">
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
            $("#barang-table tr").filter(function() {	
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>
</body>
</html>