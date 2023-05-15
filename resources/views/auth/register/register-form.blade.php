<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              <form action="/postRegister" method="POST">
                @csrf
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Your Name <span class="text-danger">*</span></label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" value="{{old('name')}}"/>
                  @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email <span class="text-danger">*</span></label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" value="{{old('email')}}"/>
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password <span class="text-danger">*</span></label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" value="{{old('password')}}"/>
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Repeat your password <span class="text-danger">*</span></label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="repeat_password"/>
                  @if ($errors->has('repeat_password'))
                    <span class="text-danger">{{ $errors->first('repeat_password') }}</span>
                  @endif
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>