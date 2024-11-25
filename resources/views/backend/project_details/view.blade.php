@extends('backend.admin_master')
@section('admin')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Section Details</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('add.project.details') }}" class="btn btn-sm btn-primary text-light fs-4">+</a>
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
                            <th>Title</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($projects as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->projectCategory->name }}</td>
                                {{-- <td>{!! $item->description !!}</td> --}}
                                <td>{!! \Illuminate\Support\Str::limit($item->description, 50, '...') !!}</td>

                                <td>
                                    @foreach (explode(',', $item->image) as $image)
                                        <img style="height: 60px; width:60px; margin-right: 5px;"
                                            src="{{ asset('uploads/projects/multi_img/' . $image) }}" alt="Image">
                                    @endforeach
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-warning"
                                        href="{{ route('edit.project.details', $item->id) }}">Edit</a>

                                    <a href="{{ route('delete.project.details', $item->id) }}" id="delete"
                                        class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
