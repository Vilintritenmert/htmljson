@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tablete Info</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST"
                      action="@if($tablet->id){{route('narcos.update', ['id' => $tablet->id])}}@else{{route('narcos.store')}}@endif"
                    >
                    @if($tablet->id)
                        <input type="hidden" name="_method" value="PATCH">
                    @else
                        <input type="hidden" name="_method" value="POST">
                    @endif
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="tablet_title">Title</label>
                            <input type="text" class="form-control" value="{{$tablet->title}}"
                                   name="title" required id="tablet_title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="tablet_descirption">Description</label>
                            <textarea name="description" class="form-control" id="tablet_descirption"
                                      placeholder="Description" required>{{$tablet->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="tablet_recipe">Recipe</label>
                            <input type="checkbox" name="recipe" @if($tablet->recipe) checked @endif
                           value="1">
                        </div>
                        <div class="form-group">
                            <label for="tablet_count">Count</label>
                            <input type="text" name="count" value="{{$tablet->count}}"
                                   placeholder="Count" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tablet_count">In Stock</label>
                            <input type="text" name="in_stock" value="{{$tablet->in_stock}}"
                                   placeholder="In Stock" class="form-control"
                                   required>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

