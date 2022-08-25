<x-layout>
    <x-slot:btn>
        <a href="#" class="btn btn-primary">
            CRIAR TAREFA
        </a>
    <x-slot:btn>
<section class="graph">
                        <div class="graph_header">
                        <h2>PROGRESSO</h2>
                        <div class="graph_header-line"></div>
                        <div class="graph-header-date">
                            <img src="/assets/images/icon-prev.png" />
                            <img src="/assets/images/icon-icon-next.png" />
                        </div>
                        </div>
                        <div class="graph_header_subtitle">Task: <b>/6/</b></div>
                        <div class="graph-placeholder">
                        </div>
                           <div class="taks_left_footer">
                            <img src="assets/images/icon-info.png" />
                                3 DIAS
                          </div>
                    </section>
                    <section class="list">
                            <div class="list-header">
                                <select class="list_header-select">
                                    <option value="1">
                                        ALL TASKS
                                    </option>
                                </select>
                            </div>
                            <div class="task_list">
                                @php
                                ['done' => false, 'title'=> 'task', 'CATEGORY' =>'1'],
                                ['done' => true, 'title'=> 'task2', 'CATEGORY' =>'2'],

                                @endphp
                                <x-task>
                                    data = $task[1]
                                </x-task>
                                <x-task/>
                            </div>
                    </section>
</x-layout>
