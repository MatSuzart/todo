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
            <input type="name" id="title" required  placeholder="TASK NAME"/>
        </div>
        <x-form.text.input name="title" label ="title task" required ="required"/>
        <div class="inputArea">
            <label for="title">
                Date
            </label>
            <input type="date" name="name" required  placeholder="TASK Date"/>
        </div>
        <div class="inputArea">
            <label for="category">
                Category
            </label>
            <section id="cateogry" name="category" required>
                <option selected disabled value="">SELECT A CATEGORY</option>
                <option> Value </option>
            </section>
        </div>
        <div class="inputArea">
            <label for="title">
            Description
            </label>
                <textarea name="description" id="due_date" name="due_date" placeholder=""></textarea>
        </div>
        <x-form.button resetTXT="Resetar" submitTXT="CREATE TASK" />

        <div class="inputArea">
            <button type="submit" class="btn btn-primary">CREATE</button>
        </div>
    </form>
</section>
</x-layout>
