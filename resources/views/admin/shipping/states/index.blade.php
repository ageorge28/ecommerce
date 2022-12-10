@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-8">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Shipping States</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Shipping City</th>
                                            <th>Shipping District</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($shippingStates as $shippingState)
                                            <tr>
                                                <td>{{ $shippingState->city->name }}</td>
                                                <td>{{ $shippingState->district->name }}</td>
                                                <td>{{ $shippingState->name }}</td>
                                                <td>
                                                    <a href="{{ route('admin.shipping.states.edit', $shippingState->id) }}" class="btn btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                                                    <a id="delete" href="{{ route('admin.shipping.states.delete', $shippingState->id) }}" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>

                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- /.box -->
                </div>
                <!-- /.col -->

                <div class="col-4">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Shipping State</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('admin.shipping.states.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <h5>Shipping City Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="city_id" id="city_id" required="" class="form-control" aria-invalid="false">
                                                <option value="" selected disabled>Select City</option>
                                                @foreach($shippingCities as $shippingCity)
                                                    <option value="{{ $shippingCity->id }}">{{ $shippingCity->name }}</option>
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
                                            <select name="district_id" id="district_id" required="" class="form-control" aria-invalid="false">
                                                <option value="" selected disabled>Select District</option>
                                                @foreach($shippingDistricts as $shippingDistrict)
                                                    <option value="{{ $shippingDistrict->id }}">{{ $shippingDistrict->name }}</option>
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
                                                required="" data-validation-required-message="This field is required">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('name')
                                            <div class="form-control-feedback"><small>{{ $message }}</small></div>
                                        @enderror
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                    </div>

                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add">
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
                        url: "{{ url('/shipping/districts/ajax') }}/" + city_id,
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
