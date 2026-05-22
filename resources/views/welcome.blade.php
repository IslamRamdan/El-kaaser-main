<!DOCTYPE html>
<html lang="ar" dir="rtl" id="main-html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الكاسر القابضة | Al Kaaser Holding</title>
    <link rel="stylesheet" href="style.css">
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
                    <img src="images/logo.png" alt="الكاسر" class="main-logo">
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
                <img src="images/logo.png" alt="Logo" width="50">
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

        <section id="about" class="section-padding container">
            <div class="vision-grid reveal">
                <div class="vision-text reveal-right delay-1">
                    <span class="sub-badge">من نحن</span>
                    <h2>الكاسر القابضة: الشركة الأم</h2>
                    <p>مجموعة شركات ومؤسسات مقرها الرئيسي في قلب العاصمة أبوظبي بدولة الإمارات العربية المتحدة. نحن
                        متخصصون في إدارة الشركات، استثمار الأموال، والبتروكيماويات، ونعمل برؤية استراتيجية لخلق فرص
                        استثمارية وتجارية عالمية.</p>
                    <div class="mission-mission-box">
                        <div class="mini-card">
                            <h3><i class="fas fa-eye"></i> الرؤية</h3>
                            <p>الاستثمار في الإنسان ودعم الإبداع والابتكار، وبناء المستقبل، ومد جسور التواصل بين
                                القطاعين العام والخاص لغد أفضل.</p>
                        </div>
                        <div class="mini-card">
                            <h3><i class="fas fa-rocket"></i> الرسالة</h3>
                            <p>طموحنا لا يحد، نسعى لتوفير أفضل الحلول المبتكرة وتحقيق أعلى معايير الاستدامة وبناء علاقات
                                دولية تدعم الاقتصاد.</p>
                        </div>
                    </div>
                </div>
                <div class="vision-image reveal-left delay-2">
                    <video autoplay muted loop playsinline class="vision-video">
                        <source src="Video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="goals-bar reveal delay-3">
                <div class="goal-item"><i class="fas fa-chart-line"></i><span>تطوير الأعمال والبحث الدائم عن أحدث
                        التقنيات</span></div>
                <div class="goal-item"><i class="fas fa-handshake"></i><span>تسهيل الشركات وتعزيز النمو الاقتصادي
                        المحلي والدولي</span></div>
            </div>
            <div class="subsidiaries-section reveal delay-4">
                <div class="section-header-right">
                    <h3>شركات المجموعة</h3>
                    <p>تندرج تحت مظلة الكاسر القابضة 15 شركة ومؤسسة رائدة:</p>
                </div>
                <div class="companies-grid">
                    <div class="company-tag">إمارات الخير لصناديق الاستثمار</div>
                    <div class="company-tag">بوابة التواصل لخدمات الأعمال</div>
                    <div class="company-tag">بوابة السواعد الخضراء للعقارات</div>
                    <div class="company-tag">الكاسر لإدارة المدارس</div>
                    <div class="company-tag">الكاسر لتطوير المستشفيات</div>
                    <div class="company-tag">مركز ريل تايم للأمن والتدريب</div>
                    <div class="company-tag">بوابة السواعد الخضراء للتجارة</div>
                </div>
            </div>
        </section>
        <section class="adnoc-stats-section">
            <div class="fixed-gradient-overlay">
                <div class="container adnoc-grid">
                    <div class="adnoc-stats-info">
                        <span class="hero-badge">أرقام وإنجازات</span>
                        <h2>نصنع الفرق <br> في كل قطاع</h2>
                        <p>تلتزم الكاسر القابضة بدفع عجلة الابتكار والنمو الاقتصادي في دولة الإمارات، عبر محفظة
                            استثمارية متنوعة تخدم رؤية المستقبل.</p>
                    </div>
                    <div class="adnoc-numbers-list">
                        <div class="adnoc-stat-card">
                            <div class="adnoc-icon-box"><i class="fas fa-layer-group"></i></div>
                            <div class="adnoc-num-wrap"><span class="big-num">15</span>
                                <div class="stat-title">شركة تابعة</div>
                                <p class="stat-desc">تعمل في 5 قطاعات اقتصادية حيوية</p>
                            </div>
                        </div>
                        <div class="adnoc-stat-card">
                            <div class="adnoc-icon-box"><i class="fas fa-chart-line"></i></div>
                            <div class="adnoc-num-wrap"><span class="big-num">2030</span>
                                <div class="stat-title">رؤية مستدامة</div>
                                <p class="stat-desc">نساهم في تحقيق أهداف رؤية الإمارات</p>
                            </div>
                        </div>
                        <div class="adnoc-stat-card">
                            <div class="adnoc-icon-box"><i class="fas fa-microchip"></i></div>
                            <div class="adnoc-num-wrap"><span class="big-num">100%</span>
                                <div class="stat-title">حلول مبتكرة</div>
                                <p class="stat-desc">التزام تام بمعايير الجودة والتميز المؤسسي</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-section">
            <div class="blog-container">
                <div class="blog-header">
                    <span class="sub-title">أحدث المقالات</span>
                    <h2>مدونتنا التعليمية والثقافية</h2>
                    <div class="divider"></div>
                </div>

                <div class="blog-grid">
                    @forelse($posts as $post)
                        <article class="blog-card">
                            <div class="card-image">
                                <!-- للتأكد من عرض الصورة سواء كانت رابط كامل أو مرفوعة على السيرفر -->
                                <img src="{{ Str::startsWith($post->image, ['http://', 'https://']) ? $post->image : asset('storage/' . $post->image) }}"
                                    alt="{{ $post->title }}">
                            </div>
                            <div class="card-content">
                                <span class="card-date">{{ $post->created_at->format('d M, Y') }}</span>
                                <h3 class="card-title">
                                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title_ar }}</a>
                                </h3>
                                <p class="card-excerpt">
                                    {{ Str::limit(strip_tags($post->content_ar), 120, '...') }}
                                </p>
                                <a href="{{ route('blog.show', $post->id) }}" class="read-more-btn">
                                    اقرأ المزيد
                                    <i class="fas fa-arrow-left"></i> <!-- لو بتستخدم FontAwesome -->
                                </a>
                            </div>
                        </article>
                    @empty
                        <div class="no-posts">
                            <p>لا توجد مقالات متاح حالياً.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <style>
                /* الألوان الأساسية اللي أنت بعتها */
                :root {
                    --primary: #004685;
                    --accent: #d4af37;
                    --dark: #0c0c0c;
                    --gray-bg: #f8f9fb;
                    --white: #ffffff;
                    --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                    --transition: all 0.3s ease;
                }

                /* تنسيق السكشن العام */
                .blog-section {
                    background-color: var(--gray-bg);
                    padding: 80px 20px;
                    direction: rtl;
                    /* يدعم اللغة العربية */
                    font-family: sans-serif;
                    /* تقدر تغير الخط لـ Tajawal أو Cairo */
                }

                .blog-container {
                    max-width: 1200px;
                    margin: 0 auto;
                }

                /* الهيدر الخاص بالسكشن */
                .blog-header {
                    text-align: center;
                    margin-bottom: 50px;
                }

                .blog-header .sub-title {
                    color: var(--accent);
                    font-weight: bold;
                    text-transform: uppercase;
                    font-size: 14px;
                    letter-spacing: 1px;
                    display: block;
                    margin-bottom: 10px;
                }

                .blog-header h2 {
                    color: var(--dark);
                    font-size: 32px;
                    margin: 0;
                }

                .blog-header .divider {
                    width: 60px;
                    height: 3px;
                    background-color: var(--primary);
                    margin: 15px auto 0;
                    border-radius: 2px;
                }

                /* شبكة عرض المقالات */
                .blog-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
                    gap: 30px;
                }

                /* كارت المدونة */
                .blog-card {
                    background-color: var(--white);
                    border-radius: 12px;
                    overflow: hidden;
                    box-shadow: var(--shadow);
                    transition: var(--transition);
                    display: flex;
                    flex-direction: column;
                }

                .blog-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
                }

                /* صورة الكارت */
                .card-image {
                    position: relative;
                    height: 220px;
                    overflow: hidden;
                }

                .card-image img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: var(--transition);
                }

                .blog-card:hover .card-image img {
                    transform: scale(1.05);
                }

                /* محتوى الكارت */
                .card-content {
                    padding: 25px;
                    display: flex;
                    flex-direction: column;
                    flex-grow: 1;
                }

                .card-date {
                    color: #888;
                    font-size: 13px;
                    margin-bottom: 10px;
                }

                .card-title {
                    margin: 0 0 12px 0;
                    font-size: 20px;
                    line-height: 1.4;
                }

                .card-title a {
                    color: var(--dark);
                    text-decoration: none;
                    transition: var(--transition);
                }

                .card-title a:hover {
                    color: var(--primary);
                }

                .card-excerpt {
                    color: #555;
                    font-size: 15px;
                    line-height: 1.6;
                    margin: 0 0 20px 0;
                    flex-grow: 1;
                }

                /* زر اقرأ المزيد */
                .read-more-btn {
                    color: var(--primary);
                    text-decoration: none;
                    font-weight: bold;
                    font-size: 14px;
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    align-self: flex-start;
                    transition: var(--transition);
                }

                .read-more-btn:hover {
                    color: var(--accent);
                }

                /* في حالة عدم وجود مقالات */
                .no-posts {
                    grid-column: 1 / -1;
                    text-align: center;
                    padding: 40px;
                    color: #666;
                }

                /* التجاوب مع الشاشات الصغيرة جداً */
                @media (max-width: 480px) {
                    .blog-grid {
                        grid-template-columns: 1fr;
                    }

                    .blog-header h2 {
                        font-size: 26px;
                    }
                }
            </style>
        </section>
        <section id="business" class="section-padding container">
            <div class="section-title">
                <span class="sub-badge" style="text-align: center;">محفظتنا الاستثمارية</span>
                <h2 style="text-align: center;">قطاعاتنا وشركاتنا</h2>
                <div class="line-center"></div>
            </div>
            <div class="sectors-grid">
                <div class="sector-card reveal delay-1">
                    <div class="sector-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>المال والاستثمار</h3>
                    <ul>
                        <li>شركة إمارات الخير لصناديق الاستثمار</li>
                        <li>شركة أفرو أكسبرس للوساطة التجارية</li>
                    </ul>
                </div>
                <div class="sector-card reveal delay-3">
                    <div class="sector-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h3>التعليم والرعاية الصحية</h3>
                    <ul>
                        <li>شركة الكاسر لإدارة المدارس</li>
                        <li>شركة الكاسر لتطوير المستشفيات</li>
                        <li>مركز ريل تايم للخدمات الأمنية والتدريب</li>
                    </ul>
                </div>
                <div class="sector-card">
                    <div class="sector-icon"><i class="fas fa-city"></i></div>
                    <h3>العقارات والخدمات اللوجستية</h3>
                    <ul>
                        <li>بوابة السواعد الخضراء للعقارات</li>
                        <li>بوابة السواعد الخضراء للتجارة العامة</li>
                        <li>بوابة التواصل لخدمات رجال الأعمال</li>
                    </ul>
                </div>
                <div class="sector-card reveal delay-1">
                    <div class="sector-icon"><i class="fas fa-gas-pump"></i></div>
                    <h3>الطاقة والمنتجات النفطية</h3>
                    <ul class="product-links">
                        <li onclick="showProductDetails('oil')">تجارة النفط الخام</li>
                        <li onclick="showProductDetails('diesel')">تجارة الديزل (باسيفيك)</li>
                        <li onclick="showProductDetails('lng')">الغاز الطبيعي المسال (LNG)</li>
                        <li onclick="showProductDetails('jetfuel')">وقود الطائرات</li>
                        <li onclick="showProductDetails('solar')">الطاقة الشمسية والنظيفة</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="innovation" class="tech-section">
            <div class="container tech-wrapper">
                <div class="tech-visual">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80"
                        alt="التكنولوجيا">
                </div>
                <div class="tech-content">
                    <span class="hero-badge">المستقبل الآن</span>
                    <h2>مد جسور التواصل <br>عبر الذكاء الاصطناعي</h2>
                    <p>نعمل في "الكاسر القابضة" على توظيف أحدث تقنيات الذكاء الاصطناعي لربط القطاعين العام والخاص،
                        وتحسين كفاءة العمليات الاستثمارية بما يخدم رؤية الإمارات الرقمية 2030.</p>
                </div>
            </div>
        </section>
        <section class="partners-section reveal">
            <div class="container">
                <div class="section-title">
                    <span class="sub-badge">علاقات استراتيجية</span>
                    <h2>شركاء النجاح</h2>
                    <p>نفخر بالتعاون مع نخبة من المؤسسات والشركات العالمية لتعزيز الابتكار والنمو.</p>
                </div>
                <div class="logos-slider">
                    <div class="logos-track">
                        <div class="logo-item"><img src="images/p-logo1.png" alt="Partner 1"></div>
                        <div class="logo-item"><img src="images/p-logo2.png" alt="Partner 2"></div>
                        <div class="logo-item"><img src="images/p-logo3.png" alt="Partner 3"></div>
                        <div class="logo-item"><img src="images/نور.jpeg" alt="Partner 5"></div>
                    </div>
                </div>
                <div class="partners-notifications">
                    <div class="notif-label">أحدث الإشعارات:</div>
                    <div class="notif-content">
                        <marquee direction="right" scrollamount="5">
                            🚀 توقيع اتفاقية تعاون مع "شركة طاقة" لتطوير حلول الطاقة الشمسية .. 🏆 تكريم "مجموعة الكاسر"
                            كأفضل شريك استراتيجي لعام 2024 .. 🤝 انضمام "ديجيتال هاب" لمبادرة الابتكار الرقمي الوطنية ..
                        </marquee>
                    </div>
                </div>
            </div>
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
                    <img src="images/logo.png" alt="Al Kaaser Logo" class="footer-logo">
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
                    <img src="images/logo.png" alt="Al Kaaser" class="main-logo">
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
                <img src="images/logo.png" alt="Logo" width="50">
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
        <section id="about" class="section-padding container">
            <div class="vision-grid reveal">
                <div class="vision-text reveal-left delay-1">
                    <span class="sub-badge">About Us</span>
                    <h2>Al Kaaser Holding: The Parent Company</h2>
                    <p>A group of companies and institutions headquartered in the heart of Abu Dhabi, UAE. We specialize
                        in corporate management, investment, and petrochemicals, working with a strategic vision to
                        create global investment and trade opportunities.</p>
                    <div class="mission-mission-box">
                        <div class="mini-card">
                            <h3><i class="fas fa-eye"></i> Vision</h3>
                            <p>Investing in people, supporting creativity and innovation, building the future, and
                                bridging the public and private sectors for a better tomorrow.</p>
                        </div>
                        <div class="mini-card">
                            <h3><i class="fas fa-rocket"></i> Mission</h3>
                            <p>Our ambition is limitless; we seek to provide the best innovative solutions, achieve the
                                highest sustainability standards, and build international relations that support the
                                economy.</p>
                        </div>
                    </div>
                </div>
                <div class="vision-image reveal-right delay-2">
                    <video autoplay muted loop playsinline class="vision-video">
                        <source src="Video .mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="goals-bar reveal delay-3">
                <div class="goal-item"><i class="fas fa-chart-line"></i><span>Business development and continuous
                        research for latest technologies</span></div>
                <div class="goal-item"><i class="fas fa-handshake"></i><span>Empowering companies and enhancing local
                        and international economic growth</span></div>
            </div>
            <div class="subsidiaries-section reveal delay-4">
                <div class="section-header-left">
                    <h3>Group Companies</h3>
                    <p>Al Kaaser Holding oversees 15 leading companies and institutions:</p>
                </div>
                <div class="companies-grid">
                    <div class="company-tag">Emirates Al Khair for Investment Funds</div>
                    <div class="company-tag">Communication Gate for Business Services</div>
                    <div class="company-tag">Green Arms Gate for Real Estate</div>
                    <div class="company-tag">Al Kaaser School Management</div>
                    <div class="company-tag">Al Kaaser Hospital Management & Development</div>
                    <div class="company-tag">Real Time Security & Training Center</div>
                    <div class="company-tag">Green Arms Gate for General Trade</div>
                </div>
            </div>
        </section>
        <section class="adnoc-stats-section">
            <div class="fixed-gradient-overlay">
                <div class="container adnoc-grid">
                    <div class="adnoc-stats-info">
                        <span class="hero-badge">Numbers & Achievements</span>
                        <h2>Making a Difference <br> in Every Sector</h2>
                        <p>Al Kaaser Holding is committed to driving innovation and economic growth in the UAE through a
                            diverse investment portfolio serving the vision of the future.</p>
                    </div>
                    <div class="adnoc-numbers-list">
                        <div class="adnoc-stat-card">
                            <div class="adnoc-icon-box"><i class="fas fa-layer-group"></i></div>
                            <div class="adnoc-num-wrap"><span class="big-num">15</span>
                                <div class="stat-title">Subsidiaries</div>
                                <p class="stat-desc">Operating in 5 vital economic sectors</p>
                            </div>
                        </div>
                        <div class="adnoc-stat-card">
                            <div class="adnoc-icon-box"><i class="fas fa-chart-line"></i></div>
                            <div class="adnoc-num-wrap"><span class="big-num">2030</span>
                                <div class="stat-title">Sustainable Vision</div>
                                <p class="stat-desc">Contributing to UAE's Vision goals</p>
                            </div>
                        </div>
                        <div class="adnoc-stat-card">
                            <div class="adnoc-icon-box"><i class="fas fa-microchip"></i></div>
                            <div class="adnoc-num-wrap"><span class="big-num">100%</span>
                                <div class="stat-title">Innovative Solutions</div>
                                <p class="stat-desc">Full commitment to quality and excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-section">
            <div class="blog-container">
                <div class="blog-header">
                    <span class="sub-title">Latest Articles</span>
                    <h2>Our Educational & Cultural Blog</h2>
                    <div class="divider"></div>
                </div>

                <div class="blog-grid">
                    @forelse($posts as $post)
                        <article class="blog-card">
                            <div class="card-image">
                                <!-- للتأكد من عرض الصورة سواء كانت رابط كامل أو مرفوعة على السيرفر -->
                                <img src="{{ Str::startsWith($post->image, ['http://', 'https://']) ? $post->image : asset('storage/' . $post->image) }}"
                                    alt="{{ $post->title_ar }}">
                            </div>
                            <div class="card-content">
                                <span class="card-date">{{ $post->created_at->format('d M, Y') }}</span>
                                <h3 class="card-title">
                                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title_en }}</a>
                                </h3>
                                <p class="card-excerpt">
                                    {{ Str::limit(strip_tags($post->content_en), 120, '...') }}
                                </p>
                                <a href="{{ route('blog.show', $post->id) }}" class="read-more-btn">
                                    Read More
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                        </article>
                    @empty
                        <div class="no-posts">
                            <p>No articles available currently.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <style>
                /* الألوان الأساسية الخاصة بك */
                :root {
                    --primary: #004685;
                    --accent: #d4af37;
                    --dark: #0c0c0c;
                    --gray-bg: #f8f9fb;
                    --white: #ffffff;
                    --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                    --transition: all 0.3s ease;
                }

                /* تنسيق السكشن العام */
                .blog-section {
                    background-color: var(--gray-bg);
                    padding: 80px 20px;
                    direction: rtl;
                    /* التصميم هيفضل ثابت يمين للشمال */
                    font-family: sans-serif;
                }

                .blog-container {
                    max-width: 1200px;
                    margin: 0 auto;
                }

                /* الهيدر الخاص بالسكشن */
                .blog-header {
                    text-align: center;
                    margin-bottom: 50px;
                }

                .blog-header .sub-title {
                    color: var(--accent);
                    font-weight: bold;
                    text-transform: uppercase;
                    font-size: 14px;
                    letter-spacing: 1px;
                    display: block;
                    margin-bottom: 10px;
                }

                .blog-header h2 {
                    color: var(--dark);
                    font-size: 32px;
                    margin: 0;
                }

                .blog-header .divider {
                    width: 60px;
                    height: 3px;
                    background-color: var(--primary);
                    margin: 15px auto 0;
                    border-radius: 2px;
                }

                /* شبكة عرض المقالات */
                .blog-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
                    gap: 30px;
                }

                /* كارت المدونة */
                .blog-card {
                    background-color: var(--white);
                    border-radius: 12px;
                    overflow: hidden;
                    box-shadow: var(--shadow);
                    transition: var(--transition);
                    display: flex;
                    flex-direction: column;
                }

                .blog-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
                }

                /* صورة الكارت */
                .card-image {
                    position: relative;
                    height: 220px;
                    overflow: hidden;
                }

                .card-image img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: var(--transition);
                }

                .blog-card:hover .card-image img {
                    transform: scale(1.05);
                }

                /* محتوى الكارت */
                .card-content {
                    padding: 25px;
                    display: flex;
                    flex-direction: column;
                    flex-grow: 1;
                }

                .card-date {
                    color: #888;
                    font-size: 13px;
                    margin-bottom: 10px;
                }

                .card-title {
                    margin: 0 0 12px 0;
                    font-size: 20px;
                    line-height: 1.4;
                }

                .card-title a {
                    color: var(--dark);
                    text-decoration: none;
                    transition: var(--transition);
                }

                .card-title a:hover {
                    color: var(--primary);
                }

                .card-excerpt {
                    color: #555;
                    font-size: 15px;
                    line-height: 1.6;
                    margin: 0 0 20px 0;
                    flex-grow: 1;
                }

                /* زر اقرأ المزيد */
                .read-more-btn {
                    color: var(--primary);
                    text-decoration: none;
                    font-weight: bold;
                    font-size: 14px;
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    align-self: flex-start;
                    transition: var(--transition);
                }

                .read-more-btn:hover {
                    color: var(--accent);
                }

                /* في حالة عدم وجود مقالات */
                .no-posts {
                    grid-column: 1 / -1;
                    text-align: center;
                    padding: 40px;
                    color: #666;
                }

                /* التجاوب مع الشاشات الصغيرة جداً */
                @media (max-width: 480px) {
                    .blog-grid {
                        grid-template-columns: 1fr;
                    }

                    .blog-header h2 {
                        font-size: 26px;
                    }
                }
            </style>
        </section>
        <section id="business" class="section-padding container">
            <div class="section-title">
                <span class="sub-badge" style="text-align: center;">Our Investment Portfolio</span>
                <h2 style="text-align: center;">Sectors & Companies</h2>
                <div class="line-center"></div>
            </div>
            <div class="sectors-grid">
                <div class="sector-card reveal delay-1">
                    <div class="sector-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Finance & Investment</h3>
                    <ul>
                        <li>Emirates Al Khair for Investment Funds</li>
                        <li>Afro Express for Trade Brokerage</li>
                    </ul>
                </div>
                <div class="sector-card reveal delay-3">
                    <div class="sector-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h3>Education & Healthcare</h3>
                    <ul>
                        <li>Al Kaaser School Management</li>
                        <li>Al Kaaser Hospital Management</li>
                        <li>Real Time Training Center</li>
                    </ul>
                </div>
                <div class="sector-card">
                    <div class="sector-icon"><i class="fas fa-city"></i></div>
                    <h3>Real Estate & Logistics</h3>
                    <ul>
                        <li>Green Arms Gate for Real Estate</li>
                        <li>Green Arms Gate for General Trade</li>
                        <li>Communication Gate for Business Services</li>
                    </ul>
                </div>
                <div class="sector-card reveal delay-1">
                    <div class="sector-icon"><i class="fas fa-gas-pump"></i></div>
                    <h3>Energy & Petroleum Products</h3>
                    <ul class="product-links">
                        <li onclick="showProductDetails('oil')">Crude Oil Trading</li>
                        <li onclick="showProductDetails('diesel')">Diesel Trading (Pacific)</li>
                        <li onclick="showProductDetails('lng')">Liquefied Natural Gas (LNG)</li>
                        <li onclick="showProductDetails('jetfuel')">Aviation Fuel</li>
                        <li onclick="showProductDetails('solar')">Solar & Clean Energy</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="innovation" class="tech-section">
            <div class="container tech-wrapper">
                <div class="tech-visual">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80"
                        alt="Technology">
                </div>
                <div class="tech-content">
                    <span class="hero-badge">Future is Now</span>
                    <h2>Bridging Connections <br>Through AI</h2>
                    <p>At Al Kaaser Holding, we work on employing the latest AI technologies to link the public and
                        private sectors, improving efficiency in line with the UAE Digital Vision 2030.</p>
                </div>
            </div>
        </section>
        <section class="partners-section reveal">
            <div class="container">
                <div class="section-title">
                    <span class="sub-badge">Strategic Relationships</span>
                    <h2>Success Partners</h2>
                    <p>We pride ourselves on collaborating with elite global institutions and companies to foster
                        innovation and growth.</p>
                </div>
                <div class="logos-slider">
                    <div class="logos-track">
                        <div class="logo-item"><img src="images/p-logo1.png" alt="Partner 1"></div>
                        <div class="logo-item"><img src="images/p-logo2.png" alt="Partner 2"></div>
                        <div class="logo-item"><img src="images/p-logo3.png" alt="Partner 3"></div>
                        <div class="logo-item"><img src="images/نور.jpeg" alt="Partner 5"></div>
                    </div>
                </div>
                <div class="partners-notifications">
                    <div class="notif-label">Latest Announcements:</div>
                    <div class="notif-content">
                        <marquee direction="left" scrollamount="5">
                            🚀 Signed a collaboration agreement with "TAQA" to develop solar energy solutions .. 🏆 Al
                            Kaaser Group honored as Best Strategic Partner of 2024 .. 🤝 Digital Hub joins the National
                            Digital Innovation Initiative ..
                        </marquee>
                    </div>
                </div>
            </div>
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
                    <img src="images/logo.png" alt="Al Kaaser Logo" class="footer-logo">
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
    <script src="script.js"></script>
</body>

</html>
