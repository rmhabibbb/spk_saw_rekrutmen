                    <section class="bg-white py-15">
                        <div class="container">
                            <div class="text-center mb-5" data-aos="fade-down">
                                <h1 style="font-size: 40px">Profil Saya</h1>
                            </div>
                            <form action="<?= base_url('profil/simpan') ?>" method="POST" data-aos="fade-up" id="formadd3">
                                <div class="row justify-content-center">
                                    <div class="col-xs-12 col-sm-4">
                                        <?= $this->session->flashdata('msg') ?>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="input-group">
                                                <input class="form-control" type="email" id="email" value="<?= $pengguna->email ?>" name="email" required value="<?php
                                                                                                                                                                    if (isset($_COOKIE['email_temp'])) {
                                                                                                                                                                        echo $_COOKIE['email_temp'];
                                                                                                                                                                    }
                                                                                                                                                                    ?>" <?php if (empty($_COOKIE['email_temp'])) {
                                                                                                                                                                            echo 'autofocus';
                                                                                                                                                                        } ?> pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$">

                                            </div>
                                            <div class="help-info" id="pesan1_pgw"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <div class="input-group">
                                                <input class="form-control" value="<?= $pengguna->nama_lengkap ?>" type="text" name="nama_lengkap" required value="<?php
                                                                                                                                                                    if (isset($_COOKIE['nama_temp'])) {
                                                                                                                                                                        echo $_COOKIE['nama_temp'];
                                                                                                                                                                    }
                                                                                                                                                                    ?>" <?php if (empty($_COOKIE['nama_temp'])) {
                                                                                                                                                                            echo 'autofocus';
                                                                                                                                                                        } ?>>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="input-group">
                                                <div class="col-sm-10">
                                                    <input name="jk" type="radio" id="jk1" <?php if ($pengguna->jk == "Laki - Laki") {
                                                                                                echo "checked";
                                                                                            } ?> value="Laki - Laki" required />
                                                    <label for="jk1">Laki - Laki</label>
                                                    <input name="jk" type="radio" id="jk2" <?php if ($pengguna->jk == "Perempuan") {
                                                                                                echo "checked";
                                                                                            } ?> value="Perempuan" required />
                                                    <label for="jk2">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <div class="input-group">
                                                <input class="form-control" id="inputBirthday" type="date" name="tanggal_lahir" placeholder="Enter your birthday" value="<?= $pengguna->tanggal_lahir ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <div class="input-group">
                                                <input class="form-control" id="inputPhone" type="text" name="no_telp" placeholder="Enter your phone number" value="<?= $pengguna->no_telp ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="alamat"><?= $pengguna->no_telp ?></textarea>
                                            </div>
                                        </div>
                                        <center>
                                            <input type="submit" name="simpan" class="btn btn-block btn-primary btn-marketing rounded-pill lift lift-sm my-3" value="Simpan">
                                        </center>

                                        <hr>
                                        <p><a href="<?= base_url('profil/password') ?>">Ganti Password </a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>



                    <script type="text/javascript">
                        function show() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";

                                $('#icon').html('<i class="fa fa-eye" aria-hidden="true"></i>');
                            } else {
                                x.type = "password";
                                $('#icon').html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
                            }
                        }

                        function show2() {
                            var x = document.getElementById("myInput2");
                            if (x.type === "password") {
                                x.type = "text";

                                $('#icon2').html('<i class="fa fa-eye" aria-hidden="true"></i>');
                            } else {
                                x.type = "password";
                                $('#icon2').html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
                            }
                        }
                    </script>