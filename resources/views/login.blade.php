<x-layout page="login" btnHref="https://google.com.br" btnText="Go to google">
    <x-slot:btn>
    <a href="{{route('register')}}" class="btn btn-primary">
        Register
    </a>
</x-slot:btn>

<h2>Tela de Login</h2>

<a href="{{route('home')}}">HOME</a>
<form method="POST" action="{{route('user.login.action')}}">
    <h1>REGISTER</h1>
    @csrf
<x-form.text_input
    type="name"
    name="name"
    label="YOUR EMAIL"
    placeholder="YOUR NAME"
    />

    <x-form.text_input
    type="password"
    name="password"
    label="YOUR password"
    />
</form>
<h2>Tela de Login</h2>
</x-layout>
