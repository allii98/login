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
                                    <th>No</th>
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
                                        <td><?= $no++ ?></td>
                                        <td><?= $u['user_nama'] ?></td>
                                        <td><?= $u['username'] ?></td>
                                        <td><?= $u['nama_pt'] ?></td>
                                        <td><?= $u['nama_dept'] ?></td>
                                        <td><?= $u['jenis_level'] ?></td>
                                        <td><button class="btn btn-info btn-xs" onclick="apk(<?= $u['user_id'] ?>)">Akses&nbsp;Aplikasi</button></td>
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
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>Aplikasi</th>
                            <th>Akses</th>
                        </tr>
                    </thead>
                    <tbody id="role_apk">
                        <!-- <?php
                                $no = 1;
                                foreach ($apk as $a) {
                                ?>
                            <tr>
                                <td><?= $a['nama_apk'] ?></td>
                                <td>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input id="cb_akses" type="checkbox">
                                            <label for="checkbox">&nbsp;</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                                }
                        ?> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function apk(user_id) {

        $('#roleModal').modal('show');
        $('#role_apk').empty();

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Users_role/get_role'); ?>",
            dataType: "JSON",

            data: {
                'user_id': user_id
            },
            success: function(data) {

                var i;
                for (i = 0; i < data.length; i++) {

                    var tr_buka = '<tr id="tr">';
                    var td_1 = '<td>' +
                        "<span id='nama_apk_" + i + "'>" + data[i].nama_apk + "</span>" +
                        "<input type='hidden' id='id_apk_" + i + "' value='" + data[i].id_apk + "'></input>" +
                        '</td>';
                    var td_2 = '<td>' +
                        "<input id='cb_akses_" + i + "' type='checkbox' onclick='ubahRole(" + i + ',' + user_id + ")'>" +
                        '</td>';
                    var tr_tutup = '</tr>';
                    $('#role_apk').append(tr_buka + td_1 + td_2 + tr_tutup);

                    cek_role(i, user_id, data[i].id_apk);
                }
            }
        });
    }

    function cek_role(i, user_id, id_apk) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Users_role/cek_role'); ?>",
            dataType: "JSON",

            data: {
                'user_id': user_id,
                'id_apk': id_apk
            },
            success: function(data) {

                if (data != null) {
                    $('#cb_akses_' + i).attr('checked', '');
                }
            }

        });
    }

    function ubahRole(i, user_id) {

        var id_apk = $('#id_apk_' + i).val();

        // console.log(id_apk);
        // console.log(user_id);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Users_role/ubah_role'); ?>",
            dataType: "JSON",

            data: {
                'id_apk': id_apk,
                'user_id': user_id
            },
            success: function(data) {

                console.log(data);
                // if (data != null) {
                //     $('#cb_akses_' + i).attr('checked', '');
                // }
            }

        });
    }
</script>