@extends('Admin_cp.Layout.master')
@section('title',trans('product.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fas fa-cogs" aria-hidden="true"></i> Store infomation
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> Home</a></li>
                        <li class="breadcrumb-item active">{{trans('setting.setting')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline card-outline-tabs">

                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="row">
                            <div class="col-md-5">
                                <form method="POST" action="{{route('post-setting-create',isset($setting['id']) ? ['id' => $setting['id']] : ['id' => 0]) }}">
                                    @csrf
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Logo</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="hidden" id="logo" name="logo" value="{{ isset($setting['logo']) ? $setting['logo'] : ''}}" class="form-control input-sm logo" placeholder="">
                                                </div>
                                                <div id="preview_image" class="img_holder"><img alt="Logo" title="" src="{{isset($setting['logo']) ? $setting['logo'] : ''}}" style=" width:100px;"></div>
                                                <a data-input="logo" data-preview="preview_image" data-type="logo" class="lfm pointer">
                                                    <i class="fa fa-image"></i> Choose
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Company</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" id="company" name="company" value="{{ isset($setting['company']) ? $setting['company'] : ''}}"
                                                           class="form-control input-sm icon" placeholder="">
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>slogan</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" id="slogan" name="slogan" value="{{ isset($setting['slogan']) ? $setting['slogan'] : ''}}"
                                                           class="form-control input-sm icon" placeholder="">
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-envelope"></i> Tax</td>
                                            <td><input type="text" id="tax" name="tax" value="{{ isset($setting['tax']) ? $setting['tax'] : ''}}"
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-envelope"></i> Email</td>
                                            <td><input type="email" id="email" name="email" value="{{ isset($setting['email']) ? $setting['email'] : ''}}"
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-phone-alt"></i> Phone</td>
                                            <td><input type="text" id="phone" name="phone" value="{{ isset($setting['phone']) ? $setting['phone'] : ''}}"
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>

                                        <tr>
                                            <td><i class="far fa-calendar-alt"></i> Địa chỉ</td>
                                            <td><input type="text" id="address" name="address" value="{{ isset($setting['address']) ? $setting['address'] : ''}}"
                                                       class="form-control input-sm icon" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-map-marked"></i> facebook</td>
                                            <td><input type="text" id="facebook" name="facebook" value="{{ isset($setting['facebook']) ? $setting['facebook'] : ''}}"
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-location-arrow"></i> tiktok</td>
                                            <td><input type="text" id="tiktok" name="tiktok" value="{{ isset($setting['tiktok']) ? $setting['tiktok'] : ''}}"
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-warehouse"></i> intagram</td>
                                            <td><input type="text" id="intagram" name="intagram" value="{{ isset($setting['intagram']) ? $setting['intagram'] : ''}}"
                                                       class="form-control input-sm icon" placeholder="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><i class="fab fa-chrome"></i> kakaotalk</td>
                                            <td><input type="text" id="kakaotalk" name="kakaotalk" value="{{ isset($setting['kakaotalk']) ? $setting['kakaotalk'] : ''}}"
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>

                                        <tr>
                                            <td><i class="nav-icon  fas fab-button "></i>Thực hiện</td>
                                            <td>
                                                <input type="submit" id="submit" name="icon" value="Save"
                                                       class="btn btn-success input-sm icon" placeholder="">
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
@section('script')
    <script type="text/javascript">
        (function( $ ){

            $.fn.filemanager = function(type, options) {
                type = type || 'other';

                this.on('click', function(e) {
                    type = $(this).data('type') || type;//sc
                    var route_prefix = (options && options.prefix) ? options.prefix : '{{url('/laravel-filemanager?type=Images')}}';
                    var target_input = $('#' + $(this).data('input'));
                    var target_preview = $('#' + $(this).data('preview'));
                    window.open(route_prefix + '?type=' + type, 'File manager', 'width=900,height=600');
                    window.SetUrl = function (items) {
                        var file_path = items.map(function (item) {
                            return item.url;
                        }).join(',');

                        // set the value of the desired input to image url
                        target_input.val('').val(file_path).trigger('change');

                        // clear previous preview
                        target_preview.html('');

                        // set or change the preview image src
                        items.forEach(function (item) {
                            target_preview.append(
                                $('<img>').attr('src', item.thumb_url)
                            );
                        });

                        // trigger change event
                        target_preview.trigger('change');
                    };
                    return false;
                });
            }

        })(jQuery);

        $('.lfm').filemanager();
    </script>
@endsection
