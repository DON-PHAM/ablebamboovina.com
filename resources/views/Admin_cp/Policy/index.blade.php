@extends('Admin_cp.Layout.master')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add page
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> Home</a></li>
                        <li class="breadcrumb-item active">Add page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header with-border">
                            <h2 class="card-title">Create a new page</h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a href="{{route('admin')}}" class="btn  btn-flat btn-default"
                                       title="List"><i class="fa fa-list"></i><span class="hidden-xs"> Back list</span></a>
                                </div>
                            </div>
                        </div>


                        <form action="{{route('post-policy',isset($policy['id']) ? ['id' => $policy['id']] : ['id' => 0]) }}" method="post" accept-charset="UTF-8"
                              class="form-horizontal" id="form-main" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="fields-group">

                                    <div class="form-group row  ">
                                        <label for="freeship" class="col-sm-2 col-form-label">Policy - 1
                                            <span class="seo" title="SEO"><i class="fa fa-coffee"
                                                                             aria-hidden="true"></i></span></label>
                                        <div class="col-sm-8">
                                            <textarea id="freeship" name="freeship" required
                                                      class="form-control freeship" placeholder="">{{$policy['freeship'] ?? ''}}</textarea>
                                            <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 300 characters
</span>
                                        </div>
                                    </div>

                                    <div class="form-group row  ">
                                        <label for="exchange" class="col-sm-2 col-form-label">Policy - 2
                                            <span class="seo" title="SEO"><i class="fa fa-coffee"
                                                                             aria-hidden="true"></i></span></label>
                                        <div class="col-sm-8">
                                            <textarea id="exchange" name="exchange" required
                                                      class="form-control exchange" placeholder="">{{$policy['exchange'] ?? ''}}</textarea>
                                            <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 300 characters
</span>
                                        </div>
                                    </div>

                                    <div class="form-group row  ">
                                        <label for="paymentSecurity" class="col-sm-2 col-form-label">Policy - 3
                                            <span class="seo" title="SEO"><i class="fa fa-coffee"
                                                                             aria-hidden="true"></i></span></label>
                                        <div class="col-sm-8">
                                            <textarea id="paymentSecurity" name="paymentSecurity" required
                                                      class="form-control paymentSecurity" placeholder="">{{$policy['paymentSecurity'] ?? ''}}</textarea>
                                            <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 300 characters
</span>
                                        </div>
                                    </div>

                                    <div class="form-group row  ">
                                        <label for="support" class="col-sm-2 col-form-label">Policy - 4
                                            <span class="seo" title="SEO"><i class="fa fa-coffee"
                                                                             aria-hidden="true"></i></span></label>
                                        <div class="col-sm-8">
                                            <textarea id="support" name="support" required
                                                      class="form-control support" placeholder="">{{$policy['support'] ?? ''}}</textarea>
                                            <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 300 characters
</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <div class="btn-group float-right">
                                        <button type="submit" class="btn btn-primary">{{trans('home.save')}}</button>
                                    </div>
                                    <div class="btn-group float-left">
                                        <button type="reset" class="btn btn-warning">{{trans('home.reset')}}</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
