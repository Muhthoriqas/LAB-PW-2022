@extends('FrontEnd.master')

@section('title')

  Lev Computer : Layanan Perbaikan Komputer
    
@endsection

@section('content')


    {{-- ========= Message ========= --}}
    @if(Session::get('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ Session::get('message')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    {{-- ========= Message ========= --}} 

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>Tentang Kami</h2>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p style="text-align: justify">
              Kami adalah penyedia layanan komputer profesional di Makassar yang selalu mengutamakan layanan komputer terbaik untuk meningkatkan bisnis dan penjualan Anda. Apakah masalah Anda kecil atau 
              kompleks, kami selalu siap membantu Anda dengan masalah IT apa pun dengan harga yang kompetitif. Tim profesional kami yang berpengalaman dapat menangani masalah apa pun yang mungkin Anda 
              miliki dengan memberikan solusi yang cepat dan akurat. Kami juga menyediakan layanan inspeksi atau pemeliharaan di tempat melalui telepon atau jarak jauh. <br> <br>

              Oleh karena itu, jika Anda mengalami masalah komputer seperti koneksi internet lambat, komputer lambat, macet atau sering restart, layar biru (blue screen), komputer mati tiba-tiba, 
              motherboard atau Komputer dengan malware, masalah jaringan, printer tidak tersedia di jaringan, dll. Jangan ragu, jangan khawatir, hubungi kami sekarang. Tim ahli kami siap membantu Anda, 
              memahami masalah yang Anda hadapi dan menjawab pertanyaan Anda dengan cepat. Manajemen cepat oleh tim profesional yang andal dan berpengalaman seperti kami di Lev Computer sangat 
              penting. Jangan dibiarkan dengan masalah IT yang dapat mengganggu bisnis Anda.
            </p>
            <p class="fst-italic">
              "Solution For Your Computer" <br>
              - Lev Computer
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->



    <section class="parallax" style="background-color: maroon; color:white; padding-left:30px; padding-right:30px; text-align:center">
      <h4>"JADIKAN KAMI SEBAGAI MITRA PARTNER UNTUK DIVISI VIRTUAL IT ANDA YANG AKAN MEMBANTU ANDA UNTUK MENGHILANGKAN SEGALA MACAM PERMASALAHAN IT YANG SELALU MENGGANGGU PIKIRAN ANDA SEHINGGA ANDA DAPAT FOKUS PADA BISNIS DAN MENINGKATKAN PENJUALAN ANDA"</h4>
    </section>



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bi bi-cpu"></i>
              </div>
              <h4><a href="">Perangkat Keras/Hardware</a></h4>
              <p style="text-align: justify">Apakah Anda terus-menerus mengalami masalah komputer dan membutuhkan seorang profesional untuk memperbaikinya? Jika komputer Anda mogok, itu dapat mengganggu pekerjaan Anda dan 
                menyebabkan masalah bagi bisnis Anda. Oleh karena itu, tim ahli kami dapat membantu Anda dengan berbagai masalah komputer di wilayah Makassar. Kami dapat membantu Anda memperbaiki 
                komputer atau laptop yang tidak berfungsi. Kami juga dapat memperbaiki komputer Anda dengan berbagai macam model komputer. Selain itu, kami juga membantu mengganti komponen komputer 
                seperti Motherboard, RAM, HardDisk, Power Supply, dan lain lain.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bi bi-folder"></i>
              </div>
              <h4><a href="">Perangkat Lunak/Software</a></h4>
              <p style="text-align: justify">Perangkat lunak atau sistem operasi adalah salah satu hal yang paling penting dalam mendukung bisnis Anda. Oleh karena itu, perhatian khusus harus diberikan pada pengoptimalan 
                program atau aplikasi. Itu sebabnya Anda memerlukan tenaga ahli seperti tim Lev Computer yang menyediakan layanan pengembangan perangkat lunak termasuk menginstal atau pemasangan 
                berbagai perangkat lunak, memperbaiki masalah perangkat lunak yang Anda hadapi, dan memperbarui perangkat lunak Anda. Jika aplikasi Anda tidak berfungsi dengan baik, tim ahli kami akan 
                menganalisis dan mencari tahu apa yang salah dengan aplikasi Anda, dan menambahkan fitur ke aplikasi Anda agar berfungsi lebih baik dan up-to-date.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bi bi-shield-check"></i>
              </div>
              <h4><a href="">Proteksi Dari Virus Dan Malware</a></h4>
              <p style="text-align: justify">Apakah Anda takut dengan virus dan malware di komputer Anda? Virus dapat merusak komputer Anda atau merusak file dan data penting. Oleh karena itu, sangat penting untuk melindungi 
                komputer Anda dari segala jenis virus dan malware. Tim ahli akan memeriksa sistem dan memastikan komputer Anda terlindungi dari berbagai ancaman dan bahaya dari virus dan malware. Kami 
                juga menyediakan layanan untuk membersihkan virus dan malware yang menyerang komputer Anda dan menginstal perangkat lunak antivirus terbaru untuk melindungi sistem Anda dari berbagai virus 
                baru. Jadi, jangan kompromikan keamanan komputer Anda dan pindai komputer Anda dengan tim ahli Lev Computer sesegera mungkin.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bi bi-cloud"></i>
              </div>
              <h4><a href="">Data Backup Dan Data Recovery</a></h4>
              <p style="text-align: justify">Semua data akan disimpan di hard drive komputer Anda. Apa yang terjadi ketika hard drive atau media yang menyimpan file dan data penting dihancurkan? Pikirkan file dan data Anda akan 
                hilang selamanya? Kami menyediakan layanan pemulihan data di mana tim ahli Lev Computer akan menggunakan metode dan teknik yang telah terbukti untuk memulihkan data Anda sebelum 
                kerusakan sistem untuk menjaga keamanan data Anda. Selain itu, kami juga akan menyediakan layanan backup data, selalu memastikan bahwa file dan data penting Anda tersimpan dengan baik di 
                sistem backup kami, dan mengembalikan data Anda dengan mudah saat Anda membutuhkannya.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bi bi-wifi"></i>
              </div>
              <h4><a href="">Sistem Jaringan Komputer</a></h4>
              <p style="text-align: justify">Apakah internet Anda tidak berfungsi atau tidak tersedia? Tidak dapat menemukan printer Anda di jaringan komputer Anda? Kesulitan berbagi file atau dokumen dengan pengguna di kantor 
                Anda? Klien kami memberi Anda solusi terbaik untuk mengelola jaringan komputer Anda. Kami dapat mengkonfigurasi jaringan LAN dan WAN Anda agar sesuai dengan kantor atau kebutuhan Anda 
                sehingga perangkat Anda dapat terhubung menggunakan komputer, laptop atau perangkat lainnya. Pada saat yang sama, Anda dapat berbagi Internet, dokumen dan file, printer, pemindai, dan 
                lainnya.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bi bi-envelope"></i>
              </div>
              <h4><a href="">Internet Dan Email</a></h4>
              <p style="text-align: justify">Saat ini, setiap bisnis atau individu sangat bergantung pada email, akses internet, dan penyimpanan online dengan menggunakan berbagai perangkat seperti laptop, desktop, dan ponsel yang 
                saling terhubung satu sama lain. Ini sangat penting. Untuk itu Lev Computer selalu up to date dengan teknologi terkini dan tim kami dapat menggabungkan semua ini untuk meningkatkan 
                produktivitas karyawan yang bekerja di kantor maupun di luar kantor agar dapat terus melakukannya. bekerja secara efektif dan efisien</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <section class="parallax" style="background-color: maroon; color:white; padding-left:30px; padding-right:30px; text-align:center">
      <h4>"SALAH SATU KEUNGGULAN KAMI ADALAH KAMI MEMBANNGUN KEPERCAYAAN DAN SELALU MEMBERIKAN PELAYANAN SUPPORT YANG CEPAT DENGAN TETAP MENJAGA KUALITAS LAYANAN YANG TERBAIK KEPADA KLIEN KAMI"</h4>
    </section>



    <!-- ======= Excellence Section ======= -->
    <section id="excellence" class="features" >
      <div class="container" data-aos="fade-up" >

        <div class="section-title">
          <h2>Keunggulan Kami</h2>
        </div>

        <div class="row" >
          <div class="col-lg-3 col-md-4" style="width: 100%; margin-bottom: 10px">
            <div class="icon-box">
              <i class="bi bi-hand-thumbs-up" style="color: #ffbb2c;"></i>
              <h3><a href="">Respon Yang Cepat</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0" style="width: 100%; margin-bottom: 10px">
            <div class="icon-box">
              <i class="bi bi-hand-thumbs-up" style="color: #5578ff;"></i>
              <h3><a href="">Layanan Tidak Terbatas Untuk Harga Yang Sama</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0" style="width: 100%; margin-bottom: 10px">
            <div class="icon-box">
              <i class="bi bi-hand-thumbs-up" style="color: #e80368;"></i>
              <h3><a href="">Tim Support Yang Selalu Siap Membantu Anda</a></h3>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0" style="width: 100%; margin-bottom: 10px">
            <div class="icon-box">
              <i class="bi bi-hand-thumbs-up" style="color: #e361ff;"></i>
              <h3><a href="">Harga Yang Kompetitif</a></h3>
            </div>
          </div>

      </div>
    </section><!-- End Excellence Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($categories as $cate)
                <li><a href="{{ url('/category/computer/show/'.$cate->category_id) }}">{{ $cate->category_name }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>

        
        <div class="row portofolio-container" data-aos="fade-up">

          @foreach ($computers as $computer)
          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="{{ $computer->computer_image }}" class="img-fluid" style="width: 300px; height: 300px">

            <div class="portfolio-info">
              
              <h4>{{ $computer->computer_name }}</h4>
              <p>{{ $computer->computer_detail }}</p>
              <a href="{{ $computer->computer_image }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $computer->computer_name }}"><i class="bx bx-plus"></i></a>
              <a class="details-link" title="More Details" data-bs-toggle="modal" data-bs-target="#detail{{ $computer->computer_id }}">
                <i class="bx bx-link"></i>
              </a>
            </div>
          </div>

          {{-- ========= Modal Start Here ========= --}}

          <div class="modal fade" id="detail{{ $computer->computer_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Detail</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- ======= Portfolio Details Section ======= -->
                  <section id="portfolio-details" class="portfolio-details">
                    <div class="container" data-aos="fade-up">

                      <div class="row gy-4">

                        <div class="col-lg-12">
                          <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                              <div class="swiper-slide">
                                <img src="{{ $computer->computer_image }}" alt="">
                              </div>

                            </div>
                            <div class="swiper-pagination"></div>
                          </div>
                        </div>
                      </div>

                      <div class="row gy-4">
                        <div class="col-lg-12">
                          <div class="portfolio-info">
                            <h3>Detail information</h3>
                            <ul>
                              <li><strong>Name</strong>: {{ $computer->computer_name }}</li>
                              <li><strong>Category</strong>: {{ $computer->category_name }}</li>
                              <li><strong>Price</strong>: Rp{{ $computer->full_price }}</li>
                              <li><strong>Status</strong>: Ready</a></li>
                              <li><strong>Updated Stock</strong>: {{ $computer->updated_at }}</li>
                            </ul>
                          </div>
                          <div class="portfolio-description">
                            <h2>Description</h2>
                            <p>
                              {{ $computer->computer_detail }}
                            </p>
                          </div>
                        </div>

                      </div>

                    </div>
                  </section><!-- End Portfolio Details Section -->
                </div>
                <div class="modal-footer">
                  <a href="https://www.facebook.com/AdhityaFRD/" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="https://www.instagram.com/lev_computer/" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="https://wa.me/6282259256328/" class="twitter"><i class="bx bxl-whatsapp"></i></a>
                  <a href="https://www.youtube.com/@LevComputer/featured" class="google-plus"><i class="bx bxl-youtube"></i></a>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: maroon">Close</button>
                </div>
              </div>
            </div>
          </div>
              
          {{-- ========== Modal End Here ========== --}}
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->



    <section class="parallax" style="background-color: maroon; color:white; padding-left:30px; padding-right:30px; text-align:center">
      <h4>"APA YANG MEREKA KATAKAN TENTANG KAMI? CARI TAHU RIBUAN ULASAN POSITIF DARI KLIEN YANG TELAH KAMI TANGANI"</h4>
    </section>

    

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Klien Kami</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="FrontEndSourceFile/assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="FrontEndSourceFile/assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="FrontEndSourceFile/assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="FrontEndSourceFile/assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="FrontEndSourceFile/assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="FrontEndSourceFile/assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="FrontEndSourceFile/assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="FrontEndSourceFile/assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="FrontEndSourceFile/assets/img/clients/client-9.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Clients Section -->



    <section class="parallax" style="background-color: maroon; color:white; padding-left:30px; padding-right:30px; text-align:center">
      <h4>"PERCAYAKAN SEGALA PERMASALAHAN IT ANDA KEPADA LEV COMPUTER YANG DIDUKUNG DENGAN STAFF AHLI YANG BERPENGALAMAN DI BIDANGNYA. HUBUNGI TIM KAMI SEKARANG JUGA"</h4>
    </section>



    <!-- ======= Contact Section ======= -->
    <div class="section-title" style="margin-top: 60px">
      <h2>Dapatkan informasi dan hubungi kami</h2>
    </div>

    <div class="map-section" style="margin-top: 10px">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Lev Computer Makassar&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"" frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Lokasi :</h4>
                  <p>Jl. Sahabat 5<br>Tamalanrea, Makassar</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email :</h4>
                  <p>levafr369@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Telepon :</h4>
                  <p>0822-5925-6328</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="contact" style="margin-top: 30px" data-aos="fade-up"> 
          <div class="card-body">
            <form action="{{ route('question_save')}}" method="POST">

              <div class="section-title">
                <h2>Form Pertanyaan</h2>
              </div>

              @csrf
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="question_name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="question_email">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="number" class="form-control" name="question_phone">
              </div>
              <div class="form-group">
                <label>Detail</label>
                <textarea type="text" name="question_detail" class="form-control" rows="3"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="btn" class="btn btn-primary btn-block" style="background-color: maroon; margin-top:10px;">Send Question</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection