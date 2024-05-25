<section class="mt-3">
    <div class="les-offres">
        @php
        $offres = App\Models\Offre::with(['contrat', 'candidatures'])->orderBy('id', 'ASC')->get();
        @endphp
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3> Nos offres <span class="bg-cyan-500 border rounded-md text-white text-sm p-2">{{ count($offres) }}</span> </h3>
        </div>
        <div class="grid grid-cols-2 gap-3">
            @foreach ($offres as $offre)
                @php 
                    $contrat = $offre->contrat;
                    $candidatures = $offre->candidatures;                
                    // $country = $offre->country;

                @endphp
                <div class="relative bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center gap-3">
                        <img class="w-[70px] bg-gray-50 rounded-full" src="{{ asset("logo-insign.png") }}" alt="logo Insign">
                        <div class="flex justify-between items-center w-full">
                            <div>
                                <div>{{ $offre->titre }}</div>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    @php
                                        $tags = explode(",", $offre->mots_cle); // Divise la chaîne en un tableau en utilisant la virgule comme séparateur
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <span class="bg-gray-100 text-gray-400 px-3 py-1 rounded-xl text-sm">{{ trim($tag) }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <a class="text-gray-400 no-underline mb-1 py-1 px-2 rounded-lg bg-blue-100 hover:bg-blue-200" href="{{ route('candidature.create', $offre->id)}}">
                                <i class="bi bi-plus text-md text-2xl text-blue-500"></i>
                            </a>
                        </div>
                    </div>
                    <div class="desc py-4 text-gray-400">{!! $offre->resume_poste !!}</div>
                    <div class="flex justify-between items-center gap-3">
                        <span class="flex py-1 px-2 rounded-lg items-center justify-between text-gray-400">
                            <i class="bi bi-briefcase-fill text-2xl text-gray-400 mr-2"></i>
                            {{ $contrat->contrat_name }}
                        </span>

                        <span class="flex py-1 px-2 rounded-lg items-center justify-between text-gray-400">
                            <i class="bi bi-person-fill text-2xl text-gray-400 mr-2"></i>
                            @if ( $offre->candidatures->count()  > 1)
                                {{ $offre->candidatures->count() }} candidatures
                            @else
                                {{$offre->candidatures->count()}} candidature
                            @endif
                        </span>

                        <span class="flex py-1 px-2 rounded-lg items-center justify-between text-gray-400">
                            <i class="bi bi-stopwatch text-2xl text-gray-400 mr-2"></i>
                            
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>