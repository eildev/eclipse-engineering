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
                    <li class="breadcrumb-item active" aria-current="page">All Home Slider</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('add.slider') }}" class="btn btn-sm btn-primary text-light fs-4">+</a>
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
                            <th>Short Title</th>
                            <th>Sub Title</th>
                            <th>Long Title</th>
                            <th>Slider link</th>
                            <th>Slider Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($sliders as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->short_title ?? '' }}</td>
                                <td>{{ $item->sub_title ?? '' }}</td>
                                <td>
                                    {!! $item->long_title ? Str::limit(strip_tags($item->long_title), 50, '...') : 'No Description' !!}
                                </td>

                                <td>{{ $item->slider_links ?? '' }}</td>
                                <td>
                                    <img style="height: 60px; width: 60px"
                                        src="{{ file_exists(public_path('uploads/slider_image/' . $item->slider_image)) && !is_null($item->slider_image) ? asset('uploads/slider_image/' . $item->slider_image) : asset('dummy-img/no-img.jpg') }}"
                                        alt="Slider Image">

                                </td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="{{ route('edit.slider', $item->id) }}">Edit</a>

                                    <a href="{{ route('delete.slider', $item->id) }}" id="delete"
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
