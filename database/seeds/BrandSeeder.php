<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Modele;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand1 = Brand::create(['name' => 'Aston Martin']);
        $brand2 = Brand::create(['name' => 'Audi']);
        $brand3 = Brand::create(['name' => 'BMW']);
        $brand4 = Brand::create(['name' => 'Bentley']);
        $brand5 = Brand::create(['name' => 'Bugatti']);
        $brand6 = Brand::create(['name' => 'Cadillac']);
        $brand7 = Brand::create(['name' => 'Chevrolet']);
        $brand8 = Brand::create(['name' => 'Chrysler']);
        $brand9 = Brand::create(['name' => 'Dodge']);
        $brand10 = Brand::create(['name' => 'Ferrari']);
        $brand11 = Brand::create(['name' => 'Fiat']);
        $brand12 = Brand::create(['name' => 'Ford']);
        $brand13 = Brand::create(['name' => 'GMC']);
        $brand14 = Brand::create(['name' => 'Honda']);
        $brand15 = Brand::create(['name' => 'Hummer']);
        $brand16 = Brand::create(['name' => 'Hyundai']);
        $brand17 = Brand::create(['name' => 'Infiniti']);
        $brand18 = Brand::create(['name' => 'Jaguar']);
        $brand19 = Brand::create(['name' => 'Jeep']);
        $brand20 = Brand::create(['name' => 'Kia']);
        $brand21 = Brand::create(['name' => 'Lamborghini']);
        $brand22 = Brand::create(['name' => 'Land Rover']);
        $brand23 = Brand::create(['name' => 'Lexus']);
        $brand24 = Brand::create(['name' => 'MINI']);
        $brand25 = Brand::create(['name' => 'Maserati']);
        $brand26 = Brand::create(['name' => 'Maybach']);
        $brand27 = Brand::create(['name' => 'Mazda']);
        $brand28 = Brand::create(['name' => 'Mclaren']);
        $brand29 = Brand::create(['name' => 'Mercedes-Benz']);
        $brand30 = Brand::create(['name' => 'Mitsubishi']);
        $brand31 = Brand::create(['name' => 'Nissan']);
        $brand32 = Brand::create(['name' => 'Opel']);
        $brand33 = Brand::create(['name' => 'Peugeout']);
        $brand34 = Brand::create(['name' => 'Porsche']);
        $brand35 = Brand::create(['name' => 'Range Rover']);
        $brand36 = Brand::create(['name' => 'Renault']);
        $brand37 = Brand::create(['name' => 'Rolls Royce']);
        $brand38 = Brand::create(['name' => 'Scoda']);
        $brand39 = Brand::create(['name' => 'Subaru']);
        $brand40 = Brand::create(['name' => 'Suzuki']);
        $brand41 = Brand::create(['name' => 'Toyota']);
        $brand42 = Brand::create(['name' => 'Volkswagen']);
        $brand43 = Brand::create(['name' => 'Volvo']);

        $brand1->models()->create(['name' => 'DB11']);
        $brand1->models()->create(['name' => 'DB9']);
        $brand1->models()->create(['name' => 'DBS']);
        $brand1->models()->create(['name' => 'Rapide']);
        $brand1->models()->create(['name' => 'Vinquich']);
        $brand1->models()->create(['name' => 'Vantage']);

        $brand2->models()->create(['name' => 'A3']);
        $brand2->models()->create(['name' => 'A4']);
        $brand2->models()->create(['name' => 'A5']);
        $brand2->models()->create(['name' => 'A6']);
        $brand2->models()->create(['name' => 'A7']);
        $brand2->models()->create(['name' => 'A8']);
        $brand2->models()->create(['name' => 'Q2']);
        $brand2->models()->create(['name' => 'Q3']);
        $brand2->models()->create(['name' => 'Q4']);
        $brand2->models()->create(['name' => 'Q5']);
        $brand2->models()->create(['name' => 'Q6']);
        $brand2->models()->create(['name' => 'Q7']);
        $brand2->models()->create(['name' => 'Q8']);
        $brand2->models()->create(['name' => 'R8']);
        $brand2->models()->create(['name' => 'RS4']);
        $brand2->models()->create(['name' => 'RS6']);
        $brand2->models()->create(['name' => 'S3']);
        $brand2->models()->create(['name' => 'S5']);
        $brand2->models()->create(['name' => 'S6']);
        $brand2->models()->create(['name' => 'S8']);
        $brand2->models()->create(['name' => 'TT']);

        // BMW
        $brand3->models()->create(['name' => '1-series']);
        $brand3->models()->create(['name' => '2-series']);
        $brand3->models()->create(['name' => '3-series']);
        $brand3->models()->create(['name' => '4-series']);
        $brand3->models()->create(['name' => '5-series']);
        $brand3->models()->create(['name' => '6-series']);
        $brand3->models()->create(['name' => '7-series']);
        $brand3->models()->create(['name' => '8-series']);
        $brand3->models()->create(['name' => 'M-coupe']);
        $brand3->models()->create(['name' => 'M2']);
        $brand3->models()->create(['name' => 'M3']);
        $brand3->models()->create(['name' => 'M4']);
        $brand3->models()->create(['name' => 'M5']);
        $brand3->models()->create(['name' => 'M6']);
        $brand3->models()->create(['name' => 'M8']);
        $brand3->models()->create(['name' => 'X1']);
        $brand3->models()->create(['name' => 'X3']);
        $brand3->models()->create(['name' => 'X4']);
        $brand3->models()->create(['name' => 'X5']);
        $brand3->models()->create(['name' => 'X6']);
        $brand3->models()->create(['name' => 'X7']);
        $brand3->models()->create(['name' => 'Z4']);

        //Bentley
        $brand4->models()->create(['name' => 'Arnage']);
        $brand4->models()->create(['name' => 'Azure']);
        $brand4->models()->create(['name' => 'Bentayga']);
        $brand4->models()->create(['name' => 'Continental']);
        $brand4->models()->create(['name' => 'Continental Flying Spur']);
        $brand4->models()->create(['name' => 'Continental GT']);
        $brand4->models()->create(['name' => 'Mulsanne']);

        //Bugatti
        $brand5->models()->create(['name' => 'Chiron']);
        $brand5->models()->create(['name' => 'Veyron']);
        $brand5->models()->create(['name' => 'Veyron Super Sport']);

        //Cadillac
        $brand6->models()->create(['name' => 'ATS']);
        $brand6->models()->create(['name' => 'CTS/Catera']);
        $brand6->models()->create(['name' => 'CTS/De Ville']);
        $brand6->models()->create(['name' => 'Escalade']);
        $brand6->models()->create(['name' => 'SRX']);
        $brand6->models()->create(['name' => 'XT5']);

        //Camaro
        $brand7->models()->create(['name' => 'Astro']);
        $brand7->models()->create(['name' => 'Aveo']);
        $brand7->models()->create(['name' => 'Camaro']);
        $brand7->models()->create(['name' => 'Caprice']);
        $brand7->models()->create(['name' => 'Captiva']);
        $brand7->models()->create(['name' => 'Corvette']);
        $brand7->models()->create(['name' => 'Cruze']);
        $brand7->models()->create(['name' => 'Malibu']);
        $brand7->models()->create(['name' => 'Silverado']);
        $brand7->models()->create(['name' => 'Tahoe']);
        $brand7->models()->create(['name' => 'Trailblazer']);

        //Crysler
        $brand8->models()->create(['name' => '200/200C EV']);
        $brand8->models()->create(['name' => '300M/300C']);
        $brand8->models()->create(['name' => 'Crossfire']);

        //Dodge
        $brand9->models()->create(['name' => 'Challenger']);
        $brand9->models()->create(['name' => 'Charger']);
        $brand9->models()->create(['name' => 'Dart']);
        $brand9->models()->create(['name' => 'Durango']);
        $brand9->models()->create(['name' => 'Journey']);
        $brand9->models()->create(['name' => 'Nitro']);
        $brand9->models()->create(['name' => 'Ram']);

        //Ferrai
        $brand10->models()->create(['name' => '458 Italia']);
        $brand10->models()->create(['name' => '458 Speciale']);
        $brand10->models()->create(['name' => '458 Spider']);
        $brand10->models()->create(['name' => '488']);
        $brand10->models()->create(['name' => '488 GTB']);
        $brand10->models()->create(['name' => '599 GTB']);
        $brand10->models()->create(['name' => '812 Superfast']);
        $brand10->models()->create(['name' => 'California']);
        $brand10->models()->create(['name' => 'California T']);
        $brand10->models()->create(['name' => 'F12']);
        $brand10->models()->create(['name' => 'F12 TDF']);
        $brand10->models()->create(['name' => 'F430']);
        $brand10->models()->create(['name' => 'F430 Spider']);
        $brand10->models()->create(['name' => 'GTC4 Lusso']);
        $brand10->models()->create(['name' => 'LaFerrari']);

        //FIAT
        $brand11->models()->create(['name' => '500X']);
        $brand11->models()->create(['name' => 'Fiat-500']);
        $brand11->models()->create(['name' => 'Pinto']);

        // Ford
        $brand12->models()->create(['name' => 'Bronco']);
        $brand12->models()->create(['name' => 'Ecosport']);
        $brand12->models()->create(['name' => 'Edge']);
        $brand12->models()->create(['name' => 'Escape']);
        $brand12->models()->create(['name' => 'Expedition']);
        $brand12->models()->create(['name' => 'Explorer']);
        $brand12->models()->create(['name' => 'F-series Pickup']);
        $brand12->models()->create(['name' => 'Fiesta']);
        $brand12->models()->create(['name' => 'Figo']);
        $brand12->models()->create(['name' => 'Flex']);
        $brand12->models()->create(['name' => 'Focus']);
        $brand12->models()->create(['name' => 'Fusion']);
        $brand12->models()->create(['name' => 'Mustang']);
        $brand12->models()->create(['name' => 'Pickup']);
        $brand12->models()->create(['name' => 'Ranger']);
        $brand12->models()->create(['name' => 'Taurus']);
        $brand12->models()->create(['name' => 'Van']);

        //GMC
        $brand13->models()->create(['name' => 'Acadia']);
        $brand13->models()->create(['name' => 'Pickup']);
        $brand13->models()->create(['name' => 'Sierra']);
        $brand13->models()->create(['name' => 'Suburban']);
        $brand13->models()->create(['name' => 'Terrain']);
        $brand13->models()->create(['name' => 'Yukon']);

        //Honda
        $brand14->models()->create(['name' => 'Accord']);
        $brand14->models()->create(['name' => 'CR-V']);
        $brand14->models()->create(['name' => 'Civic']);
        $brand14->models()->create(['name' => 'Odyssey']);
        $brand14->models()->create(['name' => 'Pilot']);
        $brand14->models()->create(['name' => 'S2000']);

        //Hummer
        $brand15->models()->create(['name' => 'H2']);
        $brand15->models()->create(['name' => 'H3']);

        //Huyndai
        $brand16->models()->create(['name' => 'Accent']);
        $brand16->models()->create(['name' => 'Azera']);
        $brand16->models()->create(['name' => 'Creta']);
        $brand16->models()->create(['name' => 'Elantra']);
        $brand16->models()->create(['name' => 'Genesis']);
        $brand16->models()->create(['name' => 'H1']);
        $brand16->models()->create(['name' => 'Kona']);
        $brand16->models()->create(['name' => 'Palisade']);
        $brand16->models()->create(['name' => 'Santa Fe']);
        $brand16->models()->create(['name' => 'Sonata']);
        $brand16->models()->create(['name' => 'Tucson']);
        $brand16->models()->create(['name' => 'Veloster']);
        $brand16->models()->create(['name' => 'i30']);

        // Infinity
        $brand17->models()->create(['name' => 'EX35']);
        $brand17->models()->create(['name' => 'FX45/FX35']);
        $brand17->models()->create(['name' => 'G-series']);
        $brand17->models()->create(['name' => 'M-series']);
        $brand17->models()->create(['name' => 'Q30']);
        $brand17->models()->create(['name' => 'Q40']);
        $brand17->models()->create(['name' => 'Q50']);
        $brand17->models()->create(['name' => 'Q60']);
        $brand17->models()->create(['name' => 'Q70']);
        $brand17->models()->create(['name' => 'QX30']);
        $brand17->models()->create(['name' => 'QX50']);
        $brand17->models()->create(['name' => 'QX56']);
        $brand17->models()->create(['name' => 'QX60']);
        $brand17->models()->create(['name' => 'QX70']);
        $brand17->models()->create(['name' => 'QX80']);

        // Jaguar
        $brand18->models()->create(['name' => 'F Pace']);
        $brand18->models()->create(['name' => 'X Type']);
        $brand18->models()->create(['name' => 'XF']);
        $brand18->models()->create(['name' => 'XJ Series']);
        $brand18->models()->create(['name' => 'XJ6']);
        $brand18->models()->create(['name' => 'XJR']);
        $brand18->models()->create(['name' => 'XK']);
        $brand18->models()->create(['name' => 'XKR']);

        // JEEP
        $brand19->models()->create(['name' => 'Cherokee']);
        $brand19->models()->create(['name' => 'Grand Cherokee']);
        $brand19->models()->create(['name' => 'Wrangler']);



    }
}
