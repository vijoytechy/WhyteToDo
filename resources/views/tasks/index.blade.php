@extends('layouts.app')

@section('content')
  <div style="margin-top: 40px; margin-bottom: 40px;">
    <h1>TASK LIST</h1>
    @foreach($tasks as $task)
      <div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px;">
        <div class="card-body ">
          <p class="desc">
            {{ $task->description}}
          </p> 

          @if(!$task->isCompleted())
            <form action="/tasks/{{ $task->id }}" method="POST">
              @method('PATCH')
              @csrf
              <button class="btn btn-outline-success btn-block" input="submit">Complete</button>
            </form>
          @else
            <form action="/tasks/{{ $task->id }}" method="POST">
              @method('DELETE')
              @csrf
              <button class="btn btn-outline-danger btn-block" input="submit">Delete</button>
            </form>
          @endif
        </div>
      </div>
    @endforeach
    <a href="/tasks/create" class="btn  btn-lg btn-block btns">New Task</a>
  </div>
@endsection