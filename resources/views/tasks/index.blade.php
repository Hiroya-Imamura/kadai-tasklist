@extends('layouts.app')

@section('content')

    <!-- ここにページ毎のコンテンツを書く -->
    @if(Auth::check())
        <h1>{{ Auth::user()->name }}のタスク一覧</h1>
    
        @if (count($tasks) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>タスク</th>
                        <th>状態</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task2)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task2->id, ['task' => $task2->id]) !!}</td>
                        <td>{{ $task2->content }}</td>
                        <td>{{ $task2->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- ページネーションのリンク --}}
            {{ $tasks->links() }}
        @endif
        
        {{-- メッセージ作成ページへのリンク --}}
        {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-primary']) !!}
    @else
        <h1>タスク一覧サイトへようこそ</h1>
        
        {{-- ユーザ登録ページへのリンク --}}
        {!! link_to_route('signup.get', '今すぐ登録！', [], ['class' => 'btn btn-lg btn-primary']) !!}
    @endif



@endsection