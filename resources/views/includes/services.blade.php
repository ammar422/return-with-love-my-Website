 <!-- service section -->
 <section class="section" id="service">
     <div class="container text-center">

         <strong>
             {{ __('service.What I Do ?') }}

         </strong>

         <h6 class="section-title mb-6"><strong>
                 {{ __('service.Service') }}
             </strong></h6>
         <!-- row -->
         <div class="row">
             <div class="col-md-6 col-lg-3">
                 <div class="service-card">
                     <div class="body">
                         <img src="assets/imgs/111.svg"
                             alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                             class="icon">
                         <h6 class="title">{{ __('service.Building a website') }}</h6>
                         <p class="subtitle"> 
                                 {{ __('service.Building a website-p') }}
                         </p>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3">
                 <div class="service-card">
                     <div class="body">
                         <img src="assets/imgs/responsive.svg"
                             alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                             class="icon">
                         <h6 class="title">{{ __('service.web development') }}</h6>
                         <p class="subtitle"> {{ __('service.web development-p') }}</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3">
                 <div class="service-card">
                     <div class="body">
                         <img src="assets/imgs/222.svg"
                             alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                             class="icon">
                         <h6 class="title">{{ __('service.HOSTING SERVICES') }}</h6>
                         <p class="subtitle">{{ __('service.HOSTING SERVICES-p') }}</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3">
                 <div class="service-card">
                     <div class="body">
                         <img src="assets/imgs/333.svg"
                             alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                             class="icon">
                         <h6 class="title">{{ __('service.api') }}</h6>
                         <p class="subtitle">{{ __('service.api-p') }}</p>
                     </div>
                 </div>
             </div>
             @if (App::getLocale()=='en')
             <div class="col-md-6 col-lg-12">
                 <div id="ser-card-1" class="service-card">
                     <div class="body">
                         <img src="assets/imgs/444.svg"
                             alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                             class="icon">
                         <h6 class="title">{{ __('service.back-end') }}</h6>
                         <p class="subtitle col-md-6 col-lg-12">{{ __('service.back-end-p') }}</p>
                     </div>
                 </div>
             </div>
             @endif
         </div><!-- end of row -->
     </div>
 </section><!-- end of service section -->
