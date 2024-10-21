<x-app-layout>
    <x-slot name="header">
        
    <title>Dashboard Pariwisata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
    <style>
     #mapid { height: 600px; }
    .card.yellow-background {
        background-color: #fff3cd; /* Warna kuning lembut */
        border-color: #ffeeba; /* Border kuning lembut */
    }
    .card.green-background {
        background-color: #d4edda; /* Warna hijau lembut */
        border-color: #c3e6cb; /* Border hijau lembut */
    }
    .card.red-background {
        background-color: #f8d7da; /* Warna merah muda lembut */
        border-color: #f5c6cb; /* Border merah muda lembut */
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    .table-container {
            max-height: 400px; /* Ubah sesuai kebutuhan */
            overflow-y: auto;
            overflow-x: auto;
            border: 1px solid #ddd; /* Menambahkan border agar lebih jelas */
        }
  
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        white-space: nowrap; /* Mencegah teks membungkus, membuat scroll horizontal */
    }
    th {
        background-color: #f2f2f2;
    }
   
    </style>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="container">
        <h1 class="mt-5">Dashboard Pariwisata</h1>

        <?php
            $touristObjects = [
                
                
                    [
                        'name' => 'Kebun Raya',
                        'location' => 'Bogor',
                        'priority' => 'low',
                        'latitude' => -6.597147,
                        'longitude' => 106.799404,
                        'description' => 'Kebun botani yang luas dengan berbagai jenis tumbuhan.'
                    ],
                    [
                        'name' => 'Argowisata Gunung Mas',
                        'location' => 'Bogor',
                        'priority' => 'low',
                        'latitude' => -6.693538,
                        'longitude' => 106.949661,
                        'description' => 'Agrowisata di kaki Gunung Mas dengan pemandangan perkebunan teh.'
                    ],
                    [
                        'name' => 'Cimory Dairy Land (Dairyland Puncak)',
                        'location' => 'Bogor',
                        'priority' => 'low',
                        'latitude' => -6.636120,
                        'longitude' => 106.939820,
                        'description' => 'Wisata edukasi dengan peternakan dan produk olahan susu.'
                    ],
                    [
                        'name' => 'Taman Safari Indonesia',
                        'location' => 'Bogor',
                        'priority' => 'low',
                        'latitude' => -6.714793,
                        'longitude' => 106.949655,
                        'description' => 'Taman safari dengan berbagai satwa dari seluruh dunia.'
                    ],
                    [
                        'name' => 'Alamanda Indonesia/Bogor Rafting',
                        'location' => 'Bogor',
                        'priority' => 'medium',
                        'latitude' => -6.628576,
                        'longitude' => 106.862460,
                        'description' => 'Tempat rafting yang menantang di sungai Ciliwung.'
                    ],
                    [
                        'name' => 'Camp Hulu Cai',
                        'location' => 'Bogor',
                        'priority' => 'medium',
                        'latitude' => -6.688798,
                        'longitude' => 106.896514,
                        'description' => 'Tempat camping dengan fasilitas outbound.'
                    ],
                    [
                        'name' => 'Cibalung Happy Land',
                        'location' => 'Bogor',
                        'priority' => 'medium',
                        'latitude' => -6.655187,
                        'longitude' => 106.810406,
                        'description' => 'Tempat wisata keluarga dengan wahana air dan outbound.'
                    ],
                    [
                        'name' => 'Cimory Riverside (Dairy Land Riverside)',
                        'location' => 'Bogor',
                        'priority' => 'medium',
                        'latitude' => -6.631865,
                        'longitude' => 106.956191,
                        'description' => 'Wisata kuliner dan edukasi di tepi sungai.'
                    ],
                    [
                        'name' => 'Inagro',
                        'location' => 'Bogor',
                        'priority' => 'medium',
                        'latitude' => -6.560167,
                        'longitude' => 106.843018,
                        'description' => 'Tempat wisata edukasi pertanian dan agrowisata.'
                    ],
                
                
                
                        [
                            'name' => 'Jungleland',
                            'location' => 'Bogor',
                            'priority' => 'medium',
                            'latitude' => -6.546301,
                            'longitude' => 106.861258,
                            'description' => 'Taman bermain dengan berbagai wahana seru untuk keluarga.'
                        ],
                        [
                            'name' => 'Nicole\'s River Park',
                            'location' => 'Bogor',
                            'priority' => 'medium',
                            'latitude' => -6.562411,
                            'longitude' => 106.863056,
                            'description' => 'Taman rekreasi dengan aktivitas di sepanjang sungai.'
                        ],
                        [
                            'name' => 'Taman Wisata Matahari',
                            'location' => 'Bogor',
                            'priority' => 'medium',
                            'latitude' => -6.634177,
                            'longitude' => 106.948656,
                            'description' => 'Tempat wisata keluarga dengan berbagai permainan dan wahana.'
                        ],
                        [
                            'name' => 'The Ciliwung Tea Estate',
                            'location' => 'Bogor',
                            'priority' => 'medium',
                            'latitude' => -6.662916,
                            'longitude' => 106.936678,
                            'description' => 'Kebun teh dengan pemandangan indah dan suasana tenang.'
                        ],
                        [
                            'name' => 'The Jungle',
                            'location' => 'Bogor',
                            'priority' => 'medium',
                            'latitude' => -6.604894,
                            'longitude' => 106.822271,
                            'description' => 'Tempat rekreasi dengan berbagai fasilitas hiburan dan permainan.'
                        ],
                        [
                            'name' => 'Curug Kembar Batu Layang',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.647295,
                            'longitude' => 106.826096,
                            'description' => 'Air terjun kembar dengan pemandangan menakjubkan dan trek hiking.'
                        ],
                        [
                            'name' => 'Buper Citamiang',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.711113,
                            'longitude' => 106.889306,
                            'description' => 'Tempat camping dan berkemah dengan fasilitas yang lengkap.'
                        ],
                        [
                            'name' => 'Curug Cipamingkis',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.678845,
                            'longitude' => 106.917420,
                            'description' => 'Air terjun dengan akses yang relatif mudah dan pemandangan yang menawan.'
                        ],
                        [
                            'name' => 'Curug Ciherang',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.668301,
                            'longitude' => 106.897469,
                            'description' => 'Air terjun yang dikelilingi oleh hutan tropis dengan suasana damai.'
                        ],
                        [
                            'name' => 'Curug Cibeureum',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.649702,
                            'longitude' => 106.801822,
                            'description' => 'Air terjun dengan tiga tingkatan yang menakjubkan.'
                        ],
                        [
                            'name' => 'Curug Cidulang',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.707926,
                            'longitude' => 106.912434,
                            'description' => 'Air terjun dengan air yang jernih dan trek yang menantang.'
                        ],
                  [
                            'name' => 'Curug Barong Leuwi Hejo',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.650756,
                            'longitude' => 106.868055,
                            'description' => 'Air terjun dengan suasana alami dan pemandangan yang menakjubkan.'
                  ],
                  
                    [
                        'name' => 'Track Sepeda Puncak Kondang',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.631741,
                        'longitude' => 106.897563,
                        'description' => 'Rute sepeda dengan pemandangan alam yang menakjubkan dan tantangan yang seru.'
                    ],
                    [
                        'name' => 'Curug Putri Kencana',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.647043,
                        'longitude' => 106.830943,
                        'description' => 'Air terjun dengan suasana yang sejuk dan pemandangan indah.'
                    ],
                    [
                        'name' => 'WA Baru Jeruk',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.616665,
                        'longitude' => 106.823509,
                        'description' => 'Tempat rekreasi dengan fasilitas yang lengkap dan pemandangan alami.'
                    ],
                    [
                        'name' => 'WA Gunung Kencana',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.644228,
                        'longitude' => 106.853549,
                        'description' => 'Area wisata alam dengan berbagai aktivitas outdoor dan pemandangan indah.'
                    ],
                    [
                        'name' => 'Puncak Langit',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.569292,
                        'longitude' => 106.825292,
                        'description' => 'Tempat dengan panorama langit dan alam yang menakjubkan.'
                    ],
                    [
                        'name' => 'Leuwi Hejo Cibadak',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.621946,
                        'longitude' => 106.834232,
                        'description' => 'Tempat wisata alam dengan air terjun dan suasana yang tenang.'
                    ],
                    [
                        'name' => 'Curug Gordeng',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.606572,
                        'longitude' => 106.872924,
                        'description' => 'Air terjun dengan aliran air yang deras dan pemandangan yang menawan.'
                    ],
                    [
                        'name' => 'Buper Cisarua',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.704942,
                        'longitude' => 106.958470,
                        'description' => 'Tempat camping dan rekreasi dengan fasilitas yang memadai.'
                    ],
                    [
                        'name' => 'Goa Garunggang',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.641453,
                        'longitude' => 106.824865,
                        'description' => 'Gua dengan formasi stalaktit dan stalagmit yang menarik.'
                    ],
                    [
                        'name' => 'Curug Cibingbin',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.634546,
                        'longitude' => 106.852476,
                        'description' => 'Air terjun dengan pemandangan yang menyejukkan dan akses yang mudah.'
                    ],
                    [
                        'name' => 'Jungle Camp',
                        'location' => 'Bogor',
                        'priority' => 'high',
                        'latitude' => -6.583603,
                        'longitude' => 106.818174,
                        'description' => 'Tempat camping dengan suasana hutan dan berbagai aktivitas outdoor.'
                    ],
                    
                        [
                            'name' => 'Bukit Pinus Paseban',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.580374,
                            'longitude' => 106.836283,
                            'description' => 'Bukit dengan hutan pinus yang menawarkan pemandangan yang menenangkan.'
                        ],
                        [
                            'name' => 'Cisuren',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.609423,
                            'longitude' => 106.873821,
                            'description' => 'Tempat wisata alam dengan suasana tenang dan pemandangan yang indah.'
                        ],
                        [
                            'name' => 'Gunung Luur',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.634477,
                            'longitude' => 106.849904,
                            'description' => 'Gunung dengan trek hiking yang menantang dan pemandangan yang menawan.'
                        ],
                        [
                            'name' => 'Curug Mariuk',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.610137,
                            'longitude' => 106.888341,
                            'description' => 'Air terjun yang menawarkan suasana yang sejuk dan pemandangan alam yang indah.'
                        ],
                        [
                            'name' => 'Cimandala',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.629774,
                            'longitude' => 106.832693,
                            'description' => 'Area dengan pemandangan alam yang asri dan aktivitas outdoor yang seru.'
                        ],
                        [
                            'name' => 'Citra Alam Paseban',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.567344,
                            'longitude' => 106.835832,
                            'description' => 'Tempat wisata alam dengan pemandangan yang menenangkan dan fasilitas rekreasi.'
                        ],
                        [
                            'name' => 'Hutan Hujan',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.566805,
                            'longitude' => 106.849245,
                            'description' => 'Hutan hujan dengan flora dan fauna yang kaya serta pemandangan yang menyejukkan.'
                        ],
                        [
                            'name' => 'Pondok Walanda',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.609908,
                            'longitude' => 106.848741,
                            'description' => 'Tempat rekreasi dengan fasilitas lengkap dan suasana alam yang nyaman.'
                        ],
                        [
                            'name' => 'Gunung Ciung Endah',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.609445,
                            'longitude' => 106.825919,
                            'description' => 'Gunung dengan pemandangan yang menakjubkan dan rute hiking yang menantang.'
                        ],
                        [
                            'name' => 'Bukit Bidadari',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.630211,
                            'longitude' => 106.836568,
                            'description' => 'Bukit dengan pemandangan alam yang indah dan tempat ideal untuk bersantai.'
                        ],
                        [
                            'name' => 'Penangkaran Rusa',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.608732,
                            'longitude' => 106.836235,
                            'description' => 'Tempat penangkaran rusa dengan pengalaman interaktif dan edukatif.'
                        ],
                        [
                            'name' => 'Goa Lalay',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.606048,
                            'longitude' => 106.825137,
                            'description' => 'Gua dengan formasi stalaktit dan stalagmit yang menarik untuk dijelajahi.'
                        ],
                        [
                            'name' => 'Panorama Pabangbon',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.633012,
                            'longitude' => 106.835862,
                            'description' => 'Tempat dengan pemandangan panoramik yang menakjubkan.'
                        ],
                        [
                            'name' => 'Gunung Cibodas Cibadak',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.619148,
                            'longitude' => 106.859298,
                            'description' => 'Gunung dengan trek pendakian yang menantang dan pemandangan yang spektakuler.'
                        ],
                        [
                            'name' => 'Bukit Bentang Land',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.607536,
                            'longitude' => 106.832357,
                            'description' => 'Tempat dengan pemandangan bukit yang indah dan suasana yang tenang.'
                        ],
                        [
                            'name' => 'Seureuh Hejo',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.637128,
                            'longitude' => 106.842711,
                            'description' => 'Tempat wisata dengan pemandangan alam yang hijau dan sejuk.'
                        ],
                        [
                            'name' => 'WA Gunung Dago',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.598494,
                            'longitude' => 106.811972,
                            'description' => 'Tempat wisata alam dengan pemandangan gunung dan fasilitas rekreasi.'
                        ],
                        [
                            'name' => 'Telaga Saat',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.623993,
                            'longitude' => 106.839579,
                            'description' => 'Danau yang menawarkan pemandangan yang menenangkan dan berbagai aktivitas air.'
                        ],
                        [
                            'name' => 'Villa Khayangan Bogor',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.580979,
                            'longitude' => 106.849875,
                            'description' => 'Villa dengan fasilitas lengkap dan pemandangan alam yang menenangkan.'
                        ],
                        [
                            'name' => 'Wana Wisata Curug Cilember',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.602474,
                            'longitude' => 106.832686,
                            'description' => 'Tempat wisata alam dengan air terjun dan suasana yang segar.'
                        ],
                        [
                            'name' => 'Agrowisata Villa Bukit Hambalang',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.605715,
                            'longitude' => 106.826826,
                            'description' => 'Agrowisata dengan pemandangan bukit dan aktivitas wisata yang menyenangkan.'
                        ],
                        [
                            'name' => 'Agrowisata Kopi Rawa Gede',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.603410,
                            'longitude' => 106.822765,
                            'description' => 'Tempat agrowisata dengan kebun kopi dan pemandangan yang mempesona.'
                        ],
                        [
                            'name' => 'Blok Loji',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.612324,
                            'longitude' => 106.837915,
                            'description' => 'Tempat wisata dengan suasana yang tenang dan pemandangan alam yang indah.'
                        ],
                        [
                            'name' => 'Blok Sukamantri',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.609661,
                            'longitude' => 106.823556,
                            'description' => 'Area dengan suasana yang sejuk dan pemandangan alam yang menyegarkan.'
                        ],
                        [
                            'name' => 'Cakrawala Nuansa Nirwana (KWT CNN)',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.612822,
                            'longitude' => 106.840572,
                            'description' => 'Tempat dengan pemandangan luas dan suasana yang menenangkan.'
                        ],
                        [
                            'name' => 'Ciburial Sport & Tourism (Mata Air)',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.609838,
                            'longitude' => 106.837563,
                            'description' => 'Tempat wisata dengan berbagai aktivitas olahraga dan rekreasi.'
                        ],
                        [
                            'name' => 'Cigwa (Cisarua Green World Adventure)',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.597777,
                            'longitude' => 106.846204,
                            'description' => 'Tempat dengan berbagai kegiatan outdoor dan pemandangan yang indah.'
                        ],
                        [
                            'name' => 'Curug Arca',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.613489,
                            'longitude' => 106.832592,
                            'description' => 'Air terjun dengan pemandangan alam yang indah dan suasana yang menenangkan.'
                        ],
                        [
                            'name' => 'Curug Damar Langit',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.624128,
                            'longitude' => 106.834874,
                            'description' => 'Air terjun dengan aliran air yang deras dan pemandangan yang menakjubkan.'
                        ],
                        [
                            'name' => 'Curug Kembar Batu Layang',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.647295,
                            'longitude' => 106.826096,
                            'description' => 'Air terjun kembar yang menawarkan pemandangan yang spektakuler.'
                        ],
                        [
                            'name' => 'Curug Kondang',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.638205,
                            'longitude' => 106.832940,
                            'description' => 'Air terjun dengan suasana yang segar dan pemandangan yang indah.'
                        ],
                        [
                            'name' => 'Curug Panjang',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.625895,
                            'longitude' => 106.833481,
                            'description' => 'Air terjun dengan pemandangan yang menyejukkan dan akses yang mudah.'
                        ],
                        [
                            'name' => 'Dusun Giok',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.619221,
                            'longitude' => 106.848077,
                            'description' => 'Tempat dengan suasana desa yang tenang dan pemandangan alam yang menakjubkan.'
                        ],
                        [
                            'name' => 'Goa Gudawang',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.616445,
                            'longitude' => 106.838019,
                            'description' => 'Gua dengan formasi batu yang unik dan suasana yang misterius.'
                        ],
                        [
                            'name' => 'Green Canyon Cariu Bogor',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.645807,
                            'longitude' => 106.932407,
                            'description' => 'Tempat wisata alam dengan keindahan alam yang spektakuler seperti Green Canyon.'
                        ],
                        [
                            'name' => 'Kampung Wisata Cinangneng',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.596081,
                            'longitude' => 106.830126,
                            'description' => 'Kampung wisata dengan suasana tradisional dan pemandangan alam yang indah.'
                        ],
                        [
                            'name' => 'Katoomba Green Park',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.624118,
                            'longitude' => 106.831973,
                            'description' => 'Taman dengan pemandangan hijau yang luas dan fasilitas rekreasi yang menyenangkan.'
                        ],
                        [
                            'name' => 'Legok Jamboe',
                            'location' => 'Bogor',
                            'priority' => 'high',
                            'latitude' => -6.606742,
                            'longitude' => 106.834148,
                            'description' => 'Tempat wisata dengan pemandangan alami yang menenangkan dan aktivitas luar ruangan.'
                        ],
                        
                            [
                                'name' => 'Melrimba Garden',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.617105,
                                'longitude' => 106.836547,
                                'description' => 'Taman dengan berbagai jenis tanaman dan pemandangan yang asri.'
                            ],
                            [
                                'name' => 'Sapadia Outbound',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.611154,
                                'longitude' => 106.827631,
                                'description' => 'Tempat outbound dengan berbagai kegiatan outdoor dan fasilitas lengkap.'
                            ],
                            [
                                'name' => 'Sentul International Circuit',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.583472,
                                'longitude' => 106.840224,
                                'description' => 'Sirkuit internasional untuk balap mobil dan motor dengan fasilitas modern.'
                            ],
                            [
                                'name' => 'Taman Buah Mekarsari',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.587638,
                                'longitude' => 106.830429,
                                'description' => 'Taman buah dengan berbagai jenis tanaman buah dan aktivitas edukatif.'
                            ],
                            [
                                'name' => 'Taman Wisata Alam Gunung Pancar',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.568758,
                                'longitude' => 106.832528,
                                'description' => 'Tempat wisata alam dengan trek hiking dan pemandangan pegunungan yang indah.'
                            ],
                            [
                                'name' => 'Taman Wisata Wanagriya',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.611734,
                                'longitude' => 106.829295,
                                'description' => 'Taman wisata dengan berbagai fasilitas rekreasi dan pemandangan alam.'
                            ],
                            [
                                'name' => 'Telaga Warna Puncak',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.684618,
                                'longitude' => 106.940701,
                                'description' => 'Danau dengan warna air yang menakjubkan dan pemandangan sekitar yang indah.'
                            ],
                            [
                                'name' => 'The Farm Pancawati',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.560564,
                                'longitude' => 106.818561,
                                'description' => 'Tempat wisata dengan kegiatan pertanian dan pemandangan alam yang menarik.'
                            ],
                            [
                                'name' => 'The Ranch',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.597733,
                                'longitude' => 106.826257,
                                'description' => 'Tempat wisata dengan konsep peternakan dan berbagai aktivitas luar ruangan.'
                            ],
                            [
                                'name' => 'Tirta Alam Gunung Leutil',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.606581,
                                'longitude' => 106.840391,
                                'description' => 'Tempat wisata dengan mata air dan pemandangan alam yang sejuk.'
                            ],
                            [
                                'name' => 'Toyo Lembah Hijau',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.594520,
                                'longitude' => 106.817415,
                                'description' => 'Tempat wisata dengan suasana lembah hijau dan fasilitas rekreasi yang menarik.'
                            ],
                            [
                                'name' => 'Treetop Zipline Adventure',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.598228,
                                'longitude' => 106.823073,
                                'description' => 'Petualangan zipline dengan pemandangan hutan dan pengalaman yang menantang.'
                            ],
                            [
                                'name' => 'Warso Farm',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.629083,
                                'longitude' => 106.826585,
                                'description' => 'Tempat wisata dengan kebun dan aktivitas pertanian yang edukatif.'
                            ],
                            [
                                'name' => 'Water Kingdom',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.590634,
                                'longitude' => 106.826475,
                                'description' => 'Taman air dengan berbagai wahana dan fasilitas untuk bersenang-senang.'
                            ],
                            [
                                'name' => 'Wisata Gunung Salak Endah',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.578481,
                                'longitude' => 106.858295,
                                'description' => 'Tempat wisata dengan pemandangan gunung dan fasilitas outdoor yang menarik.'
                            ],
                            [
                                'name' => 'TNGPP',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.606893,
                                'longitude' => 106.849382,
                                'description' => 'Tempat dengan berbagai aktivitas outdoor dan pemandangan alam yang menenangkan.'
                            ],
                            [
                                'name' => 'TNGHS',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.608163,
                                'longitude' => 106.826760,
                                'description' => 'Tempat wisata dengan berbagai fasilitas rekreasi dan pemandangan alam.'
                            ],
                            [
                                'name' => 'Jbound',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.599038,
                                'longitude' => 106.826093,
                                'description' => 'Tempat dengan berbagai kegiatan rekreasi dan suasana yang menyegarkan.'
                            ],
                            [
                                'name' => 'Devoyage',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.599487,
                                'longitude' => 106.832064,
                                'description' => 'Tempat wisata dengan berbagai atraksi dan pemandangan yang menakjubkan.'
                            ],
                            [
                                'name' => 'Funpark',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.605586,
                                'longitude' => 106.825875,
                                'description' => 'Taman hiburan dengan berbagai wahana dan aktivitas menyenangkan.'
                            ],
                            [
                                'name' => 'Kolren Yasmin',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.607497,
                                'longitude' => 106.827503,
                                'description' => 'Tempat dengan berbagai fasilitas rekreasi dan pemandangan yang menenangkan.'
                            ],
                            [
                                'name' => 'Marcopolo',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.607793,
                                'longitude' => 106.828764,
                                'description' => 'Tempat wisata dengan berbagai atraksi dan fasilitas rekreasi.'
                            ],
                            [
                                'name' => 'Aewo Mulyaharja',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.607609,
                                'longitude' => 106.828980,
                                'description' => 'Tempat wisata dengan suasana yang nyaman dan fasilitas rekreasi yang lengkap.'
                            ],
                            [
                                'name' => 'SKI Tajur',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.610045,
                                'longitude' => 106.829547,
                                'description' => 'Tempat rekreasi dengan berbagai aktivitas outdoor dan pemandangan alam yang menakjubkan.'
                            ],
                            [
                                'name' => 'Kuntum Farmfield',
                                'location' => 'Bogor',
                                'priority' => 'high',
                                'latitude' => -6.610442,
                                'longitude' => 106.828377,
                                'description' => 'Kebun pertanian dengan berbagai aktivitas edukatif dan pemandangan yang menarik.'
                            ]
                        
                        
                    
                    
                
                    
                    
                // Tambahkan objek wisata lainnya...
            ];

            $lowPriorityCount = count(array_filter($touristObjects, fn($object) => $object['priority'] === 'low'));
            $mediumPriorityCount = count(array_filter($touristObjects, fn($object) => $object['priority'] === 'medium'));
            $highPriorityCount = count(array_filter($touristObjects, fn($object) => $object['priority'] === 'high'));
            $total = count($touristObjects);

            $lowPriorityPercentage = $total > 0 ? ($lowPriorityCount / $total) * 100 : 0;
            $mediumPriorityPercentage = $total > 0 ? ($mediumPriorityCount / $total) * 100 : 0;
            $highPriorityPercentage = $total > 0 ? ($highPriorityCount / $total) * 100 : 0;
        ?>

        <div class="row mt-3">
            <div class="col-md-4">
            <div class="card green-background">
            <div class="card-body">
                <h5 class="card-title">Prioritas Rendah</h5>
                <p class="card-text">{{ $lowPriorityCount }} Objek Wisata</p>
                <p class="card-text">{{ $lowPriorityPercentage }}%</p>
            </div>
             </div>
            </div>
            
            <div class="col-md-4">
            <div class="card yellow-background">
                <div class="card-body">
                    <h5 class="card-title">Prioritas Sedang</h5>
                    <p class="card-text">{{ $mediumPriorityCount }} Objek Wisata</p>
                    <p class="card-text">{{ $mediumPriorityPercentage }}%</p>
                </div>
            </div>

            </div>
            <div class="col-md-4">
            <div class="card red-background">
                <div class="card-body">
                    <h5 class="card-title">Prioritas Tinggi</h5>
                    <p class="card-text">{{ $highPriorityCount }} Objek Wisata</p>
                    <p class="card-text">{{ $highPriorityPercentage }}%</p>
                </div>
            </div>

            </div>
        </div>

        <div class="row mt-5">
        <div class="col-md-6">
        <div class="table-container">
        
    <table id="data-table" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Objek Wisata</th>
                <th>Klaster</th>
                </tr>
        </thead>
        <tbody id="data-container">
             <!-- Data will be inserted here -->
         </tbody>
    </table>
     
    <script>
        // Function to fetch JSON data
            async function fetchData() {
            try {
                const response = await fetch('http://127.0.0.1:5000/cluster_data');
                if (!response.ok) {
                    throw new Error('Network response was not ok: ' + response.statusText);
                    }
                    const data = await response.json();
                    console.log('Data successfully fetched:', data); // Logging data
                    displayData(data);
                    } catch (error) {
                    console.error('There was a problem with the fetch operation:', error);
                    document.getElementById('data-container').innerText = 'Failed to load data: ' + error.message;
                    }
                        }

                        // Function to display JSON data in HTML table
                        function displayData(data) {
                            const container = document.getElementById('data-container');
                            container.innerHTML = ''; // Clear existing content

                            // Assuming data.Data contains the array of cluster data
                            data.Data.forEach(row => {
                                const tr = document.createElement('tr');
                                tr.innerHTML = `
                                    <td>${row.No}</td>
                                    <td>${row.Nama_Objek_wisata}</td>
                                    <td>${row.Cluster}</td>
                                `;
                                container.appendChild(tr);
                            });
                       // Display only Cluster 1 details
                            const cluster1Details = document.getElementById('cluster-1-details');
                            cluster1Details.innerHTML = ''; // Clear existing content

                            // Filter and display data for Cluster 1 only
                            const cluster1Data = data.Data.filter(item => item.Cluster === 1); // Filter for Cluster 1

                            if (cluster1Data.length > 0) {
                                const cluster1Table = document.createElement('table');
                                cluster1Table.classList.add('table', 'table-bordered', 'mb-4');
                                cluster1Table.innerHTML = `
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Objek Wisata</th>
                                            <th>Jumlah Kunjungan (Orang)</th>
                                            <th>Fasilitas</th>
                                            <th>Aksesbilitas Kendaraan Umum</th>
                                            <th>Harga Tiket Masuk (Rupiah)</th>
                                            <th>Luas Wilayah (Hektar)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ${cluster1Data.map(item => {
                                            // Check if Fasilitas is 2 and replace it with 'Cukup'
                                            const fasilitasValue = item.Fasilitas === 2 ? 'Cukup' : item.Fasilitas;
                                            
                                            // Check if Aksesbilitas_Kendaraan_umum is 2 and replace it with 'Ada'
                                            const aksesbilitasValue = item.Akesbilitas_Kendaraan_umum === 2 ? 'Ada' : item.Akesbilitas_Kendaraan_umum;
                                            
                                            return `
                                                <tr>
                                                    <td>${item.No}</td>
                                                    <td>${item.Nama_Objek_wisata}</td>
                                                    <td>${item['Jumlah_kunjungan(orang)']}</td>
                                                    <td>${fasilitasValue}</td>
                                                    <td>${aksesbilitasValue}</td>
                                                    <td>${item['Harga_Tiket _Masuk(Rupiah)']}</td>
                                                    <td>${item['Luas_Wilayah(Hektar)']}</td>
                                                </tr>
                                            `;
                                        }).join('')}
                                    </tbody>
                                `;

                                // Append the table to the cluster 1 details container
                                cluster1Details.appendChild(cluster1Table);
                            } else {
                                cluster1Details.innerHTML = '<p>Tidak ada data untuk Cluster 1.</p>';
                            }
// Display only Cluster 2 details
const cluster2Details = document.getElementById('cluster-2-details');
cluster2Details.innerHTML = ''; // Clear existing content

// Filter and display data for Cluster 2 only
const cluster2Data = data.Data.filter(item => item.Cluster === 2); // Filter for Cluster 2

if (cluster2Data.length > 0) {
    const cluster2Table = document.createElement('table');
    cluster2Table.classList.add('table', 'table-bordered', 'mb-4');
    cluster2Table.innerHTML = `
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Objek Wisata</th>
                <th>Jumlah Kunjungan (Orang)</th>
                <th>Fasilitas</th>
                <th>Aksesbilitas Kendaraan Umum</th>
                <th>Harga Tiket Masuk (Rupiah)</th>
                <th>Luas Wilayah (Hektar)</th>
            </tr>
        </thead>
        <tbody>
            ${cluster2Data.map(item => {
                // Check if Fasilitas is 2 and replace it with 'Cukup'
                // Check if Fasilitas is 3 and replace it with 'Baik'
                const fasilitasValue = item.Fasilitas === 2 ? 'Cukup' :
                                       item.Fasilitas === 3 ? 'Baik' : item.Fasilitas;
                
                // Check if Aksesbilitas_Kendaraan_umum is 2 and replace it with 'Ada'
                const aksesbilitasValue = item.Akesbilitas_Kendaraan_umum === 2 ? 'Ada' : item.Akesbilitas_Kendaraan_umum;
                
                return `
                    <tr>
                        <td>${item.No}</td>
                        <td>${item.Nama_Objek_wisata}</td>
                        <td>${item['Jumlah_kunjungan(orang)']}</td>
                        <td>${fasilitasValue}</td>
                        <td>${aksesbilitasValue}</td>
                        <td>${item['Harga_Tiket _Masuk(Rupiah)']}</td>
                        <td>${item['Luas_Wilayah(Hektar)']}</td>
                    </tr>
                `;
            }).join('')}
        </tbody>
    `;

    // Append the table to the cluster 2 details container
    cluster2Details.appendChild(cluster2Table);
} else {
    cluster2Details.innerHTML = '<p>Tidak ada data untuk Cluster 2.</p>';
}

// Display only Cluster 3 details
const cluster3Details = document.getElementById('cluster-3-details');
cluster3Details.innerHTML = ''; // Clear existing content

// Filter and display data for Cluster 3 only
const cluster3Data = data.Data.filter(item => item.Cluster === 3); // Filter for Cluster 3

if (cluster3Data.length > 0) {
    const cluster3Table = document.createElement('table');
    cluster3Table.classList.add('table', 'table-bordered', 'mb-4');
    cluster3Table.innerHTML = `
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Objek Wisata</th>
                <th>Jumlah Kunjungan (Orang)</th>
                <th>Fasilitas</th>
                <th>Aksesbilitas Kendaraan Umum</th>
                <th>Harga Tiket Masuk (Rupiah)</th>
                <th>Luas Wilayah (Hektar)</th>
            </tr>
        </thead>
        <tbody>
            ${cluster3Data.map(item => {
                // Check if Fasilitas is 1 and replace it with 'Minim'
                // Check if Fasilitas is 2 and replace it with 'Cukup'
                // Check if Fasilitas is 3 and replace it with 'Baik'
                const fasilitasValue = item.Fasilitas === 1 ? 'Minim' :
                                       item.Fasilitas === 2 ? 'Cukup' :
                                       item.Fasilitas === 3 ? 'Baik' : item.Fasilitas;
                
                // Check if Aksesbilitas_Kendaraan_umum is 1 and replace it with 'Tidak Ada'
                // Check if Aksesbilitas_Kendaraan_umum is 2 and replace it with 'Ada'
                const aksesbilitasValue = item.Akesbilitas_Kendaraan_umum === 1 ? 'Tidak Ada' :
                                           item.Akesbilitas_Kendaraan_umum === 2 ? 'Ada' : item.Akesbilitas_Kendaraan_umum;
                
                return `
                    <tr>
                        <td>${item.No}</td>
                        <td>${item.Nama_Objek_wisata}</td>
                        <td>${item['Jumlah_kunjungan(orang)']}</td>
                        <td>${fasilitasValue}</td>
                        <td>${aksesbilitasValue}</td>
                        <td>${item['Harga_Tiket _Masuk(Rupiah)']}</td>
                        <td>${item['Luas_Wilayah(Hektar)']}</td>
                    </tr>
                `;
            }).join('')}
        </tbody>
    `;

    // Append the table to the cluster 3 details container
    cluster3Details.appendChild(cluster3Table);
} else {
    cluster3Details.innerHTML = '<p>Tidak ada data untuk Cluster 3.</p>';
}



                        }

                        // Call fetchData when the page loads
                        window.onload = fetchData;
    </script>

        </div>
    
