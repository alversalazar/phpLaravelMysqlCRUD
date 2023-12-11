@extends('layouts.app')

@section('template_title')
    {{ $viatic->name ?? "{{ __('Show') Viatic" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Viatic</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('viatics.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Place:</strong>
                            {{ $viatic->place }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $viatic->description }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $viatic->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $viatic->status }}
                        </div>
                        <div class="form-group">
                            <strong>Idemployee:</strong>
                            {{ $viatic->idEmployee }}
                        </div>
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $viatic->idUser }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
