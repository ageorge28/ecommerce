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
                            <h3 class="box-title">Edit Shipping State</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('admin.shipping.states.update', $shippingState->id) }}">
                                    @csrf

                                    <div class="form-group">
                                        <h5>Shipping City<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="city_id" id="city_id" required="" class="form-control" aria-invalid="false">
                                                <option value="" selected disabled>Select City</option>
                                                @foreach($shippingCities as $shippingCity)
                                                    <option value="{{ $shippingCity->id }}" {{ $shippingCity->id == $shippingState->city_id ? 'selected' : '' }}>{{ $shippingCity->name }}</option>
                                                @endforeach
                                            </select>
                                        <div class="help-block"></div></div>
                                        @error('city_id')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Shipping District<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="district_id" id="district_id" required="" class="form-control" aria-invalid="false">
                                                <option value="" selected disabled>Select District</option>
                                                @foreach($shippingDistricts as $shippingDistrict)
                                                    <option value="{{ $shippingDistrict->id }}" {{ $shippingDistrict->id == $shippingState->district_id ? 'selected' : '' }}>{{ $shippingDistrict->name }}</option>
                                                @endforeach
                                            </select>
                                        <div class="help-block"></div></div>
                                        @error('district_id')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="form-group">
                                        <h5>Shipping State Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" id="name" class="form-control"
                                                required="" value="{{ $shippingState->name }}" data-validation-required-message="This field is required">
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

    <script type="text/javascript">

        $(document).ready(function () {
            $('select[name="city_id"]').on('change', function () {
                var city_id = $(this).val();
                if(city_id)
                {
                    $.ajax({
                        url: "{{ url('/admin/shipping/districts/ajax') }}/" + city_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="district_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="district_id"]').append('<option value="' + value.id + '">' + value.name + '</option>')
                            });
                        } 
                    });
                }
            })
        });

    </script>

@endsection
