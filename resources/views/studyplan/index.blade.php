@extends('layouts.app')

@section('template_title')
    Studyplan
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Studyplan') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('studyplans.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Objetive</th>
										<th>Datestart</th>
										<th>Datefinal</th>
										<th>Status</th>
										<th>Idcarrer</th>
										<th>Iduser</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($studyplans as $studyplan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $studyplan->objetive }}</td>
											<td>{{ $studyplan->datestart }}</td>
											<td>{{ $studyplan->datefinal }}</td>
											<td>{{ $studyplan->status }}</td>
											<td>{{ $studyplan->idCarrer }}</td>
											<td>{{ $studyplan->idUser }}</td>

                                            <td>
                                                <form action="{{ route('studyplans.destroy',$studyplan->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('studyplans.show',$studyplan->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('studyplans.edit',$studyplan->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $studyplans->links() !!}
            </div>
        </div>
    </div>
@endsection
