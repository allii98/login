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
                                    <th>Aksi</th>
                                    <th>No</th>
                                    <th>Nama Aplikasi</th>
                                    <th>Link Aplikasi</th>
                                    <th>Ctrl Admin</th>
                                    <th>Icon Aplikasi</th>
                                    <th>Is Created</th>
                                    <th>Is Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($apk as $a) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="row ml-0">
                                                <button class="btn btn-sm btn-warning zmdi zmdi-edit" id="editapk" href="javascript:;" data-id="<?php echo $a['id_apk'] ?>" data-nama_apk="<?php echo $a['nama_apk'] ?>" data-link_apk="<?php echo $a['link_apk'] ?>" data-ctrl_admin="<?php echo $a['ctrl_admin'] ?>" data-icon_apk="<?php echo $a['icon_apk'] ?>" data-deskripsi="<?php echo $a['deskripsi'] ?>" data-toggle="modal" data-target="#editModalApk"></button>
                                                <button class="btn btn-sm btn-danger zmdi zmdi-delete" onclick="deleteConfirm('<?= base_url('Apk/deleteApk/' . $a['id_apk']) ?>')" href="#!"></button>
                                            </div>
                                        </td>
                                        <td><?= $no++ ?></td>
                                        <td><?= $a['nama_apk'] ?></td>
                                        <td><?= $a['link_apk'] ?></td>
                                        <td><?= $a['ctrl_admin'] ?></td>
                                        <td><?= $a['icon_apk'] ?></td>
                                        <td><?= $a['is_created'] ?></td>
                                        <td><?= $a['is_active'] ?></td>
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
                <h4 class="title" id="defaultModalLabel">Tambah Aplikasi</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Apk/addApk') ?>" enctype="multipart/form-data" method="POST">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Nama Aplikasi</label>
                            <div class="form-group">
                                <input type="text" name="nama_apk" class="form-control" placeholder="Nama Aplikasi" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Link Aplikasi</label>
                            <div class="form-group">
                                <input type="text" name="link_apk" class="form-control" placeholder="Link Aplikasi" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mb-1">
                        <div class="col-sm-6">
                            <label for="">Ctrl Admin</label>
                            <div class="form-group">
                                <input type="text" name="ctrl_admin" class="form-control" placeholder="Control Admin" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Icon Aplikasi</label>
                            <div class="form-group">
                                <input type="text" name="icon_apk" class="form-control" placeholder="Icon Apk" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Is Active</label>
                            <select name="is_active" class="form-control" required>
                                <option value="1" selected>Y</option>
                                <option value="0">N</option>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Deskripsi</label>
                            <div class="form-group">
                                <textarea type="text" rows="2" id="deskripsi" name="deskripsi" class="form-control" placeholder="" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row modal-footer">
                        <button type="button" class="btn btn-danger btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary btn-round waves-effect">SAVE CHANGES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editModalApk" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Edit Aplikasi</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Apk/editApk') ?>" enctype="multipart/form-data" method="POST">
                    <input type="hidden" id="id_apk" name="id_apk" class="form-control" />
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Nama Aplikasi</label>
                            <div class="form-group">
                                <input type="text" id="nama_apk" name="nama_apk" class="form-control" placeholder="Nama Aplikasi" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Link Aplikasi</label>
                            <div class="form-group">
                                <input type="text" id="link_apk" name="link_apk" class="form-control" placeholder="Link Aplikasi" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mb-1">
                        <div class="col-sm-6">
                            <label for="">Ctrl Admin</label>
                            <div class="form-group">
                                <input type="text" id="ctrl_admin" name="ctrl_admin" class="form-control" placeholder="Control Admin" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Icon Aplikasi</label>
                            <div class="form-group">
                                <input type="text" id="icon_apk" name="icon_apk" class="form-control" placeholder="Icon Apk" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Is Active</label>
                            <select name="is_active" class="form-control" required>
                                <option value="1" selected>Y</option>
                                <option value="0">N</option>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Deskripsi</label>
                            <div class="form-group">
                                <textarea type="text" rows="2" id="deskripsi" name="deskripsi" class="form-control" placeholder="" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row modal-footer">
                        <button type="button" class="btn btn-danger btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary btn-round waves-effect">SAVE CHANGES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


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

<!-- <div class="modal fade" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Aplikasi</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Users/addUsers') ?>" method="POST">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama" required />
                            </div>
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
                                <input type="text" name="username" class="form-control" placeholder="Username" required />
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
</div> -->

<script>
    function add() {
        $('#addModal').modal('show');
    }


    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }

    $(document).ready(function() {
        $(document).on('click', '#editapk', function() {

            var id_apk = $(this).data('id');
            var nama_apk = $(this).data('nama_apk');
            var link_apk = $(this).data('link_apk');
            var deskripsi = $(this).data('deskripsi');
            var ctrl_admin = $(this).data('ctrl_admin');
            var icon_apk = $(this).data('icon_apk');

            // alert(deskripsi);

            $('#id_apk').val(id_apk);
            $('#nama_apk').val(nama_apk);
            $('#link_apk').val(link_apk);
            $('#ctrl_admin').val(ctrl_admin);
            $('#icon_apk').val(icon_apk);
            $('textarea#deskripsi').val(deskripsi);
        });
    });
</script>