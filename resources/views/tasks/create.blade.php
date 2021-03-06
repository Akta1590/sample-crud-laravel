@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tasks</div>

                    <div class="panel-body">

                        {!! Form::open(array('route'=>'task.store')) !!}
                            <div class="form-group">
                                {!! Form::label('name','Name') !!}
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address','Address') !!}
                                {!! Form::text('address',null,['class'=>'form-control']) !!}
                            </div>

							<div class="form-group">
                                {!! Form::label('phone','Phone') !!}
                                {!! Form::text('phone',null,['class'=>'form-control']) !!}
                            </div>


                            <div class="form-group">
                                {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>

                @if($errors->has())
                    <ul class="aler alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
@endsection
