<div>
    <h2>New Post</h2>

    <form wire:submit="save">

        <label>
            <span>Title</span>
            <input wire:model='title' type="text"><br>
            @error('title')
            <em>{{ $message }}</em>
            @enderror
        </label>
        <br>

        <label>
            <span>Content</span>
            <input wire:model='content' type="text"><br>
            @error('content')
            <em>{{ $message }}</em>
            @enderror
        </label>
        <br>

        <button type="submit">Save</button>

    </form>
</div>