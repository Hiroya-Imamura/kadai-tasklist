@extends('layouts.app')

@section('content')

    <!-- ここにページ毎のコンテンツを書く -->
    <h1>新しいタスクの追加ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => 'tasks.store'], ['method' => 'post']) !!}  <!--第3引数 ['method' => 'post']はなくても良い、デフォルトがPOSTだから-->

                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', '状態:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('追加', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection