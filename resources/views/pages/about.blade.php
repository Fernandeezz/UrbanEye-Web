<x-base-layout>
    <section class="w-auto h-[26rem] bg-no-repeat bg-cover relative"
        style="background-image: url({{ Vite::asset('resources/images/about.png') }})">
        <div class="w-full h-[26rem] absolute z-10 bg-black opacity-60 flex items-center justify-center">
            <div class="w-full max-w-screen-lg p-8 border-4 border-white h-96 content-center text-center">
                <h1 class="text-white text-5xl mb-8">
                    Conheça UrbanEye
                </h1>
                <p class="text-white text-2xl mb-8 title-home italic">
                    Uma ideia universitária para o desenvolvimento da cidade
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#00261a]">
        <div class="mx-auto max-w-6xl">
            <div class="py-8 text-center">
                <div style="text-align: -webkit-center;">
                    <p class="text-white text-xl w-[66%]">
                        Durante a graduação, quatro amigos se uniram para desenvolver um site inovador com o objetivo de
                        facilitar a reclamação de áreas de alagamento e descarte irregular de lixo em suas cidades. A
                        plataforma permite que os usuários registrem denúncias detalhadas sobre esses problemas,
                        incluindo descrições, fotos e a localização exata. Após a submissão, as denúncias são analisadas
                        por um painel administrativo que possui funcionalidades para aprovar ou rejeitar as reclamações.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-7xl mx-auto mb-8">
            <div class="text-center py-8">
                <h3 class="text-3xl text-[#00261a] title-home font-semibold">Conheça os responsáveis pelo projeto</h3>
            </div>

            <div>
                <div class="grid grid-cols-2 justify-items-center lg:grid-cols-4 gap-4 text-center">
                    @if ($about->isNotEmpty())
                        @foreach ($about as $item)
                            <div class="bg-gray-300 rounded-md lg:w-auto w-fit p-4">
                                @if ($item->representative_image)
                                    <img class="object-fill rounded-md w-72"
                                        src="{{ asset($item->representative_image) }}" alt="Representante">
                                @endif
                                <h1 class="text-2xl font-bold text-[#00261a] mt-4">{{ $item->title }}</h1>
                                <div class="my-2">
                                    {!! $item->content !!}
                                </div>

                                <div class="my-4 text-[#00261a] flex gap-8 justify-center">
                                    @if ($item->github_link)
                                        <div>
                                            <a href="{{ $item->github_link }}" target="_blank"
                                                class="flex gap-4 items-center text-blue-500">
                                                <svg width="34px" height="34px" viewBox="0 0 73 73" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <title>team-collaboration/version-control/github</title>
                                                        <desc>Created with Sketch.</desc>
                                                        <defs> </defs>
                                                        <g id="team-collaboration/version-control/github" stroke="none"
                                                            stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g id="container" transform="translate(2.000000, 2.000000)"
                                                                fill-rule="nonzero">
                                                                <rect id="mask" stroke="#000000" stroke-width="2"
                                                                    fill="#000000" x="-1" y="-1" width="71"
                                                                    height="71" rx="14"> </rect>
                                                                <path
                                                                    d="M58.3067362,21.4281798 C55.895743,17.2972267 52.6253846,14.0267453 48.4948004,11.615998 C44.3636013,9.20512774 39.8535636,8 34.9614901,8 C30.0700314,8 25.5585181,9.20549662 21.4281798,11.615998 C17.2972267,14.0266224 14.0269912,17.2972267 11.615998,21.4281798 C9.20537366,25.5590099 8,30.0699084 8,34.9607523 C8,40.8357654 9.71405782,46.1187277 13.1430342,50.8109917 C16.5716416,55.5036246 21.0008949,58.7507436 26.4304251,60.5527176 C27.0624378,60.6700211 27.5302994,60.5875152 27.8345016,60.3072901 C28.1388268,60.0266961 28.290805,59.6752774 28.290805,59.2545094 C28.290805,59.1842994 28.2847799,58.5526556 28.2730988,57.3588401 C28.2610487,56.1650247 28.2553926,55.1235563 28.2553926,54.2349267 L27.4479164,54.3746089 C26.9330843,54.468919 26.2836113,54.5088809 25.4994975,54.4975686 C24.7157525,54.4866252 23.9021284,54.4044881 23.0597317,54.2517722 C22.2169661,54.1004088 21.4330982,53.749359 20.7075131,53.1993604 C19.982297,52.6493618 19.4674649,51.9294329 19.1631397,51.0406804 L18.8120898,50.2328353 C18.5780976,49.6950097 18.2097104,49.0975487 17.7064365,48.4426655 C17.2031625,47.7871675 16.6942324,47.3427912 16.1794003,47.108799 L15.9336039,46.9328437 C15.7698216,46.815909 15.6178435,46.6748743 15.4773006,46.511215 C15.3368806,46.3475556 15.2317501,46.1837734 15.1615401,46.0197452 C15.0912072,45.855594 15.1494901,45.7209532 15.3370036,45.6153308 C15.5245171,45.5097084 15.8633939,45.4584343 16.3551097,45.4584343 L17.0569635,45.5633189 C17.5250709,45.6571371 18.104088,45.9373622 18.7947525,46.4057156 C19.4850481,46.8737001 20.052507,47.4821045 20.4972521,48.230683 C21.0358155,49.1905062 21.6846737,49.9218703 22.4456711,50.4251443 C23.2060537,50.9284182 23.9727072,51.1796248 24.744894,51.1796248 C25.5170807,51.1796248 26.1840139,51.121096 26.7459396,51.0046532 C27.3072505,50.8875956 27.8338868,50.7116403 28.3256025,50.477771 C28.5362325,48.9090515 29.1097164,47.7039238 30.0455624,46.8615271 C28.7116959,46.721353 27.5124702,46.5102313 26.4472706,46.2295144 C25.3826858,45.9484285 24.2825656,45.4922482 23.1476478,44.8597436 C22.0121153,44.2280998 21.0701212,43.44374 20.3214198,42.5080169 C19.5725954,41.571802 18.9580429,40.3426971 18.4786232,38.821809 C17.9989575,37.300306 17.7590632,35.5451796 17.7590632,33.5559381 C17.7590632,30.7235621 18.6837199,28.3133066 20.5326645,26.3238191 C19.6665366,24.1944035 19.7483048,21.8072644 20.778215,19.1626478 C21.4569523,18.951772 22.4635002,19.1100211 23.7973667,19.6364115 C25.1314792,20.1630477 26.1082708,20.6141868 26.7287253,20.9882301 C27.3491798,21.3621504 27.8463057,21.6790175 28.2208409,21.9360032 C30.3978419,21.3277217 32.644438,21.0235195 34.9612442,21.0235195 C37.2780503,21.0235195 39.5251383,21.3277217 41.7022622,21.9360032 L43.0362517,21.0938524 C43.9484895,20.5319267 45.0257392,20.0169716 46.2654186,19.5488642 C47.5058357,19.0810026 48.4543466,18.9521409 49.1099676,19.1630167 C50.1627483,21.8077563 50.2565666,24.1947724 49.3901927,26.324188 C51.2390143,28.3136755 52.1640399,30.7245457 52.1640399,33.556307 C52.1640399,35.5455485 51.9232849,37.3062081 51.444357,38.8393922 C50.9648143,40.3728223 50.3449746,41.6006975 49.5845919,42.5256002 C48.8233486,43.4503799 47.8753296,44.2285916 46.7404118,44.8601125 C45.6052481,45.4921252 44.504759,45.9483056 43.4401742,46.2293914 C42.3750975,46.5104772 41.1758719,46.7217219 39.8420054,46.8621419 C41.0585683,47.9149226 41.6669728,49.5767225 41.6669728,51.846804 L41.6669728,59.2535257 C41.6669728,59.6742937 41.8132948,60.0255895 42.1061847,60.3063064 C42.3987058,60.5865315 42.8606653,60.6690374 43.492678,60.5516109 C48.922946,58.7498829 53.3521992,55.5026409 56.7806837,50.810008 C60.2087994,46.117744 61.923472,40.8347817 61.923472,34.9597686 C61.9222424,30.0695396 60.7162539,25.5590099 58.3067362,21.4281798 Z"
                                                                    id="Shape" fill="#FFFFFF"> </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                GitHub</a>
                                        </div>
                                    @endif
                                    @if ($item->linkedin_link)
                                        <div>
                                            <a href="{{ $item->linkedin_link }}" target="_blank"
                                                class="flex gap-4 items-center text-blue-500">
                                                <svg fill="#000000" height="34px" width="34px" version="1.1"
                                                    id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="-143 145 512 512" xml:space="preserve">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z M41.4,508.1H-8.5V348.4h49.9V508.1z M15.1,328.4h-0.4c-18.1,0-29.8-12.2-29.8-27.7c0-15.8,12.1-27.7,30.5-27.7 c18.4,0,29.7,11.9,30.1,27.7C45.6,316.1,33.9,328.4,15.1,328.4z M241,508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4 c-14.9,0-23.2,10-27,19.6c-1.4,3.4-1.2,8.2-1.2,13.1v86.3H71.8c0,0,0.7-146.4,0-159.7h56.1v25.1c3.3-11,21.2-26.6,49.8-26.6 c35.5,0,63.3,23,63.3,72.4V508.1z">
                                                        </path>
                                                    </g>
                                                </svg>
                                                LinkedIn</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Informações sobre nós não estão disponíveis no momento.</p>
                    @endif
                </div>
            </div>

        </div>
    </section>
</x-base-layout>
