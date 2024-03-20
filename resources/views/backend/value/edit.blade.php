@extends('backend.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4>Edit Value</h4><br>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">
                                    <a href="{{ route('view.project.details') }}"
                                        class=" btn btn-sm btn-primary text-light fs-4"> +</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <form action="{{ route('update.value', $value->id) }}" method="post" >
                        @csrf
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Update Value Title</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control @error('title') is-invalid  @enderror"
                                    value="{{ $value->title }}" name="title" type="text"
                                    placeholder="Enter Project Details Title" id="example-email-input">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Update Value Description</label>
                            <div class="col-sm-10 form-group">
                                <textarea name="description" class="form-control @error('description') is-invalid  @enderror">{{ $value->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Update Icon Name</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control @error('icon') is-invalid  @enderror" name="icon"
                                    type="text" placeholder="Enter Project Icon Name" id="example-email-input"
                                    value="{{ $value->icon }}">
                                @error('icon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-number-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-info ">
                            </div>
                        </div>
                    </form>
                    <!-- end row -->
                </div>
            </div>
        </div> <!-- end col -->
    </div>


    
@endsection
