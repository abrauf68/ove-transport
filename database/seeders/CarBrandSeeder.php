<?php

namespace Database\Seeders;

use App\Models\CarBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'Acura', 'Alfa Romeo', 'Aston Martin', 'Audi', 'Bentley', 'BMW', 'Bugatti', 'Buick',
            'Cadillac', 'Chevrolet', 'Chrysler', 'Citroën', 'Dacia', 'Daewoo', 'Daihatsu', 'Dodge',
            'Donkervoort', 'DS', 'Ferrari', 'Fiat', 'Fisker', 'Ford', 'Geely', 'General Motors',
            'Genesis', 'GMC', 'Great Wall', 'Haval', 'Holden', 'Honda', 'Hummer', 'Hyundai', 'Infiniti',
            'Isuzu', 'JAC', 'Jaguar', 'Jeep', 'Kia', 'Koenigsegg', 'Lada', 'Lamborghini', 'Lancia',
            'Land Rover', 'Lexus', 'Lincoln', 'Lotus', 'Lucid', 'Maserati', 'Maybach', 'Mazda',
            'McLaren', 'Mercedes-Benz', 'Mercury', 'MG', 'Mini', 'Mitsubishi', 'Nissan', 'NIO',
            'Opel', 'Pagani', 'Peugeot', 'Polestar', 'Pontiac', 'Porsche', 'Proton', 'RAM',
            'Renault', 'Rivian', 'Rolls-Royce', 'Rover', 'Saab', 'Saleen', 'Samsung', 'Saturn',
            'Scion', 'Seat', 'Škoda', 'Smart', 'SsangYong', 'Subaru', 'Suzuki', 'Tata', 'Tesla',
            'Toyota', 'Vauxhall', 'Volkswagen', 'Volvo', 'Wiesmann', 'Zotye'
        ];

        foreach ($brands as $brand) {
            $carBrand = new CarBrand();
            $carBrand->name = $brand;
            $carBrand->slug = Str::slug($brand);
            $carBrand->save();
        }
    }
}
