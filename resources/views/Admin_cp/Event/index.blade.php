@extends('Admin_cp.Layout.master')
@section('title',trans('event.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> {{trans('event.list-event')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('event.title')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header with-border">
                            <div class="card-tools">
                                <div class="menu-right">
                                    <form action="" id="button_search">
                                        <div class="input-group input-group" style="width: 350px;">
                                            <select class="form-control rounded-0 select2 select2-hidden-accessible"
                                                    name="sort_order" id="sort_order" data-select2-id="sort_order"
                                                    tabindex="-1" aria-hidden="true">
                                                <option value="id__desc" data-select2-id="2">ID descending</option>
                                                <option value="id__asc">ID ascending</option>
                                                <option value="title__desc">Title in z-a order</option>
                                                <option value="title__asc">Title in a-z order</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="1" style="width: 152.906px;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-sort_order-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-sort_order-container" role="textbox"
                                                            aria-readonly="true"
                                                            title="ID descending">ID descending</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span> &nbsp;
                                            <input type="text" name="keyword" class="form-control rounded-0 float-right"
                                                   placeholder="Search name" value="">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="float-left">
                            </div>

                        </div>
                        <div class="card-header with-border">
                            <div class="card-tools">
                                <div class="menu-right">
                                    <a href="https://demo.s-cart.org/sc_admin/page/create"
                                       class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                                        <i class="fa fa-plus" title="Add new"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="float-left">
                            </div>
                        </div>

                        <div class="card-body p-0" id="pjax-container">
                            <div class="table-responsive">
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Url customize <span class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                           aria-hidden="true"></i></span>
                                        </th>
                                        <th>Status</th>
                                        <th>Store list</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>About</td>
                                        <td><img alt="About" title="" src="https://demo.s-cart.org/images/no-image.jpg"
                                                 style=" width:50px;"></td>
                                        <td>about</td>
                                        <td><span class="badge badge-success">ON</span></td>
                                        <td><i class="nav-icon fab fa-shopify"></i> <a target="_new"
                                                                                       href="https://demo.s-cart.org">s-cart</a>
                                        </td>
                                        <td><a href="https://demo.s-cart.org/sc_admin/page/edit/1"><span title="Edit"
                                                                                                         type="button"
                                                                                                         class="btn btn-flat btn-sm btn-primary"><i
                                                        class="fa fa-edit"></i></span></a>&nbsp;
                                            <span onclick="deleteItem('1');" title="Delete"
                                                  class="btn btn-flat btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></span>&nbsp;
                                            <a target="_new" href="https://demo.s-cart.org/about.html"><span
                                                    title="Link" type="button"
                                                    class="btn btn-flat btn-sm btn-warning"><i
                                                        class="fas fa-external-link-alt"></i></span></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-pagination clearfix m-10">
                                <div class="ml-3 float-left">
                                    Showing <b>1</b>-<b>1</b> of <b>1</b> results
                                </div>
                                <div class="pagination pagination-sm mr-3 float-right">
                                    <ul class="pagination pagination-sm no-margin pull-right">

                                        <li class="page-item disabled"><span class="page-link pjax-container">«</span>
                                        </li>


                                        <li class="page-item active"><span class="page-link pjax-container">1</span>
                                        </li>

                                        <li class="page-item disabled"><span class="page-link pjax-container">»</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer clearfix">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
