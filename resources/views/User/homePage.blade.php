<!DOCTYPE html>
<html style="font-size: 16px;" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Related Products, INTUITIVE">
    <meta name="description" content="">
    <title>Seo Era</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::to('/') }}/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::to('/') }}/css/Home1.css" media="screen">
    <script class="u-script" type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::to('/') }}/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::to('/') }}/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.6.16, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
		}
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>


<body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
<header class="u-clearfix u-header u-header" id="sec-577c">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                   href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
        </nav>
    </div>
</header>

<section class="u-align-center u-clearfix u-section-1" id="carousel_43ab">
    <div class="u-clearfix u-sheet u-sheet-1">
        <span class="u-custom-font u-font-ubuntu u-text u-text-default u-text-1">Products</span>
        <div class="u-expanded-width u-list u-list-1" >
            <div class="u-repeater u-repeater-1" style="padding-bottom: 30px;">
                @foreach($products as $product)
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                            <img src={{ \Illuminate\Support\Facades\URL::to('/') }}/images/{{$product->img }} alt=""
                                 class="u-expanded-width u-image u-image-default u-image-3">
                            <h5 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-6">{{$product->name}}</h5>
                            <h3 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-7">$ {{$product->price}}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$products->links()}}

        </div>

    </div>


</section>
<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-1687">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
    </div>
</footer>

</body>
</html>
