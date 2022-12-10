@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Sub Sub Category</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('admin.subsubcategories.update', $subSubCategory->id) }}">
                                    @csrf

                                    <div class="form-group">
                                        <h5>Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="category_id" id="category_id" required="" class="form-control" aria-invalid="false">
                                                <option value="" selected disabled>Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id == $subSubCategory->category_id ? 'selected' : '' }}>{{ $category->name_en }}</option>
                                                @endforeach
                                            </select>
                                        <div class="help-block"></div></div>
                                        @error('category_id')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Sub Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="subcategory_id" id="subcategory_id" required="" class="form-control" aria-invalid="false">
                                                <option value="" selected disabled>Select Sub Category</option>
                                                @foreach($subcategories as $subcategory)
                                                    <option value="{{ $subcategory->id }}" {{ $subcategory->id == $subSubCategory->subcategory_id ? 'selected' : '' }}>{{ $subcategory->name_en }}</option>
                                                @endforeach
                                            </select>
                                        <div class="help-block"></div></div>
                                        @error('subcategory_id')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Sub Sub Category Name English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name_en" id="name_en" class="form-control"
                                                required="" value="{{ $subSubCategory->name_en }}" data-validation-required-message="This field is required">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('name_en')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Sub Sub Category Name Hindi<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name_hin" id="name_hin" class="form-control"
                                                required="" data-validation-required-message="This field is required" value="{{ $subSubCategory->name_hin }}">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('name_hin')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                                    </div>
                                </form>
                                <!-- /.col -->

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- /.box -->
                </div>

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->

    <script type="text/javascript">

        $(document).ready(function () {
            $('select[name="category_id"]').on('change', function () {
                var category_id = $(this).val();
                if(category_id)
                {
                    $.ajax({
                        url: "{{ url('/admin/subcategories/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append('<option value="' + value.id + '">' + value.name_en + '</option>')
                            });
                        } 
                    });
                }
            })
        });

    </script>

@endsection
