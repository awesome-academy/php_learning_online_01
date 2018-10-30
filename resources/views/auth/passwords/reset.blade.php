@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('validation.Reset_Password') }}</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'password.update']) !!}

                        {!! Form::hidden('token', $token) !!}

                        <div class="form-group row">
                            {!! Form::label('email', trans('validation.E-Mail_Address'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', $email ?? old('email'), ['class' => 'form-control' . ( $errors->has('email') ? ' is-invalid' : ''), 'id' => 'email', 'required' => 'required', 'autofocus' => 'autofocus']) !!}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('validation.Password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control' . $errors->has('password') ? ' is-invalid' : '', 'id' => 'password', 'required' => 'required'])  !!}

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', trans('validation.Confirm_Password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['class' => 'awesome', 'id' => 'password-confirm', 'required' => 'required'])  !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(trans('validation.Reset_Password'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
