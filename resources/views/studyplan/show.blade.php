@extends('layouts.app')

@section('template_title')
    {{ $studyplan->name ?? "{{ __('Show') Studyplan" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Studyplan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('studyplans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Objetive:</strong>
                            {{ $studyplan->objetive }}
                        </div>
                        <div class="form-group">
                            <strong>Datestart:</strong>
                            {{ $studyplan->datestart }}
                        </div>
                        <div class="form-group">
                            <strong>Datefinal:</strong>
                            {{ $studyplan->datefinal }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $studyplan->status }}
                        </div>
                        <div class="form-group">
                            <strong>Idcarrer:</strong>
                            {{ $studyplan->idCarrer }}
                        </div>
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $studyplan->idUser }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
