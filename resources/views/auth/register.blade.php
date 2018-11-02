@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ trans('validation.Register') }}</div>

                    <div class="card-body">
                        {!! Form::open(['method' => 'POST', 'routes' => 'register']) !!}

                        <div class="form-group row">
                            {!! Form::label('username', trans('validation.Name'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('username', old('name'), ['class' => 'form-control', 'autofocus' => 'autofocus', 'id' => 'name']) !!}

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <p class="text-danger float-right">*</p>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', trans('validation.E-Mail_Address'), ['class' => 'col-sm-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'id' => 'email' ]) !!}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <p class="text-danger float-right">*</p>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('number', trans('validation.Number_Phone'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!!  Form::number('number', old('number'), ['class' => 'form-control' . ($errors->has('num_phone') ? ' is-invalid' : ''), 'id' => 'number']) !!}

                                @if ($errors->has('num_phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('num_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <p class="text-danger float-right">*</p>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('address', trans('validation.Address'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('address', old('address'), ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'id' => 'address']) !!}

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('validation.Password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'required' => 'required', 'id' => 'password'])  !!}

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <p class="text-danger float-right">*</p>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm', trans('validation.Confirm_Password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password-confirm', 'requied' => 'required'])  !!}
                            </div>
                            <p class="text-danger float-right">*</p>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(trans('validation.Register'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
