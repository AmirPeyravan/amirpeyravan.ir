@extends('layouts.app')
@section('content')
    <!-- بخش مهارت‌ها -->
    <section id="skills" class="py-24 bg-gray-900 bg-opacity-30 relative" aria-labelledby="skills-heading">
        <div class="container mx-auto px-6">
            <h1 id="skills-heading" class="text-5xl font-bold text-center mb-16 section-heading">مهارت‌های <span class="gradient-text">حرفه‌ای</span></h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <article class="glass-card p-8">
                    <h2 class="text-2xl font-bold mb-8 gradient-text">مهارت‌های برنامه‌نویسی</h2>

                    <div class="skill-item mb-6">
                        <div class="flex justify-between mb-2">
                            <h3 class="text-xl">HTML & CSS</h3>
                            <span class="text-yellow-400">95%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar" style="width: 95%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-6">
                        <div class="flex justify-between mb-2">
                            <h3 class="text-xl">JavaScript</h3>
                            <span class="text-yellow-400">50%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-6">
                        <div class="flex justify-between mb-2">
                            <h3 class="text-xl">C#</h3>
                            <span class="text-yellow-400">85%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-6">
                        <div class="flex justify-between mb-2">
                            <h3 class="text-xl">PHP</h3>
                            <span class="text-yellow-400">80%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar" style="width: 80%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-6">
                        <div class="flex justify-between mb-2">
                            <h3 class="text-xl">Laravel</h3>
                            <span class="text-yellow-400">85%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar" style="width: 85%"></div>
                        </div>
                    </div>
                </article>

                <article class="glass-card p-8">
                    <h2 class="text-2xl font-bold mb-8 gradient-text">مهارت‌های طراحی</h2>

                    <div class="skill-item mb-6">
                        <div class="flex justify-between mb-2">
                            <h3 class="text-xl">UI/UX Design</h3>
                            <span class="text-yellow-400">90%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar" style="width: 90%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-6">
                        <div class="flex justify-between mb-2">
                            <h3 class="text-xl">Adobe XD</h3>
                            <span class="text-yellow-400">85%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-6">
                        <div class="flex justify-between mb-2">
                            <h3 class="text-xl">Figma</h3>
                            <span class="text-yellow-400">80%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar" style="width: 80%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-6">
                        <div class="flex justify-between mb-2">
                            <h3 class="text-xl">Photoshop</h3>
                            <span class="text-yellow-400">75%</span>
                        </div>
                        <div class="skill-bar-bg">
                            <div class="skill-bar" style="width: 75%"></div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- کارت‌های مهارت‌های دیگر -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16">
                <article class="glass-card p-6">
                    <div class="w-16 h-16 bg-purple-600 bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-server text-purple-400 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">Back-End</h3>
                    <div class="flex flex-wrap gap-2 justify-center">
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Node.js</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Express</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">PHP</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Python</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Django</span>
                    </div>
                </article>

                <article class="glass-card p-6">
                    <div class="w-16 h-16 bg-yellow-600 bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-paint-brush text-yellow-400 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">Front-End</h3>
                    <div class="flex flex-wrap gap-2 justify-center">
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">React</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Vue.js</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Angular</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Bootstrap</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">SCSS</span>
                    </div>
                </article>

                <article class="glass-card p-6">
                    <div class="w-16 h-16 bg-blue-600 bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-database text-blue-400 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">Database</h3>
                    <div class="flex flex-wrap gap-2 justify-center">
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">MySQL</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">PostgreSQL</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">MongoDB</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Redis</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Firebase</span>
                        <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">GraphQL</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- بخش نمونه کارها -->
    <section id="portfolio" class="py-24 relative" aria-labelledby="portfolio-heading">
        <div class="container mx-auto px-6">
            <h2 id="portfolio-heading" class="text-5xl font-bold text-center mb-16 section-heading">نمونه <span class="gradient-text">کارها</span></h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- نمونه کار 1 -->
                <article class="portfolio-card glass-card overflow-hidden h-80">
                    <img src="/storage/project-image/project01.jpg" alt="فروشگاه آنلاین زرین ساخته شده با React و Node.js" class="w-full h-full object-cover" loading="lazy">
                    <div class="overlay">
                        <h3 class="text-xl font-bold mb-2">فروشگاه آنلاین زرین</h3>
                        <p class="text-gray-300 mb-4">طراحی و پیاده‌سازی فروشگاه آنلاین با React و Node.js</p>
                        <div class="flex space-x-2 space-x-reverse mb-3">
                            <span class="px-2 py-1 bg-purple-600 bg-opacity-30 text-purple-300 rounded-md text-xs">React</span>
                            <span class="px-2 py-1 bg-green-600 bg-opacity-30 text-green-300 rounded-md text-xs">Node.js</span>
                            <span class="px-2 py-1 bg-blue-600 bg-opacity-30 text-blue-300 rounded-md text-xs">MongoDB</span>
                        </div>
                    </div>
                </article>

                <!-- نمونه کار 2 -->
                <article class="portfolio-card glass-card overflow-hidden h-80">
                    <img src="/storage/project-image/project02.jpg" alt="اپلیکیشن مدیریت پروژه نوین با Laravel و Vue.js" class="w-full h-full object-cover" loading="lazy">
                    <div class="overlay">
                        <h3 class="text-xl font-bold mb-2">اپلیکیشن مدیریت پروژه نوین</h3>
                        <p class="text-gray-300 mb-4">طراحی و توسعه سیستم مدیریت پروژه سازمانی</p>
                        <div class="flex space-x-2 space-x-reverse mb-3">
                            <span class="px-2 py-1 bg-purple-600 bg-opacity-30 text-purple-300 rounded-md text-xs">Laravel</span>
                            <span class="px-2 py-1 bg-green-600 bg-opacity-30 text-green-300 rounded-md text-xs">Vue.js</span>
                            <span class="px-2 py-1 bg-blue-600 bg-opacity-30 text-blue-300 rounded-md text-xs">PostgreSQL</span>
                        </div>
                    </div>
                </article>

                <!-- نمونه کار 3 -->
                <article class="portfolio-card glass-card overflow-hidden h-80">
                    <img src="/storage/project-image/project03.jpg" alt="پلتفرم آموزش آنلاین دانا با React و Django" class="w-full h-full object-cover" loading="lazy">
                    <div class="overlay">
                        <h3 class="text-xl font-bold mb-2">پلتفرم آموزش آنلاین دانا</h3>
                        <p class="text-gray-300 mb-4">طراحی و توسعه سیستم آموزش آنلاین با قابلیت برگزاری کلاس مجازی</p>
                        <div class="flex space-x-2 space-x-reverse mb-3">
                            <span class="px-2 py-1 bg-purple-600 bg-opacity-30 text-purple-300 rounded-md text-xs">React</span>
                            <span class="px-2 py-1 bg-green-600 bg-opacity-30 text-green-300 rounded-md text-xs">Django</span>
                            <span class="px-2 py-1 bg-blue-600 bg-opacity-30 text-blue-300 rounded-md text-xs">WebRTC</span>
                        </div>
                    </div>
                </article>

                <!-- نمونه کار 4 -->
                <article class="portfolio-card glass-card overflow-hidden h-80">
                    <img src="/storage/project-image/project04.jpg" alt="اپلیکیشن موبایل سلامت یار با React Native و Firebase" class="w-full h-full object-cover" loading="lazy">
                    <div class="overlay">
                        <h3 class="text-xl font-bold mb-2">اپلیکیشن موبایل سلامت یار</h3>
                        <p class="text-gray-300 mb-4">توسعه اپلیکیشن موبایل پایش سلامت و رژیم غذایی</p>
                        <div class="flex space-x-2 space-x-reverse mb-3">
                            <span class="px-2 py-1 bg-purple-600 bg-opacity-30 text-purple-300 rounded-md text-xs">React Native</span>
                            <span class="px-2 py-1 bg-green-600 bg-opacity-30 text-green-300 rounded-md text-xs">Express</span>
                            <span class="px-2 py-1 bg-blue-600 bg-opacity-30 text-blue-300 rounded-md text-xs">Firebase</span>
                        </div>
                    </div>
                </article>

                <!-- نمونه کار 5 -->
                <article class="portfolio-card glass-card overflow-hidden h-80">
                    <img src="/storage/project-image/project05.jpg" alt="داشبورد مدیریت هوشمند ساختمان با Angular و Node.js" class="w-full h-full object-cover" loading="lazy">
                    <div class="overlay">
                        <h3 class="text-xl font-bold mb-2">داشبورد مدیریت هوشمند ساختمان</h3>
                        <p class="text-gray-300 mb-4">طراحی و توسعه سیستم مدیریت هوشمند ساختمان با اینترنت اشیا</p>
                        <div class="flex space-x-2 space-x-reverse mb-3">
                            <span class="px-2 py-1 bg-purple-600 bg-opacity-30 text-purple-300 rounded-md text-xs">Angular</span>
                            <span class="px-2 py-1 bg-green-600 bg-opacity-30 text-green-300 rounded-md text-xs">Node.js</span>
                            <span class="px-2 py-1 bg-blue-600 bg-opacity-30 text-blue-300 rounded-md text-xs">MQTT</span>
                        </div>
                    </div>
                </article>

                <!-- نمونه کار 6 -->
                <article class="portfolio-card glass-card overflow-hidden h-80">
                    <img src="/storage/project-image/project06.jpg" alt="پلتفرم مدیریت محتوای پارسی با PHP و MySQL" class="w-full h-full object-cover" loading="lazy">
                    <div class="overlay">
                        <h3 class="text-xl font-bold mb-2">پلتفرم مدیریت محتوای پارسی</h3>
                        <p class="text-gray-300 mb-4">طراحی و توسعه سیستم مدیریت محتوای فارسی با قابلیت سفارشی‌سازی</p>
                        <div class="flex space-x-2 space-x-reverse mb-3">
                            <span class="px-2 py-1 bg-purple-600 bg-opacity-30 text-purple-300 rounded-md text-xs">PHP</span>
                            <span class="px-2 py-1 bg-green-600 bg-opacity-30 text-green-300 rounded-md text-xs">jQuery</span>
                            <span class="px-2 py-1 bg-blue-600 bg-opacity-30 text-blue-300 rounded-md text-xs">MySQL</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- Schema Markup برای نمونه‌کارها -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Portfolio",
                "name": "نمونه کارهای حرفه‌ای",
                "description": "مجموعه‌ای از پروژه‌های توسعه وب و اپلیکیشن شامل فروشگاه آنلاین، سیستم‌های مدیریت و پلتفرم‌های آموزشی",
                "itemListElement": [
                    {
                        "@type": "CreativeWork",
                        "name": "فروشگاه آنلاین زرین",
                        "description": "طراحی و پیاده‌سازی فروشگاه آنلاین با React و Node.js",
                        "image": "/storage/project-image/project01.jpg"
                    },
                    {
                        "@type": "CreativeWork",
                        "name": "اپلیکیشن مدیریت پروژه نوین",
                        "description": "طراحی و توسعه سیستم مدیریت پروژه سازمانی با Laravel و Vue.js",
                        "image": "/storage/project-image/project02.jpg"
                    },
                    {
                        "@type": "CreativeWork",
                        "name": "پلتفرم آموزش آنلاین دانا",
                        "description": "طراحی و توسعه سیستم آموزش آنلاین با قابلیت برگزاری کلاس مجازی",
                        "image": "/storage/project-image/project03.jpg"
                    },
                    {
                        "@type": "CreativeWork",
                        "name": "اپلیکیشن موبایل سلامت یار",
                        "description": "توسعه اپلیکیشن موبایل پایش سلامت و رژیم غذایی",
                        "image": "/storage/project-image/project04.jpg"
                    },
                    {
                        "@type": "CreativeWork",
                        "name": "داشبورد مدیریت هوشمند ساختمان",
                        "description": "طراحی و توسعه سیستم مدیریت هوشمند ساختمان با اینترنت اشیا",
                        "image": "/storage/project-image/project05.jpg"
                    },
                    {
                        "@type": "CreativeWork",
                        "name": "پلتفرم مدیریت محتوای پارسی",
                        "description": "طراحی و توسعه سیستم مدیریت محتوای فارسی با قابلیت سفارشی‌سازی",
                        "image": "/storage/project-image/project06.jpg"
                    }
                ]
            }
        </script>
    </section>
@endsection
