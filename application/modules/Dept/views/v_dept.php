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
                                    <th>Nama Dept</th>
                                    <th>Kode Dept</th>
                                    <th>Alias</th>
                                    <th>Logo</th>
                                    <th>Is Created</th>
                                    <th>Is Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dept as $d) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $d['nama_dept'] ?></td>
                                        <td><?= $d['kode_dept'] ?></td>
                                        <td><?= $d['alias'] ?></td>
                                        <td><?= $d['logo'] ?></td>
                                        <td><?= $d['is_created'] ?></td>
                                        <td><?= $d['is_active'] ?></td>
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