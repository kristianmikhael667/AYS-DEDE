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
                            <?php if (session()->has('success')) : ?>
                                <div class="alert alert-success">
                                    <?= session()->getFlashdata('success') ?>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Bencana</th>
                                                        <th>Jam Bencana</th>
                                                        <th>Lokasi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php foreach ($dataall as $num => $data) : ?>
                                                    <tr>
                                                        <td><?= $num+1 ?></td>
                                                        <td><?= $data->nama_bencana ?></td>
                                                        <td><?= $data->jam_bencana ?></td>
                                                        <td><?= $data->lokasi ?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
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