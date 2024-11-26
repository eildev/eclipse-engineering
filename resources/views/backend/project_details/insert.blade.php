@extends('backend.admin_master')
@section('admin')
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4>Add Project Details</h4><br>
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
                    <form action="{{ route('store.project.details') }}" method="post" id="myForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project Category</label>
                            <div class="col-sm-10 form-group">
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option selected="" value="">Select Projects Category</option>
                                    @foreach ($projectsCategory as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                <input class="form-control " name="title" type="text" placeholder="Enter Project Title"
                                    id="example-email-input">
                                {{-- @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project
                                Description</label>
                            <div class="col-sm-10 form-group">
                                <textarea name="description" class="form-control" id="summernote"></textarea>
                                {{-- @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Project Icon</label>
                            <div class="col-sm-10 form-group">
                                <select class="form-select" name="icon_name" aria-label="Default select example">
                                    <option selected="" value="">Select Projects Icon</option>
                                    <option value="wind-turbine">Wind Turbine</option>
                                    <option value="energy">Energy</option>
                                    <option value="solar-panel-1">Solar Panel 1</option>
                                    <option value="solar-panel">Solar Panel</option>
                                    <option value="environmental">Environmental</option>
                                    <option value="save-energy">Save Energy</option>
                                    <option value="wind-energy">Wind Energy</option>
                                    <option value="green-power">Green Power</option>
                                    <option value="solar-energy">Solar Energy</option>
                                    <option value="solar-energy-1">Solar Energy 1</option>
                                    <option value="battery">Battery</option>
                                    <option value="solar-cell">Solar Cell</option>
                                    <option value="hydropower">Hydropower</option>
                                    <option value="green-energy">Green Energy</option>
                                    <option value="co-light">Eco Light</option>
                                    <option value="solar-energy-2">Solar Energy 2</option>
                                    <option value="renewable-energy">Renewable Energy</option>
                                    <option value="solar-energy-3">Solar Energy 3</option>
                                    <option value="technician">Technician</option>
                                    <option value="energy">Energy</option>
                                    <option value="flaticon-smog-factory-building-contamination">Factory</option>
                                    {{-- <option value="quality">Quality</option> --}}
                                    {{-- <option value="experience">Experience</option> --}}
                                    {{-- <option value="completed-task">Completed Task</option> --}}
                                    {{-- <option value="back-in-time">Back In Time</option> --}}
                                    {{-- <option value="spray">Spray</option> --}}
                                    {{-- <option value="experience-1">Experience 1</option> --}}
                                    {{-- <option value="budget">Budget</option> --}}
                                    {{-- <option value="continuous-improvement">Continuous Improvement</option> --}}
                                    {{-- <option value="product-lauch">Product Lauch</option> --}}
                                    {{-- <option value="targeting">Targeting</option> --}}
                                    {{-- <option value="leadership">Leadership</option> --}}
                                    {{-- <option value="mission">Mission</option> --}}
                                    {{-- <option value="customize">Customize</option> --}}
                                </select>
                                @error('icon_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-input" class="col-sm-2 col-form-label">Project Details Image</label>
                            <div class="col-sm-10 form-group">
                                <input name="multi_image" id="image" class="form-control" type="file">
                                {{-- @error('multi_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-url-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg row" src="{{ asset('dummy-img/no-img.jpg') }}"
                                    alt="Image">
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


    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    projects_id: {
                        required: true,
                    },
                    title: {
                        required: true,
                    },
                    icon_name: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                    multi_image: {
                        required: true,
                    },
                },
                messages: {
                    projects_id: {
                        required: 'Please Enter The Title',
                    },
                    title: {
                        required: 'Please Enter The Title',
                    },
                    icon_name: {
                        required: 'Please Enter The SubTitle',
                    },
                    description: {
                        required: 'Please Enter The SubTitle',
                    },
                    multi_image: {
                        required: 'Please Enter The SubTitle',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                    $(element).addClass('is-valid');
                }

            });
        });
    </script>
@endsection
