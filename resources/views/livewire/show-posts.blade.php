<div>
    <h2>Posts</h2>

    <table border="1">
        <thead>
            <tr>
                <th>title</th>
                <th>content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <livewire:post-row :key="$post->id" :$post>
                @endforeach
        </tbody>
    </table>
</div>