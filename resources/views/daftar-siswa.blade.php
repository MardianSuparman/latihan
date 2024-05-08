@php
    $siswa=\App\Models\Siswa::all();
    $satusiswaawal=\App\Models\Siswa::first();
    $satusiswaakhir=\App\Models\Siswa::latest('id')->first();
    $siswasatu=\App\Models\Siswa::find(11);
    $siswalaki=\App\Models\Siswa::where('jenis_kelamin', 0)->get();
@endphp

{{-- menampilkan semua data siswa dengan pengulangan --}}
@foreach ($siswa as $data)
   Nama Siswa : {{ $data->nama }} <br>
   Jenis Kelamin : {{ $data->jenis_kelamin }} <br>
   Umur : {{ $data->umur }} <br>
   Alamat : {{ $data->alamat }} <br>
   <hr>
   @endforeach

   {{-- menampilkan satu siswa awal --}}
   Nama Siswa : {{ $satusiswaawal->nama }} <br>
   Jenis Kelamin : {{ $satusiswaawal->jenis_kelamin }} <br>
   Umur : {{ $satusiswaawal->umur }} <br>
   Alamat : {{ $satusiswaawal->alamat }} <br>
   <hr>

   {{-- menampilkan satu siswa akhir --}}
   Nama Siswa : {{ $satusiswaakhir->nama }} <br>
   Jenis Kelamin : {{ $satusiswaakhir->jenis_kelamin }} <br>
   Umur : {{ $satusiswaakhir->umur }} <br>
   Alamat : {{ $satusiswaakhir->alamat }} <br>
   <hr>

   {{-- menampilkan satu siswa --}}
   {{-- menambahkan operator OR apabila tidak di temukan --}}
   Nama Siswa : {{ $siswasatu->nama ?? 'not found'}} <br>
   Jenis Kelamin : {{ $siswasatu->jenis_kelamin?? 'not found'}} <br>
   Umur : {{ $siswasatu->umur ?? 'not found'}} <br>
   Alamat : {{ $siswasatu->alamat ?? 'not found'}} <br>
   <hr>

   {{-- menampilkan semua data siswa laki-laki dengan pengulangan --}}
   @foreach ($siswalaki as $data)
      Nama Siswa : {{ $data->nama }} <br>
      Jenis Kelamin : {{ $data->jenis_kelamin }} <br>
      Umur : {{ $data->umur }} <br>
      Alamat : {{ $data->alamat }} <br>
      <hr>
      @endforeach
