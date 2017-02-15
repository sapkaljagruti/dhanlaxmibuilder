<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/dataTables.bootstrap.css'); ?>">

<section class="content-header">
    <h1>
        <?php echo ucwords($page); ?>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="alert alert-dismissible" style="display: none;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4></h4><p></p>
    </div>
    <div class="row" style="padding: 10px 0;">
        <div class="col-md-2 pull-left">
            <a href="" class="btn btn-block btn-info" data-toggle="modal" data-target="#add_edit_status_modal">Add New Status</a>
        </div>
        <div class="col-md-2 pull-left">
            <input type="button" class="btn btn-block btn-danger" id="delete_selected" value="Delete Selected">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->
            <div class="box box-primary">
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="project_status_table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="project_status_table_info">
                        <thead>
                            <tr>
                                <th data-orderable="false" width="40px">
                                    <input type="checkbox" class="select-all">
                                </th>
                                <th>Id</th>
                                <th>Title</th>
                                <th data-orderable="false">Actions</th>
                            </tr>
                        </thead>
                        <?php
                        if (isset($project_status)) {
                            ?>
                            <tbody>
                                <?php
                                foreach ($project_status as $ps) {
                                    ?>
                                    <tr id="tr_<?php echo $ps->id; ?>">
                                        <td><input type="checkbox" name="select_project_status[]" data-id="<?php echo $ps->id; ?>"></td>
                                        <td><?php echo $ps->id; ?></td>
                                        <td><?php echo $ps->title; ?></td>
                                        <td>
                                            <a href="" class="view_status" data-id="<?php echo $ps->id; ?>"><i class="fa fa-fw fa-eye"></i></a>
                                            <a href="" class="edit_status" data-id="<?php echo $ps->id; ?>"><i class="fa fa-fw fa-pencil"></i></a>
                                            <a href="" class="delete_status" data-id="<?php echo $ps->id; ?>"><i class="fa fa-fw fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <!-- /.box-body -->
                <div id="loader" class="overlay" style="display: none;">
                    <i class="fa fa-refresh fa-spin"></i>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="modal fade" id="view_modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Status</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-4">ID :</label>
                            <div class="col-sm-8" id="view_id"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Status :</label>
                            <div class="col-sm-8" id="view_title"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Created At :</label>
                            <div class="col-sm-8" id="view_created"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Updated At :</label>
                            <div class="col-sm-8" id="view_updated"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_edit_status_modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add/Edit Status</h4>
                </div>
                <div class="add_edit_status_modal_body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Status</label>
                            <input type="hidden" class="form-control" id="save_type" value="add">
                            <input type="hidden" class="form-control" id="status_id" value="">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="status" placeholder="Status" required="required">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-info" id="save_status">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm_delete_modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Confirm Delete</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete this data?</p>
                    <input type="hidden" id="status_to_delete" value="">
                    <input type="hidden" id="delete_type" value="single">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="delete_status">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/admin/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/dataTables.bootstrap.min.js'); ?>"></script>
    <script>
        $(function () {

            $('#loader').bind('ajaxStart', function () {
                $(this).show();
            }).bind('ajaxStop', function () {
                $(this).hide();
            });

            $('#project_status_table').DataTable({
                "paging": true,
                "lengthChange": true,
                "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                "searching": true,
                "ordering": true,
                "order": [[1, "desc"]],
                "info": true,
                "autoWidth": false,
                "aaSorting": [],
            });

            $('.select-all').on('change', function () {
                var status = this.checked;
                $('input[name="select_project_status[]"]').each(function () {
                    this.checked = status;
                });
                $('#delete_selected').attr('disabled', !(status));
            });

            $('input[name="select_project_status[]"]').change(function () {
                if (this.checked == false) {
                    $(".select-all")[0].checked = false;
                }

                if ($('input[name="select_project_status[]"]').length == $('.checkbox').length) {
                    $(".select-all")[0].checked = true;
                }
            });


            $('#delete_selected').attr('disabled', true);
            var checkBoxes = $('input[name="select_project_status[]"]');
            checkBoxes.change(function () {
                $('#delete_selected').prop('disabled', checkBoxes.filter(':checked').length < 1);
            });

            $('#add_edit_status_modal').on('hidden.bs.modal', function () {
                $('#status').val('');
                $('#status_id').val('');
                $('#save_type').val('add');
                $('#status').next('span').html('');
                $('#status').closest('div').removeClass('has-error');
            });

            $('#confirm_delete_modal').on('hidden.bs.modal', function () {
                $('#delete_type').val('single');
                $('#status_to_delete').val('');
            });
        });

        $(document).on('click', '.edit_status', function (e) {
            e.preventDefault();
            var data_id = $(this).attr('data-id');
            var base_url = '<?= base_url() ?>';
            $.ajax({
                url: base_url + 'admin/projects/status',
                type: "POST",
                data: {'id': data_id},
                dataType: "json",
                success: function (response) {
                    var id = response.id;
                    var title = response.title;
                    $('#save_type').val('edit');
                    $('#status_id').val(id);
                    $('#status').val(title);
                    $("#add_edit_status_modal").modal('show');
                },
                error: function (xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    console.log(err.Message);
                    alert(err.Message);
                }
            });
        });

        $(document).on('click', '#save_status', function () {
            var id = $('#status_id').val();
            var status = $.trim($('#status').val());
            var save_type = $('#save_type').val();
            var base_url = '<?= base_url() ?>';
            if (status.length == 0) {
                $('#status').next('span').html('Please enter new status');
                $('#status').closest('div').addClass('has-error');
                return false;
            } else {
                if (save_type == 'add') {
                    $.ajax({
                        url: base_url + 'admin/projects/status/create',
                        type: "POST",
                        data: {'status': status},
                        success: function (response) {
                            var table = $('#project_status_table').DataTable();
                            var rowNode = table.row.add(['<input type="checkbox" name="select_project_status[]" data-id="' + response + '">', response, status, '<a href="" class="view_status" data-id="' + response + '"><i class="fa fa-fw fa-eye"></i></a>' +
                                        '<a href="" class="edit_status" data-id="' + response + '"> <i class="fa fa-fw fa-pencil"></i></a> <a href="" class="delete_status"> <i class="fa fa-fw fa-trash"></i></a>']).draw().node();
                            $(rowNode).attr('id', 'tr_' + response);
                            $("#add_edit_status_modal").modal('hide');
                            $('.alert').addClass('alert-success');
                            $('.alert').find('h4').html('<i class="icon fa fa-check"></i> Success!');
                            $('.alert').find('p').html('New status was added successfully.');
                            $('.alert').show();
                        },
                        error: function (xhr, status, error) {
                            $('.alert').addClass('alert-danger');
                            $('.alert').find('h4').html('<i class="icon fa fa-ban"></i> Alert!');
                            $('.alert').find('p').html('Something went wrong. Please try again later');
                            $('.alert').show();
//                            var err = eval("(" + xhr.responseText + ")");
//                            console.log(err.Message);
//                            alert(err.Message);
                        }
                    });
                } else if (save_type == 'edit') {
                    $.ajax({
                        url: base_url + 'admin/projects/status/create',
                        type: "POST",
                        data: {
                            'id': id,
                            'status': status
                        },
                        success: function (response) {
                            var table = $('#project_status_table').dataTable();
                            table.fnUpdate(status, '#tr_' + response, 2);
                            $("#add_edit_status_modal").modal('hide');
                        },
                        error: function (xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            console.log(err.Message);
                            alert(err.Message);
                        }
                    });
                }
            }
        });

        $(document).on('click', '.view_status', function (e) {
            e.preventDefault();
            var data_id = $(this).attr('data-id');
            var base_url = '<?= base_url() ?>';
            $.ajax({
                url: base_url + 'admin/projects/status',
                type: "POST",
                data: {'id': data_id},
                dataType: "json",
                success: function (response) {
                    var id = response.id;
                    var title = response.title;
                    var created_at = response.created_at;
                    var updated_at = response.updated_at;
                    $('#view_id').html(id);
                    $('#view_title').html(title);
                    $('#view_created').html(created_at);
                    $('#view_updated').html(updated_at);
                    $("#view_modal").modal('show');
                },
                error: function (xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    console.log(err.Message);
                    alert(err.Message);
                }
            });
        });

        $(document).on('click', '.delete_status', function (e) {
            e.preventDefault();
            var data_id = $(this).attr('data-id');
            $('#status_to_delete').val(data_id);
            $('#delete_type').val('single');
            $('#confirm_delete_modal').modal('show');
        });

        $(document).on('click', '#delete_selected', function () {
            $('#delete_type').val('multiple');
            $('#confirm_delete_modal').modal('show');
        });

        $(document).on('click', '#delete_status', function () {
            var delete_type = $('#delete_type').val();
            if (delete_type == 'single') {
                var status_to_delete = $('#status_to_delete').val();
                var base_url = '<?= base_url() ?>';
                $.ajax({
                    url: base_url + 'admin/projects/status/delete',
                    type: "POST",
                    data: {'id': status_to_delete},
                    dataType: "json",
                    success: function (response) {
                        if (response == true) {
                            var table = $('#project_status_table').DataTable();
                            table.row($('#tr_' + status_to_delete)).remove().draw(false);
                        }
                        $("#confirm_delete_modal").modal('hide');
                    },
                    error: function (xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err.Message);
                        alert(err.Message);
                    }
                });
            } else if (delete_type == 'multiple') {
                var status_to_delete = [];
                $('input[name="select_project_status[]"]:checked').each(function () {
                    status_to_delete.push($(this).attr('data-id'));
                });
                var base_url = '<?= base_url() ?>';
                $.ajax({
                    url: base_url + 'admin/projects/status/delete',
                    type: "POST",
                    data: {'id': status_to_delete},
                    success: function (response) {
                        if (response == true) {
                            var table = $('#project_status_table').DataTable();
                            $('input[name="select_project_status[]"]:checked').each(function () {
                                var tr_id = $(this).attr('data-id');
                                table.row($('#tr_' + tr_id)).remove().draw(false);
                            });
                        }
                        $('#delete_selected').attr('disabled', true);
                        $("#confirm_delete_modal").modal('hide');
                    },
                    error: function (xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        console.log(err.Message);
                        alert(err.Message);
                    }
                });
            }
        });



    </script>