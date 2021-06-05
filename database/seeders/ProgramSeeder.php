<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::insert([
            [
                'name' => 'venom',
                'price' => '399',
                'e_description' => '<p>A 13 week Program that is designed to build a strong foundation in powerlifting and building mass as well, this program deals with submaximal weights with different percentages on a daily basis.</p><p>Program Duration: 13 weeks</p><p>Training days: 5 days a week</p>',
                'a_description' => '<p>برنامج مكون من ١٣ اسبوع، مصمم لبناء اساس قوي و صلب في رياضة الباورليفتينق، هذا البرنامج مصمم ايضا لاضافة قوة كبيرة في الرفعات الرئيسية الثلاثة: سكوات، البينش بريس و الديدليفت،</p><p>هذا البرنامج يتعامل مع اوزان تحت الوزن الأقصى و بنسب مختلفة بشكل يومي</p><p>مدة البرنامج: ١٣ أسبوع</p><p>أيام التمرين: ٥ أيام في الإسبوع</p><p>نمط التمرين: جزء علوي و جزء سفلي</p>',
                'photos' => '["venom.jpg"]'
            ],
            [
                'name' => 'rage',
                'price' => '199',
                'e_description' => '<p>A 3 day split program using the conjugate method, maximal, submaximal weights are being used along with the repetition method, intensity and volume are keys of strength and muscle building and this program applies this concept.</p><p>Program Duration: 6 weeks</p><p>Training days: 3 days a week</p><p>Split: Full-Body style</p>',
                'a_description' => '<p>رنامج مصمم على مبدئ الطريقة التكاملية، أوزان قصوى و متوسطه تستخدم في هذا البرنامج للتأكد من الحفاظ على قوة الجهاز العصبي، تذكر ان الكثافة و الحجم هما عامل رئيسي ي بناء كتلة عضلية قوية</p><p>مدة البرنامج: ٦ أسابيع</p><p>مدة البرنامج: ١٣ أسبوع</p><p>عدد ايام التمرين: ٣ أيام في الاسبوع</p><p>نمط التمرين: تمرين الجسم كامل في يوم واحد</p>',
                'photos' => '["rage.jpg"]'
            ],
            [
                'name' => 'reload',
                'price' => '199',
                'e_description' => '<p>A 6 weeks program using the conjugate method, but with specially selected variations that targets certain weak-points at the body and helps overcoming them and building a strong powerlifting base.</p><p>Program Duration: 6 weeks</p><p>Training days: 4 days per week</p><p>Split: Upper / Lower Body style</p>',
                'a_description' => '<p>برنامج مبنى على الطريقة التكاملية و مبنى على أسس علمية ، في هذا البرنامج تم اختيار انواع معينة من الرفعات الثلاث الرئيسية بالإضافة الى تمارين كمال الأجسام لتحقيق جسم قوي و جميل</p><p>مدة البرنامج: ٦ أسابيع</p><p>أيام التمرين: ٤ أيام في الإسبوع</p><p>نمط التمرين: جزء علوي و جزء سفلي</p>',
                'photos' => '["reload.jpg"]'

            ],
            [
                'name' => 'full-force',
                'price' => '199',
                'e_description' => "<p>A 6 weeks program that utilizes the conjugate method, dealing with max effort method and dynamic method, this program is upper-lower body split and it's designed to push your strength and size to a new level </p><p>Program Duration: 6 weeks</p><p>Training days: 4 days per week</p><p>Split: Upper / Lower Body style</p>",
                'a_description' => '<p>برنامج مبنى على الطريقة التكاملية و مبنى على أسس علمية ، طريقة القوة القصوى و طريقة السرعة القصوى مستخدمة في هذا البرنامج لبناء قوة و شكل جميل في نفس الوقت</p><p>مدة البرنامج: ٦ أسابيع</p><p>أيام التمرين: ٤ أيام في الإسبوع</p><p>نمط التمرين: جزء علوي و جزء سفلي</p>',
                'photos' => '["full-force.jpg"]'
            ],
            [
                'name' => 'deadlift-boost',
                'price' => '199',
                'e_description' => '<p>A 6 week conjugate base deadlift only program, using multiple variations that will add up to the main deadlift!</p><p>Program Duration: 6 weeks</p><p>Training days: 3 days per week </p><p>Split: Deadlift Variations & accessory days</p>',
                'a_description' => '<p>برنامج مصمم من الطريقة التكاملية، حيث يتم استهداف نقاط الضعف و تقويتها لتصبح شخص اقوى، يتم استخدام أنواع مختلفة من الديدليفت بحيث تكون اصعب مع الأيام مما يؤدي إلى تقوية و زيادة الديدلفت فقط </p><p>مدة الرنامج: ٦ أسابيع</p><p>أيام التمرين: ٣ أيام في الإسبوع</p><p>نمط التمرين: انواع مختلفة من الديدليفت تستهدف نقاط ضعف معينة</p>',
                'photos' => '["deadlift-boost.jpg"]'
            ],
            [
                'name' => "deadlift-focus",
                "price" => "199",
                "e_description" => "<p>A 6 weeks program of deadlifting, 3 days per week, high intensity, low intensity and Accessory days, conjugate method is the backbone of this program, this program focuses on deadlift only!</p><p>Program Duration: 6 weeks</p><p>Training Days: 3 days per week</p><p>Split: High-Low Intensity & accessory days</p>",
                "a_description" => "<p>برنامج مصمم من الطريقة التكاملية، حيث يتم استهداف نقاط الضعف و تقويتها لتصبح شخص اقوى، يتم استخدام أنواع مختلفة من الديدليفت بحيث تكون اصعب مع الأيام ممايؤدي إلى تقوية و زيادة الديدلفت فقط </p><p>مدة الرنامج: ٦ أسابيع</p><p>أيام التمرين: ٣ أيام في الإسبوع</p><p> نمط التمرين: كثافة عالية، خفيفة و أيام تقوية نقاط الضعف</p>",
                "photos" => '["deadlift-focus.jpg"]'
            ],
            [
                'name' => "deadlift-peak",
                "price" => "199",
                "e_description" => "<p>8 weeks program of only deadlift, 3 day split using the conjugate method: max-effort days, dynamic days and speed day, this program is designed to peak your deadlift only.</p><p>Program Duration: 8 weeks</p><p>Training Days: 3 days per week</p><p>Split: High-Moderate-Low Intensity</p>",
                "a_description" => "<p>برنامج مصمم من الطريقة التكاملية، حيث يتم استهداف نقاط الضعف و تقويتها لتصبح شخص اقوى، يتم استخدام طريقة القوة القصوى، طريقة السرعة القصوى و طريقة التكرار، هذا البرنامج مصمم لزيادة الديدلفت فقط </p><p>مدة الرنامج: ٨ أسابيع</p><p>أيام التمرين: ٣ أيام في الإسبوع</p><p>نمط التمرين: كثافة عالية، متوسطة و خفيفة</p>",
                "photos" => '["deadlift-peak.jpg"]'
            ],
            [
                'name' => "Punisher",
                "price" => "599",
                "e_description" => "<p>A 16 week program that is designed to build muscle size and strength, program is built around squat, bench and deadlift utilizing the repetition method, max effort method and the dynamic method.
                Intensity, frequency and volume are manipulated in an engineering way to best serve your goals</p><p>Program Duration: 16 weeks</p><p>Training days: 5 days per week</p><p>Split: Upper / Lower Body style</p><p>Calories recomended (based on goal):</p><p>1. maintenance calories</p><p>2. surpluse 300 cal</p><p>3.deficit 200 cal</p>",
                "a_description" => "<p>برنامج مكون من ١٦ إسبوع، البرنامج مصمم لاضافة حجم عضلي ، قوة مطلقة و صلابة في العظام، البرنامج يتمحور حول اعمدة الأساس في بناء عضل و قوة و هي الرفعات الاساسية الثلاثة: السكوات، البينش بريس و الديدليفت، البرنامج مصمم بطريقة علمية بحته من خلال عدة مناهج منها طريقة القوة القصوى، طريقة السرعة القصوى و طريقة التكرار</p><p>مدة البرنامج: ١٦ أسابيع</p><p>أيام التمرين: ٥ أيام في الإسبوع</p><p>نمط التمرين: جزء علوي و جزء سفلي</p><p>السعرات الحرارية المطلوبة (يتم الاإختبار على حسب الهدف): ١. سعرات محافظة</p><p>٢. سعرات زيادة بمقدار ٣٠٠ سعرة</p><p>٣. سعرات نقص بقدار٢٠٠ سعرة</p>",
                "photos" => '["punisher.jpg"]'
            ],
        ]);
    }
}
