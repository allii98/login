<div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <?= $this->session->flashdata('message') ?>
                    <button class="btn btn-sm btn-success float-right mt-0" onclick="add()"><i class="zmdi zmdi-hc-fw"></i></button>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th style="width: 12%;">Aksi</th>
                                    <th>No</th>
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
                                        <td>
                                            <div class="row ml-0">
                                                <button class="btn btn-sm btn-warning zmdi zmdi-edit" id="edit_users" data-user_nama='<?= $u['user_nama'] ?>' data-username='<?= $u['username'] ?>' data-nama_pt='<?= $u['nama_pt'] ?>' data-nama_dept='<?= $u['nama_dept'] ?>' data-jenis_level='<?= $u['jenis_level'] ?>'></button>
                                                <button class=" btn btn-sm btn-danger zmdi zmdi-delete ml-1"></button>
                                            </div>
                                        </td>
                                        <td><?= $no++ ?></td>
                                        <td><?= $u['user_nama'] ?></td>
                                        <td><?= $u['username'] ?></td>
                                        <td><?= $u['nama_pt'] ?></td>
                                        <td><?= $u['nama_dept'] ?></td>
                                        <td><?= $u['jenis_level'] ?></td>
                                        <td><?= $u['is_created'] ?></td>
                                        <td><button class="badge badge-success">Aktif</button></td>
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
                <form action="<?= base_url('Users/addUsers') ?>" id="form_simpan" method="POST">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Nama</label>
                            <select name="nama" id="nama" class="form-control" required>
                                <option value="" disabled>- Select Nama - </option>
                                <?php foreach ($data_users_ho as $ho) : ?>
                                    <option value="<?= $ho['nama'] ?>"><?= $ho['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix mb-1">
                        <div class="col-sm-6">
                            <label for="">PT</label>
                            <select name="id_pt" class="form-control" required>
                                <option value="" selected disabled>- Select PT - </option>
                                <?php foreach ($pt as $p) : ?>
                                    <option value="<?= $p['id_pt'] ?>"><?= $p['alias'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Departement</label>
                            <select name="id_dept" class="form-control" required>
                                <option value="" selected disabled>- Select Dept - </option>
                                <?php foreach ($dept as $d) : ?>
                                    <option value="<?= $d['id_dept'] ?>"><?= $d['nama_dept'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Username</label>
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Password</label>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <label for="">Level</label>
                            <select name="level" class="form-control" required>
                                <option value="" selected disabled>- Select Level - </option>
                                <?php foreach ($level as $l) : ?>
                                    <option value="<?= $l['kode_level'] ?>"><?= $l['jenis_level'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Is Active</label>
                            <select name="is_active" class="form-control" required>
                                <option value="1" selected>Y</option>
                                <option value="0">N</option>
                            </select>
                        </div>
                    </div>
                    <div class="row modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary btn-round waves-effect">SAVE CHANGES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function add() {
        $('#addModal').modal('show');
        $('#form_simpan')[0].reset();
    }

    $(document).ready(function() {

        // get Edit Product
        $(document).on('click', '#edit_users', function() {

            $('#addModal').modal('show');

            var user_nama = $(this).data('user_nama');
            var username = $(this).data('username');
            var nama_pt = $(this).data('nama_pt');
            var nama_dept = $(this).data('nama_dept');
            var jenis_level = $(this).data('jenis_level');
            // Set data to Form Edit
            $('select[name=nama] option').filter(':selected').val(user_nama);
            $('#username').val(username);
        });

    });
</script>