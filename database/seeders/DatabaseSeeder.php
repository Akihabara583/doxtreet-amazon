<?php

namespace Database\Seeders;





use Illuminate\Database\Seeder;
use \Database\Seeders\UA\UaWorkSeeder;
use \Database\Seeders\UA\UaPersonalFamilySeeder;
use \Database\Seeders\UA\UaRealEstateSeeder;
use \Database\Seeders\UA\UaLegalDocumentsSeeder;
use \Database\Seeders\UA\UaEducationSeeder;
use \Database\Seeders\UA\UaHealthMedicineSeeder;
use \Database\Seeders\UA\UaEventsTravelSeeder;
use \Database\Seeders\UA\UaCarsSeeder;

use \Database\Seeders\PL\PlWorkSeeder;
use \Database\Seeders\PL\PlPersonalFamilySeeder;
use \Database\Seeders\PL\PlRealEstateSeeder;
use \Database\Seeders\PL\PlLegalDocumentsSeeder;
use \Database\Seeders\PL\PlEducationSeeder;
use \Database\Seeders\PL\PlHealthMedicineSeeder;
use \Database\Seeders\PL\PlEventsTravelSeeder;
use \Database\Seeders\PL\PlCarsTravelSeeder;


use \Database\Seeders\PL\PlFreeKartaPobytuTemplatesSeeder;
use Database\Seeders\PL\PlStandardUniversityAdmissionTemplatesSeeder;
use Database\Seeders\PL\PlProBusinessStartTemplatesSeeder;
use Database\Seeders\PL\PlStandardCarPurchaseTemplatesSeeder;

use \Database\Seeders\DE\DeWorkSeeder;
use \Database\Seeders\DE\DePersonalFamilySeeder;
use \Database\Seeders\DE\DeRealEstateSeeder;
use \Database\Seeders\DE\DeLegalDocumentsSeeder;
use \Database\Seeders\DE\DeEducationSeeder;
use \Database\Seeders\DE\DeHealthMedicineSeeder;
use \Database\Seeders\DE\DeEventsTravelSeeder;
use \Database\Seeders\DE\DeCarsTravelSeeder;



use \Database\Seeders\DE\DeAnmeldungTemplatesSeeder;
use \Database\Seeders\DE\DeFamilyPackageSeeder;
use \Database\Seeders\DE\DeBlueCardPackageSeeder;
use \Database\Seeders\DE\DeContractTerminationPackageSeeder;


use \Database\Seeders\US\UsCarsTravelSeeder;
use \Database\Seeders\US\UsEducationSeeder;
use \Database\Seeders\US\UsEventsTravelSeeder;
use \Database\Seeders\US\UsHealthMedicineSeeder;
use \Database\Seeders\US\UsLegalDocumentsSeeder;
use \Database\Seeders\US\UsPersonalFamilySeeder;
use \Database\Seeders\US\UsRealEstateSeeder;
use \Database\Seeders\US\UsWorkSeeder;










class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            TemplateSeeder::class,

            UaWorkSeeder::class,
            UaPersonalFamilySeeder::class,
            UaRealEstateSeeder::class,
            UaLegalDocumentsSeeder::class,
            UaEducationSeeder::class,
            UaHealthMedicineSeeder::class,
            UaEventsTravelSeeder::class,
            UaCarsSeeder::class,



            PlWorkSeeder::class,
            PlPersonalFamilySeeder::class,
            PlRealEstateSeeder::class,
            PlLegalDocumentsSeeder::class,
            PlEducationSeeder::class,
            PlHealthMedicineSeeder::class,
            PlEventsTravelSeeder::class,
            PlCarsTravelSeeder::class,

            PlFreeKartaPobytuTemplatesSeeder::class,
            PlStandardUniversityAdmissionTemplatesSeeder::class,
            PlProBusinessStartTemplatesSeeder::class,
            PlStandardCarPurchaseTemplatesSeeder::class,

            DeWorkSeeder::class,
            DePersonalFamilySeeder::class,
            DeRealEstateSeeder::class,
            DeLegalDocumentsSeeder::class,
            DeEducationSeeder::class,
            DeHealthMedicineSeeder::class,
            DeEventsTravelSeeder::class,
            DeCarsTravelSeeder::class,



            DeAnmeldungTemplatesSeeder::class,
            DeFamilyPackageSeeder::class,
            DeBlueCardPackageSeeder::class,
            DeContractTerminationPackageSeeder::class,

            //UsWorkSeeder::class,
            //UsPersonalFamilySeeder::class,
           //UsRealEstateSeeder::class,
            ////UsLegalDocumentsSeeder::class,
           //UsEducationSeeder::class,
            //UsHealthMedicineSeeder::class,
            //UsEventsTravelSeeder::class,
            //UsCarsTravelSeeder::class,

        ]);


    }
}
