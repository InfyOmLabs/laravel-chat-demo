# Realtime Apps with Laravel Jun 2020 Meetup

## 1. PHP Applications

- APIs Development
- Website Development
- No way to tell the frontend/browser/mobile app that something is changed
- Long polling methods

## 2. New Era of Realtime Applications

- Realtime everywhere
- No one wants to refresh the page
- Node.js takeover + Socket.io

## 3. Few Example Apps/Use cases

- Notifications on web
- Chatting applications
- Support systems replies and comments
- Realtime Dashboards
- Realtime Collaborations

## 5. Socket.io

Socket.io is a event-driven library which enables real-time and full duplex communication between the Client and the Web servers by using WebSocket protocol.

- Node.js server
- Javascript Client side Library for browser
- XHR pooling vs WebSockets
    Diagram Here

## 4. Introduction to Laravel Broadcasting

- Possibility to send updates to frontend in realtime
- As simple as Laravel Events
- Multiple connectors (Socket.io with Echo Server with Redis + Pusher)

## 6. How Laravel Broadcasting works

- Pusher Overview
    Diagram Here

- Echo Server (socket.io) Overview
    Diagram Here

## 7. Laravel Echo

## 8. Channels & Events

## 9. Types of Channel

## 10. Events

## 11. Practical Test

### Installation

#### Install Pusher Dependencies

- Install pusher SDK `composer require pusher/pusher-php-server "~4.0"`
- Install pusher js library `npm install --save laravel-echo pusher-js`

#### Install Socket.io dependencies

- Install redis `composer require predis/predis`
- Install socket.io client `npm install --save socket.io-client`
- Install Laravel echo server `npm install -g laravel-echo-server`
- Configure Laravel Echo Server `laravel-echo-server init`

### Configuration

- Setup .env (Pusher only)
- Update bootstrap.js file

### Integration

- Create UI for Chat
- Create one API to send a message
- Creating event with `ShouldBroadcast` interface
- Defining broadcast channel and Data
- Listening For Event Broadcasts on frontend
- Implement presence channel

## 12. Let's do some chatting

## Sample Applications

- InfyChat (Chatting)
- TaskReviewer (Realtime Collaboration)
