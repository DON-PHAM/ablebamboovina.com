@extends('Admin_cp.Layout.master')
@section('title',trans('ship.create'))
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{trans('ship.create')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('ship.create')}}</li>
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
                            <h2 class="card-title">{{trans('ship.create')}}</h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a href="{{route('ship')}}" class="btn  btn-flat btn-default"
                                       title="List"><i class="fa fa-list"></i><span
                                            class="hidden-xs"> {{trans('home.back')}}</span></a>
                                </div>
                            </div>
                        </div>


                        <form action="{{route('post-ship-create')}}" method="post" accept-charset="UTF-8"
                              class="form-horizontal" id="form-main" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="fields-group">
                                    <div class="card">
                                        <div class="card-header with-border">
                                            <h3 class="card-title">Korean <img alt="Korean" title=""
                                                                               src="{{asset('backend/assets/data/language/flag_uk.png')}}"
                                                                               style=" width:20px; height:20px;"></h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row  ">
                                                <label for="en__title" class="col-sm-2 col-form-label">Tiêu đề <span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="ko_name" name="ko_name"
                                                               value="{{old('ko_name')}}" class="form-control ko_name" placeholder="">
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header with-border">
                                            <h3 class="card-title">Tiếng Việt <img alt="Tiếng Việt" title=""
                                                                                   src="{{asset('backend/assets/data/language/flag_vn.png')}}"
                                                                                   style=" width:20px; height:20px;">
                                            </h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row  ">
                                                <label for="vi_name" class="col-sm-2 col-form-label">Tiêu đề <span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="vi_name" name="vi_name"
                                                               value="{{old('vi_name')}}" class="form-control vi_name" placeholder="">
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row  ">
                                        <label for="alias" class="col-sm-2 col-form-label">{{trans('ship.code')}}
                                            <span
                                                class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="text" id="code" name="code" value="{{old('code')}}"
                                                       class="form-control code" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row  ">
                                        <label for="image"
                                               class="col-sm-2 col-form-label">{{trans('ship.price')}}</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" id="price" name="price" value=""
                                                       class="form-control input-sm price" placeholder="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row  ">
                                        <label for="alias" class="col-sm-2 col-form-label">{{trans('ship.price-free')}}
                                            <span
                                                class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="text" id="price_free" name="price_free" value="{{old('price_free')}}"
                                                       class="form-control price_free" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label for="status"
                                               class="col-sm-2 col-form-label">{{trans('ship.status')}}</label>
                                        <div class="col-sm-8">
                                            <input class="checkbox" type="checkbox" name="status">


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
