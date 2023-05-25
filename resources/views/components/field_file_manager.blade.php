<section class="fmf">
    @include('components.alert')
    <div class="title">Pengelola Berkas</div>
    <div class="row">
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
                <a href="" class="disabled">
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
                <a href="" class="disabled">
                    <i class="fa-solid fa-lock-open fa-sm"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>