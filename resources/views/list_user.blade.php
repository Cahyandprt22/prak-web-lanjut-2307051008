@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center text-danger">Daftar Mahasiswa</h2>

    <div class="card shadow-sm p-4">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th style="background-color: red; color: white;">ID</th>
                    <th style="background-color: red; color: white;">Nama</th>
                    <th style="background-color: red; color: white;">NPM</th>
                    <th style="background-color: red; color: white;">Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td style="background-color: red; color: white;">{{ $user->id }}</td>
                    <td style="background-color: red; color: white;">{{ $user->nama }}</td>
                    <td style="background-color: red; color: white;">{{ $user->npm }}</td>
                    <td style="background-color: red; color: white;">{{ $user->nama_kelas }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
