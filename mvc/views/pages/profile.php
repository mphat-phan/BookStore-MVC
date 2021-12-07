<div class="col header">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info">
            <h3 class="widget-user-username"><span id="showusername"></span></h3>
            <h6 class="widget-user-desc">Welcome To Our Shop</h6>
        </div>
        <div class="widget-user-image" id="showavatar">            
        </div>
        <div class="card-footer">
            <div class="row ">
                <ul class="nav nav-tabs">
                    <li class="nav-item col-sm-2">
                        <a class="nav-link tabclick active" data-toggle="tab" data-name="confirm" href="#confirm">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Chờ xác nhận</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link tabclick" data-toggle="tab" data-name="waiting" href="#waiting">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Đang giao</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link tabclick" data-toggle="tab" href="#rating">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Đánh giá</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link tabclick" data-toggle="tab" href="#allorder">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">Lịch sử đơn hàng</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item col-sm-2">
                        <a class="nav-link" data-toggle="tab" href="#setting">
                            <div class="description-block">
                                <h5 class="description-header"><i class="fas fa-cog"></i></h5>
                                <span class="description-text">Setting</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <div class="tab-content">
        <div id="confirm" class=" tab-pane active"><br>
            <table id="ordertableconfirm" class="table table-striped dt-responsive nowrap display">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>

                </tfoot>
            </table>
        </div>    
        <div id="waiting" class=" tab-pane fade"><br>
            <table id="ordertablewaiting" class="table table-striped dt-responsive nowrap display">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>

                </tfoot>
            </table>
        </div>
        <div id="rating" class=" tab-pane fade"><br>
            <div class="container">
                <div class="col">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#btnnorating" role="tab" aria-controls="pills-home" aria-selected="true">Chưa đánh giá</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#btnrated" role="tab" aria-controls="pills-profile" aria-selected="false">Đã đánh giá</a>
                        </li>
                    </ul>
                </div>
                <div class="row cardrating">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="btnnorating" role="tabpanel" aria-labelledby="pills-home-tab"></div>
                        <div class="tab-pane fade " id="btnrated" role="tabpanel" aria-labelledby="pills-home-tab"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="allorder" class=" tab-pane fade"><br>
            <table id="ordertable" class="table table-striped dt-responsive nowrap display">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>SubTotal</th>
                        <th>Shipping fee</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>#</th>
                        <th>Detail</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div id="setting" class="tab-pane fade">      
        </div>
    </div>    
