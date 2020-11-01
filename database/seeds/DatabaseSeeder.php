<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Helpers\PhoneHelper as phone;
use App\Helpers\CryptoHelper as ncrypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

                $dataUser = [
                  [
                      'nama'      => "Test Akun Konsumen",
                      'username'  => "konsumen",
                      'no_hp'     => phone::validate('08111111111'),
                      'password'  => Hash::make("katasandi"),
                      'level'     => 'konsumen',
                      'alamat'    => "Kampus Tegalboto, Jl. Kalimantan No.37, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121"
                  ],
                  [
                      'nama'      => "Test Akun Produsen",
                      'username'  => "produsen",
                      'no_hp'     => phone::validate('08111111112'),
                      'password'  => Hash::make("katasandi"),
                      'level'     => 'produsen',
                      'alamat'    => "Kampus Tegalboto, Jl. Kalimantan No.37, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121"
                  ],
                  [
                      'nama'      => "Admin KedeleMe",
                      'username'  => "admin",
                      'no_hp'     => phone::validate('08111111113'),
                      'password'  => Hash::make("katasandi"),
                      'level'     => 'admin',
                      'alamat'    => "Kampus Tegalboto, Jl. Kalimantan No.37, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121"
                  ],
                ];
                $role = ["konsumen", "produsen", "admin"];
                foreach ($dataUser as $key => $input) {
                    $user =  \App\User::create($input);
                    $user->assignRole($role[$key]);
                    #Special Case for Produsen
                    if($role[$key] == 'produsen'){
                        $usaha = \App\Usaha::create([
                          'id_pengusaha' => $user->id,
                          'nama'      => "Toko Testing",
                          'slug'      => "toko-test",
                        ]);
                        $website = \App\Website::create([
                          'id_usaha' => $usaha->id,
                          'judul_jumbotron' => "Toko Testing",
                          'whatsapp' => $user->no_hp,
                        ]);

                        for ($i=1; $i <= 3 ; $i++) {
                          $rand = rand(2,5);
                          $produk = \App\Produk::create([
                            'id_usaha'        => $usaha->id,
                            'nama'            => "SusuKedelai Tipe ".$i,
                            'slug'            => "suket-".$i,
                            'deskripsi'       => 'Ini deskripsi untuk test produk '.$i,
                            'kebutuhan_bahan' => 0.2*$rand,
                            'harga'           => $rand*2500,
                            'gambar'          => 'assets/images/default_produk.png'
                          ]);
                        }
                    }
                }
    }
}
