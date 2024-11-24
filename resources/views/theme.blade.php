<html>
  <head>
    <title>{{ $data -> title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @vite('resources/css/app.css')
  </head>

  <body class="font-montserrat w-full h-auto min-h-screen flex flex-col">
      
    <!-- Start Main Section-->
    <section class="w-full h-screen flex flex-col items-center justify-center text-white bg-fixed bg-cover bg-no-repeat bg-center" style="background-image: url('{{ $data->main_image }}');">
        <div class="bg-black bg-opacity-50 w-full h-screen absolute">
        </div>

        <div class="z-10 flex flex-col items-center">
            <span class="uppercase font-extralight text-2xl">The Wedding Of</span>
            <span class="font-berkshire text-6xl py-5">{{ $data->groom_name }} & {{ $data->bride_name }}</span>
            <span class="font-extralight text-2xl mt-5">{{ formatDate($data->wedding_date, 'l, F jS Y') }}</span>
        </div>
    </section>
    <!-- End Main Section -->

    <!-- Profile Section -->
    <section class="w-full h-auto bg-white flex flex-col items-center p-10 bg-fixed bg-cover bg-no-repeat bg-center" style="background-image: url({{asset('images/bg_profile.jpg')}})">
        <span class="font-nautigal font-light text-4xl mt-5 ">Assalamu'alaikum Warrahmatullahi Wabarakatuh</span>
        <span class="font-nautigal font-light text-4xl py-5">We are very happy to invite you to our wedding</span>
    
        <!-- start groom profile -->
        <img src="{{$data->groom_photo}}" class="w-60 h-60 rounded-3xl mt-10 drop-shadow-lg"/>
        <span class="font-bold font-nautigal text-4xl mt-8">{{$data->groom_name}}</span>
        <span class="font-extralight font-montserrat text-base text-center py-4">D.O. adalah sosok yang tenang dan penuh kesabaran. <br>Ia percaya bahwa cinta adalah tentang komitmen dan pengabdian.</span>
        <span class="font-montserrat font-normal text-base mt-1">Merupakan Putra Kesayangan dari :</span>
        <span class="font-mono font-light text-sm mt-2">Bapak {{$data->groom_father_name}} & Ibu {{$data->groom_mother_name}}</span>
        <a href="{{$data->groom_social_media}}" target="_blank" class="bg-mermud-300 h-10 w-10 flex items-center justify-center rounded-xl hover:scale-110 duration-300 mt-4">
        <i class="fa-brands fa-instagram text-black text-xl"></i>
        </a>
        <!-- end groom profile -->

        <span class="font-bold font-berkshire text-3xl mt-10 mb-2">&</span>

        <!-- start bride profile -->
        <img src="{{$data->bride_photo}}" class="w-60 h-60 rounded-3xl mt-10 drop-shadow-lg"/>
        <span class="font-bold font-nautigal text-4xl mt-8">{{$data->bride_name}}</span>
        <span class="font-extralight font-montserrat text-base text-center py-4">IU adalah sosok yang ceria dan penuh kasih. <br>Dengan hatinya yang lembut dan senyumannya yang menenangkan, <br>ia membawa kebahagiaan bagi semua orang, terutama bagi D.O.</span>
        <span class="font-montserrat font-normal text-base mt-1">Merupakan Putri Kesayangan dari :</span>
        <span class="font-mono font-light text-sm mt-2">Bapak {{$data->bride_father_name}} & Ibu {{$data->bride_mother_name}}</span>
        <a href="{{$data->bride_social_media}}" target="_blank" class="bg-mermud-300 h-10 w-10 flex items-center justify-center rounded-xl hover:scale-110 duration-300 mt-4 mb-10">
            <i class="fa-brands fa-instagram text-black text-xl"></i>
        </a>
    </section>
    <!-- end bride profile -->

    <!-- Start Wedding Information Section -->
    <section class="w-full h-auto min-h-screen flex flex-col px-10 py-20 bg-fixed bg-cover bg-no-repeat bg-center items-center" style="background-image: url({{ asset('images/bg_info1.jpg') }})">
        <div class="w-2/3 h-auto bg-pink-50 text-black flex flex-col rounded-[100px]">
            <!-- start countdown -->
            <div class="flex flex-col h-96 rounded-t-[100px] relative bg-cover bg-no-repeat" style="background-image: url('{{$data->main_image}}');">
                <div class="bg-black bg-opacity-40 w-full h-96 absolute rounded-t-[100px] z-0">
                </div>

                <div class="flex flex-col w-full h-full text-white z-20 items-center justify-center gap-8">
                <span class="font-montserrat text-2l">Lembaran Baru Kami</span>
                <span class="font-nautigal uppercase font-light text-6xl">Countdown</span>
                <span class="font-montserrat uppercase font-light text-3xl ">{{countdown($data->wedding_date)}} days</span>
                </div>
            </div>
            <!-- end Countdown -->
  
            <!-- start akad -->
            <div class="flex flex-col py-20 items-center">
                <span class="font-extralight font-nautigal text-5xl">Akad</span>
                <span class="font-normal font-montserrat text-lg mt-5">{{formatDate($data->akad_start_date, 'l, F jS Y')}}</span>
                <span class="font-normal font-montserrta text-lg mt-1">{{formatDate($data->akad_start_date, 'H:i')}} - {{formatDate($data->akad_end_date, 'H:i')}}</span>
                <span class="font-extralight font-montserrat text-base mt-5">{{$data->akad_place_name}}</span>
                <span class="font-extralight font-montserrat text-base mt-1">{{$data->akad_address}}</span>
                <a href="{{$data->akad_maps}}" target="_blank" class="font-light text-base mt-8 bg-slate-500 rounded-md text-white px-3 py-1 hover:scale-110 duration-300">See Location</a>
            </div>
            <!-- end akad -->
  
            <!-- divider -->
            <div class="w-2/3 mx-auto border-[0.5px] border-black"></div>
            <!-- divider -->
  
            <!-- start reception -->
            <div class="flex flex-col py-20 items-center">
                <span class="font-extralight font-nautigal text-5xl">Wedding Reception</span>
                <span class="font-normal font-montserrat text-lg mt-5">{{formatDate($data->reception_start_date, 'l, F jS Y')}}</span>
                <span class="font-normal font-montserrat text-lg mt-1">{{formatDate($data->reception_start_date, 'H:i')}} - {{formatDate($data->reception_end_date, 'H:i')}}</span>
                <span class="font-extralight font-montserrat text-base mt-5">{{$data->reception_place_name}}</span>
                <span class="font-extralight font-montserrat text-base mt-1">{{$data->reception_address}}</span>
                <a href="{{$data->reception_maps}}" target="_blank" class="font-light text-base mt-8 bg-slate-500 rounded-md text-white px-3 py-1 hover:scale-110 duration-300">See Location</a>
            </div>
            <!-- end reception -->
  
            <!-- divider -->
            <div class="w-2/3 mx-auto border-[0.5px] border-black"></div>
            <!-- divider -->
  
            <!-- start QR image -->
            <div class="flex flex-col py-20 px-28 items-center">
                <span class="font-extralight font-nautigal text-5xl">Wedding Gift</span>
                <span class="font-extralight font-montserrat text-base mt-5 text-center">Your prayers and your attendance at our wedding mean a lot to us. And if you want to give a gift to us, we provide Digital Envelopes to make it easier for you. Thank you very much.</span>
                <img src="{{$data->gift_qr_image}}" alt="QR Image" class="w-40 h-40 mt-10" />
            </div>
            <!-- end QR image -->
        </div>
    </section>
    <!-- End Wedding Information Section -->

    <!-- Start Gallery Section -->
    <section>
        @if(count($data->gallery) > 0)
        <section class="w-full h-auto min-h-screen flex flex-col px-10 py-20 bg-fixed bg-cover bg-no-repeat bg-center items-center" style="background-image: url({{ asset('images/bg_profile.jpg') }})">
          <span class="font-montserrat text-2l py-5">Our Special Memory</span>
          <span class="font-nautigal text-7xl text-red-900">Couple Gallery</span>
          
          <div
            @class([
              'grid h-auto gap-5 px-20 mt-20',
              'grid-cols-2' => (count($data->gallery) == 2),
              'grid-cols-4' => (count($data->gallery) > 2)
            ])>
            @foreach($data->gallery as $item)
              <div class="w-full group overflow-hidden">
                <img src="{{ $item['link'] }}" alt="Gallery Item" class="group-hover:scale-110 duration-300"/>
              </div>
            @endforeach
          </div>
        </section>
        @endif
    </section>
    <!-- End Gallery Section -->

    <!-- Start Journey Section -->
    @if(count($data->journey) > 0)
    <section class="w-full h-auto min-h-screen flex flex-col px-10 py-20 bg-fixed bg-cover bg-no-repeat bg-center items-center" style="background-image: url({{ asset('images/bg_profile.jpg') }})">
        <span class="font-montserrat text-2l py-5">Disinilah Cinta Kami Berseri</span>
        <span class="font-nautigal text-7xl text-red-900 font-medium">Our Love Journey</span>
        <span class="font-windsong text-4l py-5 text-center">Sebuah perjalanan penuh kebahagiaan, cinta, dan kenangan indah <br> yang mengantar kami menuju ikatan abadi</span>
      
        <div class="flex flex-col px-10 mt-10 items-center w-full font-light">
            <div class="w-5 h-5 rounded-full bg-slate-500"></div>
            <div class="w-1 h-10 bg-slate-500"></div>
            @foreach($data->journey as $key => $item)
                <div class="flex flex-row w-full justify-center">
                    @if($key % 2 == 0)
                        <div class="w-1/3 text-end text-xl font-medium text-red-900">
                        {{ formatDate($item['date'], 'M Y') }}
                        </div>
              
                        <div class="w-1 min-w-1 h-auto bg-slate-500 mx-5"></div>
              
                        <div class="w-1/3 h-fit text-xl bg-white flex flex-col rounded-md p-5 mb-10 -mt-5">
                            <span class="font-nautigal font-bold text-4xl">{{ $item['title'] }}</span>
                            <span class="text-justify font-montserrat text-sm font-extralight">{{ $item['story'] }}</span>
                        </div>
                    @else
                        <div class="w-1/3 h-fit text-xl bg-white flex flex-col rounded-md p-5 mb-10 -mt-5">
                            <span class="font-nautigal font-bold text-4xl">{{ $item['title'] }}</span>
                            <span class="text-justify font-montserrat text-sm font-extralight">{{ $item['story'] }}</span>
                        </div>
              
                        <div class="w-1 min-w-1 h-auto bg-slate-500 mx-5"></div>

                        <div class="w-1/3 text-xl font-medium text-red-900">
                        {{ formatDate($item['date'], 'M Y') }}
                        </div>
                    @endif
                </div>
            @endforeach
            <div class="w-5 h-5 rounded-full bg-slate-500"></div>
        </div>
    </section>
    @endif
    <!-- End Journey Section -->

    <!-- Start Pray Section -->
    <section class="w-full h-screen bg-white flex flex-col items-center bg-fixed bg-cover bg-no-repeat bg-center" style="background-image: url({{ asset('images/bg_info1.jpg') }})">
        <div class="bg-white bg-opacity-20 w-full h-screen absolute">
        </div>  
        
        <div class="z-10 flex flex-col w-2/3 h-full items-center justify-center mt-6">
            <span class="font-montserrat font-bold text-2l py-5">Doa kan Perjalanan Kami</span>
            <span class="font-nautigal text-7xl text-red-900 font-bold mb-8">Praying For Us</span>
            <img class="w-3/5" src="{{ asset('images/arrum21.jpg') }}" alt='Doa'/>

            <span class="text-sm font-bold text-red-950 font-montserrat text-center italic mt-5">Wa min Aayaatihiii an khalaqa lakum min anfusikum azwaajal litaskunuuu ilaihaa wa ja'ala bainakum mawad datanw wa rahmah, inna fii zaalika la Aayaatil liqawminy yatafakkaruun</span>
            <span class="text-sm text-center text-red-950 font-medium font-mono mt-5">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</span>
            <span class="text-sm font-bold font-monsterrat text-center py-3 mb-10">(QS. Ar-Rum Ayat 21)</span>
        </div>
    </section>
    <!-- End Pray Section -->

    <!-- Start Comment Section -->
    <section class="w-full h-auto min-h-screen flex flex-col items-center px-10 py-20 text-black bg-fixed bg-cover bg-no-repeat bg-center font-light bg-opacity-50 bg-white" style="background-image: url('{{ asset('images/bg_comment.jpg') }}');">
        <span class="font-montserrat text-2l py-5">Kami Sangat Mengharapkan Kedatangan Kalian</span>
        <span class="font-nautigal text-6xl text-red-900 font-bold mb-8">We Hope To See You On Our Special Day</span>
  
        <form action="/send-comment" method="POST" class="flex flex-col w-1/2 mt-10">
            @csrf
            <label for="name" class="font-mono text-lg">Nama (max 50 karakter)</label>
            <input id="name" name="name" type="text" maxlength="50" placeholder="Nama Tamu" class="p-3 outline-none rounded-md mt-2 drop-shadow-md" required/>
  
            <label for="comment" class="font-mono text-lg mt-5">Pesan (max 500 karakter)</label>
            <textarea id="comment" name="comment" rows="5" maxlength="500" class="p-3 outline-none rounded-md mt-2 resize-none drop-shadow-md" placeholder="Pesan Anda" required></textarea>
  
            <button type="submit" class="mt-10 bg-develobe-500 w-fit mx-auto px-5 py-3 rounded-md text-red-900 font-normal font-mono hover:scale-110 duration-300 drop-shadow-md">Kirim Ucapan</button>
        </form>
  
        <div class="flex flex-col w-1/2 mt-10 gap-5">
            @foreach($data->comments as $item)
                <div class="flex flex-col w-full bg-white rounded-md drop-shadow-md p-3">
                <span class="font-medium font-mono">{{ $item['name'] }} | {{ formatDate($item['created_at'], 'j M Y H:i') }}</span>
                <span class="font-light font-mono">{{ $item['comment'] }}</span>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Comment Section -->






    <!-- Kontrol Musik -->
    <div id="audio-control" 
    class="fixed bottom-6 right-6 w-16 h-16 rounded-full flex items-center justify-center shadow-lg cursor-pointer">
        
    <!-- Gambar Musik -->
   <img id="audio-icon" 
        src="{{ asset('images/playmusic.jpg') }}" 
        alt="Music Icon" 
        class="w-full h-full rounded-full object-cover">
   </div>
    
    <!-- Audio Player -->
   <audio id="song" class="hidden" autoplay loop>
        <source src="{{ asset('audio/song.mp3') }}" type="audio/mp3">
        Your browser does not support the audio element.
   </audio>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
           const audio = document.getElementById('song');
           const audioControl = document.getElementById('audio-control');
           const audioIcon = document.getElementById('audio-icon');
           let isPlaying = false;
    
            // Klik untuk mengontrol audio
            audioControl.addEventListener('click', () => {
            if (isPlaying) {
               audio.pause();
                // Ganti gambar ke kondisi berhenti
                audioIcon.src = "{{ asset('images/playmusic.jpg') }}";
            } else {
                audio.play();
                // Ganti gambar ke kondisi bermain
                audioIcon.src = "{{ asset('images/pausemusic.png') }}";
            }
            isPlaying = !isPlaying;
            });
        });
    </script>

  </body>
</html>

