<div class="cwr">
    <input type="checkbox">
    <div class="card">
        <div class="frontside">
            <h2 class="auth-title my-3 text-center">Autentikasi</h2>
            <form action="https://" method="POST">
                <div class="form-floating mb-3" class="fs-float">
                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Email">
                    <label for="floatingEmail">Alamat Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <span>Saya <a href="#">lupa password</a></span>
                </div>
                <button type="submit" name="submit_log" class="btn submit-login">{{ __('Login with email') }}</button>    
            </form>
        </div>
        <div class="backside">
            <h2 class="auth-title my-3 text-center">Lupa Password</h2>
            <form action="https://" method="POST">
                <div class="form-floating mb-3" class="fs-float">
                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Email">
                    <label for="floatingEmail">Alamat Email</label>
                </div>
                <button type="submit" name="submit_log" class="btn submit-login">{{ __('Send password change request') }}</button>    
            </form>
        </div>
    </div>
</div>