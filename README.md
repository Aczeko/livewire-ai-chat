![Livewire-AI-Chatbot](https://banners.beyondco.de/Livewire%20AI%20Chatbot.png?theme=dark&packageManager=&packageName=&pattern=xEquals&style=style_1&description=AI+Chatbot+with+Livewire+for+Real-Time+Streaming+of+ChatGPT+Responses&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

## Table of Contents
- [Overview](#overview)
- [Installation](#installation)
- [Usage](#usage)
  - [Model](#model)
  - [Role](#role)
- [Useful Links](#useful-links)

---
<section id="overview">

## 🔎 Overview
This is an AI chatbot using Livewire and ChatGPT.

It's using wire:stream to stream in ChatGPT responses as they arrive, by building a chat interface with Livewire.

Every message that is sent and every response is shown in the chat history. It also remembers the conversation context, though nothing is saved in a database. 
It's using the [OpenAI PHP client](https://github.com/openai-php/client), that allows you to interact with the OpenAI API.

Since it is interacting with the OpenAI API, you will need to create an account at [OpenAI](https://openai.com/index/openai-api/) and generate an API Key.

The response that is sent by the API, is also being rendered by [Spatie's Laravel-Markdown](https://github.com/spatie/laravel-markdown) package, so the markdown can be displayed correctly.

It also supports dark and light mode, depending on your system-preference.

</section>

<section id="installation">

## ⚙️ Installation

1. Clone this repository:
    ```bash
    git clone git@github.com:Aczeko/livewire-ai-chat.git
    ```
   
2. Navigate into the directory:
    ```bash
    cd yourproject
    ````
   
3. Install dependencies:
    ```bash
    npm install
    composer install 
    ```

4. Duplicate the .env.example file and save it as .env
    - here you can enter your OpenAI API Key

    ```
    OPENAI_API_KEY=
    ```

5. Generate a new Application Key:
    ```bash
    php artisan key:generate
    ```
    
6. Migrate the tables
   
    ```bash
    php artisan migrate
    ```

7. Run your build process with:
    ```bash
    npm run dev
    ```

</section>

<section id="usage">

## 🛠️ Usage

<section id="model">

### Model

Depending on which ChatGPT model you are using, you'll need to change it in the code.
Currently, it is set to `GPT-3.5 Turbo`, since you're given a **limited** amount of free credits, so you can test out the bot, without having to upgrade to one of the paid plans. Though you should keep in mind, that OpenAI might have restrictions or changes in the free tier that apply to your account, limiting the number of requests you can make.

If you do want to change the model, you can do that in the `ChatResponse.php` file:

```php
$stream = app('openai')->chat()->createStreamed([
            'model' => 'gpt-3.5-turbo', // here you can change the model to your preference
            'messages' => $this->messages,
        ]);
```

</section>

<section id="role">

### Role

You can set up what role the bot should have and how it should communicate with you. 
In the code, the bot is set as a "friendly web developer".

To change the bot's role, you need to change the `content inside the `mount()` method in the `Chat.php` file:

```php
public function mount()
    {
        $this->messages[] = ['role' => 'system', 'content' => 'You are a friendly web developer here to help.']; // Change content to your liking
    }
```

If you want the bot to always start the conversation with a certain word or message, you can also add that to the `content` inside the `mount()` method:

#### Example

```php
public function mount()
    {
        $this->messages[] = ['role' => 'system', 'content' => 'You are a friendly web developer here to help. Always start the conversation with Hey!']; // Change content to your liking
    }
```

</section>

</section>

<section id="useful-links">

## 🔗 Useful Links
- [Video-Tutorial for this AI Chatbot](https://codecourse.com/courses/create-an-ai-chat-bot-with-livewire-and-chatgpt)
- [OpenAi PHP Package](https://github.com/openai-php/client)

</section>

