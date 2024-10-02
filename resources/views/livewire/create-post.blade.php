<div>
    <h2>New Post: </h2>

    <h3>Alpine.Js</h3>

    <div x-data="{ count: 0 }">
        <span x-text="count"></span>
        <button x-on:click="count++">+</button>
    </div>


    Current Title: <span x-text="$wire.title"></span>



    <form wire:submit='save'>
        <label>
            <span>Title</span>
            <input type="text" wire:model='title'>
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </label>
        <label>
            <span>Content</span>
            <textarea wire:model='content'></textarea>
            <small>Words:
                <span x-text="$wire.content.split(' ').length - 1"></span>
            </small>
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <button type="submit">Save</button>
    </form>
</div>
