<x-layout>
<section id="task_section">
    <h1> MAKE TASK</h1>
    <form method="POST" action="{{route('task.create_action')}}">
        @csrf
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
                @foreach($categories as $category)

                <option value="{{$category->id}}">{{$category->title}}</option>
                @andforeach
            </section>

</x-layout>
