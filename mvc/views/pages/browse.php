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
                                            <ul class="nice-scroll" id="checkboxes">
                                                <li><input type="checkbox" name="rGroup" value="1" id="r1" checked="checked" /><label class="whatever" for="r1">fsedfsdf</label></li>
                                                <li><input type="checkbox" name="rGroup" value="2" id="r2" /><label class="whatever" for="r2">fsedfsdf</label></li>
                                                <li><input type="checkbox" name="rGroup" value="3" id="r3" /><label class="whatever" for="r3">fsedfsdf</label></li>
                                                <li><input type="checkbox" name="rGroup" value="3" id="r4" /><label class="whatever" for="r4">fsedfsdf</label></li>
                                                <li><input type="checkbox" name="rGroup" value="3" id="r5" /><label class="whatever" for="r5">fsedfsdf</label></li>
                                                <li><input type="checkbox" name="rGroup" value="3" id="r6" /><label class="whatever" for="r6">fsedfsdf</label></li>
                                                <li><input type="checkbox" name="rGroup" value="3" id="r7" /><label class="whatever" for="r7">fsedfsdf</label></li>
                                                
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
                                                <input type="text" class="inputvalue-min" id="minprice" value="0đ">
                                                <input type="text" class="inputvalue-max" id="maxprice" value="100000đ">
                                            </div>
                                            <div class="multi-range-slider">                                                
                                                <input type="range" class="rangechange" id="input-left" min="0" max="100000" value="0">
                                                <input type="range" class="rangechange" id="input-right" min="0" max="100000" value="100000">

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
                                        <select class="form-control" id="selectLanguage" name="">
                                            <option value="Vietnamese">Vietnamese</option>
                                            <option value="English">English</option>                                            
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
                                <p id="amountproducts"></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <p>Sort:</p>
                                <select id="selectSort">
                                    <option value="nameASC">Low To High By Name</option>
                                    <option value="nameDESC">High To Low By Name</option>
                                    <option value="priceASC">Low To High By Price</option>
                                    <option value="priceDESC">High To Low By Price</option>                                    
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

    const paramsString = window.location;        
    let searchParams = new URLSearchParams(paramsString.search);
    // for (let p of searchParams) {
    //     console.log(p);
    // }
    var searchURL = paramsString.search;

    var arrayproducts;
    var filterarr = {};
    function cardProduct(arr) {                                 
        var products = arr.data;        
        const html = products.map(product => {
            //let title = movie.title || movie.name;
            //let isMovieOrTv = (movie.title) ? 'movie' : 'tv';                                    
            var saleStartDate = product.saleID.startdate;            
            var saleEndDate = product.saleID.enddate;
            var startDateSale = new Date(saleStartDate);
            var endDateSale = new Date(saleEndDate);
            var currentDate = new Date();
            // console.log(endDateSale.getTime());
            // console.log(currentDate.getTime());
            Number.prototype.format = function(n, x) {
                var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&.');
            };
            var salehtml, pricehtml;                        
            if(currentDate.getTime()>=startDateSale.getTime() && currentDate.getTime()<=endDateSale.getTime())
            {
                var priceSale = parseInt(product.price-(product.price*(product.saleID.discount/100))).format();
                var price = parseInt(product.price).format();
                salehtml = `<div class="ribbon-wrapper ribbon">
                                <div class="ribbon bg-danger text">
                                    Sale ${product.saleID.discount}%
                                </div>
                            </div>`;
                pricehtml = `<div class="price">
                                <s>${price}đ</s>${priceSale}đ
                            </div>`;                                
            }
            else
            {
                var price = parseInt(product.price).format();
                salehtml = ``;
                pricehtml = `<div class="price">
                                ${price}đ
                            </div>`;                
            }
            if(product.status != 0)
            {
                return `                
                    <figure class="snip1396">
                        <img src="<?php echo constant('URL')?>/public/assets/images/${product.image}"
                            alt="pr-sample13" />`
                        + salehtml +
                        `<figcaption>
                            <h7>${product.name}</h7>
                        </figcaption>`
                        + pricehtml +                        
                        `<a href="#" class="add-to-cart">
                            Add to Cart<i class="ion-android-checkbox-outline"></i></a>
                    </figure> 
                `;  
            }                        
        }).join('');
        cardproduct.innerHTML += html;        
    }
    function showresults() {
        var results = document.getElementById("amountproducts");
        results.innerHTML = 'Showing 1–3 of ' + Object.keys(arrayproducts.data).length + ' results';
    }  
    function changeURL() {            
        //var sort = '', category = '', price = '', language = '', esrb = '', publisher = '', sale = '';
        if(searchParams.has('sort'))
        {
            var sort = '&sort=' + searchParams.get('sort');
        }
        else {var sort = ''}
        if(searchParams.has('price'))
        {
            var price = '&price=' + searchParams.get('price');
        }
        else {var price = ''} 
        if(searchParams.has('language'))
        {
            var language = '&language=' + searchParams.get('language');
        }
        else {var language = ''}                                      
        searchURL = sort + price + language;
        //console.log(searchURL);            
        history.replaceState(paramsString.href, '', paramsString.origin+paramsString.pathname + '?' + searchURL);
        filter();            
    }

    function filter() {
        if(searchURL !== '')
        {
            if(searchParams.has('sort'))
            { 
                //console.log(searchParams.get('sort'));                        
                sortarr(searchParams.get('sort'));
            }
            if(searchParams.has('price')) 
            {
                //console.log(searchParams.get('sort'));                        
                pricefilter(searchParams.get('price'));
            }           
            if(searchParams.has('language'))
            {
                //console.log(searchParams.get('language'));
                languagefilter(searchParams.get('language'));
            }
        }
    }
    function sortarr(by){
        spinner.removeAttribute("hidden");            
        var selected = by;
        var products = arrayproducts.data;        
        if(selected === "nameASC")
        {   
            products.sort(function (a, b) {
                return a.name.localeCompare(b.name);
            });                
                
        }
        else if (selected === "nameDESC")
        {
            products.sort(function (a, b) {
                return b.name.localeCompare(a.name);
            });
        }
        else if (selected === "priceASC")
        {
            products.sort(function (a, b) {
                return (a.price-((a.price*a.saleID.discount)/100)) - (b.price-((b.price*b.saleID.discount)/100));
            });
        }
        else
        {
            products.sort(function (a, b) {
                return (b.price-((b.price*b.saleID.discount)/100)) - (a.price-((a.price*a.saleID.discount)/100));
            });
        }        
        filterarr.data = products;
        cardproduct.innerHTML = '';
        cardProduct(filterarr);                 
        spinner.setAttribute("hidden", "");                                
    }
    function pricefilter(value){
        spinner.removeAttribute("hidden");
        var arrprice = value.split('-');        
        let min = arrprice[0].replace(/[^0-9]/g, '');
        let max = arrprice[1].replace(/[^0-9]/g, '');                                                                                    
        var array = [];    
        var i=0;
        if(!searchParams.has('category'))
        {            
            var products = arrayproducts;
        }
        else
        {
            var products = filterarr;
        }        
        products.data.forEach(element => {        
            var saleStartDate = element.saleID.startdate;            
            var saleEndDate = element.saleID.enddate;
            var startDateSale = new Date(saleStartDate);
            var endDateSale = new Date(saleEndDate);
            var currentDate = new Date();
            var saleprice;
            if(currentDate.getTime()>=startDateSale.getTime() && currentDate.getTime()<=endDateSale.getTime())
            {
                saleprice = element.price - ((element.price*element.saleID.discount)/100);
            }
            else
            {
                saleprice = element.price;
            }            
            if(saleprice >= parseInt(min) && saleprice <= parseInt(max))
            {                
                array[i++] = element;
            }            
        })                
        filterarr.data = array;
        //console.log(filterarr);        
        cardproduct.innerHTML = '';
        cardProduct(filterarr);                 
        //spinner.setAttribute("hidden", "");
    }
    function languagefilter(selected) {
        spinner.removeAttribute("hidden");                                    
        var array = [];    
        var i=0;           
        if(!searchParams.has('price') && !searchParams.has('category'))
        {            
            var products = arrayproducts;
        }
        else
        {
            var products = filterarr;
        }
        products.data.forEach(element => {
            if(element.language === selected)
            {
                array[i++] = element;
            }            
        })                               
        filterarr.data = array;        
        cardproduct.innerHTML = '';
        cardProduct(filterarr);                 
        spinner.setAttribute("hidden", "");
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
        arrayproducts = products;
        cardProduct(products);
        showresults();        
        filter();                
        spinner.setAttribute("hidden", "");  
    })();    
    $(function(){        
        
        $(document).on('change', '#selectSort', function(e){            
            var selected = $(e.target).val();
            if(searchParams.has('sort') || !searchParams.has('sort'))
            {                
                searchParams.set('sort', selected);
                changeURL();
            }                                    
        });
        $(document).on('change', '#selectLanguage', function(e){            
            var selected = $(e.target).val();            
            if(searchParams.has('language') || !searchParams.has('language'))
            {                
                searchParams.set('language', selected);
                changeURL();
            }            
        });
        $(document).on('mouseup', '.rangechange', function(){                        
            var inputmin = document.getElementById("minprice").value;
            var inputmax = document.getElementById("maxprice").value;            
            if(searchParams.has('price') || !searchParams.has('price'))
            {                
                searchParams.set('price', inputmin+'-'+inputmax);
                changeURL();
            }            
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
        inputmin.value = this.value+"đ";
    }
    inputRight.oninput = function (){
        inputmax.value = this.value+"đ";
    }    

               
</script>
