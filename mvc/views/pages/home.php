<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h1 class="h1-large">50% Discount Book<span class="replace-me">small, young,
                            boots</span></h1>
                    <p class="p-large"></p>
                    <a class="btn-solid-lg" href="sign-up.html">Buy now</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="<?php echo constant('URL') ?>public/assets2/images/img-1.png"
                        alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of header -->

<!--Spinner-->
<svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
    <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
</svg>
<!--Best Seller-->
<div class="moviewpb-section">
    <div class="container-fluid">
        <h1>Best Seller</h1>
    </div>
    <div class="owl-carousel owl-theme cardbestseller" id="">
    </div>
</div>

<div class="moviewpb-section">
    <div class="container-fluid">
        <h1>Sale</h1>
    </div>
    <div class="owl-carousel owl-theme cardhot" id="">
    </div>
</div>

<div class="moviewpb-section">
    <div class="container-fluid">
        <h1>New Release</h1>
    </div>
    <div class="owl-carousel owl-theme cardnewrelease" id="">
    </div>
</div>

<div class="moviewpb-section">
    <div class="container-fluid">
        <h1>Hot</h1>
    </div>
    <div class="owl-carousel owl-theme cardhot" id="">
    </div>
</div>

<div class="moviewpb-section">
    <div class="container-fluid">
        <h1>Category</h1>
    </div>
    <div class="owl-carousel owl-theme cardcategory" id="">
    </div>
</div>

<div class="moviewpb-section">
    <div class="container-fluid">
        <h1>Author</h1>
    </div>
    <div class="owl-carousel owl-theme cardauthor" id="">
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">
        <div class="ribbon-wrapper ribbon">
            <div class="ribbon bg-danger text">
                Sale
            </div>
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="http://localhost/Bookstore/public/assets/images/1952560.jpg" class="modelImg"
                            alt="Frozen II">
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <h2>Call Us What We Carry: Poems</h2>
                            <p>Amanda Gorman (Author)</p>
                            <div>
                                <span style="font-size:50px">300.000đ</span><span
                                    style="text-decoration: line-through; vertical-align: top; color:gray;">250.000đ</span>|
                                <span>Quantity:</span><span> 34</span>
                            </div>
                            <div>


                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive-sm">

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Page Number</th>
                                    <th>Publish Date</th>
                                    <th>Language</th>
                                    <th>Rated</th>
                                    <th>Publisher</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>200</td>
                                    <td>12/2/2021</td>
                                    <td>English</td>
                                    <td>13+</td>
                                    <td>DzeamTechie</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <a class="btn-solid-sm" href="sign-up.html">Add to cart</a>
            </div>
        </div>
    </div>

</div>

