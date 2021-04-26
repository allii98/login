<div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <?= $this->session->flashdata('message') ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>PT</th>
                                    <th>Department</th>
                                    <th>Level</th>
                                    <th>Akses</th>
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
                                        <td><?= $u['id_pt'] ?></td>
                                        <td><?= $u['id_dept'] ?></td>
                                        <td><?= $u['level'] ?></td>
                                        <td><button class="btn btn-info" onclick="apk(<?= $u['user_id'] ?>)">Akses Aplikasi</button></td>
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

<div class="modal fade" id="roleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Role Aplikasi Users</h4>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>

<script>
    function apk(user_id) {
        console.log(user_id);

        $('#roleModal').modal('show');
    }
</script>