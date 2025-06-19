<div>
    <h2>New Post</h2>

    <div x-data="{ count: 0 }">
        <span x-text="count"></span>

        <button x-on:click="count++">+</button>
    </div>

    Current Title: <span x-text="$wire.title.toUpperCase()"></span>

    <button x-on:click="$wire.title = ''">clear title</button>
    <button type="button" x-on:click="$wire.save()">submit form</button>

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

            <small>Words:
                <span x-text="$wire.content.split(' ').length - 1"></span>
            </small>

            @error('content')
            <em>{{ $message }}</em>
            @enderror
        </label>
        <br>

        <button type="submit">Save</button>

    </form>
</div>