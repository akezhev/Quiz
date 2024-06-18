<div class="row mt-3">
    <div class="col-6 offset-3">
        <form action="/" method="post" class="border border-warning rounded p-3">

            <!-- Email field -->
            <div class="row">
                <div class="col-12 col-md-3 col-lg-2">
                    <label for="user-email" class="form-label">Email:</label>
                </div>
                <div class="col">
                    <input type="email" id="user-email" class="form-control" name="email">
                </div>
            </div>

            <!-- Password field -->
            <div class="row mt-3">
                <div class="col-12 col-md-3 col-lg-2">
                    <label for="user-password" class="form-label">Password:</label>
                </div>
                <div class="col">
                    <input type="password" name="password" id="user-password" class="form-control">
                </div>
            </div>

            <!-- Password confirm field -->
            <div class="row mt-3">
                <div class="col-12 col-md-3 col-lg-2">
                    <label for="user-password" class="form-label">Confirm password:</label>
                </div>
                <div class="col">
                    <input type="password" name="password_confirm" id="user-password-conf" class="form-control">
                </div>
            </div>

            <!-- Remember field -->
            <div class="row mt-1">
                <div class="col-10 offset-2">
                    <input type="checkbox" name="remember" id="remember-me" class="form-check-input">
                    <label for="remember-me" class="form-check-label">Remember me</label>
                </div>
            </div>
            <div class="d-grid mt-3">
                <input type="hidden" name="page" value="1">
                <button type="submit" class="btn btn-warning">Login</button>
            </div>
        </form>
    </div>
</div>
    