                        <div class="task {{$data['is_done'] ? 'task_done' : 'task_pending'}}" >
                                    <div class="title">
                                        <input type="checkbox"  onChange="TaskUpdate(this)" data-id="{{$data['id']}}"

                                        @if($data && $data['is_done'])
                                            checked
                                        @endif
                                        />
                                        <div class="task_title">TITLE (COMPONENTE)</div>
                                    </div>
                                    <div class="priority">
                                        <div class="sphere"></div>
                                        <div class="task_title">{{$data['category']->title ?? ''}}</div>
                                    </div>
                                    <div class="action">
                                        <a href="{{route('task.edit', ['id'=> $data['id']])}}">
                                            <img src="/assets/images/icon-edit.png" />
                                        </a>
                                        <a href="{{route('task.delete')}}">
                                            <img src="/assets/images/icon-delete.png" />
                                        </a>
                                    </div>
                                </div>

