<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\User;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_data = [
            //Reza-Sahraee
            [
                'name' => 'رضامراد صحرایی',
                'name_en' => 'Reza-Sahraee',
                'email' => 'rezasahraee@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/reza_sahraee.jpg',
                'resume' => 'resumes/reza_sahraee.pdf',
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Afsaneh-Gharibi
            [
                'name' => 'افسانه غریبی',
                'name_en' => 'Afsaneh-Gharibi',
                'email' => 'gharibi.afsaneh@gmail.com',
                'intro' => <<<INTRO
                افسانه غریبی دکترای زبان نشاسی همگانی با گرایش آموزش زبان فارسی به غیر فارسی زبانان است. او کارشناس واحد آموزش و پژوهش بنیاد سعدی است و سرپرستی گروه تألیف مجموعۀ مینا را به عهده دارد. فعالیت های او در زمینۀ برنامه ریزی آموزشی و طراحی برنامه درسی، تهیه و تدوین مواد آموزشی و آزمون سازی است. او چند دوره واحدهای مرتبط با این حوزه ها را در دانشگاه الزهرا و علامه طباطبایی تدریس کرده است و مدرس دوره های تربیت مدرس بنیاد سعدی نیز هست. از ایشان سه جلد کتاب صد نکته در روش تدریس، سی روش آموزش زبان و مسائلی در طراحی برنامه درسی ترجمه و چاپ شده است. 
                INTRO,
                'pic' => 'user_pics/afsaneh_gharibi.jpg',
                'resume' => 'resumes/afsaneh_gharibi.pdf',
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Amir-Ahmadi
            [
                'name' => 'امیر احمدی',
                'name_en' => 'Amir-Ahmadi',
                'email' => 'aemeer@hotmail.com',
                'intro' => null,
                'pic' => 'user_pics/amir_ahmadi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Hamid-Aghaei
            [
                'name' => 'حمید آقایی',
                'name_en' => 'Hamid-Aghaei',
                'email' => 'aghaei@yahoo.com',
                'intro' => <<<INTRO
                دانشجوی دكتری زبان‌شناسی دانشگاه شهید بهشتی، دانش‌آموخته آزفا در مقطع كارشناسی ارشد و مدرس زبان فارسی به غیرفارسی‌زبانان
                INTRO,
                'pic' => 'user_pics/hamid_aghaei.jpg',
                'resume' => null,
                'linkedin_link' => 'https://www.linkedin.com/in/hamid-aghaei',
                'website_link' => null,
                'orcid_link' => 'https://orcid.org/0000-0002-3517-3302',
            ],
            //Morvarid-Talebi
            [
                'name' => 'مروارید طالبی',
                'name_en' => 'Morvarid-Talebi',
                'email' => 'morvarid.talebi@gmail.com',
                'intro' => <<<INTRO
                خانم مروارید طالبی دانشجوی مقطع دکتری رشتۀ «آموزش زبان فارسی به غیرفارسی‌زبانان» در دانشگاه علامه طباطبائی و کارشناس آموزش و پژوهش بنیاد سعدی است. آموزش و پژوهش حول زبان فارسی، خصوصاً دو مؤلفۀ «واژه» و «تلفظ» در حوزۀ علاقۀ ایشان است. از تألیفات ایشان می‌توان به کتاب «آموزش واژه» از مجموعه کتاب‌های «زبان فارسی را چگونه آموزش دهیم؟» چاپ انتشارات دانشگاه علامه طباطبائی و کتاب «آموزش کاربردی واژه (2)» چاپ انتشارات آزفا متعلق به بنیاد سعدی اشاره کرد. همچنین همکاری در طراحی، برگزاری و ارزیابی دوره‌های مختلف آموزش زبان فارسی و تربیت مدرس زبان فارسی، به‌صورت برخط و حضوری، از دیگر موارد در سوابق حرفه‌ای ایشان است.
                INTRO,
                'pic' => 'user_pics/morvarid_talebi.jpg',
                'resume' => 'resumes/morvarid_talebi.pdf',
                'linkedin_link' => 'https://linkedin.com/in/morvarid-talebi',
                'website_link' => null,
                'orcid_link' => 'https://orcid.org/0000-0002-2473-1401',
            ],
            //Maryam-Soltani
            [
                'name' => 'مریم سلطانی',
                'name_en' => 'Maryam-Soltani',
                'email' => 'mrym.soltani@gmail.com',
                'intro' => <<<INTRO
                مریم سلطانی، فارغ‌التحصیل کارشناسی ارشد رشتۀ آموزش زبان فارسی به غیرفارسی‌زبانان از دانشگاه علامه طباطبایی است. او از سال 1393 در پست کارشناس آموزش در بنیاد سعدی مشغول به کار است. او در تألیف مجموعه‌های آموزشی بنیاد سعدی همکاری داشته که عبارتند از:
                <ul><li>جلدهای اول و دوم مجموعۀ سه‌جلدی «ایران‌شناسی»</li><li>جلدهای  اول، دوم و سوم از مجموعۀ چهارمهارتی «مینا»</li><li>جلد اول، دوم و سوم از مجموعۀ چهارجلدی «لذت خواندن»</li><li>جلد دوم مجموعۀ آموزشی«شیراز»  ویژۀ دانش‌آموزان نوجوان</li></ul>
                سلطانی علاوه بر همکاری در کارگروه‌های تألیف در برگزاری آزمون‌های متفاوت همکاری داشته‌ و در دوره‌های متفاوت زبان‌آموزی و تربیت معلم تدریس کرده‌است. به طور نمونه:
                <ul><li>انجام مصاحبۀ شفاهی در آزمون‌های تعیین سطح حضوری و غیرحضوری</li><li>برنامه‌ریزی و اجرای آزمون‌های تعیین سطح و پایان‌دوره</li><li>تدریس در دوره‌های دانش‌افزایی سال‌های 94 الی 97</li><li>تدریس مهارت «شنیدن» و «خواندن» در دوره‌های تربیت مدرس حضوری و غیرحضوری </li></ul>
                INTRO,
                'pic' => 'user_pics/maryam_soltani.jpg',
                'resume' => 'resumes/maryam_soltani.jpg',
                'linkedin_link' => 'https://linkedin.com/in/maryam-soltani',
                'website_link' => null,
                'orcid_link' => 'https://orcid.org/0000-0001-9080-3007',
            ],
            //Monire-Shahbaz
            [
                'name' => 'منیره شهباز',
                'name_en' => 'Monire-Shahbaz',
                'email' => 'shahbaz.mnr@gmail.com',
                'intro' => <<<INTRO
                تجارب کاری و علمی خانم منیره شهباز به قرار زیر است:
                <ul><li>کارشناس در معاونت آموزش و پژوهش بنیاد سعدی</li><li>مؤلف مجموعۀ لذت خواندن (سرپرست نویسندگان)، مجموعۀ مینا و مجموعۀ ایرانشناسی</li><li>مؤلف مقاله‌هایی در زمینه‌های کلی تحلیل کتاب، دستور، آزمون‌سازی و مراحل زبان‌آموزی</li><li>دارندۀ مدرک کارشناسی ارشد رشتۀ آموزش زبان فارسی به غیرفارسی‌زبانان از دانشگاه علامه طباطبایی</li><li>در حال تحصیل در مقطع دکتری رشتۀ آموزش زبان فارسی به غیرفارسی‌زبانان از دانشگاه علامه طباطبایی</li><li>عضویت در کارگروه آزمون‌های آمفا و داتفا</li><li>دارای تجربۀ حدود 200 ساعت تدریس در دوره‌های بلندمدت و کوتاه‌مدت زبان‌آموزی و تربیت‌مدرس</li></ul>
                INTRO,
                'pic' => 'user_pics/monire_shahbaz.jpg',
                'resume' => 'resumes/monire_shahbaz.pdf',
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //SeyedeFateme-Tabasi
            [
                'name' => 'سیده‌فاطمه طبسی',
                'name_en' => 'SeyedeFateme-Tabasi',
                'email' => 'seyede.fateme.tabasi@gmail.com',
                'intro' => <<<INTRO
                <ul><li>کارشناسی رشتۀ زبان و ادبیات فارسی، کارشناسی‌ ‌ارشد رشتۀ آموزش زبان فارسی به غیرفارسی‌زبانان از دانشگاه علامه طباطبائی</li><li>مدرس دوره‌های آموزش زبان فارسی به غیرفارسی‌زبانان مراکز آزفای دانشگاه علامه طباطبائی، دانشگاه الزهرا (س) و بنیاد سعدی</li><li>عضو گروه نویسندگان مجموعۀ لذت خواندن (4 جلدی، ویژۀ فارسی‌آموزان سطح مقدماتی تا پیشرفته)</li><li>عضو گروه نویسندگان مجموعۀ شیراز (4 جلدی، ویژۀ فارسی‌آموزان سطح مقدماتی تا پیشرفته و دانش‌آموزان مدارس لبنان)</li><li>علاقه‌مندی‌های مطالعاتی و پژوهشی: «گفتمان‌کاوی»، «ایدئولوژی، جنسیت، هویت و فرهنگ در آموزش زبان»، «تحلیل منابع آموزشی»، «آموزش مهارت خواندن» و «آموزش واژه و اصطلاحات»</li></ul>
                INTRO,
                'pic' => 'user_pics/seyedefateme_tabasi.jpg',
                'resume' => 'resumes/seyedefateme_tabasi.pdf',
                'linkedin_link' => 'linkedin.com/in/fateme-tabasi-3552a81b7',
                'website_link' => 'https://independent.academia.edu/FatemeTabasi',
                'orcid_link' => 'https://orcid.org/0000-0003-4343-3327',
            ],
            //Faeze-Marsous
            [
                'name' => 'فائزه مرصوص',
                'name_en' => 'Faeze-Marsous',
                'email' => 'fmarsous2001@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/faeze_marsous.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Hanieh-Mashayekhi
            [
                'name' => 'هانیه مشایخی',
                'name_en' => 'Hanieh-Mashayekhi',
                'email' => 'mashayekhi.h93@gmail.com',
                'intro' => <<<INTRO
                فارغ‌التحصیل زبان و ادبیات انگلیسی، با سابقه‌ی تولید محتوای عمومی و تخصصی، وبلاگ‌نویسی و کار با وردپرس، ترجمه‌ی متون تخصصی، رمان و داستان، بازی‌های موبایلی و نامه‌نگاری تجاری به زبان انگلیسی و ترجمه‌ی متون عمومی به زبان آلمانی. همچنین سابقه‌ی ترجمه‌ی همزمان، آموزش عمومی و تخصصی زبان انگلیسی (با مدرک TTC)، راهنمایی داوطلبانه‌ی غیرایرانیان در رویدادهای آموزش زبان فارسی بنیاد سعدی و جشنواره‌ی جهانی فیلم فجر و سابقه‌ی خبرنگاری بین‌الملل. آشنا با نرم‌افزارها و وب‌سایت‌های عمومی و تخصصی مرتبط با ترجمه
                INTRO,
                'pic' => 'user_pics/hanieh_mashayekhi.jpg',
                'resume' => 'resumes/hanieh_mashayekhi.pdf',
                'linkedin_link' => 'https://www.linkedin.com/in/hanieh-mashayekhi-4985597b',
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Amirhossein-MojiriForoushani
            [
                'name' => 'امیرحسین مجیری فروشانی',
                'name_en' => 'Amirhossein-MojiriForoushani',
                'email' => 'amojiry@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/amirhossein_mojiriforoushani.jpg',
                'resume' => 'resumes/amirhossein_mojiriforoushani.pdf',
                'linkedin_link' => 'https://linkedin.com/in/amir-hossein-mojiri-foroushani',
                'website_link' => 'https://amirmojiri.ir',
                'orcid_link' => 'https://orcid.org/0000-0002-3041-068X',
            ],
            //Azadeh-Shokri
            [
                'name' => 'آزاده شکری',
                'name_en' => 'Azadeh-Shokri',
                'email' => 'shokri_azadeh@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/azadeh_shokri.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //GholamHosein-Rezapour
            [
                'name' => 'غلامحسین رضاپور',
                'name_en' => 'GholamHosein-Rezapour',
                'email' => 'gh.hossein88rzp@gmail.com',
                'intro' => <<<INTRO
                <ul><li>کارشناسی رشته زبان و ادبیات فارسی، کارشناسی ارشد رشته آموزش زبان فارسی از دانشگاه علامه طباطبائی</li>
                <li>مدرس دوره‌های آموزش زبان فارسی عمومی در مرکز آزفای دانشگاه علامه طباطبائی</li>
                <li>مدرس دوره‌های آموزش زبان فارسی با اهداف ویژه در مرکز دانشگاه علامه طباطبائی</li>
                <li>مدرس دوره‌های تربیت مدرس در دانشگاه علامه طباطبائی و بنیاد سعدی</li>
                <li>عضویت در کاگروه آزمون‌سازی آمفا</li>
                <li>مؤلف کتاب‌های آمادگی آمفا (4 جلدی، خواندن آمفا)</li>
                <li>مؤلف کتاب جملات کاربردی زبان فارسی</li>
                <li>عضو گروه مؤلفین مجموعۀ لذت خواندن (4 جلدی، ویژۀ فارسی‌آموزان سطح مقدماتی تا پیشرفته)</li>
                <li>عضو گروه مؤلفین مجموعۀ شیراز (4 جلدی، ویژۀ فارسی‌آموزان سطح مقدماتی تا پیشرفته و دانش‌آموزان مدارس لبنان)</li></ul>
                INTRO,
                'pic' => 'user_pics/gholamhosein_rezapour.jpg',
                'resume' => 'resumes/gholamhosein_rezapour.pdf',
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Babak-Nobahari
            [
                'name' => 'بابک نوبهاری',
                'name_en' => 'Babak-Nobahari',
                'email' => 'b.nobahari53@gmail.com',
                'intro' => <<<INTRO
                کارشناس رشته گرافیک هستم از دانشگاه علم و فرهنگ. علاقه‌مند به عکاسی و ایرانگردی. 
                INTRO,
                'pic' => 'user_pics/babak_nobahari.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Mohammd-Mehraabi
            [
                'name' => 'محمد محرابی',
                'name_en' => 'Mohammd-Mehraabi',
                'email' => 'mehrabi.graphicdesigner@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/mohammd_mehraabi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Majid-Shamsoddinnejad
            [
                'name' => 'مجید شمس‌الدین‌نژاد',
                'name_en' => 'Majid-Shamsoddinnejad',
                'email' => 'md.1382@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/majid_shamsoddinnejad.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Shahnaz-Ahmadighader
            [
                'name' => 'شهناز احمدی‌قادر',
                'name_en' => 'Shahnaz-Ahmadighader',
                'email' => 'sh.ahmadi53@gmail.com',
                'intro' => <<<INTRO
                شهناز احمدی‌قادر متولد سال 1353، تهران، دانشجوی مقطع دکتری در رشتۀ آموزش زبان فارسی به غیرفارسی‌زبانان (آزفا) در دانشگاه علامه طباطبایی و کارشناس آموزش و پژوهش در بنیاد سعدی است. وی پس از به پایان بردن تحصیلات خود در مقطع کارشناسی ارشد در رشتۀ آزفا، از بهار سال 1391 در مرکز زبان فارسی دانشگاه بین المللی امام خمینی (ره) قزوین مشغول به تدریس شد و عملاً فعالیت حرفه‌ای خود را در حوزۀ آموزش زبان فارسی به غیرفارسی‌زبانان آغاز کرد. پس از دو سال و نیم تدریس فعال و مستمر، در خرداد 1393 به عنوان کارشناس آموزش و پژوهش در بنیاد سعدی مشغول به خدمت شد. او علاوه بر تدریس در دوره‌های تربیت مدرس و فارسی‌آموزی در مراکز زبان دانشگاه علامه، دانشگاه شهید بهشتی و کالج بین‌المللی دانشگاه علوم پزشکی تهران، در طول خدمت خود در بنیاد سعدی، با همراهی دیگر اعضای گروه مؤلفان 7 جلد کتاب آموزشی با عنوان‎های آموزش کاربردی واژه (جلد 1، 2، 3)، چارچوب (جلد 1 و 2)، دستور آموزشی زبان فارسی و لذت خواندن (جلد 2) را به رشتۀ تحریر درآورد. همچنین، از خدمات اجرایی ایشان می‌توان به همکاری در برگزاری بیش از 100 دورۀ فارسی‌آموزی و تربیت مدرس به عنوان مسئول امور آموزشی اشاره کرد.
                INTRO,
                'pic' => 'user_pics/shahnaz_ahmadighader.jpg',
                'resume' => 'resumes/shahnaz_ahmadighader.pdf',
                'linkedin_link' => 'https://www.linkedin.com/in/shahnaz-ahmadighader-5b6107184',
                'website_link' => null,
                'orcid_link' => null,
            ],
            //MarziyeSadat-EatemadalEslami
            [
                'name' => 'مرضیه‌سادات اعتمادالاسلامی',
                'name_en' => 'MarziyeSadat-EatemadalEslami',
                'email' => 'eatmad.m@gmail.com',
                'intro' => <<<INTRO
                دانش‌آموختۀ دانشگاه علامۀ طباطبایی در مقطع کارشناسی ارشد رشتۀ زبان‌شناسی، گرایش آموزش زبان فارسی به غیرفارسی‌زبانان. عضو هستۀ پژوهش‌های بنیادی دانشگاه علامه طباطبایی برای توسعۀ آموزش زبان فارسی به خارجیان. عضو کارگروه پروژۀ تهیه و تدوین درس‌نامۀ آموزش کاربردی دستور زبان فارسی با نام «چارچوب» در سه جلد، که جلد اول به چاپ رسیده و جلد دوم در شرف چاپ است. عنوان رسالۀ کارشناسی ارشد «بررسی بازخوردهای تصحیحی مدرسین مرکز بین المللی آموزش زبان فارسی مؤسسۀ لغت‌نامه دهخدا بر اساس الگوی لیستر و رانتا». چاپ مقالات علمی در مجلات علمی - تخصصی زبان‌شناسی. ارائۀ مقاله و چاپ آن در مجموعه مقالات نهمین همایش انجمن زبان‌شناسی ایران. ارائۀ مقاله در نخستین همایش واکاوی منابع آموزش زبان فارسی به خارجیان دانشگاه بهشتی. تمرکز بخش اعظم فعالیت‌های علمی بر مبنای آموزش زبان فارسی به غیرفارسی‌زبانان. عضو گروه برگزاری دوره‌های آموزشی زبان فارسی یرای زبان‌آموزانی از کشورهای غیرفارسی زبان طی سال‌های 95 تا 98.
                INTRO,
                'pic' => 'user_pics/marziyesadat_eatemadaleslami.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Akram-Seyedrezaei
            [
                'name' => 'اکرم‌بیگم حاجی‌سیدرضایی',
                'name_en' => 'Akram-Seyedrezaei',
                'email' => 'seyed.rezaee@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/akram_seyedrezaei.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Behrouz-MahmoodiBakhtiari
            [
                'name' => 'بهروز محمودی بختیاری',
                'name_en' => 'Behrouz-MahmoodiBakhtiari',
                'email' => 'mbakhtiari@ut.ac.ir',
                'intro' => null,
                'pic' => 'user_pics/behrouz_mahmoodibakhtiari.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Akram-Nematolahi
            [
                'name' => 'اکرم نعمت‌الهی',
                'name_en' => 'Akram-Nematolahi',
                'email' => 'ak.nematolahi@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/akram_nematolahi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Davoud-Maleklou
            [
                'name' => 'داود ملک‌لو',
                'name_en' => 'Davoud-Maleklou',
                'email' => 'davidmaleklou@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/davoud_maleklou.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Samaneh-Sadeghi
            [
                'name' => 'سمانه صادقی',
                'name_en' => 'Samaneh-Sadeghi',
                'email' => '',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Zohreh-Shirinbakhsh
            [
                'name' => 'زهره شیرین‌بخش',
                'name_en' => 'Zohreh-Shirinbakhsh',
                'email' => 'zohreh_shirinbakhsh@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Zeinab-Mortezaeifar
            [
                'name' => 'زینب مرتضائی‌فر',
                'name_en' => 'Zeinab-Mortezaeifar',
                'email' => 'zeinab_mortezaeifar@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Sofia-Koutlaki
            [
                'name' => 'سوفیا کتلاکی',
                'name_en' => 'Sofia-Koutlaki',
                'email' => 'kotlaki.s@qhu.ac.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Masoud-Fekri
            [
                'name' => 'مسعود فکری',
                'name_en' => 'Masoud-Fekri',
                'email' => 'masoud_fekri@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Melika-Torkaman
            [
                'name' => 'ملیکا ترکمان',
                'name_en' => 'Melika-Torkaman',
                'email' => 'melika_torkaman@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Hamideh-Latifinia
            [
                'name' => 'حمیده لطفی نیا',
                'name_en' => 'Hamideh-Latifinia',
                'email' => 'hamideh_latifinia@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Farzane-Aazamlotfi
            [
                'name' => 'فرزانه اعظم لطفی',
                'name_en' => 'Farzane-Aazamlotfi',
                'email' => 'farzane_aazamlotfi@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Falihe-Zahrakazemi
            [
                'name' => 'فلیحه زهرا کاظمی',
                'name_en' => 'Falihe-Zahrakazemi',
                'email' => 'falihe_zahrakazemi@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Yugvili
            [
                'name' => 'یوگویلی',
                'name_en' => 'Yugvili',
                'email' => 'yugvili@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Mohammad-AbukalamSarkar
            [
                'name' => 'محمد ابواکلام سرکار',
                'name_en' => 'Mohammad-AbukalamSarkar',
                'email' => 'mohammad_abukalamsarkar@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Klaus-Peterson
            [
                'name' => 'کلاوس پدرسون',
                'name_en' => 'Klaus-Peterson',
                'email' => 'klaus_peterson@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Maryam-Shafaghi
            [
                'name' => 'مریم شفقی',
                'name_en' => 'Maryam-Shafaghi',
                'email' => 'maryam_shafaghi@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Liliana-Markowic
            [
                'name' => 'لیلیانا مارکوویچ',
                'name_en' => 'Liliana-Markowic',
                'email' => 'liliana_markowic@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Leila-Banafshe
            [
                'name' => 'لیلا بنفشه',
                'name_en' => 'Leila-Banafshe',
                'email' => 'leila_banafshe@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Nastaran-Rostamzadeh
            [
                'name' => 'نسترن رستم‌زاده',
                'name_en' => 'Nastaran-Rostamzadeh',
                'email' => 'nastaran_rostamzadeh@saadifoundation.ir',
                'intro' => <<<INTRO
                نسترن رستم‌زاده، متولد 1361 در تهران است. وی دوره‌ی کارشناسی خود را درشته مترجمی زبان انگلیسی در دانشگاه چمران اهواز به اتمام رساند و سپس در رشته آموزش زبان فارسی به غیرفارسی زبانان در دانشگاه علامه طباطبایی به ادامه تحصیل پرداخت. همزمان با دوران دانشجویی همکاری خود را با بخش زبان فارسی کانون زبان ایران آغاز کرد و پس از اخذ مدرک کارشناسی ارشد با موسسه دهخدا و مرکز بین‌المللی آموزش زبان فارسی دانشگاه تهران شروع به همکاری کرد. در 8 سال گذشته علاوه بر همکاری با موسسات آموزشی از جمله موسسه دهخدا، در مدرسه سفارت آلمان به عنوان معلم زبان فارسی مشغول به کار است. وی هم اکنون دانشجوی آموزش زبان فارسی به غیر فارسی زبانان در مقطع دکترا در دانشگاه علامه طباطبایی است.
                INTRO,
                'pic' => 'user_pics/nastaran_rostamzadeh.jpg',
                'resume' => 'resumes/nastaran_rostamzadeh.pdf',
                'linkedin_link' => 'https://www.linkedin.com/in/nastaran-rostamzadeh-444442138',
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Mohammad-Aghaei
            [
                'name' => 'محمد آقایی',
                'name_en' => 'Mohammad-Aghaei',
                'email' => 'mohammad_aghaei@saadifoundation.ir',
                'intro' => null,
                'pic' => 'user_pics/mohammad_aghaei.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Nashmin-Valadi
            [
                'name' => 'نشمین ولدی',
                'name_en' => 'Nashmin-Valadi',
                'email' => 'nashminv@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/nashmin_valadi.jpg',
                'resume' => null,
                'linkedin_link' => 'https://www.linkedin.com/in/nashmin-valadi-a6747aab',
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Nazila-FarmaniAnoushe
            [
                'name' => 'نازیلا فرمانی‌انوشه',
                'name_en' => 'Nazila-FarmaniAnoushe',
                'email' => 'nazila_farmaniAnoushe@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Fateme-Afshar
            [
                'name' => 'فاطمه افشار',
                'name_en' => 'Fateme-Afshar',
                'email' => 'fateme_afshar@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //AliAsghar-Rahimi
            [
                'name' => 'علی‌اصغر رحیمی',
                'name_en' => 'AliAsghar-Rahimi',
                'email' => 'aliasghar_rahimi@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Neveeseh-Parsi
            [
                'name' => 'نشر نویسه پارسی',
                'name_en' => 'Neveeseh-Parsi',
                'email' => 'info@neveeseh.com',
                'intro' => <<<INTRO
                «نشر نویسه پارسی» فعالیت خود را در سال 1391، به مدیر مسئولی امیر احمدی آغاز كرد.
                بخش مهمی از كتاب‌های این نشر به حوزه علم زبان‌شناسی و علوم شناختی اختصاص دارد. از دیگر زمینه‌های کاری این انتشارات می‌توان به علوم انسانی، علوم اجتماعی، عمومی، ادبیات و دانشگاهی اشاره کرد.
                این انتشارات به‌عنوان ناشر تخصصی انجمن زبان‌شناسی ایران توانسته است تاکنون مجموعه مقالات بیش از 50 همایش ملی و بین‌المللی در حوزه علم زبان‌شناسی را منتشر کند. همچنین این نشر پیشنهاد دهنده، حامی اصلی و برگزارکننده جایزه معتبر «دکتر محمد مقدم» است، این جایزه هر ساله به رسالۀ برگزیده دکتری در رشته زبان‌شناسی همگانی اعطاء می‌شود.
                فروشگاه: تهران، خیابان انقلاب، روبروی دانشگاه تهران، ابتدای خیابان دانشگاه، کتابفروشی توس
                شماره تماس فروشگاه: 66461007
                شماره تماس دفتر انتشارات: 77053246
                INTRO,
                'pic' => 'user_pics/neveeseh_parsi.jpg',
                'resume' => 'resumes/neveeseh.pdf',
                'linkedin_link' => null,
                'website_link' => 'http://neveeseh.com',
                'orcid_link' => null,
            ],
            //Houshang-MoradiKermani
            [
                'name' => 'هوشنگ مرادی‌کرمانی',
                'name_en' => 'Houshang-MoradiKermani',
                'email' => 'houshang_moradikermani@saadifoundation.ir',
                'intro' => null,
                'pic' => 'user_pics/houshang_moradikermani.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Caroline-Croskery
            [
                'name' => 'کارولین کراسکری',
                'name_en' => 'Caroline-Croskery',
                'email' => 'caroline_croskery@saadifoundation.ir',
                'intro' => null,
                'pic' => 'user_pics/caroline_croskery.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Saadi-Foundation-Writers-Group
            [
                'name' => 'گروه تألیف بنیاد سعدی',
                'name_en' => 'Saadi-Foundation-Writers-Group',
                'email' => 'amoozesh@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Leila-Kiashemshaki
            [
                'name' => 'لیلا کیاشمشکی',
                'name_en' => 'Leila-Kiashemshaki',
                'email' => 'leila.kiashemshaki@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
            //Armina-Sergisian
            [
                'name' => 'آرمینا سرگیسیان',
                'name_en' => 'Armina-Sergisian',
                'email' => 'armina.sergisian@saadifoundation.ir',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
                'orcid_link' => null,
            ],
        ];
        foreach ($users_data as $user_data) {
            $user = new User;
            $user->name = $user_data['name'];
            $user->name_en = $user_data['name_en'];
            $user->email = $user_data['email'];
            $user->intro = $user_data['intro'];
            $user->pic = $user_data['pic'];
            $user->resume = $user_data['resume'];
            $user->linkedin_link = $user_data['linkedin_link'];
            $user->website_link = $user_data['website_link'];
            $user->orcid_link = $user_data['orcid_link'];
            $user->password = Hash::make('password');
            $user->save();
        }
    }
}
