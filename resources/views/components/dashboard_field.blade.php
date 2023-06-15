<section class="df">
    @include('components.alert')
    <div class="title-wrapper">
        <div class="title">Dashboard</div>
        <div class="subtitle">What do i do now?</div>
    </div>
    <div class="row head">
        @if (Auth::user()->role == 1)
        <div class="col-12 col-md-3 col-lg-1 col-fs">
            <a href="{{ route('dashboard.add.item') }}" class="btn btn-dashboard fs-btn">
                <i class="fa-solid fa-plus"></i>
                <span class="btn-pch"> Tambah</span>
            </a>
        </div>
        @else
        <div class="col-12 col-md-3 col-lg-1 col-fs">
            <a href="" class="btn btn-dashboard fs-btn disabled">
                <i class="fa-solid fa-plus"></i>
                <span class="btn-pch"> Tambah</span>
            </a>
        </div>
        @endif
        
        <div class="col-12 col-md-3 col-lg-1">
            <a href="" class="btn btn-dashboard">
                <i class="fa-solid fa-star"></i>
                <span class="btn-pch"> Daftar prioritas</span>
            </a>
        </div>
        @if (Auth::user()->role == 1)
        <div class="col-12 col-md-3 col-lg-1">
            <a href="" class="btn btn-dashboard">
                <i class="fa-solid fa-hand-fist"></i>
                <span class="btn-pch"> Kerjakan</span>
            </a>
        </div> 
        @else
        <div class="col-12 col-md-3 col-lg-1">
            <a href="" class="btn btn-dashboard disabled">
                <i class="fa-solid fa-hand-fist"></i>
                <span class="btn-pch"> Kerjakan</span>
            </a>
        </div>
        @endif
        
        <div class="col-12 col-md-3 col-lg-1">
            <a href="" class="btn btn-dashboard">
                <i class="fa-solid fa-check-double"></i>
                <span class="btn-pch"> Selesai</span>
            </a>
        </div>
        <div class="col-12 col-md-3 col-lg-1">
            <a href="" class="btn btn-dashboard">
                <i class="fa-solid fa-clock-rotate-left"></i>
                <span class="btn-pch"> Riwayat</span>
            </a>
        </div>
    </div>
    <div class="row row-cols-4">
        {{-- @foreach ($collection as $item)
            
        @endforeach --}}
        @include('models.item_card')
        @include('models.item_card')
        @include('models.item_card')
        @include('models.item_card')
        @include('models.item_card')
    </div>
</section>