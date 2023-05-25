<section class="fmf">
  @include('components.alert')
  <div class="title">Pengelola Berkas</div>
  <div class="row top">
    <div class="col-12 col-sm-6 col-lg-2 mb-3 mb-sm-0 py-3">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Curriculum Vitae</h4>
          <div class="action-bar">
            <a href="#" class="btn-sm btn-primary af">
                <i class="fa-solid fa-eye fa-sm"></i>
            </a>
            <a href="{{ route('downloadcv') }}" class="btn-sm btn-primary">
                <i class="fa-solid fa-file-arrow-down fa-sm"></i>
            </a>
            <a href="" class="undisabled">
                <i class="fa-solid fa-lock-open fa-sm"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-2 py-3">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Admin Certificate</h4>
          <div class="action-bar">
            <a href="#" class="btn-sm btn-primary af">
                <i class="fa-solid fa-eye fa-sm"></i>
            </a>
            <a href="#" class="btn-sm btn-primary">
                <i class="fa-solid fa-file-arrow-down fa-sm"></i>
            </a>
            <a href="" class="undisabled">
                <i class="fa-solid fa-lock-open fa-sm"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2 py-3">
      @if (Auth::user()->role == 1)
      <div class="card">
        <div class="card-header">
          CRUD File
        </div>
        <div class="card-body">
          <h5 class="card-title">CRUD File</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="btn-action-wrapper">
            <a href="#" class="btn btn-dashboard btn-primary">Kelola</a>
            <a href="" class="undisabled">
              <i class="fa-solid fa-lock-open fa-sm"></i>
            </a>
          </div>
        </div>
      </div>
      @else
      <div class="card disabled">
        <div class="card-header">
          CRUD File
        </div>
        <div class="card-body">
          <h5 class="card-title">CRUD File</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="btn-action-wrapper">
            <a href="#" class="btn btn-dashboard btn-primary">Kelola</a>
            <a href="" class="undisabled">
              <i class="fa-solid fa-lock fa-sm"></i>
            </a>
          </div>
        </div>
      </div>
      @endif
      
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2 py-3">
      @if (Auth::user()->role == 1)
      <div class="card">
        <div class="card-header">
          VVIF File
        </div>
        <div class="card-body">
          <h5 class="card-title">VVIF Reference</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="btn-action-wrapper">
            <a href="#" class="btn btn-dashboard btn-primary">Masuk</a>
            <a href="" class="undisabled">
              <i class="fa-solid fa-lock-open fa-sm"></i>
            </a>
          </div>
        </div>
      </div>
      @else
      <div class="card disabled">
        <div class="card-header">
          VVIF File
        </div>
        <div class="card-body">
          <h5 class="card-title">VVIF Reference</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="btn-action-wrapper">
            <a href="#" class="btn btn-dashboard btn-primary">Masuk</a>
            <a href="" class="undisabled">
              <i class="fa-solid fa-lock fa-sm"></i>
            </a>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-2 col-common">
      <div class="card">
        <div class="card-header">
          Bukti SKKM
        </div>
        <div class="card-body">
          <h5 class="card-title">Akumulasi Skor SKKM</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <div class="btn-action-wrapper">
            <a href="#" class="btn btn-dashboard btn-primary">Buka</a>
            <a href="" class="undisabled">
              <i class="fa-solid fa-lock-open fa-sm"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>