<x-layout>
    <x-slot:btn>
        <a href="#" class="btn btn-primary">
            CRIAR TAREFA
        </a>
    <x-slot:btn>
<section class="graph">
                        <div class="graph_header">
                        <h2>PROGRESSO {{$authUser->name}}</h2>
                        <div class="graph_header-line"></div>
                        <div class="graph-header-date">

                           <a href="{{route('home',['date'=>$date_prev_button]}}">
                            <img src="/assets/images/icon-prev.png" />
                            {{$date_as_string}}
                            </a>

                            <a href="{{route('home',['date'=>$date_next_button]}}">
                            <img src="/assets/images/icon-icon-next.png" />
                            </a>
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
                            <div class="list-header" OneChange="changeStatusFilter(this)">
                                <select class="list_header-select">
                                    <option value="all_taks">
                                        ALL TASKS
                                    </option>
                                    <option value="tasks_pending">
                                        ALL PENDING
                                    </option>
                                    <option value="tasks_done">
                                        ALL DONE
                                    </option>
                                </select>
                            </div>
                            <div class="task_list">
                                @foreach($taks as $task)
                                <x-task
                                    :data = $task />
                                @endforeach

                            </div>
                    </section>

 <script>
    function chnageTaskStatusFilter(e){
        showAllTasks();

        if(e.value =='task_peding'){
            document.querySelector('.task_done').forEach(function(element){
                element.stlye.display = 'nome';
            });
        }else if (e.value == 'task_done'){
            document.querySelector('.task_pending').forEach(function(element){
                element.stlye.display = 'nome';
        }

        function showAllTasks(){
            document.querySelector('.task').foreach(function(element){
                element.style.display = 'block';
            });
        }

    }




 </script>

<script>
   async function TaskUpdate(element){
       let status isDone = element.checked;
       let taskId = element.dataset.id;
       let url = '{{route('task.update')}}';
        let rawResult = await = fetch(url, {
            method: {
                'Content-type':application/json,
                'accpet': 'application/json'
            },
            body; JSON.stringify(status, taskId, _token: '{{csrf_token()}}');

        });
        result = await rawResult.json();
        if(result.success){
            alert('TASK UPDATE');
        }else {
            element.checked = !status;
        }
    }
</script>
</x-layout>
