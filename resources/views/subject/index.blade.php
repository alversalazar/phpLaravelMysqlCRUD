@extends('layouts.app')

@section('template_title')
    Subject
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Subject') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subjects.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Credit</th>
										<th>Unit</th>
										<th>Characteristic</th>
										<th>Keymatter</th>
										<th>Status</th>
										<th>Iduser</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects as $subject)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subject->name }}</td>
											<td>{{ $subject->credit }}</td>
											<td>{{ $subject->unit }}</td>
											<td>{{ $subject->characteristic }}</td>
											<td>{{ $subject->keymatter }}</td>
											<td>{{ $subject->status }}</td>
											<td>{{ $subject->idUser }}</td>

                                            <td>
                                                <form action="{{ route('subjects.destroy',$subject->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subjects.show',$subject->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subjects.edit',$subject->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $subjects->links() !!}
            </div>
        </div>
    </div>
@endsection
