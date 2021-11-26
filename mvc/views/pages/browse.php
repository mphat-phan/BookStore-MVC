<?php
    $cart = $_SESSION['cart'];
?>
<form class="categorycheckbox cardcategory" data-name="category" id="check">
    <!-- <div class="nice-scroll cardcategory" id="check">                                                    
                                                </div> -->
</form>
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <div class="input-group">
                            <input type="text" class="form-control" value="<?php echo $cart ?>"
                                placeholder="Search this blog">
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
                                            <form class="formchange cardcategory" data-name="category" id="check">
                                                <!-- <div class="nice-scroll cardcategory" id="check">                                                    
                                                </div> -->
                                            </form>
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
                                                <input type="range" class="rangechange" id="input-left" min="0"
                                                    max="100000" value="0">
                                                <input type="range" class="rangechange" id="input-right" min="0"
                                                    max="100000" value="100000">

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
                                    <!-- <form class="formchange" data-name="esrb">
                                        <input type="checkbox" name="esrb" value="5">
                                        <label>under 10</label>
                                        <input type="checkbox" name="esrb" value="1">
                                        <label>18+</label>                                                                                
                                    </form> -->
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <form class="formchange" data-name="esrb">
                                                <ul class="nice-scroll cardesrb" id="checkboxes">
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--publisher-->
                            <div class="card">
                                <div class="card-heading">
                                    <h4 data-toggle="collapse" data-target="#collapseFive">Publisher</h4>
                                </div>
                                <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                    <!-- <form class="formchange" data-name="publisher">
                                        <input type="checkbox" name="publisher" value="14" >
                                        <label>Quang</label>
                                        <input type="checkbox" name="publisher" value="22" >
                                        <label>Quắng</label>                                                                                
                                    </form> -->
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <form class="formchange" data-name="publisher">
                                                <ul class="nice-scroll cardpublisher" id="checkboxes">
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--sale-->
                            <div class="card">
                                <div class="card-heading">
                                    <h4 data-toggle="collapse" data-target="#collapseSix">Sale</h4>
                                </div>
                                <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                    <!-- <form class="formchange" data-name="sale">
                                        <input type="checkbox" name="sale" value="discount20">
                                        <label>Sale 20%</label>
                                        <input type="checkbox" name="sale" value="discount50">
                                        <label>Sale 50%</label>                                                                                
                                    </form> -->
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <form class="formchange" data-name="sale">
                                                <ul class="nice-scroll cardsale" id="checkboxes">
                                                </ul>
                                            </form>
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
                    <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30">
                    </circle>
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
    const cardcategory = document.querySelector('.cardcategory');
    const cardesrb = document.querySelector('.cardesrb');
    const cardpublisher = document.querySelector('.cardpublisher');
    const cardsale = document.querySelector('.cardsale');
    const spinner = document.querySelector('.spinner');

    let URL_API_PRODUCT = '<?php echo constant('URL')?>product/getall';
    let URL_API_CATEGORY = '<?php echo constant('URL')?>category/getbuildTree';
    let URL_API_ESRB = '<?php echo constant('URL')?>esrb/getall';
    let URL_API_PUBLISHER = '<?php echo constant('URL')?>publisher/getall';
    let URL_API_SALE = '<?php echo constant('URL')?>sale/getall';
    const paramsString = window.location;
    let searchParams = new URLSearchParams(paramsString.search);
    // for (let p of searchParams) {
    //     console.log(p);
    // }
    var searchURL = paramsString.search;

    var arrayproducts;
    var filterarr = {};
    var pagenum = 12;

    function loadpage(arr, pagenum) {
        var arrayload = {};
        var i = 0;
        var arraypage = [];
        arr.data.forEach(element => {
            if (i < pagenum) {
                arraypage[i++] = element;
            }
        });
        arrayload.data = arraypage;
        cardproduct.innerHTML = '';
        cardProduct(arrayload);
    }

    function buildCategoryTree(arr) {
        var categories = arr;
        var htmlchild = "";
        const html = categories.map(category => {
            if (category.children) {
                htmlchild = buildCategoryTree(category.children);
                //htmlchild.join('');
            } else {
                htmlchild = "";
            }
            return `<ul> 
                        <li>
                            <input type="checkbox" name="${category.id}" id="${category.id}">
                            <label for="${category.id}">${category.name}</label>` +
                htmlchild +
                `</li>
                    </ul>`;
        }).join('');
        htmlchild = "";
        return html;
    }

    function cardCategory(arr) {
        //console.log(buildCategoryTree(arr));
        const html = buildCategoryTree(arr);
        cardcategory.innerHTML = html;
    }

    function cardEsrb(arr) {
        var esrbs = arr.data;
        const html = esrbs.map(esrb => {
            return ` 
                        <li><input type="checkbox" name="esrb" value="${esrb.id}" id="esrb_${esrb.id}" /><label class="whatever" for="esrb_${esrb.id}">${esrb.name}</label></li>                                                    
                        `;
        }).join('');
        cardesrb.innerHTML += html;
    }

    function cardPublisher(arr) {
        var publishers = arr.data;
        const html = publishers.map(publisher => {
            return ` 
                        <li><input type="checkbox" name="publisher" value="${publisher.id}" id="publisher_${publisher.id}" /><label class="whatever" for="publisher_${publisher.id}">${publisher.name}</label></li>                                                    
                        `;
        }).join('');
        cardpublisher.innerHTML += html;
    }

    function cardSale(arr) {
        var sales = arr.data;
        const html = sales.map(sale => {
            return ` 
                        <li><input type="checkbox" name="sale" value="${sale.id}" id="sale_${sale.id}" /><label class="whatever" for="sale_${sale.id}">${sale.name}</label></li>                                                    
                        `;
        }).join('');
        cardsale.innerHTML += html;
    }

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
            Number.prototype.format = function (n, x) {
                var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&.');
            };
            var salehtml, pricehtml;
            if (currentDate.getTime() >= startDateSale.getTime() && currentDate.getTime() <= endDateSale
                .getTime()) {
                var priceSale = parseInt(product.price - (product.price * (product.saleID.discount / 100)))
                    .format();
                var price = parseInt(product.price).format();
                salehtml = `<div class="ribbon-wrapper ribbon">
                                <div class="ribbon bg-danger text">
                                    Sale ${product.saleID.discount}%
                                </div>
                            </div>`;
                pricehtml = `<div class="price">
                                <s>${price}đ</s>${priceSale}đ
                            </div>`;
            } else {
                var price = parseInt(product.price).format();
                salehtml = ``;
                pricehtml = `<div class="price">
                                ${price}đ
                            </div>`;
            }
            if (product.status != 0) {
                return `                
                    <figure class="snip1396">
                        <img src="<?php echo constant('URL')?>/public/assets/images/${product.image}"
                            alt="pr-sample13" />` +
                    salehtml +
                    `<figcaption>
                            <h7>${product.name}</h7>
                        </figcaption>` +
                    pricehtml +
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
        //results.innerHTML = 'Showing 1–3 of ' + Object.keys(arrayproducts.data).length + ' results';
    }
    async function changeURL() {
        //var sort = '', category = '', price = '', language = '', esrb = '', publisher = '', sale = '';
        if (searchParams.has('sort')) {
            var sort = '&sort=' + searchParams.get('sort');
        } else {
            var sort = ''
        }
        if (searchParams.has('category')) {
            var category = '&category=' + searchParams.get('category');
        } else {
            var category = ''
        }
        if (searchParams.has('price')) {
            var price = '&price=' + searchParams.get('price');
        } else {
            var price = ''
        }
        if (searchParams.has('language')) {
            var language = '&language=' + searchParams.get('language');
        } else {
            var language = ''
        }
        if (searchParams.has('esrb')) {
            var esrb = '&esrb=' + searchParams.get('esrb');
        } else {
            var esrb = ''
        }
        if (searchParams.has('publisher')) {
            var publisher = '&publisher=' + searchParams.get('publisher');
        } else {
            var publisher = ''
        }
        if (searchParams.has('sale')) {
            var sale = '&sale=' + searchParams.get('sale');
        } else {
            var sale = ''
        }
        searchURL = sort + category + price + language + esrb + publisher + sale;
        //console.log(searchURL);            
        history.replaceState(paramsString.href, '', paramsString.origin + paramsString.pathname + '?' + searchURL);

        filter();
    }
    async function filter() {
        spinner.style.display = "block";
        arrayfilter = arrayproducts;
        if (searchURL !== '') {
            if (searchParams.has('sort')) {

                arrayfilter = await sortarr(searchParams.get('sort'), arrayfilter);
            }
            if (searchParams.has('category')) {
                //console.log(searchParams.get('language'));
                arrayfilter = await languagefilter(searchParams.get('category'), arrayfilter);
            }
            if (searchParams.has('price')) {
                //console.log(searchParams.get('sort'));                        
                arrayfilter = await pricefilter(searchParams.get('price'), arrayfilter);
            }
            if (searchParams.has('language')) {
                //console.log(searchParams.get('language'));
                arrayfilter = await languagefilter(searchParams.get('language'), arrayfilter);
            }
            if (searchParams.has('esrb')) {
                //console.log(searchParams.get('language'));
                arrayfilter = await esrbfilter(searchParams.get('esrb'), arrayfilter);
            }
            if (searchParams.has('publisher')) {
                //console.log(searchParams.get('language'));
                arrayfilter = await publisherfilter(searchParams.get('publisher'), arrayfilter);
            }
            if (searchParams.has('sale')) {
                //console.log(searchParams.get('language'));
                arrayfilter = await salefilter(searchParams.get('sale'), arrayfilter);
            }
            loadpage(arrayfilter, pagenum);
            // cardproduct.innerHTML = '';
            // cardProduct(arrayfilter);                         
        }
        spinner.style.display = "none";
    }
    async function sortarr(by, arrayproducts) {
        return new Promise(resolve => {
            setTimeout(function () {
                var selected = by;
                var products = arrayproducts.data;
                if (selected === "nameASC") {
                    products.sort(function (a, b) {
                        return a.name.localeCompare(b.name);
                    });

                } else if (selected === "nameDESC") {
                    products.sort(function (a, b) {
                        return b.name.localeCompare(a.name);
                    });
                } else if (selected === "priceASC") {
                    products.sort(function (a, b) {
                        return (a.price - ((a.price * a.saleID.discount) / 100)) - (b
                            .price - ((b.price * b.saleID.discount) / 100));
                    });
                } else {
                    products.sort(function (a, b) {
                        return (b.price - ((b.price * b.saleID.discount) / 100)) - (a
                            .price - ((a.price * a.saleID.discount) / 100));
                    });
                }
                filterarr.data = products;
                resolve(filterarr);
            });
        });

    }
    async function pricefilter(value, arrayproducts) {
        return new Promise(resolve => {
            setTimeout(function () {
                var arrprice = value.split(',');
                let min = arrprice[0].replace(/[^0-9]/g, '');
                let max = arrprice[1].replace(/[^0-9]/g, '');
                var array = [];
                var i = 0;
                arrayproducts.data.forEach(element => {
                    var saleStartDate = element.saleID.startdate;
                    var saleEndDate = element.saleID.enddate;
                    var startDateSale = new Date(saleStartDate);
                    var endDateSale = new Date(saleEndDate);
                    var currentDate = new Date();
                    var saleprice;
                    if (currentDate.getTime() >= startDateSale.getTime() && currentDate
                        .getTime() <= endDateSale.getTime()) {
                        saleprice = element.price - ((element.price * element.saleID
                            .discount) / 100);
                    } else {
                        saleprice = element.price;
                    }
                    if (saleprice >= parseInt(min) && saleprice <= parseInt(max)) {
                        array[i++] = element;
                    }
                })
                filterarr.data = array;
                resolve(filterarr);
            });
        });
    }
    async function languagefilter(selected, arrayproducts) {
        return new Promise(resolve => {
            setTimeout(function () {
                var array = [];
                var i = 0;
                arrayproducts.data.forEach(element => {
                    if (element.language === selected) {
                        array[i++] = element;
                    }
                })
                filterarr.data = array;
                resolve(filterarr);
            });
        });
    }
    async function esrbfilter(selected, arrayproducts) {
        return new Promise(resolve => {
            setTimeout(function () {
                var arr = selected.split('_');
                var array = [];
                var i = 0;
                arrayproducts.data.forEach(element => {
                    arr.forEach(key => {
                        if (element.esrbID.id === key) {
                            array[i++] = element;
                        }
                    });
                })
                //console.log(array);                              
                filterarr.data = array;
                resolve(filterarr);
            });
        });
    }
    async function publisherfilter(selected, arrayproducts) {
        return new Promise(resolve => {
            setTimeout(function () {
                var arr = selected.split('_');
                var array = [];
                var i = 0;
                arrayproducts.data.forEach(element => {
                    arr.forEach(key => {
                        if (element.publisherID.id === key) {
                            array[i++] = element;
                        }
                    });
                })
                //console.log(array);                              
                filterarr.data = array;
                resolve(filterarr);
            });
        });
    }
    async function salefilter(selected, arrayproducts) {
        return new Promise(resolve => {
            setTimeout(function () {
                var arr = selected.split('_');
                var array = [];
                var i = 0;
                arrayproducts.data.forEach(element => {
                    arr.forEach(key => {
                        if (element.saleID.id === key) {
                            array[i++] = element;
                        }
                    });
                })
                //console.log(array);                              
                filterarr.data = array;
                resolve(filterarr);
            });
        });
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
        const esrb = await fetchProduct(URL_API_ESRB);
        const publisher = await fetchProduct(URL_API_PUBLISHER);
        const sale = await fetchProduct(URL_API_SALE);
        const category = await fetchProduct(URL_API_CATEGORY);
        arrayproducts = products;
        cardCategory(category);
        cardEsrb(esrb);
        cardPublisher(publisher);
        cardSale(sale);
        loadpage(products, pagenum);
        showresults();
        await filter();
        await hiddenSpinner();
    })();
    $(function () {

        $(document).on('change', '#selectSort', function (e) {
            var selected = $(e.target).val();
            if (searchParams.has('sort') || !searchParams.has('sort')) {
                searchParams.set('sort', selected);
                spinner.removeAttribute("hidden");
                changeURL();
            }
        });
        $(document).on('change', '#selectLanguage', function (e) {
            var selected = $(e.target).val();
            if (searchParams.has('language') || !searchParams.has('language')) {
                searchParams.set('language', selected);
                changeURL();
            }
        });
        $(document).on('mouseup', '.rangechange', function () {
            var inputmin = document.getElementById("input-left").value;
            var inputmax = document.getElementById("input-right").value;
            if (searchParams.has('price') || !searchParams.has('price')) {
                searchParams.set('price', inputmin + ',' + inputmax);
                changeURL();
            }
        });
        $(document).on('change', '.formchange', function (e) {
            var arr = $(this).serializeArray();
            var value;
            var name = $(this).attr("data-name");
            if (arr != '') {
                arr.forEach(element => {
                    value += '_' + element.value;
                });
                if (searchParams.has(name) || !searchParams.has(name)) {
                    searchParams.set(name, value.replace('undefined_', ''));
                    changeURL();
                }
            } else {
                searchParams.delete(name);
                changeURL();
            }
        });

        $(window).scroll(function () {
            if ($(window).scrollTop() > $(".shop").outerHeight() - $(window).height()) {
                pagenum += 3;
                //loadpage(arrayproducts,pagenum);
                filter();
            }
        });

        $('.categorycheckbox').change(function (e) {

            var checked = $(this).prop("checked"),
                container = $(this).parent(),
                siblings = container.siblings();

            container.find('.categorycheckbox').prop({
                indeterminate: false,
                checked: checked
        });
                
        function checkSiblings(el) {

            var parent = el.parent().parent(),
                all = true;

            el.siblings().each(function () {
                let returnValue = all = ($(this).children('.categorycheckbox').prop("checked") ===checked);
                return returnValue;
            });

            if (all && checked) {

                parent.children('.categorycheckbox').prop({
                    indeterminate: false,
                    checked: checked
                });

                checkSiblings(parent);

            } else if (all && !checked) {

                parent.children('.categorycheckbox').prop("checked", checked);
                parent.children('.categorycheckbox').prop("indeterminate", (parent.find(
                    'input[type="checkbox"]:checked').length > 0));
                checkSiblings(parent);

            } else {

                el.parents("li").children('.categorycheckbox').prop({
                    indeterminate: true,
                    checked: false
                });

            }

        }

        checkSiblings(container);
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

    inputLeft.addEventListener("mouseover", function () {
        thumbLeft.classList.add("hover");
    });
    inputLeft.addEventListener("mouseout", function () {
        thumbLeft.classList.remove("hover");
    });
    inputLeft.addEventListener("mousedown", function () {
        thumbLeft.classList.add("active");
    });
    inputLeft.addEventListener("mouseup", function () {
        thumbLeft.classList.remove("active");
    });

    inputRight.addEventListener("mouseover", function () {
        thumbRight.classList.add("hover");
    });
    inputRight.addEventListener("mouseout", function () {
        thumbRight.classList.remove("hover");
    });
    inputRight.addEventListener("mousedown", function () {
        thumbRight.classList.add("active");
    });
    inputRight.addEventListener("mouseup", function () {
        thumbRight.classList.remove("active");
    });

    inputLeft.oninput = function () {
        inputmin.value = this.value + "đ";
    }
    inputRight.oninput = function () {
        inputmax.value = this.value + "đ";
    }
</script>
<script>
    
</script>