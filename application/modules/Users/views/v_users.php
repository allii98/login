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
                                                <!-- <button class="btn btn-sm btn-warning zmdi zmdi-edit" id="edit_users" data-id="<?= $u['user_id'] ?>" data-user_nama='<?= $u['user_nama'] ?>' data-username='<?= $u['username'] ?>' data-id_pt='<?= $u['id_pt'] ?>' data-nama_pt='<?= $u['nama_pt'] ?>' data-nama_dept='<?= $u['nama_dept'] ?>' data-jenis_level='<?= $u['jenis_level'] ?>' data-toggle="modal" data-target="#editModalUsers"></button> -->
                                                <button class="btn btn-sm btn-warning zmdi zmdi-edit" data-toggle="modal" data-target="#editModalUsers<?= $u['user_id'] ?>"></button>
                                                <button onclick="deleteConfirm('<?= base_url('Users/deleteUsers/' . $u['user_id']) ?>')" href="#!" class="btn btn-sm btn-danger zmdi zmdi-delete" class=" btn btn-sm btn-danger zmdi zmdi-delete ml-1"></button>
                                            </div>
                                        </td>
                                        <td><?= $no++ ?></td>
                                        <td><?= $u['user_nama'] ?></td>
                                        <td><?= $u['username'] ?></td>
                                        <td><?= $u['nama_pt'] ?></td>
                                        <td><?= $u['nama_dept'] ?></td>
                                        <td><?= $u['jenis_level'] ?></td>
                                        <td><?= $u['is_created'] ?></td>
                                        <?php if ($u['is_active'] == 1) { ?>
                                            <td><button class="badge badge-success">Aktif</button></td>
                                        <?php } else { ?>
                                            <td><button class="badge badge-warning">Tidak Aktif</button></td>
                                        <?php } ?>
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
                                <option value="" selected disabled>- Select Nama - </option>
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
                        <button type="button" class="btn btn-danger btn-round waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-round waves-effect">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $no = 0 ?>
<?php foreach ($users as $u) : $no++; ?>
    <div class="modal fade" id="editModalUsers<?= $u['user_id'] ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Edit Users</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Users/editUsers') ?>" id="form_simpan" method="POST">
                        <div class="row clearfix">
                            <input type="hidden" id="id_users" name="id_users" value="<?= $u['user_id'] ?>" class="form-control" />
                            <div class="col-sm-12">
                                <label for="">Nama</label>
                                <select name="nama" id="selection" class="form-control" required>
                                    <option value="<?= $u['user_nama'] ?>" selected><?= $u['user_nama'] ?></option>
                                    <?php foreach ($data_users_ho as $ho) : ?>
                                        <option value="<?= $ho['nama'] ?>"><?= $ho['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row clearfix mb-1">
                            <div class="col-sm-6">
                                <label for="">PT</label>
                                <select name="id_pt" id="id_pt" class="form-control" required>
                                    <option value="<?= $u['id_pt'] ?>"><?= $u['alias'] ?></option>
                                    <?php foreach ($pt as $p) : ?>
                                        <option value="<?= $p['id_pt'] ?>"><?= $p['alias'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="">Departement</label>
                                <select name="id_dept" class="form-control" required>
                                    <option value="<?= $u['id_dept'] ?>" selected><?= $u['nama_dept'] ?></option>
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
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?= $u['username'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label for="">Password</label>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="password" name="passworddef" id="passworddef<?= $no ?>" class="form-control" placeholder="Password" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" id="defaultpass<?= $no ?>" class="btn btn-sm btn-round btn-success">Default</button>
                                        <button type="button" id="undefaultpass<?= $no ?>" class="btn btn-sm btn-round btn-danger">X</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <label for="">Level</label>
                                <select name="level" class="form-control" required>
                                    <option value="<?= $u['level'] ?>" selected><?= $u['jenis_level'] ?></option>
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
                            <button type="button" class="btn btn-danger btn-round waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-round waves-effect">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="totaluser" value="<?= $no ?>">
<?php endforeach; ?>
<input type="hidden" id="totaluser" value="<?= count($users); ?>">


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    function add() {
        $('#addModal').modal('show');
        $('#form_simpan')[0].reset();
    }

    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }

    var total = $('#totaluser').val() + 1;

    for (let i = 1; i < total; i++) {
        console.log(i);

        $('#undefaultpass' + i).hide();
        $('#defaultpass' + i).on('click', function() {
            // alert('default clicked');
            $('#defaultpass' + i).hide();
            $('#undefaultpass' + i).show();
            $('#passworddef' + i).val("1").prop('disabled', false);
        });

        $('#undefaultpass' + i).on('click', function() {
            $('#undefaultpass' + i).hide();
            $('#defaultpass' + i).show();
            $('#passworddef' + i).val("").prop('disabled', false);
        });

    }


    // $(document).ready(function() {

    //     // get Edit Product
    //     $(document).on('click', '#edit_users', function() {

    //         $('#addModal').modal('show');

    //         var user_nama = $(this).data('user_nama');
    //         var username = $(this).data('username');
    //         var nama_pt = $(this).data('nama_pt');
    //         var nama_dept = $(this).data('nama_dept');
    //         var jenis_level = $(this).data('jenis_level');
    //         // Set data to Form Edit
    //         $('select[name=nama] option').filter(':selected').val(user_nama);
    //         $('#username').val(username);
    //     });

    // });
</script>