</div>
<div class="modal" id="DeleteModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Delete</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formDelete" action="" method="POST">

                    <div class="card-body">
                        <div class="form-check">
                            <input name="checkDelete" id="checkDelete" type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="ConfirmStatus">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Status</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formUpdate" action="" method="POST">

                    <div class="card-body">
                        <div class="form-check">
                            <input name="checkStatus" id="checkDelete" type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">Xác nhận đơn hàng</label>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="Info">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Info</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formInfo" action="" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input name="txtName" type="text" class="form-control " placeholder="Enter " disabled>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="InfoOrder">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Info</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Order Detail table</h3>

                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="orderdetailtable" class="table table-striped dt-responsive nowrap display">
                            <thead>
                                <tr>
                                    <th>OrderID</th>
                                    <th>ProductID</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>OrderID</th>
                                    <th>ProductID</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                </tr>

                            </tfoot>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="RatingModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Rating</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card">
                    <!-- /.card-header -->
                    
                    <div class="card-body ratingstar">
                        <form id="postRating" action="" method="POST">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="ratingstar">
                                        <div class="container1">
                                            <div class="feedback">
                                                <div class="rating">
                                                <input type="radio" name="rating" id="rating-5" value="5">
                                                <label for="rating-5"></label>
                                                <input type="radio" name="rating" id="rating-4" value="4">
                                                <label for="rating-4"></label>
                                                <input type="radio" name="rating" id="rating-3" value="3">
                                                <label for="rating-3"></label>
                                                <input type="radio" name="rating" id="rating-2" value="2">
                                                <label for="rating-2"></label>
                                                <input type="radio" name="rating" id="rating-1" value="1">
                                                <label for="rating-1"></label>
                                                <div class="emoji-wrapper">
                                                    <div class="emoji">
                                                    <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
                                                    <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
                                                    <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                    <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                    <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
                                                    <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                    <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                    <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
                                                    </svg>
                                                    <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
                                                    <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
                                                    <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
                                                    <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
                                                    <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
                                                    <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
                                                    <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
                                                    <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
                                                    <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
                                                    </svg>
                                                    <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
                                                    <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
                                                    <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                                                    <g fill="#fff">
                                                        <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
                                                        <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                                                    </g>
                                                    <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                                                    <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
                                                    </svg>
                                                    <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                        <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
                                                        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                        <g fill="#fff">
                                                        <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
                                                        <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
                                                        </g>
                                                        <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                        <g fill="#fff">
                                                        <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
                                                        <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
                                                        </g>
                                                        <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                        <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
                                                    </svg>
                                                    <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                    <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
                                                    <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                    <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                    <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
                                                    <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                    <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
                                                    <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
                                                    </svg>
                                                    <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g fill="#ffd93b">
                                                        <circle cx="256" cy="256" r="256"/>
                                                        <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                                                    </g>
                                                    <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
                                                    <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
                                                    <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
                                                    <g fill="#38c0dc">
                                                        <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                                                    </g>
                                                    <g fill="#d23f77">
                                                        <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                                                    </g>
                                                    <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
                                                    <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
                                                    <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
                                                    </svg>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group p-4">
                                        <label for="exampleFormControlTextarea1">Comment</label>
                                        <textarea class="form-control" name="txtComment" id="txtComment" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>      
                            <div class="modal-footer">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="ViewRatingModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Rating</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card">
                    <!-- /.card-header -->
                    
                    <div class="card-body ratingstar">
                        <form id="postRating" action="" method="POST">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="ratingstar">
                                        <div class="container1">
                                            <div class="feedback">
                                                <div class="rating">
                                                <input type="radio" name="rating" id="rating-5" value="5" disabled>
                                                <label for="rating-5"></label>
                                                <input type="radio" name="rating" id="rating-4" value="4" disabled>
                                                <label for="rating-4"></label>
                                                <input type="radio" name="rating" id="rating-3" value="3" disabled>
                                                <label for="rating-3"></label>
                                                <input type="radio" name="rating" id="rating-2" value="2" disabled>
                                                <label for="rating-2"></label>
                                                <input type="radio" name="rating" id="rating-1" value="1" disabled>
                                                <label for="rating-1"></label>
                                                <div class="emoji-wrapper">
                                                    <div class="emoji">
                                                    <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
                                                    <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
                                                    <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                    <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                    <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
                                                    <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                    <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                    <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
                                                    </svg>
                                                    <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
                                                    <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
                                                    <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
                                                    <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
                                                    <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
                                                    <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
                                                    <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
                                                    <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
                                                    <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
                                                    </svg>
                                                    <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
                                                    <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
                                                    <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                                                    <g fill="#fff">
                                                        <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
                                                        <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                                                    </g>
                                                    <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                                                    <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
                                                    </svg>
                                                    <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                        <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
                                                        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                        <g fill="#fff">
                                                        <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
                                                        <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
                                                        </g>
                                                        <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                        <g fill="#fff">
                                                        <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
                                                        <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
                                                        </g>
                                                        <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                        <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
                                                    </svg>
                                                    <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                    <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                    <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
                                                    <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                    <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                    <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
                                                    <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                    <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
                                                    <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
                                                    </svg>
                                                    <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <g fill="#ffd93b">
                                                        <circle cx="256" cy="256" r="256"/>
                                                        <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                                                    </g>
                                                    <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
                                                    <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
                                                    <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
                                                    <g fill="#38c0dc">
                                                        <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                                                    </g>
                                                    <g fill="#d23f77">
                                                        <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                                                    </g>
                                                    <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
                                                    <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
                                                    <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
                                                    </svg>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group p-4">
                                        <label for="exampleFormControlTextarea1">Comment</label>
                                        <textarea class="form-control" name="txtComment" id="txtComment" rows="3" disabled></textarea>
                                    </div>
                                </div>
                            </div>      
                        
                        </form>
                    </div>
                    
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
    </div>
