<!DOCTYPE html>
<html lang="ar" dir="rtl" id="main-html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الكاسر القابضة | Al Kaaser Holding</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .lang-section {
            display: none;
        }

        .lang-section.active {
            display: block;
        }
    </style>
</head>

<body id="main-body">
    <div id="ar-version" class="lang-section active">
        <div class="top-bar">
            <div class="container flex-between">
                <div class="utility-links">
                    <a href="leadership.html">مجلس الإدارة</a>
                    <a href="partners.html">شركاء النجاح</a>
                    <a href="careers.html">الوظائف</a>
                    <a href="contact.html" class="top-contact-link">تواصل معنا</a>
                </div>
                <div class="lang-switch">
                    <a href="javascript:void(0)" onclick="switchLang('en')">English</a> | <strong>العربية</strong>
                </div>
            </div>
        </div>
        <header class="main-header">
            <div class="container nav-wrap">
                <div class="brand" onclick="location.reload()">
                    <img src="{{asset('images/logo.png')}}" alt="الكاسر" class="main-logo">
                    <div class="brand-text-container">
                        <span class="company-name">الكاسر القابضة</span>
                        <span class="company-sub">AL KAASER HOLDING</span>
                    </div>
                </div>
                <div class="menu-toggle" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars"></i>
                </div>
                <nav class="main-nav">
                    <ul class="nav-menu">
                        <li><a href="/">الرئيسية</a></li>
                        <li><a href="about.html">الكاسر القابضة</a></li>
                        <li><a href="history.html">قيمنا وتاريخنا</a></li>
                        <li><a href="leadership.html">مجلس الإدارة</a></li>
                        <li><a href="sustainability.html">الاستدامة</a></li>
                        <li><a href="contact.html">تواصل معنا</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="side-nav" class="mobile-sidebar">
            <div class="sidebar-header">
                <img src="{{asset('images/logo.png')}}" alt="Logo" width="50">
                <i class="fas fa-times" onclick="toggleMobileMenu()"></i>
            </div>
            <ul class="sidebar-links">
                <li><a href="/">الرئيسية</a></li>
                <li><a href="about.html">الكاسر القابضة</a></li>
                <li><a href="contact.html">تواصل معنا</a></li>
                <li><a href="history.html">قيمنا وتاريخنا</a></li>
                <li><a href="leadership.html">مجلس الإدارة</a></li>
            </ul>
        </div>
        <div id="overlay" class="menu-overlay" onclick="toggleMobileMenu()"></div>
        <section class="hero-slider ">
            <div class="slide active"
                style="background-image: url('https://static.myconnect.ae/-/media/yasconnect/project/ppad/plan-your-visit/famous-landmarks/article-qaw1.jpg');">
                <div class="hero-overlay">
                    <div class="container">
                        <div class="hero-content">
                            <span class="hero-badge">شريكك الموثوق</span>
                            <h1>طاقة الاستثمار <br> تفتح آفاق المستقبل</h1>
                            <p>نستثمر في القوى البشرية ونبتكر الحلول لمد جسور التواصل بين القطاعين العام والخاص في دولة
                                الإمارات.</p>
                            <div class="hero-actions">
                                <button class="btn-gold-pro" onclick="location.href='#business'">اكتشف شركاتنا</button>
                                <button class="btn-outline-pro" onclick="location.href='#contact'">تواصل معنا</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1582672060674-bc2bd808a8b5?auto=format&fit=crop&w=1920&q=80');">
                <div class="hero-overlay">
                    <div class="container">
                        <div class="hero-content">
                            <span class="hero-badge">الاستدامة والبيئة</span>
                            <h1>نحو مستقبل <br> أخضر ومستدام</h1>
                            <p>نلتزم في الكاسر القابضة بتطبيق أعلى معايير الاستدامة البيئية والنمو الأخضر منخفض الكربون.
                            </p>
                            <div class="hero-actions">
                                <button class="btn-gold-pro" onclick="location.href='sustainability.html'">تقرير
                                    الاستدامة</button>
                                <button class="btn-outline-pro" onclick="location.href='#about'">رؤيتنا</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1920&q=80');">
                <div class="hero-overlay">
                    <div class="container">
                        <div class="hero-content">
                            <span class="hero-badge">الابتكار الرقمي</span>
                            <h1>الذكاء الاصطناعي <br> يقود استثماراتنا</h1>
                            <p>عبر "ديجيتال هاب"، نقدم حلولاً تقنية متطورة لتعزيز كفاءة الأعمال والتحول الرقمي الشامل.
                            </p>
                            <div class="hero-actions">
                                <button class="btn-gold-pro" onclick="location.href='#innovation'">حلولنا
                                    التقنية</button>
                                <button class="btn-outline-pro" onclick="location.href='#business'">قطاعاتنا</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-context-card">
                <div class="context-img">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=200&q=80"
                        alt="Innovation">
                </div>
                <div class="context-text">
                    <h4>إطلاق إمكانات الذكاء الاصطناعي</h4>
                    <p>حلولنا التقنية في ديجيتال هاب</p>
                </div>
            </div>
            <div class="slider-indicators">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </section>

