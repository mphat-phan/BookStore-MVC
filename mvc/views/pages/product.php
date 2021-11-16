<svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
    <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
</svg>

<!-- Modal -->
<div class="container header">
    <div class="row">
        <div class="col-md-3">
            <img src="http://localhost/Bookstore/public/assets/images/1952560.jpg"
                class="custom-img img-responsive wp-post-image jetpack-lazy-image--handled" alt="Frozen II">
        </div>
        <div class="col-md-9">
            <div class="row">
                <h1>Product Name</h1>
            </div>
            <div class="row">
                <div>
                    <span style="font-size:50px">300.000đ</span>
                    <span style="text-decoration: line-through; vertical-align: top; color:gray;">250.000đ</span>|
                    <span>Quantity:</span><span> 34</span>
                </div>
            </div>
            <div class="row w-50">
                <div class="input-group">
                <input type="number" min=1 value="1" class="form-control w-25">
                <div class="input-group-append">
                    <a class="btn-solid-sm" href="sign-up.html">Add to cart</a>
                </div> 
            </div>
            </div>
            
       
                
            


        </div>
    </div>

    <div class="row">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div style="justify-content: center;">
                    <h4>Language</h4>
                    <i class="fas fa-globe-americas"></i>
                    <p>English</p>
                </div>
            </div>
            <div class="item">
                <div style="justify-content: center;">
                    <h4>Page Number</h4>
                    <i class="fas fa-file-alt"></i>
                    <p>100</p>
                </div>
            </div>
            <div class="item">
                <div style="justify-content: center;">
                    <h4>Publish Date</h4>
                    <i class="fas fa-calendar-minus"></i>
                    <p>12/2/2021</p>
                </div>
            </div>
            <div class="item">
                <div style="justify-content: center;">
                    <h4>Rated</h4>
                    <i class="fas fa-globe-americas"></i>
                    <p>Publisher</p>
                </div>
            </div>
            <div class="item">
                <div style="justify-content: center;">
                    <h4>Publisher</h4>
                    <i class="fas fa-user-tie"></i>
                    <p>Alex Alex</p>
                </div>
            </div>
            <div class="item">
                <div style="justify-content: center;">
                    <h4>Category</h4>
                    <i class="fas fa-user-tie"></i>
                    <p>Action , Cartoon , Film</p>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h1>Rating</h1>
        <div class="rating">
                
        <div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
        </div>
    </div>
    <div class="row">
        <h1>Review</h1>
        
    </div>
    <div class="row">
        <h1>Comment</h1>
        <div class="comment">
            <p>Helllo</p>
            <p>Helllo</p>
            <p>Helllo</p>
            <p>Helllo</p>
            <p>Helllo</p>
        </div>
    </div>
</div>

<script>
    var pageURL = window.location.href;
    var lastURLSegment = pageURL.substr(pageURL.lastIndexOf('/') + 1);
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

    let URL_API_PRODUCT = '<?php echo constant('URL')?>product/getbyid/' + lastURLSegment;

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

        spinner.setAttribute("hidden", "");

        slider();
    })();
</script>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    $(function () {
        $(document).on('click', '.btn-plus, .btn-minus', function(e) {
            const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
            const input = $(e.target).closest('.input-group').find('input');
            if (input.is('input')) {
                input[0][isNegative ? 'stepDown' : 'stepUp']()
            }
        })
    })
</script>

