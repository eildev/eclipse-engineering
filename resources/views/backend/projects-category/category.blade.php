@extends('backend.admin_master')
@section('admin')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Project Category </li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="#" class="btn btn-sm btn-primary text-light fs-4" data-bs-toggle="modal"
                    data-bs-target="#categoryModal">+</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="show_category_data">

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add Project Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="categoryForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Category name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="First name" required onkeyup="errorRemove(this);">
                                    <span class="text-danger name_error"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light save_category">Save</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="categoryUpdateModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Update Project Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="categoryUpdateForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Category name</label>
                                    <input type="text" class="form-control edit_name" id="name" name="name"
                                        placeholder="First name" required onkeyup="errorRemove(this);">
                                    <span class="text-danger edit_name_error"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light update_category"
                        data-id="">Update</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        function errorRemove(element) {
            if (element.value != '') {
                $(element).siblings('span').hide();
                $(element).css('border-color', 'green');
            }
        }


        $(document).ready(function() {

            // show error
            function showError(name, message) {
                $(name).css('border-color', 'red'); // Highlight input with red border
                $(name).focus(); // Set focus to the input field
                $(`${name}_error`).show().text(message); // Show error message
            }


            // save bank account information
            const saveCategory = document.querySelector('.save_category');
            saveCategory.addEventListener('click', function(e) {
                e.preventDefault();
                // alert('save category');
                let formData = new FormData($('.categoryForm')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/project/category/store',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        // console.log(res);
                        if (res.status == 200) {
                            $('#categoryModal').modal('hide');
                            $('.categoryForm')[0].reset();
                            categoryView();
                            toastr.success(res.message);
                        } else {
                            if (res.error.name) {
                                showError('.name', res.error.name);
                            }
                        }
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr.responseText); // Debug server response
                    }
                });
            })


            function categoryView() {
                $.ajax({
                    url: '/project/category/view',
                    method: 'GET',
                    success: function(res) {
                        const category = res.data;
                        $('.show_category_data').empty();

                        // Destroy existing DataTable if present
                        if ($.fn.DataTable.isDataTable('#datatable')) {
                            $('#datatable').DataTable().clear().destroy();
                        }

                        if (category.length > 0) {
                            $.each(category, function(index, item) {
                                const status = `
                                        <div class="dropdown">
                                            <button class="btn btn-sm ${
                                                item.status === 1 ? 'btn-success' : 'btn-danger'
                                            } dropdown-toggle" type="button" id="dropdownMenuButton${item.id}" 
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                ${item.status === 1 ? 'Active' : 'Inactive'}
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton${item.id}">
                                                <li>
                                                    <a class="dropdown-item status_change" href="#" 
                                                    data-id="${item.id}" 
                                                    data-status="${item.status === 1 ? 0 : 1}">
                                                    Change to ${item.status === 1 ? 'Inactive' : 'Active'}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>`;

                                const tr = document.createElement('tr');
                                tr.innerHTML = `
                                        <td>${index + 1}</td>
                                        <td>
                                            <a href="#">${item.name ?? ""}</a>
                                        </td>
                                        <td>${status}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning category_edit" data-id='${item.id}' >Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger category_delete" data-id='${item.id}'>Delete</a>
                                        </td>
                                    `;
                                $('.show_category_data').append(tr);
                            });
                        } else {
                            $('.show_category_data').html(`
                                <tr>
                                    <td colspan='4'>
                                        <div class="text-center text-warning mb-2">Data Not Found</div>
                                        <div class="text-center">
                                            <button class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
                                                Add Category Info<i data-feather="plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            `);
                        }

                        // Reinitialize DataTable
                        $('#datatable').DataTable({
                            columnDefs: [{
                                "defaultContent": "",
                                "targets": "_all"
                            }],
                        });
                    }
                });
            }
            categoryView();

            // Handle Status Change
            $(document).on('click', '.status_change', function(e) {
                e.preventDefault();
                let id = $(this).data('id');
                let newStatus = $(this).data('status');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: `/project/category/update/status/${id}`,
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'), // Include CSRF token
                    },
                    success: function(res) {
                        if (res.status == 200) {
                            toastr.success(res.message);
                            categoryView(); // Refresh category data

                        } else {
                            toastr.error("Failed to update status");
                        }
                    }
                });
            });


            // edit Category Data
            $(document).on('click', '.category_edit', function(e) {
                e.preventDefault();
                // console.log('0k');
                let id = this.getAttribute('data-id');

                // alert('Ok');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: `/project/category/edit/${id}`,
                    type: 'GET',
                    success: function(res) {
                        if (res.status == 200) {
                            const category = res.data;
                            $('.edit_name').val(category.name);

                            $('.update_category').attr('data-id', category.id);
                            // Use Bootstrap's modal API to open the modal
                            const updateModal = new bootstrap.Modal(document.getElementById(
                                'categoryUpdateModal'));
                            updateModal.show();

                        } else {
                            toastr.warning("No Data Found");
                        }
                    }
                });
            })

            // update bank
            $('.update_category').click(function(e) {
                e.preventDefault();
                // alert('ok');
                let id = $(this).attr('data-id');
                // console.log(id);
                let formData = new FormData($('.categoryUpdateForm')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: `/project/category/update/${id}`,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.status == 200) {
                            $('#categoryUpdateModal').modal('hide');
                            $('.categoryUpdateForm')[0].reset();
                            categoryView();
                            toastr.success(res.message);
                        } else {
                            if (res.error.name) {
                                showError('.edit_name', res.error.name);
                            }
                        }
                    }
                });
            })

            // bank Delete
            $(document).on('click', '.category_delete', function(e) {
                // $('.bank_delete').click(function(e) {
                e.preventDefault();
                let id = this.getAttribute('data-id');

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to Delete this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: `/project/category/delete/${id}`,
                            type: 'GET',
                            success: function(data) {
                                if (data.status == 200) {
                                    toastr.success(data.message);
                                    categoryView();
                                } else {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Oops...",
                                        text: data.message,
                                        footer: '<a href="#">Why do I have this issue?</a>'
                                    });
                                }
                            }
                        });
                    }
                });
            })


        })
    </script>
@endsection
