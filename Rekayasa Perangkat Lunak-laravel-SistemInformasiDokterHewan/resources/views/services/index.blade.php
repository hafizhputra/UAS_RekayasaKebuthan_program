@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Pelayanan</h4>
                    <p class="card-description">
                        <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm">Tambah Pelayanan Baru</a>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $key => $service)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->price }}</td>
                                        <td>
                                            <a href="{{ route('services.edit', $service->id) }}">Edit</a> | 
                                            <form action="{{ route('services.destroy', $service->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#" onclick="this.closest('form').submit(); return false;">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
