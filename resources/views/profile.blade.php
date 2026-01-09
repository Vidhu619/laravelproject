<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <style>
          body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    background-image: url('/image/background.jpg'); /* change filename */
    background-size: cover;        /* cover full screen */
    background-position: center;   /* center image */
    background-repeat: no-repeat;  /* no tiling */
    background-attachment: fixed;  /* optional: parallax effect */
}


      
        .header {
            background: linear-gradient(135deg, #667eea, #764ba2);
            padding: 10px;
            color: #fff;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
        }

        .header p {
            margin-top: 8px;
            opacity: 0.9;
        }
        .profile-container {
            
            max-width: 480px;
            margin: 30px auto;
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .info {
            margin-bottom: 25px;
        }

        .info div {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
        }

        input {
            width: 95%;
            padding: 12px;
            margin-top: 6px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border-radius: 24px;
            border: none;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        .error {
            background: #fdecea;
            color: #b91c1c;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .success {
            background: #ecfdf5;
            color: #065f46;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="header">
           
            <h1>Community Blog</h1>
          
            <p>Share your thoughts with the world</p>
        </div>
<div class="profile-container">

    <h2>My Profile</h2>

    <!-- USER INFO -->
    <div class="info">
        <div><strong>Name:</strong> {{ auth()->user()->name }}</div>
        <div><strong>Email:</strong> {{ auth()->user()->email }}</div>
        <div><strong>Joined:</strong> {{ auth()->user()->created_at->format('d M Y') }}</div>
    </div>

    <h3>Change Password</h3>

    {{-- Success --}}
    @if (session('status') === 'password-updated')
        <div class="success">
            Password updated successfully ✅
        </div>
    @endif

    {{-- Errors --}}
    @if ($errors->updatePassword->any())
        <div class="error">
            @foreach ($errors->updatePassword->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <!-- CHANGE PASSWORD FORM -->
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')

        <label>Current Password</label>
        <input type="password" name="current_password" required>

        <label>New Password</label>
        <input type="password" name="password" required>

        <label>Confirm New Password</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Update Password</button>
    </form>

</div>

</body>
</html>
