<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

      .container {
    max-width: 1000px;
    margin: 30px auto;
    padding-left: 30px;
    padding-right: 30px;
}



        .post {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .post:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .post h3 {
            margin-top: 0;
            color: #333;
        }

        .post p {
            color: #555;
            line-height: 1.7;
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
        }


                .author {
                    margin-top: 15px;
                    font-size: 14px;
                    color: #666;
                }

                .author span {
                    background: #edf2ff;
                    color: #4c51bf;
                    padding: 4px 10px;
                    border-radius: 20px;
                    font-weight: 500;
                }

               
                .actions {
                    margin-top: 20px;
                }

                .actions a,
                .actions button {
                    padding: 8px 16px;
                    border-radius: 6px;
                    font-size: 14px;
                    cursor: pointer;
                    border: none;
                    text-decoration: none;
                }

                .edit-btn {
                    background: #38b2ac;
                    color: #fff;
                }

                .delete-btn {
                    background: #e53e3e;
                    color: #fff;
                    margin-left: 10px;
                }

                .actions form {
                    display: inline;
                }

               
                .create-btn {
                    position: fixed;
                    bottom: 30px;
                    right: 30px;
                    background: linear-gradient(135deg, #667eea, #764ba2);
                    color: #fff;
                    padding: 14px 22px;
                    border-radius: 30px;
                    text-decoration: none;
                    font-size: 15px;
                    box-shadow: 0 10px 20px rgba(0,0,0,0.25);
                }

                .create-btn:hover {
                    opacity: 0.9;
                }
            #success-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            max-width: 280px;
            background: #ecfdf5;
            color: #065f46;
            padding: 10px 14px;
            border-radius: 12px;
            box-shadow: 0 8px 18px rgba(0,0,0,0.12);
            font-size: 13px;
            line-height: 1.4;
            z-index: 9999;
            border: 1px solid #1abc50ff;
            animation: slideIn 0.35s ease;
        }

        #success-toast strong {
            display: block;
            font-weight: 600;
            margin-bottom: 2px;
        }

        #success-toast ul {
            margin: 0;
            padding-left: 14px;
        }

        #success-toast li {
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
        #delete-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            max-width: 260px;
            background: #ffffff;
            color: #111827;
            padding: 10px 14px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            font-size: 13px;
            line-height: 1.4;
            z-index: 9999;
            border: 1px solid #e5e7eb;
            animation: slideIn 0.35s ease;
        }

        #delete-toast strong {
            display: block;
            font-weight: 600;
            margin-bottom: 2px;
        }
        #update-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            max-width: 260px;
            background: #ffffff;
            color: #1f2937;
            padding: 10px 14px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            font-size: 13px;
            line-height: 1.4;
            z-index: 9999;
            border: 1px solid #e5e7eb;
            animation: slideIn 0.35s ease;
        }

        #update-toast strong {
            display: block;
            font-weight: 600;
            margin-bottom: 2px;
        }
        /* Modal Overlay */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(2px);
            z-index: 10000;
        }

        /* Modal Box */
        .modal-box {
            background: #ffffff;
            width: 520px;
            max-width: 92%;
            margin: 8% auto;
            padding: 28px;
            border-radius: 16px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            animation: modalPop 0.3s ease;
        }

        /* Heading */
        .modal-box h3 {
            margin-top: 0;
            margin-bottom: 18px;
            font-size: 22px;
            color: #1f2937;
        }

        /* Inputs */
        .modal-box label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 14px;
            color: #374151;
        }

        .modal-box input,
        .modal-box textarea {
            width: 95%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            font-size: 14px;
            margin-bottom: 18px;
            outline: none;
            transition: border 0.2s, box-shadow 0.2s;
        }

        .modal-box textarea {
            min-height: 140px;
            resize: vertical;
        }

        /* Focus effect */
        .modal-box input:focus,
        .modal-box textarea:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.15);
        }

        /* Actions */
        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        /* Buttons */
        .modal-actions .edit-btn {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            border: none;
            padding: 10px 22px;
            border-radius: 24px;
            font-size: 14px;
            cursor: pointer;
        }

        .modal-actions .cancel-btn {
            background: #e5e7eb;
            color: #111827;
            border: none;
            padding: 10px 20px;
            border-radius: 24px;
            font-size: 14px;
            cursor: pointer;
        }

        .modal-actions button:hover {
            opacity: 0.9;
        }
        .modal-error {
            background: #fdecea;
            color: #b91c1c;
            padding: 10px 14px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 13px;
        }
        /* Logout Button (Top Right) */
