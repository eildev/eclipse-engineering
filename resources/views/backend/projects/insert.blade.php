@extends('backend.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4>Add Projects</h4><br>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">
                                    <a href="{{ route('view.projects') }}" class=" btn btn-sm btn-primary text-light fs-4">
                                        +</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <form action="{{ route('store.projects') }}" method="POST" id="myForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Projects Title</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control" name="title" type="text" placeholder="Enter Projects Title"
                                    id="example-email-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Projects Subtitle</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control" name="sub_title" type="text"
                                    placeholder="Enter Projects Title" id="example-email-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Projects Description</label>
                            <div class="col-sm-10 form-group">
                                <textarea name="description" class="form-control" id="summernote"></textarea>
                            </div>

                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-input" class="col-sm-2 col-form-label">Projects Image</label>
                            <div class="col-sm-10 form-group">
                                <input name="image" class="form-control" type="file" id="image">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-url-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg object-fit-contain"
                                    src="{{ asset('dummy-img/no-img.jpg') }}" alt="About Image">
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
                    title: {
                        required: true,
                    },
                    sub_title: {
                        required: true,
                    },
                },
                messages: {
                    title: {
                        required: 'Please Enter The Title',
                    },
                    sub_title: {
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