</div>
<script src="<?php echo constant('URL') ?>public/assets/plugins/jquery/jquery.min.js"></script>
<script>
    const cardrating = document.querySelector('.cardrating');
    const btnnorating = document.querySelector('#btnnorating');
    const btnrated = document.querySelector('#btnrated');
    Number.prototype.format = function(n, x) {
        var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&.');
    };  
    $(document).ready(function () {
        order = $('#ordertable').DataTable({
                "ajax": function (d, cb) {
                    // fetch('<?php //echo constant('URL') ?>order/getbyuser')
                    //     .then(response => response.json())
                    //     .then(data => cb(data));
                    var data = null;
                    $.ajax({
                        url: '<?php echo constant('URL') ?>order/getbyuser',
                        type: 'post',
                        async: false,
                        global: false,
                        dataType: 'json',
                        success: function(data) {
                            cb(data) = data;                        
                        }
                    });
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "date"
                    },
                    {
                        "data": "subtotal"
                    },
                    {
                        "data": "shippingfee"
                    },
                    {
                        "data": "discount"
                    },
                    {
                        "data": "total"
                    },
                    {
                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;
                            var status = full.status;
                            if (status == 0) {
                                return (
                                    "<button onclick='' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Chưa xác nhận" +
                                    "</button>"
                                );
                            }
                            else if (status == 1)
                            {
                                return (
                                    "<button onclick='' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Đã xác nhận" +
                                    "</button>"
                                );
                            }
                            else if (status == 2)
                            {
                                return (
                                    "<button onclick='' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Đã thanh toán" +
                                    "</button>"
                                );
                            }
                            else if (status == 3)
                            {
                                return (
                                    "<button onclick='' class='btn btn-warning btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Đang giao" +
                                    "</button>"
                                );
                            }
                            else if (status == 4)
                            {
                                return (
                                    "<button onclick='' class='btn btn-success btn-sm' role='button' data-toggle='modal' data-target=''>" +
                                    "Đã giao" +
                                    "</button>"
                                );
                            }
                            else
                            {
                                return (
                                "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                id + "'>" +
                                "Đã hủy" +
                                "</button>"
                                );    
                            }
                            return (
                                "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                id + "'>" +
                                "" +
                                "</button>"
                            );

                        }
                    },
                    {

                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;
                            var status = full.status;
                            if (status == 0) {
                                return (
                                    "<button onclick='openModal(this)' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target='#DeleteModal' data_id='" +
                                    id + "'>" +
                                    "Hủy đơn hàng" +
                                    "</button>"
                                );
                            }                            
                            return (
                                "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                id + "'>" +
                                "Hủy đơn hàng" +
                                "</button>"
                            );

                        }
                    },
                    {

                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;

                            return (
                                "<button onclick='openDetail(this)' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target='#InfoOrder' data_id='" +
                                id + "'>" +
                                "Show Detail Order" +
                                "</button>"
                            );

                        }
                    }
                ],

            });        
        function ordertable(action, status) {                    
            $('#ordertable'+action).DataTable({
                
                "ajax": function (d, cb) {
                    // fetch('<?php //echo constant('URL') ?>order/getbyuser')
                    //     .then(response => response.json())
                    //     .then(data => cb(data));
                    var data = null;
                    $.ajax({
                        url: '<?php echo constant('URL') ?>order/getOrderByStatus/'+status,
                        type: 'post',
                        async: false,
                        global: false,
                        dataType: 'json',
                        success: function(data) {
            
                            cb(data) = data;                        
                        }
                    });
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "date"
                    },
                    {
                        "data": "subtotal"
                    },
                    {
                        "data": "shippingfee"
                    },
                    {
                        "data": "discount"
                    },
                    {
                        "data": "total"
                    },
                    {

                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;
                            var status = full.status;
                            if (status == 0) {
                                return (
                                    "<button onclick='openModal(this)' class='btn btn-danger btn-sm' role='button' data-toggle='modal' data-target='#DeleteModal' data_id='" +
                                    id + "'>" +
                                    "Hủy đơn hàng" +
                                    "</button>"
                                );
                            }
                            else if (status == 3)
                            {
                                return (
                                    "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                    id + "'>" +
                                    "Hủy đơn hàng" +
                                    "</button>"
                                );
                            }
                            return (
                                "<button onclick='' class='btn btn-secondary btn-sm' role='button' data-toggle='modal' data-target='' data_id='" +
                                id + "'>" +
                                "Hủy đơn hàng" +
                                "</button>"
                            );

                        }
                    },
                    {

                        "data": null,
                        "render": function (data, type, full) {
                            var id = full.id;

                            return (
                                "<button onclick='openDetail(this)' class='btn btn-primary btn-sm' role='button' data-toggle='modal' data-target='#InfoOrder' data_id='" +
                                id + "'>" +
                                "Show Detail Order" +
                                "</button>"
                            );

                        }
                    }
                ],

            });
        }                            
        ordertable('confirm',0);
        ordertable('waiting',3);
        // $(".tabclick").on("click", function() {
        //     var name = $(this).attr("data-name");
        //     if(name == 'confirm')
        //     {
        //         ordertable(name,0);
        //     }
        //     else if(name == 'waiting')
        //     {
        //         ordertable(name,3);
        //     }
        // }); 
        function settingprofile() {
            $.ajax({
                type: 'post',
                url: '<?php echo constant('URL') ?>home/getUser',
                data: {username:username},
                success: function (data) {
                    document.getElementById("setting").innerHTML = `<div class="container bootstrap snippet">
                                    <div class="row">
                                        <div class="col-sm-10 ml-4"><h1>`+ JSON.parse(data).data[0].username +`</h1></div>    
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"><!--left col-->        
                                            <div class="text-center">
                                                <img src="<?php echo constant('URL') ?>public/assets/dist/img/`+ JSON.parse(data).data[0].image +`" class="avatar img-circle img-thumbnail" alt="avatar">                                                
                                                <input type="file" class="text-center center-block file-upload">                                                
                                            </div></hr><br>                         
                                        </div>
                                        <div class="col-sm-5">                                    
                                            <hr>
                                            <form class="form" action="" method="post" id="profilesetting">
                                                <div class="form-group">
                                                    <label for="Changepassword"><h2>Profile setting</h2></label>
                                                </div>                      
                                                <div class="form-group">                        
                                                    <div class="col-xs-3">
                                                        <label for="last_name"><h4>Full Name</h4></label>
                                                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full name" value="`+ JSON.parse(data).data[0].name +`" title="enter your name if any.">
                                                    </div>
                                                </div>          
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="phone"><h4>Phone</h4></label>
                                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="`+ JSON.parse(data).data[0].phone +`" title="enter your phone number if any.">
                                                        </div>
                                                </div>
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="date"><h4>Birth</h4></label>
                                                        <input type="date" class="form-control" name="birth" id="birth" placeholder="Enter birth" value="`+ JSON.parse(data).data[0].birth +`" title="enter your date">
                                                    </div>
                                                </div>                                
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="email"><h4>Email</h4></label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="your@gmail.com" value="`+ JSON.parse(data).data[0].email +`" title="enter your email.">
                                                    </div>
                                                </div>
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="address"><h4>Location</h4></label>
                                                        <input type="address" class="form-control" name="address" id="location" placeholder="somewhere" value="`+ JSON.parse(data).data[0].address +`" title="enter a location">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                            <br>
                                                            <button class="btn btn-lg btn-success" id="save" type="button"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>                               	
                                                        </div>
                                                </div>                      
                                            </form>
                                        
                                        <hr>
                                        
                                        </div><!--/tab-pane-->
                                        <div class="col-sm-4">                                    
                                            <hr>
                                            <form class="form" action="" method="post" id="accountsetting">                      
                                                <div class="form-group">
                                                    <label for="Changepassword"><h2>Change Password</h2></label>
                                                </div>
                                                <div id="message"></div>
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="password"><h4>Password</h4></label>
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                                    </div>
                                                </div>
                                                <div class="form-group">                          
                                                    <div class="col-xs-6">
                                                        <label for="password2"><h4>Retype Password</h4></label>
                                                        <input type="password" class="form-control" name="retypepassword" id="password2" placeholder="password2" title="enter your password2.">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                            <br>
                                                            <button class="btn btn-lg btn-success" type="button" id="savepassword"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>                               	
                                                        </div>
                                                </div>
                                            </form>
                                        
                                        <hr>
                                        
                                        </div><!--/tab-pane-->                           
                                    </div><!--/col-9-->
                                </div><!--/row-->`
                }
            })
        }
        $(document).on('click','#save', function () {                    
            var form = $('#profilesetting');                        
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL') ?>home/updateprofile',
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");                    
                }
            });
        });
        $(document).on('click','#savepassword', function () {                    
            var password = $('#password').val();
            var retypepassword = $('#password2').val();
            if(password == retypepassword && (password != '' || retypepassword != ''))
            {
                $.ajax({
                    type: "POST",
                    url: '<?php echo constant('URL') ?>home/UpdatePassword',
                    data: {password:password,retypepassword:retypepassword},
                    success: function (data) {
                        sweetAlertCRUD(data, "Update");                    
                    }
                });                
            }
            else if(password == '' || retypepassword == '')
            {
                $('#message').html('<p class="alert alert-danger"><strong>Please input</p>');
            }
            else
            {
                $('#message').html('<p class="alert alert-warning"><strong>Your password do not match</p>');
            }
            
        });
        $("#postRating").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            console.log(url);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // serializes the form's elements.
                    success: function (data) {
                        if(data==1){
                            sweetAlertCRUD(data, "Update");
                            (async () => {
                                btnrated.innerHTML= "";
                                const rated = await fetchProduct('<?php echo constant('URL') ?>rating/getByUser');
                                await displayRated(rated);
                            })();
                            $('#RatingModal').modal('hide');
                        }                        
                    }
                });

        })
        $("#formUpdate").submit(function (e) {

            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Update");
                    ordertable.ajax.reload();
                }
            });

        })

        $("#formDelete").submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    sweetAlertCRUD(data, "Delete");
                    ordertable.ajax.reload();

                }
            });

        })
        var username = '<?php echo $username ?>';        
        if(username != '')
        {
            $.ajax({
                type: "POST",
                url: '<?php echo constant('URL')?>home/getUser',
                data: {username:username},
                success: function(data)
                {                                            
                    document.getElementById("showusername").innerHTML = JSON.parse(data).data[0].name; 
                    document.getElementById("showavatar").innerHTML =  '<img class="img-circle elevation-2" src="<?php echo constant('URL') ?>public/assets/dist/img/'+ JSON.parse(data).data[0].image +'" alt="User Avatar">';                   
                }
            });
        }
        settingprofile();
    })
    async function displayRating(arr){
        return new Promise(resolve => { 
            setTimeout(function() {
                if(!arr){
                
                    resolve('resolved');
                }
                var htmlNoRating="";
                var orderdetails = arr;
                const html = orderdetails.map(orderdetail => {
                    var saleprice = orderdetail.subtotal - orderdetail.subtotal*orderdetail.discount/100;
                    var total = saleprice * orderdetail.quantity;
                    if(orderdetail.status==0){
                        htmlNoRating+=`
                        <div class="row align-items-center mb-3 border p-2">
                                <div class="col-2">
                                    <img class="justify-content-center" style="height:100px; width:70px!important;-webkit-border-radius: 13px;-moz-border-radius: 13px;object-fit: cover;overflow: hidden;" src="<?php echo constant('URL') ?>public/assets/images/${orderdetail.image}" alt="">
                                </div> 
                                <div class="col-8">
                                    <div class="row"><h5>${orderdetail.name}<h5></div>
                                    <div class="row">
                                        <div class="col">${parseInt(saleprice).format()}đ</div>
                                        <div class="col">x${orderdetail.quantity}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col">Tổng tiền</div>
                                        <div class="col">${parseInt(total).format()}đ</div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button type="button" onclick='openModalRating(this)' class="btn btn-primary"  data-toggle="modal" data-target="#RatingModal" data_id="${orderdetail.orderID}/${orderdetail.productID}">Đánh giá</button>
                                </div>
                                
                        </div>
                        `;
                    }
                    
                }).join('');
                btnnorating.innerHTML+= htmlNoRating;
                resolve('resolved');
            });
        });   
    }
    async function displayRated(arr){
        return new Promise(resolve => { 
            setTimeout(function() {
                if(!arr){
                    btnrated.innerHTML= "Chưa có đánh giá";
                    resolve('resolved');
                }
                var ratings = arr;
                const html = ratings.map(rating => {
                    return `
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img class="justify-content-center" style="height:100px; width:70px!important;-webkit-border-radius: 13px;-moz-border-radius: 13px;object-fit: cover;overflow: hidden;" src="<?php echo constant('URL')?>public/assets/images/${rating.image}" alt="Photo">
                            </div>
                            <div class="col-6">
                                <h5>${rating.productname}</h5>
                            </div>
                        </div>   
                    </div>
                    <div class="row align-items-center mb-3 border p-2">
                        <div class="card-comment">
                            <div class="comment-text">
                                <span class="username">
                                        ${rating.name}
                                            <span>
                                                <div class="Stars" style="--rating: ${rating.rating};" aria-label="Rating of this product is 2.3 out of 5."></div>
                                            </span>
                                            <span class="text-muted float-right">
                                                ${rating.date}
                                            </span>
                                </span>
                                    <div>
                                    ${rating.comment}
                                    <div>
                                </div>
                        </div>
                    </div>
                    </div>
                    </div>
                        `;
                }).join('');
     
                btnrated.innerHTML+= html;
        
                resolve('resolved');
            });
        });   
    }
    function openDetail(e) {
        id = $(e).attr('data_id');
        orderdetailtable = $('#orderdetailtable').DataTable({
            dom: 'Bfrtip',
            "scrollY": "500px",
            "scrollCollapse": true,
            "ajax": "<?php echo constant('URL') ?>orderdetail/getbyid/" + id,
            "columns": [{
                    "data": "orderID"
                },
                {
                    "data": "productID",
                    "render": function (data, type, row, meta) {
                        return (
                            data.name
                        );
                    }
                },
                {
                    "data": "quantity"
                },
                {
                    "data": "price"
                },
                {
                    "data": "subtotal"
                },
                {
                    "data": "discount"
                },
                {
                    "data": null,
                    "render": function (data, type, full) {
                        var subtotal = full.quantity * full.price;
                        var total = subtotal - subtotal * full.discount / 100;
                        return (
                            total
                        );
                    }
                }

            ],

        });
        orderdetailtable.destroy();

    }

    function openModal(e) {

        $getCurrentUrl = '<?php echo constant('URL') ?>order';
        id = $(e).attr('data_id');

        $formDelete = document.querySelector("#formDelete");
        $formUpdate = document.querySelector("#formUpdate");
        $formInfo = document.querySelector("#formInfo");
        const x = document.forms["formInfo"];


        $.ajax({
            type: "POST",
            url: '<?php echo constant('URL') ?>' + $(e).attr('data') + '/getByUsername/' + id,
            dataType: 'json',
            success: function (data) {
                x.elements[0].value = data['data'][0].id;
                x.elements[1].value = data['data'][0].name;
                x.elements[2].value = data['data'][0].phone;
                x.elements[3].value = data['data'][0].email;
                x.elements[4].value = data['data'][0].address;



            }
        });
        $formDelete.action = $getCurrentUrl + "/delete/" + id;
        $formUpdate.action = $getCurrentUrl + "/update/" + id;
    }
    function openModalRating(e){
        getCurrentUrl = '<?php echo constant('URL') ?>rating';
        id=$(e).attr('data_id');
        postRating = document.querySelector("#postRating");
        postRating.action =  getCurrentUrl+"/add/"+id;
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
            //return data.items || data.results;
    }
    (async () => {
        const order = await fetchProduct('<?php echo constant('URL') ?>orderdetail/getAllByUser');
        const rated = await fetchProduct('<?php echo constant('URL') ?>rating/getByUser');
        await displayRating(order);
        await displayRated(rated);
    })();


</script>