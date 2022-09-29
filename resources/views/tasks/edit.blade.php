<x-layout>
<section id="task_section">
    <h1> MAKE TASK</h1>
    <form method="POST" action="{{route('task.create_action')}}">
        @csrf
        <div class="inputArea">
            <label for="title">
                Title Task
            </label>
            <input type="name" id="title" required  placeholder="TASK NAME"
            :value="{{$task->title}}"
            />
        </div>
        <x-form.text.checkbox.input
        name ="is_done"
        value="{{$task->is_done}}"
        label="task_finished"
        />
        <x-form.text.input type="checkbox"
        name ="is_done"
        value="{{$task->is)done}}"
        label="task_finished"
        />

        <div class="inputArea">
            <label for="title">
                Date
            </label>
            <input type="date" name="name" required  placeholder="TASK Date"
            value={{$task->due_date}}
            />
        </div>
        <div class="inputArea">
            <label for="category">
                Category
            </label>
            <section id="cateogry" name="category" required>
                <option selected disabled value="">SELECT A CATEGORY</option>
                @foreach($categories as $category)

                <option value="{{$category->id}}"
                    @if($category->id == $task->category_id)

                    @endif
                >{{$category->title}}</option>
                @andforeach
            </section>

</x-layout>
