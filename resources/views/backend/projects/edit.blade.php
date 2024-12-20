@extends('backend.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4>Edit Projects Heading</h4><br>
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
                    <form action="{{ route('update.projects', $project->id) }}" method="post" id ="myForm"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Projects Heading</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control" name="title" value="{{ $project->title ?? '' }}"
                                    type="text" placeholder="Enter Projects Title" id="example-email-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Projects Sub Heading</label>
                            <div class="col-sm-10 form-group">
                                <input class="form-control" name="sub_title" value="{{ $project->title ?? '' }}"
                                    type="text" placeholder="Enter Project Sub Title" id="example-email-input">
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
                    category_name: {
                        required: true,
                    },


                    title: {
                        required: true,
                    },
                    description: {
                        required: true,
                    }
                },
                messages: {
                    category_name: {
                        required: 'Please Select The Category Name',
                    },
                    title: {
                        required: 'Please Enter The Title',
                    },
                    description: {
                        required: 'Please Enter The Description',
                    }
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
