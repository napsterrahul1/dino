/**
 * DataTables Basic
 */

$(function() {
    'use strict';

    var reimburseemnt_table = $('.reimbursement-datatables'),
        advance_table = $('.advanced-column-search'),
        user_table = $('.users-column-search'),
        // master_table = $('.master-column-search'),
        settlement_table = $('.settlement-dattables'),
        assetPath = '/';

    if ($('body').attr('data-framework') === 'laravel') {
        assetPath = $('body').attr('data-asset-path');
    }




    // DataTable with buttons
    // --------------------------------------------------------------------

    if (reimburseemnt_table.length) {
        // Setup - add a text input to each footer cell
        $('.reimbursement-datatables thead tr').clone(true).appendTo('.reimbursement-datatables thead');
        $('.reimbursement-datatables thead tr:eq(1) th').each(function(i) {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');

            $('input', this).on('keyup change', function() {
                if (dt_filter.column(i).search() !== this.value) {
                    dt_filter.column(i).search(this.value).draw();
                }
            });
        });

        var dt_filter = reimburseemnt_table.DataTable({
            ajax: 'table-datatable.json',
            columns: [
                { data: 'id' },
                { data: 'full_name' },
                // { data: 'email' },
                { data: 'post' },
                // { data: 'city' },
                { data: 'start_date' },
                { data: 'salary' },
                { data: 'status' },
                { data: '' }

            ],
            columnDefs: [{
                    // Label
                    targets: -2,
                    render: function(data, type, full, meta) {
                        var $status_number = full['status'];
                        var $status = {
                            1: { title: 'Pending', class: 'badge-light-primary' },
                            2: { title: 'Approved', class: ' badge-light-success' },
                            3: { title: 'Rejected', class: ' badge-light-danger' },
                            4: { title: 'Corrections', class: ' badge-light-warning' },
                            5: { title: 'In Process', class: ' badge-light-info' }
                        };
                        if (typeof $status[$status_number] === 'undefined') {
                            return data;
                        }
                        return (
                            '<span class="badge badge-pill ' +
                            $status[$status_number].class +
                            '">' +
                            $status[$status_number].title +
                            '</span>'
                        );
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return (
                            '<div class="d-inline-flex">' +
                            '<a href="details.php" class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                            feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-right">' +
                            '<a href="details.php" class="dropdown-item">' +
                            feather.icons['file-text'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Details</a>' +
                            '<a href="javascript:;" class="dropdown-item">' +
                            feather.icons['archive'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Archive</a>' +
                            '<a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Delete</a>' +
                            '</div>' +
                            '</div>' +
                            '<a href="edit" class="item-edit">' +
                            feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
                            '</a>'
                        );
                    }
                }
                // ,{
                //   // Label
                //   targets: -1,
                //   render: function (data, type, full, meta) {
                //     var $status_number = full['action'];
                //     if (typeof $status[$status_number] === 'undefined') {
                //       return data;
                //     }
                //     return (
                //       '<div class="dropdown"><button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown"><i data-feather="more-vertical"></i></button><div class="dropdown-menu"><a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="mr-50"></i><span>Edit</span></a><a class="dropdown-item" href="javascript:void(0);"><i data-feather="trash" class="mr-50"></i><span>Delete</span></a></div></div>'
                //     );
                //   }
                // }
            ],
            dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            orderCellsTop: true,
            buttons: [{
                    extend: 'collection',
                    className: 'btn btn-outline-secondary dropdown-toggle mr-2',
                    text: feather.icons['share'].toSvg({ class: 'font-small-4 mr-50' }) + 'Export',
                    buttons: [{
                            extend: 'print',
                            text: feather.icons['printer'].toSvg({ class: 'font-small-4 mr-50' }) + 'Print',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'csv',
                            text: feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) + 'Csv',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'excel',
                            text: feather.icons['file'].toSvg({ class: 'font-small-4 mr-50' }) + 'Excel',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'pdf',
                            text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 mr-50' }) + 'Pdf',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'copy',
                            text: feather.icons['copy'].toSvg({ class: 'font-small-4 mr-50' }) + 'Copy',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        }
                    ],
                    init: function(api, node, config) {
                        $(node).removeClass('btn-secondary');
                        $(node).parent().removeClass('btn-group');
                        setTimeout(function() {
                            $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
                        }, 50);
                    }
                },
                {
                    text: feather.icons['plus'].toSvg({ class: 'mr-50 font-small-4' }) + 'Add New Record',
                    className: 'create-new btn btn-primary',
                    attr: {
                        'onclick': "location.href = 'add';",
                    },
                    init: function(api, node, config) {
                        $(node).removeClass('btn-secondary');
                    }
                }
            ],
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            }
        });
    }

    if (advance_table.length) {
        // Setup - add a text input to each footer cell
        $('.advanced-column-search thead tr').clone(true).appendTo('.advanced-column-search thead');
        $('.advanced-column-search thead tr:eq(1) th').each(function(i) {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');

            $('input', this).on('keyup change', function() {
                if (dt_filter.column(i).search() !== this.value) {
                    dt_filter.column(i).search(this.value).draw();
                }
            });
        });

        var dt_filter = advance_table.DataTable({
            ajax: 'table-datatable.json',
            columns: [
                { data: 'id' },
                { data: 'full_name' },
                // { data: 'email' },
                { data: 'post' },
                // { data: 'city' },
                { data: 'start_date' },
                { data: 'salary' },
                { data: 'status' },
                { data: '' }

            ],
            columnDefs: [{
                    // Label
                    targets: -2,
                    render: function(data, type, full, meta) {
                        var $status_number = full['status'];
                        var $status = {
                            1: { title: 'Pending', class: 'badge-light-primary' },
                            2: { title: 'Approved', class: ' badge-light-success' },
                            3: { title: 'Rejected', class: ' badge-light-danger' },
                            4: { title: 'Corrections', class: ' badge-light-warning' },
                            5: { title: 'In Process', class: ' badge-light-info' }
                        };
                        if (typeof $status[$status_number] === 'undefined') {
                            return data;
                        }
                        return (
                            '<span class="badge badge-pill ' +
                            $status[$status_number].class +
                            '">' +
                            $status[$status_number].title +
                            '</span>'
                        );
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return (
                            '<div class="d-inline-flex">' +
                            '<a href="details.php" class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                            feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-right">' +
                            '<a href="details.php" class="dropdown-item">' +
                            feather.icons['file-text'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Details</a>' +
                            '<a href="javascript:;" class="dropdown-item">' +
                            feather.icons['archive'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Archive</a>' +
                            '<a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Delete</a>' +
                            '</div>' +
                            '</div>' +
                            '<a href="edit" class="item-edit">' +
                            feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
                            '</a>'
                        );
                    }
                }
                // ,{
                //   // Label
                //   targets: -1,
                //   render: function (data, type, full, meta) {
                //     var $status_number = full['action'];
                //     if (typeof $status[$status_number] === 'undefined') {
                //       return data;
                //     }
                //     return (
                //       '<div class="dropdown"><button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown"><i data-feather="more-vertical"></i></button><div class="dropdown-menu"><a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="mr-50"></i><span>Edit</span></a><a class="dropdown-item" href="javascript:void(0);"><i data-feather="trash" class="mr-50"></i><span>Delete</span></a></div></div>'
                //     );
                //   }
                // }
            ],
            dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            orderCellsTop: true,
            buttons: [{
                    extend: 'collection',
                    className: 'btn btn-outline-secondary dropdown-toggle mr-2',
                    text: feather.icons['share'].toSvg({ class: 'font-small-4 mr-50' }) + 'Export',
                    buttons: [{
                            extend: 'print',
                            text: feather.icons['printer'].toSvg({ class: 'font-small-4 mr-50' }) + 'Print',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'csv',
                            text: feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) + 'Csv',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'excel',
                            text: feather.icons['file'].toSvg({ class: 'font-small-4 mr-50' }) + 'Excel',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'pdf',
                            text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 mr-50' }) + 'Pdf',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'copy',
                            text: feather.icons['copy'].toSvg({ class: 'font-small-4 mr-50' }) + 'Copy',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        }
                    ],
                    init: function(api, node, config) {
                        $(node).removeClass('btn-secondary');
                        $(node).parent().removeClass('btn-group');
                        setTimeout(function() {
                            $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
                        }, 50);
                    }
                },
                {
                    text: feather.icons['plus'].toSvg({ class: 'mr-50 font-small-4' }) + 'Add New Record',
                    className: 'create-new btn btn-primary',
                    attr: {
                        'onclick': "location.href = 'add';",
                        // 'data-target': '#modals-slide-in'
                    },
                    init: function(api, node, config) {
                        $(node).removeClass('btn-secondary');
                    }
                }
            ],
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            }
        });
    }


    if (user_table.length) {
        // Setup - add a text input to each footer cell
        $('.users-column-search thead tr').clone(true).appendTo('.users-column-search thead');
        $('.users-column-search thead tr:eq(1) th').each(function(i) {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');

            $('input', this).on('keyup change', function() {
                if (dt_filter.column(i).search() !== this.value) {
                    dt_filter.column(i).search(this.value).draw();
                }
            });
        });

        var dt_filter = user_table.DataTable({
            ajax: 'table-datatable.json',
            columns: [
                { data: 'id' },
                { data: 'full_name' },
                // { data: 'email' },
                { data: 'post' },
                // { data: 'city' },
                { data: 'start_date' },
                { data: 'salary' },
                { data: 'status' },
                { data: '' }

            ],
            columnDefs: [{
                    // Label
                    targets: -2,
                    render: function(data, type, full, meta) {
                        var $status_number = full['status'];
                        var $status = {
                            1: { title: 'Pending', class: 'badge-light-primary' },
                            2: { title: 'Approved', class: ' badge-light-success' },
                            3: { title: 'Rejected', class: ' badge-light-danger' },
                            4: { title: 'Corrections', class: ' badge-light-warning' },
                            5: { title: 'In Process', class: ' badge-light-info' }
                        };
                        if (typeof $status[$status_number] === 'undefined') {
                            return data;
                        }
                        return (
                            '<span class="badge badge-pill ' +
                            $status[$status_number].class +
                            '">' +
                            $status[$status_number].title +
                            '</span>'
                        );
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return (
                            '<div class="d-inline-flex">' +
                            '<a href="details.php" class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                            feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-right">' +
                            '<a href="details.php" class="dropdown-item">' +
                            feather.icons['file-text'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Details</a>' +
                            '<a href="javascript:;" class="dropdown-item">' +
                            feather.icons['archive'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Archive</a>' +
                            '<a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Delete</a>' +
                            '</div>' +
                            '</div>' +
                            '<a href="edit" class="item-edit">' +
                            feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
                            '</a>'
                        );
                    }
                }
                // ,{
                //   // Label
                //   targets: -1,
                //   render: function (data, type, full, meta) {
                //     var $status_number = full['action'];
                //     if (typeof $status[$status_number] === 'undefined') {
                //       return data;
                //     }
                //     return (
                //       '<div class="dropdown"><button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown"><i data-feather="more-vertical"></i></button><div class="dropdown-menu"><a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="mr-50"></i><span>Edit</span></a><a class="dropdown-item" href="javascript:void(0);"><i data-feather="trash" class="mr-50"></i><span>Delete</span></a></div></div>'
                //     );
                //   }
                // }
            ],
            dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            orderCellsTop: true,
            buttons: [{
                    extend: 'collection',
                    className: 'btn btn-outline-secondary dropdown-toggle mr-2',
                    text: feather.icons['share'].toSvg({ class: 'font-small-4 mr-50' }) + 'Export',
                    buttons: [{
                            extend: 'print',
                            text: feather.icons['printer'].toSvg({ class: 'font-small-4 mr-50' }) + 'Print',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'csv',
                            text: feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) + 'Csv',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'excel',
                            text: feather.icons['file'].toSvg({ class: 'font-small-4 mr-50' }) + 'Excel',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'pdf',
                            text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 mr-50' }) + 'Pdf',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'copy',
                            text: feather.icons['copy'].toSvg({ class: 'font-small-4 mr-50' }) + 'Copy',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        }
                    ],
                    init: function(api, node, config) {
                        $(node).removeClass('btn-secondary');
                        $(node).parent().removeClass('btn-group');
                        setTimeout(function() {
                            $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
                        }, 50);
                    }
                },
                {
                    text: feather.icons['plus'].toSvg({ class: 'mr-50 font-small-4' }) + 'Add New Record',
                    className: 'create-new btn btn-primary',
                    attr: {
                        'onclick': "location.href = 'add';",
                        // 'data-target': '#modals-slide-in'
                    },
                    init: function(api, node, config) {
                        $(node).removeClass('btn-secondary');
                    }
                }
            ],
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            }
        });
    }



    if (settlement_table.length) {
        // Setup - add a text input to each footer cell
        $('.settlement-dattables thead tr').clone(true).appendTo('.settlement-dattables thead');
        $('.settlement-dattables thead tr:eq(1) th').each(function(i) {
            var title = $(this).text();
            $(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');

            $('input', this).on('keyup change', function() {
                if (dt_filter.column(i).search() !== this.value) {
                    dt_filter.column(i).search(this.value).draw();
                }
            });
        });

        var dt_filter = settlement_table.DataTable({
            ajax: 'table-datatable.json',
            columns: [
                { data: 'id' },
                { data: 'full_name' },
                // { data: 'email' },
                { data: 'post' },
                // { data: 'city' },
                { data: 'start_date' },
                { data: 'salary' },
                { data: 'status' },
                { data: '' }

            ],
            columnDefs: [{
                    // Label
                    targets: -2,
                    render: function(data, type, full, meta) {
                        var $status_number = full['status'];
                        var $status = {
                            1: { title: 'Pending', class: 'badge-light-primary' },
                            2: { title: 'Approved', class: ' badge-light-success' },
                            3: { title: 'Rejected', class: ' badge-light-danger' },
                            4: { title: 'Corrections', class: ' badge-light-warning' },
                            5: { title: 'In Process', class: ' badge-light-info' }
                        };
                        if (typeof $status[$status_number] === 'undefined') {
                            return data;
                        }
                        return (
                            '<span class="badge badge-pill ' +
                            $status[$status_number].class +
                            '">' +
                            $status[$status_number].title +
                            '</span>'
                        );
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return (
                            '<div class="d-inline-flex">' +
                            '<a href="details.php" class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                            feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-right">' +
                            '<a href="details.php" class="dropdown-item">' +
                            feather.icons['file-text'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Details</a>' +
                            '<a href="javascript:;" class="dropdown-item">' +
                            feather.icons['archive'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Archive</a>' +
                            '<a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({ class: 'mr-50 font-small-4' }) +
                            'Delete</a>' +
                            '</div>' +
                            '</div>' +
                            '<a href="edit" class="item-edit">' +
                            feather.icons['edit'].toSvg({ class: 'font-small-4' }) +
                            '</a>'
                        );
                    }
                }
                // ,{
                //   // Label
                //   targets: -1,
                //   render: function (data, type, full, meta) {
                //     var $status_number = full['action'];
                //     if (typeof $status[$status_number] === 'undefined') {
                //       return data;
                //     }
                //     return (
                //       '<div class="dropdown"><button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown"><i data-feather="more-vertical"></i></button><div class="dropdown-menu"><a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="mr-50"></i><span>Edit</span></a><a class="dropdown-item" href="javascript:void(0);"><i data-feather="trash" class="mr-50"></i><span>Delete</span></a></div></div>'
                //     );
                //   }
                // }
            ],
            dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            orderCellsTop: true,
            buttons: [{
                    extend: 'collection',
                    className: 'btn btn-outline-secondary dropdown-toggle mr-2',
                    text: feather.icons['share'].toSvg({ class: 'font-small-4 mr-50' }) + 'Export',
                    buttons: [{
                            extend: 'print',
                            text: feather.icons['printer'].toSvg({ class: 'font-small-4 mr-50' }) + 'Print',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'csv',
                            text: feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) + 'Csv',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'excel',
                            text: feather.icons['file'].toSvg({ class: 'font-small-4 mr-50' }) + 'Excel',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'pdf',
                            text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 mr-50' }) + 'Pdf',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        },
                        {
                            extend: 'copy',
                            text: feather.icons['copy'].toSvg({ class: 'font-small-4 mr-50' }) + 'Copy',
                            className: 'dropdown-item',
                            exportOptions: { columns: [3, 4, 5, 6, 7] }
                        }
                    ],
                    init: function(api, node, config) {
                        $(node).removeClass('btn-secondary');
                        $(node).parent().removeClass('btn-group');
                        setTimeout(function() {
                            $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
                        }, 50);
                    }
                },

            ],
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            }
        });
    }




    // on key up from input field
    $('input.dt-input').on('keyup', function() {
        filterColumn($(this).attr('data-column'), $(this).val());
    });

    // Add New record
    // ? Remove/Update this code as per your requirements ?

    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .custom-select').removeClass('custom-select-sm').removeClass('form-control-sm');

});