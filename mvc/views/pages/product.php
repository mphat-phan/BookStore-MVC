<svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
    <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
</svg>

<div class="displayproduct" style="min-height:600px">
</div>

<script>
    var pageURL = window.location.href;
    var lastURLSegment = pageURL.substr(pageURL.lastIndexOf('/') + 1);
    const spinner = document.querySelector('.spinner');
    const displayproduct = document.querySelector('.displayproduct');

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
                    items: 5
                },
                1200: {
                    items: 6
                }
            }
        })
    }

    function display(arr) {
        var products = arr.data;
        var htmlsale;
        var currentdate = new Date();
        Number.prototype.format = function(n, x) {
            var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
            return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&.');
        };   
        const html = products.map(product => {
            var enddate = new Date(product.saleID.enddate);
            var startdate = new Date(product.saleID.startdate);
            var salePrice = parseInt(product.price) - parseInt(product.price*product.saleID.discount/100);
            if(product.saleID.discount>0 && (startdate<=currentdate && currentdate<=enddate )){     
                htmlsale = `
                    <div>
                        <span style="font-size:50px">${parseInt(salePrice).format()}đ</span>
                        <span style="text-decoration: line-through; vertical-align: top; color:gray;">${parseInt(product.price).format()}đ</span>
                        <span class="badge badge-danger">${'Sale '+product.saleID.discount+'%'}</span>
                    </div>
                `
            }
            else{
                htmlsale = `
                    <div>
                        <span style="font-size:50px">${parseInt(product.price).format()}đ</span>  
                    </div>
                `
            }
            return `
            <div class="container header">
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo constant('URL')?>public/assets/images/${product.image}"
                            class="custom-img img-responsive wp-post-image jetpack-lazy-image--handled" alt="Frozen II">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <h1>${product.name}</h1>
                        </div>
                        <div class="row">
                            <div>
                                `+htmlsale+`
                            </div>
                        </div>
                        <div class="row w-50">
                            <div class="input-group">
                                <input id="quantity" type="number" min=1 value="1" class="form-control w-25">
                                <div class="input-group-append">
                                    <a id="addtocart" class="btn-solid-sm" data_id="${product.id}">Add to cart</a>
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
                                <p>${product.language}</p>
                            </div>
                        </div>
                        <div class="item">
                            <div style="justify-content: center;">
                                <h4>Page Number</h4>
                                <i class="fas fa-file-alt"></i>
                                <p>${product.pagenumber}</p>
                            </div>
                        </div>
                        <div class="item">
                            <div style="justify-content: center;">
                                <h4>Publish Date</h4>
                                <i class="fas fa-calendar-minus"></i>
                                <p>${product.publishdate}</p>
                            </div>
                        </div>
                        <div class="item">
                            <div style="justify-content: center;">
                                <h4>Rated</h4>
                                <i class="fas fa-globe-americas"></i>
                                <p>${product.esrbID.name}</p>
                            </div>
                        </div>
                        <div class="item">
                            <div style="justify-content: center;">
                                <h4>Publisher</h4>
                                <i class="fas fa-user-tie"></i>
                                <p>${product.publisherID.name}</p>
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
                                <div class="middle  ">
                                    <div class="bar-container">
                                        <div class="bar-1"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>20</div>
                                </div>
                            </div>
                </div>
                <div class="row">
                    <div>
                        <h1>Review</h1>
                        <a href="#review" class="btn btn-primary" data-toggle="collapse">View more</a>
                    </div>
                    <div class="collapse" id="review">
                        <div class="container">
                            ${product.description}
                        </div>
                        
                    </div>

                </div>
                <div class="row">
                    <h1>Comment</h1>
                    <div class="comment">
                    <div class="col">
                      
                            <div class="card card-widget">
                            
                            <div class="card-footer card-comments">

                                <div class="card-comment">
                                    <img class="img-circle img-sm" src="<?php echo constant('URL')?>public/assets/dist/img/user3-128x128.jpg" alt="User Image">
                                    <div class="comment-text">
                                        <span class="username">
                                        Maria Gonzales
                                        <span class="text-muted float-right">8:03 PM Today</span>
                                        </span><!-- /.username -->
                                        It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.
                                    </div>
                                </div>

                                <div class="card-comment">
                                    <img class="img-circle img-sm" src="<?php echo constant('URL')?>public/assets/dist/img/user4-128x128.jpg" alt="User Image">
                                    <div class="comment-text">
                                        <span class="username">
                                        Luna Stark
                                        <span class="text-muted float-right">8:03 PM Today</span>
                                        </span><!-- /.username -->
                                        It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.
                                    </div>
                                </div>
               
                            </div>

                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <form action="#" method="post">
                                <img class="img-fluid img-circle img-sm" src="<?php echo constant('URL')?>public/assets/dist/img/user4-128x128.jpg" alt="Alt Text">
                                <!-- .img-push is used to add margin to elements next to floating images -->
                                <div class="img-push">
                                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                                </div>
                                </form>
                            </div>
                            <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
                `;
        }).join('');
        displayproduct.innerHTML += html;
    }
    let URL_API_PRODUCT = '<?php echo constant('URL')?>product/getbyid/'+ lastURLSegment;

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
        display(products);
        spinner.setAttribute("hidden", "");
        slider();
    })();
</script>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo constant('URL') ?>public/assets/js/main.js"></script>
<script>
    $(function () {
        $(document).on('click', '.btn-plus, .btn-minus', function (e) {
            const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
            const input = $(e.target).closest('.input-group').find('input');
            if (input.is('input')) {
                input[0][isNegative ? 'stepDown' : 'stepUp']()
            }
        })
    })

    $(function () {
        $(document).on('click', '#addtocart', function (e) {
            id=$(e.target).attr('data_id');
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>cartdetail/add',
                data:{
                    "productID" : id,
                    "quantity" : $("#quantity").val()
                },
                success: function(data){
                    console.log(data);
                    if(data==1){
                       sweetAlertCRUD(data, "Thêm vào giỏ hàng thành công"); 
                    }
                    else{
                        sweetAlertCRUD(data, "Hết hàng"); 
                    }
                    
                }
            });
        })
    })
</script>