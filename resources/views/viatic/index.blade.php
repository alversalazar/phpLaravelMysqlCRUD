@extends('layouts.app')

@section('template_title')
    Viatic
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Viatic') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('viatics.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Place</th>
										<th>Description</th>
										<th>Amount</th>
										<th>Status</th>
										<th>Idemployee</th>
										<th>Iduser</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viatics as $viatic)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $viatic->place }}</td>
											<td>{{ $viatic->description }}</td>
											<td>{{ $viatic->amount }}</td>
											<td>{{ $viatic->status }}</td>
											<td>{{ $viatic->idEmployee }}</td>
											<td>{{ $viatic->idUser }}</td>

                                            <td>
                                                <form action="{{ route('viatics.destroy',$viatic->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('viatics.show',$viatic->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('viatics.edit',$viatic->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $viatics->links() !!}
            </div>
        </div>
    </div>
@endsection
