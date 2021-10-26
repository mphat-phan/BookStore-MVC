<div id="content" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý sản phẩm</li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product table</h3>

                            <button type="button" onclick="openModal('')" href="#"
                                class="btn btn-primary btn-sm float-right" role="button" data-toggle="modal"
                                data-target="#AddModal">Add</button>

                            <button type="button" onclick="" href="#" class="btn btn-success btn-sm float-right mr-1"
                                role="button" data-toggle="modal" data-target="#">Import</button>
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="producttable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Company</th>
                                        <th>Author</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>PageNumber</th>
                                        <th>Image</th>
                                        <th>#</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //print_r($data['Author']);
                                    foreach($data['Product'] as $row){
        
                                    ?>
                                    <tr>
                                        <td><?=$row['id']?></td>
                                        <td><?=$row['name']?></td>
                                        <td>
                                        <?php
                                        foreach($data['Category'] as $category){
                                            if($category['id']==$row['category']){
                                                echo $category['name'];
                                            }
                                        }
                                        ?>
                                        </td>
                                        <td>
                                        <?php
                                        foreach($data['Company'] as $company){
                                            if($company['id']==$row['company']){
                                                echo $company['name'];
                                            }
                                        }
                                        ?>
                                        </td>
                                        <td>
                                        <?php
                                        foreach($data['Author'] as $author){
                                            if($author['id']==$row['author']){
                                                echo $author['name'];
                                            }
                                        }
                                        ?>
                                        </td>
                                        <td><?=$row['description']?></td>
                                        <td><?=$row['quantity']?></td>
                                        <td><?=$row['price']?></td>
                                        <td><?=$row['pagenumber']?></td>
                                        <td>
                                            <img class="card-img-top" src="<?php echo constant('URL') ?>public/assets/images/<?=$row['image']?>.jpg"/>
                                        </td>
                                        <td><a onclick='openModal(<?php echo json_encode($row)?>)' href="#"
                                                class="btn btn-warning btn-sm" role="button" data-toggle="modal"
                                                data-target="#UpdateModal">Update</a>
                                            <a onclick='openModal(<?php echo json_encode($row)?>)' href="#"
                                                class="btn btn-danger btn-sm" role="button" data-toggle="modal"
                                                data-target="#DeleteModal">Delete</a>
                                        </td>

                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<div class="modal" id="AddModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formAdd" action="" method="post" enctype="multipart/form-data">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input name="txtName" type="text" class="form-control" id="txtName" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="sel1">Product Category</label>
                            <select class="form-control" name="categorySelect">
                                <?php
                                    foreach($data['Category'] as $row){
        
                                    ?>
                                <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                <?php
                                    }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel2">Product Company</label>
                            <select class="form-control" name="companySelect">
                                <?php
                                    foreach($data['Company'] as $row){
        
                                    ?>
                                <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel3">Product Author</label>
                            <select class="form-control" name="authorSelect">
                                <?php
                                    foreach($data['Author'] as $row){
        
                                ?>
                                <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Description</label>
                            <textarea name="txtDescription" class="form-control" id="" cols="30" rows="10"></textarea>
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Quantity</label>
                            <input name='txtQuantity' type="number" min="0" class="form-control" id="txtQuantity"
                                placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input name='txtPrice' type="number" min="0" class="form-control" id="txtPrice" placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Page Number</label>
                            <input name='txtPageNumber' type="number" min="0" class="form-control" id="txtPageNumber"
                                placeholder="Enter ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Image</label>
                            <input type="file" name="Image" id="Image" required />
                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button id='addbtn' name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

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
<div class="modal" id="UpdateModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="formUpdate" action="" method="POST" enctype="multipart/form-data">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input name="txtName" type="text" class="form-control" id="" placeholder="Enter " require>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Product Category</label>
                            <select class="form-control" name="categorySelect">
                                <?php
                                    foreach($data['Category'] as $row){
        
                                    ?>
                                <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                <?php
                                    }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel2">Product Company</label>
                            <select class="form-control" name="companySelect">
                                <?php
                                    foreach($data['Company'] as $row){
        
                                    ?>
                                <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel3">Product Author</label>
                            <select class="form-control" name="authorSelect">
                                <?php
                                    foreach($data['Author'] as $row){
        
                                ?>
                                <option value="<?=$row['id']?>"><?=$row['name']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Description</label>
                            <textarea name="txtDescription" class="form-control" id="" cols="30" rows="10"></textarea>
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Quantity</label>
                            <input name='txtQuantity' type="text" class="form-control" id="" placeholder="Enter "
                                require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input name='txtPrice' type="text" class="form-control" id="" placeholder="Enter " require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Page Number</label>
                            <input name='txtPageNumber' type="text" class="form-control" id="" placeholder="Enter "
                                require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Image</label>
                            <img id="imageChoose" class="card-img-top" src=""/>
                            <input accept="image/png, image/jpeg" type="file" name="ImageInput" id="ImageInput" />
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
<script>
    function openModal(e) {
        $getCurrentUrl = 'http://localhost/Bookstore/<?=$data['Page']?>';

        //update model
        const x = document.forms["formUpdate"];
        x.elements[0].value = e.name;
        x.elements[1].value = e.category;
        x.elements[2].value = e.company;
        x.elements[3].value = e.author;
        x.elements[4].value = e.description;
        x.elements[5].value = e.quantity;
        x.elements[6].value = e.price;
        x.elements[7].value = e.pagenumber;
        //action
        $formUpdate = document.querySelector("#formUpdate");
        $formDelete = document.querySelector("#formDelete");
        $formAdd = document.querySelector("#formAdd");
        $formAdd.action = $getCurrentUrl + "/add";
        $formUpdate.action = $getCurrentUrl + "/update/" + e.id;
        $formDelete.action = $getCurrentUrl + "/delete/" + e.id;
    
        document.getElementById('categorySelect').value = e.category;
        document.getElementById('companySelect').value = e.company;
        document.getElementById('authorSelect').value = e.author;
        
        document.getElementById('imageChoose').src = "http://localhost/Bookstore/public/assets/images/"+e.image+".jpg";


    }
    $ImageInput = document.querySelector("#ImageInput");
    $ImageInput.addEventListener("change",function(){

        const [file] = ImageInput.files
        if (file) {
            
            if (!ImageInput.files[0].name.match(/.(jpg|jpeg|png|gif)$/i)){
                alert('Not an image');
            }

            else{
                imageChoose.src = URL.createObjectURL(file)
            }
            
        }
    });
    
</script>