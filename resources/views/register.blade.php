@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="text-center py-3">
        <h3>Join Us!</h3>
        <p>
            Create a new account to check out our new movies every day. Already have an account? <a href="/login">Login Here</a>
        </p>
    </div>
    <form>
        <!-- Email input -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <form class="mx-1 mx-md-4">

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Your Name</label>
                            <input type="text" id="form3Example1c" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Your Email</label>
                            <input type="email" id="form3Example3c" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Password</label>
                            <input type="password" id="form3Example4c" class="form-control" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                            <input type="password" id="form3Example4cd" class="form-control" />
                        </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5 align-items-baseline">
                        <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                        </label>
                        <input class="ms-2" type="checkbox" value="" id="form2Example3c" />
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="button" class="btn btn-primary btn-lg">Register</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection