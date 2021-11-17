<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search this blog">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <!--Category-->
                            <div class="card">
                                <div class="card-heading">
                                    <h4 data-toggle="collapse" data-target="#collapseOne">Categories</h4>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                <li><a href="#">Men (20)</a></li>
                                                <li><a href="#">Women (20)</a></li>
                                                <li><a href="#">Bags (20)</a></li>
                                                <li><a href="#">Clothing (20)</a></li>
                                                <li><a href="#">Shoes (20)</a></li>
                                                <li><a href="#">Accessories (20)</a></li>
                                                <li><a href="#">Kids (20)</a></li>
                                                <li><a href="#">Kids (20)</a></li>
                                                <li><a href="#">Kids (20)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                               
                            <!--Price-->                            
                            <div class="card">
                                <div class="card-heading">
                                    <h4 data-toggle="collapse" data-target="#collapseThree">Price</h4>
                                </div>
                                <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                    <div class="pricebody">
                                        <div class="middle">
                                            <div class="amount">
                                                <input type="text" class="inputvalue-min" id="minprice" value="0$">
                                                <input type="text" class="inputvalue-max" id="maxprice" value="100$">
                                            </div>
                                            <div class="multi-range-slider">                                                
                                                <input type="range" id="input-left" min="0" max="100" value="0">
                                                <input type="range" id="input-right" min="0" max="100" value="100">

                                                <div class="slider">
                                                    <div class="track"></div>
                                                    <div class="range"></div>
                                                    <div class="thumb left"></div>
                                                    <div class="thumb right"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
                </svg>
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                                <p>Showing 1–12 of 126 results</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <p>Sort by Price:</p>
                                <select>
                                    <option value="">Low To High</option>
                                    <option value="">High To Low</option>                                    
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cardproduct">                                                                     
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">21</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const cardproduct = document.querySelector('.cardproduct');    
    const spinner = document.querySelector('.spinner');    

    let URL_API_PRODUCT = '<?php echo constant('URL')?>product/getall';    

    function cardProduct(arr) {
        var products = arr.data;
        const html = products.map(product => {
            //let title = movie.title || movie.name;
            //let isMovieOrTv = (movie.title) ? 'movie' : 'tv';
            var saleDate = product.saleID.enddate;            
            var endDateSale = new Date(saleDate);
            var currentDate = new Date();
            if(endDateSale.getTime() !== currentDate.getTime())
            {
                return `
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="<?php echo constant('URL')?>public/assets/images/${product.image}">                                
                                <ul class="product__hover">

                                    <li>
                                        <a class="btn-solid-sm" href="sign-up.html">Add to cart</a>
                                    </li>
                                    <li>
                                        <a class="btn-solid-sm" href="sign-up.html">Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>${product.name}</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span style="font-size:30px">${product.price}đ</span><span
                                    style="text-decoration: line-through; vertical-align: top; color:gray;">250.000đ</span>
                            </div>
                        </div>                        
                    </div> 
                `;
            }
            else
            {
                return `1
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="<?php echo constant('URL')?>public/assets/images/${product.image}">
                                <div class="ribbon-wrapper ribbon">                            
                                    <div class="ribbon bg-danger text">
                                        Sale
                                    </div>
                                </div>
                                <ul class="product__hover">

                                    <li>
                                        <a class="btn-solid-sm" href="sign-up.html">Add to cart</a>
                                    </li>
                                    <li>
                                        <a class="btn-solid-sm" href="sign-up.html">Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>${product.name}</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span style="font-size:30px">${product.price}đ</span><span
                                    style="text-decoration: line-through; vertical-align: top; color:gray;">250.000đ</span>
                            </div>
                        </div>                        
                    </div> 
                `;
            }            
            
        }).join('');
        cardproduct.innerHTML += html;

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
    
        cardProduct(products);                 
        spinner.setAttribute("hidden", "");  
    })();
</script>
<script>
    var inputLeft = document.getElementById("input-left");
    var inputRight = document.getElementById("input-right");

    var inputmin = document.getElementById("minprice");
    var inputmax = document.getElementById("maxprice");

    var thumbLeft = document.querySelector(".slider > .thumb.left");
    var thumbRight = document.querySelector(".slider > .thumb.right");
    var range = document.querySelector(".slider > .range");

    function setLeftValue() {
        var _this = inputLeft,
            min = parseInt(_this.min),
            max = parseInt(_this.max);

        _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

        var percent = ((_this.value - min) / (max - min)) * 100;

        thumbLeft.style.left = percent + "%";
        range.style.left = percent + "%";
    }
    setLeftValue();

    function setRightValue() {
        var _this = inputRight,
            min = parseInt(_this.min),
            max = parseInt(_this.max);

        _this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

        var percent = ((_this.value - min) / (max - min)) * 100;

        thumbRight.style.right = (100 - percent) + "%";
        range.style.right = (100 - percent) + "%";
    }
    setRightValue();

    inputLeft.addEventListener("input", setLeftValue);
    inputRight.addEventListener("input", setRightValue);

    inputLeft.addEventListener("mouseover", function() {
        thumbLeft.classList.add("hover");
    });
    inputLeft.addEventListener("mouseout", function() {
        thumbLeft.classList.remove("hover");
    });
    inputLeft.addEventListener("mousedown", function() {
        thumbLeft.classList.add("active");
    });
    inputLeft.addEventListener("mouseup", function() {
        thumbLeft.classList.remove("active");
    });

    inputRight.addEventListener("mouseover", function() {
        thumbRight.classList.add("hover");
    });
    inputRight.addEventListener("mouseout", function() {
        thumbRight.classList.remove("hover");
    });
    inputRight.addEventListener("mousedown", function() {
        thumbRight.classList.add("active");
    });
    inputRight.addEventListener("mouseup", function() {
        thumbRight.classList.remove("active");
    });

    inputLeft.oninput = function (){
        inputmin.value = this.value+"$";
    }
    inputRight.oninput = function (){
        inputmax.value = this.value+"$";
    }    
</script>