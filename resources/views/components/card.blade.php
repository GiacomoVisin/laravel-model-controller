<div class="card">
    <div class="card-header">
        <h4> {{ $slot }}</h4>
    </div>
    <div class="card-body">
        <p class="fst-italic"> {{ $originalTitle }}</p>
        <p class="textUpper"> {{ $nationality }}</p>
        <p class="text-muted"> {{ $date }}</p>
    </div>
    @php
        // Converte l'oggetto slot in un numero decimale (float)
        $score = (float) (string) $vote; 
    @endphp

    <div class="card-footer d-flex ">

        <div class="stars">
            @for ($i = 1; $i <= 10; $i++)
                @if ($score >= $i)
                    <i class="fa-solid fa-star text-primary"></i>
                @elseif ($score >= $i - 0.5)
                    <i class="fa-solid fa-star-half-stroke text-primary"></i>
                @else
                    <i class="fa-regular fa-star text-primary"></i>
                @endif
            @endfor
        </div>

        <span class="ms-2 text-muted">({{ trim($vote) }})</span>
        
    </div>

</div>