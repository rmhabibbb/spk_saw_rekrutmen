<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">

                    <!-- Sidenav Menu Heading (Core)-->
                    <div class="sidenav-menu-heading">Menu</div>
                    <!-- Sidenav Accordion (Dashboard)-->

                    <?php if ($index == 1) { ?>
                        <a class="nav-link active" href="<?= base_url('operator') ?>">
                        <?php } else { ?>
                            <a class="nav-link" href="<?= base_url('operator') ?>">
                            <?php } ?>
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Dashboards
                            </a>


                            <?php if ($index == 2) { ?>
                                <a class="nav-link active" href="<?= base_url('operator/rekrutmen') ?>">
                                <?php } else { ?>
                                    <a class="nav-link" href="<?= base_url('operator/rekrutmen') ?>">
                                    <?php } ?>
                                    <div class="nav-link-icon"><i class="fa fa-user-plus"></i></div>
                                    Rekrutmen
                                    </a>


                                    <div class="sidenav-menu-heading">Kelola Data</div>
                                    <?php if ($index == 3) { ?>
                                        <a class="nav-link active" href="<?= base_url('operator/kriteria') ?>">
                                        <?php } else { ?>
                                            <a class="nav-link" href="<?= base_url('operator/kriteria') ?>">
                                            <?php } ?>
                                            <div class="nav-link-icon"><i class="fa fa-list"></i></div>
                                            Kriteria
                                            </a>

                                            <?php if ($index == 5) { ?>
                                                <a class="nav-link active" href="<?= base_url('operator/pengguna') ?>">
                                                <?php } else { ?>
                                                    <a class="nav-link" href="<?= base_url('operator/pengguna') ?>">
                                                    <?php } ?>
                                                    <div class="nav-link-icon"><i class="fa fa-user"></i></div>
                                                    Pengguna
                                                    </a>

                                                    <div class="sidenav-menu-heading">Pengaturan</div>
                                                    <?php if ($index == 6) { ?>
                                                        <a class="nav-link active" href="<?= base_url('operator/profil') ?>">
                                                        <?php } else { ?>
                                                            <a class="nav-link" href="<?= base_url('operator/profil') ?>">
                                                            <?php } ?>
                                                            <div class="nav-link-icon"><i data-feather="settings"></i></div>
                                                            Account
                                                            </a>

                                                            <a class="nav-link" href="<?= base_url('keluar') ?>">

                                                                <div class="nav-link-icon"><i data-feather="log-out"></i></div>
                                                                Logout
                                                            </a>


                </div>
            </div>
            <!-- Sidenav Footer-->
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title"><?= $profil->nama_lengkap ?></div>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>