</div>


            <div class="col-md-6">
                <div id="mapid" style="height: 400px;"></div>
            </div>



            </div>
            
            <div class="row mt-3">
                <div class="col-md-12">
                <div class="card">              
                    <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                        <h3>Objek Wisata Prioritas Rendah </h3>
                        <table class="table table-bordered" id="cluster-1-details"></table> <!-- Container for the data -->
                    </div>
                </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                <div class="card">              
                    <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                        <h3>Objek Wisata Prioritas Sedang </h3>
                        <table class="table table-bordered" id="cluster-2-details"></table> <!-- Container for the data -->
                    </div>
                </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                <div class="card">              
                    <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                        <h3>Objek Wisata Prioritas Tinggi </h3>
                        <table class="table table-bordered" id="cluster-3-details"></table> <!-- Container for the data -->
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>

   
     

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('mapid').setView([-6.5944, 106.7969], 13); // Koordinat Kota Bogor


    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Data objek wisata dan prioritas
    var wisata = [
    
        { "nama": "Kebun Raya", "koordinat": [-6.597147, 106.799404], "prioritas": 3 },
            { "nama": "Argowisata Gunung Mas", "koordinat": [-6.693538, 106.949661], "prioritas": 3 },
            { "nama": "Cimory Dairy Land (Dairyland Puncak)", "koordinat": [-6.636120, 106.939820], "prioritas": 3 },
            { "nama": "Taman Safari Indonesia", "koordinat": [-6.714793, 106.949655], "prioritas": 3 },
            { "nama": "Alamanda Indonesia/Bogor Rafting", "koordinat": [-6.628576, 106.862460], "prioritas": 2 },
            { "nama": "Camp Hulu Cai", "koordinat": [-6.688798, 106.896514], "prioritas": 2 },
            { "nama": "Cibalung Happy Land", "koordinat": [-6.655187, 106.810406], "prioritas": 2 },
            { "nama": "Cimory Riverside (Dairy Land Riverside)", "koordinat": [-6.631865, 106.956191], "prioritas": 2 },
            { "nama": "Inagro", "koordinat": [-6.560167, 106.843018], "prioritas": 2 },
            { "nama": "Jungleland", "koordinat": [-6.546301, 106.861258], "prioritas": 2 },
            { "nama": "Nicole's River Park", "koordinat": [-6.562411, 106.863056], "prioritas": 2 },
            { "nama": "Taman Wisata Matahari", "koordinat": [-6.634177, 106.948656], "prioritas": 2 },
            { "nama": "The Ciliwung Tea Estate", "koordinat": [-6.662916, 106.936678], "prioritas": 2 },
            { "nama": "The Jungle", "koordinat": [-6.604894, 106.822271], "prioritas": 2 },
            { "nama": "Curug Kembar Batu Layang", "koordinat": [-6.647295, 106.826096], "prioritas": 1 },
            { "nama": "Buper Citamiang", "koordinat": [-6.711113, 106.889306], "prioritas": 1 },
            { "nama": "Curug Cipamingkis", "koordinat": [-6.678845, 106.917420], "prioritas": 1 },
            { "nama": "Curug Ciherang", "koordinat": [-6.668301, 106.897469], "prioritas": 1 },
            { "nama": "Curug Cibeureum", "koordinat": [-6.649702, 106.801822], "prioritas": 1 },
            { "nama": "Curug Cidulang", "koordinat": [-6.707926, 106.912434], "prioritas": 1 },
            { "nama": "Curug Barong Leuwi Hejo", "koordinat": [-6.650756, 106.868055], "prioritas": 1 },
            { "nama": "Track Sepeda Puncak Kondang", "koordinat": [-6.631741, 106.897563], "prioritas": 1 },
            { "nama": "Curug Putri Kencana", "koordinat": [-6.647043, 106.830943], "prioritas": 1 },
            { "nama": "WA Baru Jeruk", "koordinat": [-6.616665, 106.823509], "prioritas": 1 },
            { "nama": "WA Gunung Kencana", "koordinat": [-6.644228, 106.853549], "prioritas": 1 },
            { "nama": "Puncak Langit", "koordinat": [-6.569292, 106.825292], "prioritas": 1 },
            { "nama": "Leuwi Hejo Cibadak", "koordinat": [-6.621946, 106.834232], "prioritas": 1 },
            { "nama": "Curug Gordeng", "koordinat": [-6.606572, 106.872924], "prioritas": 1 },
            { "nama": "Buper Cisarua", "koordinat": [-6.704942, 106.958470], "prioritas": 1 },
            { "nama": "Goa Garunggang", "koordinat": [-6.641453, 106.824865], "prioritas": 1 },
            { "nama": "Curug Cibingbin", "koordinat": [-6.634546, 106.852476], "prioritas": 1 },
            { "nama": "Jungle Camp", "koordinat": [-6.583603, 106.818174], "prioritas": 1 },
            { "nama": "Bukit Pinus Paseban", "koordinat": [-6.580374, 106.836283], "prioritas": 1 },
            { "nama": "Cisuren", "koordinat": [-6.609423, 106.873821], "prioritas": 1 },
            { "nama": "Gunung Luur", "koordinat": [-6.634477, 106.849904], "prioritas": 1 },
            { "nama": "Curug Mariuk", "koordinat": [-6.610137, 106.888341], "prioritas": 1 },
            { "nama": "Cimandala", "koordinat": [-6.629774, 106.832693], "prioritas": 1 },
            { "nama": "Citra Alam Paseban", "koordinat": [-6.567344, 106.835832], "prioritas": 1 },
            { "nama": "Hutan Hujan", "koordinat": [-6.566805, 106.849245], "prioritas": 1 },
            { "nama": "Pondok Walanda", "koordinat": [-6.609908, 106.848741], "prioritas": 1 },
            { "nama": "Gunung Ciung Endah", "koordinat": [-6.609445, 106.825919], "prioritas": 1 },
            { "nama": "Bukit Bidadari", "koordinat": [-6.630211, 106.836568], "prioritas": 1 },
            { "nama": "Penangkaran Rusa", "koordinat": [-6.608732, 106.836235], "prioritas": 1 },
            { "nama": "Goa Lalay", "koordinat": [-6.606048, 106.825137], "prioritas": 1 },
            { "nama": "Panorama Pabangbon", "koordinat": [-6.633012, 106.835862], "prioritas": 1 },
            { "nama": "Gunung Cibodas Cibadak", "koordinat": [-6.619148, 106.859298], "prioritas": 1 },
            { "nama": "Bukit Bentang Land", "koordinat": [-6.607536, 106.832357], "prioritas": 1 },
            { "nama": "Seureuh Hejo", "koordinat": [-6.637128, 106.842711], "prioritas": 1 },
            { "nama": "WA Gunung Dago", "koordinat": [-6.598494, 106.811972], "prioritas": 1 },
            { "nama": "Telaga Saat", "koordinat": [-6.623993, 106.839579], "prioritas": 1 },
            { "nama": "Villa Khayangan Bogor", "koordinat": [-6.580979, 106.849875], "prioritas": 1 },
            { "nama": "Wana Wisata Curug Cilember", "koordinat": [-6.602474, 106.832686], "prioritas": 1 },
            { "nama": "Agrowisata Villa Bukit Hambalang", "koordinat": [-6.605715, 106.826826], "prioritas": 1 },
            { "nama": "Agrowisata Kopi Rawa Gede", "koordinat": [-6.603410, 106.822765], "prioritas": 1 },
            { "nama": "Blok Loji", "koordinat": [-6.612324, 106.837915], "prioritas": 1 },
            { "nama": "Blok Sukamantri", "koordinat": [-6.609661, 106.823556], "prioritas": 1 },
            { "nama": "Cakrawala Nuansa Nirwana (KWT CNN)", "koordinat": [-6.612822, 106.840572], "prioritas": 1 },
            { "nama": "Ciburial Sport & Tourism (Mata Air)", "koordinat": [-6.609838, 106.837563], "prioritas": 1 },
            { "nama": "Cigwa (Cisarua Green World Adventure)", "koordinat": [-6.597777, 106.846204], "prioritas": 1 },
            { "nama": "Curug Arca", "koordinat": [-6.613489, 106.832592], "prioritas": 1 },
            { "nama": "Curug Damar Langit", "koordinat": [-6.624128, 106.834874], "prioritas": 1 },
            { "nama": "Curug Kembar Batu Layang", "koordinat": [-6.647295, 106.826096], "prioritas": 1 },
            { "nama": "Curug Kondang", "koordinat": [-6.638205, 106.832940], "prioritas": 1 },
            { "nama": "Curug Panjang", "koordinat": [-6.625895, 106.833481], "prioritas": 1 },
            { "nama": "Dusun Giok", "koordinat": [-6.619221, 106.848077], "prioritas": 1 },
            { "nama": "Goa Gudawang", "koordinat": [-6.616445, 106.838019], "prioritas": 1 },
            { "nama": "Green Canyon Cariu Bogor", "koordinat": [-6.645807, 106.932407], "prioritas": 1 },
            { "nama": "Kampung Wisata Cinangneng", "koordinat": [-6.596081, 106.830126], "prioritas": 1 },
            { "nama": "Katoomba Green Park", "koordinat": [-6.624118, 106.831973], "prioritas": 1 },
            { "nama": "Legok Jamboe", "koordinat": [-6.606742, 106.834148], "prioritas": 1 },
            { "nama": "Melrimba Garden", "koordinat": [-6.617105, 106.836547], "prioritas": 1 },
            { "nama": "Sapadia Outbound", "koordinat": [-6.611154, 106.827631], "prioritas": 1 },
            { "nama": "Sentul International Circuit", "koordinat": [-6.583472, 106.840224], "prioritas": 1 },
            { "nama": "Taman Buah Mekarsari", "koordinat": [-6.587638, 106.830429], "prioritas": 1 },
            { "nama": "Taman Wisata Alam Gunung Pancar", "koordinat": [-6.568758, 106.832528], "prioritas": 1 },
            { "nama": "Taman Wisata Wanagriya", "koordinat": [-6.611734, 106.829295], "prioritas": 1 },
            { "nama": "Telaga Warna Puncak", "koordinat": [-6.684618, 106.940701], "prioritas": 1 },
            { "nama": "The Farm Pancawati", "koordinat": [-6.560564, 106.818561], "prioritas": 1 },
            { "nama": "The Ranch", "koordinat": [-6.597733, 106.826257], "prioritas": 1 },
            { "nama": "Tirta Alam Gunung Leutil", "koordinat": [-6.606581, 106.840391], "prioritas": 1 },
            { "nama": "Toyo Lembah Hijau", "koordinat": [-6.594520, 106.817415], "prioritas": 1 },
            { "nama": "Treetop Zipline Adventure", "koordinat": [-6.598228, 106.823073], "prioritas": 1 },
            { "nama": "Warso Farm", "koordinat": [-6.629083, 106.826585], "prioritas": 1 },
            { "nama": "Water Kingdom", "koordinat": [-6.590634, 106.826475], "prioritas": 1 },
            { "nama": "Wisata Gunung Salak Endah", "koordinat": [-6.578481, 106.858295], "prioritas": 1 },
            { "nama": "TNGPP", "koordinat": [-6.606893, 106.849382], "prioritas": 1 },
            { "nama": "TNGHS", "koordinat": [-6.608163, 106.826760], "prioritas": 1 },
            { "nama": "Jbound", "koordinat": [-6.599038, 106.826093], "prioritas": 1 },
            { "nama": "Devoyage", "koordinat": [-6.599487, 106.832064], "prioritas": 1 },
            { "nama": "Funpark", "koordinat": [-6.605586, 106.825875], "prioritas": 1 },
            { "nama": "Kolren Yasmin", "koordinat": [-6.607497, 106.827503], "prioritas": 1 },
            { "nama": "Marcopolo", "koordinat": [-6.607793, 106.828764], "prioritas": 1 },
            { "nama": "Aewo Mulyaharja", "koordinat": [-6.607609, 106.828980], "prioritas": 1 },
            { "nama": "SKI Tajur", "koordinat": [-6.610045, 106.829547], "prioritas": 1 },
            { "nama": "Kuntum Farmfield", "koordinat": [-6.610442, 106.828377], "prioritas": 1 }
    ];

    // Fungsi untuk menentukan warna berdasarkan prioritas
    function getColor(prioritas) {
        switch(prioritas) {
            case 1: return "red";
            case 2: return "orange";
            case 3: return "green";
            default: return "blue";
        }
    }

    // Tambahkan marker ke peta
    wisata.forEach(function(item) {
        L.circleMarker(item.koordinat, {
            color: getColor(item.prioritas),
            radius: 10
        }).bindPopup(item.nama + "<br>Prioritas: " + item.prioritas).addTo(map);
    });
</script>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
