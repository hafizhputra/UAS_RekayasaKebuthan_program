@extends('layouts.master')

@section('contents')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-5">Daftar Customer</h2>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama </th>
                                    <th>email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftarcustumer as  $dc)
                                    <tr>
                                        {{-- <td>{{ ++$key }}</td> --}}
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dc->name }}</td>
                                        <td>{{ $dc->email }}</td>
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
