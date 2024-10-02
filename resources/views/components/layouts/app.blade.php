<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="/app.css">
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body style="font-family: 'Inter', sans-serif;">

    <nav>
        <a wire:navigate href="/" @class(['current' => request()->is('/')])>ToDos</a>
        <a wire:navigate href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
        <a wire:navigate href="/posts" @class(['current' => request()->is('posts')])>Posts</a>
        <a wire:navigate href="/post/create" @class(['current' => request()->is('post/create')])>Create Post</a>

    </nav>

    {{ $slot }}
</body>

</html>
