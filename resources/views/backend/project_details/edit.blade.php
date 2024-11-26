@extends('backend.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4>Edit Project </h4><br>
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
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project Category</label>
                            <div class="col-sm-10 form-group">
                                <select class="form-select @error('category_id') is-invalid  @enderror" name="category_id"
                                    aria-label="Default select example">
                                    <option selected="" value="">Select Projects Category</option>
                                    @foreach ($projectsCategory as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $projectDetails->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project Title</label>
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
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project
                                Description</label>
                            <div class="col-sm-10 form-group">
                                <textarea name="description" class="form-control @error('description') is-invalid  @enderror" id="summernote">{!! $projectDetails->description !!}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project Icon</label>
                            <div class="col-sm-10 form-group">
                                <select class="form-select" name="icon_name" aria-label="Default select example">
                                    <option value="" {{ $projectDetails->icon_name == '' ? 'selected' : '' }}>Select
                                        Projects Icon</option>
                                    <option value="wind-turbine"
                                        {{ $projectDetails->icon_name == 'wind-turbine' ? 'selected' : '' }}>Wind Turbine
                                    </option>
                                    <option value="energy" {{ $projectDetails->icon_name == 'energy' ? 'selected' : '' }}>
                                        Energy</option>
                                    <option value="solar-panel-1"
                                        {{ $projectDetails->icon_name == 'solar-panel-1' ? 'selected' : '' }}>Solar Panel 1
                                    </option>
                                    <option value="solar-panel"
                                        {{ $projectDetails->icon_name == 'solar-panel' ? 'selected' : '' }}>Solar Panel
                                    </option>
                                    <option value="environmental"
                                        {{ $projectDetails->icon_name == 'environmental' ? 'selected' : '' }}>Environmental
                                    </option>
                                    <option value="save-energy"
                                        {{ $projectDetails->icon_name == 'save-energy' ? 'selected' : '' }}>Save Energy
                                    </option>
                                    <option value="wind-energy"
                                        {{ $projectDetails->icon_name == 'wind-energy' ? 'selected' : '' }}>Wind Energy
                                    </option>
                                    <option value="green-power"
                                        {{ $projectDetails->icon_name == 'green-power' ? 'selected' : '' }}>Green Power
                                    </option>
                                    <option value="solar-energy"
                                        {{ $projectDetails->icon_name == 'solar-energy' ? 'selected' : '' }}>Solar Energy
                                    </option>
                                    <option value="solar-energy-1"
                                        {{ $projectDetails->icon_name == 'solar-energy-1' ? 'selected' : '' }}>Solar Energy
                                        1</option>
                                    <option value="battery"
                                        {{ $projectDetails->icon_name == 'battery' ? 'selected' : '' }}>Battery</option>
                                    <option value="solar-cell"
                                        {{ $projectDetails->icon_name == 'solar-cell' ? 'selected' : '' }}>Solar Cell
                                    </option>
                                    <option value="hydropower"
                                        {{ $projectDetails->icon_name == 'hydropower' ? 'selected' : '' }}>Hydropower
                                    </option>
                                    <option value="green-energy"
                                        {{ $projectDetails->icon_name == 'green-energy' ? 'selected' : '' }}>Green Energy
                                    </option>
                                    <option value="co-light"
                                        {{ $projectDetails->icon_name == 'co-light' ? 'selected' : '' }}>Eco Light</option>
                                    <option value="solar-energy-2"
                                        {{ $projectDetails->icon_name == 'solar-energy-2' ? 'selected' : '' }}>Solar Energy
                                        2</option>
                                    <option value="renewable-energy"
                                        {{ $projectDetails->icon_name == 'renewable-energy' ? 'selected' : '' }}>Renewable
                                        Energy</option>
                                    <option value="solar-energy-3"
                                        {{ $projectDetails->icon_name == 'solar-energy-3' ? 'selected' : '' }}>Solar Energy
                                        3</option>
                                    <option value="technician"
                                        {{ $projectDetails->icon_name == 'technician' ? 'selected' : '' }}>Technician
                                    </option>
                                    <option value="flaticon-smog-factory-building-contamination"
                                        {{ $projectDetails->icon_name == 'flaticon-smog-factory-building-contamination' ? 'selected' : '' }}>
                                        Factory</option>
                                </select>

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
                                    <img id="showImage"
                                        style="height: 60px; width:100px; margin-right: 5px; object-fit: cover;"
                                        src="{{ $projectDetails->image ? asset('uploads/projects/multi_img/' . $projectDetails->image) : asset('dummy-img/no-img.jpg') }}"
                                        alt="Image">
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
