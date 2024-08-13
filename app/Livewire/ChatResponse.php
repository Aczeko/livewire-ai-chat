<?php

namespace App\Livewire;

use Livewire\Component;

class ChatResponse extends Component
{
    public array $prompt;

    public array $messages;

    public function mount()
    {
        $this->getResponse();
    }

    public function getResponse()
    {
        $response = app('openai')->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $this->messages,
        ]);

        dd($response);
    }
    public function render()
    {
        return view('livewire.chat-response');
    }
}
