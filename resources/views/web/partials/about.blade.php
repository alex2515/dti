<section id="about">
    <div class="container">
        <header class="section-header">
            <h3>Nosotros</h3>
            <p>{{$company->description}}</p>
        </header>
        <div class="row about-cols">
            @foreach($unities as $unity)
                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ $unity->file }}" alt="" class="img-fluid">
                            <div class="icon">
                                <i class="{{ $unity->icon }}"></i>
                            </div>
                        </div>
                        <h2 class="title">
                            <a href="#">{{ $unity->name }}</a>
                        </h2>
                        <p>{{ $unity->description }}</p>
                        <br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Fin de About -->