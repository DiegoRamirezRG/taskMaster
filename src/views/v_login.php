<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Master - Login</title>
    <link rel="stylesheet" href="/views/assets/libs/bootstrap/css/bootstrap.min.css">
</head>
<body class="contentBody">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
						<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">
					</div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Task Master - Login</h1>
                            <form id="loginForm">
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
								</div>
                                <div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="forgot.html" class="float-end">
											Forgot Password?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
                                </div>
                                <div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="javascript:void(0)" class="text-dark" id="registerAccount">Create One</a>
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

    <script src="/views/assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/views/assets/libs/jquery/jquery-3.7.1.min.js"></script>
    <script src="/views/assets/libs/jquery-validator/dist/jquery.validate.min.js"></script>

    <!-- JS Filex -->
    <script src="/views/assets/js/login.js"></script>
    <script src="/views/assets/js/register.js"></script>
</body>
</html>