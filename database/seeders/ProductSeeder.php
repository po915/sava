<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                "name" => "The Bench",
                "price" => "4999",
                "description" => "<p>The Bench is the best bench press you will ever find in the market, in terms of building absolute strength, and targeting specific weaknesses via  variations, the design is inspired by the Lui simmons known as the godfather of strength, durability and load this bench can handle is a next level. The pad is a competition standard size and its fat so that it can give you better back foundation for a stronger bench. </p>",
                "spec" => "<ul><li>Made in KSA</li><li>4x4 11-Gauge steel with numbered holes for best targeting specific weaknesses&nbsp;</li><li>Fat wide competition pad for best back base support</li><li>Diamond -Tread Spotter Stands</li><li>4X Band pins for speed work</li><li>SAVAGES Laser Cut branding</li><li>Black finish</li></ul>",
                "photos" => '["bench (1).jpg", "bench (2).jpg", "bench (3).jpg", "bench (4).jpg", "bench (5).jpg", "bench (6).jpg"]'
            ],
            [
                "name" => "The Rig",
                "price" => "25000",
                "description" => "<p>The rig is the ultimate station of strength and sports, it's a hub for powerlifters, Olympic lifters, cross fitters and sports athletes, it consists of the following:</p><ol><li>6x Squat Racks with custom band attachments</li><li>6x Bench Press stations with custom band attachments</li><li>10x pull-up stations</li><li>Monkey bars with a length of 70” for conditioning and athleticism</li></ol>",
                "spec" => "<ul>
                <li>Made in KSA</li>
                <li>4x4 11-Gauge Steel with holes through the column for best bench and squat racking experience</li>
                <li>4x4 11-Gauge steel grounded column with holes across the entire column for bands experience while squatting or benching&nbsp;</li>
                <li>Length: 7.4 meters</li>
                <li>Width: &nbsp;2 meters</li>
                <li>Hight: 2.7 meters</li>
                <li>SAVAGES Laser cut branding</li>
                <li>Black finish</li>
            </ul>",
                "photos" => '["rig (1).jpg", "rig (2).jpg", "rig (3).jpg", "rig (4).jpg", "rig (5).jpg", "rig (6).jpg", "rig (7).jpg", "rig (8).jpg", "rig (9).jpg"]'

            ],
            [
                "name" => "Deadlift Platform",
                "price" => "3500",
                "description" => "<p>The best way to build your deadlift is by increasing your speed and power of the floor and at lock-out, this platform makes sure that you do that by the utilization of bands. This platform has band pigs where you can easily setup your deadlift with your bands and is fast and explosive.</p>",
                "spec" => "<ul>
                <li>Made in KSA</li>
                <li>3x3 11-Gauge Steel</li>
                <li>Length: 2.5 meters</li>
                <li>Width: &nbsp;1.5 meters</li>
                <li>20ml thickness rubber tiles on both sides for longevity of the platform and noise cancellation &nbsp;</li>
                <li>SAVAGES logo branding on the center&nbsp;</li>
                <li>Black finish &nbsp; &nbsp;</li>
            </ul>",
                "photos" => '["deadlift (1).jpg", "deadlift (2).jpg", "deadlift (3).jpg", "deadlift (4).jpg", "deadlift (5).jpg", "deadlift (6).jpg", "deadlift (7).jpg"]'
            ],
            [
                "name" => "The Sled",
                "price" => "2000",
                "description" => "<p>Push it! Or Pull it!, the sled is a key factor when it comes to speed, strength, power, and conditioning, its multi-task tool, like building your posterior chain size and strength, building your core strength, losing fat,.., etc, the list goes on and on, it is a must for any sport.</p>",
                "spec" => "<ul>
                <li>Made in KSA</li>
                <li>2x3” 11-Gauge Steel</li>
                <li>Length: 1 meter</li>
                <li>Width: &nbsp;0.6 meter</li>
                <li>Hight: 1 meter&nbsp;</li>
                <li>SAVAGES Laser Cut branding &nbsp;</li>
                <li>Black finish&nbsp;</li>
            </ul>",
                "photos" => '["sled (1).jpg", "sled (2).jpg", "sled (3).jpg"]'
            ],
            [
                "name" => "Chalk Box",
                "price" => "1000",
                "description" => "<p>If your looking to build your grip strength, then you should consider using chalks, this amazing looking box is designed to contain your chalk powder and maintaining a clean environment.</p>",
                "spec" => "<ul>
                <li>Made in KSA</li>
                <li>diamond Tread sheets</li>
                <li>Length: 0.4 meter</li>
                <li>Width: &nbsp; 0.4 meter</li>
                <li>Hight: 1 meter&nbsp;</li>
                <li>SAVAGES Laser Cut branding &nbsp;</li>
                <li>Black finish &nbsp; &nbsp;</li>
            </ul>",
                "photos" => '["chalk (1).jpg", "chalk (2).jpg", "chalk (3).jpg", "chalk (4).jpg", "chalk (5).jpg", "chalk (6).jpg"]'
            ],
            [
                "name" => "Dips attachment",
                "price" => "700",
                "description" => "<p>Our Drip attachment gives gym owners the versatility of a secure, fully adjustable dip station—compatible with our Rig, it's made of 2x3” 7 gauge steel, it features welded joints and a lock-in anchoring system to maintain max stability throughout a workout. The two comfort-grip handles measure 1.875” in diameter and are set at an angle to allow a greater variety of grip width options.</p>",
                "spec" => "<ul>
                <li>Made in KSA&nbsp;</li>
                <li>2x3” 7 Gauge steel&nbsp;</li>
                <li>Anchoring system keeps unit sturdy and secure</li>
                <li>length: &nbsp; 0.6 meter</li>
                <li>Black finish &nbsp; &nbsp;</li>
            </ul>",
                "photos" => '["dips (1).jpg", "dips (2).jpg", "dips (3).jpg", "dips (4).jpg"]'
            ]
        ]);
    }
}


