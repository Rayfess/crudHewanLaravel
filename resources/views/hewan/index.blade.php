<x-layout>
  <div class="container mt-5">
    <div class="row mb-3">
      <div class="col">
        @auth
          @php
            $isAdmin = Auth::check() && Auth::user()->role === 'admin';
          @endphp
          @if ($isAdmin)
            <!-- Tampilkan tombol tambah data hanya untuk admin -->
            <div class="col">
              <a href="{{ route('hewan.create') }}">
                <button class="btn btn-primary">Tambah Data</button>
              </a>
            </div>
          @endif
          <p>Selamat datang, {{ auth()->user()->name }}</p>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
          </form>
          <div class="row">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Hewan</th>
                  <th>Jenis Hewan</th>
                  <th>Berat Hewan (Kg)</th>
                  <th>Panjang Hewan (Cm)</th>
                  <th>Deskripsi Hewan</th>
                  @if ($isAdmin)
                    <th>Aksi</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                @foreach ($hewan as $no => $data)
                  {{-- 
                Karakter -> digunakan untuk mengakses atribut atau metode dari sebuah objek di PHP. Dalam Laravel,
                objek seringkali digunakan untuk mewakili data dari database, dan -> digunakan untuk mengakses nilai-nilai atau fungsi dalam objek tersebut.
      
                Karakter => digunakan dalam konteks array asosiatif di PHP, untuk menghubungkan key dan value.
                Ini sering digunakan ketika kita ingin menginisialisasi atau mendeklarasikan sebuah array asosiatif (array yang memiliki pasangan key dan value).
                 --}}
                  <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $data->nama_hewan }}</td>
                    <td>{{ $data->jenis_hewan }}</td>
                    <td>{{ $data->berat_hewan }}</td>
                    <td>{{ $data->panjang_hewan }}</td>
                    <td>{{ Str::words($data->deskripsi_hewan, 50, '...') }}</td>
                    @if ($isAdmin)
                      <!-- Tampilkan tombol tambah data hanya untuk admin -->
                      <td>
                        <a href="{{ route('hewan.edit', $data->id) }}">
                          <button class="mb-2 btn btn-warning">Edit</button>
                        </a>
                        <form action="{{ route('hewan.destroy', $data->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      @else
        <p>Silakan login untuk melanjutkan</p>
      @endauth
    </div>
  </div>

</x-layout>
