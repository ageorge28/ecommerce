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
                            <h3 class="box-title">Edit Coupon</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('admin.coupons.update', ['coupon' => $coupon->id]) }}">
                                    @csrf

                                    <div class="form-group">
                                        <h5>Coupon Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" id="name" class="form-control"
                                                required="" value="{{ $coupon->name }}" data-validation-required-message="This field is required">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('name')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Discount<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="number" name="discount" id="discount" class="form-control"
                                                required="" data-validation-required-message="This field is required" value="{{ $coupon->discount }}">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('discount')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Validity<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="validity" id="validity" class="form-control" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                data-validation-required-message="This field is required" value="{{ $coupon->validity }}">
                                            <div class="help-block"></div>
                                        </div>
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

@endsection
