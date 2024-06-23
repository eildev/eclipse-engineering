@extends('backend.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Update Sister Concerns</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Sister Concerns</a></li>
                            <li class="breadcrumb-item active">Update Sister Concerns</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('update.sister', $sister->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Enter Title"
                                        id="example-text-input" name="name" value="{{ $sister->name }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="summernote" placeholder="Message" name="description">{{ $sister->description }}</textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" placeholder="Icon" id="image"
                                        name="image" value="{{ $sister->logo }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-url-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg"
                                        src="{{ asset('uploads/sister-concern/' . $sister->logo) }}" alt="User Image">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-number-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-info ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>


    </div>
@endsection
