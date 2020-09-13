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
        $users_data = [
            [
                'name' => 'رضامراد صحرایی',
                'name_en' => 'Reza-Sahraee',
                'email' => 'rezasahraee@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/reza_sahraee.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'افسانه غریبی',
                'name_en' => 'Afsaneh-Gharibi',
                'email' => 'gharibi.afsaneh@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/afsaneh_gharibi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'امیر احمدی',
                'name_en' => 'Amir-Ahmadi',
                'email' => 'aemeer@hotmail.com',
                'intro' => null,
                'pic' => 'user_pics/amir_ahmadi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'حمید آقایی',
                'name_en' => 'Hamid-Aghaei',
                'email' => 'hamid.aghaei@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/hamid_aghaei.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'مروارید طالبی',
                'name_en' => 'Morvarid-Talebi',
                'email' => 'morvarid.talebi@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/morvarid_talebi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'مریم سلطانی',
                'name_en' => 'Maryam-Soltani',
                'email' => 'mrym.soltani@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/maryam_soltani.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'منیره شهباز',
                'name_en' => 'Monire-Shahbaz',
                'email' => 'shahbaz.mnr@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/monire_shahbaz.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'سیده فاطمه طبسی',
                'name_en' => 'Seyede-Fateme-Tabasi',
                'email' => 'seyede.fateme.tabasi@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/seyede_fateme_tabasi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'فائزه مرصوص',
                'name_en' => 'Faeze-Marsous',
                'email' => 'fmarsous2001@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/faeze_marsous.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'هانیه مشایخی',
                'name_en' => 'Hanieh-Mashayekhi',
                'email' => 'mashayekhi.h93@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/hanieh_mashayekhi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'امیرحسین مجیری فروشانی',
                'name_en' => 'Amirhossein-Mojiri-Foroushani',
                'email' => 'amojiry@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/amirhossein_mojiriforoushani.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'آزاده شکری',
                'name_en' => 'Azadeh-Shokri',
                'email' => 'shokri_azadeh@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/azadeh_shokri.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'غلامحسین رضاپور',
                'name_en' => 'GholamHosein-Rezapour',
                'email' => 'gh.hossein88rzp@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/gholamhosein_rezapour.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'بابک نوبهاری',
                'name_en' => 'Babak-Nobahari',
                'email' => 'b.nobahari53@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/babak_nobahari.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'محمد محرابی',
                'name_en' => 'Mohammd-Mehraabi',
                'email' => 'mehrabi.graphicdesigner@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/mohammd_mehraabi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'مجید شمس‌الدین‌نژاد',
                'name_en' => 'Majid-Shamsoddinnejad',
                'email' => 'md.1382@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/majid_shamsoddinnejad.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'شهناز احمدی‌قادر',
                'name_en' => 'Shahnaz-Ahmadighader',
                'email' => 'sh.ahmadi53@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/shahnaz_ahmadighader.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'مرضیه‌سادات اعتمادالاسلامی',
                'name_en' => 'Marziehsadat-Eatemdoleslami',
                'email' => 'eatmad.m@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/marziehsadat_eatemdoleslami.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'اکرم‌بیگم حاجی‌سیدرضایی',
                'name_en' => 'Akram-Seyedrezaei',
                'email' => 'seyed.rezaee@yahoo.com',
                'intro' => null,
                'pic' => 'user_pics/akram_seyedrezaei.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'هدی سلیمی',
                'name_en' => 'Hoda-Salimi',
                'email' => 'hoda.salimi136722@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/hoda_salimi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'بهروز محمودی بختیاری',
                'name_en' => 'Behrouz-Mahmoodi-Bakhtiari',
                'email' => 'mbakhtiari@ut.ac.ir',
                'intro' => null,
                'pic' => 'user_pics/behrouz_mahmoodibakhtiari.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'اکرم نعمت‌الهی',
                'name_en' => 'Akram-Nematolahi',
                'email' => 'ak.nematolahi@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/akram_nematolahi.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'داود ملک‌لو',
                'name_en' => 'Davoud-Maleklou',
                'email' => 'davidmaleklou@gmail.com',
                'intro' => null,
                'pic' => 'user_pics/davoud_maleklou.jpg',
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
            ],
            [
                'name' => 'سمانه صادقی',
                'name_en' => 'Samaneh-Sadeghi',
                'email' => '',
                'intro' => null,
                'pic' => null,
                'resume' => null,
                'linkedin_link' => null,
                'website_link' => null,
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
            $user->password = Hash::make('password');
            $user->save();
        }
    }
}
