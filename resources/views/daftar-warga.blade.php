@php
    $warga=App\Models\Warga::all();
@endphp

<h1>Daftar warga</h1>
@foreach ($warga as $data)
    id warga : {{ $data->id }} <br>
    nama warga : {{ $data->nama }} <br>
    NIK : {{ $data->Ktp->nik }} <br>
    jenis kelamin : {{ $data->jenis_kelamin }} <br>
    alamat : {{ $data->alamat }}
    <hr>
@endforeach
