<div class="title-wrapper my-3 ms-3 my-md-4 ms-md-0">
    <h3>Tambah Item</h3>
</div>
<form action="#" method="post" class="row">
    <div class="col-12 col-md-6 side-left">
        <div class="card m-3 px-2 px-md-3 py-3 py-md-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="inputName" placeholder="Sebuah nama...">
                <label for="inputName">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="inputSubname" placeholder="Sebuah subnama...">
                <label for="inputSubname" class="form-label">Subnama</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih salah satu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Kategori</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih salah satu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Sub-kategori</label>
            </div>
            <div class="mb-3">
                <div class="label-wrapper d-flex justify-content-between">
                    <label for="effLvl" class="form-label">Pilih effort level</label>
                    <output id="efflvlOutput">1</output>
                </div>
                <input type="range" id="efflevel" class="form-range" min="1" max="10" step="0.01" id="effLvl" value="1" oninput="efflvlOutput.value = efflevel.value">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 side-right">
        <div class="card m-3 px-2 px-md-3 py-3 py-md-4">
            <div class="mb-3">
                <div class="label-wrapper d-flex justify-content-between">
                    <label for="percenTage" class="form-label">Pilih persentase progress</label>
                    <output id="pOutput">0</output>
                </div>
                <input type="range" id="pInput" class="form-range" min="0" max="100" id="percenTage" value="1" oninput="pOutput.value = pInput.value">
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih status saat ini</option>
                    <option value="0">Rencana</option>
                    <option value="1">Proses</option>
                    <option value="3">Selesai</option>
                </select>
                <label for="floatingSelect">Status</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="descripTion" rows="5" placeholder="Deskripsi..." style="height: 8rem;"></textarea>
                <label for="descripTion" class="form-label">Masukkan deskripsi</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="inputStartDate">
                <label for="inputStartDate" class="form-label">Tanggal mulai</label>
            </div>
        </div>
    </div>
</form>

