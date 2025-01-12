  <x-layout>
    <div class="container mt-5">
      <h4>Edit Hewan</h4>
      <a href="/hewan">
        <button class="btn btn-warning mb-4">Kembali</button>
      </a>
      <div class="row">
        <div class="col">
          <form id="formEdit" action="{{ route('hewan.update', $hewan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Nama Hewan</label>
            <input type="text" name="nama_hewan" value="{{ $hewan->nama_hewan }}" class="form-control mb-2">

            <label>Jenis hewan</label>
            <select name="jenis_hewan" class="form-select mb-2 form-control" aria-label="Default select example">
              <option selected>Pilih Jenis hewan Anda</option>
              <option {{ $hewan->jenis_hewan == 'Karnivora' ? 'selected' : '' }} value="Karnivora">Karnivora</option>
              <option {{ $hewan->jenis_hewan == 'Herbivora' ? 'selected' : '' }} value="Herbivora">Herbivora</option>
              <option {{ $hewan->jenis_hewan == 'Omnivora' ? 'selected' : '' }} value="Omnivora">Omnivora</option>
            </select>

            <label>Panjang Hewan</label>
            <input type="number" value="{{ $hewan->panjang_hewan }}" name="panjang_hewan" class="form-control mb-2">

            <label>Berat Hewan</label>
            <input type="number" value="{{ $hewan->berat_hewan }}" name="berat_hewan" class="form-control mb-2">

            <label class="form-label">Deskripsi Hewan</label>
            <textarea class="form-control mb-3" name="deskripsi_hewan" id="deskripsi_hewan" rows="3">{{ $hewan->deskripsi_hewan }}</textarea>

            <input type="submit" value="Edit" class="btn btn-primary me-2"></input>
            <input type="button" value="Reset" id="btnReset" class="btn btn-danger"></input>

          </form>
        </div>
      </div>
    </div>
  </x-layout>
