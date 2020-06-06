@extends('layouts.app')

@push('content')
    <section class="section">
        <div class="section-body">
            <div class="container-fluid vh-100 d-flex align-items-center">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card mb-0 vh-100">
                            <div class="card-header">
                                <h4>Who's Online?</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled list-unstyled-border">
                                    @foreach($users as $user)
                                        <x-chat-user :user="$user"/>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-9">
                        <div class="card mb-0 vh-100 chat-box card-success" id="mychatbox2">
                            <div class="card-header">
                                <h4>LaravelLive India Jun Meetup Room</h4>
                            </div>
                            <div class="card-body chat-content" id="chatContainer">
                                @foreach($messages as $message)
                                    <x-chat-message :message="$message"/>
                                @endforeach
                            </div>
                            <div class="card-footer chat-form">
                                <input type="text" class="form-control" placeholder="Type a message"
                                       id="txtMessage">
                                <button class="btn btn-primary" id="btnSendMessage">
                                    <i class="far fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush
