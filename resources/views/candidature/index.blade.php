@extends('layouts.app')

@section('content')
    <div class="container">
        @if(count($candidatures)> 0)
            <div class="head-page d-flex justify-content-between py-3">
                <h2>Liste des candidatures </h2>
            </div>
            <div class="les-cand grid grid-cols-2 gap-3" data-bs-spy="scroll">
                @foreach ($candidatures as $candidature)
                    <div id="rating-block-{{ $candidature->id }}" class="une-cand my-1 rounded-lg bg-white border border-sm py-4 shadow-md rating-block" data-candidature-id="{{ $candidature->id }}">
                        <div class="flex flex-col items-start px-4">
                            <div class="flex w-full justify-between items-center gap-2">
                                <div class="flex items-center gap-2">
                                    <div class="avatar flex bg-blue-100 text-blue-500 justify-center rounded-circle items-center w-[35px] h-[35px]">
                                        <span class="">{{ strtoupper(substr($candidature->cand_prenom, 0, 1)) .''. strtoupper(substr($candidature->cand_name, 0, 1)) }}</span>
                                    </div>
                                    <div class="famille flex text-blue-500 text-lg">
                                        {{$candidature->cand_prenom}}
                                        {{$candidature->cand_name}}
                                    </div>
                                </div>
                                {{-- les etoiles --}}
                                <div class="flex flex-col items-center justify-between">
                                    <div class="star-rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <span class="star {{ $i <= $candidature->rating ? 'star-filled' : '' }}" data-value="{{ $i }}">
                                                &#9733;
                                            </span>
                                        @endfor
                                    </div>
                                    {{-- <span class="text-sm text-gray-400">Réponse à une offre</span> --}}
                                </div>
                            </div>

                            <span class="bg-gray-100 h-[1px] w-full my-3"></span>
                            {{-- Les details badge --}}
                            <div class="flex flex-wrap items-start justify-start gap-2">
                                <a class="text-gray-600 no-underline mb-1" href="mailto:{{$candidature->cand_email}}">
                                    <span class="bg-gray-100 py-1 px-2 rounded-lg hover:bg-gray-200">
                                        <i class="bi bi-envelope-paper-fill text-gray-600"></i>
                                        {{$candidature->cand_email}}
                                    </span>
                                </a>

                                <a class="text-gray-600 no-underline mb-1" href="tel:{{$candidature->cand_num}}">
                                    <span class="bg-gray-100 py-1 px-2 rounded-lg hover:bg-gray-200">
                                        <i class="bi bi-telephone-fill text-gray-600"></i>
                                        {{$candidature->cand_num}}
                                    </span>
                                </a>

                                <span class="bg-green-200 py-1 px-2 rounded-lg">
                                    {{$candidature->cand_work_exp}} années XP
                                </span>

                                <span class="bg-orange-200 py-1 px-2 rounded-lg">
                                    {{$candidature->cand_school_lvl}}
                                </span>
                            </div>
                            {{-- Les icones --}}
                            <div class="w-full h-[60px] relative mt-0 flex items-center gap-2 mt-2">
                                <a href="{{ url('/cv', $candidature->id) }}" target="_blank" class="bg-blue-100 rounded-lg hover:bg-blue-300 px-1 pt-2 pb-1.5 top-0">
                                    <i class="bi bi-filetype-pdf pdf text-blue-500 hover:text-white"></i>
                                </a>

                                <a href="{{ url('/cv', $candidature->id) }}" target="_blank" class="bg-blue-100 rounded-lg hover:bg-blue-300 px-1 pt-2 pb-1.5 top-0">
                                    <i class="bi bi-eye-fill pdf text-blue-500 hover:text-white"></i>
                                </a>

                                <a href="{{ url('/cv', $candidature->id) }}" target="_blank" class="bg-blue-100 rounded-lg hover:bg-blue-300 px-1 pt-2 pb-1.5 top-0">
                                    <i class="bi bi-journal-plus pdf text-blue-500 hover:text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="head-page d-flex justify-center py-3" style="flex-direction: column; width: 800px; margin: 0 auto">
                <h2 class="m-2">Oups!! il n' y a pas d'candidatures disponibles pour l'instant...</h2>
            </div>
        @endif
    </div>
@endsection