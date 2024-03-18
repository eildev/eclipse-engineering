@extends('backend.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4>Edit Section Details</h4><br>
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
                    <form action="{{ route('update.project.details', $projectDetails->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project Name</label>
                            <div class="col-sm-10 form-group">

                                <select class="form-select @error('projects_id') is-invalid  @enderror" name="projects_id"
                                    aria-label="Default select example">
                                    <option selected="" value=""> Select Projects Name</option>
                                    @foreach ($projects as $sec)
                                        <option
                                            value="{{ $sec->id }}"{{ $sec->id == $projectDetails->projects_id ? 'selected' : '' }}>
                                            {{ $sec->title }}</option>
                                    @endforeach
                                </select>
                                @error('projects_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project Details Title</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control @error('title') is-invalid  @enderror"
                                    value="{{ $projectDetails->title }}" name="title" type="text"
                                    placeholder="Enter Project Details Title" id="example-email-input">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project Details
                                Description</label>
                            <div class="col-sm-10 form-group">
                                <textarea name="description" class="form-control @error('description') is-invalid  @enderror" id="summernote">{!! $projectDetails->description !!}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project Details Icon
                                Name</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control @error('icon_name') is-invalid  @enderror" name="icon_name"
                                    type="text" placeholder="Enter Project Icon Name" id="example-email-input"
                                    value="{{ $projectDetails->icon_name }}">
                                @error('icon_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-input" class="col-sm-2 col-form-label">Section Multiple Image</label>
                            <div class="col-sm-10 form-group">
                                <input name="multi_image" id="image"
                                    class="form-control  @error('multi_image') is-invalid  @enderror" value type="file">
                                @error('multi_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-url-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <div class="row" id="preview_img">
                                    {{-- <img id="showImage" class="rounded avatar-lg row"
                                        src="{{ asset('uploads/projects/multi_img/' . $projectDetails->multi_image) }}"
                                        alt="Image"> --}}
                                    @foreach (explode(',', $projectDetails->multi_image) as $image)
                                        <img style="height: 60px; width:60px; margin-right: 5px;"
                                            src="{{ asset('uploads/projects/multi_img/' . $image) }}" alt="Image">
                                    @endforeach
                                </div>
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


    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png)$/i.test(file
                                .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(100)
                                        .height(80); //create image element 
                                    $('#preview_img').append(
                                        img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>
@endsection
