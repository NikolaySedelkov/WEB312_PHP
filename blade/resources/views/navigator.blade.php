@php
    $links = array(
        "/study" => "Онлайн обучение",
        "/school" => "Онлайн школа",
        "/events" => "Мероприятия",
        "/about" => "О нас"
    );
@endphp

<style>
    nav.top-academy {
        display: flex;
        justify-content: space-evenly;
    }

    nav.top-academy a {
        color: #000;
        width: 40px;
        width: 100px;
        text-align: center;
        background-color: red;
        margin: 0 5px;
    }

    nav.top-academy a:hover, nav.top-academy a.active {
        border-bottom: 3px solid black;
        box-sizing: border-box;
    }
</style>

@php

    $currentUrl = $_SERVER['REQUEST_URI'];
    $currentUrl = explode('?', $currentUrl);
    $currentUrl = $currentUrl[0];

@endphp

<nav class="top-academy">
    @foreach($links as $url => $title)
        <a
            class="@if($currentUrl === $url) active @endif"
            href="{{ $url }}"
        > 
            {{ $title }} 
        </a>
    @endforeach
</nav>