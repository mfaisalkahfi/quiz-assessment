<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

- - - - -
# Assessment Quiz

Project dimana user dapat membuat pertanyaan / quiz / survey maupun penilaian dan serupa lainnya.
Dan mendapatkan hasil dari berapa banyak point yang didapatkan serta skor jumlah akhir.

- - - - -
## How to install
Requirement
- PHP Version: 7.4.X
- Laravel Version: 6.X

For a standard installation please follow the Setup instructions
- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL. 
- You can login to adminpanel by going go `/login` URL and login with credentials __admin@admin.com__ - __password__
- Click __Register__ to register as new user and start the test


- - - - -

## ERORR
Jika menemukan error ketika menjalankan __composer install__ dengan pesan:

In PackageManifest.php line 122:

  Undefined index: name


Script @php artisan package:discover --ansi handling the post-autoload-dump event returned with error code 1

Solusinya :
Cari file
vendor/laravel/framework/src/Illuminate/Foundation/PackageManifest.php
temukan line 116 dan beri comment pada code:

$packages = json_decode($this->files->get($path), true);

Lalu tambahkan script 2 baris dibawah script yang dikomen tadi
scriptnya sebagai berikut:

$installed = json_decode($this->files->get($path), true);
$packages = $installed['packages'] ?? $installed;

- - - - -

## License

Silahkan gunakan dan kembangkan dengan inovasi apapun yang kalian miliki.

