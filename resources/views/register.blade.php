<x-layout page="login" btnHref="https://google.com.br" btnText="Go to google">
    <x-slot:btn>
    <a href="{{route('login')}}" class="btn btn-primary">
        Register
    </a>
</x-slot:btn>
<form action="">
<x-form.text_input
    type="name"
    name="name"
    label="YOUR EMAIL"
    placeholder="YOUR NAME"
    />
    <x-form.text_input
    type="email"
    name="email"
    label="YOUR EMAIL"
    placeholder="YOUR EMAIL"
    />
    <x-form.text_input
    type="password"
    name="password"
    label="YOUR password"
    />
</form>
<h2>Tela de Login</h2>
</x-layout>
