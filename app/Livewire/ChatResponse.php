<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;

class ChatResponse extends Component
{
    public array $prompt;

    public array $messages;

    public ?string $response = null;

    public function mount()
    {
        $this->js('$wire.getResponse()');
    }

    public function getResponse()
    {
        $stream = app('openai')->chat()->createStreamed([
            'model' => 'gpt-3.5-turbo',
            'messages' => $this->messages,
        ]);

        foreach ($stream as $response)
        {
            $content = Arr::get($response->choices[0]->toArray(), 'delta.content');

            $this->response .= $content;

            $this->stream(
                'stream-' . $this->getId(),
                $content,
                false
            );

        }



    }
    public function render()
    {
        return view('livewire.chat-response');
    }
}
