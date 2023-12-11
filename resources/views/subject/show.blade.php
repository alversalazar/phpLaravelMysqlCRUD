@extends('layouts.app')

@section('template_title')
    {{ $subject->name ?? "{{ __('Show') Subject" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Subject</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subjects.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $subject->name }}
                        </div>
                        <div class="form-group">
                            <strong>Credit:</strong>
                            {{ $subject->credit }}
                        </div>
                        <div class="form-group">
                            <strong>Unit:</strong>
                            {{ $subject->unit }}
                        </div>
                        <div class="form-group">
                            <strong>Characteristic:</strong>
                            {{ $subject->characteristic }}
                        </div>
                        <div class="form-group">
                            <strong>Keymatter:</strong>
                            {{ $subject->keymatter }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $subject->status }}
                        </div>
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $subject->idUser }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
