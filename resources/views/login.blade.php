<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpage</title>
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    <script src="{{asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body>
    <div class="top-bar">
        <div class="heading">
            <h1 class="primary-heading">ADMINISTRATON</h1>
        </div>
    </div>
    <div class="login-sec">
        <div class="login-box">
            <div class="login-container">
                <div class="login-head">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16" style="position: relative; top: -2px;">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                    </svg>Please enter your login details
                </div>
                <div class="login-deatils py-2 px-5" style="background-color: white;">
                    <form action="{{ url('authenticate') }}" method="POST">
                        @csrf
                        @error('username')
                        <div class="error" style="color:red">{{ $message }}</div>
                        @enderror
                        <div class="pt-3 pb-2" style="background-color: white;">
                            Username
                        </div>
                        <div class="user-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="2 0" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg></div>
                        <input type="text" name="username" placeholder="Username" class="user-text @error('username') is-invalid @enderror" style="background-color: white;padding-left: 10px;">
                        @error('password')
                        <div class="error" style="color:red">{{ $message }}</div>
                        @enderror
                        <div class="pt-3 pb-2" style="background-color: white;">
                            Password
                        </div>
                        <div class="user-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                            </svg></div>
                        <input type="password" name="password" placeholder="Password" class="user-text @error('password') is-invalid @enderror" style="background-color: white; padding-left: 10px;"> <br>
                        <a href="#" style="text-decoration: none; font-size:15px; background-color:white;">forgetten password</a> <br>
                        <button type="submit" class="btn btn-primary my-3 login-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16" style="background-color: transparent;">
                                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5" />
                                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                            </svg> Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>