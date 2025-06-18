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
            <tr wire:key='{{ $post->id }}'>
                <td>{{ $post->title }}</td>
                <td>{{ str($post->content)->words(8) }}</td>
                <td>
                    <button type="button" wire:click="delete({{ $post->id }})"
                        wire:confirm='Are you sure u want delete this post?'>
                        delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>