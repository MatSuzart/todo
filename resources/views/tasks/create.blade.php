<x-layout page="login" btnHref="https://google.com.br" btnText="Go to google">
    <x-slot:btn>
    <a href="{{route('login')}}" class="btn btn-primary">
        Register
    </a>
</x-slot:btn>

<h2>Task's Page</h2>
<section id="create_task_section">
    <h1> MAKE TASK</h1>
    <form action="">
        <div class="inputArea">
            <label for="title">
                Title Task
            </label>
            <input type="name" required  placeholder="TASK NAME"/>
        </div>
    </form>
</section>
</x-layout>
