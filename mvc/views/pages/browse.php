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
                                    <h4 data-toggle="collapse" data-target="#collapseTwo">Price</h4>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
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
                            <!--Languages-->
                            <div class="card">
                                <div class="card-heading">
                                    <h4 data-toggle="collapse" data-target="#collapseThree">Languages</h4>
                                </div>
                                <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                    <div class="selectbody">
                                        <select class="form-control" id="" name="">
                                            <option value="1">1</option>
                                            <option value="2">2</option>                                            
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <!--esrb-->
                            <div class="card">
                                <div class="card-heading">
                                    <h4 data-toggle="collapse" data-target="#collapseFour">ESRB</h4>
                                </div>
                                <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                    <form>
                                        <input type="checkbox" id="" name="" value="10" checked>
                                        <label>under 10</label>
                                        <input type="checkbox" id="" name="" value="18">
                                        <label>18+</label>                                                                                
                                    </form>
                                </div>
                            </div>
                            <!--publisher-->
                            <div class="card">
                                <div class="card-heading">
                                    <h4 data-toggle="collapse" data-target="#collapseFive">Publisher</h4>
                                </div>
                                <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                    <form>
                                        <input type="checkbox" id="" name="" value="10" checked>
                                        <label>under 10</label>
                                        <input type="checkbox" id="" name="" value="18">
                                        <label>18+</label>                                                                                
                                    </form>
                                </div>
                            </div>
                            <!--sale-->
                            <div class="card">
                                <div class="card-heading">
                                    <h4 data-toggle="collapse" data-target="#collapseSix">Sale</h4>
                                </div>
                                <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                    <form>
                                        <input type="checkbox" id="" name="" value="10" checked>
                                        <label>under 10</label>
                                        <input type="checkbox" id="" name="" value="18">
                                        <label>18+</label>                                                                                
                                    </form>
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
                                <p>Sort:</p>
                                <select id="selectSort">
                                    <option value="name.ASC">Low To High By Name</option>
                                    <option value="name.DESC">High To Low By Name</option>
                                    <option value="price.ASC">Low To High By Price</option>
                                    <option value="price.DESC">High To Low By Price</option>                                    
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            // console.log(endDateSale.getTime());
            // console.log(currentDate.getTime());
            Number.prototype.format = function(n, x) {
                var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&.');
            };            
            if(endDateSale.getTime() < currentDate.getTime())
            {
                var price = parseInt(product.price).format();
                return `
                    <figure class="snip1396">
                        <img src="<?php echo constant('URL')?>/public/assets/images/${product.image}"
                            alt="pr-sample13" />
                            <div class="ribbon-wrapper ribbon">                            
                        </div>
                        <figcaption>
                            <h7>${product.name}</h7>
                        </figcaption>
                        <div class="price">
                            ${price}đ
                        </div><a href="#" class="add-to-cart">

                            Add to Cart<i class="ion-android-checkbox-outline"></i></a>
                    </figure> 
                `;
            }
            else
            {
                var priceSale = parseInt(product.price-(product.price*(product.saleID.discount/100))).format();
                var price = parseInt(product.price).format();
                return `
                    <figure class="snip1396">
                        <img src="<?php echo constant('URL')?>/public/assets/images/${product.image}"
                            alt="pr-sample13" />
                            <div class="ribbon-wrapper ribbon">
                            <div class="ribbon bg-danger text">
                                Sale ${product.saleID.discount}%
                            </div>
                        </div>
                        <figcaption>
                            <h7>${product.name}</h7>
                        </figcaption>
                        <div class="price">
                            <s>${price}đ</s>${priceSale}đ
                        </div><a href="#" class="add-to-cart">

                            Add to Cart<i class="ion-android-checkbox-outline"></i></a>
                    </figure> 
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

    $(function(){
        $(document).on('change', '#selectSort', function(e){
            //spinner.setAttribute("hidden", false);
            var selected = $(e.target).val();            
            var array = selected.split(".");
            console.log(array['0']); 
            var by =  array['0'];
            var way =  array['1'];                      
            var url = '<?php echo constant('URL') ?>product/sort/'+by+"/"+way;
            $.ajax({
                type: "POST",
                url: url,
                data: {selected:selected}, // serializes the form's elements.
                success: function (data) { 
                    //console.log(data);
                    cardProduct(data);                 
                    //spinner.setAttribute("hidden", "");
                }
            });
        });
    });    
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
