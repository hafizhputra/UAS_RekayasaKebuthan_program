@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Pelayanan Baru</h4>
                    <form class="forms-sample" action="{{ route('services.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Pelayanan</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Nama pelayanan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="price" placeholder="Harga">
                        </div>
                        <a href="{{ route('services.index') }}" class="btn btn-light">Cancel</a>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
