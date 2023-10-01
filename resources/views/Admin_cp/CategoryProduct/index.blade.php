@extends('Admin_cp.Layout.master')
@section('title',trans('category.title'))
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> {{trans('category.list-category')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('category.list-category')}}</li>
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
                                            <input type="text" name="keyword" class="form-control rounded-0 float-right" placeholder="Nhập từ khóa" value="">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
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
                                    <a href="{{route('get-category-create')}}" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                                        <i class="fa fa-plus" title="action.add_new"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="float-left">

                                <div class="menu-left">
                                    <span class="btn btn-flat btn-primary grid-refresh" title="Làm mới"><i class="fas fa-sync-alt"></i></span>
                                </div>
                                <div class="menu-left">
                                    <div class="input-group float-right ml-1" style="width: 350px;">
                                        <div class="btn-group">
                                            <select class="form-control rounded-0 float-right" id="order_sort">
                                                <option value="id__desc">ID giảm dần</option><option value="id__asc">ID tăng dần</option><option value="title__desc">Tiêu đề theo thứ tự z-a</option><option value="title__asc">Tiêu đề theo thứ tự a-z</option>
                                            </select>
                                        </div>
                                        <div class="input-group-append">
                                            <button id="button_sort" type="submit" class="btn btn-primary"><i class="fas fa-sort-amount-down-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0" id="pjax-container">
                            <div id="url-sort" data-urlsort="" style="display: none;"></div>
                            <div class="table-responsive">
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <thead>
                                    <tr>
                                        <th>{{trans('category.stt')}}</th>
                                        <th>{{trans('category.image')}}</th>
                                        <th>{{trans('category.name')}}</th>
                                        <th>{{trans('category.status')}}</th>
                                        <th>{{trans('category.description')}}</th>
                                        <th>{{trans('category.type')}}</th>
                                        <th>{{trans('category.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($parentCategories->isNotEmpty())
                                            <?php $i = 1; ?>
                                        @foreach($parentCategories as $category)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td><img alt="Toi Ly Son" title=""
                                                         src="{{asset('upload/category/'.$category->image)}}"
                                                         style=" width:50px; height:50px;"></td>
                                                <td>{{$category->translate->name ?? ""}}</td>
                                                <td>{{$category->status == 1 ? "Kích hoạt" : "Chưa kích hoạt"}}</td>
                                                <td>{{$category->translate->description ?? ""}}</td>
                                                <td>{{$category->typeid ==1 ? "Sản phẩm" : "Tin tức"}}</td>
                                                <td>
                                                    <a href="{{route('get-category-edit',$category->id)}}">
<span title="Edit" type="button" class="btn btn-flat btn-sm btn-primary">
<i class="fa fa-edit"></i>
</span>
                                                    </a>

                                                    <span onclick="deleteItem({{$category->id}});"
                                                          title="Xóa"
                                                          class="btn btn-flat btn-sm btn-danger">
<i class="fas fa-trash-alt"></i>
</span>

                                                </td>
                                            </tr>
                                            @if($subCategories->isNotEmpty())
                                                    <?php
                                                        $subcategory = $subCategories->where('parentid', $category->id);
                                                    ?>

                                                @if($subcategory->isNotEmpty())

                                                    @foreach($subcategory as $sub)

                                                        <tr>
                                                            <td></td>
                                                            <td><img alt="Toi Ly Son" title=""
                                                                     src="{{asset('upload/category/'.$sub->image)}}"
                                                                     style=" width:50px; height:50px;"></td>
                                                            <td>----- {{$sub->translate->name ?? ""}}</td>
                                                            <td>{{$sub->status == 1 ? "Kích hoạt" : "Chưa kích hoạt"}}</td>
                                                            <td>{{$sub->translate->description ?? ""}}</td>
                                                            <td>{{$sub->typeid ==1 ? "Sản phẩm" : "Tin tức"}}</td>
                                                            <td>
                                                                <a href="{{route('get-category-edit',$sub->id)}}">
<span title="Edit" type="button" class="btn btn-flat btn-sm btn-primary">
<i class="fa fa-edit"></i>
</span>
                                                                </a>
                                                                <span onclick="deleteItem({{$sub->id}});"
                                                                      title="Xóa"
                                                                      class="btn btn-flat btn-sm btn-danger">
<i class="fas fa-trash-alt"></i>
</span>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            @endif
                                            {{$i++}}
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
{{--                                {{$categories->links("pagination::bootstrap-4")}}--}}
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
    <script src="{{asset('backend/assets/admin/plugin/jquery.pjax.js')}}"></script>
    <script>
        $('.grid-trash').on('click', function() {
            let ids = selectedRows().join();
            deleteItem(ids);
        });

        function deleteItem(ids){
            Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true,
            }).fire({
                title: '{{trans('category.message-delete')}}?',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{trans('category.yes')}}',
                confirmButtonColor: "#DD6B55",
                cancelButtonText: '{{trans('category.no')}}',
                reverseButtons: true,

                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            method: 'get',
                            url: '{{route('delete-category',':id')}}'.replace(':id',ids),
                            success: function (data) {
                                location.reload();
                            }
                        });
                    });
                }

            }).then((result) => {
                if (result.value) {
                    toastr.success('Xóa thành công');
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {

                }
            })
        }

    </script>
@endsection
