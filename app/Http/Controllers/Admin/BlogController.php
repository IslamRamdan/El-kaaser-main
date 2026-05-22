<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        // تعديل الـ Validation ليشمل اللغتين للعنوان والمحتوى
        $request->validate([
            'title_ar'   => 'required|string|max:255',
            'title_en'   => 'required|string|max:255',
            'content_ar' => 'required',
            'content_en' => 'required',
            'image'      => 'nullable|image', // تحديث بسيط للأمان
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('blogs', 'public');
        }

        // تخزين البيانات للغتين
        BlogPost::create([
            'title_ar'   => $request->title_ar,
            'title_en'   => $request->title_en,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en,
            'image'      => $image,
        ]);

        return redirect()->back()->with('success', 'تم إنشاء المقال بنجاح');
    }

    public function index()
    {
        $blogs = BlogPost::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function edit($id)
    {
        $blog = BlogPost::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = BlogPost::findOrFail($id);

        // تعديل الـ Validation في التحديث أيضاً
        $request->validate([
            'title_ar'   => 'required|string|max:255',
            'title_en'   => 'required|string|max:255',
            'content_ar' => 'required',
            'content_en' => 'required',
            'image'      => 'nullable|image',
        ]);

        $image = $blog->image;

        if ($request->hasFile('image')) {
            // حركة احترافية: حذف الصورة القديمة من السيرفر لو رفع صورة جديدة عشان المساحة
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $image = $request->file('image')->store('blogs', 'public');
        }

        // تحديث الحقول الجديدة
        $blog->update([
            'title_ar'   => $request->title_ar,
            'title_en'   => $request->title_en,
            'content_ar' => $request->content_ar,
            'content_en' => $request->content_en,
            'image'      => $image,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'تم تحديث المقال بنجاح');
    }

    public function destroy($id)
    {
        $blog = BlogPost::findOrFail($id);

        // تعديل بسيط للتأكد من وجود الملف فعلياً قبل الحذف
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'تم حذف المقال بنجاح');
    }

    public function indexp()
    {
        $blogs = BlogPost::latest()->get();
        return view('mdwna', compact('blogs'));
    }

    public function show($id)
    {
        $post = BlogPost::findOrFail($id);

        // الكود اللي كنت عامله كومنت (تجنب عرض نفس المقال الحالي في الجانبي) أفضل بكتير، شغلتهولك
        $blogs = BlogPost::where('id', '!=', $post->id)
            ->latest()
            ->take(5)
            ->get();

        return view('admin.blog.show', compact('post', 'blogs'));
    }
}
