<?php

namespace App\Livewire;

use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{
    public $messages;
    public $content;
    public $editContent = '';
    public $editMessageId = null;
    public $is_update = false;

    public function mount()
    {
        return $this->messages = ModelsMessage::all();
    }

    public function add()
    {
        $this->validate([
            'content' => 'required',
        ]);

        ModelsMessage::create([
            'content' => $this->content
        ]);

        $this->content = '';
        $this->messages = ModelsMessage::all();
    }

    public function edit($id)
    {
        $this->is_update = true;

        // Charger le message à modifier
        $message  = ModelsMessage::find($id);

        if ($message) {
            $this->editMessageId = $message->id;
            $this->editContent = $message->content;
        }
    }

    public function update()
    {
        $this->validate([
            'editContent' => 'required',
        ]);

        //mettre à jour le message
        $message = ModelsMessage::find($this->editMessageId);

        if ($message) {
            $message->update([
                'content' => $this->editContent
            ]);
        }

        // Réinitialiser les champs et recharger la liste des messages
        $this->editMessageId = null;
        $this->editContent = '';
        $this->messages = ModelsMessage::all();
    }

    public function delete($id)
    {
        $message_id  = ModelsMessage::find($id);
        if($message_id) {
            $message_id->delete();
        }

        $this->messages = ModelsMessage::all();
    }

    public function render()
    {
        return view('livewire.message');
    }
}
