<div class="card">
    <input type="checkbox" name="" id="chk" aria-hidden="true">
    <h2 class="auth-title">Login</h2>
    <form action="https://" method="POST">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Email">
            <label for="floatingEmail">Alamat Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button type="submit" name="submit_log" class="btn submit-login">{{ __('Login') }}</button>    
    </form>
</div>