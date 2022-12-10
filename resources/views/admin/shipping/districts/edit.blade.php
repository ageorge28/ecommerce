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
                            <h3 class="box-title">Edit Shipping District</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('admin.shipping.districts.update', $shippingDistrict->id) }}">
                                    @csrf

                                    <div class="form-group">
                                        <h5>Shipping City English<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="city_id" id="city_id" required="" class="form-control" aria-invalid="false">
                                                <option value="" selected disabled>Select City</option>
                                                @foreach($shippingCities as $shippingCity)
                                                    <option value="{{ $shippingCity->id }}" {{ $shippingCity->id == $shippingDistrict->city_id ? 'selected' : '' }}>{{ $shippingCity->name }}</option>
                                                @endforeach
                                            </select>
                                        <div class="help-block"></div></div>
                                        @error('city_id')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Shipping District Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" id="name" class="form-control"
                                                required="" value="{{ $shippingDistrict->name }}" data-validation-required-message="This field is required">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('name')
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

@endsection
