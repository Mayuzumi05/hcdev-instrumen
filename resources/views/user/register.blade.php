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
<body>
    <div class="container-fluid">
        <div class="row containerMain">
            <div class="col col-lg-6 leftContainer">
                <div class="petroContainer">
                    <img class="logo-login"src="img/logo.png" alt="" height=48px>
                </div>
                <div class="formContainerOuter">
                    <div class="login-form formContainerInner">
                        <p class="h4" style="text-align:center;color:#404252">Daftar</p>
                        <p class="body-2" style="text-align:center;color:#B3B5BD;margin: 12px 0 24px 0;">Masukkan data diri anda</p>
                        <form action="{{route('saveregister')}}" method="post">
                        {{ csrf_field() }}
                        <p class="body-1" style="color:#404252;margin:48px 0 8px 0">Nama Lengkap</p>
                        <input type="text" class="nama-pengguna" name="name" placeholder="Masukkan nama lengkap anda">
                        <p class="body-1" style="color:#404252;margin:16px 0 8px 0;">NIK</p>
                        <input type="text" class="nama-pengguna" name="NIK" placeholder="Masukkan NIK anda">
                        <p class="body-1" style="color:#404252;margin:16px 0 8px 0;">Nomor Telepon</p>
                        <input type="text" class="nama-pengguna" name="no_telepon" placeholder="Masukkan nomor telepon anda">
                        <p class="body-1" style="color:#404252;margin:16px 0 8px 0;">Email</p>
                        <input type="text" class="nama-pengguna" name="email" placeholder="Masukkan email anda">
                        <p class="body-1" style="color:#404252;margin:16px 0 8px 0;">Unit Bagian</p>
                        <div>
                            <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                            <select class="form-select" id="inlineFormSelectPref" name="unit_bagian">
                                <option selected>Pilih Unit</option>
                                @foreach ($unit as $item)
                                <option value="{{$item->id}}">{{$item->nama_unit}}</option>
                                @endforeach
                            </select>
                        </div>
                        <p class="body-1" style="color:#404252;margin:16px 0 8px 0;">Nama Pengguna</p>
                        <input type="text" class="nama-pengguna" name="username" placeholder="Masukkan username anda">
                        <p class="body-1" style="color:#404252;margin:16px 0 8px 0;">Kata Sandi</p>
                        <input type="password" class="nama-pengguna" name="password" placeholder="Masukkan kata sandi anda" id="myInput">
                        <div style="display:flex;margin:8px 0px 0px 16px;">
                                <input type="checkbox" onclick="myFunction()" class="body-1">
                                <p class="body-1" style="margin: 0px 4px;color:#777986">Perlihatkan kata sandi</p>
                            </div>
                            <button type="submit" class="btn-login">
                                <a class="h6" style="text-decoration:none" href="saveregister">Daftar</a>
                            </button>
                            <div class="belum-memiliki-akun">
                                <p class="body-2" style="color:#777986;">Sudah memiliki akun?</p>
                                <a class="body-2" style="color:#31C453;margin-left:4px;text-decoration:none" href="login">Masuk</a>
                            </div>
                        </form>
                    </div>
                </div>

                <p class="caption copyrightContainer" style="color:#777986;">© 2023 Petrokimia Gresik</p>
            </div>
            <div class="d-none d-lg-block col-lg-6" style="padding:0px;">
                <div id="container">
                    <!-- <img class="half-pabrik"src="img/Half Pabrik.png" alt=""> -->
                    <img src="img/Half Pabrik.png" style="width: 100%; height: 100vh; object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>