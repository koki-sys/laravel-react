<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name='csrf-token' content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>


    <title>react test</title>
</head>

<body id="app">
    <div class="container">
        <h3 class="mt-5">Todo 管理システム</h3>

        <div id="todoApp"></div>
    </div>

</body>

</html>