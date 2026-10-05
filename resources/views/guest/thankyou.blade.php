@extends('layouts.guest.master')

@section('page_level_style')
<style>
    .w-100{}
    .full-screen {
    height: 100vh !important;
}
</style>
@endsection

@section('content')
<section class="p-0 full-screen md-h-700px sm-h-450px position-relative overflow-hidden cover-background" style="background-image: url(&quot;guest/images/demo-3d-parallax-hover-bg.jpg&quot;); height: 633px;">
            <div id="particles-style-02" class="position-absolute h-100 top-0 left-0 w-100" data-particle="true" data-particle-options="{&quot;particles&quot;:{&quot;number&quot;:{&quot;value&quot;:35,&quot;density&quot;:{&quot;enable&quot;:true,&quot;value_area&quot;:1200}},&quot;color&quot;:{&quot;value&quot;:&quot;#ffffff&quot;},&quot;shape&quot;:{&quot;type&quot;:&quot;circle&quot;,&quot;stroke&quot;:{&quot;width&quot;:0,&quot;color&quot;:&quot;#000000&quot;},&quot;polygon&quot;:{&quot;nb_sides&quot;:5},&quot;image&quot;:{&quot;src&quot;:&quot;img/github.svg&quot;,&quot;width&quot;:100,&quot;height&quot;:100}},&quot;opacity&quot;:{&quot;value&quot;:0,&quot;random&quot;:false,&quot;anim&quot;:{&quot;enable&quot;:false,&quot;speed&quot;:0.8932849335314796,&quot;opacity_min&quot;:0.1,&quot;sync&quot;:false}},&quot;size&quot;:{&quot;value&quot;:4.008530152163807,&quot;random&quot;:true,&quot;anim&quot;:{&quot;enable&quot;:false,&quot;speed&quot;:40,&quot;size_min&quot;:0.1,&quot;sync&quot;:false}},&quot;line_linked&quot;:{&quot;enable&quot;:false,&quot;distance&quot;:2000,&quot;color&quot;:&quot;#ffffff&quot;,&quot;opacity&quot;:0.9620472365193137,&quot;width&quot;:4.489553770423464},&quot;move&quot;:{&quot;enable&quot;:true,&quot;speed&quot;:6,&quot;direction&quot;:&quot;none&quot;,&quot;random&quot;:false,&quot;straight&quot;:false,&quot;out_mode&quot;:&quot;out&quot;,&quot;bounce&quot;:false,&quot;attract&quot;:{&quot;enable&quot;:false,&quot;rotateX&quot;:600,&quot;rotateY&quot;:1200}}},&quot;interactivity&quot;:{&quot;detect_on&quot;:&quot;window&quot;,&quot;events&quot;:{&quot;onhover&quot;:{&quot;enable&quot;:true,&quot;mode&quot;:&quot;bubble&quot;},&quot;onclick&quot;:{&quot;enable&quot;:true,&quot;mode&quot;:&quot;push&quot;},&quot;resize&quot;:true},&quot;modes&quot;:{&quot;grab&quot;:{&quot;distance&quot;:400,&quot;line_linked&quot;:{&quot;opacity&quot;:1}},&quot;bubble&quot;:{&quot;distance&quot;:400,&quot;size&quot;:20,&quot;duration&quot;:2,&quot;opacity&quot;:8,&quot;speed&quot;:3},&quot;repulse&quot;:{&quot;distance&quot;:200,&quot;duration&quot;:0.4},&quot;push&quot;:{&quot;particles_nb&quot;:4},&quot;remove&quot;:{&quot;particles_nb&quot;:2}}},&quot;retina_detect&quot;:true}"><canvas class="particles-js-canvas-el" width="1349" height="633" style="width: 100%; height: 100%;"></canvas></div>
            <div class="position-absolute left-minus-30px bottom-10px d-none d-lg-block skrollable skrollable-before" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" style="transform: translateY(-50px);">
                <img src="guest/images/demo-3d-parallax-img-05.png" alt="" data-no-retina="">
            </div>
            <div class="position-absolute right-minus-30px top-10px d-none d-lg-block skrollable skrollable-before" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" style="transform: translateY(-50px);">
                <img src="guest/images/demo-3d-parallax-img-06.png" alt="" data-no-retina="">
            </div>
            <div class="container h-100 position-relative">
                <div class="row align-items-center justify-content-center text-center h-100">
                    <div class="col-md-12 position-relative atropos transform-3d atropos-rotate-touch" data-atropos="">
                        <div class="atropos-scale" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;">
                            <div class="atropos-rotate" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);">
                                <div class="atropos-inner text-center overflow-visible">
                                    <div data-atropos-offset="0" class="position-absolute left-0px right-0px mx-auto lg-w-80 sm-w-100 appear anime-complete" data-anime="{ &quot;scale&quot;:[1.2,1], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                        <img src="guest/images/demo-3d-parallax-img-03.png" alt="" data-no-retina="">
                                    </div>
                                    <img data-atropos-offset="2.5" class="position-relative top-10px z-index-9 lg-w-80 sm-w-100 appear anime-complete" src="guest/images/demo-3d-parallax-img-055.png" alt="" data-anime="{ &quot;scale&quot;:[0.9,1], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 500, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" data-no-retina="" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                                <span class="atropos-highlight" style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 0;"></span></div> 
                            <span class="atropos-shadow" style="transform: translate3d(0px, 0px, -50px) scale(1); transition-duration: 300ms;"></span></div>
                        </div>   
                    </div> 
                </div>
            </div>
        </section>
        
@endsection

@section('page_level_script')

@endsection
