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
                                    @include('partials.user')
                                    @include('partials.user')
                                    @include('partials.user')
                                    @include('partials.user')
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-9">
                        <div class="card mb-0 vh-100 chat-box card-success" id="mychatbox2">
                            <div class="card-header">
                                <h4>LaravelLive India Jun Meetup Room</h4>
                            </div>
                            <div class="card-body chat-content">
                            </div>
                            <div class="card-footer chat-form">
                                <form id="chat-form2">
                                    <input type="text" class="form-control" placeholder="Type a message">
                                    <button class="btn btn-primary">
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endpush
