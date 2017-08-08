@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">List of Tablets </h3> <a href="{{route('narcos.create')}}" class="btn btn-default pull-right">Create Tablet</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th style="width: 40px">Recipe</th>
                        <th style="width: 120px">Action</th>
                    </tr>
                    @foreach($tablets as $tablete)
                        <tr>
                            <td>{{$tablete->id}}</td>
                            <td><a href="{{route('narcos.show', ['id'=>$tablete->id])}}">{{$tablete->title}}</a></td>
                            <td>{{Illuminate\Support\Str::limit($tablete->description,70)}}</td>
                            <td class="text-center">@if ($tablete->recipe) <i
                                        class="fa fa-check text-success"></i> @else <i
                                        class="fa fa-ban text-danger"></i> @endif</td>
                            <td class="text-center">
                                {{ Form::open([ 'method'  => 'delete', 'route' => [ 'narcos.destroy', $tablete->id ] ]) }}
                                <a href="{{route('narcos.edit',['id'=>$tablete->id])}}"
                                   class="btn btn-default btn-sm"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-sm">'<i class="fa fa-trash"></i>'</button>
                                {{ Form::close() }}
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

