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
                <div class="cart__total">
                    <svg class="spinnerCart" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30">
                        </circle>
                    </svg>
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span id="subtotal">0đ</span></li>
                        <li>Discount <span id="discount">0đ</span></li>
                        <li>Total <span id="total">0đ</span></li>
                    </ul>
                    <a role="button" data-toggle="modal" data-target="#checkout" class="primary-btn" id="proceedtocheckout">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- jQuery -->
<div class="modal" id="checkout">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="card card-primary">
                    
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>

                    <div class="container">
                        <div class="checkoutTable">
        
                        </div>
                        <div class="checkoutOrder">

                        </div>
                        
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary buyorder">Đặt hàng</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
</div>
<div class="modal" id="checkoutSale">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>
                    </div>
                    <div class="saleclass">
                        <h4>Miễn Phí Vẩn Chuyển</h4>
                        
                        <div class="owl-carousel owl-theme cardSaleShipping">

                        </div>
                        
                        <h4>Giảm giá sự kiện</h4>
                        <div class="owl-carousel owl-theme cardSaleEvent">

                        </div>

                        <div class="row">
                            <div class="owl-carousel owl-theme cardSaleEvent">
                            <div class="cart__discount">
                                <h6>Discount codes</h6>
                                <form action="#">
                                    <input name="txtSale" type="text" class="form-control" id="txtSale"
                                            placeholder="">
                                    <button id="submitSale" type="submit">Apply</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        <h4>Voucher</h4>
                        <div class="owl-carousel owl-theme cardSaleVoucher container">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
</div>

<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>

