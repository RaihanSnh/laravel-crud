<x-layout>
    <div class="container">
        <a href="{{ route('news.create') }}" class="create-news-button">Create News</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Banner Image</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newss as $news)
                <tr>
                    <td>{{ $news->id }}</td>
                    <td>{{ $news->title }}</td>
                    <td>
                        @if (!empty($news->banner_image))
                        <img style="height: 80px;" src="{{ asset('images/' . $news->banner_image) }}" alt="">

                        @else
                            Not Avaible
                        @endif
                    </td>
                    <td>{{ $news->status == 1 ? "Active" : "Inactive" }}</td>
                    <td>{{ $news->created_at }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('news.show', $news) }}" class="action-buttons"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('news.edit', $news) }}" class="action-buttons"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('news.destroy', $news)}}" class="action-buttons"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $newss->links() }}
        </div>
    </div>
</x-layout>