<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#0f3d58">
    <link rel="manifest" href="{{url('manifest.json')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css"> {{-- um pouco de estilização rapida --}}
    <style>
        .contato__container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .contato__form {
            width: 400px;
            padding: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    {{-- aqui poderia ir um header --}}

    <main role="main" id="app">
        @yield('content')
    </main>

    {{-- e aqui um footer --}}

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>

</html>
