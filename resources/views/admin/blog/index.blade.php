@extends('adminlte::page')

@section('title', 'عرض المدونات')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-bold text-dark">عرض جميع المقالات</h1>
        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus-circle"></i> إضافة مقال جديد
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

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th style="width: 50px" class="text-center">#</th>
                        <th style="width: 100px">الصورة</th>
                        <th>العنوان</th>
                        <th class="d-none d-md-table-cell">المحتوى الأخير</th>
                        <th class="text-center" style="width: 150px">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td class="text-center align-middle font-weight-bold">{{ $loop->iteration }}</td>

                            <td class="align-middle">
                                @if ($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="rounded shadow-sm border"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center rounded border text-muted"
                                        style="width: 60px; height: 60px; font-size: 10px; text-align: center;">
                                        <i class="fas fa-image mb-1 d-block"></i> لا توجد صورة
                                    </div>
                                @endif
                            </td>

                            {{-- جلب العنوان بناءً على لغة الموقع الحالية مع إظهار شارات اللغات المتاحة --}}
                            <td class="align-middle text-bold text-primary">
                                <div>
                                    {{ app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title_en }}
                                </div>
                                <div class="mt-1">
                                    <span class="badge badge-success-soft text-xs font-weight-normal"><i
                                            class="fas fa-check-circle text-success mr-1"></i> عربي</span>
                                    <span class="badge badge-info-soft text-xs font-weight-normal"><i
                                            class="fas fa-check-circle text-info mr-1"></i> إنجليزي</span>
                                </div>
                            </td>

                            {{-- جلب مقتطف من المحتوى بناءً على لغة الموقع الحالية وتنظيف الـ HTML tags --}}
                            <td class="align-middle d-none d-md-table-cell">
                                <small class="text-muted text-wrap-limit">
                                    @php
                                        $currentContent =
                                            app()->getLocale() == 'ar' ? $blog->content_ar : $blog->content_en;
                                    @endphp
                                    {{ \Illuminate\Support\Str::limit(strip_tags($currentContent), 100) }}
                                </small>
                            </td>

                            <td class="text-center align-middle">
                                <div class="btn-group">
                                    <a href="{{ route('admin.blog.edit', $blog->id) }}"
                                        class="btn btn-sm btn-outline-info mr-1" title="تعديل">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST"
                                        onsubmit="return confirm('هل أنت متأكد من حذف هذا المقال نهائياً؟');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="حذف">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if ($blogs->isEmpty())
            <div class="card-footer text-center py-4 bg-white">
                <i class="fas fa-folder-open fa-3x text-muted mb-2"></i>
                <p class="text-muted mb-0">لا توجد مقالات مضافة حتى الآن.</p>
            </div>
        @endif
    </div>

@stop

@section('css')
    <style>
        .table td,
        .table th {
            vertical-align: middle;
        }

        .btn-group form {
            display: inline-block;
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
        }

        /* تنسيق الشارات الناعمة اللطيفة للغات */
        .badge-success-soft {
            background-color: rgba(40, 167, 69, 0.1);
            color: #28a745;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .badge-info-soft {
            background-color: rgba(23, 162, 184, 0.1);
            color: #17a2b8;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .text-wrap-limit {
            display: block;
            max-width: 400px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@stop
