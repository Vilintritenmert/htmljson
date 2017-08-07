@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tablete Info</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="tablet_title">Title</label>
                        <input type="email" class="form-control"
                               id="tablet_title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="tablet_descirption">Description</label>
                        <textarea class="form-control" id="tablet_descirption" placeholder="Description">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

