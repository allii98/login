<div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <?= $this->session->flashdata('message') ?>
                    <button class="btn btn-sm btn-success float-right mt-0" onclick="add()"><i class="zmdi zmdi-hc-fw"></i></button>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Aksi</th>
                                    <th>No</th>
                                    <th>Kode PT</th>
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
                                        <td>
                                            <div class="row px-2">
                                                <button id="editpt" href="javascript:;" data-id="<?php echo $p['id_pt'] ?>" data-nama_pt="<?php echo $p['nama_pt'] ?>" data-kode_pt="<?php echo $p['kode_pt'] ?>" data-alias="<?php echo $p['alias'] ?>" data-singkatan="<?php echo $p['singkatan'] ?>" data-deskripsi="<?php echo $p['deskripsi'] ?>" data-toggle="modal" data-target="#editModalPt" class="btn btn-sm btn-warning zmdi zmdi-edit"></button>
                                                <button onclick="deleteConfirm('<?= base_url('Pt/deletePt/' . $p['id_pt']) ?>')" href="#!" class="btn btn-sm btn-danger zmdi zmdi-delete"></button>
                                            </div>
                                        </td>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p['kode_pt'] ?></td>
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


<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah PT</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Pt/addPT') ?>" enctype="multipart/form-data" method="POST">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Nama PT</label>
                            <div class="form-group">
                                <input type="text" name="namapt" class="form-control" placeholder="Nama PT" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Kode PT</label>
                            <div class="form-group">
                                <input type="text" name="kodept" class="form-control" placeholder="Kode PT" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mb-1">
                        <div class="col-sm-6">
                            <label for="">Alias</label>
                            <div class="form-group">
                                <input type="text" name="alias" class="form-control" placeholder="Alias" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Singkatan</label>
                            <div class="form-group">
                                <input type="text" name="singkatan" class="form-control" placeholder="Singkatan" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <label for="img">Select Logo:</label>
                            <input type="file" id="logo" name="logo" accept="image/*">
                        </div>
                        <div class="col-sm-6">
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
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary btn-round waves-effect">SAVE CHANGES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModalPt" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">EDIT PT</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Pt/editPT') ?>" method="POST">
                    <div class="row clearfix">
                        <input type="hidden" id="id_pt" name="id_pt" class="form-control" />
                        <div class="col-sm-12">
                            <label for="">Nama PT</label>
                            <div class="form-group">
                                <input type="text" id="namapt" name="namapt" class="form-control" placeholder="Nama PT" />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Kode PT</label>
                            <div class="form-group">
                                <input type="text" id="kodept" name="kodept" class="form-control" placeholder="Kode PT" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mb-1">
                        <div class="col-sm-6">
                            <label for="">Alias</label>
                            <div class="form-group">
                                <input type="text" id="alias" name="alias" class="form-control" placeholder="Alias" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Singkatan</label>
                            <div class="form-group">
                                <input type="text" id="singkatan" name="singkatan" class="form-control" placeholder="Singkatan" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <label for="img">Select Logo:</label>
                            <input type="file" id="logo" name="logo" accept="image/*">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Is Active</label>
                            <select id="is_active" name="is_active" class="form-control" required>
                                <option value="1" selected>Y</option>
                                <option value="0">N</option>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Deskripsi</label>
                            <div class="form-group">
                                <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" value="" placeholder="" required></textarea>
                            </div>
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
    }

    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }

    $(document).ready(function() {
        $(document).on('click', '#editpt', function() {

            var id_pt = $(this).data('id');
            var nama_pt = $(this).data('nama_pt');
            var kode_pt = $(this).data('kode_pt');
            var deskripsi = $(this).data('deskripsi');
            var alias = $(this).data('alias');
            var singkatan = $(this).data('singkatan');

            $('#id_pt').val(id_pt);
            $('#namapt').val(nama_pt);
            $('#kodept').val(kode_pt);
            $('#deskripsi').val(deskripsi);
            $('#alias').val(alias);
            $('#singkatan').val(singkatan);
        });
    });
</script>