.logout-form {
    position: fixed;
    /* top: 20px; */
    right: 20px;
    z-index: 10001;
}

.logout-btn {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: #fff;
    border: none;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 0 10px 20px rgba(0,0,0,0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    pos`ition: relative;
    transition: transform 0.15s ease, box-shadow 0.15s ease;
}

.logout-btn:hover {
    transform: translateY(-0px);
    box-shadow: 0 14px 28px rgba(0,0,0,0.35);
}

.logout-btn:active {
    transform: scale(0.95);
}


        /* Animation */
        @keyframes modalPop {
            from {
                transform: translateY(20px) scale(0.96);
                opacity: 0;
            }
            to {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }
        
/* ICON CONTAINER */
.profile-btn,
.logout-form {
    position: fixed;
    bottom: 120px; /* distance from bottom */
    z-index: 9999;
}

/* PROFILE ICON (above logout) */
.profile-btn {
    right: 20px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    color: #fff;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 10px 20px rgba(0,0,0,0.25);
    transition: transform 0.15s ease, box-shadow 0.15s ease;
}

/* LOGOUT FORM (below profile) */
.logout-form {
    right: 20px;
    bottom: 180px;
}

/* LOGOUT BUTTON */
.logout-btn {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: #fff;
    border: none;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0 10px 20px rgba(0,0,0,0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.15s ease, box-shadow 0.15s ease;
}

.logout-btn:hover,
.profile-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 28px rgba(0,0,0,0.35);
}



            </style>
        </head>
        <body>



        <div class="header">
           
            <h1>Community Blog</h1>
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
    @csrf
    <button type="submit" class="logout-btn" title="Logout">
    <i class="fa-solid fa-right-from-bracket"></i>
</button>
</form> 
<a href="{{ route('profile') }}" class="profile-btn" title="Profile">
    <i class="fa-solid fa-user"></i>
</a>




            <p>Share your thoughts with the world</p>
        </div>
        @if (session('success'))
        <div id="success-toast">
            <strong> Success</strong>
            <span>{{ session('success') }}</span>
        </div>
        @endif
        @if (session('delete'))
        <div id="delete-toast">
            <strong>🗑 Deleted</strong>
            <span>{{ session('delete') }}</span>
        </div>
        @endif
        @if (session('update'))
        <div id="update-toast">
            <strong>✏ Updated</strong>
            <span>{{ session('update') }}</span>
        </div>
        
        @endif
        @include('posts._edit_modal')

        <div class="container">

            @forelse($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>

                    <div class="author">
                        Posted by <span>{{ $post->user->name }}</span>
                    </div>

                    @if($post->user_id === auth()->id())
                        <div class="actions"> 
                    <button class="edit-btn" onclick='openEditModal( {{ $post->id }},@json($post->title), @json($post->content) )'>
                    Edit</button>
            

                            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">Delete</button>
                            </form>
                        </div>
                    @endif
                </div>
            @empty
                <p style="text-align:center; color:#666;">No posts yet. Be the first to write one ✨</p>
            @endforelse

        </div>

        <a href="{{ route('posts.create') }}" class="create-btn">+ Create Post</a>
        <script>
        setTimeout(() => {
            ['error-toast', 'success-toast', 'delete-toast', 'update-toast'].forEach(id => {
                const toast = document.getElementById(id);
                if (toast) {
                    toast.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                    toast.style.opacity = '0';
                    toast.style.transform = 'translateX(100%)';
                    setTimeout(() => toast.remove(), 400);
                }
            });
        }, 3000);
        function openEditModal(id, title, content) {
          
    const modal = document.getElementById('editModal');
      console.log('Opening edit modal for post ID:', modal);
    if (!modal) return;

    modal.style.display = 'block';

    document.getElementById('editTitle').value = title;
    document.getElementById('editContent').value = content;

    
    document.getElementById('editForm').action = `/posts/${id}`;
}


        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
        }
      

        </script>
@if (session('edit_error'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('editModal');
    if (modal) modal.style.display = 'block';
});
</script>
@endif


</script>

        </body>
        </html>
