@extends('layouts.app')

@section('content')
    <a href="{{route('task.create')}}" class="btn btn-success"><i class="fa fa-plus"></i>Create new task</a>
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Текущая задача
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            <td>
                            <td>
                                <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
