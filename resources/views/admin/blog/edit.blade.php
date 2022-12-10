@extends('admin.layouts.app')

@section('content')

    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3>Add Blog Post</h3>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <form method="post" action="{{ route('admin.blog.update', $blog->id) }}" enctype="multipart/form-data">

                    @csrf

                    <div class="col-12">

                        <div class="box">

                            <div class="box-body">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Blog Title English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="title_en" required value="{{ $blog->title_en }}">
                                                @error('title_en')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Blog Title Hindi<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="title_hin" required  value="{{ $blog->title_hin }}" />
                                                @error('title_hin')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <h5>Blog Category<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="blogcategory_id" id="blogcategory_id" required="" 
                                                    class="form-control"  >
                                                    <option value="" selected disabled>Select Blog Category</option>
                                                    @foreach ($blogCategories as $blogCategory)
                                                        <option value="{{ $blogCategory->id }}" {{ $blogCategory->id == $blog->blogcategory_id ? 'selected' : ''}}>{{ $blogCategory->name_en }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="help-block"></div>
                                            </div>
                                            @error('blogcategory_id')
                                                <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                            @enderror
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Blog Image<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input class="form-control" type="file" name="image"
                                                    onchange="mainThumbnailUrl(this)">
                                                @error('image')
                                                    <div class="form-control-feedback"><small>{{ $message }}</small>
                                                    </div>
                                                @enderror
                                                <img id="mainThumbnail" />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Description English<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <textarea name="description_en" id="editor1" class="form-control"
                                                    required>
                                                    {{ $blog->description_en }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Description Hindi<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <textarea name="description_hin" id="editor2" class="form-control"
                                                    required>
                                                    {{ $blog->description_hin }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <input class="btn btn-round btn-primary" type="submit" value="Update Blog Post" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- /.row -->


                        </div>
                        <!-- /.box-body -->

                    </div>
                    <!-- /.box -->
                </form>

            </div>         
            <!-- ./col -->
    <!-- /.row -->
        </section>
    <!-- /.content -->
    </div>

    <script type="text/javascript">
        function mainThumbnailUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThumbnail').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
