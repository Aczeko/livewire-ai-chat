<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $response = app('openai')->chat()->create([
        'model' => 'gpt-4o-mini',
        'messages' => [
            ['role' => 'system', 'content' => 'You are a friendly bot to help with web development.'],
            ['role' => 'user', 'content' => 'Link me to the Laravel docs'],
        ]
    ]);

    dd($response);
});
