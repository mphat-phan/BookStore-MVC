<!-- Shopping Cart Section Begin -->
<svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
    <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
</svg>
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table id="carttable">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
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
                            <a href="#">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
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
    var product;
    var discount;
    $(document).ready(function() {
        $.ajax({
            url: '<?php echo constant('URL') ?>product/getByID/19',
            type: 'post',
            dataType: 'json',
            success: function(data){
                var product = data['data'];
            }
        });
        console.log(product);
    })
        
    

    function display(arr) {
        var cart = arr;
        
        const html = cart.map(cartdetail => {
            
            
            return `
            <tr>
                <td class="product__cart__item">
                    <div class="product__cart__item__pic">
                        <img src="<?php echo constant('URL') ?>public/assetsshop/img/shopping-cart/cart-1.jpg" alt="">
                    </div>
                    <div class="product__cart__item__text">
                        <h6>T-shirt Contrast Pocket</h6>
                        <h5>$98.49</h5>
                    </div>
                </td>
                <td class="quantity__item">
                    <div class="quantity">
                        <div class="pro-qty-2">
                            <input type="text" value="1">
                        </div>
                    </div>
                </td>
                <td class="cart__price">$ 30.00</td>
                <td class="cart__close"><i class="fas fa-times-circle"></i></td>
            </tr>
                
            `;
        }).join('');
        carttable.innerHTML += html;
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
            const cartdetail = await fetchProduct('<?php echo constant('URL') ?>cartdetail/getbyid');
            display(cartdetail);
            spinner.setAttribute("hidden", "");
        })();
</script>

<!-- Shopping Cart Section End -->