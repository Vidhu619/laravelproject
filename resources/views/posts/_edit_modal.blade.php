<div id="editModal" class="modal">
    <div class="modal-box">

        <h3>Edit Post</h3>

        <form id="editForm"
              method="POST"
              action="{{ session('edit_post_id') ? route('posts.update', session('edit_post_id')) : '' }}">

            @csrf
            @method('PUT')

            @if (session('edit_error') && $errors->any())
                <div class="modal-error">
                    @foreach ($errors->all() as $error)
                        <p>⚠ {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <label>Title</label>
            <input type="text"
                   name="title"
                   id="editTitle"
                   value="{{ old('title') }}"
                   required>

            <label>Content</label>
            <textarea name="content"
                      id="editContent"
                      required>{{ old('content') }}</textarea>

            <div class="modal-actions">
                <button type="submit" class="edit-btn">Update</button>
                <button type="button"
                        class="cancel-btn"
                        onclick="closeEditModal()">Cancel</button>
            </div>
        </form>

    </div>
</div>
