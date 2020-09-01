<?php

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
        $user = new User;
        $user->name = 'رضامراد صحرایی';
        $user->name_en = 'Reza Sahraee';
        $user->email = 'rezasahraee@yahoo.com';
        $user->intro = '';
        $user->pic = 'user_pics/reza_sahraee.jpg';
        $user->resume = 'resumes/reza_sahraee.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https"//';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'افسانه غریبی';
        $user->name_en = 'Afsaneh Gharibi';
        $user->email = 'gharibi.afsaneh@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/afsaneh_gharibi.jpg';
        $user->resume = 'resumes/afsaneh_gharibi.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'امیر احمدی';
        $user->name_en = 'Amir Ahmadi';
        $user->email = 'aemeer@hotmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/amir_ahmadi.jpg';
        $user->resume = 'resumes/amir_ahmadi.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'حمید آقایی';
        $user->name_en = 'Hamid Aghaei';
        $user->email = 'hamid.aghaei@yahoo.com';
        $user->intro = '';
        $user->pic = 'user_pics/hamid_aghaei.jpg';
        $user->resume = 'resumes/hamid_aghaei.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'مروارید طالبی';
        $user->name_en = 'Morvarid Talebi';
        $user->email = 'morvarid.talebi@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/morvarid_talebi.jpg';
        $user->resume = 'resumes/morvarid_talebi.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();
        
        $user = new User;
        $user->name = 'مریم سلطانی';
        $user->name_en = 'Maryam Soltani';
        $user->email = 'mrym.soltani@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/maryam_soltani.jpg';
        $user->resume = 'resumes/maryam_soltani.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'منیره شهباز';
        $user->name_en = 'Monire Shahbaz';
        $user->email = 'shahbaz.mnr@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/monire_shahbaz.jpg';
        $user->resume = 'resumes/monire_shahbaz.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'سیده فاطمه طبسی';
        $user->name_en = 'Seyede Fateme Tabasi';
        $user->email = 'seyede.fateme.tabasi@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/seyede_fateme_tabasi.jpg';
        $user->resume = 'resumes/seyede_fateme_tabasi.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'فائزه مرصوص';
        $user->name_en = 'Faeze Marsous';
        $user->email = 'fmarsous2001@yahoo.com';
        $user->intro = '';
        $user->pic = 'user_pics/faeze_marsous.jpg';
        $user->resume = 'resumes/faeze_marsous.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'هانیه مشایخی';
        $user->name_en = 'Hanieh Mashayekhi';
        $user->email = 'mashayekhi.h93@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/hanieh_mashayekhi.jpg';
        $user->resume = 'resumes/hanieh_mashayekhi.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'امیرحسین مجیری فروشانی';
        $user->name_en = 'Amirhossein Mojiri Foroushani';
        $user->email = 'amojiry@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/amirhossein_mojiriforoushani.jpg';
        $user->resume = 'resumes/amirhossein_mojiriforoushani.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'آزاده شکری';
        $user->name_en = 'Azadeh Shokri';
        $user->email = 'shokri_azadeh@yahoo.com';
        $user->intro = '';
        $user->pic = 'user_pics/azadeh_shokri.jpg';
        $user->resume = 'resumes/azadeh_shokri.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'غلامحسین رضاپور';
        $user->name_en = 'GholamHosein Rezapour';
        $user->email = 'gh.hossein88rzp@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/gholamhosein_rezapour.jpg';
        $user->resume = 'resumes/gholamhosein_rezapour.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'بابک نوبهاری';
        $user->name_en = 'Babak Nobahari';
        $user->email = 'b.nobahari53@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/babak_nobahari.jpg';
        $user->resume = 'resumes/babak_nobahari.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'محمد محرابی';
        $user->name_en = 'Mohammd Mehraabi';
        $user->email = 'mehrabi.graphicdesigner@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/mohammd_mehraabi.jpg';
        $user->resume = 'resumes/mohammd_mehraabi.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'مجید شمس‌الدین‌نژاد';
        $user->name_en = 'Majid Shamsoddinnejad';
        $user->email = 'md.1382@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/majid_shamsoddinnejad.jpg';
        $user->resume = 'resumes/majid_shamsoddinnejad.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'شهناز احمدی‌قادر';
        $user->name_en = 'Shahnaz Ahmadighader';
        $user->email = 'sh.ahmadi53@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/shahnaz_ahmadighader.jpg';
        $user->resume = 'resumes/shahnaz_ahmadighader.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'مرضیه‌سادات اعتمادالاسلامی';
        $user->name_en = 'Marziehsadat Eatemdoleslami';
        $user->email = 'eatmad.m@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/marziehsadat_eatemdoleslami.jpg';
        $user->resume = 'resumes/marziehsadat_eatemdoleslami.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'اکرم‌بیگم حاجی‌سیدرضایی';
        $user->name_en = 'Akram Seyedrezaei';
        $user->email = 'seyed.rezaee@yahoo.com';
        $user->intro = '';
        $user->pic = 'user_pics/akram_seyedrezaei.jpg';
        $user->resume = 'resumes/akram_seyedrezaei.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'هدی سلیمی';
        $user->name_en = 'Hoda Salimi';
        $user->email = 'hoda.salimi136722@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/hoda_salimi.jpg';
        $user->resume = 'resumes/hoda_salimi.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'بهروز محمودی بختیاری';
        $user->name_en = 'Behrouz Mahmoodi Bakhtiari';
        $user->email = 'mbakhtiari@ut.ac.ir';
        $user->intro = '';
        $user->pic = 'user_pics/behrouz_mahmoodibakhtiari.jpg';
        $user->resume = 'resumes/behrouz_mahmoodibakhtiari.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'اکرم نعمت‌الهی';
        $user->name_en = 'Akram Nematolahi';
        $user->email = 'ak.nematolahi@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/akram_nematolahi.jpg';
        $user->resume = 'resumes/akram_nematolahi.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'داود ملک‌لو';
        $user->name_en = 'Davoud Maleklou';
        $user->email = 'davidmaleklou@gmail.com';
        $user->intro = '';
        $user->pic = 'user_pics/davoud_maleklou.jpg';
        $user->resume = 'resumes/davoud_maleklou.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User;
        $user->name = 'سمانه صادقی';
        $user->name_en = 'Samaneh Sadeghi';
        $user->email = '';
        $user->intro = '';
        $user->pic = 'user_pics/.jpg';
        $user->resume = 'resumes/.pdf';
        $user->linkedin_link = 'https://linkedin.com/';
        $user->website_link = 'https://';
        $user->password = Hash::make('password');
        $user->save();
    }
}
