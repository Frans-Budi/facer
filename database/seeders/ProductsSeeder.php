<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            [
                "name" => "GCC",
                "slug" => "gcc",
                "description" =>
                    "Gedung Creative Center (GCC) telah diresmikan oleh Gubernur Jawa Barat, RIdwan Kamil pada 21 Februari 2023.<br/><br/> Bangunan bergaya industrial minimalis ini dapat digunakan untuk mengadakan kegiatan pameran, kelas seni, bazaar, dan berbagai acara lainnya. <br/><br/> Diharapkan agar gedung ini dapat mendongrak pertumbuhan dunia ekonomi kreatif di Tasikmalaya.",
                "facility" => json_encode([
                    "Ruang Pameran",
                    "Auditorium",
                    "Arena Taman",
                    "Lift",
                ]),
                "location" =>
                    "Jl. Dadaha No.68, Nagarawangi, Kec. Cihideung, Kota Tasikmalaya, Jawa Barat.",
                "image" => "img-gcc.png",
                "price" => 1000000,
                "unit" => "Hari",
                "category_product_id" => 1,
            ],
            [
                "name" => "Gor Susanti",
                "slug" => "gor-susanti",
                "description" =>
                    "Keberadaan Gor Susanti menjadi salah satu jejak bersejarah legenda bulu tangkis Indonesia, Susi Susanti. Gor ini diresmikan pada tahun 1994.<br/><br/> Fasilitas yang disediakan cukup beragam, namun masih tetap membutuhkan perawatan dari pihak pemerintah dan dihimbau untuk seluruh pengunjung atau penyewa untuk tetap menjaga kebersihan seluruh area Gor Susanti ini.",
                "facility" => json_encode([
                    "Lapangan Bulutangkis",
                    "Tribun Penonton",
                    "Kantin",
                    "Parkiran",
                    "Mushola",
                ]),
                "location" =>
                    "Kompleks Olahraga Dadaha, Nagarawangi, CIhideung, Kota Tasikmalaya, Jawa Barat.",
                "image" => "img-gor-susanti.png",
                "price" => 2000000,
                "unit" => "Hari",
                "category_product_id" => 1,
            ],
            [
                "name" => "Stadion Dadaha",
                "slug" => "stadion-dadaha",
                "description" =>
                    "Stadion Dadaha merupakan sebuah stadion modern yang menjadi kandang klub yang berasal dari Kota Tasikmalaya, Persikotas.<br/><br/> Dikatakan stadion modern karena telah memenuhi standar internasional dalam hal ini standar FIFA seperti rumput yang digunakan di lapangan, tribun penonton, e-board, scoring board dan kursi yang tahan terhadap api.",
                "facility" => json_encode([
                    "Lapangan",
                    "Tribun Penonton",
                    "Toilet",
                    "Scoring Board",
                ]),
                "location" =>
                    "Kompleks Olahraga Dadaha, Nagarawangi, CIhideung, Kota Tasikmalaya, Jawa Barat.",
                "image" => "img-stadion.png",
                "price" => 3000000,
                "unit" => "Hari",
                "category_product_id" => 1,
            ],
            [
                "name" => "Gor Sukapura",
                "slug" => "gor-sukapura",
                "description" =>
                    "Gor Sukapura dibangun dengan kegiatan utamanya adalah bola basket tetapi seiring berjalannya waktu gor ini  dapat digunakan kegiatan olahraga lain, seperti volly, pencak silat, karate dan lainnya.<br/><br/> Gor ini juga menjadi salah satu tempat yang memiliki sejarah dalam mencetak para atlet hebat.",
                "facility" => json_encode([
                    "Lapangan",
                    "Tribun Penonton",
                    "Toilet",
                    "Parkiran",
                ]),
                "location" =>
                    "Jl. Dadaha, Nagarawangi, Kec. Cihideung, Kab. Tasikmalaya, Jawa Barat.",
                "image" => "img-gor-sukapura.png",
                "price" => 2000000,
                "unit" => "Hari",
                "category_product_id" => 1,
            ],
            [
                "name" => "Lapangan Taman Sari",
                "slug" => "lapangan-taman-sari",
                "description" =>
                    "Lapangan Taman Sari berukuran cukup luas dan berada di dalam ruangan (indoor), namun memiliki sirkulasi udara yang baik dan sering digunakan oleh masyarakat untuk friendly match.<br/><br/> Penerangan di lapangan indoor ini pun tergolong sangat baik dan memiliki beberapa opsi lapangan untuk futsal dan 1 lapangan untuk basket.",
                "facility" => json_encode([
                    "Lapangan",
                    "Parkiran",
                    "Mushola",
                    "Toilet",
                ]),
                "location" =>
                    "Jalan Tamansari Gobras No.59, Karsamenak, Kawalu, Sebelah Perum Aksajaya, Sambongjaya, Kec. Mangkubumi, Kab. Tasikmalaya",
                "image" => "img-taman-sari.png",
                "price" => 80000,
                "unit" => "Sesi",
                "category_product_id" => 2,
            ],
            [
                "name" => "Lapangan Futsal BKR",
                "slug" => "lapangan-futsal-bkr",
                "description" =>
                    "Lapangan Futsal BKR berukuran cukup luas dan berada di dalam ruangan (indoor), namun memiliki sirkulasi udara yang baik dan sering digunakan oleh masyarakat untuk friendly match.<br/><br/> Penerangan di lapangan indoor ini pun tergolong sangat baik dan memiliki beberapa opsi lapangan untuk futsal dan 1 lapangan untuk basket.",
                "facility" => json_encode([
                    "Tribun Penonton",
                    "Parkiran",
                    "Mushola",
                    "Toilet",
                    "Ruang Ganti",
                ]),
                "location" =>
                    "Jalan Tamansari Gobras No.59, Karsamenak, Kawalu, Sebelah Perum Aksajaya, Sambongjaya, Kec. Mangkubumi, Kab. Tasikmalaya, Jawa Barat.",
                "image" => "img-futsal-bkr.png",
                "price" => 80000,
                "unit" => "Sesi",
                "category_product_id" => 2,
            ],
            [
                "name" => "Lapangan Harmoni",
                "slug" => "lapangan-harmoni",
                "description" =>
                    "Lapangan Taman Sari berukuran cukup luas dan berada di dalam ruangan (indoor), namun memiliki sirkulasi udara yang baik dan sering digunakan oleh masyarakat untuk friendly match.<br/><br/> Penerangan di lapangan indoor ini pun tergolong sangat baik dan memiliki beberapa opsi lapangan untuk futsal dan 1 lapangan untuk basket.",
                "facility" => json_encode([
                    "Tribun Penonton",
                    "Parkiran",
                    "Mushola",
                    "Toilet",
                    "Ruang Ganti",
                ]),
                "location" =>
                    "Jalan Tamansari Gobras No.59, Karsamenak, Kawalu, Sebelah Perum Aksajaya, Sambongjaya, Kec. Mangkubumi, Kab. Tasikmalaya, Jawa Barat.",
                "image" => "img-harmoni.png",
                "price" => 80000,
                "unit" => "Sesi",
                "category_product_id" => 2,
            ],
            [
                "name" => "Lapangan Mayasari",
                "slug" => "lapangan-mayasari",
                "description" =>
                    "Lapangan Taman Sari berukuran cukup luas dan berada di dalam ruangan (indoor), namun memiliki sirkulasi udara yang baik dan sering digunakan oleh masyarakat untuk friendly match.<br/><br/> Penerangan di lapangan indoor ini pun tergolong sangat baik dan memiliki beberapa opsi lapangan untuk futsal dan 1 lapangan untuk basket.",
                "facility" => json_encode([
                    "Tribun Penonton",
                    "Parkiran",
                    "Mushola",
                    "Toilet",
                    "Ruang Ganti",
                ]),
                "location" =>
                    "Jalan Tamansari Gobras No.59, Karsamenak, Kawalu, Sebelah Perum Aksajaya, Sambongjaya, Kec. Mangkubumi, Kab. Tasikmalaya, Jawa Barat.",
                "image" => "img-mayasari.png",
                "price" => 30000,
                "unit" => "Sesi",
                "category_product_id" => 2,
            ],
        ]);
    }
}
