<div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <button class="btn btn-sm btn-success float-right mt-0"><i class="zmdi zmdi-hc-fw"></i></button>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama PT</th>
                                    <th>Alias</th>
                                    <th>Singkatan</th>
                                    <th>Logo</th>
                                    <th>Is Created</th>
                                    <th>Is Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pt as $p) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p['nama_pt'] ?></td>
                                        <td><?= $p['alias'] ?></td>
                                        <td><?= $p['singkatan'] ?></td>
                                        <td><?= $p['logo'] ?></td>
                                        <td><?= $p['is_created'] ?></td>
                                        <td><?= $p['is_active'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>