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
                        <th>Title</th>
                        <th>Description</th>
                        <th style="width: 40px">Recipe</th>
                        <th style="width: 80px">Action</th>
                    </tr>
                    @foreach($tablets as $tablete)
                        <tr>
                            <td>{{$tablete->id}}</td>
                            <td>{{$tablete->title}}</td>
                            <td>{{Illuminate\Support\Str::limit($tablete->description,70)}}</td>
                            <td>{{$tablete->recipe}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle"
                                            data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route('narcos.edit',['id'=>$tablete->id])}}"><i
                                                        class="fa fa-pencil"></i>Edit</a></li>
                                        <li><a href="#"><i class="fa fa-trash"></i>Delete</a></li>
                                    </ul>
                                </div>
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

