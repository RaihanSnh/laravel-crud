<x-layout>
    <div class="mid-container">
        <h2>News Details</h2>
        <div class="news-details">
            <h3>Title:</h3>
            <p>{{ $news->title }}</p>
        </div>
        <div class="news-details">
            <h3>Description:</h3>
            <p>{{ $news->description }}</p>
        </div>
        <div class="news-details">
            <h3>Banner Image:</h3>
            <p>
                @if (!empty($news->banner_image))
                    <img style="height: 80px;" src="{{ asset('images/' . $news->banner_image) }}" alt="">
                @else
                    Not Avaible
                @endif
            </p>
        </div>
        <div class="news-details">
            <h3>Status:</h3>
            <p>{{ $news->status == 1 ? 'Active' : 'Inactive' }}</p>
        </div>
        <div class="news-details">
            <h3>Created At:</h3>
            <p>{{ $news->created_at }}</p>
        </div>
        <a href="{{ route('news.index') }}" class="action-link view-link">Back</a>
        <a href="{{ route('news.edit', $news->id) }}" class="action-link edit-link">Edit</a>
    </div>
</x-layout>