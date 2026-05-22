@extends('adminlte::page')

@section('title', 'إنشاء مدونة')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-bold text-dark">إنشاء مقال جديد</h1>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="fas fa-arrow-right"></i> العودة للمقالات
        </a>
    </div>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="icon fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- عرض أخطاء الـ Validation إن وجدت --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
            <i class="icon fas fa-exclamation-triangle"></i> يرجى التحقق من الأخطاء أدناه.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- سكشن المحتوى العربي --}}
                <div class="card card-primary card-outline shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h3 class="card-title text-bold text-primary">
                            <i class="fas fa-globe-asia text-success mr-1"></i> المحتوى العربي (AR)
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title_ar" class="font-weight-bold">
                                        <i class="fas fa-heading mr-1 text-primary"></i> عنوان المقال (بالعربي)
                                    </label>
                                    <input type="text" name="title_ar" id="title_ar" value="{{ old('title_ar') }}"
                                        class="form-control form-control-lg border-primary-soft text-right"
                                        placeholder="اكتب عنواناً جذاباً بالعربية..." required>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="font-weight-bold">
                                        <i class="fas fa-paragraph mr-1 text-primary"></i> محتوى المقال (بالعربي)
                                    </label>
                                    <div class="border rounded overflow-hidden">
                                        <textarea id="summernote_ar" name="content_ar" required>{{ old('content_ar') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- سكشن المحتوى الإنجليزي --}}
                <div class="card card-info card-outline shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h3 class="card-title text-bold text-info">
                            <i class="fas fa-globe-americas text-info mr-1"></i> المحتوى الإنجليزي (EN)
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title_en" class="font-weight-bold">
                                        <i class="fas fa-heading mr-1 text-info"></i> Blog Title (English)
                                    </label>
                                    <input type="text" name="title_en" id="title_en" value="{{ old('title_en') }}"
                                        class="form-control form-control-lg border-primary-soft text-left" dir="ltr"
                                        placeholder="Write an attractive English title..." required>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label class="font-weight-bold">
                                        <i class="fas fa-paragraph mr-1 text-info"></i> Blog Content (English)
                                    </label>
                                    <div class="border rounded overflow-hidden" dir="ltr">
                                        <textarea id="summernote_en" name="content_en" required>{{ old('content_en') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- سكشن الإعدادات المشتركة والصورة --}}
                <div class="card card-secondary card-outline shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h3 class="card-title text-bold text-secondary">
                            <i class="fas fa-cog mr-1"></i> إعدادات المقال العامة
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image" class="font-weight-bold">
                                        <i class="fas fa-image mr-1 text-primary"></i> الصورة البارزة للمقال
                                    </label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image"
                                            required>
                                        <label class="custom-file-label text-right" for="image">اختر صورة
                                            المقال...</label>
                                    </div>
                                    <small class="text-muted mt-2 d-block">يفضل استخدام أبعاد متناسقة (مثل 1200x630)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white text-right">
                        <button class="btn btn-primary btn-lg px-5 shadow-sm" type="submit">
                            <i class="fas fa-paper-plane mr-1"></i> نشر المقال
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
    <style>
        .custom-file-label::after {
            content: "تصفح";
            left: 0;
            right: auto;
            border-left: none;
            border-right: 1px solid #ced4da;
        }

        .note-editor {
            border: none !important;
        }

        .form-control-lg {
            border-radius: 8px;
            font-size: 1.1rem;
        }

        .border-primary-soft {
            border: 1px solid #dee2e6;
            transition: border-color 0.3s;
        }

        .border-primary-soft:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, .25);
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            // إعدادات الـ Toolbar المشتركة للـ Summernote
            var summernoteToolbar = [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ];

            // تفعيل المحرر العربي
            $('#summernote_ar').summernote({
                height: 350,
                lang: 'ar-AR',
                placeholder: 'ابدأ بكتابة محتوى المقال باللغة العربية هنا...',
                toolbar: summernoteToolbar
            });

            // تفعيل المحرر الإنجليزي
            $('#summernote_en').summernote({
                height: 350,
                placeholder: 'Start writing the English blog content here...',
                toolbar: summernoteToolbar
            });

            // تحديث اسم الملف عند الاختيار
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });

            // التحقق قبل الإرسال من الطرفين
            $('form').on('submit', function(e) {
                var isArEmpty = $('#summernote_ar').summernote('isEmpty');
                var isEnEmpty = $('#summernote_en').summernote('isEmpty');

                if (isArEmpty || isEnEmpty) {
                    alert('المحتوى (العربي والإنجليزي) لا يمكن أن يكون فارغاً');
                    e.preventDefault();
                }
            });
        });
    </script>
@stop
