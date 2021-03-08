<section class="cta-section position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-12 mb-30">
                <h3 class="mb-4">{{ ucwords($frontDetail->cta_title) }}</h3>
                <p class="mr-lg-5 pr-lg-5 mb-0">{{ ucwords($frontDetail->cta_detail) }}</p>
            </div>
            <div class="col-lg-3 offset-lg-1 text-lg-right col-12 mb-30">
                <a href="{{ route('front.signup.index') }}" class="btn btn-lg wow pulse" data-wow-delay="0.4s">
                    {{ $frontMenu->get_start }}</a>
            </div>
        </div>
    </div>
</section>