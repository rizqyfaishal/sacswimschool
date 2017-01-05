@extends('layouts.dashboard')

@section('dashboard-content')
    <h4>Change Password</h4>
    <div class="change-password">
        {!! Form::open(['method' => 'POST','action' => ['DashboardController@update'], 'class' => 'col s7 pjax-forms']) !!}
        <div class="input-field col s12">
            {!! Form::label('old_password','Password Lama') !!}
            {!! Form::password('old_password',null,array('class' => 'validate')) !!}
            @if ($errors->has('old_password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="input-field col s12">
            {!! Form::label('password','Password Baru') !!}
            {!! Form::password('password',null,array('class' => 'validate')) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="input-field col s12">
            {!! Form::label('password_confirmation','Konfirmasi Password') !!}
            {!! Form::password('password_confirmation',null,array('class' => 'validate')) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="input-field col s12">
            {!! Form::submit('Ganti Passoword', array('class' => 'btn waves-effect waves-light pjax-form')) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection