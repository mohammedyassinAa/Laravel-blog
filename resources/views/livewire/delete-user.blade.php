<div>
    {{-- <button type="button" wire:click="deleteUser({{ $userid }})"class="btn btn-danger">  Confirm   </button> --}}

    <button type="button" wire:click="deleteUser({{ $userid }})" onclick="confirm('Are you sure you want to delete this user?') || event.stopImmediatePropagation()" class="btn btn-danger">Confirm</button>


</div>
