@extends('layouts.authentication_user')

@section('auth-reg')
<div class="cwr">
    <input type="checkbox" id="chk" aria-hidden="true" name="">
    <div class="card">
        <div class="frontside">
            <h2 class="auth-title my-3 text-center">{{ __('Autentikasi') }}&nbsp;<a href="#"><i class="fa-regular fa-circle-question fa-xs" style="color: var(--cerulean) !important;" data-bs-toggle="modal" data-bs-target="#info-login"></i></a></h2>
            <form action="{{ route('login.user') }}" method="POST">
                @csrf
                <div class="form-floating mb-3" class="fs-float">
                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Email" value="{{ Session::get('email') }}">
                    <label for="floatingEmail">{{ __('Alamat Email') }}</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">{{ __('Password') }}</label>
                </div>
                <div class="lv-socialite">
                    <a href="{{ route('google.login') }}" data-tooltip-target="tooltip-g">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="" data-tooltip-target="tooltip-fa">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="" data-tooltip-target="tooltip-git">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <div id="tooltip-g" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Login dengan google
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="tooltip-fa" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Login dengan facebook
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <div id="tooltip-git" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        Login dengan github
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
                <label for="chk" aria-hidden="true" class="act-label">{{ __('Saya lupa password') }}</label>
                <button type="submit" name="submit_log" class="btn submit-login" data-tooltip-target="tooltip-log">{{ __('Masuk') }}</button>
                <div id="tooltip-log" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Submit
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>    
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
@endsection

