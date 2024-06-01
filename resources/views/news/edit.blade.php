<x-app-layout>
    <div class="mid-container">
        <h2>Update News</h2>
        <form action="{{ route('news.update', $news) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $news->title }}" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" placeholder="Enter description">{{ $news->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="banner_image">Banner Image:</label>
                <input type="file" id="banner_image" name="banner_image">
                @if (!empty($news->banner_image))
                    <img style="height: 80px;" src="{{ asset('images/' . $news->banner_image) }}" alt="">
                @else
                    Not Avaible
                @endif
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status">
                    <option value="">-- Select --</option>
                    <option {{ $news->status == 1 ? 'selected' : '' }} value="1">Active</option>
                    <option {{ $news->status == 0 ? 'selected' : '' }} value="0">In Active</option>
                </select>
            </div>
    
            <button type="submit" class="form-btn">Update News</button>
        </form>
        <br>
        <a href="#" class="action-link view-link">Back</a>
    </div>
</x-app-layout>