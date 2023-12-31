@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Buat Reservasi</h4>
                    <form class="forms-sample" action="{{ route('reservations.store') }}"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Hewan</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="pet_name"
                                placeholder="Nama hewan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Hewan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="pet_type"
                                placeholder="Jenis hewan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin Hewan</label>
                            <div class="row" style="margin-bottom: 0 !important">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="pet_gender"
                                                    id="optionsRadios1" value="Jantan">
                                                Jantan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="pet_gender"
                                                    id="optionsRadios2" value="Betina">
                                                Betina
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group mt-0">
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Keluhan/Layanan</label>
                                <select class="form-control js-example-basic-single" id="service" name="service_id" style="height: 50px !important">
                                    <option selected disabled>Pilih Keluhan/Layanan</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" data-price="{{ $service->price }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Harga</label>
                                <input type="text" class="form-control" id="price" value="Pilih keluhan untuk mengetahui harganya" readonly>
                            </div>

                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Tanggal Reservasi</label>
                                <input type="date" class="form-control" id="price"  name="date">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container .select2-selection--single {
            height: 43px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 43px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 14px !important;
        }
        .select2-container .select2-selection--single .select2-selection__rendered {
            padding-left: 0 !important;
        }
    </style>
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });

        $('#service').on('change', function() {
            const $this = $(this); // Cache $(this)
            const dataVal = $this.find(':selected').data('price'); // Get data value
            $('#price').val(`${dataVal}`);
        });
    </script>
@endpush
