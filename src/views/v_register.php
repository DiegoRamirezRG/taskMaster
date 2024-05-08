<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Task Master - Register</h1>
                        <form id="registerForm">
                            <div class="mb-3">
                                <label for="name" class="mb-2 text-muted">User name</label>
                                <input type="text" id="name" class="form-control" value="" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="mb-2 text-muted">Email</label>
                                <input type="email" id="email" class="form-control" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="mb-2 text-muted">Password</label>
                                <input type="password" id="password" class="form-control" value="" required>
                            </div>
                            <div class="mb-5">
                                <label for="password_conf" class="mb-2 text-muted">Password confirmation</label>
                                <input type="password_conf" id="password_conf" class="form-control" value="" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Create account
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Already have an account? <a href="javascript:void(0)" class="text-dark" id="loginAccount">Sing in</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2024 &mdash; Diego Ramirez
                </div>
            </div>
        </div>
    </div>
</section>
