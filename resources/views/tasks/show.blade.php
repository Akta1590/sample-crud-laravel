@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">



                <div class="panel panel-default">
                    <div class="panel-heading">{{ $task->name}}</div>
				<div class="panel-heading">{{ $task->address}}</div>
				<div class="panel-heading">{{ $task->phone}}</div>

                </div>



            </div>
        </div>
    </div>
@endsection
