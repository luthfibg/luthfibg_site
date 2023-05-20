<div class="cwr">
    <input type="checkbox" id="chk" aria-hidden="true" name="">
    <div class="card">
        <div class="frontside">
            <h2 class="auth-title my-3 text-center">{{ __('Autentikasi') }}&nbsp;<a href="#"><i class="fa-regular fa-circle-question fa-xs" style="color: var(--cerulean) !important;" data-bs-toggle="modal" data-bs-target="#info-login"></i></a></h2>
            <form action="/auth/login" method="POST">
                @csrf
                <div class="form-floating mb-3" class="fs-float">
                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Email" value="{{ Session::get('email') }}">
                    <label for="floatingEmail">{{ __('Alamat Email') }}</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">{{ __('Password') }}</label>
                </div>
                <label for="chk" aria-hidden="true" class="act-label">{{ __('Saya lupa password') }}</label>
                <button type="submit" name="submit_log" class="btn submit-login">{{ __('Masuk') }}</button>    
            </form>
        </div>
        <div class="backside">
            <h2 class="auth-title my-3 text-center">{{ __('Lupa Password') }}</h2>
            <form action="https://" method="POST">
                <div class="form-floating mb-3" class="fs-float">
                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Email">
                    <label for="floatingEmail">{{ __('Alamat Email')}}</label>
                </div>
                <button type="submit" name="submit_log" class="btn submit-login">{{ __('Kirim Permintaan') }}</button>
                <label for="chk" aria-hidden="true" class="act-label">{{ __('Kembali login') }}</label>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="info-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="exampleModalLabel">{{ __('Mengapa autentikasi?') }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="font-size: 0.9rem;">{{ __('Kami perlu memastikan identitas anda, sebelum proses semacam pengunduhan file private dilakukan. Fitur registrasi sengaja tidak disematkan secara langsung untuk menghindari penyalahgunaan akun. Untuk registrasi yang sah silahkan hubungi kami melalui linkedin ataupun email.') }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Tutup') }}</button>
            </div>
        </div>
    </div>
</div>