<section class="blog-details-section">
    <div class="blog-container">
        <!-- زر العودة لجميع المقالات -->
        <div class="back-to-blogs">
            <a href="{{ route('blog.index') }}" class="back-btn">
                <i class="fas fa-arrow-right"></i> العودة للمدونة
            </a>
        </div>

        <div class="blog-details-grid">
            {{-- سكشن المقال الرئيسي --}}
            <main class="blog-main-content">
                <article class="blog-post-full">
                    <header class="post-header">
                        <span class="post-date-badge">
                            <i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d M, Y') }}
                        </span>
                        <h1 class="post-main-title">{{ $post->title_ar }}</h1>
                        <div class="post-divider"></div>
                    </header>

                    {{-- صورة المقال الرئيسية --}}
                    <div class="post-hero-image">
                        <img src="{{ Str::startsWith($post->image, ['http://', 'https://']) ? $post->image : asset('storage/' . $post->image) }}" 
                             alt="{{ $post->title_ar }}">
                    </div>

                    {{-- محتوى المقال الكامل القادم من الـ Summernote --}}
                    <div class="post-body-content">
                        {!! $post->content_ar !!}
                    </div>
                </article>
            </main>
        </div>
    </div>

    <style>
        /* الألوان الثابتة الخاصة ببراند موقعك */
        :root {
            --primary: #004685;
            --accent: #d4af37;
            --dark: #0c0c0c;
            --gray-bg: #f8f9fb;
            --white: #ffffff;
            --text-color: #444444;
            --border-color: #eef1f6;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }

        /* تنسيق السكشن العام ثابت دائماً RTL ومريح للعين */
        .blog-details-section {
            background-color: var(--gray-bg);
            padding: 60px 20px;
            direction: rtl;
            font-family: 'Cairo', sans-serif, tahoma; /* يدعم الخطوط العربية بشكل ممتاز */
            color: var(--text-color);
        }

        .blog-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* زر العودة للرئيسية */
        .back-to-blogs {
            margin-bottom: 30px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--primary);
            text-decoration: none;
            font-weight: bold;
            font-size: 15px;
            transition: var(--transition);
        }

        .back-btn:hover {
            color: var(--accent);
            transform: translateX(-5px); /* حركة خفيفة جهة اليمين مع الـ RTL */
        }

        /* تقسيم الصفحة (محتوى + شريط جانبي) */
        .blog-details-grid {
            display: grid;
            grid-template-columns: 2.5fr 1fr;
            gap: 40px;
        }

        /* كارت المقال الرئيسي */
        .blog-post-full {
            background-color: var(--white);
            border-radius: 16px;
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .post-header {
            margin-bottom: 25px;
        }

        .post-date-badge {
            display: inline-block;
            color: var(--accent);
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .post-main-title {
            color: var(--dark);
            font-size: 32px;
            line-height: 1.5;
            margin: 0 0 15px 0;
        }

        .post-divider {
            width: 80px;
            height: 4px;
            background-color: var(--primary);
            border-radius: 2px;
        }

        /* صورة الـ Hero للمقال */
        .post-hero-image {
            width: 100%;
            height: 450px;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 35px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }

        .post-hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* تنسيق محتوى الـ Summernote */
        .post-body-content {
            font-size: 17px;
            line-height: 1.8;
            color: #333;
        }

        .post-body-content p {
            margin-bottom: 20px;
        }

        .post-body-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 15px 0;
        }

        /* استايل الشريط الجانبي */
        .blog-sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .sidebar-widget {
            background-color: var(--white);
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--shadow);
        }

        .widget-title {
            color: var(--dark);
            font-size: 20px;
            margin: 0 0 10px 0;
            font-weight: bold;
        }

        .widget-divider {
            width: 50px;
            height: 3px;
            background-color: var(--accent);
            margin-bottom: 25px;
            border-radius: 2px;
        }

        /* قائمة المقالات الجانبية */
        .recent-posts-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .recent-post-item {
            display: flex;
            gap: 15px;
            align-items: center;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .recent-post-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .recent-thumb {
            width: 80px;
            height: 60px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .recent-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .recent-details {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .recent-date {
            font-size: 12px;
            color: #999;
        }

        .recent-title {
            margin: 0;
            font-size: 14px;
            line-height: 1.5;
        }

        .recent-title a {
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
        }

        .recent-title a:hover {
            color: var(--primary);
        }

        .no-recent {
            color: #888;
            font-size: 14px;
            text-align: center;
        }

        /* التجاوب والتوافق مع الشاشات المختلفة */
        @media (max-width: 992px) {
            .blog-details-grid {
                grid-template-columns: 1fr;
            }
            .blog-sidebar {
                margin-top: 20px;
            }
        }

        @media (max-width: 576px) {
            .blog-post-full {
                padding: 20px;
            }
            .post-main-title {
                font-size: 24px;
            }
            .post-hero-image {
                height: 260px;
            }
        }
    </style>
</section>
        <footer class="main-footer">
            <div class="container footer-grid-wrap">
                <div class="footer-column">
                    <h4>المركز الإعلامي</h4>
                    <ul>
                        <li><a href="#">البيانات الصحفية</a></li>
                        <li><a href="#">مكتبة الصور والفيديو</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>روابط سريعة</h4>
                    <ul>
                        <li><a href="#">شركاؤنا</a></li>
                        <li><a href="#">الموردون</a></li>
                        <li><a href="#">تنبيه من الاحتيال</a></li>
                        <li><a href="privacy.html">سياسة الخصوصية</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>استكشف الكاسر</h4>
                    <ul>
                        <li><a href="about.html">عن المجموعة</a></li>
                        <li><a href="history.html">قيمنا وتاريخنا</a></li>
                        <li><a href="leadership.html">مجلس الإدارة</a></li>
                        <li><a href="sustainability.html">الاستدامة والتحول</a></li>
                    </ul>
                </div>
                <div class="footer-column brand-info-col">
                    <img src="{{asset('images/logo.png')}}" alt="Al Kaaser Logo" class="footer-logo">
                    <h3>شركة الكاسر القابضة</h3>
                    <div class="contact-details">
                        <p><i class="fas fa-envelope"></i> info@alkaaser.ae</p>
                        <p><i class="fas fa-map-marker-alt"></i> أبوظبي، الإمارات العربية المتحدة</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-bar">
                <div class="container flex-between mobile-column">
                    <p>© 2024 الكاسر القابضة. جميع الحقوق محفوظة.</p>
                    <div class="social-icons-wrap">
                        <a href="#" class="social-circle"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <a href="javascript:void(0)" onclick="switchLang('en')" class="lang-float-btn" title="Switch to English">
            <i class="fas fa-language"></i>
            <span>EN</span>
        </a>
    </div>
    <div id="en-version" class="lang-section">
        <div class="top-bar">
            <div class="container flex-between">
                <div class="utility-links">
                    <a href="leadership.html">Board of Directors</a>
                    <a href="partners.html">Success Partners</a>
                    <a href="careers.html">Careers</a>
                    <a href="contact.html" class="top-contact-link">Contact Us</a>
                </div>
                <div class="lang-switch">
                    <a href="javascript:void(0)" onclick="switchLang('ar')">العربية</a> | <strong>English</strong>
                </div>
            </div>
        </div>
        <header class="main-header">
            <div class="container nav-wrap">
                <div class="brand" onclick="location.reload()">
                    <img src="{{asset('images/logo.png')}}" alt="Al Kaaser" class="main-logo">
                    <div class="brand-text-container">
                        <span class="company-name">Al Kaaser Holding</span>
                        <span class="company-sub">AL KAASER HOLDING</span>
                    </div>
                </div>
                <div class="menu-toggle" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars"></i>
                </div>
                <nav class="main-nav">
                    <ul class="nav-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="about.html">About Al Kaaser</a></li>
                        <li><a href="history.html">Values & History</a></li>
                        <li><a href="leadership.html">Board of Directors</a></li>
                        <li><a href="sustainability.html">Sustainability</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="side-nav" class="mobile-sidebar">
            <div class="sidebar-header">
                <img src="{{asset('images/logo.png')}}" alt="Logo" width="50">
                <i class="fas fa-times" onclick="toggleMobileMenu()"></i>
            </div>
            <ul class="sidebar-links">
                <li><a href="/">Home</a></li>
                <li><a href="about.html">Al Kaaser Holding</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="history.html">Values & History</a></li>
                <li><a href="leadership.html">Board of Directors</a></li>
            </ul>
        </div>
        <div id="overlay" class="menu-overlay" onclick="toggleMobileMenu()"></div>
        <section class="hero-slider">
            <div class="slide active"
                style="background-image: url('https://static.myconnect.ae/-/media/yasconnect/project/ppad/plan-your-visit/famous-landmarks/article-qaw1.jpg');">
                <div class="hero-overlay">
                    <div class="container">
                        <div class="hero-content">
                            <span class="hero-badge">Your Trustworthy Partner</span>
                            <h1>Investment Energy <br> Unlocking the Future</h1>
                            <p>We invest in human capital and innovate solutions to bridge the gap between public and
                                private sectors in the UAE.</p>
                            <div class="hero-actions">
                                <button class="btn-gold-pro" onclick="location.href='#business'">Explore Our
                                    Companies</button>
                                <button class="btn-outline-pro" onclick="location.href='#contact'">Contact Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1582672060674-bc2bd808a8b5?auto=format&fit=crop&w=1920&q=80');">
                <div class="hero-overlay">
                    <div class="container">
                        <div class="hero-content">
                            <span class="hero-badge">Sustainability & Environment</span>
                            <h1>Towards a Green <br> and Sustainable Future</h1>
                            <p>At Al Kaaser Holding, we are committed to the highest standards of environmental
                                sustainability and low-carbon green growth.</p>
                            <div class="hero-actions">
                                <button class="btn-gold-pro"
                                    onclick="location.href='sustainability-en.html'">Sustainability Report</button>
                                <button class="btn-outline-pro" onclick="location.href='#about'">Our Vision</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1920&q=80');">
                <div class="hero-overlay">
                    <div class="container">
                        <div class="hero-content">
                            <span class="hero-badge">Digital Innovation</span>
                            <h1>Artificial Intelligence <br> Driving Our Investments</h1>
                            <p>Through "Digital Hub", we provide advanced technical solutions to enhance business
                                efficiency and comprehensive digital transformation.</p>
                            <div class="hero-actions">
                                <button class="btn-gold-pro" onclick="location.href='#innovation'">Our Tech
                                    Solutions</button>
                                <button class="btn-outline-pro" onclick="location.href='#business'">Our
                                    Sectors</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-context-card">
                <div class="context-img">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&w=200&q=80"
                        alt="Innovation">
                </div>
                <div class="context-text">
                    <h4>Unlocking AI Potential</h4>
                    <p>Our technical solutions at Digital Hub</p>
                </div>
            </div>
            <div class="slider-indicators">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </section>

        <section class="blog-details-section">
            <div class="blog-container">
                <!-- زر العودة لجميع المقالات -->
                <div class="back-to-blogs">
                    <a href="{{ route('blog.index') }}" class="back-btn">
                        <i class="fas fa-arrow-right"></i> Back to Blog
                    </a>
                </div>

                <div class="blog-details-grid">
                    {{-- سكشن المقال الرئيسي (يسار) --}}
                    <main class="blog-main-content">
                        <article class="blog-post-full">
                            <header class="post-header">
                                <span class="post-date-badge">
                                    <i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d M, Y') }}
                                </span>
                                <h1 class="post-main-title">{{ $post->title_ar }}</h1>
                                <div class="post-divider"></div>
                            </header>

                            {{-- صورة المقال الرئيسية --}}
                            <div class="post-hero-image">
                                <img src="{{ Str::startsWith($post->image, ['http://', 'https://']) ? $post->image : asset('storage/' . $post->image) }}"
                                    alt="{{ $post->title_ar }}">
                            </div>

                            {{-- محتوى المقال الكامل القادم من الـ Summernote --}}
                            <div class="post-body-content">
                                {!! $post->content_ar !!}
                            </div>
                        </article>
                    </main>
        </div>
    </div>

    <style>
        /* الألوان الثابتة الخاصة ببراند موقعك */
        :root {
            --primary: #004685;
            --accent: #d4af37;
            --dark: #0c0c0c;
            --gray-bg: #f8f9fb;
            --white: #ffffff;
            --text-color: #444444;
            --border-color: #eef1f6;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }

        /* تنسيق السكشن العام ثابت دائماً RTL ومريح للعين */
        .blog-details-section {
            background-color: var(--gray-bg);
            padding: 60px 20px;
            direction: rtl;
            font-family: sans-serif;
            color: var(--text-color);
        }

        .blog-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* زر العودة للرئيسية */
        .back-to-blogs {
            margin-bottom: 30px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--primary);
            text-decoration: none;
            font-weight: bold;
            font-size: 15px;
            transition: var(--transition);
        }

        .back-btn:hover {
            color: var(--accent);
            transform: translateX(-3px);
        }

        /* تقسيم الصفحة (محتوى + شريط جانبي) */
        .blog-details-grid {
            display: grid;
            grid-template-columns: 2.5fr 1fr;
            gap: 40px;
        }

        /* كارت المقال الرئيسي */
        .blog-post-full {
            background-color: var(--white);
            border-radius: 16px;
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .post-header {
            margin-bottom: 25px;
        }

        .post-date-badge {
            display: inline-block;
            color: var(--accent);
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .post-main-title {
            color: var(--dark);
            font-size: 34px;
            line-height: 1.4;
            margin: 0 0 15px 0;
        }

        .post-divider {
            width: 80px;
            height: 4px;
            background-color: var(--primary);
            border-radius: 2px;
        }

        /* صورة الـ Hero */
        .post-hero-image {
            width: 100%;
            height: 450px;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 35px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }

        .post-hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* تنسيق محتوى الـ Summernote الخارج من قاعدة البيانات */
        .post-body-content {
            font-size: 17px;
            line-height: 1.8;
            color: #333;
        }

        .post-body-content p {
            margin-bottom: 20px;
        }

        .post-body-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 15px 0;
        }

        /* استايل الشريط الجانبي */
        .blog-sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .sidebar-widget {
            background-color: var(--white);
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--shadow);
        }

        .widget-title {
            color: var(--dark);
            font-size: 20px;
            margin: 0 0 10px 0;
            font-weight: bold;
        }

        .widget-divider {
            width: 50px;
            height: 3px;
            background-color: var(--accent);
            margin-bottom: 25px;
            border-radius: 2px;
        }

        /* قائمة المقالات الجانبية */
        .recent-posts-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .recent-post-item {
            display: flex;
            gap: 15px;
            align-items: center;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .recent-post-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .recent-thumb {
            width: 80px;
            height: 60px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .recent-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .recent-details {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .recent-date {
            font-size: 12px;
            color: #999;
        }

        .recent-title {
            margin: 0;
            font-size: 14px;
            line-height: 1.4;
        }

        .recent-title a {
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
        }

        .recent-title a:hover {
            color: var(--primary);
        }

        .no-recent {
            color: #888;
            font-size: 14px;
            text-align: center;
        }

        /* التجاوب مع الشاشات المتنوعة والأجهزة المحمولة */
        @media (max-width: 992px) {
            .blog-details-grid {
                grid-template-columns: 1fr;
            }
            .blog-sidebar {
                margin-top: 20px;
            }
        }

        @media (max-width: 576px) {
            .blog-post-full {
                padding: 20px;
            }
            .post-main-title {
                font-size: 24px;
            }
            .post-hero-image {
                height: 260px;
            }
        }
    </style>
</section>


        <footer class="main-footer">
            <div class="container footer-grid-wrap">
                <div class="footer-column">
                    <h4>Media Center</h4>
                    <ul>
                        <li><a href="#">Press Releases</a></li>
                        <li><a href="#">Photo & Video Library</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">Suppliers</a></li>
                        <li><a href="#">Fraud Alert</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Explore Al Kaaser</h4>
                    <ul>
                        <li><a href="about.html">About the Group</a></li>
                        <li><a href="history.html">Values & History</a></li>
                        <li><a href="leadership.html">Board of Directors</a></li>
                        <li><a href="sustainability.html">Sustainability & Transformation</a></li>
                    </ul>
                </div>
                <div class="footer-column brand-info-col">
                    <img src="{{asset('images/logo.png')}}" alt="Al Kaaser Logo" class="footer-logo">
                    <h3>Al Kaaser Holding Company</h3>
                    <div class="contact-details">
                        <p><i class="fas fa-envelope"></i> info@alkaaser.ae</p>
                        <p><i class="fas fa-map-marker-alt"></i> Abu Dhabi, United Arab Emirates</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-bar">
                <div class="container flex-between mobile-column">
                    <p>© 2024 Al Kaaser Holding. All Rights Reserved.</p>
                    <div class="social-icons-wrap">
                        <a href="#" class="social-circle"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <a href="javascript:void(0)" onclick="switchLang('ar')" class="lang-float-btn" title="Switch to Arabic">
            <i class="fas fa-language"></i>
            <span>AR</span>
        </a>
    </div>
    <script>
        function switchLang(lang) {
            const body = document.getElementById('main-body');
            const html = document.getElementById('main-html');
            const arSection = document.getElementById('ar-version');
            const enSection = document.getElementById('en-version');

            if (lang === 'en') {
                arSection.classList.remove('active');
                enSection.classList.add('active');
                html.setAttribute('lang', 'en');
                html.setAttribute('dir', 'ltr');
                body.classList.add('en-version');
            } else {
                enSection.classList.remove('active');
                arSection.classList.add('active');
                html.setAttribute('lang', 'ar');
                html.setAttribute('dir', 'rtl');
                body.classList.remove('en-version');
            }

            // 1. حفظ اللغة الحالية في الـ Local Storage
            localStorage.setItem('selectedLang', lang);

            window.scrollTo(0, 0);
        }

        // 2. الكود ده بيتنفذ تلقائيًا أول ما الصفحة تفتح
        document.addEventListener("DOMContentLoaded", function() {
            // بنشوف لو فيه لغة متسجلة قبل كده، لو مفيش بنخلي الافتراضي 'ar' (عربي)
            const savedLang = localStorage.getItem('selectedLang') || 'ar';

            // بنشغل الدالة باللغة اللي لقيناها
            switchLang(savedLang);
        });
    </script>
    <script src="{{asset('script.js')}}"></script>
</body>

</html>

