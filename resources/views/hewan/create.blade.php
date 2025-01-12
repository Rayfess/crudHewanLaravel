<x-layout>
  <div class="container mt-5">
    <h4>Tambah Hewan</h4>
    <a href="/hewan">
      <button class="btn btn-warning mb-4">Kembali</button>
    </a>
    <div class="row">
      <div class="col">
        <form action="{{ route('hewan.store') }}" method="post">
          @csrf
          <label>Nama Hewan</label>
          <input type="text" name="nama_hewan" class="form-control mb-2">
          
          <label>Jenis hewan</label>
          <select name="jenis_hewan" class="form-select mb-2 form-control" aria-label="Default select example">
            <option selected>Pilih Jenis hewan Anda</option>
            <option value="Karnivora">Karnivora</option>
            <option value="Herbivora">Herbivora</option>
            <option value="Omnivora">Omnivora</option>
          </select>

          <label>Panjang Hewan</label>
          <input type="number" name="panjang_hewan" class="form-control mb-2">

          <label>Berat Hewan</label>
          <input type="number" name="berat_hewan" class="form-control mb-2">

          <label class="form-label">Deskripsi Hewan</label>
          <textarea class="form-control mb-3" name="deskripsi_hewan" id="deskripsi_hewan" rows="3"></textarea>

          <div class="my-4">
            <input type="submit" class="btn btn-primary me-2"></input>
            <input type="reset" id="btnReset" class="btn btn-danger"></input>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layout>
