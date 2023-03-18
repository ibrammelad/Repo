<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Related Products, INTUITIVE">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Home1.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
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

<section class="u-align-center u-clearfix u-section-1" id="carousel_43ab">
    <div style="padding-top:60px ;padding-bottom: 30px;">
    <div class="u-clearfix u-sheet u-sheet-1">
        <span class="u-custom-font u-font-ubuntu u-text u-text-default u-text-1">Products</span>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                @foreach($products as $product)
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                            <img src={{$product->img == null? "images/product.jpg": "images/".$product->img }} alt=""
                                 class="u-expanded-width u-image u-image-default u-image-3">
                            <h5 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-6">{{$product->name}}</h5>
                            <h3 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-7">$ {{$product->price}}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
        {{$products->links()}}

    </div>

</section>


</body>
</html>
