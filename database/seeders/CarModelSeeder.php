<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            // Acura
            ['car_brand_id' => 1, 'name' => 'ILX', 'slug' => Str::slug('ILX')],
            ['car_brand_id' => 1, 'name' => 'MDX', 'slug' => Str::slug('MDX')],
            ['car_brand_id' => 1, 'name' => 'RDX', 'slug' => Str::slug('RDX')],
            ['car_brand_id' => 1, 'name' => 'TLX', 'slug' => Str::slug('TLX')],
            ['car_brand_id' => 1, 'name' => 'NSX Type S', 'slug' => Str::slug('NSX Type S')],
            ['car_brand_id' => 1, 'name' => 'ZDX Type S', 'slug' => Str::slug('ZDX Type S')],

            // Alfa Romeo
            ['car_brand_id' => 2, 'name' => 'Giulia', 'slug' => Str::slug('Giulia')],
            ['car_brand_id' => 2, 'name' => 'Stelvio', 'slug' => Str::slug('Stelvio')],
            ['car_brand_id' => 2, 'name' => '4C', 'slug' => Str::slug('4C')],
            ['car_brand_id' => 2, 'name' => 'Tonale', 'slug' => Str::slug('Tonale')],

            // Aston Martin
            ['car_brand_id' => 3, 'name' => 'DB11', 'slug' => Str::slug('DB11')],
            ['car_brand_id' => 3, 'name' => 'Vantage', 'slug' => Str::slug('Vantage')],
            ['car_brand_id' => 3, 'name' => 'DBX', 'slug' => Str::slug('DBX')],
            ['car_brand_id' => 3, 'name' => 'Valhalla', 'slug' => Str::slug('Valhalla')],

            // Audi
            ['car_brand_id' => 4, 'name' => 'A4', 'slug' => Str::slug('A4')],
            ['car_brand_id' => 4, 'name' => 'A6', 'slug' => Str::slug('A6')],
            ['car_brand_id' => 4, 'name' => 'Q5', 'slug' => Str::slug('Q5')],
            ['car_brand_id' => 4, 'name' => 'Q7', 'slug' => Str::slug('Q7')],
            ['car_brand_id' => 4, 'name' => 'e-tron GT', 'slug' => Str::slug('e-tron GT')],
            ['car_brand_id' => 4, 'name' => 'Q4 e-tron', 'slug' => Str::slug('Q4 e-tron')],
            ['car_brand_id' => 4, 'name' => 'R8', 'slug' => Str::slug('R8')],

            // Bentley
            ['car_brand_id' => 5, 'name' => 'Bentayga', 'slug' => Str::slug('Bentayga')],
            ['car_brand_id' => 5, 'name' => 'Flying Spur', 'slug' => Str::slug('Flying Spur')],
            ['car_brand_id' => 5, 'name' => 'Continental GT', 'slug' => Str::slug('Continental GT')],

            // BMW
            ['car_brand_id' => 6, 'name' => '3 Series', 'slug' => Str::slug('3 Series')],
            ['car_brand_id' => 6, 'name' => '5 Series', 'slug' => Str::slug('5 Series')],
            ['car_brand_id' => 6, 'name' => '7 Series', 'slug' => Str::slug('7 Series')],
            ['car_brand_id' => 6, 'name' => 'X5', 'slug' => Str::slug('X5')],
            ['car_brand_id' => 6, 'name' => 'X7', 'slug' => Str::slug('X7')],
            ['car_brand_id' => 6, 'name' => 'i3', 'slug' => Str::slug('i3')],
            ['car_brand_id' => 6, 'name' => 'i4', 'slug' => Str::slug('i4')],
            ['car_brand_id' => 6, 'name' => 'i5', 'slug' => Str::slug('i5')],
            ['car_brand_id' => 6, 'name' => 'i7', 'slug' => Str::slug('i7')],
            ['car_brand_id' => 6, 'name' => 'iX', 'slug' => Str::slug('iX')],
            ['car_brand_id' => 6, 'name' => 'Z4', 'slug' => Str::slug('Z4')],

            // Bugatti
            ['car_brand_id' => 7, 'name' => 'Chiron', 'slug' => Str::slug('Chiron')],
            ['car_brand_id' => 7, 'name' => 'Veyron', 'slug' => Str::slug('Veyron')],
            ['car_brand_id' => 7, 'name' => 'Divo', 'slug' => Str::slug('Divo')],
            ['car_brand_id' => 7, 'name' => 'La Voiture Noire', 'slug' => Str::slug('La Voiture Noire')],

            // Buick
            ['car_brand_id' => 8, 'name' => 'Encore', 'slug' => Str::slug('Encore')],
            ['car_brand_id' => 8, 'name' => 'Enclave', 'slug' => Str::slug('Enclave')],
            ['car_brand_id' => 8, 'name' => 'Regal', 'slug' => Str::slug('Regal')],
            ['car_brand_id' => 8, 'name' => 'LaCrosse', 'slug' => Str::slug('LaCrosse')],

            // Cadillac
            ['car_brand_id' => 9, 'name' => 'Escalade', 'slug' => Str::slug('Escalade')],
            ['car_brand_id' => 9, 'name' => 'XT5', 'slug' => Str::slug('XT5')],
            ['car_brand_id' => 9, 'name' => 'CT5', 'slug' => Str::slug('CT5')],
            ['car_brand_id' => 9, 'name' => 'Lyriq', 'slug' => Str::slug('Lyriq')],

            // Chevrolet
            ['car_brand_id' => 10, 'name' => 'Camaro', 'slug' => Str::slug('Camaro')],
            ['car_brand_id' => 10, 'name' => 'Silverado', 'slug' => Str::slug('Silverado')],
            ['car_brand_id' => 10, 'name' => 'Malibu', 'slug' => Str::slug('Malibu')],
            ['car_brand_id' => 10, 'name' => 'Tahoe', 'slug' => Str::slug('Tahoe')],
            ['car_brand_id' => 10, 'name' => 'Equinox', 'slug' => Str::slug('Equinox')],
            ['car_brand_id' => 10, 'name' => 'Bolt EV', 'slug' => Str::slug('Bolt EV')],
            ['car_brand_id' => 10, 'name' => 'Traverse', 'slug' => Str::slug('Traverse')],

            // Chrysler (ID: 11)
            ['car_brand_id' => 11, 'name' => 'Pacifica', 'slug' => Str::slug('Pacifica')],
            ['car_brand_id' => 11, 'name' => 'Pacifica Plug-in Hybrid', 'slug' => Str::slug('Pacifica Plug-in Hybrid')],
            ['car_brand_id' => 11, 'name' => 'Voyager', 'slug' => Str::slug('Voyager')],
            ['car_brand_id' => 11, 'name' => 'Aspen', 'slug' => Str::slug('Aspen')],
            ['car_brand_id' => 11, 'name' => 'Grand Voyager', 'slug' => Str::slug('Grand Voyager')],
            ['car_brand_id' => 11, 'name' => 'Town and Country', 'slug' => Str::slug('Town and Country')],
            ['car_brand_id' => 11, 'name' => 'TEVan', 'slug' => Str::slug('TEVan')],

            // Citroën (ID: 12)
            ['car_brand_id' => 12, 'name' => 'Ami', 'slug' => Str::slug('Ami')],
            ['car_brand_id' => 12, 'name' => 'C3', 'slug' => Str::slug('C3')],
            ['car_brand_id' => 12, 'name' => 'C3 Aircross', 'slug' => Str::slug('C3 Aircross')],
            ['car_brand_id' => 12, 'name' => 'C4', 'slug' => Str::slug('C4')],
            ['car_brand_id' => 12, 'name' => 'C4 Cactus', 'slug' => Str::slug('C4 Cactus')],
            ['car_brand_id' => 12, 'name' => 'C4 X', 'slug' => Str::slug('C4 X')],
            ['car_brand_id' => 12, 'name' => 'C5 Aircross', 'slug' => Str::slug('C5 Aircross')],
            ['car_brand_id' => 12, 'name' => 'C5 X', 'slug' => Str::slug('C5 X')],
            ['car_brand_id' => 12, 'name' => 'Berlingo', 'slug' => Str::slug('Berlingo')],
            ['car_brand_id' => 12, 'name' => 'ë-Berlingo', 'slug' => Str::slug('ë-Berlingo')],
            ['car_brand_id' => 12, 'name' => 'Jumpy', 'slug' => Str::slug('Jumpy')],
            ['car_brand_id' => 12, 'name' => 'SpaceTourer', 'slug' => Str::slug('SpaceTourer')],
            ['car_brand_id' => 12, 'name' => 'Jumper', 'slug' => Str::slug('Jumper')],

            // Dacia (ID: 13)
            ['car_brand_id' => 13, 'name' => 'Spring', 'slug' => Str::slug('Spring')],
            ['car_brand_id' => 13, 'name' => 'Sandero', 'slug' => Str::slug('Sandero')],
            ['car_brand_id' => 13, 'name' => 'Sandero Stepway', 'slug' => Str::slug('Sandero Stepway')],
            ['car_brand_id' => 13, 'name' => 'Jogger', 'slug' => Str::slug('Jogger')],
            ['car_brand_id' => 13, 'name' => 'Duster', 'slug' => Str::slug('Duster')],
            ['car_brand_id' => 13, 'name' => 'Logan MCV', 'slug' => Str::slug('Logan MCV')],
            ['car_brand_id' => 13, 'name' => 'Bigster', 'slug' => Str::slug('Bigster')],
            ['car_brand_id' => 13, 'name' => 'Manifesto', 'slug' => Str::slug('Manifesto')],

            // Daewoo (ID: 14)
            ['car_brand_id' => 14, 'name' => 'Matiz', 'slug' => Str::slug('Matiz')],
            ['car_brand_id' => 14, 'name' => 'Lanos', 'slug' => Str::slug('Lanos')],
            ['car_brand_id' => 14, 'name' => 'Nubira', 'slug' => Str::slug('Nubira')],
            ['car_brand_id' => 14, 'name' => 'Leganza', 'slug' => Str::slug('Leganza')],
            ['car_brand_id' => 14, 'name' => 'Kalos', 'slug' => Str::slug('Kalos')],
            ['car_brand_id' => 14, 'name' => 'Lacetti', 'slug' => Str::slug('Lacetti')],
            ['car_brand_id' => 14, 'name' => 'Gentra', 'slug' => Str::slug('Gentra')],
            ['car_brand_id' => 14, 'name' => 'Magnus', 'slug' => Str::slug('Magnus')],
            ['car_brand_id' => 14, 'name' => 'Espero', 'slug' => Str::slug('Espero')],
            ['car_brand_id' => 14, 'name' => 'Prince', 'slug' => Str::slug('Prince')],
            ['car_brand_id' => 14, 'name' => 'Imperial', 'slug' => Str::slug('Imperial')],
            ['car_brand_id' => 14, 'name' => 'Musso', 'slug' => Str::slug('Musso')],
            ['car_brand_id' => 14, 'name' => 'Korando', 'slug' => Str::slug('Korando')],
            ['car_brand_id' => 14, 'name' => 'Maestro', 'slug' => Str::slug('Maestro')],
            ['car_brand_id' => 14, 'name' => 'Racer', 'slug' => Str::slug('Racer')],
            ['car_brand_id' => 14, 'name' => 'LeMans', 'slug' => Str::slug('LeMans')],
            ['car_brand_id' => 14, 'name' => 'Cielo', 'slug' => Str::slug('Cielo')],
            ['car_brand_id' => 14, 'name' => 'Arcadia', 'slug' => Str::slug('Arcadia')],
            ['car_brand_id' => 14, 'name' => 'Chairman', 'slug' => Str::slug('Chairman')],
            ['car_brand_id' => 14, 'name' => 'Royale', 'slug' => Str::slug('Royale')],
            ['car_brand_id' => 14, 'name' => 'Super Salon', 'slug' => Str::slug('Super Salon')],
            ['car_brand_id' => 14, 'name' => 'Brougham', 'slug' => Str::slug('Brougham')],

            // Daihatsu (ID: 15)
            ['car_brand_id' => 15, 'name' => 'Mira e:S', 'slug' => Str::slug('Mira e:S')],
            ['car_brand_id' => 15, 'name' => 'Copen', 'slug' => Str::slug('Copen')],
            ['car_brand_id' => 15, 'name' => 'Taft', 'slug' => Str::slug('Taft')],
            ['car_brand_id' => 15, 'name' => 'Move Canbus', 'slug' => Str::slug('Move Canbus')],
            ['car_brand_id' => 15, 'name' => 'Tanto', 'slug' => Str::slug('Tanto')],
            ['car_brand_id' => 15, 'name' => 'Hijet Cargo', 'slug' => Str::slug('Hijet Cargo')],
            ['car_brand_id' => 15, 'name' => 'Hijet Truck', 'slug' => Str::slug('Hijet Truck')],
            ['car_brand_id' => 15, 'name' => 'Atrai', 'slug' => Str::slug('Atrai')],
            ['car_brand_id' => 15, 'name' => 'Rocky', 'slug' => Str::slug('Rocky')],
            ['car_brand_id' => 15, 'name' => 'Thor', 'slug' => Str::slug('Thor')],
            ['car_brand_id' => 15, 'name' => 'Gran Max', 'slug' => Str::slug('Gran Max')],
            ['car_brand_id' => 15, 'name' => 'Tanto Sloper', 'slug' => Str::slug('Tanto Sloper')],
            ['car_brand_id' => 15, 'name' => 'Hijet Sloper', 'slug' => Str::slug('Hijet Sloper')],
            ['car_brand_id' => 15, 'name' => 'Atrai Sloper', 'slug' => Str::slug('Atrai Sloper')],
            ['car_brand_id' => 15, 'name' => 'Tanto Welcome Seat Lift', 'slug' => Str::slug('Tanto Welcome Seat Lift')],

            // Dodge (ID: 16)
            ['car_brand_id' => 16, 'name' => 'Avenger', 'slug' => Str::slug('Avenger')],
            ['car_brand_id' => 16, 'name' => 'Charger Daytona', 'slug' => Str::slug('Charger Daytona')],
            ['car_brand_id' => 16, 'name' => 'Charger', 'slug' => Str::slug('Charger')],
            ['car_brand_id' => 16, 'name' => 'Challenger', 'slug' => Str::slug('Challenger')],
            ['car_brand_id' => 16, 'name' => 'Caliber', 'slug' => Str::slug('Caliber')],

            // Donkervoort (ID: 17)
            ['car_brand_id' => 17, 'name' => 'D8', 'slug' => Str::slug('D8')],
            ['car_brand_id' => 17, 'name' => 'D8 GT', 'slug' => Str::slug('D8 GT')],
            ['car_brand_id' => 17, 'name' => 'D8 GTO', 'slug' => Str::slug('D8 GTO')],
            ['car_brand_id' => 17, 'name' => 'D10', 'slug' => Str::slug('D10')],
            ['car_brand_id' => 17, 'name' => 'F22', 'slug' => Str::slug('F22')],
            ['car_brand_id' => 17, 'name' => 'EVx Vision', 'slug' => Str::slug('EVx Vision')],

            // DS Automobiles (ID: 18)
            ['car_brand_id' => 18, 'name' => 'DS 3', 'slug' => Str::slug('DS 3')],
            ['car_brand_id' => 18, 'name' => 'DS 3 Crossback', 'slug' => Str::slug('DS 3 Crossback')],
            ['car_brand_id' => 18, 'name' => 'DS 4', 'slug' => Str::slug('DS 4')],
            ['car_brand_id' => 18, 'name' => 'DS 4S', 'slug' => Str::slug('DS 4S')],
            ['car_brand_id' => 18, 'name' => 'DS 5', 'slug' => Str::slug('DS 5')],
            ['car_brand_id' => 18, 'name' => 'DS 5LS', 'slug' => Str::slug('DS 5LS')],
            ['car_brand_id' => 18, 'name' => 'DS 6', 'slug' => Str::slug('DS 6')],
            ['car_brand_id' => 18, 'name' => 'DS 7 Crossback', 'slug' => Str::slug('DS 7 Crossback')],
            ['car_brand_id' => 18, 'name' => 'DS 9', 'slug' => Str::slug('DS 9')],
            ['car_brand_id' => 18, 'name' => 'DS N°8', 'slug' => Str::slug('DS N°8')],
            ['car_brand_id' => 18, 'name' => 'Aero Sport Lounge', 'slug' => Str::slug('Aero Sport Lounge')],

            // Ferrari (ID: 19)
            ['car_brand_id' => 19, 'name' => 'SF90 Stradale', 'slug' => Str::slug('SF90 Stradale')],
            ['car_brand_id' => 19, 'name' => 'Roma', 'slug' => Str::slug('Roma')],
            ['car_brand_id' => 19, 'name' => '296 GTB', 'slug' => Str::slug('296 GTB')],
            ['car_brand_id' => 19, 'name' => 'Daytona SP3', 'slug' => Str::slug('Daytona SP3')],
            ['car_brand_id' => 19, 'name' => 'Purosangue', 'slug' => Str::slug('Purosangue')],
            ['car_brand_id' => 19, 'name' => '12Cilindri', 'slug' => Str::slug('12Cilindri')],
            ['car_brand_id' => 19, 'name' => 'F80', 'slug' => Str::slug('F80')],
            ['car_brand_id' => 19, 'name' => 'F8 Tributo', 'slug' => Str::slug('F8 Tributo')],
            ['car_brand_id' => 19, 'name' => '812 Superfast', 'slug' => Str::slug('812 Superfast')],
            ['car_brand_id' => 19, 'name' => 'LaFerrari', 'slug' => Str::slug('LaFerrari')],
            ['car_brand_id' => 19, 'name' => 'Enzo', 'slug' => Str::slug('Enzo')],
            ['car_brand_id' => 19, 'name' => 'F50', 'slug' => Str::slug('F50')],
            ['car_brand_id' => 19, 'name' => 'F40', 'slug' => Str::slug('F40')],
            ['car_brand_id' => 19, 'name' => '288 GTO', 'slug' => Str::slug('288 GTO')],

            // Fiat (ID: 20)
            ['car_brand_id' => 20, 'name' => '500', 'slug' => Str::slug('500')],
            ['car_brand_id' => 20, 'name' => '500e', 'slug' => Str::slug('500e')],
            ['car_brand_id' => 20, 'name' => '500X', 'slug' => Str::slug('500X')],
            ['car_brand_id' => 20, 'name' => '500L', 'slug' => Str::slug('500L')],
            ['car_brand_id' => 20, 'name' => '124 Spider', 'slug' => Str::slug('124 Spider')],
            ['car_brand_id' => 20, 'name' => 'Panda', 'slug' => Str::slug('Panda')],
            ['car_brand_id' => 20, 'name' => 'Punto', 'slug' => Str::slug('Punto')],
            ['car_brand_id' => 20, 'name' => 'Tipo', 'slug' => Str::slug('Tipo')],
            ['car_brand_id' => 20, 'name' => 'Bravo', 'slug' => Str::slug('Bravo')],
            ['car_brand_id' => 20, 'name' => 'Croma', 'slug' => Str::slug('Croma')],
            ['car_brand_id' => 20, 'name' => 'Doblò', 'slug' => Str::slug('Doblò')],
            ['car_brand_id' => 20, 'name' => 'Fiorino', 'slug' => Str::slug('Fiorino')],
            ['car_brand_id' => 20, 'name' => 'Qubo', 'slug' => Str::slug('Qubo')],
            ['car_brand_id' => 20, 'name' => 'Sedici', 'slug' => Str::slug('Sedici')],
            ['car_brand_id' => 20, 'name' => 'Strada', 'slug' => Str::slug('Strada')],
            ['car_brand_id' => 20, 'name' => 'Palio', 'slug' => Str::slug('Palio')],
            ['car_brand_id' => 20, 'name' => 'Siena', 'slug' => Str::slug('Siena')],
            ['car_brand_id' => 20, 'name' => 'Uno', 'slug' => Str::slug('Uno')],
            ['car_brand_id' => 20, 'name' => 'Marea', 'slug' => Str::slug('Marea')],
            ['car_brand_id' => 20, 'name' => 'Multipla', 'slug' => Str::slug('Multipla')],

            // Fisker (ID: 21)
            ['car_brand_id' => 21, 'name' => 'Ocean', 'slug' => Str::slug('Ocean')],
            ['car_brand_id' => 21, 'name' => 'Karma', 'slug' => Str::slug('Karma')],
            ['car_brand_id' => 21, 'name' => 'Ronin', 'slug' => Str::slug('Ronin')],
            ['car_brand_id' => 21, 'name' => 'Pear', 'slug' => Str::slug('Pear')],
            ['car_brand_id' => 21, 'name' => 'Alaska', 'slug' => Str::slug('Alaska')],
            ['car_brand_id' => 21, 'name' => 'Surf', 'slug' => Str::slug('Surf')],
            ['car_brand_id' => 21, 'name' => 'Atlantic', 'slug' => Str::slug('Atlantic')],
            ['car_brand_id' => 21, 'name' => 'Force E', 'slug' => Str::slug('Force E')],

            // Ford (ID: 22)
            ['car_brand_id' => 22, 'name' => 'Model T', 'slug' => Str::slug('Model T')],
            ['car_brand_id' => 22, 'name' => 'Mustang', 'slug' => Str::slug('Mustang')],
            ['car_brand_id' => 22, 'name' => 'F-150', 'slug' => Str::slug('F-150')],
            ['car_brand_id' => 22, 'name' => 'Focus', 'slug' => Str::slug('Focus')],
            ['car_brand_id' => 22, 'name' => 'Fiesta', 'slug' => Str::slug('Fiesta')],
            ['car_brand_id' => 22, 'name' => 'Explorer', 'slug' => Str::slug('Explorer')],
            ['car_brand_id' => 22, 'name' => 'Escape', 'slug' => Str::slug('Escape')],
            ['car_brand_id' => 22, 'name' => 'Edge', 'slug' => Str::slug('Edge')],
            ['car_brand_id' => 22, 'name' => 'Bronco', 'slug' => Str::slug('Bronco')],
            ['car_brand_id' => 22, 'name' => 'Ranger', 'slug' => Str::slug('Ranger')],
            ['car_brand_id' => 22, 'name' => 'Maverick', 'slug' => Str::slug('Maverick')],
            ['car_brand_id' => 22, 'name' => 'Taurus', 'slug' => Str::slug('Taurus')],

            // Geely (ID: 23)
            ['car_brand_id' => 23, 'name' => 'GX3 PRO', 'slug' => Str::slug('GX3 PRO')],
            ['car_brand_id' => 23, 'name' => 'Emgrand', 'slug' => Str::slug('Emgrand')],
            ['car_brand_id' => 23, 'name' => 'Preface', 'slug' => Str::slug('Preface')],
            ['car_brand_id' => 23, 'name' => 'Starray', 'slug' => Str::slug('Starray')],
            ['car_brand_id' => 23, 'name' => 'Geometry C', 'slug' => Str::slug('Geometry C')],
            ['car_brand_id' => 23, 'name' => 'Coolray', 'slug' => Str::slug('Coolray')],
            ['car_brand_id' => 23, 'name' => 'Tugella', 'slug' => Str::slug('Tugella')],
            ['car_brand_id' => 23, 'name' => 'Okavango', 'slug' => Str::slug('Okavango')],
            ['car_brand_id' => 23, 'name' => 'Monjaro', 'slug' => Str::slug('Monjaro')],
            ['car_brand_id' => 23, 'name' => 'Galaxy E8', 'slug' => Str::slug('Galaxy E8')],
            ['car_brand_id' => 23, 'name' => 'Galaxy L6', 'slug' => Str::slug('Galaxy L6')],
            ['car_brand_id' => 23, 'name' => 'Galaxy L7', 'slug' => Str::slug('Galaxy L7')],
            ['car_brand_id' => 23, 'name' => 'Galaxy E5', 'slug' => Str::slug('Galaxy E5')],
            ['car_brand_id' => 23, 'name' => 'Galaxy Starship 7', 'slug' => Str::slug('Galaxy Starship 7')],
            ['car_brand_id' => 23, 'name' => 'Panda Mini EV', 'slug' => Str::slug('Panda Mini EV')],
            ['car_brand_id' => 23, 'name' => 'Xingyuan', 'slug' => Str::slug('Xingyuan')],
            ['car_brand_id' => 23, 'name' => 'Geometry E Firefly', 'slug' => Str::slug('Geometry E Firefly')],
            ['car_brand_id' => 23, 'name' => 'LEVC L380', 'slug' => Str::slug('LEVC L380')],
            ['car_brand_id' => 23, 'name' => 'LEVC TX', 'slug' => Str::slug('LEVC TX')],
            ['car_brand_id' => 23, 'name' => 'LEVC VN5', 'slug' => Str::slug('LEVC VN5')],

            // General Motors (ID: 24)
            ['car_brand_id' => 24, 'name' => 'EV1', 'slug' => Str::slug('EV1')],
            ['car_brand_id' => 24, 'name' => 'HydroGen4', 'slug' => Str::slug('HydroGen4')],
            ['car_brand_id' => 24, 'name' => 'Acadian', 'slug' => Str::slug('Acadian')],
            ['car_brand_id' => 24, 'name' => 'Beaumont', 'slug' => Str::slug('Beaumont')],
            ['car_brand_id' => 24, 'name' => 'Envoy', 'slug' => Str::slug('Envoy')],
            ['car_brand_id' => 24, 'name' => 'Holden Sandman', 'slug' => Str::slug('Holden Sandman')],
            ['car_brand_id' => 24, 'name' => 'Holden SS', 'slug' => Str::slug('Holden SS')],
            ['car_brand_id' => 24, 'name' => 'Personal Urban Mobility and Accessibility', 'slug' => Str::slug('Personal Urban Mobility and Accessibility')],

            // Genesis (ID: 25)
            ['car_brand_id' => 25, 'name' => 'G70', 'slug' => Str::slug('G70')],
            ['car_brand_id' => 25, 'name' => 'G80', 'slug' => Str::slug('G80')],
            ['car_brand_id' => 25, 'name' => 'G90', 'slug' => Str::slug('G90')],
            ['car_brand_id' => 25, 'name' => 'GV60', 'slug' => Str::slug('GV60')],
            ['car_brand_id' => 25, 'name' => 'GV70', 'slug' => Str::slug('GV70')],
            ['car_brand_id' => 25, 'name' => 'GV80', 'slug' => Str::slug('GV80')],
            ['car_brand_id' => 25, 'name' => 'GV80 Coupe', 'slug' => Str::slug('GV80 Coupe')],
            ['car_brand_id' => 25, 'name' => 'GV90', 'slug' => Str::slug('GV90')],
            ['car_brand_id' => 25, 'name' => 'GMR-001', 'slug' => Str::slug('GMR-001')],

            // GMC (ID: 26)
            ['car_brand_id' => 26, 'name' => 'Canyon', 'slug' => Str::slug('Canyon')],
            ['car_brand_id' => 26, 'name' => 'Terrain', 'slug' => Str::slug('Terrain')],
            ['car_brand_id' => 26, 'name' => 'Sierra EV Denali', 'slug' => Str::slug('Sierra EV Denali')],
            ['car_brand_id' => 26, 'name' => 'Savana Cargo', 'slug' => Str::slug('Savana Cargo')],
            ['car_brand_id' => 26, 'name' => 'Futurliner', 'slug' => Str::slug('Futurliner')],
            ['car_brand_id' => 26, 'name' => 'XP-21 Firebird I', 'slug' => Str::slug('XP-21 Firebird I')],
            ['car_brand_id' => 26, 'name' => 'LaSalle II Roadster', 'slug' => Str::slug('LaSalle II Roadster')],
            ['car_brand_id' => 26, 'name' => 'LaSalle II Sedan', 'slug' => Str::slug('LaSalle II Sedan')],
            ['car_brand_id' => 26, 'name' => 'Firebird II', 'slug' => Str::slug('Firebird II')],
            ['car_brand_id' => 26, 'name' => 'Firebird III', 'slug' => Str::slug('Firebird III')],
            ['car_brand_id' => 26, 'name' => 'Electrovan Experimental', 'slug' => Str::slug('Electrovan Experimental')],
            ['car_brand_id' => 26, 'name' => 'Urban Concept', 'slug' => Str::slug('Urban Concept')],
            ['car_brand_id' => 26, 'name' => 'Ultralite Experimental', 'slug' => Str::slug('Ultralite Experimental')],
            ['car_brand_id' => 26, 'name' => 'Impact Concept', 'slug' => Str::slug('Impact Concept')],
            ['car_brand_id' => 26, 'name' => 'Terradyne', 'slug' => Str::slug('Terradyne')],
            ['car_brand_id' => 26, 'name' => 'Terracross', 'slug' => Str::slug('Terracross')],
            ['car_brand_id' => 26, 'name' => 'Terra 4', 'slug' => Str::slug('Terra 4')],
            ['car_brand_id' => 26, 'name' => 'Hy-Wire', 'slug' => Str::slug('Hy-Wire')],
            ['car_brand_id' => 26, 'name' => 'Autonomy Concept', 'slug' => Str::slug('Autonomy Concept')],
            ['car_brand_id' => 26, 'name' => 'Sequel', 'slug' => Str::slug('Sequel')],
            ['car_brand_id' => 26, 'name' => 'Graphyte', 'slug' => Str::slug('Graphyte')],
            ['car_brand_id' => 26, 'name' => 'PAD', 'slug' => Str::slug('PAD')],

            // Great Wall Motors (ID: 27)
            ['car_brand_id' => 27, 'name' => 'Jolion Pro', 'slug' => Str::slug('Jolion Pro')],
            ['car_brand_id' => 27, 'name' => 'H9', 'slug' => Str::slug('H9')],
            ['car_brand_id' => 27, 'name' => 'H7', 'slug' => Str::slug('H7')],
            ['car_brand_id' => 27, 'name' => 'H6', 'slug' => Str::slug('H6')],
            ['car_brand_id' => 27, 'name' => 'H6GT', 'slug' => Str::slug('H6GT')],
            ['car_brand_id' => 27, 'name' => 'Tank 300', 'slug' => Str::slug('Tank 300')],
            ['car_brand_id' => 27, 'name' => 'Tank 500', 'slug' => Str::slug('Tank 500')],
            ['car_brand_id' => 27, 'name' => 'Wingle 5', 'slug' => Str::slug('Wingle 5')],
            ['car_brand_id' => 27, 'name' => 'Wingle 7', 'slug' => Str::slug('Wingle 7')],
            ['car_brand_id' => 27, 'name' => 'Poer', 'slug' => Str::slug('Poer')],

            // Haval (ID: 28)
            ['car_brand_id' => 28, 'name' => 'H1', 'slug' => Str::slug('H1')],
            ['car_brand_id' => 28, 'name' => 'H2', 'slug' => Str::slug('H2')],
            ['car_brand_id' => 28, 'name' => 'H2s', 'slug' => Str::slug('H2s')],
            ['car_brand_id' => 28, 'name' => 'H4', 'slug' => Str::slug('H4')],
            ['car_brand_id' => 28, 'name' => 'H5', 'slug' => Str::slug('H5')],
            ['car_brand_id' => 28, 'name' => 'H6', 'slug' => Str::slug('H6')],
            ['car_brand_id' => 28, 'name' => 'H6 Coupe', 'slug' => Str::slug('H6 Coupe')],
            ['car_brand_id' => 28, 'name' => 'H7', 'slug' => Str::slug('H7')],
            ['car_brand_id' => 28, 'name' => 'H8', 'slug' => Str::slug('H8')],
            ['car_brand_id' => 28, 'name' => 'H9', 'slug' => Str::slug('H9')],
            ['car_brand_id' => 28, 'name' => 'Jolion', 'slug' => Str::slug('Jolion')],
            ['car_brand_id' => 28, 'name' => 'M6', 'slug' => Str::slug('M6')],
            ['car_brand_id' => 28, 'name' => 'F5', 'slug' => Str::slug('F5')],
            ['car_brand_id' => 28, 'name' => 'F7', 'slug' => Str::slug('F7')],
            ['car_brand_id' => 28, 'name' => 'Big Dog', 'slug' => Str::slug('Big Dog')],
            ['car_brand_id' => 28, 'name' => 'Cool Dog', 'slug' => Str::slug('Cool Dog')],
            ['car_brand_id' => 28, 'name' => 'Chitu', 'slug' => Str::slug('Chitu')],
            ['car_brand_id' => 28, 'name' => 'Shenshou', 'slug' => Str::slug('Shenshou')],
            ['car_brand_id' => 28, 'name' => 'Raptor', 'slug' => Str::slug('Raptor')],
            ['car_brand_id' => 28, 'name' => 'Xiaolong Max', 'slug' => Str::slug('Xiaolong Max')],

            // Holden (ID: 29)
            ['car_brand_id' => 29, 'name' => 'Acadia', 'slug' => Str::slug('Acadia')],
            ['car_brand_id' => 29, 'name' => 'Adventra', 'slug' => Str::slug('Adventra')],
            ['car_brand_id' => 29, 'name' => 'Apollo', 'slug' => Str::slug('Apollo')],
            ['car_brand_id' => 29, 'name' => 'Astra', 'slug' => Str::slug('Astra')],
            ['car_brand_id' => 29, 'name' => 'Barina', 'slug' => Str::slug('Barina')],
            ['car_brand_id' => 29, 'name' => 'Barina Spark', 'slug' => Str::slug('Barina Spark')],
            ['car_brand_id' => 29, 'name' => 'Belmont', 'slug' => Str::slug('Belmont')],
            ['car_brand_id' => 29, 'name' => 'Berlina', 'slug' => Str::slug('Berlina')],
            ['car_brand_id' => 29, 'name' => 'Brougham', 'slug' => Str::slug('Brougham')],
            ['car_brand_id' => 29, 'name' => 'Calais', 'slug' => Str::slug('Calais')],
            ['car_brand_id' => 29, 'name' => 'Calibra', 'slug' => Str::slug('Calibra')],
            ['car_brand_id' => 29, 'name' => 'Camira', 'slug' => Str::slug('Camira')],
            ['car_brand_id' => 29, 'name' => 'Caprice', 'slug' => Str::slug('Caprice')],
            ['car_brand_id' => 29, 'name' => 'Captiva', 'slug' => Str::slug('Captiva')],
            ['car_brand_id' => 29, 'name' => 'Cascada', 'slug' => Str::slug('Cascada')],
            ['car_brand_id' => 29, 'name' => 'Colorado', 'slug' => Str::slug('Colorado')],
            ['car_brand_id' => 29, 'name' => 'Combo', 'slug' => Str::slug('Combo')],
            ['car_brand_id' => 29, 'name' => 'Commodore', 'slug' => Str::slug('Commodore')],
            ['car_brand_id' => 29, 'name' => 'Crewman', 'slug' => Str::slug('Crewman')],
            ['car_brand_id' => 29, 'name' => 'Cruze', 'slug' => Str::slug('Cruze')],
            ['car_brand_id' => 29, 'name' => 'Drover', 'slug' => Str::slug('Drover')],
            ['car_brand_id' => 29, 'name' => 'EFIJY', 'slug' => Str::slug('EFIJY')],
            ['car_brand_id' => 29, 'name' => 'Hurricane', 'slug' => Str::slug('Hurricane')],
            ['car_brand_id' => 29, 'name' => 'GTR-X', 'slug' => Str::slug('GTR-X')],
            ['car_brand_id' => 29, 'name' => 'Monaro Coupe', 'slug' => Str::slug('Monaro Coupe')],
            ['car_brand_id' => 29, 'name' => 'Sandman', 'slug' => Str::slug('Sandman')],
            ['car_brand_id' => 29, 'name' => 'Utester', 'slug' => Str::slug('Utester')],
            ['car_brand_id' => 29, 'name' => 'Monaro Convertible', 'slug' => Str::slug('Monaro Convertible')],
            ['car_brand_id' => 29, 'name' => 'Monaro HRT 427', 'slug' => Str::slug('Monaro HRT 427')],

            // Honda (ID: 30)
            ['car_brand_id' => 30, 'name' => 'Accord', 'slug' => Str::slug('Accord')],
            ['car_brand_id' => 30, 'name' => 'Civic', 'slug' => Str::slug('Civic')],
            ['car_brand_id' => 30, 'name' => 'CR-V', 'slug' => Str::slug('CR-V')],
            ['car_brand_id' => 30, 'name' => 'HR-V', 'slug' => Str::slug('HR-V')],
            ['car_brand_id' => 30, 'name' => 'Pilot', 'slug' => Str::slug('Pilot')],
            ['car_brand_id' => 30, 'name' => 'Passport', 'slug' => Str::slug('Passport')],
            ['car_brand_id' => 30, 'name' => 'Ridgeline', 'slug' => Str::slug('Ridgeline')],
            ['car_brand_id' => 30, 'name' => 'Odyssey', 'slug' => Str::slug('Odyssey')],
            ['car_brand_id' => 30, 'name' => 'Fit', 'slug' => Str::slug('Fit')],
            ['car_brand_id' => 30, 'name' => 'Insight', 'slug' => Str::slug('Insight')],
            ['car_brand_id' => 30, 'name' => 'Clarity', 'slug' => Str::slug('Clarity')],
            ['car_brand_id' => 30, 'name' => 'Prelude', 'slug' => Str::slug('Prelude')],
            ['car_brand_id' => 30, 'name' => 'S2000', 'slug' => Str::slug('S2000')],
            ['car_brand_id' => 30, 'name' => 'Element', 'slug' => Str::slug('Element')],
            ['car_brand_id' => 30, 'name' => 'CR-Z', 'slug' => Str::slug('CR-Z')],
            ['car_brand_id' => 30, 'name' => 'Crosstour', 'slug' => Str::slug('Crosstour')],
            ['car_brand_id' => 30, 'name' => 'FCX Clarity', 'slug' => Str::slug('FCX Clarity')],
            ['car_brand_id' => 30, 'name' => 'NSX', 'slug' => Str::slug('NSX')],
            ['car_brand_id' => 30, 'name' => 'Jazz', 'slug' => Str::slug('Jazz')],
            ['car_brand_id' => 30, 'name' => 'Brio', 'slug' => Str::slug('Brio')],
            ['car_brand_id' => 30, 'name' => 'City', 'slug' => Str::slug('City')],
            ['car_brand_id' => 30, 'name' => 'WR-V', 'slug' => Str::slug('WR-V')],
            ['car_brand_id' => 30, 'name' => 'Amaze', 'slug' => Str::slug('Amaze')],
            ['car_brand_id' => 30, 'name' => 'Mobilio', 'slug' => Str::slug('Mobilio')],

            // Hummer (ID: 31)
            ['car_brand_id' => 31, 'name' => 'H1', 'slug' => Str::slug('H1')],
            ['car_brand_id' => 31, 'name' => 'H2', 'slug' => Str::slug('H2')],
            ['car_brand_id' => 31, 'name' => 'H3', 'slug' => Str::slug('H3')],
            ['car_brand_id' => 31, 'name' => 'H3T', 'slug' => Str::slug('H3T')],

            // Hyundai (ID: 32)
            ['car_brand_id' => 32, 'name' => 'Accent', 'slug' => Str::slug('Accent')],
            ['car_brand_id' => 32, 'name' => 'Elantra', 'slug' => Str::slug('Elantra')],
            ['car_brand_id' => 32, 'name' => 'Sonata', 'slug' => Str::slug('Sonata')],
            ['car_brand_id' => 32, 'name' => 'Tucson', 'slug' => Str::slug('Tucson')],
            ['car_brand_id' => 32, 'name' => 'Santa Fe', 'slug' => Str::slug('Santa Fe')],
            ['car_brand_id' => 32, 'name' => 'Kona', 'slug' => Str::slug('Kona')],
            ['car_brand_id' => 32, 'name' => 'Venue', 'slug' => Str::slug('Venue')],
            ['car_brand_id' => 32, 'name' => 'Ioniq', 'slug' => Str::slug('Ioniq')],
            ['car_brand_id' => 32, 'name' => 'Palisae', 'slug' => Str::slug('Palisae')],
            ['car_brand_id' => 32, 'name' => 'Veloster', 'slug' => Str::slug('Veloster')],
            ['car_brand_id' => 32, 'name' => 'Genesis', 'slug' => Str::slug('Genesis')],  // note: Genesis is its own brand now but sometimes Hyundai

            // Infiniti (ID: 33)
            ['car_brand_id' => 33, 'name' => 'Q50', 'slug' => Str::slug('Q50')],
            ['car_brand_id' => 33, 'name' => 'Q60', 'slug' => Str::slug('Q60')],
            ['car_brand_id' => 33, 'name' => 'Q70', 'slug' => Str::slug('Q70')],
            ['car_brand_id' => 33, 'name' => 'QX30', 'slug' => Str::slug('QX30')],
            ['car_brand_id' => 33, 'name' => 'QX50', 'slug' => Str::slug('QX50')],
            ['car_brand_id' => 33, 'name' => 'QX55', 'slug' => Str::slug('QX55')],
            ['car_brand_id' => 33, 'name' => 'QX60', 'slug' => Str::slug('QX60')],
            ['car_brand_id' => 33, 'name' => 'QX70', 'slug' => Str::slug('QX70')],
            ['car_brand_id' => 33, 'name' => 'QX80', 'slug' => Str::slug('QX80')],

            // Isuzu (ID: 34)
            ['car_brand_id' => 34, 'name' => 'D-Max', 'slug' => Str::slug('D-Max')],
            ['car_brand_id' => 34, 'name' => 'MU-X', 'slug' => Str::slug('MU-X')],
            ['car_brand_id' => 34, 'name' => 'Trooper', 'slug' => Str::slug('Trooper')],
            ['car_brand_id' => 34, 'name' => 'Rodeo', 'slug' => Str::slug('Rodeo')],
            ['car_brand_id' => 34, 'name' => 'Ascender', 'slug' => Str::slug('Ascender')],

            // JAC (ID: 35)
            ['car_brand_id' => 35, 'name' => 'Refine', 'slug' => Str::slug('Refine')],
            ['car_brand_id' => 35, 'name' => 'S3', 'slug' => Str::slug('S3')],
            ['car_brand_id' => 35, 'name' => 'S5', 'slug' => Str::slug('S5')],
            ['car_brand_id' => 35, 'name' => 'T6', 'slug' => Str::slug('T6')],
            ['car_brand_id' => 35, 'name' => 'Sei 2', 'slug' => Str::slug('Sei 2')],

            // Jaguar (ID: 36)
            ['car_brand_id' => 36, 'name' => 'XE', 'slug' => Str::slug('XE')],
            ['car_brand_id' => 36, 'name' => 'XF', 'slug' => Str::slug('XF')],
            ['car_brand_id' => 36, 'name' => 'XJ', 'slug' => Str::slug('XJ')],
            ['car_brand_id' => 36, 'name' => 'F-Type', 'slug' => Str::slug('F-Type')],
            ['car_brand_id' => 36, 'name' => 'E-Pace', 'slug' => Str::slug('E-Pace')],
            ['car_brand_id' => 36, 'name' => 'F-Pace', 'slug' => Str::slug('F-Pace')],
            ['car_brand_id' => 36, 'name' => 'I-Pace', 'slug' => Str::slug('I-Pace')],

            // Jeep (ID: 37)
            ['car_brand_id' => 37, 'name' => 'Wrangler', 'slug' => Str::slug('Wrangler')],
            ['car_brand_id' => 37, 'name' => 'Grand Cherokee', 'slug' => Str::slug('Grand Cherokee')],
            ['car_brand_id' => 37, 'name' => 'Compass', 'slug' => Str::slug('Compass')],
            ['car_brand_id' => 37, 'name' => 'Renegade', 'slug' => Str::slug('Renegade')],
            ['car_brand_id' => 37, 'name' => 'Cherokee', 'slug' => Str::slug('Cherokee')],
            ['car_brand_id' => 37, 'name' => 'Gladiator', 'slug' => Str::slug('Gladiator')],

            // Kia (ID: 38)
            ['car_brand_id' => 38, 'name' => 'Rio', 'slug' => Str::slug('Rio')],
            ['car_brand_id' => 38, 'name' => 'Cerato', 'slug' => Str::slug('Cerato')],
            ['car_brand_id' => 38, 'name' => 'Sportage', 'slug' => Str::slug('Sportage')],
            ['car_brand_id' => 38, 'name' => 'Sorento', 'slug' => Str::slug('Sorento')],
            ['car_brand_id' => 38, 'name' => 'Seltos', 'slug' => Str::slug('Seltos')],
            ['car_brand_id' => 38, 'name' => 'Stinger', 'slug' => Str::slug('Stinger')],
            ['car_brand_id' => 38, 'name' => 'Telluride', 'slug' => Str::slug('Telluride')],

            // Koenigsegg (ID: 39)
            ['car_brand_id' => 39, 'name' => 'Agera', 'slug' => Str::slug('Agera')],
            ['car_brand_id' => 39, 'name' => 'Jesko', 'slug' => Str::slug('Jesko')],
            ['car_brand_id' => 39, 'name' => 'Regera', 'slug' => Str::slug('Regera')],
            ['car_brand_id' => 39, 'name' => 'Gemera', 'slug' => Str::slug('Gemera')],

            // Lada (ID: 40)
            ['car_brand_id' => 40, 'name' => 'Niva', 'slug' => Str::slug('Niva')],
            ['car_brand_id' => 40, 'name' => 'Granta', 'slug' => Str::slug('Granta')],
            ['car_brand_id' => 40, 'name' => 'Vesta', 'slug' => Str::slug('Vesta')],
            ['car_brand_id' => 40, 'name' => 'Xray', 'slug' => Str::slug('Xray')],
            ['car_brand_id' => 40, 'name' => 'Kalina', 'slug' => Str::slug('Kalina')],

            // Lamborghini (ID: 41)
            ['car_brand_id' => 41, 'name' => 'Aventador', 'slug' => Str::slug('Aventador')],
            ['car_brand_id' => 41, 'name' => 'Huracan', 'slug' => Str::slug('Huracan')],
            ['car_brand_id' => 41, 'name' => 'Urus', 'slug' => Str::slug('Urus')],
            ['car_brand_id' => 41, 'name' => 'Gallardo', 'slug' => Str::slug('Gallardo')],
            ['car_brand_id' => 41, 'name' => 'Murcielago', 'slug' => Str::slug('Murcielago')],

            // Lancia (ID: 42)
            ['car_brand_id' => 42, 'name' => 'Delta', 'slug' => Str::slug('Delta')],
            ['car_brand_id' => 42, 'name' => 'Ypsilon', 'slug' => Str::slug('Ypsilon')],
            ['car_brand_id' => 42, 'name' => 'Stratos', 'slug' => Str::slug('Stratos')],
            ['car_brand_id' => 42, 'name' => 'Thesis', 'slug' => Str::slug('Thesis')],
            ['car_brand_id' => 42, 'name' => 'Lybra', 'slug' => Str::slug('Lybra')],

            // Land Rover (ID: 43)
            ['car_brand_id' => 43, 'name' => 'Defender', 'slug' => Str::slug('Defender')],
            ['car_brand_id' => 43, 'name' => 'Discovery', 'slug' => Str::slug('Discovery')],
            ['car_brand_id' => 43, 'name' => 'Range Rover', 'slug' => Str::slug('Range Rover')],
            ['car_brand_id' => 43, 'name' => 'Range Rover Sport', 'slug' => Str::slug('Range Rover Sport')],
            ['car_brand_id' => 43, 'name' => 'Range Rover Evoque', 'slug' => Str::slug('Range Rover Evoque')],
            ['car_brand_id' => 43, 'name' => 'Velar', 'slug' => Str::slug('Velar')],

            // Lexus (ID: 44)
            ['car_brand_id' => 44, 'name' => 'RX', 'slug' => Str::slug('RX')],
            ['car_brand_id' => 44, 'name' => 'NX', 'slug' => Str::slug('NX')],
            ['car_brand_id' => 44, 'name' => 'ES', 'slug' => Str::slug('ES')],
            ['car_brand_id' => 44, 'name' => 'LS', 'slug' => Str::slug('LS')],
            ['car_brand_id' => 44, 'name' => 'UX', 'slug' => Str::slug('UX')],
            ['car_brand_id' => 44, 'name' => 'IS', 'slug' => Str::slug('IS')],
            ['car_brand_id' => 44, 'name' => 'LC', 'slug' => Str::slug('LC')],

            // Lincoln (ID: 45)
            ['car_brand_id' => 45, 'name' => 'Navigator', 'slug' => Str::slug('Navigator')],
            ['car_brand_id' => 45, 'name' => 'Aviator', 'slug' => Str::slug('Aviator')],
            ['car_brand_id' => 45, 'name' => 'Corsair', 'slug' => Str::slug('Corsair')],
            ['car_brand_id' => 45, 'name' => 'Nautilus', 'slug' => Str::slug('Nautilus')],
            ['car_brand_id' => 45, 'name' => 'MKZ', 'slug' => Str::slug('MKZ')],

            // Lotus (ID: 46)
            ['car_brand_id' => 46, 'name' => 'Elise', 'slug' => Str::slug('Elise')],
            ['car_brand_id' => 46, 'name' => 'Exige', 'slug' => Str::slug('Exige')],
            ['car_brand_id' => 46, 'name' => 'Evora', 'slug' => Str::slug('Evora')],
            ['car_brand_id' => 46, 'name' => 'Emira', 'slug' => Str::slug('Emira')],
            ['car_brand_id' => 46, 'name' => 'Evija', 'slug' => Str::slug('Evija')],

            // Lucid (ID: 47)
            ['car_brand_id' => 47, 'name' => 'Air', 'slug' => Str::slug('Air')],
            ['car_brand_id' => 47, 'name' => 'Gravity', 'slug' => Str::slug('Gravity')],

            // Maserati (ID: 48)
            ['car_brand_id' => 48, 'name' => 'Ghibli', 'slug' => Str::slug('Ghibli')],
            ['car_brand_id' => 48, 'name' => 'Quattroporte', 'slug' => Str::slug('Quattroporte')],
            ['car_brand_id' => 48, 'name' => 'Levante', 'slug' => Str::slug('Levante')],
            ['car_brand_id' => 48, 'name' => 'MC20', 'slug' => Str::slug('MC20')],

            // Maybach (ID: 49)
            ['car_brand_id' => 49, 'name' => 'S-Class Maybach', 'slug' => Str::slug('S-Class Maybach')],
            ['car_brand_id' => 49, 'name' => 'GLS Maybach', 'slug' => Str::slug('GLS Maybach')],

            // Mazda (ID: 50)
            ['car_brand_id' => 50, 'name' => 'Mazda3', 'slug' => Str::slug('Mazda3')],
            ['car_brand_id' => 50, 'name' => 'Mazda6', 'slug' => Str::slug('Mazda6')],
            ['car_brand_id' => 50, 'name' => 'CX-3', 'slug' => Str::slug('CX-3')],
            ['car_brand_id' => 50, 'name' => 'CX-5', 'slug' => Str::slug('CX-5')],
            ['car_brand_id' => 50, 'name' => 'CX-9', 'slug' => Str::slug('CX-9')],
            ['car_brand_id' => 50, 'name' => 'MX-5 Miata', 'slug' => Str::slug('MX-5 Miata')],

            // McLaren (ID: 51)
            ['car_brand_id' => 51, 'name' => '720S', 'slug' => Str::slug('720S')],
            ['car_brand_id' => 51, 'name' => '570S', 'slug' => Str::slug('570S')],
            ['car_brand_id' => 51, 'name' => 'GT', 'slug' => Str::slug('GT')],
            ['car_brand_id' => 51, 'name' => 'P1', 'slug' => Str::slug('P1')],
            ['car_brand_id' => 51, 'name' => 'Artura', 'slug' => Str::slug('Artura')],

            // Mercedes-Benz (ID: 52)
            ['car_brand_id' => 52, 'name' => 'C-Class', 'slug' => Str::slug('C-Class')],
            ['car_brand_id' => 52, 'name' => 'E-Class', 'slug' => Str::slug('E-Class')],
            ['car_brand_id' => 52, 'name' => 'S-Class', 'slug' => Str::slug('S-Class')],
            ['car_brand_id' => 52, 'name' => 'GLA', 'slug' => Str::slug('GLA')],
            ['car_brand_id' => 52, 'name' => 'GLC', 'slug' => Str::slug('GLC')],
            ['car_brand_id' => 52, 'name' => 'GLE', 'slug' => Str::slug('GLE')],
            ['car_brand_id' => 52, 'name' => 'GLS', 'slug' => Str::slug('GLS')],

            // Mercury (ID: 53)
            ['car_brand_id' => 53, 'name' => 'Grand Marquis', 'slug' => Str::slug('Grand Marquis')],
            ['car_brand_id' => 53, 'name' => 'Marauder', 'slug' => Str::slug('Marauder')],
            ['car_brand_id' => 53, 'name' => 'Montego', 'slug' => Str::slug('Montego')],
            ['car_brand_id' => 53, 'name' => 'Mountaineer', 'slug' => Str::slug('Mountaineer')],

            // MG (ID: 54)
            ['car_brand_id' => 54, 'name' => 'MG3', 'slug' => Str::slug('MG3')],
            ['car_brand_id' => 54, 'name' => 'MG6', 'slug' => Str::slug('MG6')],
            ['car_brand_id' => 54, 'name' => 'MG ZS', 'slug' => Str::slug('MG ZS')],
            ['car_brand_id' => 54, 'name' => 'MG Hector', 'slug' => Str::slug('MG Hector')],

            // Mini (ID: 55)
            ['car_brand_id' => 55, 'name' => 'Cooper', 'slug' => Str::slug('Cooper')],
            ['car_brand_id' => 55, 'name' => 'Countryman', 'slug' => Str::slug('Countryman')],
            ['car_brand_id' => 55, 'name' => 'Clubman', 'slug' => Str::slug('Clubman')],
            ['car_brand_id' => 55, 'name' => 'Paceman', 'slug' => Str::slug('Paceman')],

            // Mitsubishi (ID: 56)
            ['car_brand_id' => 56, 'name' => 'Outlander', 'slug' => Str::slug('Outlander')],
            ['car_brand_id' => 56, 'name' => 'Lancer', 'slug' => Str::slug('Lancer')],
            ['car_brand_id' => 56, 'name' => 'Pajero', 'slug' => Str::slug('Pajero')],
            ['car_brand_id' => 56, 'name' => 'Eclipse Cross', 'slug' => Str::slug('Eclipse Cross')],
            ['car_brand_id' => 56, 'name' => 'ASX', 'slug' => Str::slug('ASX')],

            // Nissan (ID: 57)
            ['car_brand_id' => 57, 'name' => 'Altima', 'slug' => Str::slug('Altima')],
            ['car_brand_id' => 57, 'name' => 'Sentra', 'slug' => Str::slug('Sentra')],
            ['car_brand_id' => 57, 'name' => 'Rogue', 'slug' => Str::slug('Rogue')],
            ['car_brand_id' => 57, 'name' => 'Leaf', 'slug' => Str::slug('Leaf')],
            ['car_brand_id' => 57, 'name' => 'GT-R', 'slug' => Str::slug('GT-R')],

            // NIO (ID: 58)
            ['car_brand_id' => 58, 'name' => 'ES8', 'slug' => Str::slug('ES8')],
            ['car_brand_id' => 58, 'name' => 'ES6', 'slug' => Str::slug('ES6')],
            ['car_brand_id' => 58, 'name' => 'EC6', 'slug' => Str::slug('EC6')],
            ['car_brand_id' => 58, 'name' => 'ET7', 'slug' => Str::slug('ET7')],

            // Opel (ID: 59)
            ['car_brand_id' => 59, 'name' => 'Astra', 'slug' => Str::slug('Astra')],
            ['car_brand_id' => 59, 'name' => 'Corsa', 'slug' => Str::slug('Corsa')],
            ['car_brand_id' => 59, 'name' => 'Insignia', 'slug' => Str::slug('Insignia')],
            ['car_brand_id' => 59, 'name' => 'Crossland', 'slug' => Str::slug('Crossland')],
            ['car_brand_id' => 59, 'name' => 'Mokka', 'slug' => Str::slug('Mokka')],

            // Pagani (ID: 60)
            ['car_brand_id' => 60, 'name' => 'Zonda', 'slug' => Str::slug('Zonda')],
            ['car_brand_id' => 60, 'name' => 'Huayra', 'slug' => Str::slug('Huayra')],

            // Peugeot (ID: 61)
            ['car_brand_id' => 61, 'name' => '208', 'slug' => Str::slug('208')],
            ['car_brand_id' => 61, 'name' => '308', 'slug' => Str::slug('308')],
            ['car_brand_id' => 61, 'name' => '3008', 'slug' => Str::slug('3008')],
            ['car_brand_id' => 61, 'name' => '5008', 'slug' => Str::slug('5008')],
            ['car_brand_id' => 61, 'name' => '508', 'slug' => Str::slug('508')],

            // Polestar (ID: 62)
            ['car_brand_id' => 62, 'name' => 'Polestar 1', 'slug' => Str::slug('Polestar 1')],
            ['car_brand_id' => 62, 'name' => 'Polestar 2', 'slug' => Str::slug('Polestar 2')],
            ['car_brand_id' => 62, 'name' => 'Polestar 3', 'slug' => Str::slug('Polestar 3')],

            // Pontiac (ID: 63)
            ['car_brand_id' => 63, 'name' => 'GTO', 'slug' => Str::slug('GTO')],
            ['car_brand_id' => 63, 'name' => 'Firebird', 'slug' => Str::slug('Firebird')],
            ['car_brand_id' => 63, 'name' => 'Grand Prix', 'slug' => Str::slug('Grand Prix')],
            ['car_brand_id' => 63, 'name' => 'Bonneville', 'slug' => Str::slug('Bonneville')],

            // Porsche (ID: 64)
            ['car_brand_id' => 64, 'name' => '911', 'slug' => Str::slug('911')],
            ['car_brand_id' => 64, 'name' => 'Cayenne', 'slug' => Str::slug('Cayenne')],
            ['car_brand_id' => 64, 'name' => 'Macan', 'slug' => Str::slug('Macan')],
            ['car_brand_id' => 64, 'name' => 'Panamera', 'slug' => Str::slug('Panamera')],
            ['car_brand_id' => 64, 'name' => 'Taycan', 'slug' => Str::slug('Taycan')],

            // Proton (ID: 65)
            ['car_brand_id' => 65, 'name' => 'Persona', 'slug' => Str::slug('Persona')],
            ['car_brand_id' => 65, 'name' => 'Saga', 'slug' => Str::slug('Saga')],
            ['car_brand_id' => 65, 'name' => 'X70', 'slug' => Str::slug('X70')],
            ['car_brand_id' => 65, 'name' => 'Exora', 'slug' => Str::slug('Exora')],

            // RAM (ID: 66)
            ['car_brand_id' => 66, 'name' => '1500', 'slug' => Str::slug('1500')],
            ['car_brand_id' => 66, 'name' => '2500', 'slug' => Str::slug('2500')],
            ['car_brand_id' => 66, 'name' => '3500', 'slug' => Str::slug('3500')],
            ['car_brand_id' => 66, 'name' => 'ProMaster', 'slug' => Str::slug('ProMaster')],
            ['car_brand_id' => 66, 'name' => 'Dakota', 'slug' => Str::slug('Dakota')],

            // Renault (ID: 67)
            ['car_brand_id' => 67, 'name' => 'Clio', 'slug' => Str::slug('Clio')],
            ['car_brand_id' => 67, 'name' => 'Megane', 'slug' => Str::slug('Megane')],
            ['car_brand_id' => 67, 'name' => 'Captur', 'slug' => Str::slug('Captur')],
            ['car_brand_id' => 67, 'name' => 'Kadjar', 'slug' => Str::slug('Kadjar')],
            ['car_brand_id' => 67, 'name' => 'Talisman', 'slug' => Str::slug('Talisman')],

            // Rivian (ID: 68)
            ['car_brand_id' => 68, 'name' => 'R1T', 'slug' => Str::slug('R1T')],
            ['car_brand_id' => 68, 'name' => 'R1S', 'slug' => Str::slug('R1S')],

            // Rolls-Royce (ID: 69)
            ['car_brand_id' => 69, 'name' => 'Phantom', 'slug' => Str::slug('Phantom')],
            ['car_brand_id' => 69, 'name' => 'Ghost', 'slug' => Str::slug('Ghost')],
            ['car_brand_id' => 69, 'name' => 'Wraith', 'slug' => Str::slug('Wraith')],
            ['car_brand_id' => 69, 'name' => 'Cullinan', 'slug' => Str::slug('Cullinan')],
            ['car_brand_id' => 69, 'name' => 'Dawn', 'slug' => Str::slug('Dawn')],

            // Rover (ID: 70)
            ['car_brand_id' => 70, 'name' => 'Range Rover', 'slug' => Str::slug('Range Rover')],
            ['car_brand_id' => 70, 'name' => 'Discovery', 'slug' => Str::slug('Discovery')],
            ['car_brand_id' => 70, 'name' => 'Defender', 'slug' => Str::slug('Defender')],

            // Saab (ID: 71)
            ['car_brand_id' => 71, 'name' => '9-3', 'slug' => Str::slug('9-3')],
            ['car_brand_id' => 71, 'name' => '9-5', 'slug' => Str::slug('9-5')],
            ['car_brand_id' => 71, 'name' => '900', 'slug' => Str::slug('900')],
            ['car_brand_id' => 71, 'name' => '9-4X', 'slug' => Str::slug('9-4X')],

            // Saleen (ID: 72)
            ['car_brand_id' => 72, 'name' => 'S7', 'slug' => Str::slug('S7')],
            ['car_brand_id' => 72, 'name' => 'S1', 'slug' => Str::slug('S1')],
            ['car_brand_id' => 72, 'name' => 'Mustang', 'slug' => Str::slug('Mustang')],

            // Samsung (ID: 73)
            ['car_brand_id' => 73, 'name' => 'SM3', 'slug' => Str::slug('SM3')],
            ['car_brand_id' => 73, 'name' => 'SM5', 'slug' => Str::slug('SM5')],
            ['car_brand_id' => 73, 'name' => 'QM5', 'slug' => Str::slug('QM5')],

            // Saturn (ID: 74)
            ['car_brand_id' => 74, 'name' => 'Ion', 'slug' => Str::slug('Ion')],
            ['car_brand_id' => 74, 'name' => 'Sky', 'slug' => Str::slug('Sky')],
            ['car_brand_id' => 74, 'name' => 'Aura', 'slug' => Str::slug('Aura')],

            // Scion (ID: 75)
            ['car_brand_id' => 75, 'name' => 'tC', 'slug' => Str::slug('tC')],
            ['car_brand_id' => 75, 'name' => 'xB', 'slug' => Str::slug('xB')],
            ['car_brand_id' => 75, 'name' => 'FR-S', 'slug' => Str::slug('FR-S')],

            // Seat (ID: 76)
            ['car_brand_id' => 76, 'name' => 'Ibiza', 'slug' => Str::slug('Ibiza')],
            ['car_brand_id' => 76, 'name' => 'Leon', 'slug' => Str::slug('Leon')],
            ['car_brand_id' => 76, 'name' => 'Arona', 'slug' => Str::slug('Arona')],
            ['car_brand_id' => 76, 'name' => 'Ateca', 'slug' => Str::slug('Ateca')],
            ['car_brand_id' => 76, 'name' => 'Tarraco', 'slug' => Str::slug('Tarraco')],

            // Škoda (ID: 77)
            ['car_brand_id' => 77, 'name' => 'Octavia', 'slug' => Str::slug('Octavia')],
            ['car_brand_id' => 77, 'name' => 'Fabia', 'slug' => Str::slug('Fabia')],
            ['car_brand_id' => 77, 'name' => 'Superb', 'slug' => Str::slug('Superb')],
            ['car_brand_id' => 77, 'name' => 'Kodiaq', 'slug' => Str::slug('Kodiaq')],
            ['car_brand_id' => 77, 'name' => 'Karoq', 'slug' => Str::slug('Karoq')],

            // Smart (ID: 78)
            ['car_brand_id' => 78, 'name' => 'Fortwo', 'slug' => Str::slug('Fortwo')],
            ['car_brand_id' => 78, 'name' => 'Forfour', 'slug' => Str::slug('Forfour')],
            ['car_brand_id' => 78, 'name' => 'EQ Forfour', 'slug' => Str::slug('EQ Forfour')],

            // SsangYong (ID: 79)
            ['car_brand_id' => 79, 'name' => 'Tivoli', 'slug' => Str::slug('Tivoli')],
            ['car_brand_id' => 79, 'name' => 'Korando', 'slug' => Str::slug('Korando')],
            ['car_brand_id' => 79, 'name' => 'Rexton', 'slug' => Str::slug('Rexton')],
            ['car_brand_id' => 79, 'name' => 'Musso', 'slug' => Str::slug('Musso')],

            // Subaru (ID: 80)
            ['car_brand_id' => 80, 'name' => 'Impreza', 'slug' => Str::slug('Impreza')],
            ['car_brand_id' => 80, 'name' => 'Forester', 'slug' => Str::slug('Forester')],
            ['car_brand_id' => 80, 'name' => 'Outback', 'slug' => Str::slug('Outback')],
            ['car_brand_id' => 80, 'name' => 'XV', 'slug' => Str::slug('XV')],
            ['car_brand_id' => 80, 'name' => 'Ascent', 'slug' => Str::slug('Ascent')],

            // Suzuki (ID: 81)
            ['car_brand_id' => 81, 'name' => 'Swift', 'slug' => Str::slug('Swift')],
            ['car_brand_id' => 81, 'name' => 'Vitara', 'slug' => Str::slug('Vitara')],
            ['car_brand_id' => 81, 'name' => 'Jimny', 'slug' => Str::slug('Jimny')],
            ['car_brand_id' => 81, 'name' => 'S-Cross', 'slug' => Str::slug('S-Cross')],

            // Tata (ID: 82)
            ['car_brand_id' => 82, 'name' => 'Nexon', 'slug' => Str::slug('Nexon')],
            ['car_brand_id' => 82, 'name' => 'Harrier', 'slug' => Str::slug('Harrier')],
            ['car_brand_id' => 82, 'name' => 'Altroz', 'slug' => Str::slug('Altroz')],
            ['car_brand_id' => 82, 'name' => 'Safari', 'slug' => Str::slug('Safari')],
            ['car_brand_id' => 82, 'name' => 'Tiago', 'slug' => Str::slug('Tiago')],
            ['car_brand_id' => 82, 'name' => 'Punch', 'slug' => Str::slug('Punch')],

            // Tesla (ID: 83)
            ['car_brand_id' => 83, 'name' => 'Model S', 'slug' => Str::slug('Model S')],
            ['car_brand_id' => 83, 'name' => 'Model 3', 'slug' => Str::slug('Model 3')],
            ['car_brand_id' => 83, 'name' => 'Model X', 'slug' => Str::slug('Model X')],
            ['car_brand_id' => 83, 'name' => 'Model Y', 'slug' => Str::slug('Model Y')],
            ['car_brand_id' => 83, 'name' => 'Cybertruck', 'slug' => Str::slug('Cybertruck')],
            ['car_brand_id' => 83, 'name' => 'Roadster', 'slug' => Str::slug('Roadster')],

            // Toyota (ID: 84)
            ['car_brand_id' => 84, 'name' => 'Corolla', 'slug' => Str::slug('Corolla')],
            ['car_brand_id' => 84, 'name' => 'Camry', 'slug' => Str::slug('Camry')],
            ['car_brand_id' => 84, 'name' => 'RAV4', 'slug' => Str::slug('RAV4')],
            ['car_brand_id' => 84, 'name' => 'Hilux', 'slug' => Str::slug('Hilux')],
            ['car_brand_id' => 84, 'name' => 'Prius', 'slug' => Str::slug('Prius')],
            ['car_brand_id' => 84, 'name' => 'Yaris', 'slug' => Str::slug('Yaris')],
            ['car_brand_id' => 84, 'name' => 'Land Cruiser', 'slug' => Str::slug('Land Cruiser')],
            ['car_brand_id' => 84, 'name' => 'Avalon', 'slug' => Str::slug('Avalon')],
            ['car_brand_id' => 84, 'name' => 'Supra', 'slug' => Str::slug('Supra')],

            // Vauxhall (ID: 85)
            ['car_brand_id' => 85, 'name' => 'Astra', 'slug' => Str::slug('Astra')],
            ['car_brand_id' => 85, 'name' => 'Corsa', 'slug' => Str::slug('Corsa')],
            ['car_brand_id' => 85, 'name' => 'Insignia', 'slug' => Str::slug('Insignia')],
            ['car_brand_id' => 85, 'name' => 'Mokka', 'slug' => Str::slug('Mokka')],
            ['car_brand_id' => 85, 'name' => 'Crossland', 'slug' => Str::slug('Crossland')],
            ['car_brand_id' => 85, 'name' => 'Grandland', 'slug' => Str::slug('Grandland')],

            // Volkswagen (ID: 86)
            ['car_brand_id' => 86, 'name' => 'Golf', 'slug' => Str::slug('Golf')],
            ['car_brand_id' => 86, 'name' => 'Polo', 'slug' => Str::slug('Polo')],
            ['car_brand_id' => 86, 'name' => 'Passat', 'slug' => Str::slug('Passat')],
            ['car_brand_id' => 86, 'name' => 'Tiguan', 'slug' => Str::slug('Tiguan')],
            ['car_brand_id' => 86, 'name' => 'Touareg', 'slug' => Str::slug('Touareg')],
            ['car_brand_id' => 86, 'name' => 'Arteon', 'slug' => Str::slug('Arteon')],
            ['car_brand_id' => 86, 'name' => 'Jetta', 'slug' => Str::slug('Jetta')],

            // Volvo (ID: 87)
            ['car_brand_id' => 87, 'name' => 'XC90', 'slug' => Str::slug('XC90')],
            ['car_brand_id' => 87, 'name' => 'XC60', 'slug' => Str::slug('XC60')],
            ['car_brand_id' => 87, 'name' => 'XC40', 'slug' => Str::slug('XC40')],
            ['car_brand_id' => 87, 'name' => 'S90', 'slug' => Str::slug('S90')],
            ['car_brand_id' => 87, 'name' => 'V90', 'slug' => Str::slug('V90')],
            ['car_brand_id' => 87, 'name' => 'V60', 'slug' => Str::slug('V60')],
            ['car_brand_id' => 87, 'name' => 'S60', 'slug' => Str::slug('S60')],

            // Wiesmann (ID: 88)
            ['car_brand_id' => 88, 'name' => 'GT MF3', 'slug' => Str::slug('GT MF3')],
            ['car_brand_id' => 88, 'name' => 'Roadster MF4', 'slug' => Str::slug('Roadster MF4')],
            ['car_brand_id' => 88, 'name' => 'GT MF5', 'slug' => Str::slug('GT MF5')],
            ['car_brand_id' => 88, 'name' => 'Roadster MF5', 'slug' => Str::slug('Roadster MF5')],

            // Zotye (ID: 89)
            ['car_brand_id' => 89, 'name' => 'T600', 'slug' => Str::slug('T600')],
            ['car_brand_id' => 89, 'name' => 'T700', 'slug' => Str::slug('T700')],
            ['car_brand_id' => 89, 'name' => 'SR9', 'slug' => Str::slug('SR9')],
            ['car_brand_id' => 89, 'name' => 'Z500', 'slug' => Str::slug('Z500')],
        ];

        foreach ($models as $model) {
            CarModel::create($model);
        }
    }
}
