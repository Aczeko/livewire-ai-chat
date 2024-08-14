![Livewire-AI-Chatbot](https://banners.beyondco.de/Livewire%20AI%20Chatbot.png?theme=dark&packageManager=&packageName=&pattern=xEquals&style=style_1&description=AI+Chatbot+with+Livewire+for+Real-Time+Streaming+of+ChatGPT+Responses&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

## Table of Contents
- [Overview](#overview)
- [Installation](#installation)
- [Useful Links](#useful-links)

---
<section id="overview">

## 🔎 Overview
This is an AI chatbot using Livewire and ChatGPT.

It's using wire:stream to stream in ChatGPT responses as they arrive, by building a chat interface with Livewire.

Every message that is sent and every response is shown in the chat history. It also remembers the conversation context, though nothing is saved in a database. 
It's using the [OpenAI PHP API client](https://github.com/openai-php/client), that allows you to interact with the OpenAI API.

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

<section id="useful-links">

## 🔗 Useful Links
- [Video-Tutorial for this AI Chatbot](https://codecourse.com/courses/create-an-ai-chat-bot-with-livewire-and-chatgpt)
- [OpenAi PHP Package](https://github.com/openai-php/client)

</section>

