<!DOCTYPE html>
<html>
<head>
    <title>Create Blog</title>


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
            font-size: 28px;
        }

        .form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .card {
            background: #fff;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 95%;
            padding: 12px 14px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
            outline: none;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102,126,234,0.15);
        }

        textarea {
            resize: vertical;
            min-height: 160px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #0f2173ff, #764ba2);
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-size: 15px;
            cursor: pointer;
        }

        .submit-btn:hover {
            opacity: 0.9;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #667eea;
            font-weight: 500;
        }
        #error-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            max-width: 300px;
            background: #f24562ff;
            color: #dddce3ff;
            padding: 10px 14px;
            border-radius: 12px;       
            box-shadow: 0 8px 18px rgba(0,0,0,0.12);
            font-size: 13px;
            line-height: 1.4;
            z-index: 9999;
            border: 1px solid #dc5c5cff;
            animation: slideIn 0.35s ease;
        }


        #error-toast strong {
            display: flex;
            align-items: center;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 4px;
        }

        #error-toast ul {
            margin: 0;
            padding-left: 14px;
        }

        #error-toast li {
            margin-bottom: 2px;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }


    </style>
        </head>
        <body>
        <div class="header">
            <h1>Create New Blog</h1>
              <p>Share your thoughts with the world</p>
        </div>
        @if ($errors->any())
        <div id="error-toast">
            <strong>⚠ Validation Error</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <div class="form-container">
            <div class="card">


                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" placeholder="Enter blog title" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" placeholder="Write your thoughts here...">{{ old('content') }}</textarea>
                    </div>

                    <button type="submit" class="submit-btn">Publish Blog</button>
                </form>

                <a href="{{ route('posts.index') }}" class="back-link">← Back to Posts</a>

            </div>
        </div>
        <script>
        setTimeout(() => {
            const toast = document.getElementById('error-toast');
            if (toast) {
                toast.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                toast.style.opacity = '0';
                toast.style.transform = 'translateX(100%)';

                setTimeout(() => toast.remove(), 400);
            }
        }, 3000);
        </script>


        </body>
        </html>
