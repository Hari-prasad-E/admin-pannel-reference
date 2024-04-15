<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script src="{{asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container w-25 mt-5 border border-dark-subtle pe-4 allaround">
        <form action="{{ url('saveregistration') }}" method="POST">
            @csrf
            <div class="text-primary text-center mt-3">
                <h3>REGISTRATION FORM</h3>
            </div>
            <div class="row py-3">
                <div class="col-12 col-sm-6 col-md-6 ge-0">User Name<span style="color:red;">*</span></div>
                <div class="col-12 col-sm-6 col-md-5 gx-0">
                    @error('username')
                    <div class="error" style="color:red">{{ $message }}</div>
                    @enderror
                    <input type="text" name="username">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-sm-6 col-md-6 ge-0">Email Id<span style="color:red;">*</span></div>
                <div class="col-12 col-sm-6 col-md-4 gx-0">
                    @error('email')
                    <div class="error" style="color:red">{{ $message }}</div>
                    @enderror
                    <input type="text" name="email">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 col-sm-6 col-md-6 ge-0">Password<span style="color:red;">*</span></div>
                <div class="col-12 col-sm-6 col-md-4 gx-0">
                    @error('password')
                    <div class="error" style="color:red">{{ $message }}</div>
                    @enderror
                    <input type="text" name="password">
                </div>
            </div>
            <!-- <div class="row py-3">
                <div class="col-12 col-sm-6 col-md-6 ge-0"> Conform Password <span style="color:red;">*</span></div>
                <div class="col-12 col-sm-6 col-md-4 gx-0 "><input type="text" name="password_confirmation"></div>
            </div> -->
            <button type="submit" class="btn btn-primary text-center mb-3">Submit</button>
        </form>
    </div>
</body>

</html>