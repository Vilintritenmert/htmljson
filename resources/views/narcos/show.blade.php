@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Info</h3>
                </div>
                <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="tablet_title">Title                                 {{ Form::open([ 'method'  => 'delete', 'route' => [ 'narcos.destroy', $tablet->id ] ]) }}
                                <a href="{{route('narcos.edit',['id'=>$tablet->id])}}"
                                   class="btn btn-default btn-sm"><i class="fa fa-pencil"></i></a>
                                <button type="submit" class="btn btn-sm">'<i class="fa fa-trash"></i>'</button>
                                {{ Form::close() }}
                            </label>
                            <h3>{{$tablet->title}}</h3>
                        </div>
                        <div class="form-group">
                            <label for="tablet_descirption">Description</label>
                            <p>{{$tablet->description}}</p>
                        </div>
                        <div class="form-group">
                            <label for="tablet_recipe">Recipe: @if($tablet->recipe) <i class="fa fa-check"></i> @else <i class="fa fa-ban"></i> @endif

                        </div>
                        <div class="form-group">
                            <label for="tablet_count">Count</label>
                            <p>{{$tablet->count}}</p>
                        </div>
                        <div class="form-group">
                            <label for="tablet_count">In Stock</label>
                            <p>{{$tablet->in_stock}}</p>
                        </div>
                    </div>
            </div>

        </div>
    </div>
@endsection

