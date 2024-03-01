 <!-- Page Navbar -->
 <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
     <div class="container">
         <a class="logo" href="#">{{ __('header.return ("with-love")') }}</a>
         <ul class="nav">
             <li class="item">
                 <a class="link" href="#home"> <strong>
                         {{ __('header.Home') }}</a>
                 </strong>
             </li>
             <li class="item">
                 <a class="link" href="#about">
                     <strong>
                         {{ __('header.About') }}
                     </strong>
                 </a>
             </li>
             <li class="item">
                 <a class="link" href="#testmonial">
                     <strong>
                         {{ __('header.Resume') }}
                     </strong>
                 </a>
             </li>
             <li class="item">
                 <a class="link" href="#service">
                     <strong>
                         {{ __('header.service') }}
                     </strong>
                 </a>
             </li>
             <li class="item">
                 <a class="link" href="#portfolio">
                     <strong>
                         {{ __('header.Portfolio') }}
                     </strong>
                 </a>
             </li>
             <li class="item">
                 <a class="link" href="#blog">
                     <strong>
                         {{ __('header.Blog') }}
                     </strong>
                 </a>
             </li>
             <li class="item">
                 <a class="link" href="#contact">
                     <strong>
                         {{ __('header.Contact') }}
                     </strong>
                 </a>
             </li>
             <li class="item ml-md-3">
                 @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                     <a class="btn btn-primary"
                         href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                         <strong>
                             {{ $properties['native'] }}
                         </strong>
                     </a>
                 @endforeach

             </li>
         </ul>
         <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
             <div class="hamburger-box">
                 <div class="hamburger-inner"></div>
             </div>
         </a>
     </div>
 </nav><!-- End of Page Navbar -->
