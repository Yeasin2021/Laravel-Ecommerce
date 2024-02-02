@extends('admin.layouts.index')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Single Feature</strong> Form</div>
                    <div class="card-body card-block">
                        <form action="" method="post" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="hf-email" class="form-control-label">Icon</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="hf-email" name="icon" placeholder="icon class" class="form-control" /><span class="help-block">Please enter Icon's Class</span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="hf-password" class="form-control-label">Title</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="hf-password" name="title" placeholder="Enter Title..." class="form-control" /><span class="help-block">Please enter Icon's Title</span></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="hf-password" class="form-control-label">Description</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="hf-password" name="description" placeholder="Enter Title..." class="form-control" /><span class="help-block">Please enter Icon's Description</span></div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
