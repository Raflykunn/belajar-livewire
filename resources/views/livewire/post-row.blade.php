<tr @class(['archived'=> $post->is_archived])>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(8) }}</td>
    <td>
        <button type="button" wire:click="$parent.delete({{ $post->id }})"
            wire:confirm='Are you sure u want delete this post?'>
            delete
        </button>

        @unless ($post->is_archived)
        <button type="button" wire:click="archive" wire:confirm='Are you sure u want archive this post?'>
            archive
        </button>
        @endunless
    </td>
</tr>

@push('style')
<style>
    .archived {
        background-color: rgb(190, 180, 180);
    }
</style>
@endpush