<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LaravelLive Chat</title>

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset("css/libs/bootstrap.min.css") }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>
<body>
<div id="app">
    <div class="main-wrapper">
        <!-- Main Content -->
        @stack('content')
    </div>
</div>

@include('partials.message')

<script>
    const authUserId = parseInt("{{ \Auth::id() }}");
</script>

<!-- JS Libraries -->
<script src="{{ asset('js/libs/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/libs/popper.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/libs/jsrender.min.js') }}"></script>
<script src="{{ mix('js/app.js') }}" defer></script>

<!-- Template JS File -->
<script src="{{ asset('assets/js/stisla.js') }}"></script>

<!-- Custom JS File -->
<script type="application/javascript">
    const sendMessageUrl = "{{ route('sendMessage') }}";
</script>
<script type="application/javascript" src="{{ asset('assets/js/chat.js') }}"></script>

</body>
</html>
