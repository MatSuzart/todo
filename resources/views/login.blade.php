<x-layout page="login" btnHref="https://google.com.br" btnText="Go to google">
    <x-slot:btn>
    <a href="{{route('register')}}" class="btn btn-primary">
        Register
    </a>
</x-slot:btn>

<h2>Tela de Login</h2>

<a href="{{route('home')}}">HOME</a>
</x-layout>
