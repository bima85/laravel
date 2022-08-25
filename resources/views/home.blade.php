@extends('layouts.main')
@section('container')
    <div class="shadow ">
        <img src="/img/for web.jpg" class="img-fluid rounded " alt="fotogedung" />
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col text-center p-3 shadow-sm animate__bounceIn">
                <img src="/img/KREDIT-gembira.webp" alt="tabungangembira" />
                <p class="fw-bold">Tabungan Gembira</p>
            </div>
            <div class="col p-3 text-center ms-1 shadow-sm animate__bounceIn">
                <img src="/img/tabungan-flexibel.webp" alt="tabunganflexibel" />
            </div>
            <div class="col p-3 text-center ms-1 shadow-sm animate__bounceIn">
                <img src="/img/KREDIT-Ceria.webp" alt="tabunganceria" />
            </div>
        </div>
    </div>
    <div class="card text-center mt-5">
        <div class="card-header">About</div>
        <div class="card-body">
            <h5 class="card-title text-primary fw-bolder">
                PT BPR CENTRAL INTERNATIONAL
            </h5>
            <p class="card-text">
                PT BPR Central International, bank kepercayaan Anda. Kami ada untuk
                melayani kebutuhan Anda. Apapun usaha Anda, kami akan berusaha
                membantu Anda untuk mencapai hasil yang lebih baik. Keberhasilan usaha
                Anda, merupakan prioritas bisnis kami.
            </p>
        </div>
        <div class="card-footer text-muted"></div>
    </div>

    <div class="card text-start mt-3">
        <div class="card-header">
            Visi
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Menjadi market leader di industri perbankan / BPR.</p>
                <footer class="blockquote-footer">PT BPR CENTRAL INTERNATIONAL</footer>
            </blockquote>
        </div>
    </div>

    <div class="card text-end mt-3">
        <div class="card-header ">
            Misi
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Memberikan layanan perbankan dengan mengutamakan pelayanan prima, profesionalisme kerja & dedikasi tinggi
                    untuk mencapai hasil yang maksimal.</p>
                <footer class="blockquote-footer">PT BPR CENTRAL INTERNATIONAL </footer>
            </blockquote>
        </div>
    </div>
@endsection
