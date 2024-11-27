@extends('backend.admin_master')
@section('admin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4>About list</h4><br>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">
                                        <a href="{{ route('about.add') }}" class=" btn btn-sm btn-primary text-light fs-4">
                                            +</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <h3 class="card-title">About Datatable</h3>

                        <table id="datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($about as $key => $item)
                                    {{-- @dd($item->image); --}}
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->title ?? '' }}</td>
                                        <td>{{ $item->sub_title ?? '' }}</td>
                                        <td>
                                            {{-- {!! $item->description
                                                ? (strlen($item->description) > 20
                                                    ? substr($item->description, 0, 20) . '...'
                                                    : $item->description)
                                                : '' !!} --}}

                                            {!! $item->description ? Str::limit(strip_tags($item->description), 20, '...') : 'No Description' !!}
                                        </td>
                                        <td>
                                            <img style="height: 60px; width: 60px; object-fit:cover;"
                                                src="{{ file_exists(public_path('uploads/about/' . $item->image)) && !is_null($item->image) ? asset('uploads/about/' . $item->image) : asset('dummy-img/no-img.jpg') }}"
                                                alt="About Image">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-sm {{ $item->status == 1 ? 'btn-success' : 'btn-danger' }} dropdown-toggle"
                                                    type="button" id="dropdownMenuButton{{ $item->id }}"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton${item.id}">
                                                    <li>
                                                        <a class="dropdown-item status_change" href="#"
                                                            data-id="{{ $item->id }}"
                                                            data-status="{{ $item->status == 1 ? 0 : 1 }}">
                                                            Change to {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-warning"
                                                href="{{ route('edit.about', $item->id) }}"><i
                                                    class="fas fa-pencil-alt"></i></a>

                                            <a href="{{ route('delete.about', $item->id) }}" id="delete"
                                                class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>


    <script>
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
                url: `/about/status-update/${id}`,
                type: 'GET',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'), // Include CSRF token
                },
                success: function(res) {
                    if (res.status == 200) {
                        toastr.success(res.message);
                        window.location.reload();
                    } else {
                        toastr.error("Failed to update status");
                    }
                }
            });
        });
    </script>
@endsection
