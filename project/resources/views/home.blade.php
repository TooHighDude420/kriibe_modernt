<x-layouts.kribbem_base>
    <div class="h-full w-full flex flex-col items-center gap-y-10">
        <div
            class="bg-[#1A1A1A] w-[90%] h-[30%] flex flex-col justify-around items-center rounded-lg border-2 border-[#403C3C]">
            <div class="h-[20%] w-[95%] flex justify-between items-center">
                <p> Populaire gerechten </p>
                <a href={{ url('menu') }} class="text-[#BE4E14]">
                    Bekijk meer
                </a>
            </div>
            <div class="w-full h-[80%] flex justify-around items-center">
                @foreach ($preview as $prev)
                <x-prev-card :menu="$prev" />
                @endforeach
            </div>
        </div>
        <div class="bg-[#1A1A1A] w-[90%] h-[35%] flex flex-col justify-around items-center rounded-lg border-2 border-[#403C3C]">
            <div class="h-full w-full flex flex-col justify-center items-center">
                <div class="h-[20%] w-[95%] flex justify-between items-center">
                    <p>
                        Over kribbe
                    </p>
                    <a href={{ url('about') }} class="text-[#BE4E14]">
                        Lees meer
                    </a>
                </div>
                <div class="w-[85%] h-full flex justify-around items-center">
                    <div class="w-[50%] h-[80%] flex flex-col justify-start items-start">
                        <p>
                            Bij Kribbe draait alles om goed eten, snelheid en kwaliteit. Sinds 2000 serveren wij verse
                            snacks, friet
                            en broodjes met aandacht voor smaak en service.
                        </p>

                        <p>
                            Of je nu snel iets wilt meenemen of rustig wilt genieten, wij zorgen voor een fijne ervaring
                            —
                            elke keer
                            weer.
                        </p>
                        <p>
                            Onze vaste klanten zeggen het al: “Krib d’r niet genoeg van.”
                        </p>
                    </div>
                    <div class="w-[50%] h-full flex justify-center items-center">
                        <img class="w-[50%] h-[80%]" src="{{ Storage::url('home/inside.png') }}" alt="inside">
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.kribbem_base>