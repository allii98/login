<div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <button class="btn btn-sm btn-success float-right mt-0" onclick="add()"><i class="zmdi zmdi-hc-fw"></i></button>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>PT</th>
                                    <th>Department</th>
                                    <th>Level</th>
                                    <th>Is Created</th>
                                    <th>Is Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($users as $u) {
                                ?>
                                    <tr>
                                        <td><?= $u['user_nama'] ?></td>
                                        <td><?= $u['username'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <td><?= $u['level'] ?></td>
                                        <td></td>
                                        <td></td>
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

<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Users</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <label for="">Nama</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama" />
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <label for="">PT</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="PT" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="">Departement</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Departement" />
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <label for="">Username</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <label for="">Password</label>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <label for="">Level</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Level" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="">Is Active</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Is Active" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<script>
    function add() {
        $('#addModal').modal('show');
    }
</script>