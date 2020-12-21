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
                          'status'    => "act",
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

                $kategori = [
                  [
                    'nama'      => "Kedelai Edamame SESA",
                    'harga'  => '26000',
                    'jenis'     => 'Edamame',
                  ],
                  [
                    'nama'      => "Kedelai USA",
                    'harga'  => '10000',
                    'jenis'     => 'Kedelai Hijau',
                  ],
                  [
                    'nama'      => "Kedelai Kuning",
                    'harga'  => '19000',
                    'jenis'     => 'Kedelai Kuning',
                  ],
                  [
                    'nama'      => "Kedelai Kuning Pecah",
                    'harga'  => '14500',
                    'jenis'     => 'Kedelai Kuning',
                  ],
                  [
                    'nama'      => "Kedelai Kuning Kupas",
                    'harga'  => '22500',
                    'jenis'     => 'Kedelai Kuning',
                  ]
                ];
                $supplier = [
                  [
                    'nama'      => "Suherman",
                    'maps'      => "Jl. Slamet Riyadi No. 99A",
                    'kategori'  => "Kedelai Kuning",
                    'whatsapp'  => "6283334444432",
                    'instagram' => 'suherman.desu'
                  ],
                  [
                    'nama'      => "Siswanto",
                    'maps'      => "Jl. Trunojoyo V No. 91A",
                    'kategori'  => "Kedelai Edamame SESA",
                    'whatsapp'  => "6283322311113",
                    'instagram' => 'black.soy'
                  ],
                  [
                    'nama'      => "Arip Kurniawan",
                    'maps'      => "Jl. Panjaitan 1 No. 2",
                    'kategori'  => "Kedelai Kuning Kupas",
                    'whatsapp'  => "6283322311213",
                    'twitter' => '@green.t'
                  ],
                ];
                foreach ($supplier as $key => $input) {
                  \App\Supplier::create($input);
                }
                foreach ($kategori as $key => $input) {
                  \App\Kategori::create($input);
                }
    }
}