<script>
    const cardbestseller = document.querySelector('.cardbestseller');
    const cardnewrelease = document.querySelector('.cardnewrelease');
    const cardcategory = document.querySelector('.cardcategory');
    const cardauthor = document.querySelector('.cardauthor');

    const spinner = document.querySelector('.spinner');

    function slider() {
        $('.owl-carousel').owlCarousel({
            loop: false,
            stagePadding: 20,
            margin: 20,
            nav: true,
            navText: ['<span class="icon left">‹</span>', '<span class="icon right">›</span>'],
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                640: {
                    items: 3
                },
                960: {
                    items: 3
                },
                1200: {
                    items: 5
                }
            }
        })
    }

    let URL_API_PRODUCT = '<?php echo constant('URL')?>product/getall';
    let URL_API_CATEGORY = '<?php echo constant('URL')?>category/getall';
    let URL_API_AUTHOR = '<?php echo constant('URL')?>author/getall';

    function cardBestSeller(arr) {
        var products = arr.data;
        const html = products.map(product => {
            //let title = movie.title || movie.name;
            //let isMovieOrTv = (movie.title) ? 'movie' : 'tv';
            return `
                    <div class="item moviewrap">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-danger text-xl">
                                Sale
                            </div>
                        </div>
                        <div class="genrecard card1">
                            <div class="wrapper">
                                <img src="<?php echo constant('URL')?>public/assets/images/${product.image}" data-toggle="modal" data-target="#exampleModal" class="img-responsive wp-post-image jetpack-lazy-image--handled" alt="Frozen II">
                                <div class="data">
                                    <div class="content">
                                        <div class="cardheader"> 
                                            <span class="headertitle">
                                                <h1 class="title"><a href="">${product.name}</a></h1>
                                            </span> 
                                            <span class="genre">
                                                Adventure,Comedy,Animation
                                            </span> 
                                        </div>
                                                       
                                        <div class="moviefooter">
                                            
                                            <span class="product-price">
                                                <b>10.000.000đ</b>
                                            </span>
                                            
                                            <a class="btn-solid-sm" href="sign-up.html">Add to cart</a>               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
        }).join('');
        cardbestseller.innerHTML += html;

    }

    function cardNewRelease(arr) {
        var products = arr.data;
        const html = products.map(product => {
            //let title = movie.title || movie.name;
            //let isMovieOrTv = (movie.title) ? 'movie' : 'tv';
            return `
                    
                    <div class="item moviewrap">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-danger text-xl">
                                Sale
                            </div>
                        </div>
        
                        <div class="genrecard card1">
                            <div class="wrapper">
                                <img src="<?php echo constant('URL')?>public/assets/images/${product.image}" class="img-responsive wp-post-image jetpack-lazy-image--handled" alt="Frozen II">
                                <div class="data">
                                    <div class="content">
                                        <div class="cardheader"> 
                                            <span class="headertitle">
                                                <h1 class="title"><a href="">${product.name}</a></h1>
                                            </span> 
                                            <span class="genre">
                                                Adventure,Comedy,Animation
                                            </span> 
                                        </div>
                                                       
                                        <div class="moviefooter">
                                            
                                            <span class="product-price">
                                                <b>10.000.000đ</b>
                                            </span>
                                            
                                            <a class="btn-solid-sm" href="sign-up.html">Add to cart</a>               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
        }).join('');
        cardnewrelease.innerHTML += html;

    }

    function cardCategory(arr) {
        var categorys = arr.data;
        const html = categorys.map(category => {
            //let title = movie.title || movie.name;
            //let isMovieOrTv = (movie.title) ? 'movie' : 'tv';
            return `
                    
                    <div class="item moviewrap">
                        
                        <div class="genrecard card1">
                            <div class="wrapper-2">
                                <img src="<?php echo constant('URL')?>public/assets/images/${category.image}" class="img-responsive wp-post-image jetpack-lazy-image--handled" alt="Frozen II">
                                <div class="data">
                                    <div class="content">
                                        <div class="cardheader"> 
                                            <span class="headertitle">
                                                <h1 class="title"><a href="">${category.name}</a></h1>
                                            </span> 
                                           
                                        </div>
                                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
        }).join('');
        cardcategory.innerHTML += html;

    }

    function cardAuthor(arr) {
        var authors = arr.data;
        const html = authors.map(author => {
            //let title = movie.title || movie.name;
            //let isMovieOrTv = (movie.title) ? 'movie' : 'tv';
            return `
                    
                    <div class="item moviewrap">
                        
                        <div class="genrecard card1">
                            <div class="wrapper-2">
                          
                                    <img src="<?php echo constant('URL')?>public/assets/images/${author.image}" class="img-responsive wp-post-image jetpack-lazy-image--handled" alt="Frozen II">
                            
                                
                                <div class="data">
                                    <div class="content">
                                        <div class="cardheader"> 
                                            <span class="headertitle">
                                                <h1 class="title"><a href="">${author.name}</a></h1>
                                            </span> 
                                           
                                        </div>
                                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
        }).join('');
        cardauthor.innerHTML += html;

    }

    
    async function fetchProduct(urlEndpoint) {
        let data;
        try {
            const response = await fetch(urlEndpoint);
            data = await response.json();
            return (data);
        } catch (error) {
            console.log(error);
        }
        // return data.data;
        return data.items || data.results;
    }

    (async () => {
        const products = await fetchProduct(URL_API_PRODUCT);
        const categorys = await fetchProduct(URL_API_CATEGORY);
        const authors = await fetchProduct(URL_API_AUTHOR);

        
        cardBestSeller(products);
        cardNewRelease(products);
        cardCategory(categorys);
        cardAuthor(authors);
        slider();
        spinner.setAttribute("hidden", "");
    })();
</script>