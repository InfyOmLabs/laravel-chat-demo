# Realtime Apps with Laravel Jun 2020 Meetup

## Installation

### Install Pusher Dependencies

- Install pusher SDK `composer require pusher/pusher-php-server "~4.0"`
- Install pusher js library `npm install --save laravel-echo pusher-js`

### Install Socket.io dependencies

- Install redis `composer require predis/predis`
- Install socket.io client `npm install --save socket.io-client`
- Install Laravel echo server `npm install -g laravel-echo-server`
- Configure Laravel Echo Server `laravel-echo-server init`

## Configuration

- Setup .env (Pusher only)
- Update bootstrap.js file
- run `npm run dev`

## Integration

- Create a UI for Chat (`resources/views/home/index.blade.php`)
- Create one API to send a message (`message`)
- Creating event with `ShouldBroadcast` interface (`app/Events/NewChatMessageEvent.php`)
- Defining broadcast channel and Data (`broadcastOn` & `broadcastWith`)
- Listening For Event Broadcasts on frontend (`public/js/chat.js`)
- Implement presence channel (`public/js/chat.js`)

## Sample Applications

- [InfyChat](https://codecanyon.net/item/infychat-laravel-chat-app-package/25054608) (Full Chat Application)
- TaskReviewer (Realtime Collaboration SaaS Tool)
