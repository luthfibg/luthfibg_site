<div class="title-wrapper">
    <h3>Tambah Item</h3>
</div>
<form action="#" method="post">
    <div class="side-left">
        <div class="card">
            <div class="mb-3">
                <label for="inputName" class="form-label">Nama</label>
                <input type="text" class="form-control" id="inputName" placeholder="Sebuah nama...">
            </div>
            <div class="mb-3">
                <label for="inputSubname" class="form-label">Subnama</label>
                <input type="text" class="form-control" id="inputSubname" placeholder="Sebuah subnama...">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih kategory</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih sub-kategory</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="effLvl" class="form-label">Pilih effort level</label>
                <input type="range" class="form-range" min="1" max="10" step="0.01" id="effLvl" value="1">
            </div>
        </div>
    </div>
    <div class="side-right">
        <div class="card">
            <div class="mb-3">
                <label for="percenTage" class="form-label">Pilih persentase progress</label>
                <input type="range" class="form-range" min="1" max="100" id="percenTage" value="1">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih status saat ini</option>
                    <option value="0">Rencana</option>
                    <option value="1">Proses</option>
                    <option value="3">Selesai</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descripTion" class="form-label">Masukkan deskripsi</label>
                <textarea class="form-control" id="descripTion" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="inputStartDate" class="form-label">Tanggal mulai</label>
                <input type="date" class="form-control" id="inputStartDate">
            </div>
        </div>
    </div>
</form>