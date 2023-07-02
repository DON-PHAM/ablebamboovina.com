@extends('Admin_cp.Layout.master')
@section('title',trans('product.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tạo sản phẩm
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="https://demo.s-cart.org/sc_admin"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Tạo sản phẩm</li>
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
                            <h2 class="card-title">Tạo mới một sản phẩm</h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a target="_new" href="{{route('admin')}}"
                                       class="btn  btn-flat btn-default" title="List">
                                        <i class="fa fa-list"></i><span class="hidden-xs"> Trở lại danh sách</span>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <form action="" method="post" name="form_name"
                              accept-charset="UTF-8" class="form-horizontal" id="form-main"
                              enctype="multipart/form-data">
                            <input type="hidden" name="kind" value="0">
                            <div id="main-add" class="card-body">
                                <div class="card">
                                    <div class="card-header with-border">
                                        <h3 class="card-title">English <img alt="English" title=""
                                                                            src="https://demo.s-cart.org/data/language/flag_uk.png"
                                                                            style=" width:20px; height:20px;"></h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row ">
                                            <label for="en__name" class="col-sm-2 col-form-label">Tên <span class="seo"
                                                                                                            title="SEO"><i
                                                        class="fa fa-coffee" aria-hidden="true"></i></span>
                                            </label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                                    </div>
                                                    <input type="text" id="en__name" name="descriptions[en][name]"
                                                           value="" class="form-control input-sm en__name"
                                                           placeholder="">
                                                </div>
                                                <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                            </div>
                                        </div>
                                        <div class="form-group row   ">
                                            <label for="en__keyword" class="col-sm-2 col-form-label">Từ khóa <span
                                                    class="seo" title="SEO"><i class="fa fa-coffee"
                                                                               aria-hidden="true"></i></span></label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                                    </div>
                                                    <input type="text" id="en__keyword" name="descriptions[en][keyword]"
                                                           value="" class="form-control input-sm en__keyword"
                                                           placeholder="">
                                                </div>
                                                <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="en__description" class="col-sm-2 col-form-label">Mô tả <span
                                                    class="seo" title="SEO"><i class="fa fa-coffee"
                                                                               aria-hidden="true"></i></span></label>
                                            <div class="col-sm-8">
                                                <textarea id="en__description" name="descriptions[en][description]"
                                                          class="form-control input-sm en__description"
                                                          placeholder=""></textarea>
                                                <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 300 kí tự
</span>
                                            </div>
                                        </div>
                                        <div class="form-group row kind  ">
                                            <label for="en__content" class="col-sm-2 col-form-label">
                                                Nội dung chính
                                            </label>
                                            <div class="col-sm-8">
<textarea id="en__content" class="editor" name="descriptions[en][content]" style="visibility: hidden; display: none;">
                                    </textarea>
                                                <div id="cke_en__content"
                                                     class="cke_1 cke cke_reset cke_chrome cke_editor_en__content cke_ltr cke_browser_webkit"
                                                     dir="ltr" lang="vi" role="application"
                                                     aria-labelledby="cke_en__content_arialbl"><span
                                                        id="cke_en__content_arialbl" class="cke_voice_label">Bộ soạn thảo văn bản có định dạng, en__content</span>
                                                    <div class="cke_inner cke_reset" role="presentation"><span
                                                            id="cke_1_top" class="cke_top cke_reset_all"
                                                            role="presentation"
                                                            style="height: auto; user-select: none;"><span id="cke_16"
                                                                                                           class="cke_voice_label">Thanh công cụ</span><span
                                                                id="cke_1_toolbox" class="cke_toolbox" role="group"
                                                                aria-labelledby="cke_16"
                                                                onmousedown="return false;"><span id="cke_21"
                                                                                                  class="cke_toolbar"
                                                                                                  aria-labelledby="cke_21_label"
                                                                                                  role="toolbar"><span
                                                                        id="cke_21_label" class="cke_voice_label">Tài liệu</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_22"
                                                                            class="cke_button cke_button__source cke_button_off"
                                                                            href="javascript:void('Mã HTML')"
                                                                            title="Mã HTML" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_22_label"
                                                                            aria-describedby="cke_22_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(2,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(3,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span
                                                                                class="cke_button_icon cke_button__source_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1848px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_22_label"
                                                                                class="cke_button_label cke_button__source_label"
                                                                                aria-hidden="false">Mã HTML</span><span
                                                                                id="cke_22_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_23"
                                                                                                       class="cke_button cke_button__save cke_button_off"
                                                                                                       href="javascript:void('Lưu')"
                                                                                                       title="Lưu"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_23_label"
                                                                                                       aria-describedby="cke_23_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span
                                                                                class="cke_button_icon cke_button__save_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1728px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_23_label"
                                                                                class="cke_button_label cke_button__save_label"
                                                                                aria-hidden="false">Lưu</span><span
                                                                                id="cke_23_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_24"
                                                                            class="cke_button cke_button__newpage cke_button_off"
                                                                            href="javascript:void('Trang mới')"
                                                                            title="Trang mới" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_24_label"
                                                                            aria-describedby="cke_24_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(8,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(9,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span
                                                                                class="cke_button_icon cke_button__newpage_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1464px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_24_label"
                                                                                class="cke_button_label cke_button__newpage_label"
                                                                                aria-hidden="false">Trang mới</span><span
                                                                                id="cke_24_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_25"
                                                                            class="cke_button cke_button__preview cke_button_off"
                                                                            href="javascript:void('Xem trước')"
                                                                            title="Xem trước" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_25_label"
                                                                            aria-describedby="cke_25_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(11,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(12,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span
                                                                                class="cke_button_icon cke_button__preview_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1656px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_25_label"
                                                                                class="cke_button_label cke_button__preview_label"
                                                                                aria-hidden="false">Xem trước</span><span
                                                                                id="cke_25_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_26"
                                                                            class="cke_button cke_button__print cke_button_off"
                                                                            href="javascript:void('In')" title="In"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_26_label"
                                                                            aria-describedby="cke_26_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(14,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(15,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span
                                                                                class="cke_button_icon cke_button__print_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_26_label"
                                                                                class="cke_button_label cke_button__print_label"
                                                                                aria-hidden="false">In</span><span
                                                                                id="cke_26_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_27"
                                                                                                       class="cke_button cke_button__templates cke_button_off"
                                                                                                       href="javascript:void('Mẫu dựng sẵn')"
                                                                                                       title="Mẫu dựng sẵn"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_27_label"
                                                                                                       aria-describedby="cke_27_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                                                class="cke_button_icon cke_button__templates_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -456px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_27_label"
                                                                                class="cke_button_label cke_button__templates_label"
                                                                                aria-hidden="false">Mẫu dựng sẵn</span><span
                                                                                id="cke_27_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_28" class="cke_toolbar"
                                                                    aria-labelledby="cke_28_label" role="toolbar"><span
                                                                        id="cke_28_label" class="cke_voice_label">Clipboard/Undo</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_29"
                                                                            class="cke_button cke_button__cut cke_button_disabled "
                                                                            href="javascript:void('Cắt')"
                                                                            title="Cắt (Ctrl+X)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_29_label"
                                                                            aria-describedby="cke_29_description"
                                                                            aria-haspopup="false" aria-disabled="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                                                class="cke_button_icon cke_button__cut_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -312px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_29_label"
                                                                                class="cke_button_label cke_button__cut_label"
                                                                                aria-hidden="false">Cắt</span><span
                                                                                id="cke_29_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+X</span></a><a
                                                                            id="cke_30"
                                                                            class="cke_button cke_button__copy cke_button_disabled "
                                                                            href="javascript:void('Sao chép')"
                                                                            title="Sao chép (Ctrl+C)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_30_label"
                                                                            aria-describedby="cke_30_description"
                                                                            aria-haspopup="false" aria-disabled="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                                                class="cke_button_icon cke_button__copy_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -264px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_30_label"
                                                                                class="cke_button_label cke_button__copy_label"
                                                                                aria-hidden="false">Sao chép</span><span
                                                                                id="cke_30_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+C</span></a><a
                                                                            id="cke_31"
                                                                            class="cke_button cke_button__paste cke_button_off"
                                                                            href="javascript:void('Dán')"
                                                                            title="Dán (Ctrl+V)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_31_label"
                                                                            aria-describedby="cke_31_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                                                class="cke_button_icon cke_button__paste_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -360px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_31_label"
                                                                                class="cke_button_label cke_button__paste_label"
                                                                                aria-hidden="false">Dán</span><span
                                                                                id="cke_31_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+V</span></a><a
                                                                            id="cke_32"
                                                                            class="cke_button cke_button__pastetext cke_button_off"
                                                                            href="javascript:void('Dán theo định dạng văn bản thuần')"
                                                                            title="Dán theo định dạng văn bản thuần (Ctrl+Shift+V)"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_32_label"
                                                                            aria-describedby="cke_32_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(29,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(30,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span
                                                                                class="cke_button_icon cke_button__pastetext_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1560px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_32_label"
                                                                                class="cke_button_label cke_button__pastetext_label"
                                                                                aria-hidden="false">Dán theo định dạng văn bản thuần</span><span
                                                                                id="cke_32_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+Shift+V</span></a><a
                                                                            id="cke_33"
                                                                            class="cke_button cke_button__pastefromword cke_button_off"
                                                                            href="javascript:void('Dán với định dạng Word')"
                                                                            title="Dán với định dạng Word" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_33_label"
                                                                            aria-describedby="cke_33_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(32,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(33,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span
                                                                                class="cke_button_icon cke_button__pastefromword_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1608px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_33_label"
                                                                                class="cke_button_label cke_button__pastefromword_label"
                                                                                aria-hidden="false">Dán với định dạng Word</span><span
                                                                                id="cke_33_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_34"
                                                                                                       class="cke_button cke_button__undo cke_button_disabled "
                                                                                                       href="javascript:void('Khôi phục thao tác')"
                                                                                                       title="Khôi phục thao tác (Ctrl+Z)"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_34_label"
                                                                                                       aria-describedby="cke_34_description"
                                                                                                       aria-haspopup="false"
                                                                                                       aria-disabled="true"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(35,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(36,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span
                                                                                class="cke_button_icon cke_button__undo_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -2016px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_34_label"
                                                                                class="cke_button_label cke_button__undo_label"
                                                                                aria-hidden="false">Khôi phục thao tác</span><span
                                                                                id="cke_34_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+Z</span></a><a
                                                                            id="cke_35"
                                                                            class="cke_button cke_button__redo cke_button_disabled "
                                                                            href="javascript:void('Làm lại thao tác')"
                                                                            title="Làm lại thao tác (Ctrl+Y)"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_35_label"
                                                                            aria-describedby="cke_35_description"
                                                                            aria-haspopup="false" aria-disabled="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(38,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(39,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span
                                                                                class="cke_button_icon cke_button__redo_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1968px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_35_label"
                                                                                class="cke_button_label cke_button__redo_label"
                                                                                aria-hidden="false">Làm lại thao tác</span><span
                                                                                id="cke_35_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+Y</span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_36" class="cke_toolbar"
                                                                    aria-labelledby="cke_36_label" role="toolbar"><span
                                                                        id="cke_36_label" class="cke_voice_label">Chỉnh sửa</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_37"
                                                                            class="cke_button cke_button__find cke_button_off"
                                                                            href="javascript:void('Tìm kiếm')"
                                                                            title="Tìm kiếm" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_37_label"
                                                                            aria-describedby="cke_37_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(41,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(42,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span
                                                                                class="cke_button_icon cke_button__find_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -552px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_37_label"
                                                                                class="cke_button_label cke_button__find_label"
                                                                                aria-hidden="false">Tìm kiếm</span><span
                                                                                id="cke_37_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_38"
                                                                            class="cke_button cke_button__replace cke_button_off"
                                                                            href="javascript:void('Thay thế')"
                                                                            title="Thay thế" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_38_label"
                                                                            aria-describedby="cke_38_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(44,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(45,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span
                                                                                class="cke_button_icon cke_button__replace_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -576px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_38_label"
                                                                                class="cke_button_label cke_button__replace_label"
                                                                                aria-hidden="false">Thay thế</span><span
                                                                                id="cke_38_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_39"
                                                                                                       class="cke_button cke_button__selectall cke_button_off"
                                                                                                       href="javascript:void('Chọn tất cả')"
                                                                                                       title="Chọn tất cả"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_39_label"
                                                                                                       aria-describedby="cke_39_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(47,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(48,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(49,this);return false;"><span
                                                                                class="cke_button_icon cke_button__selectall_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1752px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_39_label"
                                                                                class="cke_button_label cke_button__selectall_label"
                                                                                aria-hidden="false">Chọn tất cả</span><span
                                                                                id="cke_39_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_40"
                                                                                                       class="cke_button cke_button__scayt cke_button_off"
                                                                                                       href="javascript:void('Kiểm tra chính tả')"
                                                                                                       title="Kiểm tra chính tả"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_40_label"
                                                                                                       aria-describedby="cke_40_description"
                                                                                                       aria-haspopup="true"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(50,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(51,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(52,this);return false;"><span
                                                                                class="cke_button_icon cke_button__scayt_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1896px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_40_label"
                                                                                class="cke_button_label cke_button__scayt_label"
                                                                                aria-hidden="false">Kiểm tra chính tả ngay khi gõ chữ (SCAYT)</span><span
                                                                                id="cke_40_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span><span
                                                                                class="cke_button_arrow"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_41" class="cke_toolbar cke_toolbar_last"
                                                                    aria-labelledby="cke_41_label" role="toolbar"><span
                                                                        id="cke_41_label" class="cke_voice_label">Bảng biểu</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_42"
                                                                            class="cke_button cke_button__form cke_button_off"
                                                                            href="javascript:void('Biểu mẫu')"
                                                                            title="Biểu mẫu" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_42_label"
                                                                            aria-describedby="cke_42_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(53,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(54,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(55,this);return false;"><span
                                                                                class="cke_button_icon cke_button__form_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -672px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_42_label"
                                                                                class="cke_button_label cke_button__form_label"
                                                                                aria-hidden="false">Biểu mẫu</span><span
                                                                                id="cke_42_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_43"
                                                                            class="cke_button cke_button__checkbox cke_button_off"
                                                                            href="javascript:void('Nút kiểm')"
                                                                            title="Nút kiểm" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_43_label"
                                                                            aria-describedby="cke_43_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(56,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(57,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span
                                                                                class="cke_button_icon cke_button__checkbox_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -648px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_43_label"
                                                                                class="cke_button_label cke_button__checkbox_label"
                                                                                aria-hidden="false">Nút kiểm</span><span
                                                                                id="cke_43_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_44"
                                                                            class="cke_button cke_button__radio cke_button_off"
                                                                            href="javascript:void('Nút chọn')"
                                                                            title="Nút chọn" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_44_label"
                                                                            aria-describedby="cke_44_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(59,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(60,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span
                                                                                class="cke_button_icon cke_button__radio_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -744px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_44_label"
                                                                                class="cke_button_label cke_button__radio_label"
                                                                                aria-hidden="false">Nút chọn</span><span
                                                                                id="cke_44_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_45"
                                                                            class="cke_button cke_button__textfield cke_button_off"
                                                                            href="javascript:void('Trường văn bản')"
                                                                            title="Trường văn bản" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_45_label"
                                                                            aria-describedby="cke_45_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(62,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(63,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(64,this);return false;"><span
                                                                                class="cke_button_icon cke_button__textfield_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -888px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_45_label"
                                                                                class="cke_button_label cke_button__textfield_label"
                                                                                aria-hidden="false">Trường văn bản</span><span
                                                                                id="cke_45_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_46"
                                                                            class="cke_button cke_button__textarea cke_button_off"
                                                                            href="javascript:void('Vùng văn bản')"
                                                                            title="Vùng văn bản" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_46_label"
                                                                            aria-describedby="cke_46_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(65,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(66,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(67,this);return false;"><span
                                                                                class="cke_button_icon cke_button__textarea_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -840px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_46_label"
                                                                                class="cke_button_label cke_button__textarea_label"
                                                                                aria-hidden="false">Vùng văn bản</span><span
                                                                                id="cke_46_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_47"
                                                                            class="cke_button cke_button__select cke_button_off"
                                                                            href="javascript:void('Ô chọn')"
                                                                            title="Ô chọn" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_47_label"
                                                                            aria-describedby="cke_47_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(68,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(69,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(70,this);return false;"><span
                                                                                class="cke_button_icon cke_button__select_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -792px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_47_label"
                                                                                class="cke_button_label cke_button__select_label"
                                                                                aria-hidden="false">Ô chọn</span><span
                                                                                id="cke_47_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_48"
                                                                            class="cke_button cke_button__button cke_button_off"
                                                                            href="javascript:void('Nút')" title="Nút"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_48_label"
                                                                            aria-describedby="cke_48_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(71,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(72,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(73,this);return false;"><span
                                                                                class="cke_button_icon cke_button__button_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -624px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_48_label"
                                                                                class="cke_button_label cke_button__button_label"
                                                                                aria-hidden="false">Nút</span><span
                                                                                id="cke_48_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_49"
                                                                            class="cke_button cke_button__imagebutton cke_button_off"
                                                                            href="javascript:void('Nút hình ảnh')"
                                                                            title="Nút hình ảnh" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_49_label"
                                                                            aria-describedby="cke_49_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(74,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(75,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(76,this);return false;"><span
                                                                                class="cke_button_icon cke_button__imagebutton_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -720px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_49_label"
                                                                                class="cke_button_label cke_button__imagebutton_label"
                                                                                aria-hidden="false">Nút hình ảnh</span><span
                                                                                id="cke_49_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_50"
                                                                            class="cke_button cke_button__hiddenfield cke_button_off"
                                                                            href="javascript:void('Trường ẩn')"
                                                                            title="Trường ẩn" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_50_label"
                                                                            aria-describedby="cke_50_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(77,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(78,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(79,this);return false;"><span
                                                                                class="cke_button_icon cke_button__hiddenfield_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -696px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_50_label"
                                                                                class="cke_button_label cke_button__hiddenfield_label"
                                                                                aria-hidden="false">Trường ẩn</span><span
                                                                                id="cke_50_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    class="cke_toolbar_break"></span><span id="cke_51"
                                                                                                           class="cke_toolbar"
                                                                                                           aria-labelledby="cke_51_label"
                                                                                                           role="toolbar"><span
                                                                        id="cke_51_label" class="cke_voice_label">Kiểu cơ bản</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_52"
                                                                            class="cke_button cke_button__bold cke_button_off"
                                                                            href="javascript:void('Đậm')"
                                                                            title="Đậm (Ctrl+B)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_52_label"
                                                                            aria-describedby="cke_52_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(80,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(81,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(82,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bold_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_52_label"
                                                                                class="cke_button_label cke_button__bold_label"
                                                                                aria-hidden="false">Đậm</span><span
                                                                                id="cke_52_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+B</span></a><a
                                                                            id="cke_53"
                                                                            class="cke_button cke_button__italic cke_button_off"
                                                                            href="javascript:void('Nghiêng')"
                                                                            title="Nghiêng (Ctrl+I)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_53_label"
                                                                            aria-describedby="cke_53_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(83,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(84,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(85,this);return false;"><span
                                                                                class="cke_button_icon cke_button__italic_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_53_label"
                                                                                class="cke_button_label cke_button__italic_label"
                                                                                aria-hidden="false">Nghiêng</span><span
                                                                                id="cke_53_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+I</span></a><a
                                                                            id="cke_54"
                                                                            class="cke_button cke_button__underline cke_button_off"
                                                                            href="javascript:void('Gạch chân')"
                                                                            title="Gạch chân (Ctrl+U)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_54_label"
                                                                            aria-describedby="cke_54_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(86,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(87,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(88,this);return false;"><span
                                                                                class="cke_button_icon cke_button__underline_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_54_label"
                                                                                class="cke_button_label cke_button__underline_label"
                                                                                aria-hidden="false">Gạch chân</span><span
                                                                                id="cke_54_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+U</span></a><a
                                                                            id="cke_55"
                                                                            class="cke_button cke_button__strike cke_button_off"
                                                                            href="javascript:void('Gạch xuyên ngang')"
                                                                            title="Gạch xuyên ngang" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_55_label"
                                                                            aria-describedby="cke_55_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(89,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(90,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(91,this);return false;"><span
                                                                                class="cke_button_icon cke_button__strike_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -72px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_55_label"
                                                                                class="cke_button_label cke_button__strike_label"
                                                                                aria-hidden="false">Gạch xuyên ngang</span><span
                                                                                id="cke_55_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_56"
                                                                            class="cke_button cke_button__subscript cke_button_off"
                                                                            href="javascript:void('Chỉ số dưới')"
                                                                            title="Chỉ số dưới" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_56_label"
                                                                            aria-describedby="cke_56_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(92,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(93,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(94,this);return false;"><span
                                                                                class="cke_button_icon cke_button__subscript_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -96px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_56_label"
                                                                                class="cke_button_label cke_button__subscript_label"
                                                                                aria-hidden="false">Chỉ số dưới</span><span
                                                                                id="cke_56_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_57"
                                                                            class="cke_button cke_button__superscript cke_button_off"
                                                                            href="javascript:void('Chỉ số trên')"
                                                                            title="Chỉ số trên" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_57_label"
                                                                            aria-describedby="cke_57_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(95,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(96,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(97,this);return false;"><span
                                                                                class="cke_button_icon cke_button__superscript_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -120px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_57_label"
                                                                                class="cke_button_label cke_button__superscript_label"
                                                                                aria-hidden="false">Chỉ số trên</span><span
                                                                                id="cke_57_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_58"
                                                                                                       class="cke_button cke_button__copyformatting cke_button_off"
                                                                                                       href="javascript:void('Copy Formatting')"
                                                                                                       title="Copy Formatting (Ctrl+Shift+C)"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_58_label"
                                                                                                       aria-describedby="cke_58_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(98,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(99,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(100,this);return false;"><span
                                                                                class="cke_button_icon cke_button__copyformatting_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -480px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_58_label"
                                                                                class="cke_button_label cke_button__copyformatting_label"
                                                                                aria-hidden="false">Copy Formatting</span><span
                                                                                id="cke_58_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+Shift+C</span></a><a
                                                                            id="cke_59"
                                                                            class="cke_button cke_button__removeformat cke_button_off"
                                                                            href="javascript:void('Xoá định dạng')"
                                                                            title="Xoá định dạng" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_59_label"
                                                                            aria-describedby="cke_59_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(101,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(102,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(103,this);return false;"><span
                                                                                class="cke_button_icon cke_button__removeformat_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1704px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_59_label"
                                                                                class="cke_button_label cke_button__removeformat_label"
                                                                                aria-hidden="false">Xoá định dạng</span><span
                                                                                id="cke_59_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_60" class="cke_toolbar"
                                                                    aria-labelledby="cke_60_label" role="toolbar"><span
                                                                        id="cke_60_label"
                                                                        class="cke_voice_label">Đoạn</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_61"
                                                                            class="cke_button cke_button__numberedlist cke_button_off"
                                                                            href="javascript:void('Chèn/Xoá Danh sách có thứ tự')"
                                                                            title="Chèn/Xoá Danh sách có thứ tự"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_61_label"
                                                                            aria-describedby="cke_61_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(104,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(105,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(106,this);return false;"><span
                                                                                class="cke_button_icon cke_button__numberedlist_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_61_label"
                                                                                class="cke_button_label cke_button__numberedlist_label"
                                                                                aria-hidden="false">Chèn/Xoá Danh sách có thứ tự</span><span
                                                                                id="cke_61_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_62"
                                                                            class="cke_button cke_button__bulletedlist cke_button_off"
                                                                            href="javascript:void('Chèn/Xoá Danh sách không thứ tự')"
                                                                            title="Chèn/Xoá Danh sách không thứ tự"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_62_label"
                                                                            aria-describedby="cke_62_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(107,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(108,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(109,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bulletedlist_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1344px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_62_label"
                                                                                class="cke_button_label cke_button__bulletedlist_label"
                                                                                aria-hidden="false">Chèn/Xoá Danh sách không thứ tự</span><span
                                                                                id="cke_62_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_63"
                                                                                                       class="cke_button cke_button__outdent cke_button_disabled "
                                                                                                       href="javascript:void('Dịch ra ngoài')"
                                                                                                       title="Dịch ra ngoài"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_63_label"
                                                                                                       aria-describedby="cke_63_description"
                                                                                                       aria-haspopup="false"
                                                                                                       aria-disabled="true"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(110,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(111,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(112,this);return false;"><span
                                                                                class="cke_button_icon cke_button__outdent_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1056px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_63_label"
                                                                                class="cke_button_label cke_button__outdent_label"
                                                                                aria-hidden="false">Dịch ra ngoài</span><span
                                                                                id="cke_63_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_64"
                                                                            class="cke_button cke_button__indent cke_button_off"
                                                                            href="javascript:void('Dịch vào trong')"
                                                                            title="Dịch vào trong" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_64_label"
                                                                            aria-describedby="cke_64_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(113,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(114,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(115,this);return false;"><span
                                                                                class="cke_button_icon cke_button__indent_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1008px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_64_label"
                                                                                class="cke_button_label cke_button__indent_label"
                                                                                aria-hidden="false">Dịch vào trong</span><span
                                                                                id="cke_64_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_65"
                                                                                                       class="cke_button cke_button__blockquote cke_button_off"
                                                                                                       href="javascript:void('Khối trích dẫn')"
                                                                                                       title="Khối trích dẫn"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_65_label"
                                                                                                       aria-describedby="cke_65_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(116,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(117,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(118,this);return false;"><span
                                                                                class="cke_button_icon cke_button__blockquote_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -216px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_65_label"
                                                                                class="cke_button_label cke_button__blockquote_label"
                                                                                aria-hidden="false">Khối trích dẫn</span><span
                                                                                id="cke_65_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_66"
                                                                            class="cke_button cke_button__creatediv cke_button_off"
                                                                            href="javascript:void('Tạo khối các thành phần')"
                                                                            title="Tạo khối các thành phần"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_66_label"
                                                                            aria-describedby="cke_66_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(119,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(120,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(121,this);return false;"><span
                                                                                class="cke_button_icon cke_button__creatediv_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -504px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_66_label"
                                                                                class="cke_button_label cke_button__creatediv_label"
                                                                                aria-hidden="false">Tạo khối các thành phần</span><span
                                                                                id="cke_66_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_67"
                                                                                                       class="cke_button cke_button__justifyleft cke_button_off"
                                                                                                       href="javascript:void('Canh trái')"
                                                                                                       title="Canh trái"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_67_label"
                                                                                                       aria-describedby="cke_67_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(122,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(123,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(124,this);return false;"><span
                                                                                class="cke_button_icon cke_button__justifyleft_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1152px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_67_label"
                                                                                class="cke_button_label cke_button__justifyleft_label"
                                                                                aria-hidden="false">Canh trái</span><span
                                                                                id="cke_67_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_68"
                                                                            class="cke_button cke_button__justifycenter cke_button_off"
                                                                            href="javascript:void('Canh giữa')"
                                                                            title="Canh giữa" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_68_label"
                                                                            aria-describedby="cke_68_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(125,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(126,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(127,this);return false;"><span
                                                                                class="cke_button_icon cke_button__justifycenter_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1128px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_68_label"
                                                                                class="cke_button_label cke_button__justifycenter_label"
                                                                                aria-hidden="false">Canh giữa</span><span
                                                                                id="cke_68_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_69"
                                                                            class="cke_button cke_button__justifyright cke_button_off"
                                                                            href="javascript:void('Canh phải')"
                                                                            title="Canh phải" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_69_label"
                                                                            aria-describedby="cke_69_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(128,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(129,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(130,this);return false;"><span
                                                                                class="cke_button_icon cke_button__justifyright_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1176px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_69_label"
                                                                                class="cke_button_label cke_button__justifyright_label"
                                                                                aria-hidden="false">Canh phải</span><span
                                                                                id="cke_69_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_70"
                                                                            class="cke_button cke_button__justifyblock cke_button_off"
                                                                            href="javascript:void('Canh đều')"
                                                                            title="Canh đều" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_70_label"
                                                                            aria-describedby="cke_70_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(131,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(132,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(133,this);return false;"><span
                                                                                class="cke_button_icon cke_button__justifyblock_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1104px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_70_label"
                                                                                class="cke_button_label cke_button__justifyblock_label"
                                                                                aria-hidden="false">Canh đều</span><span
                                                                                id="cke_70_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_71"
                                                                                                       class="cke_button cke_button__bidiltr cke_button_off"
                                                                                                       href="javascript:void('Văn bản hướng từ trái sang phải')"
                                                                                                       title="Văn bản hướng từ trái sang phải"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_71_label"
                                                                                                       aria-describedby="cke_71_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(134,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(135,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(136,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bidiltr_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -168px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_71_label"
                                                                                class="cke_button_label cke_button__bidiltr_label"
                                                                                aria-hidden="false">Văn bản hướng từ trái sang phải</span><span
                                                                                id="cke_71_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_72"
                                                                            class="cke_button cke_button__bidirtl cke_button_off"
                                                                            href="javascript:void('Văn bản hướng từ phải sang trái')"
                                                                            title="Văn bản hướng từ phải sang trái"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_72_label"
                                                                            aria-describedby="cke_72_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(137,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(138,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(139,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bidirtl_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -192px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_72_label"
                                                                                class="cke_button_label cke_button__bidirtl_label"
                                                                                aria-hidden="false">Văn bản hướng từ phải sang trái</span><span
                                                                                id="cke_72_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_73"
                                                                            class="cke_button cke_button__language cke_button_off"
                                                                            href="javascript:void('Thiết lập ngôn ngữ')"
                                                                            title="Thiết lập ngôn ngữ" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_73_label"
                                                                            aria-describedby="cke_73_description"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(140,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(141,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(142,this);return false;"><span
                                                                                class="cke_button_icon cke_button__language_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1200px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_73_label"
                                                                                class="cke_button_label cke_button__language_label"
                                                                                aria-hidden="false">Thiết lập ngôn ngữ</span><span
                                                                                id="cke_73_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span><span
                                                                                class="cke_button_arrow"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_74" class="cke_toolbar"
                                                                    aria-labelledby="cke_74_label" role="toolbar"><span
                                                                        id="cke_74_label" class="cke_voice_label">Liên kết</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_75"
                                                                            class="cke_button cke_button__link cke_button_off"
                                                                            href="javascript:void('Chèn/Sửa liên kết')"
                                                                            title="Chèn/Sửa liên kết (Ctrl+L)"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_75_label"
                                                                            aria-describedby="cke_75_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(143,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(144,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(145,this);return false;"><span
                                                                                class="cke_button_icon cke_button__link_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_75_label"
                                                                                class="cke_button_label cke_button__link_label"
                                                                                aria-hidden="false">Chèn/Sửa liên kết</span><span
                                                                                id="cke_75_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+L</span></a><a
                                                                            id="cke_76"
                                                                            class="cke_button cke_button__unlink cke_button_disabled "
                                                                            href="javascript:void('Xoá liên kết')"
                                                                            title="Xoá liên kết" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_76_label"
                                                                            aria-describedby="cke_76_description"
                                                                            aria-haspopup="false" aria-disabled="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(146,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(147,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(148,this);return false;"><span
                                                                                class="cke_button_icon cke_button__unlink_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1296px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_76_label"
                                                                                class="cke_button_label cke_button__unlink_label"
                                                                                aria-hidden="false">Xoá liên kết</span><span
                                                                                id="cke_76_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_77"
                                                                            class="cke_button cke_button__anchor cke_button_off"
                                                                            href="javascript:void('Chèn/Sửa điểm neo')"
                                                                            title="Chèn/Sửa điểm neo" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_77_label"
                                                                            aria-describedby="cke_77_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(149,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(150,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(151,this);return false;"><span
                                                                                class="cke_button_icon cke_button__anchor_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_77_label"
                                                                                class="cke_button_label cke_button__anchor_label"
                                                                                aria-hidden="false">Chèn/Sửa điểm neo</span><span
                                                                                id="cke_77_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_78" class="cke_toolbar cke_toolbar_last"
                                                                    aria-labelledby="cke_78_label" role="toolbar"><span
                                                                        id="cke_78_label"
                                                                        class="cke_voice_label">Chèn</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_79"
                                                                            class="cke_button cke_button__image cke_button_off"
                                                                            href="javascript:void('Hình ảnh')"
                                                                            title="Hình ảnh" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_79_label"
                                                                            aria-describedby="cke_79_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(152,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(153,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(154,this);return false;"><span
                                                                                class="cke_button_icon cke_button__image_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -960px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_79_label"
                                                                                class="cke_button_label cke_button__image_label"
                                                                                aria-hidden="false">Hình ảnh</span><span
                                                                                id="cke_79_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_80"
                                                                            class="cke_button cke_button__flash cke_button_off"
                                                                            href="javascript:void('Flash')"
                                                                            title="Flash" tabindex="-1" hidefocus="true"
                                                                            role="button" aria-labelledby="cke_80_label"
                                                                            aria-describedby="cke_80_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(155,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(156,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(157,this);return false;"><span
                                                                                class="cke_button_icon cke_button__flash_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -600px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_80_label"
                                                                                class="cke_button_label cke_button__flash_label"
                                                                                aria-hidden="false">Flash</span><span
                                                                                id="cke_80_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_81"
                                                                            class="cke_button cke_button__table cke_button_off"
                                                                            href="javascript:void('Bảng')" title="Bảng"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_81_label"
                                                                            aria-describedby="cke_81_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(158,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(159,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(160,this);return false;"><span
                                                                                class="cke_button_icon cke_button__table_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1920px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_81_label"
                                                                                class="cke_button_label cke_button__table_label"
                                                                                aria-hidden="false">Bảng</span><span
                                                                                id="cke_81_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_82"
                                                                            class="cke_button cke_button__horizontalrule cke_button_off"
                                                                            href="javascript:void('Chèn đường phân cách ngang')"
                                                                            title="Chèn đường phân cách ngang"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_82_label"
                                                                            aria-describedby="cke_82_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(161,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(162,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(163,this);return false;"><span
                                                                                class="cke_button_icon cke_button__horizontalrule_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -912px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_82_label"
                                                                                class="cke_button_label cke_button__horizontalrule_label"
                                                                                aria-hidden="false">Chèn đường phân cách ngang</span><span
                                                                                id="cke_82_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_83"
                                                                            class="cke_button cke_button__smiley cke_button_off"
                                                                            href="javascript:void('Hình biểu lộ cảm xúc (mặt cười)')"
                                                                            title="Hình biểu lộ cảm xúc (mặt cười)"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_83_label"
                                                                            aria-describedby="cke_83_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(164,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(165,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(166,this);return false;"><span
                                                                                class="cke_button_icon cke_button__smiley_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1080px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_83_label"
                                                                                class="cke_button_label cke_button__smiley_label"
                                                                                aria-hidden="false">Hình biểu lộ cảm xúc (mặt cười)</span><span
                                                                                id="cke_83_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_84"
                                                                            class="cke_button cke_button__specialchar cke_button_off"
                                                                            href="javascript:void('Chèn ký tự đặc biệt')"
                                                                            title="Chèn ký tự đặc biệt" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_84_label"
                                                                            aria-describedby="cke_84_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(167,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(168,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(169,this);return false;"><span
                                                                                class="cke_button_icon cke_button__specialchar_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1872px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_84_label"
                                                                                class="cke_button_label cke_button__specialchar_label"
                                                                                aria-hidden="false">Chèn ký tự đặc biệt</span><span
                                                                                id="cke_84_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_85"
                                                                            class="cke_button cke_button__pagebreak cke_button_off"
                                                                            href="javascript:void('Chèn ngắt trang')"
                                                                            title="Chèn ngắt trang" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_85_label"
                                                                            aria-describedby="cke_85_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(170,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(171,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(172,this);return false;"><span
                                                                                class="cke_button_icon cke_button__pagebreak_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1512px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_85_label"
                                                                                class="cke_button_label cke_button__pagebreak_label"
                                                                                aria-hidden="false">Chèn ngắt trang</span><span
                                                                                id="cke_85_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_86"
                                                                            class="cke_button cke_button__iframe cke_button_off"
                                                                            href="javascript:void('Iframe')"
                                                                            title="Iframe" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_86_label"
                                                                            aria-describedby="cke_86_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(173,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(174,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(175,this);return false;"><span
                                                                                class="cke_button_icon cke_button__iframe_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -936px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_86_label"
                                                                                class="cke_button_label cke_button__iframe_label"
                                                                                aria-hidden="false">Iframe</span><span
                                                                                id="cke_86_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    class="cke_toolbar_break"></span><span id="cke_87"
                                                                                                           class="cke_toolbar"
                                                                                                           aria-labelledby="cke_87_label"
                                                                                                           role="toolbar"><span
                                                                        id="cke_87_label"
                                                                        class="cke_voice_label">Kiểu</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        id="cke_17"
                                                                        class="cke_combo cke_combo__styles cke_combo_off"
                                                                        role="presentation"><span id="cke_17_label"
                                                                                                  class="cke_combo_label">Kiểu</span><a
                                                                            class="cke_combo_button"
                                                                            title="Phong cách định dạng" tabindex="-1"
                                                                            href="javascript:void('Phong cách định dạng')"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_17_label"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(177,event,this);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(178,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(176,this);return false;"><span
                                                                                id="cke_17_text"
                                                                                class="cke_combo_text cke_combo_inlinelabel">Kiểu</span><span
                                                                                class="cke_combo_open"><span
                                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                                        id="cke_18"
                                                                        class="cke_combo cke_combo__format cke_combo_off"
                                                                        role="presentation"><span id="cke_18_label"
                                                                                                  class="cke_combo_label">Định dạng</span><a
                                                                            class="cke_combo_button" title="Định dạng"
                                                                            tabindex="-1"
                                                                            href="javascript:void('Định dạng')"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_18_label"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(180,event,this);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(181,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(179,this);return false;"><span
                                                                                id="cke_18_text"
                                                                                class="cke_combo_text cke_combo_inlinelabel">Định dạng</span><span
                                                                                class="cke_combo_open"><span
                                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                                        id="cke_19"
                                                                        class="cke_combo cke_combo__font cke_combo_off"
                                                                        role="presentation"><span id="cke_19_label"
                                                                                                  class="cke_combo_label">Phông</span><a
                                                                            class="cke_combo_button" title="Phông"
                                                                            tabindex="-1"
                                                                            href="javascript:void('Phông')"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_19_label"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(183,event,this);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(184,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(182,this);return false;"><span
                                                                                id="cke_19_text"
                                                                                class="cke_combo_text cke_combo_inlinelabel">Phông</span><span
                                                                                class="cke_combo_open"><span
                                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                                        id="cke_20"
                                                                        class="cke_combo cke_combo__fontsize cke_combo_off"
                                                                        role="presentation"><span id="cke_20_label"
                                                                                                  class="cke_combo_label">Cỡ chữ</span><a
                                                                            class="cke_combo_button" title="Cỡ chữ"
                                                                            tabindex="-1"
                                                                            href="javascript:void('Cỡ chữ')"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_20_label"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(186,event,this);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(187,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(185,this);return false;"><span
                                                                                id="cke_20_text"
                                                                                class="cke_combo_text cke_combo_inlinelabel">Cỡ chữ</span><span
                                                                                class="cke_combo_open"><span
                                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_88" class="cke_toolbar"
                                                                    aria-labelledby="cke_88_label" role="toolbar"><span
                                                                        id="cke_88_label" class="cke_voice_label">Màu sắc</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_89"
                                                                            class="cke_button cke_button__textcolor cke_button_off"
                                                                            href="javascript:void('Màu chữ')"
                                                                            title="Màu chữ" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_89_label"
                                                                            aria-describedby="cke_89_description"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(188,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(189,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(190,this);return false;"><span
                                                                                class="cke_button_icon cke_button__textcolor_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_89_label"
                                                                                class="cke_button_label cke_button__textcolor_label"
                                                                                aria-hidden="false">Màu chữ</span><span
                                                                                id="cke_89_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span><span
                                                                                class="cke_button_arrow"></span></a><a
                                                                            id="cke_90"
                                                                            class="cke_button cke_button__bgcolor cke_button_off"
                                                                            href="javascript:void('Màu nền')"
                                                                            title="Màu nền" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_90_label"
                                                                            aria-describedby="cke_90_description"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(191,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(192,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(193,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bgcolor_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_90_label"
                                                                                class="cke_button_label cke_button__bgcolor_label"
                                                                                aria-hidden="false">Màu nền</span><span
                                                                                id="cke_90_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span><span
                                                                                class="cke_button_arrow"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_91" class="cke_toolbar"
                                                                    aria-labelledby="cke_91_label" role="toolbar"><span
                                                                        id="cke_91_label" class="cke_voice_label">Công cụ</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_92"
                                                                            class="cke_button cke_button__maximize cke_button_off"
                                                                            href="javascript:void('Phóng to tối đa')"
                                                                            title="Phóng to tối đa" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_92_label"
                                                                            aria-describedby="cke_92_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(194,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(195,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(196,this);return false;"><span
                                                                                class="cke_button_icon cke_button__maximize_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1416px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_92_label"
                                                                                class="cke_button_label cke_button__maximize_label"
                                                                                aria-hidden="false">Phóng to tối đa</span><span
                                                                                id="cke_92_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_93"
                                                                            class="cke_button cke_button__showblocks cke_button_off"
                                                                            href="javascript:void('Hiển thị các khối')"
                                                                            title="Hiển thị các khối" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_93_label"
                                                                            aria-describedby="cke_93_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(197,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(198,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(199,this);return false;"><span
                                                                                class="cke_button_icon cke_button__showblocks_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1800px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_93_label"
                                                                                class="cke_button_label cke_button__showblocks_label"
                                                                                aria-hidden="false">Hiển thị các khối</span><span
                                                                                id="cke_93_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_94" class="cke_toolbar cke_toolbar_last"
                                                                    aria-labelledby="cke_94_label" role="toolbar"><span
                                                                        id="cke_94_label"
                                                                        class="cke_voice_label">about</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_95"
                                                                            class="cke_button cke_button__about cke_button_off"
                                                                            href="javascript:void('Thông tin về CKEditor 4')"
                                                                            title="Thông tin về CKEditor 4"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_95_label"
                                                                            aria-describedby="cke_95_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(200,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(201,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(202,this);return false;"><span
                                                                                class="cke_button_icon cke_button__about_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 0px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_95_label"
                                                                                class="cke_button_label cke_button__about_label"
                                                                                aria-hidden="false">Thông tin về CKEditor 4</span><span
                                                                                id="cke_95_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span></span></span>
                                                        <div id="cke_1_contents" class="cke_contents cke_reset"
                                                             role="presentation" style="height: 200px;"><span
                                                                id="cke_99" class="cke_voice_label">Nhấn ALT + 0 để được giúp đỡ</span>
                                                            <iframe src="" frameborder="0"
                                                                    class="cke_wysiwyg_frame cke_reset"
                                                                    style="width: 100%; height: 100%;"
                                                                    title="Bộ soạn thảo văn bản có định dạng, en__content"
                                                                    aria-describedby="cke_99" tabindex="0"
                                                                    allowtransparency="true"></iframe>
                                                        </div>
                                                        <span id="cke_1_bottom" class="cke_bottom cke_reset_all"
                                                              role="presentation" style="user-select: none;"><span
                                                                id="cke_1_resizer"
                                                                class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                                title="Kéo rê để thay đổi kích cỡ"
                                                                onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span
                                                                id="cke_1_path_label" class="cke_voice_label">Nhãn thành phần</span><span
                                                                id="cke_1_path" class="cke_path" role="group"
                                                                aria-labelledby="cke_1_path_label"><span
                                                                    class="cke_path_empty">&nbsp;</span></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header with-border">
                                        <h3 class="card-title">Tiếng Việt <img alt="Tiếng Việt" title=""
                                                                               src="https://demo.s-cart.org/data/language/flag_vn.png"
                                                                               style=" width:20px; height:20px;"></h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row ">
                                            <label for="vi__name" class="col-sm-2 col-form-label">Tên <span class="seo"
                                                                                                            title="SEO"><i
                                                        class="fa fa-coffee" aria-hidden="true"></i></span>
                                            </label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                                    </div>
                                                    <input type="text" id="vi__name" name="descriptions[vi][name]"
                                                           value="" class="form-control input-sm vi__name"
                                                           placeholder="">
                                                </div>
                                                <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                            </div>
                                        </div>
                                        <div class="form-group row   ">
                                            <label for="vi__keyword" class="col-sm-2 col-form-label">Từ khóa <span
                                                    class="seo" title="SEO"><i class="fa fa-coffee"
                                                                               aria-hidden="true"></i></span></label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                                    </div>
                                                    <input type="text" id="vi__keyword" name="descriptions[vi][keyword]"
                                                           value="" class="form-control input-sm vi__keyword"
                                                           placeholder="">
                                                </div>
                                                <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="vi__description" class="col-sm-2 col-form-label">Mô tả <span
                                                    class="seo" title="SEO"><i class="fa fa-coffee"
                                                                               aria-hidden="true"></i></span></label>
                                            <div class="col-sm-8">
                                                <textarea id="vi__description" name="descriptions[vi][description]"
                                                          class="form-control input-sm vi__description"
                                                          placeholder=""></textarea>
                                                <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 300 kí tự
</span>
                                            </div>
                                        </div>
                                        <div class="form-group row kind  ">
                                            <label for="vi__content" class="col-sm-2 col-form-label">
                                                Nội dung chính
                                            </label>
                                            <div class="col-sm-8">
<textarea id="vi__content" class="editor" name="descriptions[vi][content]" style="visibility: hidden; display: none;">
                                    </textarea>
                                                <div id="cke_vi__content"
                                                     class="cke_2 cke cke_reset cke_chrome cke_editor_vi__content cke_ltr cke_browser_webkit"
                                                     dir="ltr" lang="vi" role="application"
                                                     aria-labelledby="cke_vi__content_arialbl"><span
                                                        id="cke_vi__content_arialbl" class="cke_voice_label">Bộ soạn thảo văn bản có định dạng, vi__content</span>
                                                    <div class="cke_inner cke_reset" role="presentation"><span
                                                            id="cke_2_top" class="cke_top cke_reset_all"
                                                            role="presentation"
                                                            style="height: auto; user-select: none;"><span id="cke_111"
                                                                                                           class="cke_voice_label">Thanh công cụ</span><span
                                                                id="cke_2_toolbox" class="cke_toolbox" role="group"
                                                                aria-labelledby="cke_111"
                                                                onmousedown="return false;"><span id="cke_116"
                                                                                                  class="cke_toolbar"
                                                                                                  aria-labelledby="cke_116_label"
                                                                                                  role="toolbar"><span
                                                                        id="cke_116_label" class="cke_voice_label">Tài liệu</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_117"
                                                                            class="cke_button cke_button__source cke_button_off"
                                                                            href="javascript:void('Mã HTML')"
                                                                            title="Mã HTML" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_117_label"
                                                                            aria-describedby="cke_117_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(208,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(209,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(210,this);return false;"><span
                                                                                class="cke_button_icon cke_button__source_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1848px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_117_label"
                                                                                class="cke_button_label cke_button__source_label"
                                                                                aria-hidden="false">Mã HTML</span><span
                                                                                id="cke_117_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_118"
                                                                                                       class="cke_button cke_button__save cke_button_off"
                                                                                                       href="javascript:void('Lưu')"
                                                                                                       title="Lưu"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_118_label"
                                                                                                       aria-describedby="cke_118_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(211,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(212,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(213,this);return false;"><span
                                                                                class="cke_button_icon cke_button__save_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1728px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_118_label"
                                                                                class="cke_button_label cke_button__save_label"
                                                                                aria-hidden="false">Lưu</span><span
                                                                                id="cke_118_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_119"
                                                                            class="cke_button cke_button__newpage cke_button_off"
                                                                            href="javascript:void('Trang mới')"
                                                                            title="Trang mới" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_119_label"
                                                                            aria-describedby="cke_119_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(214,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(215,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(216,this);return false;"><span
                                                                                class="cke_button_icon cke_button__newpage_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1464px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_119_label"
                                                                                class="cke_button_label cke_button__newpage_label"
                                                                                aria-hidden="false">Trang mới</span><span
                                                                                id="cke_119_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_120"
                                                                            class="cke_button cke_button__preview cke_button_off"
                                                                            href="javascript:void('Xem trước')"
                                                                            title="Xem trước" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_120_label"
                                                                            aria-describedby="cke_120_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(217,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(218,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(219,this);return false;"><span
                                                                                class="cke_button_icon cke_button__preview_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1656px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_120_label"
                                                                                class="cke_button_label cke_button__preview_label"
                                                                                aria-hidden="false">Xem trước</span><span
                                                                                id="cke_120_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_121"
                                                                            class="cke_button cke_button__print cke_button_off"
                                                                            href="javascript:void('In')" title="In"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_121_label"
                                                                            aria-describedby="cke_121_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(220,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(221,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(222,this);return false;"><span
                                                                                class="cke_button_icon cke_button__print_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_121_label"
                                                                                class="cke_button_label cke_button__print_label"
                                                                                aria-hidden="false">In</span><span
                                                                                id="cke_121_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_122"
                                                                                                       class="cke_button cke_button__templates cke_button_off"
                                                                                                       href="javascript:void('Mẫu dựng sẵn')"
                                                                                                       title="Mẫu dựng sẵn"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_122_label"
                                                                                                       aria-describedby="cke_122_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(223,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(224,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(225,this);return false;"><span
                                                                                class="cke_button_icon cke_button__templates_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -456px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_122_label"
                                                                                class="cke_button_label cke_button__templates_label"
                                                                                aria-hidden="false">Mẫu dựng sẵn</span><span
                                                                                id="cke_122_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_123" class="cke_toolbar"
                                                                    aria-labelledby="cke_123_label" role="toolbar"><span
                                                                        id="cke_123_label" class="cke_voice_label">Clipboard/Undo</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_124"
                                                                            class="cke_button cke_button__cut cke_button_disabled "
                                                                            href="javascript:void('Cắt')"
                                                                            title="Cắt (Ctrl+X)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_124_label"
                                                                            aria-describedby="cke_124_description"
                                                                            aria-haspopup="false" aria-disabled="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(226,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(227,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(228,this);return false;"><span
                                                                                class="cke_button_icon cke_button__cut_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -312px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_124_label"
                                                                                class="cke_button_label cke_button__cut_label"
                                                                                aria-hidden="false">Cắt</span><span
                                                                                id="cke_124_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+X</span></a><a
                                                                            id="cke_125"
                                                                            class="cke_button cke_button__copy cke_button_disabled "
                                                                            href="javascript:void('Sao chép')"
                                                                            title="Sao chép (Ctrl+C)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_125_label"
                                                                            aria-describedby="cke_125_description"
                                                                            aria-haspopup="false" aria-disabled="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(229,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(230,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(231,this);return false;"><span
                                                                                class="cke_button_icon cke_button__copy_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -264px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_125_label"
                                                                                class="cke_button_label cke_button__copy_label"
                                                                                aria-hidden="false">Sao chép</span><span
                                                                                id="cke_125_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+C</span></a><a
                                                                            id="cke_126"
                                                                            class="cke_button cke_button__paste cke_button_off"
                                                                            href="javascript:void('Dán')"
                                                                            title="Dán (Ctrl+V)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_126_label"
                                                                            aria-describedby="cke_126_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(232,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(233,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(234,this);return false;"><span
                                                                                class="cke_button_icon cke_button__paste_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -360px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_126_label"
                                                                                class="cke_button_label cke_button__paste_label"
                                                                                aria-hidden="false">Dán</span><span
                                                                                id="cke_126_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+V</span></a><a
                                                                            id="cke_127"
                                                                            class="cke_button cke_button__pastetext cke_button_off"
                                                                            href="javascript:void('Dán theo định dạng văn bản thuần')"
                                                                            title="Dán theo định dạng văn bản thuần (Ctrl+Shift+V)"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_127_label"
                                                                            aria-describedby="cke_127_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(235,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(236,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(237,this);return false;"><span
                                                                                class="cke_button_icon cke_button__pastetext_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1560px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_127_label"
                                                                                class="cke_button_label cke_button__pastetext_label"
                                                                                aria-hidden="false">Dán theo định dạng văn bản thuần</span><span
                                                                                id="cke_127_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+Shift+V</span></a><a
                                                                            id="cke_128"
                                                                            class="cke_button cke_button__pastefromword cke_button_off"
                                                                            href="javascript:void('Dán với định dạng Word')"
                                                                            title="Dán với định dạng Word" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_128_label"
                                                                            aria-describedby="cke_128_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(238,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(239,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(240,this);return false;"><span
                                                                                class="cke_button_icon cke_button__pastefromword_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1608px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_128_label"
                                                                                class="cke_button_label cke_button__pastefromword_label"
                                                                                aria-hidden="false">Dán với định dạng Word</span><span
                                                                                id="cke_128_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_129"
                                                                                                       class="cke_button cke_button__undo cke_button_disabled "
                                                                                                       href="javascript:void('Khôi phục thao tác')"
                                                                                                       title="Khôi phục thao tác (Ctrl+Z)"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_129_label"
                                                                                                       aria-describedby="cke_129_description"
                                                                                                       aria-haspopup="false"
                                                                                                       aria-disabled="true"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(241,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(242,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(243,this);return false;"><span
                                                                                class="cke_button_icon cke_button__undo_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -2016px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_129_label"
                                                                                class="cke_button_label cke_button__undo_label"
                                                                                aria-hidden="false">Khôi phục thao tác</span><span
                                                                                id="cke_129_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+Z</span></a><a
                                                                            id="cke_130"
                                                                            class="cke_button cke_button__redo cke_button_disabled "
                                                                            href="javascript:void('Làm lại thao tác')"
                                                                            title="Làm lại thao tác (Ctrl+Y)"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_130_label"
                                                                            aria-describedby="cke_130_description"
                                                                            aria-haspopup="false" aria-disabled="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(244,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(245,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(246,this);return false;"><span
                                                                                class="cke_button_icon cke_button__redo_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1968px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_130_label"
                                                                                class="cke_button_label cke_button__redo_label"
                                                                                aria-hidden="false">Làm lại thao tác</span><span
                                                                                id="cke_130_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+Y</span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_131" class="cke_toolbar"
                                                                    aria-labelledby="cke_131_label" role="toolbar"><span
                                                                        id="cke_131_label" class="cke_voice_label">Chỉnh sửa</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_132"
                                                                            class="cke_button cke_button__find cke_button_off"
                                                                            href="javascript:void('Tìm kiếm')"
                                                                            title="Tìm kiếm" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_132_label"
                                                                            aria-describedby="cke_132_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(247,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(248,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(249,this);return false;"><span
                                                                                class="cke_button_icon cke_button__find_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -552px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_132_label"
                                                                                class="cke_button_label cke_button__find_label"
                                                                                aria-hidden="false">Tìm kiếm</span><span
                                                                                id="cke_132_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_133"
                                                                            class="cke_button cke_button__replace cke_button_off"
                                                                            href="javascript:void('Thay thế')"
                                                                            title="Thay thế" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_133_label"
                                                                            aria-describedby="cke_133_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(250,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(251,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(252,this);return false;"><span
                                                                                class="cke_button_icon cke_button__replace_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -576px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_133_label"
                                                                                class="cke_button_label cke_button__replace_label"
                                                                                aria-hidden="false">Thay thế</span><span
                                                                                id="cke_133_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_134"
                                                                                                       class="cke_button cke_button__selectall cke_button_off"
                                                                                                       href="javascript:void('Chọn tất cả')"
                                                                                                       title="Chọn tất cả"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_134_label"
                                                                                                       aria-describedby="cke_134_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(253,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(254,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(255,this);return false;"><span
                                                                                class="cke_button_icon cke_button__selectall_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1752px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_134_label"
                                                                                class="cke_button_label cke_button__selectall_label"
                                                                                aria-hidden="false">Chọn tất cả</span><span
                                                                                id="cke_134_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_135"
                                                                                                       class="cke_button cke_button__scayt cke_button_off"
                                                                                                       href="javascript:void('Kiểm tra chính tả')"
                                                                                                       title="Kiểm tra chính tả"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_135_label"
                                                                                                       aria-describedby="cke_135_description"
                                                                                                       aria-haspopup="true"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(256,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(257,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(258,this);return false;"><span
                                                                                class="cke_button_icon cke_button__scayt_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1896px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_135_label"
                                                                                class="cke_button_label cke_button__scayt_label"
                                                                                aria-hidden="false">Kiểm tra chính tả ngay khi gõ chữ (SCAYT)</span><span
                                                                                id="cke_135_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span><span
                                                                                class="cke_button_arrow"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_136" class="cke_toolbar cke_toolbar_last"
                                                                    aria-labelledby="cke_136_label" role="toolbar"><span
                                                                        id="cke_136_label" class="cke_voice_label">Bảng biểu</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_137"
                                                                            class="cke_button cke_button__form cke_button_off"
                                                                            href="javascript:void('Biểu mẫu')"
                                                                            title="Biểu mẫu" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_137_label"
                                                                            aria-describedby="cke_137_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(259,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(260,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(261,this);return false;"><span
                                                                                class="cke_button_icon cke_button__form_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -672px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_137_label"
                                                                                class="cke_button_label cke_button__form_label"
                                                                                aria-hidden="false">Biểu mẫu</span><span
                                                                                id="cke_137_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_138"
                                                                            class="cke_button cke_button__checkbox cke_button_off"
                                                                            href="javascript:void('Nút kiểm')"
                                                                            title="Nút kiểm" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_138_label"
                                                                            aria-describedby="cke_138_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(262,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(263,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(264,this);return false;"><span
                                                                                class="cke_button_icon cke_button__checkbox_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -648px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_138_label"
                                                                                class="cke_button_label cke_button__checkbox_label"
                                                                                aria-hidden="false">Nút kiểm</span><span
                                                                                id="cke_138_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_139"
                                                                            class="cke_button cke_button__radio cke_button_off"
                                                                            href="javascript:void('Nút chọn')"
                                                                            title="Nút chọn" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_139_label"
                                                                            aria-describedby="cke_139_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(265,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(266,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(267,this);return false;"><span
                                                                                class="cke_button_icon cke_button__radio_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -744px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_139_label"
                                                                                class="cke_button_label cke_button__radio_label"
                                                                                aria-hidden="false">Nút chọn</span><span
                                                                                id="cke_139_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_140"
                                                                            class="cke_button cke_button__textfield cke_button_off"
                                                                            href="javascript:void('Trường văn bản')"
                                                                            title="Trường văn bản" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_140_label"
                                                                            aria-describedby="cke_140_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(268,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(269,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(270,this);return false;"><span
                                                                                class="cke_button_icon cke_button__textfield_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -888px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_140_label"
                                                                                class="cke_button_label cke_button__textfield_label"
                                                                                aria-hidden="false">Trường văn bản</span><span
                                                                                id="cke_140_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_141"
                                                                            class="cke_button cke_button__textarea cke_button_off"
                                                                            href="javascript:void('Vùng văn bản')"
                                                                            title="Vùng văn bản" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_141_label"
                                                                            aria-describedby="cke_141_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(271,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(272,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(273,this);return false;"><span
                                                                                class="cke_button_icon cke_button__textarea_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -840px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_141_label"
                                                                                class="cke_button_label cke_button__textarea_label"
                                                                                aria-hidden="false">Vùng văn bản</span><span
                                                                                id="cke_141_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_142"
                                                                            class="cke_button cke_button__select cke_button_off"
                                                                            href="javascript:void('Ô chọn')"
                                                                            title="Ô chọn" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_142_label"
                                                                            aria-describedby="cke_142_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(274,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(275,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(276,this);return false;"><span
                                                                                class="cke_button_icon cke_button__select_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -792px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_142_label"
                                                                                class="cke_button_label cke_button__select_label"
                                                                                aria-hidden="false">Ô chọn</span><span
                                                                                id="cke_142_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_143"
                                                                            class="cke_button cke_button__button cke_button_off"
                                                                            href="javascript:void('Nút')" title="Nút"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_143_label"
                                                                            aria-describedby="cke_143_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(277,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(278,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(279,this);return false;"><span
                                                                                class="cke_button_icon cke_button__button_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -624px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_143_label"
                                                                                class="cke_button_label cke_button__button_label"
                                                                                aria-hidden="false">Nút</span><span
                                                                                id="cke_143_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_144"
                                                                            class="cke_button cke_button__imagebutton cke_button_off"
                                                                            href="javascript:void('Nút hình ảnh')"
                                                                            title="Nút hình ảnh" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_144_label"
                                                                            aria-describedby="cke_144_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(280,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(281,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(282,this);return false;"><span
                                                                                class="cke_button_icon cke_button__imagebutton_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -720px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_144_label"
                                                                                class="cke_button_label cke_button__imagebutton_label"
                                                                                aria-hidden="false">Nút hình ảnh</span><span
                                                                                id="cke_144_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_145"
                                                                            class="cke_button cke_button__hiddenfield cke_button_off"
                                                                            href="javascript:void('Trường ẩn')"
                                                                            title="Trường ẩn" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_145_label"
                                                                            aria-describedby="cke_145_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(283,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(284,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(285,this);return false;"><span
                                                                                class="cke_button_icon cke_button__hiddenfield_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -696px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_145_label"
                                                                                class="cke_button_label cke_button__hiddenfield_label"
                                                                                aria-hidden="false">Trường ẩn</span><span
                                                                                id="cke_145_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    class="cke_toolbar_break"></span><span id="cke_146"
                                                                                                           class="cke_toolbar"
                                                                                                           aria-labelledby="cke_146_label"
                                                                                                           role="toolbar"><span
                                                                        id="cke_146_label" class="cke_voice_label">Kiểu cơ bản</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_147"
                                                                            class="cke_button cke_button__bold cke_button_off"
                                                                            href="javascript:void('Đậm')"
                                                                            title="Đậm (Ctrl+B)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_147_label"
                                                                            aria-describedby="cke_147_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(286,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(287,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(288,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bold_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_147_label"
                                                                                class="cke_button_label cke_button__bold_label"
                                                                                aria-hidden="false">Đậm</span><span
                                                                                id="cke_147_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+B</span></a><a
                                                                            id="cke_148"
                                                                            class="cke_button cke_button__italic cke_button_off"
                                                                            href="javascript:void('Nghiêng')"
                                                                            title="Nghiêng (Ctrl+I)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_148_label"
                                                                            aria-describedby="cke_148_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(289,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(290,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(291,this);return false;"><span
                                                                                class="cke_button_icon cke_button__italic_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_148_label"
                                                                                class="cke_button_label cke_button__italic_label"
                                                                                aria-hidden="false">Nghiêng</span><span
                                                                                id="cke_148_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+I</span></a><a
                                                                            id="cke_149"
                                                                            class="cke_button cke_button__underline cke_button_off"
                                                                            href="javascript:void('Gạch chân')"
                                                                            title="Gạch chân (Ctrl+U)" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_149_label"
                                                                            aria-describedby="cke_149_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(292,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(293,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(294,this);return false;"><span
                                                                                class="cke_button_icon cke_button__underline_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_149_label"
                                                                                class="cke_button_label cke_button__underline_label"
                                                                                aria-hidden="false">Gạch chân</span><span
                                                                                id="cke_149_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+U</span></a><a
                                                                            id="cke_150"
                                                                            class="cke_button cke_button__strike cke_button_off"
                                                                            href="javascript:void('Gạch xuyên ngang')"
                                                                            title="Gạch xuyên ngang" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_150_label"
                                                                            aria-describedby="cke_150_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(295,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(296,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(297,this);return false;"><span
                                                                                class="cke_button_icon cke_button__strike_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -72px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_150_label"
                                                                                class="cke_button_label cke_button__strike_label"
                                                                                aria-hidden="false">Gạch xuyên ngang</span><span
                                                                                id="cke_150_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_151"
                                                                            class="cke_button cke_button__subscript cke_button_off"
                                                                            href="javascript:void('Chỉ số dưới')"
                                                                            title="Chỉ số dưới" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_151_label"
                                                                            aria-describedby="cke_151_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(298,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(299,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(300,this);return false;"><span
                                                                                class="cke_button_icon cke_button__subscript_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -96px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_151_label"
                                                                                class="cke_button_label cke_button__subscript_label"
                                                                                aria-hidden="false">Chỉ số dưới</span><span
                                                                                id="cke_151_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_152"
                                                                            class="cke_button cke_button__superscript cke_button_off"
                                                                            href="javascript:void('Chỉ số trên')"
                                                                            title="Chỉ số trên" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_152_label"
                                                                            aria-describedby="cke_152_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(301,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(302,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(303,this);return false;"><span
                                                                                class="cke_button_icon cke_button__superscript_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -120px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_152_label"
                                                                                class="cke_button_label cke_button__superscript_label"
                                                                                aria-hidden="false">Chỉ số trên</span><span
                                                                                id="cke_152_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_153"
                                                                                                       class="cke_button cke_button__copyformatting cke_button_off"
                                                                                                       href="javascript:void('Copy Formatting')"
                                                                                                       title="Copy Formatting (Ctrl+Shift+C)"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_153_label"
                                                                                                       aria-describedby="cke_153_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(304,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(305,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(306,this);return false;"><span
                                                                                class="cke_button_icon cke_button__copyformatting_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -480px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_153_label"
                                                                                class="cke_button_label cke_button__copyformatting_label"
                                                                                aria-hidden="false">Copy Formatting</span><span
                                                                                id="cke_153_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+Shift+C</span></a><a
                                                                            id="cke_154"
                                                                            class="cke_button cke_button__removeformat cke_button_off"
                                                                            href="javascript:void('Xoá định dạng')"
                                                                            title="Xoá định dạng" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_154_label"
                                                                            aria-describedby="cke_154_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(307,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(308,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(309,this);return false;"><span
                                                                                class="cke_button_icon cke_button__removeformat_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1704px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_154_label"
                                                                                class="cke_button_label cke_button__removeformat_label"
                                                                                aria-hidden="false">Xoá định dạng</span><span
                                                                                id="cke_154_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_155" class="cke_toolbar"
                                                                    aria-labelledby="cke_155_label" role="toolbar"><span
                                                                        id="cke_155_label"
                                                                        class="cke_voice_label">Đoạn</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_156"
                                                                            class="cke_button cke_button__numberedlist cke_button_off"
                                                                            href="javascript:void('Chèn/Xoá Danh sách có thứ tự')"
                                                                            title="Chèn/Xoá Danh sách có thứ tự"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_156_label"
                                                                            aria-describedby="cke_156_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(310,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(311,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(312,this);return false;"><span
                                                                                class="cke_button_icon cke_button__numberedlist_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_156_label"
                                                                                class="cke_button_label cke_button__numberedlist_label"
                                                                                aria-hidden="false">Chèn/Xoá Danh sách có thứ tự</span><span
                                                                                id="cke_156_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_157"
                                                                            class="cke_button cke_button__bulletedlist cke_button_off"
                                                                            href="javascript:void('Chèn/Xoá Danh sách không thứ tự')"
                                                                            title="Chèn/Xoá Danh sách không thứ tự"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_157_label"
                                                                            aria-describedby="cke_157_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(313,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(314,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(315,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bulletedlist_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1344px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_157_label"
                                                                                class="cke_button_label cke_button__bulletedlist_label"
                                                                                aria-hidden="false">Chèn/Xoá Danh sách không thứ tự</span><span
                                                                                id="cke_157_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_158"
                                                                                                       class="cke_button cke_button__outdent cke_button_disabled "
                                                                                                       href="javascript:void('Dịch ra ngoài')"
                                                                                                       title="Dịch ra ngoài"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_158_label"
                                                                                                       aria-describedby="cke_158_description"
                                                                                                       aria-haspopup="false"
                                                                                                       aria-disabled="true"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(316,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(317,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(318,this);return false;"><span
                                                                                class="cke_button_icon cke_button__outdent_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1056px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_158_label"
                                                                                class="cke_button_label cke_button__outdent_label"
                                                                                aria-hidden="false">Dịch ra ngoài</span><span
                                                                                id="cke_158_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_159"
                                                                            class="cke_button cke_button__indent cke_button_off"
                                                                            href="javascript:void('Dịch vào trong')"
                                                                            title="Dịch vào trong" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_159_label"
                                                                            aria-describedby="cke_159_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(319,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(320,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(321,this);return false;"><span
                                                                                class="cke_button_icon cke_button__indent_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1008px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_159_label"
                                                                                class="cke_button_label cke_button__indent_label"
                                                                                aria-hidden="false">Dịch vào trong</span><span
                                                                                id="cke_159_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_160"
                                                                                                       class="cke_button cke_button__blockquote cke_button_off"
                                                                                                       href="javascript:void('Khối trích dẫn')"
                                                                                                       title="Khối trích dẫn"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_160_label"
                                                                                                       aria-describedby="cke_160_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(322,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(323,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(324,this);return false;"><span
                                                                                class="cke_button_icon cke_button__blockquote_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -216px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_160_label"
                                                                                class="cke_button_label cke_button__blockquote_label"
                                                                                aria-hidden="false">Khối trích dẫn</span><span
                                                                                id="cke_160_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_161"
                                                                            class="cke_button cke_button__creatediv cke_button_off"
                                                                            href="javascript:void('Tạo khối các thành phần')"
                                                                            title="Tạo khối các thành phần"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_161_label"
                                                                            aria-describedby="cke_161_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(325,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(326,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(327,this);return false;"><span
                                                                                class="cke_button_icon cke_button__creatediv_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -504px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_161_label"
                                                                                class="cke_button_label cke_button__creatediv_label"
                                                                                aria-hidden="false">Tạo khối các thành phần</span><span
                                                                                id="cke_161_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_162"
                                                                                                       class="cke_button cke_button__justifyleft cke_button_off"
                                                                                                       href="javascript:void('Canh trái')"
                                                                                                       title="Canh trái"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_162_label"
                                                                                                       aria-describedby="cke_162_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(328,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(329,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(330,this);return false;"><span
                                                                                class="cke_button_icon cke_button__justifyleft_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1152px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_162_label"
                                                                                class="cke_button_label cke_button__justifyleft_label"
                                                                                aria-hidden="false">Canh trái</span><span
                                                                                id="cke_162_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_163"
                                                                            class="cke_button cke_button__justifycenter cke_button_off"
                                                                            href="javascript:void('Canh giữa')"
                                                                            title="Canh giữa" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_163_label"
                                                                            aria-describedby="cke_163_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(331,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(332,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(333,this);return false;"><span
                                                                                class="cke_button_icon cke_button__justifycenter_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1128px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_163_label"
                                                                                class="cke_button_label cke_button__justifycenter_label"
                                                                                aria-hidden="false">Canh giữa</span><span
                                                                                id="cke_163_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_164"
                                                                            class="cke_button cke_button__justifyright cke_button_off"
                                                                            href="javascript:void('Canh phải')"
                                                                            title="Canh phải" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_164_label"
                                                                            aria-describedby="cke_164_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(334,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(335,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(336,this);return false;"><span
                                                                                class="cke_button_icon cke_button__justifyright_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1176px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_164_label"
                                                                                class="cke_button_label cke_button__justifyright_label"
                                                                                aria-hidden="false">Canh phải</span><span
                                                                                id="cke_164_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_165"
                                                                            class="cke_button cke_button__justifyblock cke_button_off"
                                                                            href="javascript:void('Canh đều')"
                                                                            title="Canh đều" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_165_label"
                                                                            aria-describedby="cke_165_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(337,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(338,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(339,this);return false;"><span
                                                                                class="cke_button_icon cke_button__justifyblock_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1104px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_165_label"
                                                                                class="cke_button_label cke_button__justifyblock_label"
                                                                                aria-hidden="false">Canh đều</span><span
                                                                                id="cke_165_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><span
                                                                            class="cke_toolbar_separator"
                                                                            role="separator"></span><a id="cke_166"
                                                                                                       class="cke_button cke_button__bidiltr cke_button_off"
                                                                                                       href="javascript:void('Văn bản hướng từ trái sang phải')"
                                                                                                       title="Văn bản hướng từ trái sang phải"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_166_label"
                                                                                                       aria-describedby="cke_166_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(340,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(341,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(342,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bidiltr_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -168px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_166_label"
                                                                                class="cke_button_label cke_button__bidiltr_label"
                                                                                aria-hidden="false">Văn bản hướng từ trái sang phải</span><span
                                                                                id="cke_166_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_167"
                                                                            class="cke_button cke_button__bidirtl cke_button_off"
                                                                            href="javascript:void('Văn bản hướng từ phải sang trái')"
                                                                            title="Văn bản hướng từ phải sang trái"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_167_label"
                                                                            aria-describedby="cke_167_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(343,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(344,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(345,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bidirtl_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -192px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_167_label"
                                                                                class="cke_button_label cke_button__bidirtl_label"
                                                                                aria-hidden="false">Văn bản hướng từ phải sang trái</span><span
                                                                                id="cke_167_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_168"
                                                                            class="cke_button cke_button__language cke_button_off"
                                                                            href="javascript:void('Thiết lập ngôn ngữ')"
                                                                            title="Thiết lập ngôn ngữ" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_168_label"
                                                                            aria-describedby="cke_168_description"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(346,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(347,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(348,this);return false;"><span
                                                                                class="cke_button_icon cke_button__language_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1200px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_168_label"
                                                                                class="cke_button_label cke_button__language_label"
                                                                                aria-hidden="false">Thiết lập ngôn ngữ</span><span
                                                                                id="cke_168_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span><span
                                                                                class="cke_button_arrow"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_169" class="cke_toolbar"
                                                                    aria-labelledby="cke_169_label" role="toolbar"><span
                                                                        id="cke_169_label" class="cke_voice_label">Liên kết</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_170"
                                                                            class="cke_button cke_button__link cke_button_off"
                                                                            href="javascript:void('Chèn/Sửa liên kết')"
                                                                            title="Chèn/Sửa liên kết (Ctrl+L)"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_170_label"
                                                                            aria-describedby="cke_170_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(349,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(350,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(351,this);return false;"><span
                                                                                class="cke_button_icon cke_button__link_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_170_label"
                                                                                class="cke_button_label cke_button__link_label"
                                                                                aria-hidden="false">Chèn/Sửa liên kết</span><span
                                                                                id="cke_170_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false">Keyboard shortcut Ctrl+L</span></a><a
                                                                            id="cke_171"
                                                                            class="cke_button cke_button__unlink cke_button_disabled "
                                                                            href="javascript:void('Xoá liên kết')"
                                                                            title="Xoá liên kết" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_171_label"
                                                                            aria-describedby="cke_171_description"
                                                                            aria-haspopup="false" aria-disabled="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(352,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(353,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(354,this);return false;"><span
                                                                                class="cke_button_icon cke_button__unlink_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1296px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_171_label"
                                                                                class="cke_button_label cke_button__unlink_label"
                                                                                aria-hidden="false">Xoá liên kết</span><span
                                                                                id="cke_171_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_172"
                                                                            class="cke_button cke_button__anchor cke_button_off"
                                                                            href="javascript:void('Chèn/Sửa điểm neo')"
                                                                            title="Chèn/Sửa điểm neo" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_172_label"
                                                                            aria-describedby="cke_172_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(355,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(356,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(357,this);return false;"><span
                                                                                class="cke_button_icon cke_button__anchor_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_172_label"
                                                                                class="cke_button_label cke_button__anchor_label"
                                                                                aria-hidden="false">Chèn/Sửa điểm neo</span><span
                                                                                id="cke_172_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_173" class="cke_toolbar cke_toolbar_last"
                                                                    aria-labelledby="cke_173_label" role="toolbar"><span
                                                                        id="cke_173_label"
                                                                        class="cke_voice_label">Chèn</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_174"
                                                                            class="cke_button cke_button__image cke_button_off"
                                                                            href="javascript:void('Hình ảnh')"
                                                                            title="Hình ảnh" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_174_label"
                                                                            aria-describedby="cke_174_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(358,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(359,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(360,this);return false;"><span
                                                                                class="cke_button_icon cke_button__image_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -960px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_174_label"
                                                                                class="cke_button_label cke_button__image_label"
                                                                                aria-hidden="false">Hình ảnh</span><span
                                                                                id="cke_174_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_175"
                                                                            class="cke_button cke_button__flash cke_button_off"
                                                                            href="javascript:void('Flash')"
                                                                            title="Flash" tabindex="-1" hidefocus="true"
                                                                            role="button"
                                                                            aria-labelledby="cke_175_label"
                                                                            aria-describedby="cke_175_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(361,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(362,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(363,this);return false;"><span
                                                                                class="cke_button_icon cke_button__flash_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -600px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_175_label"
                                                                                class="cke_button_label cke_button__flash_label"
                                                                                aria-hidden="false">Flash</span><span
                                                                                id="cke_175_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_176"
                                                                            class="cke_button cke_button__table cke_button_off"
                                                                            href="javascript:void('Bảng')" title="Bảng"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_176_label"
                                                                            aria-describedby="cke_176_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(364,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(365,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(366,this);return false;"><span
                                                                                class="cke_button_icon cke_button__table_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1920px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_176_label"
                                                                                class="cke_button_label cke_button__table_label"
                                                                                aria-hidden="false">Bảng</span><span
                                                                                id="cke_176_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_177"
                                                                            class="cke_button cke_button__horizontalrule cke_button_off"
                                                                            href="javascript:void('Chèn đường phân cách ngang')"
                                                                            title="Chèn đường phân cách ngang"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_177_label"
                                                                            aria-describedby="cke_177_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(367,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(368,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(369,this);return false;"><span
                                                                                class="cke_button_icon cke_button__horizontalrule_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -912px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_177_label"
                                                                                class="cke_button_label cke_button__horizontalrule_label"
                                                                                aria-hidden="false">Chèn đường phân cách ngang</span><span
                                                                                id="cke_177_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_178"
                                                                            class="cke_button cke_button__smiley cke_button_off"
                                                                            href="javascript:void('Hình biểu lộ cảm xúc (mặt cười)')"
                                                                            title="Hình biểu lộ cảm xúc (mặt cười)"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_178_label"
                                                                            aria-describedby="cke_178_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(370,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(371,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(372,this);return false;"><span
                                                                                class="cke_button_icon cke_button__smiley_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1080px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_178_label"
                                                                                class="cke_button_label cke_button__smiley_label"
                                                                                aria-hidden="false">Hình biểu lộ cảm xúc (mặt cười)</span><span
                                                                                id="cke_178_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_179"
                                                                            class="cke_button cke_button__specialchar cke_button_off"
                                                                            href="javascript:void('Chèn ký tự đặc biệt')"
                                                                            title="Chèn ký tự đặc biệt" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_179_label"
                                                                            aria-describedby="cke_179_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(373,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(374,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(375,this);return false;"><span
                                                                                class="cke_button_icon cke_button__specialchar_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1872px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_179_label"
                                                                                class="cke_button_label cke_button__specialchar_label"
                                                                                aria-hidden="false">Chèn ký tự đặc biệt</span><span
                                                                                id="cke_179_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_180"
                                                                            class="cke_button cke_button__pagebreak cke_button_off"
                                                                            href="javascript:void('Chèn ngắt trang')"
                                                                            title="Chèn ngắt trang" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_180_label"
                                                                            aria-describedby="cke_180_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(376,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(377,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(378,this);return false;"><span
                                                                                class="cke_button_icon cke_button__pagebreak_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1512px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_180_label"
                                                                                class="cke_button_label cke_button__pagebreak_label"
                                                                                aria-hidden="false">Chèn ngắt trang</span><span
                                                                                id="cke_180_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_181"
                                                                            class="cke_button cke_button__iframe cke_button_off"
                                                                            href="javascript:void('Iframe')"
                                                                            title="Iframe" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_181_label"
                                                                            aria-describedby="cke_181_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(379,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(380,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(381,this);return false;"><span
                                                                                class="cke_button_icon cke_button__iframe_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -936px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_181_label"
                                                                                class="cke_button_label cke_button__iframe_label"
                                                                                aria-hidden="false">Iframe</span><span
                                                                                id="cke_181_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    class="cke_toolbar_break"></span><span id="cke_182"
                                                                                                           class="cke_toolbar"
                                                                                                           aria-labelledby="cke_182_label"
                                                                                                           role="toolbar"><span
                                                                        id="cke_182_label"
                                                                        class="cke_voice_label">Kiểu</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        id="cke_112"
                                                                        class="cke_combo cke_combo__styles cke_combo_off"
                                                                        role="presentation"><span id="cke_112_label"
                                                                                                  class="cke_combo_label">Kiểu</span><a
                                                                            class="cke_combo_button"
                                                                            title="Phong cách định dạng" tabindex="-1"
                                                                            href="javascript:void('Phong cách định dạng')"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_112_label"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(383,event,this);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(384,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(382,this);return false;"><span
                                                                                id="cke_112_text"
                                                                                class="cke_combo_text cke_combo_inlinelabel">Kiểu</span><span
                                                                                class="cke_combo_open"><span
                                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                                        id="cke_113"
                                                                        class="cke_combo cke_combo__format cke_combo_off"
                                                                        role="presentation"><span id="cke_113_label"
                                                                                                  class="cke_combo_label">Định dạng</span><a
                                                                            class="cke_combo_button" title="Định dạng"
                                                                            tabindex="-1"
                                                                            href="javascript:void('Định dạng')"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_113_label"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(386,event,this);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(387,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(385,this);return false;"><span
                                                                                id="cke_113_text"
                                                                                class="cke_combo_text cke_combo_inlinelabel">Định dạng</span><span
                                                                                class="cke_combo_open"><span
                                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                                        id="cke_114"
                                                                        class="cke_combo cke_combo__font cke_combo_off"
                                                                        role="presentation"><span id="cke_114_label"
                                                                                                  class="cke_combo_label">Phông</span><a
                                                                            class="cke_combo_button" title="Phông"
                                                                            tabindex="-1"
                                                                            href="javascript:void('Phông')"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_114_label"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(389,event,this);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(390,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(388,this);return false;"><span
                                                                                id="cke_114_text"
                                                                                class="cke_combo_text cke_combo_inlinelabel">Phông</span><span
                                                                                class="cke_combo_open"><span
                                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                                        id="cke_115"
                                                                        class="cke_combo cke_combo__fontsize cke_combo_off"
                                                                        role="presentation"><span id="cke_115_label"
                                                                                                  class="cke_combo_label">Cỡ chữ</span><a
                                                                            class="cke_combo_button" title="Cỡ chữ"
                                                                            tabindex="-1"
                                                                            href="javascript:void('Cỡ chữ')"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_115_label"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(392,event,this);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(393,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(391,this);return false;"><span
                                                                                id="cke_115_text"
                                                                                class="cke_combo_text cke_combo_inlinelabel">Cỡ chữ</span><span
                                                                                class="cke_combo_open"><span
                                                                                    class="cke_combo_arrow"></span></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_183" class="cke_toolbar"
                                                                    aria-labelledby="cke_183_label" role="toolbar"><span
                                                                        id="cke_183_label" class="cke_voice_label">Màu sắc</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_184"
                                                                            class="cke_button cke_button__textcolor cke_button_off"
                                                                            href="javascript:void('Màu chữ')"
                                                                            title="Màu chữ" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_184_label"
                                                                            aria-describedby="cke_184_description"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(394,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(395,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(396,this);return false;"><span
                                                                                class="cke_button_icon cke_button__textcolor_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_184_label"
                                                                                class="cke_button_label cke_button__textcolor_label"
                                                                                aria-hidden="false">Màu chữ</span><span
                                                                                id="cke_184_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span><span
                                                                                class="cke_button_arrow"></span></a><a
                                                                            id="cke_185"
                                                                            class="cke_button cke_button__bgcolor cke_button_off"
                                                                            href="javascript:void('Màu nền')"
                                                                            title="Màu nền" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_185_label"
                                                                            aria-describedby="cke_185_description"
                                                                            aria-haspopup="true"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(397,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(398,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(399,this);return false;"><span
                                                                                class="cke_button_icon cke_button__bgcolor_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_185_label"
                                                                                class="cke_button_label cke_button__bgcolor_label"
                                                                                aria-hidden="false">Màu nền</span><span
                                                                                id="cke_185_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span><span
                                                                                class="cke_button_arrow"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_186" class="cke_toolbar"
                                                                    aria-labelledby="cke_186_label" role="toolbar"><span
                                                                        id="cke_186_label" class="cke_voice_label">Công cụ</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_187"
                                                                            class="cke_button cke_button__maximize cke_button_off"
                                                                            href="javascript:void('Phóng to tối đa')"
                                                                            title="Phóng to tối đa" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_187_label"
                                                                            aria-describedby="cke_187_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(400,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(401,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(402,this);return false;"><span
                                                                                class="cke_button_icon cke_button__maximize_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1416px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_187_label"
                                                                                class="cke_button_label cke_button__maximize_label"
                                                                                aria-hidden="false">Phóng to tối đa</span><span
                                                                                id="cke_187_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a><a
                                                                            id="cke_188"
                                                                            class="cke_button cke_button__showblocks cke_button_off"
                                                                            href="javascript:void('Hiển thị các khối')"
                                                                            title="Hiển thị các khối" tabindex="-1"
                                                                            hidefocus="true" role="button"
                                                                            aria-labelledby="cke_188_label"
                                                                            aria-describedby="cke_188_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(403,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(404,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(405,this);return false;"><span
                                                                                class="cke_button_icon cke_button__showblocks_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 -1800px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_188_label"
                                                                                class="cke_button_label cke_button__showblocks_label"
                                                                                aria-hidden="false">Hiển thị các khối</span><span
                                                                                id="cke_188_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span><span
                                                                    id="cke_189" class="cke_toolbar cke_toolbar_last"
                                                                    aria-labelledby="cke_189_label" role="toolbar"><span
                                                                        id="cke_189_label"
                                                                        class="cke_voice_label">about</span><span
                                                                        class="cke_toolbar_start"></span><span
                                                                        class="cke_toolgroup" role="presentation"><a
                                                                            id="cke_190"
                                                                            class="cke_button cke_button__about cke_button_off"
                                                                            href="javascript:void('Thông tin về CKEditor 4')"
                                                                            title="Thông tin về CKEditor 4"
                                                                            tabindex="-1" hidefocus="true" role="button"
                                                                            aria-labelledby="cke_190_label"
                                                                            aria-describedby="cke_190_description"
                                                                            aria-haspopup="false"
                                                                            onkeydown="return CKEDITOR.tools.callFunction(406,event);"
                                                                            onfocus="return CKEDITOR.tools.callFunction(407,event);"
                                                                            onclick="CKEDITOR.tools.callFunction(408,this);return false;"><span
                                                                                class="cke_button_icon cke_button__about_icon"
                                                                                style="background-image:url('https://demo.s-cart.org/vendor/ckeditor/plugins/icons.png?t=HBDD');background-position:0 0px;background-size:auto;">&nbsp;</span><span
                                                                                id="cke_190_label"
                                                                                class="cke_button_label cke_button__about_label"
                                                                                aria-hidden="false">Thông tin về CKEditor 4</span><span
                                                                                id="cke_190_description"
                                                                                class="cke_button_label"
                                                                                aria-hidden="false"></span></a></span><span
                                                                        class="cke_toolbar_end"></span></span></span></span>
                                                        <div id="cke_2_contents" class="cke_contents cke_reset"
                                                             role="presentation" style="height: 200px;"><span
                                                                id="cke_194" class="cke_voice_label">Nhấn ALT + 0 để được giúp đỡ</span>
                                                            <iframe src="" frameborder="0"
                                                                    class="cke_wysiwyg_frame cke_reset"
                                                                    style="width: 100%; height: 100%;"
                                                                    title="Bộ soạn thảo văn bản có định dạng, vi__content"
                                                                    aria-describedby="cke_194" tabindex="0"
                                                                    allowtransparency="true"></iframe>
                                                        </div>
                                                        <span id="cke_2_bottom" class="cke_bottom cke_reset_all"
                                                              role="presentation" style="user-select: none;"><span
                                                                id="cke_2_resizer"
                                                                class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                                title="Kéo rê để thay đổi kích cỡ"
                                                                onmousedown="CKEDITOR.tools.callFunction(206, event)">◢</span><span
                                                                id="cke_2_path_label" class="cke_voice_label">Nhãn thành phần</span><span
                                                                id="cke_2_path" class="cke_path" role="group"
                                                                aria-labelledby="cke_2_path_label"><span
                                                                    class="cke_path_empty">&nbsp;</span></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind  ">
                                    <label for="category" class="col-sm-2 col-form-label">
                                        Chọn danh mục
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select
                                                class="form-control input-sm category select2 select2-hidden-accessible"
                                                multiple="" data-placeholder="Chọn danh mục" name="category[]"
                                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option value=""></option>
                                                <option value="980b670b-2137-488c-baf3-1bea24d7aa81">Am Thuc
                                                </option>
                                                <option value="980b670b-218b-4402-b7cb-705a3c6a5394">--Pho Nam Dinh
                                                </option>
                                                <option value="980b670b-2191-4e45-8a38-80cfe6a37f30">--Com Lang Vong
                                                </option>
                                                <option value="980b670b-2196-41fe-b21e-66970db9cb3b">--Bun Cha Hanoi
                                                </option>
                                                <option value="980b670b-213f-43f2-842c-26fca1076290">Du Lich
                                                </option>
                                                <option value="980b670b-2185-46aa-ba11-dbe6631ac992">--Phong Nha Kebang
                                                </option>
                                                <option value="980b670b-21a0-458a-b26e-0bb5ed68e455">--Vinh Ha Long
                                                </option>
                                                <option value="980b670b-21bc-4c3a-b943-66ba48e6e5c0">--Nhac Co Truyen
                                                </option>
                                                <option value="980b670b-21c1-4957-975b-0fa4ec67cb4b">--Con Dao
                                                </option>
                                                <option value="980b670b-2146-4c55-b2e2-6316ead67959">My Nghe
                                                </option>
                                                <option value="980b670b-2178-46c1-9381-76e252dc724b">--Nem Chua
                                                </option>
                                                <option value="980b670b-21ae-46e9-bbe0-0da5595a9623">--Tranh Dong Ho
                                                </option>
                                                <option value="980b670b-21b3-4920-a186-1b0c99b5f676">--Trai Cay Nam Bo
                                                </option>
                                                <option value="980b670b-21b7-4a61-8f1a-07cac7a13fe3">--Chieu Coi Nga Son
                                                </option>
                                                <option value="980b670b-214b-4927-a9ec-e17192b048b5">Van Hoa
                                                </option>
                                                <option value="980b670b-216a-45db-937d-02262dfeb951">--Gom Bat Trang
                                                </option>
                                                <option value="980b670b-21a4-4baf-b5c1-c369485d9e0c">--Lua Ha Dong
                                                </option>
                                                <option value="980b670b-21a9-496f-af11-43c90d87b4d1">--Non Quai Thao
                                                </option>
                                                <option value="980b670b-2152-4816-a4c1-419b2022e3eb">The Thao
                                                </option>
                                                <option value="980b670b-2165-40fb-9229-952ef1f95321">--Banh My Sai Gon
                                                </option>
                                                <option value="980b670b-2180-4440-9cee-65037deb6da3">--Toi Ly Son
                                                </option>
                                                <option value="980b670b-2157-4345-98eb-bdf91021437b">Cong Nghe
                                                </option>
                                                <option value="980b670b-216f-48db-828e-2e8ee055abb4">--Dan Ca Quan Ho
                                                </option>
                                                <option value="980b670b-2174-449b-b5e1-21b6b101c67e">--Don Ca Tai Tu
                                                </option>
                                                <option value="980b670b-219b-4d35-9719-d28fb451b89e">--Com Tam An Giang
                                                </option>
                                                <option value="980b670b-215c-4113-aef3-a26d0342f3f6">Ky Thuat
                                                </option>
                                                <option value="980b670b-2161-447e-9738-53d608db4609">Dich Vu
                                                </option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="2" style="width: 1010.66px;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--multiple"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="-1" aria-disabled="false"><ul
                                                            class="select2-selection__rendered"><li
                                                                class="select2-search select2-search--inline"><input
                                                                    class="select2-search__field" type="search"
                                                                    tabindex="0" autocomplete="off" autocorrect="off"
                                                                    autocapitalize="none" spellcheck="false"
                                                                    role="searchbox" aria-autocomplete="list"
                                                                    placeholder="Chọn danh mục"
                                                                    style="width: 996.66px;"></li></ul></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="input-group-append">
                                                <a target="_new" href="https://demo.s-cart.org/sc_admin/category"
                                                   class="btn  btn-flat" title="New">
                                                    <i class="fa fa-plus" title="Thêm mới"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row kind  ">
                                    <label for="image" class="col-sm-2 col-form-label">
                                        Hình ảnh
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" id="image" name="image" value=""
                                                   class="form-control input-sm image" placeholder="">
                                            <div class="input-group-append">
<span class="btn btn-primary lfm" data-input="image" data-preview="preview_image" data-type="product">
<i class="fas fa-image"></i> Chọn hình
</span>
                                            </div>
                                        </div>
                                        <div id="preview_image" class="img_holder">
                                        </div>
                                        <button type="button" id="add_sub_image" class="btn btn-flat btn-success">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            Thêm ảnh
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group row kind  ">
                                    <label for="sku" class="col-sm-2 col-form-label">Mã SKU</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" style="width: 100px;" id="sku" name="sku" value=""
                                                   class="form-control input-sm sku" placeholder="">
                                        </div>
                                        <span class="form-text">
Chỉ sử dụng kí tự trong nhóm: "A-Z", "a-z", "0-9" and "-_"
</span>
                                    </div>
                                </div>
                                <div class="form-group row kind  ">
                                    <label for="alias" class="col-sm-2 col-form-label">URL tùy chỉnh <span class="seo"
                                                                                                           title="SEO"><i
                                                class="fa fa-coffee" aria-hidden="true"></i></span></label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" id="alias" name="alias" value=""
                                                   class="form-control input-sm alias" placeholder="">
                                        </div>
                                        <span class="form-text">
Tối đa 100 kí tự trong nhóm: "A-Z", "a-z", "0-9" and "-_"
</span>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="brand_id" class="col-sm-2 col-form-label">Nhãn hàng</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select
                                                class="form-control input-sm brand_id select2 select2-hidden-accessible"
                                                name="brand_id" data-select2-id="5" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="7"></option>
                                                <option value="980b670b-2b53-4b65-8678-17de5cafb321">DaNang
                                                </option>
                                                <option value="980b670b-2b5d-4ea9-8042-0a845a8ea68f">SaiGon
                                                </option>
                                                <option value="980b670b-2b63-4bbe-adfd-6f72cabb36be">HaNoi
                                                </option>
                                                <option value="980b670b-2b68-4eb2-a6fd-22910ec8e2c5">BenTre
                                                </option>
                                                <option value="980b670b-2b6d-4d73-8ef5-bd959553d8cc">NgheAn
                                                </option>
                                                <option value="980b670b-2b72-4f9f-a2ae-600543368c2e">LongAn
                                                </option>
                                                <option value="980b670b-2b77-4b00-b255-de75633381d1">CaMau
                                                </option>
                                                <option value="980b670b-2b7c-4dc3-863c-33628ccc8e8f">HaGiang
                                                </option>
                                                <option value="980b670b-2b85-4739-8c14-49a3b266a728">ThanhHoa
                                                </option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="6" style="width: 1010.66px;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-brand_id-xx-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-brand_id-xx-container" role="textbox"
                                                            aria-readonly="true"></span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="input-group-append">
                                                <a target="_new" href="https://demo.s-cart.org/sc_admin/brand"
                                                   class="btn  btn-flat" title="New">
                                                    <i class="fa fa-plus" title="Thêm mới"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="supplier_id" class="col-sm-2 col-form-label">Nhà cung cấp</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select
                                                class="form-control input-sm supplier_id select2 select2-hidden-accessible"
                                                name="supplier_id" data-select2-id="8" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="10"></option>
                                                <option value="980b670b-299b-43fd-8310-e8573a4a29a5">Supplier ABC
                                                </option>
                                                <option value="980b670b-29a2-49b6-aec0-84cea364eee0">Supplier XYZ
                                                </option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="9" style="width: 1010.66px;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-supplier_id-e0-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-supplier_id-e0-container" role="textbox"
                                                            aria-readonly="true"></span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="input-group-append">
                                                <a target="_new" href="https://demo.s-cart.org/sc_admin/supplier"
                                                   class="btn  btn-flat" title="New">
                                                    <i class="fa fa-plus" title="Thêm mới"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="cost" class="col-sm-2 col-form-label">Giá cost</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="number" step="0.01" style="width: 100px;" id="cost" name="cost"
                                                   value="0" class="form-control input-sm cost" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="price" class="col-sm-2 col-form-label">Giá</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="number" step="0.01" style="width: 100px;" id="price"
                                                   name="price" value="0" class="form-control input-sm price"
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="tax_id" class="col-sm-2 col-form-label">Thuế
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select
                                                class="form-control input-sm tax_id select2 select2-hidden-accessible"
                                                name="tax_id" data-select2-id="11" tabindex="-1" aria-hidden="true">
                                                <option value="0" selected="" data-select2-id="13">Không thuế</option>
                                                <option value="auto">Tự động</option>
                                                <option value="1">Tax default (10%)
                                                </option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="12"
                                                           style="width: 1010.66px;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-tax_id-kc-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-tax_id-kc-container" role="textbox"
                                                            aria-readonly="true"
                                                            title="Không thuế">Không thuế</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="input-group-append">
                                                <a target="_new" href="https://demo.s-cart.org/sc_admin/tax"
                                                   class="btn  btn-flat" title="New">
                                                    <i class="fa fa-plus" title="Thêm mới"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind    ">
                                    <label for="price" class="col-sm-2 col-form-label">Giá khuyến mãi</label>
                                    <div class="col-sm-8">
                                        <button type="button" id="add_product_promotion"
                                                class="btn btn-flat btn-success">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            Thêm giá khuyến mãi
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="stock" class="col-sm-2 col-form-label">Số lượng trong kho</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="number" style="width: 100px;" id="stock" name="stock" value="0"
                                                   class="form-control input-sm stock" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind    ">
                                    <label for="weight_class" class="col-sm-2 col-form-label">Đơn vị khối lượng</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select
                                                class="form-control input-sm weight_class select2 select2-hidden-accessible"
                                                name="weight_class" data-select2-id="14" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="">Chọn đơn vị khối lượng</option>
                                                <option>
                                                </option>
                                                <option value="g" selected="">
                                                    Gram
                                                </option>
                                                <option value="kg" selected="">
                                                    Kilogram
                                                </option>
                                                <option value="lb" selected="">
                                                    Pound
                                                </option>
                                                <option value="oz" selected="" data-select2-id="16">
                                                    Ounce
                                                </option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="15"
                                                           style="width: 1010.66px;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-weight_class-qr-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-weight_class-qr-container" role="textbox"
                                                            aria-readonly="true" title="
Ounce ">
Ounce </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="input-group-append">
                                                <a target="_new" href="https://demo.s-cart.org/sc_admin/weight_unit"
                                                   class="btn  btn-flat" title="New">
                                                    <i class="fa fa-plus" title="Thêm mới"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="weight" class="col-sm-2 col-form-label">Khối lượng</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="number" step="0.01" style="width: 100px;" id="weight"
                                                   name="weight" value="0" class="form-control input-sm weight"
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind    ">
                                    <label for="length_class" class="col-sm-2 col-form-label">Đơn vị kích thước</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <select
                                                class="form-control input-sm length_class select2 select2-hidden-accessible"
                                                style="width: 100%;" name="length_class" data-select2-id="17"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="">Chọn đơn vị kích thước</option>
                                                <option>
                                                </option>
                                                <option value="mm" selected="">
                                                    Millimeter
                                                </option>
                                                <option value="cm" selected="">
                                                    Centimeter
                                                </option>
                                                <option value="m" selected="">
                                                    Meter
                                                </option>
                                                <option value="in" selected="" data-select2-id="19">
                                                    Inch
                                                </option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="18" style="width: 100%;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-length_class-36-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-length_class-36-container" role="textbox"
                                                            aria-readonly="true" title="
Inch ">
Inch </span><span class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="input-group-append">
                                                <a target="_new" href="https://demo.s-cart.org/sc_admin/length_unit"
                                                   class="btn  btn-flat" title="New">
                                                    <i class="fa fa-plus" title="Thêm mới"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="length" class="col-sm-2 col-form-label">Kích thước</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="number" step="0.01" style="width: 100px;" id="length"
                                                   name="length" value="0" class="form-control input-sm length"
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="height" class="col-sm-2 col-form-label">Chiều cao</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="number" step="0.01" style="width: 100px;" id="height"
                                                   name="height" value="0" class="form-control input-sm height"
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="width" class="col-sm-2 col-form-label">Chiều rộng</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="number" step="0.01" style="width: 100px;" id="width"
                                                   name="width" value="0" class="form-control input-sm width"
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="property" class="col-sm-2 col-form-label">Đặc tính</label>
                                    <div class="col-sm-8">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimaryphysical" name="property"
                                                   value="physical" checked="">
                                            <label for="radioPrimaryphysical">
                                                Product physical
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimarydownload" name="property"
                                                   value="download">
                                            <label for="radioPrimarydownload">
                                                Product download
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <label>
                                                <a target="_new"
                                                   href="https://demo.s-cart.org/sc_admin/product_property" title="New">
                                                    <i class="fa fa-plus" title="Thêm mới"></i>
                                                </a>
                                            </label>
                                        </div>
                                        <div style="margin-top: 10px; display:none" id="download_path">
                                            <input type="text" name="download_path" value=""
                                                   class="form-control input-sm"
                                                   placeholder="Liên kết hoặc đường dẫn tới tập tin">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row kind   ">
                                    <label for="date_available" class="col-sm-2 col-form-label">Ngày bán</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                            <input type="text" data-date-format="yyyy-mm-dd" style="width: 100px;"
                                                   id="date_available" name="date_available" value=""
                                                   class="form-control input-sm date_available date_time hasDatepicker"
                                                   placeholder="yyyy-mm-dd">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row   ">
                                    <label for="minimum" class="col-sm-2 col-form-label">Tối thiểu</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="number" style="width: 100px;" id="minimum" name="minimum"
                                                   value="0" class="form-control input-sm minimum" placeholder="">
                                        </div>
                                        <span class="form-text">
<i class="fa fa-info-circle"></i> Số lượng tối thiểu đề đặt hàng
</span>
                                    </div>
                                </div>
                                <div class="form-group row   ">
                                    <label for="sort" class="col-sm-2 col-form-label">Thứ tự</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="number" style="width: 100px;" id="sort" name="sort" value="0"
                                                   class="form-control input-sm sort" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="status" class="col-sm-2 col-form-label">Trạng thái</label>
                                    <div class="col-sm-8">
                                        <div class="icheckbox_square-blue checked" aria-checked="false"
                                             aria-disabled="false" style="position: relative;"><input class="checkbox"
                                                                                                      type="checkbox"
                                                                                                      name="status"
                                                                                                      checked=""
                                                                                                      style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="approve" class="col-sm-2 col-form-label">Duyệt</label>
                                    <div class="col-sm-8">
                                        <div class="icheckbox_square-blue checked" aria-checked="false"
                                             aria-disabled="false" style="position: relative;"><input class="checkbox"
                                                                                                      type="checkbox"
                                                                                                      name="approve"
                                                                                                      checked=""
                                                                                                      style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                            <ins class="iCheck-helper"
                                                 style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </div>
                                </div>
                                <hr class="kind ">
                                <div class="form-group kind  row">
                                    <div class="col-sm-2">
                                        <label>Thuộc tính (<a target="_new"
                                                              href="https://demo.s-cart.org/sc_admin/attribute_group"><i
                                                    class="fa fa-plus" aria-hidden="true"></i></a>)</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <table width="100%">
                                            <tbody>
                                            <tr>
                                                <td colspan="3"><p><b>Color:</b></p></td>
                                            </tr>
                                            <tr>
                                                <td>Nhập một thuộc tính</td>
                                                <td>Thêm tiền</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><br>
                                                    <button type="button" class="btn btn-flat btn-success add_attribute"
                                                            data-id="1">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                        Thêm thuộc tính
                                                    </button>
                                                    <br><br></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table width="100%">
                                            <tbody>
                                            <tr>
                                                <td colspan="3"><p><b>Size:</b></p></td>
                                            </tr>
                                            <tr>
                                                <td>Nhập một thuộc tính</td>
                                                <td>Thêm tiền</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><br>
                                                    <button type="button" class="btn btn-flat btn-success add_attribute"
                                                            data-id="2">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                        Thêm thuộc tính
                                                    </button>
                                                    <br><br></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer kind   row" id="card-footer">

                                <div class="col-md-8">
                                    <div class="btn-group float-right">
                                        <button type="submit" class="btn btn-primary">Gửi</button>
                                    </div>
                                    <div class="btn-group float-left">
                                        <button type="reset" class="btn btn-warning">Làm lại</button>
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
@section('script')
    <script src="{{asset('backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/ckeditor/adapters/jquery.js')}}"></script>
    <script>
        // Add sub images
        var id_sub_image = 0;
        $('#add_sub_image').click(function(event) {
            id_sub_image +=1;
            $(this).before(
                '<div class="group-image">'
                +'<div class="input-group">'
                +'  <input type="text" id="sub_image_'+id_sub_image+'" name="sub_image[]" value="" class="form-control input-sm sub_image" placeholder=""  />'
                +'  <div class="input-group-append">'
                +'  <span data-input="sub_image_'+id_sub_image+'" data-preview="preview_sub_image_'+id_sub_image+'" data-type="product" class="btn btn-flat btn-primary lfm">'
                +'      <i class="fa fa-image"></i> Chọn hình'
                +'  </span>'
                +' </div>'
                +'<span title="Remove" class="btn btn-flat btn-danger removeImage"><i class="fa fa-times"></i></span>'
                +'</div>'
                +'<div id="preview_sub_image_'+id_sub_image+'" class="img_holder"></div>'
                +'</div>');
            $('.removeImage').click(function(event) {
                $(this).closest('div').remove();
            });
            $('.lfm').filemanager();
        });
        $('.removeImage').click(function(event) {
            $(this).closest('.group-image').remove();
        });
        //end sub images
        CKEDITOR.replace('descriptions[en][content]', {

        });
    </script>
@endsection
