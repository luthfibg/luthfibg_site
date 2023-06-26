<div class="title-wrapper my-3 ms-3 my-md-4 ms-md-0">
    <h3>Perbarui Data Item</h3>
</div>
<form action="{{ url('home/dashboard/items/'.$data->id) }}" method="post" class="row">
    @csrf
    @method("PUT")
    <div class="col-12 col-md-6 side-left">
        <div class="card m-3 px-2 px-md-3 py-3 py-md-4">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Sebuah nama..." autocomplete="off" value="{{ $data->name }}">
                <label for="inputName">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="subname" class="form-control" id="inputSubname" placeholder="Sebuah subnama..." value="{{ $data->subname }}">
                <label for="inputSubname" class="form-label">Subnama</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="category" aria-label="Default select example" id="floatingSelect1" value="{{ $data->category }}">
                    <option>Pilih salah satu</option>
                    <option value="app" {{old('category') == 'app' ? "selected" : ""}}>Aplikasi</option>
                    <option value="story" {{old('category') == 'story' ? "selected" : "" }}>Story</option>
                    <option value="tool">Peralatan</option>
                    <option value="socmed">Media Sosial</option>
                    <option value="selfdev">Pengembangan Diri</option>
                </select>
                <label for="floatingSelect1">Kategori</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="sub_category" aria-label="Default select example" id="floatingSelect2" value="{{ Session::get('sub_category') }}">
                    <option selected>Pilih salah satu</option>
                    <option value="web">Web App</option>
                    <option value="mobile">Mobile App</option>
                    <option value="iot">IoT Project</option>
                    <option value="cracker">Produk Cracking</option>
                </select>
                <label for="floatingSelect2">Sub-kategori</label>
            </div>
            <div class="mb-3">
                <div class="label-wrapper d-flex justify-content-between">
                    <label for="efflevel" class="form-label">Pilih effort level</label>
                    <output id="efflvlOutput">1</output>
                </div>
                <input type="range" name="effort_level" id="efflevel" class="form-range" min="1" max="10" step="0.01" id="effLvl" value="1" oninput="efflvlOutput.value = efflevel.value" value="{{ Session::get('effort_level') }}">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 side-right d-flex">
        <div class="card m-3 px-2 px-md-3 py-3 py-md-4">
            <div class="mb-3">
                <div class="label-wrapper d-flex justify-content-between">
                    <label for="pInput" class="form-label">Pilih persentase progress</label>
                    <output id="pOutput">0</output>
                </div>
                <input type="range" id="pInput" name="percentage" class="form-range" min="0" max="100" id="percenTage" value="1" oninput="pOutput.value = pInput.value" value="{{ Session::get('percentage') }}">
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="status" aria-label="Default select example" id="floatingSelect3" value="{{ Session::get('status') }}">
                    <option selected>Pilih status saat ini</option>
                    <option value="rencana">Rencana</option>
                    <option value="proses">Proses</option>
                    <option value="selesai">Selesai</option>
                </select>
                <label for="floatingSelect3">Status</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="description" id="descripTion" rows="5" placeholder="Deskripsi..." style="height: 8rem;" value="{{ Session::get('description') }}"></textarea>
                <label for="descripTion" class="form-label">Masukkan deskripsi</label>
            </div>
            <div class="mb-3">
                <label for="inputTags" class="tag-label">Masukan tag, gunakan "," sebagai pemisah</label>
                <input type="text" class="form-control" data-role="tagsinput" name="tags" id="inputTags" value="@foreach ($data->tags as $tag) {{ $tag->name }} @if (!$loop->last), @endif @endforeach">
                {{-- <label for="inputTags" class="form-label">Teknologi</label> --}}
                @if ($errors->has('tags'))
                    <span class="text-danger">{{ $errors->first('tags') }}</span>
                @endif
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" name="start_date" id="inputStartDate" value="{{ $data->start_date }}">
                <label for="inputStartDate" class="form-label">Tanggal mulai</label>
            </div>
        </div>
        <input class="btn btn-sm submit-form" type="submit" value="Submit">
    </div>
</form>
