<!-- Shopping Cart Section Begin -->
<svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
    <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
</svg>
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table id="carttable" class="table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="checkAll"></th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="<?php echo constant('URL') ?>browse">Continue Shopping</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span>$ 169.50</span></li>
                        <li>Total <span>$ 169.50</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- jQuery -->
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>

<script>
    const spinner = document.querySelector('.spinner');
    const carttable = document.querySelector('#carttable tbody');
    
    var cartdetail =async function () {
        return new Promise(resolve => { 
            setTimeout(function() {
                var tmp = null;
                $.ajax({
                    url: '<?php echo constant('URL') ?>cartdetail/getbyid',
                    type: 'post',
                    async: false,
                    global: false,
                    dataType: 'json',
                    success: function(data) {
                        tmp = data.data;
                        for(let i=0;i<tmp.length;i++){
                            tmp[i].productID = product(tmp[i].productID);
                        }
                    }
                });
                resolve(tmp);
            });
        });      
	};
	var product =function (id) {
		var tmp = null;
		$.ajax({
			url: '<?php echo constant('URL') ?>product/getByID/'+id,
            type: 'post',
			async: false,
        	global: false,
            dataType: 'json',
			success: function(data) {
				tmp = data.data[0];
			}
		});
		return tmp;
	};

    async function display(arr) {
        return new Promise(resolve => { 
            setTimeout(function() {
                var cart = arr;
                var htmlsale;
                var currentdate = new Date();
                Number.prototype.format = function(n, x) {
                    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                    return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&.');
                };  
                const html = cart.map(cartdetail => {
                    var enddate = new Date(cartdetail.productID.saleID.enddate);
                    var startdate = new Date(cartdetail.productID.saleID.startdate);
                    var salePrice = parseInt(cartdetail.productID.price) - parseInt(cartdetail.productID.price*cartdetail.productID.saleID.discount/100);
                    var total = cartdetail.quantity*salePrice;
                    if(cartdetail.productID.saleID.discount>0 && (startdate<=currentdate && currentdate<=enddate )){     
                        htmlsale = `
                            <div>
                                <span style="font-size:20px;color:white">${parseInt(salePrice).format()}đ</span>
                                <span style="text-decoration: line-through; vertical-align: top; color:gray;">${parseInt(cartdetail.productID.price).format()}đ</span>
                                <span class="badge badge-danger">${'Sale '+cartdetail.productID.saleID.discount+'%'}</span>
                            </div>
                        `
                    }
                    else{
                        htmlsale = `
                            <div>
                                <span style="font-size:20px;color:white">${parseInt(cartdetail.productID.price).format()}đ</span>  
                            </div>
                        `
                    }
                    return `
                    <tr>
                        <td><input type="checkbox" id="checkItem"></td>
                        <td>
                            <figure class="cart">
                                <img style="width:100px!important" src="<?php echo constant('URL') ?>public/assets/images/${cartdetail.productID.image}" alt="">
                            </figure>
                        </td>
                        <td class="">
            
                                <div style="color:white" class="">
                                <h6>${cartdetail.productID.name}</h6>
                                </div>
                            
                        </td>
                        <td class="">
                                <div class="number-input">
                                    <button type="button" class="btn btn-primary" onclick="updateNumber(this,0)" >-</button>
                                    <input data_id="${cartdetail.productID.id}" class="quantity" min="0" name="quantity" value="${cartdetail.quantity}" type="number">
                                    <button type="button" class="btn btn-primary" onclick="updateNumber(this,1)" class="plus">+</button>
                                </div>
               
                        </td>
                        <td>`+htmlsale+`</td>
                        <td style='color:white;'>`+parseInt(total).format()+`đ</td>
                        <td class="cart__close" data_id="${cartdetail.productID}">
                            <i class="fas fa-times-circle"></i>
                        </td>
                    </tr>    
                    `;
                }).join('');
                carttable.innerHTML += html;
                resolve('resolved');
            });
        });   
          
    }

    $("#checkAll").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    function updateNumber(e,i){

        var number = parseInt(e.parentNode.querySelector('input[type=number]').value);
        if(i==0){
        
            if(number==1){
                number==1
                return;
            }
            e.parentNode.querySelector('input[type=number]').stepDown()
            number-=1;
        }
        else{
            e.parentNode.querySelector('input[type=number]').stepUp()
            number+=1;
        }
        var product = e.parentNode.querySelector('input[type=number]');
        var productID = product.getAttribute('data_id');
        $.ajax({
			url: '<?php echo constant('URL') ?>cartdetail/update/'+productID,
            type: 'post',
            data:{
                "quantity":number
            },
			success: function(data) {
				sweetAlertCRUD(data,"Update");
                console.log(data);
			}
		});
        
    }
    async function fetchProduct(urlEndpoint) {
            let data;
            try {
                const response = await fetch(urlEndpoint);
                data = await response.json();
                return (data.data);
            } catch (error) {
                console.log(error);
            }
            // return data.data;
            return data.items || data.results;
    }
    (async () => {
            //cartdetail = await fetchProduct('<?php echo constant('URL') ?>cartdetail/getbyid');
            const cart = await cartdetail();
            await display(cart);
            spinner.setAttribute("hidden", "");
    })();
</script>

<!-- Shopping Cart Section End -->