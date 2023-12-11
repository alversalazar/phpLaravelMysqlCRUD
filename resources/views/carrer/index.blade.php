@extends('layouts.app')

@section('template_title')
    Carrer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carrer') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('carrers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Duration</th>
										<th>Description</th>
										<th>Status</th>
										<th>Iduser</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carrers as $carrer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $carrer->name }}</td>
											<td>{{ $carrer->duration }}</td>
											<td>{{ $carrer->description }}</td>
											<td>{{ $carrer->status }}</td>
											<td>{{ $carrer->idUser }}</td>

                                            <td>
                                                <form action="{{ route('carrers.destroy',$carrer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('carrers.show',$carrer->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('carrers.edit',$carrer->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $carrers->links() !!}
            </div>
        </div>
    </div>
@endsection
