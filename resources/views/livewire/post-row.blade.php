<tr @class(['archived' => $post->is_archived])>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(8) }}</td>
    <td>

        @if (!$post->is_archived)
            <button style="color: red;" type="button" wire:click='archive'>
                Archive
            </button>
        @else
            <button style="color: green;" type="button" wire:click='isNotArchive'>
                Is Not Archive
            </button>
            <button type="button" wire:click='$parent.delete({{ $post->id }})'
                wire:confirm='Are you sure you want to delete this Post'?>
                Delete
            </button>
        @endif


    </td>
</tr>
