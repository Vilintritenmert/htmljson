@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                    @foreach($tablets as $tablete)
                        <tr>
                            <td>{{$tablete->id}}</td>
                            <td>{{$tablete->title}}</td>
                            <td>
                                {{Illuminate\Support\Str::limit($tablete->description,70)}}
                            </td>
                            <td><span class="badge @if($tablete->recipe) bg-red @else bg-green @endif ">Recipe</span></td>
                            <td>
                                {!! Form::open(['route' => ['narcos.destroy', $tablete->id], 'method' => 'delete']) !!}
                                {!!  Form::submit('Delete')  !!}
                                {!!  Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                {{  $tablets->links() }}
            </div>
        </div>
    </div>
@endsection

