@extends('layouts.app')

@section('template_title')
    {{ $carrer->name ?? "{{ __('Show') Carrer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Carrer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carrers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $carrer->name }}
                        </div>
                        <div class="form-group">
                            <strong>Duration:</strong>
                            {{ $carrer->duration }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $carrer->description }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $carrer->status }}
                        </div>
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $carrer->idUser }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
