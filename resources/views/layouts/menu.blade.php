<!--====== HEADER START ======-->
<?php
    function getSubdomain($url) {
        $parsedUrl = parse_url($url);
        $host = explode('.', $parsedUrl['host']);

        if (count($host) > 2) {
            return implode('.', array_slice($host, 0, -2));
        } else {
            return '';
        }
    }

$url = "https://$_SERVER[HTTP_HOST]";
$subdomain = getSubdomain($url);

$subdomainToNamaToko = [
    'beningnusantara' => 'Bening Nusantara',
    'citramandiri' => 'Citra Mandiri',
    'dewiindah' => 'Dewi Indah',
    'elanglestari' => 'Elang Lestari',
    'fajarmerah' => 'Fajar Merah',
    'giriwahana' => 'Giri Wahana',
    'harmonibersama' => 'Harmoni Bersama',
    'sawahbalong' => 'Sawah Balong',
    'jatimurni' => 'Jati Murni',
    'ketapangindah' => 'Ketapang Indah',
    'lautanhijau' => 'Lautan Hijau',
    'paradiseindah' => 'Paradise Indah',
    'mentarijaya' => 'Mentari Jaya',
    'mustikajaya' => 'Mustika Jaya',
    'nirwanasejati' => 'Nirwana Sejati',
    'nusantarakencana' => 'Nusantara Kencana',
    'pertiwilestari' => 'Pertiwi Lestari',
    'pratamautama' => 'Pratama Utama',
    'putrasejahtera' => 'Putra Sejahtera',
    'rimbakencana' => 'Rimba Kencana',
    'satriautama' => 'Satria Utama',
    'seruniindah' => 'Seruni Indah',
    'tunasmuda' => 'Tunas Muda',
    'wirautama' => 'Wira Utama',
    'yudhamandiri' => 'Yudha Mandiri',
    'zamrudkencana' => 'Zamrud Kencana',
    'timurlaut' => 'Timur Laut',
    'bintangpertiwi' => 'Bintang Pertiwi',
    'cahayabiru' => 'Cahaya Biru',
    'dewikencana' => 'Dewi Kencana',
    'floraraya' => 'Flora Raya',
    'ganeshalestari' => 'Ganesha Lestari',
    'hijausejahtera' => 'Hijau Sejahtera',
    'indahjaya' => 'Indah Jaya',
    'jatiperkasa' => 'Jati Perkasa',
    'kemalaindah' => 'Kemala Indah',
    'lenteraraya' => 'Lentera Raya',
    'megasejahtera' => 'Mega Sejahtera',
    'nusasejati' => 'Nusa Sejati',
    'pusakalestari' => 'Pusaka Lestari',
    'samudraindah' => 'Samudra Indah',
    'tigaputra' => 'Tiga Putra',
    'trisaktimandiri' => 'Trisakti Mandiri',
    'utamabersama' => 'Utama Bersama',
    'wijayakencana' => 'Wijaya Kencana',
    'yudhapratama' => 'Yudha Pratama',
    'zamrudutama' => 'Zamrud Utama',
    'angkasacerah' => 'Angkasa Cerah',
    'berkahjaya' => 'Berkah Jaya',
    'cakraabadi' => 'Cakra Abadi',
    'ciptahijau' => 'Cipta Hijau',
    'dutautama' => 'Duta Utama',
    'elangnusantara' => 'Elang Nusantara',
    'fajarmustika' => 'Fajar Mustika',
    'garudaterbang' => 'Garuda Terbang',
    'harmonihijau' => 'Harmoni Hijau',
    'intankencana' => 'Intan Kencana',
    'jayaselalu' => 'Jaya Selalu',
    'kasihluas' => 'Kasih Luas',
    'lautanintan' => 'Lautan Intan',
    'melatiputra' => 'Melati Putra',
    'mentarimalam' => 'Mentari Malam',
    'mustikakencana' => 'Mustika Kencana',
    'nirwanapertiwi' => 'Nirwana Pertiwi',
    'nusantaradunia' => 'Nusantara Dunia',
    'pertiwisentosa' => 'Pertiwi Sentosa',
    'pratamasejahtera' => 'Pratama Sejahtera',
    'putralestari' => 'Putra Lestari',
    'rajanusantara' => 'Raja Nusantara',
    'satriaraya' => 'Satria Raya',
    'serayulestari' => 'Serayu Lestari',
    'tunaskencana' => 'Tunas Kencana',
    'angkasajaya' => 'Angkasa Jaya',
    'bahanamandiri' => 'Bahana Mandiri',
    'cahayanusantara' => 'Cahaya Nusantara',
    'dwiwarna' => 'Dwi Warna',
    'emassejati' => 'Emas Sejati',
    'fajartimur' => 'Fajar Timur',
    'griyaindah' => 'Griya Indah',
    'harmonijaya' => 'Harmoni Jaya',
    'intanmutiara' => 'Intan Mutiara',
    'jatiwangi' => 'Jati Wangi',
    'kencanaalam' => 'Kencana Alam',
    'lembayungsenja' => 'Lembayung Senja',
    'megakencana' => 'Mega Kencana',
    'nirmalajaya' => 'Nirmala Jaya',
    'pusakamandiri' => 'Pusaka Mandiri',
    'rimbasejati' => 'Rimba Sejati',
    'srikandiabadi' => 'Srikandi Abadi',
    'suryamandala' => 'Surya Mandala',
    'tirtapertiwi' => 'Tirta Pertiwi',
    'wulansari' => 'Wulan Sari',
    'binakarya' => 'Bina Karya',
    'cendanalestari' => 'Cendana Lestari',
    'dewilestari' => 'Dewi Lestari',
    'gemakencana' => 'Gema Kencana',
    'indahkarya' => 'Indah Karya',
    'jayaabadi' => 'Jaya Abadi',
    'kasihbersama' => 'Kasih Bersama',
    'lautanseru' => 'Lautan Seru',
    'lestarijaya' => 'Lestari Jaya',
    'mentariindah' => 'Mentari Indah',
    'mustikaalami' => 'Mustika Alami',
    'nirwanalangit' => 'Nirwana Langit',
    'pertiwiindah' => 'Pertiwi Indah',
    'pratamamandiri' => 'Pratama Mandiri',
    'putrapratama' => 'Putra Pratama',
    'satriajaya' => 'Satria Jaya',
    'senjapertiwi' => 'Senja Pertiwi',
    'serasimandiri' => 'Serasi Mandiri',
    'suryakencana' => 'Surya Kencana',
    'tigawarna' => 'Tiga Warna',
    'trisaktibersama' => 'Trisakti Bersama',
    'wanalestari' => 'Wana Lestari',
    'wijayaabadi' => 'Wijaya Abadi',
    'zamrudsejati' => 'Zamrud Sejati',
    'alampermai' => 'Alam Permai',
    'binasejahtera' => 'Bina Sejahtera',
    'cahayasinar' => 'Cahaya Sinar',
    'dutapertiwi' => 'Duta Pertiwi',
    'gemilangjaya' => 'Gemilang Jaya',
    'harmonialam' => 'Harmoni Alam',
    'kencanaindah' => 'Kencana Indah',
    'surgaabadi' => 'Surga Abadi',
    'cintaabadi' => 'Cinta Abadi',
    'langitlaut' => 'Langit Laut',
    'ombaktenang' => 'Ombak Tenang',
    'bungamekar' => 'Bunga Mekar',
    'gunungtinggi' => 'Gunung Tinggi',
    'anginsejuk' => 'Angin Sejuk',
    'senjasore' => 'Senja Sore',
    'embunpagi' => 'Embun Pagi',
    'hutancemara' => 'Hutan Cemara',
    'lautdalam' => 'Laut Dalam',
    'rindusunyi' => 'Rindu Sunyi',
    'asabaru' => 'Asa Baru',
    'suryaterbenam' => 'Surya Terbenam',
    'awanputih' => 'Awan Putih',
    'batukarang' => 'Batu Karang',
    'pasirputih' => 'Pasir Putih',
    'bintangterang' => 'Bintang Terang',
    'samudraluas' => 'Samudra Luas',
    'dedauanansegar' => 'Dedauanan Segar',
    'jalanpanjang' => 'Jalan Panjang',
    'sinarredup' => 'Sinar Redup',
    'cakrawalabiru' => 'Cakrawala Biru',
    'pelangiwarna' => 'Pelangi Warna',
    'hujanderas' => 'Hujan Deras',
    'kabuttebal' => 'Kabut Tebal',
    'bukitindah' => 'Bukit Indah',
    'pasirhalus' => 'Pasir Halus',
];  
?>