<script>
    const spinner = document.querySelector('.spinner');
    const spinnerCart = document.querySelector('.spinnerCart');
    const saleclass = document.querySelector('.saleclass');
    const cardSaleShipping = document.querySelector('.cardSaleShipping');
    const cardSaleEvent = document.querySelector('.cardSaleEvent');
    const cardSaleVoucher = document.querySelector('.cardSaleVoucher');
    const checkoutTable = document.querySelector('.checkoutTable');
    const checkoutOrder = document.querySelector('.checkoutOrder');
    const carttable = document.querySelector('#carttable tbody');
    Number.prototype.format = function(n, x) {
                    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                    return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&.');
    };  
    var checkboxList=[];
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
    var cartdetailAll=[];
    var saleShipping=[];
    var saleEvent=[];
    var voucherList = [];
    var htmlSale="";
    class Order {
        constructor(subtotal, discount, total, shipping) {
            this.subtotal = subtotal;
            this.discount = discount;
            this.total = total;
            this.shipping = shipping;
        }
    }
    var order = new Order(0,0,0,25000);
    $(document).ready(function() {
        function checkDuplicateSale(id){
            for(let i=0;i<voucherList.length;i++){
                if(voucherList[i].id==id){
                    return 1;
                }
            }
            return 0;
        }
        $('#submitSale').click(function(e){
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>sale/getSaleByType/3',
                dataType: 'json',
                success: function(data){
                    var sale = data['data'];
                    for(let i=0;i<sale.length;i++){
                        if(sale[i].id==$('#txtSale').val()){
                            id = sale[i].id;
                            name = sale[i].name;
                            quantity = sale[i].quantity;
                            discount = sale[i].discount;
                            minorder = sale[i].minorder;
                            maxsale = sale[i].maxsale;
                            startdate = sale[i].startdate;

                            enddate = sale[i].enddate;
                            today = getDate();
                            
                            var from = new Date(startdate.replace(/-/g,'/'));  
                            var to = new Date(enddate.replace(/-/g,'/'));  
                            var check = new Date(today.replace(/-/g,'/'));
                            if(checkDuplicateSale(sale[i].id)){
                                sweetAlertCRUD(0, "Bị trùng mã sale : "); 
                                return;
                            }
                            else if(parseInt(minorder)>parseInt(order.subtotal))
                            {
                                sweetAlertCRUD(0, "Đơn tối thiểu để áp dụng mã là "+minorder+" | "+"Giảm tối đa "+maxsale);
                                return;
                            }
                            else if(check < from || check > to){
                                sweetAlertCRUD(0, "Mã đã hết hạn");
                                return;
                            }
                            else{
                                sweetAlertCRUD(1, "Ok");
                                salePrice = parseInt(order.subtotal) - parseInt(order.subtotal*discount/100);
                                if(salePrice>maxsale){
                                    salePrice=maxsale;
                                }
                                order.discount+= parseInt(salePrice);
                                reloadSumOrder();
                                voucherList.push(id);
                                htmlSale+=`<label class="item col labl" id="radiobox">
                                                <div class="row" style="align-items:center!important;box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;background: linear-gradient(45deg,cornsilk, cornflowerblue);border-radius: 12px;">
                                                    
                                                    <div class="col-3 checkRadio"> 
                                                        <input class="" type="checkbox" name="voucherCode" value ="${id}">
                                                        <span><span>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="row">
                                                            <div style="text-align:center">${name}</div>
                                                        </div>
                                                        <div class="row">
                                                            <div style="text-align:center;font-size:20px;color:red">Giảm ${discount}%</div>
                                                        </div>
                                                        <div class="row">
                                                            <div style="text-align:center;font-size:20px;color:red">Còn ${quantity}</div>
                                                        </div>
                                    
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="row">
                                                        <span style="font-size:10px">Thời hạn</span>
                                                        <span style="font-size:20px">${startdate} - ${enddate}</span>
                                                        </div>
                                        
                                                        <div class="row">
                                                        <span style="font-size:10px">Đơn tối thiểu</span>
                                                        <span style="font-size:20px">${parseInt(minorder).format()}đ</span>
                                                        </div>
                                                        <div class="row">
                                                        <span style="font-size:10px">Giảm tối đa</span>
                                                        <span style="font-size:20px">${parseInt(maxsale).format()}đ</span>
                                                        </div>
                                                    </div>  
                                                </div>                   
                                            </label>`;
                                
                                cardSaleVoucher.innerHTML=htmlSale;
                                
                                return;
                            }
                            return;
                        }
                        else{
                            sweetAlertCRUD(0, "Không tồn tại mã code");
                        }
                    }
                    
                    
                }
            })
        })
        $('#proceedtocheckout').click(function(e){
            $('input[name="shippingCode"]').each(function() { 
			    this.checked = false; 
                saleShipping = [];
		    });
            $('input[name="eventCode"]').each(function() { 
			    this.checked = false; 
                saleEvent = [];
		    });
            $('input[name="voucherCode"]').each(function() { 
			    this.checked = false; 
		    });
            (async () => {
                spinner.style.display = "block";
                checkoutTable.innerHTML = "";
                checkoutOrder.innerHTML = "";
                order.discount = 0;
                order.shipping = 25000;
                if(checkboxList.length>0){
                    const cart = await cartdetail();
                    await displayCheckout(cart);
                }
                else{
                    sweetAlertCRUD(0,"Vui lòng chọn sản phẩm");
                    checkoutTable.innerHTML = "Vui lòng chọn sản phẩm";
                }
                spinner.style.display = "none";
                slider();
            })();

        })
        $(document).on('change', 'input[name="shippingCode"]', function (e) {
            saleShipping=[];
            order.shipping = 25000;
            var id = $(this).val()
            var thisinput = $(this);
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>sale/getbyid/'+id,
                dataType: 'json',
                success: function(data){
                    var sale = data['data'];
                        if(sale[0].id==id){
                            id = sale[0].id;
                            name = sale[0].name;
                            quantity = sale[0].quantity;
                            discount = sale[0].discount;
                            minorder = sale[0].minorder;
                            maxsale = sale[0].maxsale;
                            startdate = sale[0].startdate;
                            enddate = sale[0].enddate;
                            today = getDate();
                            
                            var from = new Date(startdate.replace(/-/g,'/'));  
                            var to = new Date(enddate.replace(/-/g,'/'));  
                            var check = new Date(today.replace(/-/g,'/'));
                            if(parseInt(minorder)>parseInt(order.subtotal))
                            {
                                sweetAlertCRUD(0, "Đơn tối thiểu để áp dụng mã là "+minorder+" | "+"Giảm tối đa "+maxsale);
                                thisinput.prop("checked",false);
                            
                            }
                            else if(check < from || check > to){
                                sweetAlertCRUD(0, "Mã đã hết hạn");
                                thisinput.prop("checked",false);
                               
                            }
                            else{
                                saleShipping=[]; 
                                saleShipping.push(id);
                                order.shipping = 0;
                                sweetAlertCRUD(1, "Choose");
                              
                            }
                        }
                        else{
                            sweetAlertCRUD(0, "Không tồn tại mã code");
                            thisinput.prop("checked",false);
                        }        
                        reloadSumOrder();
                }
            })

        }); 
        $(document).on('change', 'input[name="eventCode"]', function (e) {
            saleEvent=[];
            var id = $(this).val()
            var thisinput = $(this);
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>sale/getbyid/'+id,
                dataType: 'json',
                success: function(data){
                    var sale = data['data'];
                        if(sale[0].id==id){
                            id = sale[0].id;
                            name = sale[0].name;
                            quantity = sale[0].quantity;
                            discount = sale[0].discount;
                            minorder = sale[0].minorder;
                            maxsale = sale[0].maxsale;
                            startdate = sale[0].startdate;
                            enddate = sale[0].enddate;
                            today = getDate();
                            var from = new Date(startdate.replace(/-/g,'/'));  
                            var to = new Date(enddate.replace(/-/g,'/'));  
                            var check = new Date(today.replace(/-/g,'/'));
                         
                            if(parseInt(minorder)>parseInt(order.subtotal))
                            {
                                sweetAlertCRUD(0, "Đơn tối thiểu để áp dụng mã là "+minorder+" | "+"Giảm tối đa "+maxsale);
                                thisinput.prop("checked",false);
                            }
                            else if(check < from || check > to){
                                sweetAlertCRUD(0, "Mã đã hết hạn");
                                thisinput.prop("checked",false);
                            }
                            else if(quantity==0){
                                sweetAlertCRUD(0, "Mã đã hết");
                                thisinput.prop("checked",false);
                            }
                            else{
                                saleEvent=[]; 
                                saleEvent.push(id);

                                salePrice = parseInt(order.subtotal) - parseInt(order.subtotal*discount/100);
                                if(salePrice>maxsale){
                                    salePrice=maxsale;
                                }
                                order.discount+= parseInt(salePrice)
                                sweetAlertCRUD(1, "Choose");
                            }
                            reloadSumOrder();
                        }
                        else{
                            sweetAlertCRUD(0, "Không tồn tại mã code");
                            thisinput.prop("checked",false);
                        }
                        reloadSumOrder();   
                }
            })
        }); 
        $('.buyorder').click(function(e){
            e.preventDefault();
            if(checkboxList.length==0){
                sweetAlertCRUD(0,"Vui lòng chọn sản phẩm");
                return;
            }
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>order/addOnline',
                data:{
                    'productID' : JSON.stringify(checkboxList),
                    'saleShipping' : JSON.stringify(saleShipping),
                    'saleEvent' : JSON.stringify(saleEvent),
                    'voucherList' : JSON.stringify(voucherList),
                    'order' : JSON.stringify(order)
                },
                success: function(data){
                    alert("Đặt hàng thành công");
                    window.location="<?php echo constant('URL') ?>profile";
                }
            })
        })
        
    })
    function reloadSumOrder(){
        $(".sumorder").html(`
            <div class="row">
                <div class="col">Tổng tiền hàng</div>
                    <div class="col">${parseInt(order.subtotal).format()}đ</div>
                    </div>
                    <div class="row">
                        <div class="col">Tổng tiền phí vận chuyển</div>
                        <div class="col">${parseInt(order.shipping).format()}đ</div>
                    </div>
                    <div class="row">
                                <div class="col">Giảm</div>
                                <div class="col">${parseInt(order.discount).format()}đ</div>
                            </div>
                 <div class="row">
                  <div class="col"><h5>Tổng thanh toán<h5></div>
                    <div class="col">${parseInt(order.total-order.discount+order.shipping).format()}đ</div>
                     </div>
                                `)
    }
    function checkDuplicateCheckbox(id){
            for(let i=0;i<checkboxList.length;i++){
                if(checkboxList[i]==id){
                    return 1;
                }
            }
            return 0;
    }
    function removeArr(id){
        for(let i=0;i<voucherList.length;i++){
            if(voucherList[i]==id){
                voucherList.splice(i, 1);
                return 1;
            }
        }
        return 0;
    }
    function getDate(){
        var today = new Date();
        return today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
    }
    async function display(arr) {
        return new Promise(resolve => { 
            setTimeout(function() {
                if(!arr){

                    $("#carttable").remove();
                    //carttable.innerHTML = "Không có sản trong giỏ hàng"+"<a href='<?php echo constant('URL') ?>browse'>Continue Shopping</a>"
                    resolve('resolved');
                }
                var cart = arr;
                var htmlsale;
                var currentdate = new Date();
                var htmlQuantity;
                var htmlCheckBox;
                const html = cart.map(cartdetail => {
                    cartdetailAll.push(cartdetail.productID.id);
                    var enddate = new Date(cartdetail.productID.saleID.enddate);
                    var startdate = new Date(cartdetail.productID.saleID.startdate);
                    var salePrice = parseInt(cartdetail.productID.price) - parseInt(cartdetail.productID.price*cartdetail.productID.saleID.discount/100);
                    var total = cartdetail.quantity*salePrice;
                    if(cartdetail.productID.saleID.discount>0 && (startdate<=currentdate && currentdate<=enddate )){     
                        htmlsale = `
                            <div>
                                <span class="priceProduct" style="font-size:20px;color:white">${parseInt(salePrice).format()}đ</span>
                                <span style="text-decoration: line-through; vertical-align: top; color:gray;">${parseInt(cartdetail.productID.price).format()}đ</span>
                                <span class="badge badge-danger">${'Sale '+cartdetail.productID.saleID.discount+'%'}</span>
                            </div>
                        `
                    }
                    else{
                        htmlsale = `
                            <div>
                                <span class="priceProduct" style="font-size:20px;color:white">${parseInt(cartdetail.productID.price).format()}đ</span>  
                            </div>
                        `
                    }
                    if(cartdetail.productID.quantity==0){
                        htmlQuantity =`
                        <div class="number-input" style="color:white;">
                        Hết hàng
                        </div>
                        `
                        htmlCheckBox=`
                            <input type="checkbox" class="checkboxList" id="checkItem" value="${cartdetail.productID.id}" disabled>
                        `
                    }
                    else{
                        htmlQuantity =`
                        <div class="number-input">
                            <button type="button" class="btn btn-primary" onclick="updateNumber(this,0)" >-</button>
                            <input data_id="${cartdetail.productID.id}" class="quantity" min="0" name="quantity" value="${cartdetail.quantity}" type="number" disabled>
                            <button type="button" class="btn btn-primary" onclick="updateNumber(this,1)" class="plus">+</button>
                        </div>
                        `
                        if(cartdetail.productID.quantity<=10){
                            htmlQuantity+=`<div style="color:red;">Còn ${cartdetail.productID.quantity} sản phẩm<div>`
                        }
                        htmlCheckBox=`
                            <input type="checkbox" class="checkboxList" id="checkItem" value="${cartdetail.productID.id}">
                        `
                    }
                    return `
                    <tr>
                        <td>
                            `+htmlCheckBox+`
                        </td>
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
                        <td class="">`
                        +htmlQuantity+ 
                        `</td>
                        <td>`+htmlsale+`</td>
                        <td style='color:white;'>`+parseInt(total).format()+`đ</td>
                        <td class="cart__close" data_id="${cartdetail.productID.id}">
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
    async function displayCheckout(arr) {
        return new Promise(resolve => { 
            setTimeout(function() {
                var cart = arr;
                var currentdate = new Date();
                const html = cart.map(cartdetail => {
                    if(checkDuplicateCheckbox(cartdetail.productID.id)==0){
                        return;
                    }
                    var enddate = new Date(cartdetail.productID.saleID.enddate);
                    var startdate = new Date(cartdetail.productID.saleID.startdate);
                    var salePrice = parseInt(cartdetail.productID.price) - parseInt(cartdetail.productID.price*cartdetail.productID.saleID.discount/100);
                    var total = cartdetail.quantity*salePrice;
                    var productID = cartdetail.productID.id;
                    var quantity = cartdetail.quantity;
                    var price = cartdetail.productID.price;
                    var subtotal = quantity*price;
                    var discount = cartdetail.productID.saleID.discount;
                    return `
                    <div class="row align-items-center mb-3 border p-2">
                            <div class="col-2">
                                <img class="justify-content-center" style="height:100px; width:70px!important;-webkit-border-radius: 13px;-moz-border-radius: 13px;object-fit: cover;overflow: hidden;" src="<?php echo constant('URL') ?>public/assets/images/${cartdetail.productID.image}" alt="">
                            </div>
                            <div class="col-6">
                                <div class="row"><h5>${cartdetail.productID.name}<h5></div>
                                <div class="row">
                                    <div class="col">${parseInt(salePrice).format()}đ</div>
                                    <div class="col">x${cartdetail.quantity}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Tổng tiền</div>
                                    <div class="col">${parseInt(total).format()}đ</div>
                                </div>
                            </div>
                            
                    </div>  
                    `;
                }).join('');
                checkoutTable.innerHTML += html;
                checkoutOrder.innerHTML = `
                <div class="row border p-2">
                            <div class="col border p-2 ">
                                <div class="row">
                                    <div class="col">Mã giảm giá</div>
                                <div class="col">
                                    <button type="button" data-toggle="modal" data-target="#checkoutSale" class="btn btn-outline-primary">Chọn mã</button>
                                </div>
                                </div>
                                
                            </div>
                            <div class="col border p-2 ">
                                <div class="form-group">
                                        <label>Phương thức thanh toán</label>
                                        <div class="col-3">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment" value="cash" checked>
                                            <label class="form-check-label">Cash</label>
                                            </div>

                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment" value="cash">
                                            <label class="form-check-label">Card</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment" value="wallet">
                                            <label class="form-check-label">Wallet</label>
                                            </div>
                                        </div>
                            </div>  
                            
                        </div>
                        </div>
                        <div class="col sumorder">
                            <div class="row">
                                <div class="col">Tổng tiền hàng</div>
                                <div class="col">${parseInt(order.subtotal).format()}đ</div>
                            </div>
                            <div class="row">
                                <div class="col">Tổng tiền phí vận chuyển</div>
                                <div class="col">${parseInt(order.shipping).format()}đ</div>
                            </div>
                            <div class="row">
                                <div class="col">Giảm</div>
                                <div class="col">${parseInt(order.discount).format()}đ</div>
                            </div>
                            <div class="row">
                                <div class="col"><h5>Tổng thanh toán<h5></div>
                                <div class="col">${parseInt(order.total-order.discount+order.shipping).format()}đ</div>
                            </div>
                </div>
                
                `
                resolve('resolved');
            });
        });   
          
    }
    async function displaySale(arr) {
        return new Promise(resolve => { 
            setTimeout(function() {
                var sale = arr;
                var htmlCardShipping="";
                var htmlCardEvent="";
                sale.map(saledetail => {
                    if(saledetail.type==1){
                        htmlCardShipping+= `
                        <label class="item col labl" id="radiobox">
                            <div class="row" style="align-items:center!important;box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;background: linear-gradient(45deg, brown, transparent);border-radius: 12px;">
                                
                                <div class="col-3 checkRadio"> 
                                    <input class="" type="radio" name="shippingCode" value ="${saledetail.id}">
                                    <span><span>
                                </div>
                                <div class="col-4">
                                    <div style="text-align:center">${saledetail.name}</div>
                                </div>
                                <div class="col-5">
                                    <div class="row">
                                    <span style="font-size:10px">Thời hạn</span>
                                    <span style="font-size:20px">${saledetail.startdate} - ${saledetail.enddate}</span>
                                    </div>
                    
                                    <div class="row">
                                    <span style="font-size:10px">Đơn tối thiểu</span>
                                    <span style="font-size:20px">${parseInt(saledetail.minorder).format()}đ</span>
                                    </div>
                                </div>  
                            </div>                   
                        </label>
                        ` 

                    }
                    else if(saledetail.type==2){
                        htmlCardEvent+= `
                        <label class="item col labl" id="radiobox">
                            <div class="row" style="align-items:center!important;box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;background: linear-gradient(45deg,cornsilk, cornflowerblue);border-radius: 12px;">
                                
                                <div class="col-3 checkRadio"> 
                                    <input class="" type="radio" name="eventCode" value ="${saledetail.id}">
                                    <span><span>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div style="text-align:center">${saledetail.name}</div>
                                    </div>
                                    <div class="row">
                                        <div style="text-align:center;font-size:20px;color:red">Giảm ${saledetail.discount}%</div>
                                    </div>
                                    <div class="row">
                                        <div style="text-align:center;font-size:20px;color:red">Còn ${saledetail.quantity}</div>
                                    </div>
                
                                </div>
                                <div class="col-5">
                                    <div class="row">
                                    <span style="font-size:10px">Thời hạn</span>
                                    <span style="font-size:20px">${saledetail.startdate} - ${saledetail.enddate}</span>
                                    </div>
                    
                                    <div class="row">
                                    <span style="font-size:10px">Đơn tối thiểu</span>
                                    <span style="font-size:20px">${parseInt(saledetail.minorder).format()}đ</span>
                                    </div>
                                    <div class="row">
                                    <span style="font-size:10px">Giảm tối đa</span>
                                    <span style="font-size:20px">${parseInt(saledetail.maxsale).format()}đ</span>
                                    </div>
                                </div>  
                            </div>                   
                        </label>
                        ` 
                    } 
                }).join('');

                cardSaleShipping.innerHTML = htmlCardShipping;
                cardSaleEvent.innerHTML = htmlCardEvent;
                resolve('resolved');
            });
        });   
          
    }
    $(document).on('click', '.cart__close', function (e) {
        var html = $(this);
        var id = $(this).attr('data_id');
        $.ajax({
			url: '<?php echo constant('URL') ?>cartdetail/delete/'+id,
            type: 'post',
			success: function(data) {
                sweetAlertCRUD(data,"Delete");
                if(data==1){
                    html.closest("tr").remove();
                    removeArr(id);
                    calculateOrder();
                }
                
			}
		});

    });
    $("#checkAll").click(function () {
        total=0;
        subtotal=0;
        discount=0;
        $('input:checkbox').not(this).prop('checked', this.checked);
        $("input[type='checkbox']:disabled").prop("checked",false);
        if($(this).prop("checked") == true){
            checkboxList = cartdetailAll;
            
            $('input.checkboxList').each(function () {
                (async () => {
                    $(".cart__total").children().hide();
                    spinnerCart.style.display = "block";
                    await checkAllOrder($(this));
                    await displayOrder(subtotal,discount,total);
                    $(".cart__total").children().show();
                    spinnerCart.style.display = "none";
                })();
            });
            
        }
        else if($(this).prop("checked") == false){
            checkboxList = [];
            calculateOrder();
        }
    });

    $(document).on('click', '.checkboxList', function (e) {
        total=0;
        subtotal=0;
        if($(this).prop("checked") == true){
            checkboxList.push($(this).val())
            calculateOrder($(this));
        }
        else if($(this).prop("checked") == false){
            
            $("#checkAll").prop("checked",false)
            removeArr($(this).val())
            calculateOrder();
        }
        
    }); 
    async function displayOrder(subtotal,discount,total){
        return new Promise(resolve => {
            setTimeout(function () {
                $("#subtotal").html(parseInt(subtotal).format()+"đ");
                $("#discount").html(parseInt(discount).format()+"đ");
                $("#total").html(parseInt(total).format()+"đ");
                order.subtotal=subtotal;
                order.discount=discount;
                order.total=total;
                resolve('resolved')
            });
        });
    }
    async function checkAllOrder(e){
        return new Promise(resolve => {
            setTimeout(function () {
                var currentdate = new Date();
                (async () => {
                    var cart = await cartdetail();

                        cart.map(cartdetail => {
                            if(e.val()==cartdetail.productID.id){
                                if(cartdetail.productID.quantity>0 && parseInt(cartdetail.quantity)<=parseInt(cartdetail.productID.quantity)){
                                    var enddate = new Date(cartdetail.productID.saleID.enddate);
                                    var startdate = new Date(cartdetail.productID.saleID.startdate);
                                    var salePrice = 0;
                                    if(cartdetail.productID.saleID.discount>0 && (startdate<=currentdate && currentdate<=enddate )){  
                                        salePrice = parseInt(cartdetail.productID.price) - parseInt(cartdetail.productID.price*cartdetail.productID.saleID.discount/100);
                                    }
                                    subtotal+= cartdetail.quantity*salePrice;
                                    console.log(subtotal)
                                    e.prop("checked",true);
                                }
                                else{
                                    removeArr(cartdetail.productID.id)
                                    e.prop("checked",false);
                                    sweetAlertCRUD(0,"Số lượng đặt hàng vượt quá số lượng hiện tại");
                                } 
                            }
                        })
                        total = subtotal-discount;
                        displayOrder(subtotal,discount,total);
                })();
                resolve('resolved');
            },1000);
        });
        
    }
    function calculateOrder(e){
        var currentdate = new Date();
        var total=0;
        var subtotal=0;
        var discount = 0;
        (async () => {
            var cart = await cartdetail();
            for(let i=0;i<checkboxList.length;i++){
                cart.map(cartdetail => {
                    if(checkboxList[i] == cartdetail.productID.id){
                        if(cartdetail.productID.quantity>0 && parseInt(cartdetail.quantity)<=parseInt(cartdetail.productID.quantity)){
                            var enddate = new Date(cartdetail.productID.saleID.enddate);
                            var startdate = new Date(cartdetail.productID.saleID.startdate);
                            var salePrice = 0;
                            if(cartdetail.productID.saleID.discount>0 && (startdate<=currentdate && currentdate<=enddate )){  
                                salePrice = parseInt(cartdetail.productID.price) - parseInt(cartdetail.productID.price*cartdetail.productID.saleID.discount/100);
                            }
                            subtotal+= cartdetail.quantity*salePrice;
                        }
                        else{
                            removeArr(cartdetail.productID.id)
                            e.prop("checked",false);
                            sweetAlertCRUD(0,"Số lượng đặt hàng vượt quá số lượng hiện tại");
                        } 
                    }
                    
                    
                })
            }
            total = subtotal-discount;
            displayOrder(subtotal,discount,total);

        })();
        
    }
    function removeArr(id){
        for(let i=0;i<checkboxList.length;i++){
            if(checkboxList[i]==id){
                checkboxList.splice(i, 1);
                return 1;
            }
        }
        return 0;
    }
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
                    items: 2
                },
                960: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        })
    }
    function updateNumber(e,i){
        var row = e.parentNode.parentNode.parentNode.rowIndex;
        var c5 = document.getElementById("carttable").rows[row].cells.item(5);
        // price = c4.childNodes[0].nextSibling.childNodes[1].inne;

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
        var productSelector = e.parentNode.querySelector('input[type=number]');
        var productID = productSelector.getAttribute('data_id');
        $.ajax({
			url: '<?php echo constant('URL') ?>cartdetail/update/'+productID,
            type: 'post',
            data:{
                "quantity":number
            },
			success: function(data) {
				sweetAlertCRUD(data,"Update");
                if(data!=1){  
                    sweetAlertCRUD(0,"Số lượng chỉ còn "+product(productID).quantity);
                    
                }
			}
		});

        cartdetail().then(function(result) {
            // c5.innerHTML = 
            var cartdetail = result[row-1]
            var currentdate = new Date();
            var enddate = new Date(cartdetail.productID.saleID.enddate);
            var startdate = new Date(cartdetail.productID.saleID.startdate);
            var salePrice = 0;
            if(cartdetail.productID.saleID.discount>0 && (startdate<=currentdate && currentdate<=enddate )){  
                salePrice = parseInt(cartdetail.productID.price) - parseInt(cartdetail.productID.price*cartdetail.productID.saleID.discount/100);
            }

            var total = cartdetail.quantity*salePrice;
            c5.innerHTML = parseInt(total).format()+"đ";
            
            
        });
        calculateOrder();
        
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
            const cart = await cartdetail();
            const sale = await fetchProduct('<?php echo constant('URL') ?>sale/getall');
            await display(cart);
            await displaySale(sale);
            spinner.setAttribute("hidden", "");
            slider();
    })();
</script>

<!-- Shopping Cart Section End -->