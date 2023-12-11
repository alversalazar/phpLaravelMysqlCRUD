<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('objetive') }}
            {{ Form::text('objetive', $studyplan->objetive, ['class' => 'form-control' . ($errors->has('objetive') ? ' is-invalid' : ''), 'placeholder' => 'Objetive']) }}
            {!! $errors->first('objetive', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datestart') }}
            {{ Form::text('datestart', $studyplan->datestart, ['class' => 'form-control' . ($errors->has('datestart') ? ' is-invalid' : ''), 'placeholder' => 'Datestart']) }}
            {!! $errors->first('datestart', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datefinal') }}
            {{ Form::text('datefinal', $studyplan->datefinal, ['class' => 'form-control' . ($errors->has('datefinal') ? ' is-invalid' : ''), 'placeholder' => 'Datefinal']) }}
            {!! $errors->first('datefinal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $studyplan->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCarrer') }}
            {{ Form::text('idCarrer', $studyplan->idCarrer, ['class' => 'form-control' . ($errors->has('idCarrer') ? ' is-invalid' : ''), 'placeholder' => 'Idcarrer']) }}
            {!! $errors->first('idCarrer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idUser') }}
            {{ Form::text('idUser', $studyplan->idUser, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Iduser']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>