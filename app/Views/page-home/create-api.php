<?= $this->include('partials/main') ?>

<head>
    <?= $title_meta ?>

    <!-- CSS GLOBAL -->
    <?= $this->include('partials/css-global') ?>
    <?= $this->include('partials/head-css') ?>

</head>

<body data-layout="horizontal">

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?= $this->include('partials/horizontal') ?>
            <div class="container-fluid">
                <!-- Begin page -->
                <div id="layout-wrapper">
                    <div class="main-content">

                        <div class="page-content">

                            <?= $page_title ?>

                            <!-- Content -->
                            <div class="card">
                                <div class="card-body">
                                    <form class="custom-validation" action="<?= base_url(); ?>/postapi" method="POST">
                                        <?php if (session()->has('error')) : ?>
                                            <div class="alert alert-danger">
                                                <?= session()->getFlashdata('error') ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="mb-3">
                                            <div>
                                                <input autocomplete="off" parsley-type="url" type="text" name="nama_bencana" class="form-control" required placeholder="Nama Bencana" />
                                            </div>
                                        </div>
                                        <!-- Jam Bencana -->
                                        <div class="mb-3 row">
                                            <div>
                                                <input parsley-type="url" name="jam_bencana" class="form-control" required type="time" id="example-time-input">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div>
                                                <input autocomplete="off" parsley-type="url" type="text" name="lokasi_bencana" class="form-control" required placeholder="Lokasi" />
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1 float-end">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end row -->

                        </div>
                        <!-- End Page-content -->

                        <?= $this->include('partials/footer') ?>
                    </div>
                </div>
                <!-- END layout-wrapper -->
            </div>
            <!-- end container-fluid -->
            <?= $this->include('partials/footer') ?>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
    </div>
    <!-- end container-fluid -->

    <!-- JS Global -->
    <?= $this->include('partials/js-global') ?>

</body>

</html>