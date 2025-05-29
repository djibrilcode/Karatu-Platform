<div>
    <!-- Formulaire d'ajout ou de modification -->
    <form wire:submit.prevent="{{ $is_update ? 'update' : 'add' }}">
        <textarea
            wire:model="{{ $is_update ? 'editContent' : 'content' }}"
            placeholder="{{ $is_update ? 'Modifier le message...' : 'Écrivez votre message ici...' }}">
        </textarea>
        <button type="submit">
            {{ $is_update ? 'Mettre à jour' : 'Ajouter' }}
        </button>
        @if($is_update)
            <button type="button" wire:click="cancelEdit">Annuler</button>
        @endif
    </form>

    <!-- Liste des messages -->
    <ul>
        @foreach($messages as $message)
            <li>
                {{ $message->content }}
                <button wire:click="edit({{ $message->id }})">Modifier</button>
                <button wire:click="delete({{ $message->id }})">Supprimer</button>
            </li>
        @endforeach
    </ul>
</div>
