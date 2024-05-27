@extends('layouts.main')
@section('content')
    <section class="vh-100" style="background-color: #e76f51">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card rounded-4 justify-content-center p-4" style="min-height: 600px">
                        <div class="row g-0">
                            <div class="col-md-12 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 text-black">
                                    <form method="POST" action="">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0">BukuTamu</span>
                                        </div>

                                        <h5
                                            class="fw-normal mb-3 pb-3"
                                            style="letter-spacing: 1px"
                                        >
                                            Sign in to your account
                                        </h5>

                                        <div class="form-floating mb-3">
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="emailInput"
                                            />
                                            <label for="emailInput">Email address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input
                                                type="password"
                                                class="form-control"
                                                id="passwordInput"
                                            />
                                            <label for="passwordInput">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button
                                                class="btn btn-primary w-100"
                                                type="button"
                                            >
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 d-flex d-none d-lg-block">
                                <img
                                    src="https://prnndk.github.io/ets-pweb/login-image.svg"
                                    alt="login form"
                                    class="img-fluid rounded-4"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