<header class="sotcox-header pt-50 pb-50" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
    <div class="container-fluid sotcox-container__fluid">
        <div class="row">
            <p>{{ $nama_toko = $subdomainToNamaToko[$subdomain] ?? '';}}</p>
            <div class="col-xl-10 col-lg-4 col-sm-6 col-7 align-self-center">
                <div class="sotcox-logo-menu-wrapper">
                    <a href="{{ route('utama.index')}}" class="sotcox-logo">
                        <img src="assets/img/logo/logo1.jpg" alt="LOGO">
                    </a>
                    
                    <div class="sotcox-menu-wrapper">
                        <div class="sotcox-main-menu">
                            <nav id="sotcox-navbar">
                                <ul>
                                    <li><a href="{{ route('utama.index')}}">Home</a></li>
                                    <li><a href="{{ route('about.index')}}">About Us</a></li>
                                    <li><a href="{{ route('service.index')}}">Service</a></li>
                                    <li><a href="{{ route('ketentuan.index')}}">Ketentuan Umum</a></li>
                                    <li><a href="{{ route('faq.index')}}">FAQ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <a href="" class="sotcox-btn">Mitra <span></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-8 col-sm-6 col-5 align-self-center">
                <div class="right-element">
                    <ul class="list-unstyled d-flex align-items-center">
                        <li data-search-trigger>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7072 18.293L14.3651 12.9509C15.6143 11.3411 16.203 9.31564 16.0114 7.287C15.8197 5.25836 14.8621 3.37901 13.3336 2.03158C11.805 0.68414 9.82038 -0.0300859 7.78373 0.0343085C5.74708 0.0987029 3.81152 0.936876 2.37113 2.37819C0.93074 3.81949 0.0937985 5.75558 0.0307004 7.79227C-0.0323977 9.82896 0.683091 11.8131 2.0315 13.3409C3.37991 14.8686 5.25987 15.8249 7.28863 16.0153C9.31739 16.2056 11.3424 15.6156 12.9515 14.3654L18.2932 19.707C18.4818 19.8892 18.7344 19.9899 18.9966 19.9877C19.2588 19.9854 19.5096 19.8802 19.695 19.6948C19.8804 19.5094 19.9856 19.2586 19.9878 18.9964C19.9901 18.7342 19.8893 18.4816 19.7072 18.293ZM3.80777 12.293C2.82612 11.3115 2.21516 10.02 2.07899 8.63855C1.94282 7.2571 2.28987 5.87117 3.06101 4.71691C3.83214 3.56266 4.97965 2.71149 6.308 2.30846C7.63635 1.90542 9.06335 1.97544 10.3459 2.5066C11.6284 3.03775 12.687 3.99717 13.3415 5.22138C13.9959 6.44559 14.2056 7.85884 13.9348 9.22032C13.664 10.5818 12.9296 11.8073 11.8565 12.6879C10.7835 13.5686 9.43832 14.05 8.05017 14.05C6.45918 14.0491 4.93349 13.4173 3.80777 12.293Z" fill="#1B2E59"/>
                                </svg>
                        </li>
                        <li class="sideinfo-trigger" data-sideinfo-trigger>
                            <span></span>
                            <span></span>
                            <span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== HEADER END ======-->