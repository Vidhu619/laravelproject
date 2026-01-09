<div class="sidebar" id="sidebar">
    <h2>My App</h2>

    <a href="{{ route('posts.index') }}">🏠 Dashboard</a>
    <a href="{{ route('posts.create') }}">✍ Create Post</a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="logout-btn">Logout</button>
    </form>
</div>
