<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | BukuTamu Digital</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
