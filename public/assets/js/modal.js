function openModalAuthor(e){
    $getCurrentUrl = 'http://localhost/Bookstore/Author';
    
    //update model
    const x = document.forms["formUpdate"];
    x.elements[0].value= e.name;
    x.elements[1].value= e.detail;
    
    //action
    $formUpdate = document.querySelector("#formUpdate");
    $formDelete = document.querySelector("#formDelete");
    $formAdd = document.querySelector("#formAdd");
    $formAdd.action =  $getCurrentUrl+"/add";
    $formUpdate.action = $getCurrentUrl+"/update/"+e.id;
    $formDelete.action = $getCurrentUrl+"/delete/"+e.id;
    
} 
function openModalCategory(e){
    $getCurrentUrl = 'http://localhost/Bookstore/Category';
    
    //update model
    const x = document.forms["formUpdate"];
    x.elements[0].value= e.name;
    x.elements[1].value= e.detail;
    
    //action
    $formUpdate = document.querySelector("#formUpdate");
    $formDelete = document.querySelector("#formDelete");
    $formAdd = document.querySelector("#formAdd");
    $formAdd.action =  $getCurrentUrl+"/add";
    $formUpdate.action = $getCurrentUrl+"/update/"+e.id;
    $formDelete.action = $getCurrentUrl+"/delete/"+e.id;
    
}    

function openModalCompany(e){
    $getCurrentUrl = 'http://localhost/Bookstore/Company';
    
    //update model
    const x = document.forms["formUpdate"];
    x.elements[0].value= e.name;
    x.elements[1].value= e.email;
    x.elements[2].value= e.address;
    
    //action
    $formUpdate = document.querySelector("#formUpdate");
    $formDelete = document.querySelector("#formDelete");
    $formAdd = document.querySelector("#formAdd");
    $formAdd.action =  $getCurrentUrl+"/add";
    $formUpdate.action = $getCurrentUrl+"/update/"+e.id;
    $formDelete.action = $getCurrentUrl+"/delete/"+e.id;
    
}    
function openModalCustomer(e) {
    $getCurrentUrl = 'http://localhost/Bookstore/Customer';

    //update model
    const x = document.forms["formUpdate"];
    x.elements[0].value = e.name;
    x.elements[1].value = e.phone;
    x.elements[2].value = e.address;
    x.elements[3].value = e.email;
    x.elements[4].value = e.birth;

    //action
    $formUpdate = document.querySelector("#formUpdate");
    $formDelete = document.querySelector("#formDelete");
    $formAdd = document.querySelector("#formAdd");
    $formAdd.action = $getCurrentUrl + "/add";
    $formUpdate.action = $getCurrentUrl + "/update/" + e.id;
    $formDelete.action = $getCurrentUrl + "/delete/" + e.id;

}
function openModalEmployee(e) {
    $getCurrentUrl = 'http://localhost/Bookstore/Employee';

    //update model
    const x = document.forms["formUpdate"];
    x.elements[0].value = e.name;
    x.elements[1].value = e.phone;
    x.elements[2].value = e.address;
    x.elements[3].value = e.email;
    x.elements[4].value = e.birth;
    x.elements[5].value = e.auth;
    x.elements[6].value = e.joindate;

    //action
    $formUpdate = document.querySelector("#formUpdate");
    $formDelete = document.querySelector("#formDelete");
    $formAdd = document.querySelector("#formAdd");
    $formAdd.action = $getCurrentUrl + "/add";
    $formUpdate.action = $getCurrentUrl + "/update/" + e.id;
    $formDelete.action = $getCurrentUrl + "/delete/" + e.id;

}
function openModalRole(e){
    $getCurrentUrl = 'http://localhost/Bookstore/role';
    
    //update model
    const x = document.forms["formUpdate"];
    x.elements[0].value= e.name;
    x.elements[1].value= e.detail;
    
    //action
    $formUpdate = document.querySelector("#formUpdate");
    $formDelete = document.querySelector("#formDelete");
    $formAdd = document.querySelector("#formAdd");
    $formAdd.action =  $getCurrentUrl+"/add";
    $formUpdate.action = $getCurrentUrl+"/update/"+e.id;
    $formDelete.action = $getCurrentUrl+"/delete/"+e.id;
    
}  
function openModalUser(e){

    $getCurrentUrl = 'http://localhost/Bookstore/user';
    //update model
    const x = document.forms["formUpdate"];
    x.elements[0].value= e.password;
    
    //action
    $formUpdate = document.querySelector("#formUpdate");
    $formDelete = document.querySelector("#formDelete");
    
    
    
    $formAdd = document.querySelector("#formAdd");
    $formAdd.action =  $getCurrentUrl+"/add";
    $formUpdate.action = $getCurrentUrl+"/update/"+e.username;
    $formDelete.action = $getCurrentUrl+"/delete/"+e.username;
    
    }  
    function openRoleModal(e){
        $getCurrentUrl = 'http://localhost/Bookstore/user';
    const x = document.forms["formRoleUpdate"];
    x.elements[0].value= e.username;   
    
    $formRoleUpdate = document.querySelector("#formRoleUpdate");
    $formRoleUpdate.action = $getCurrentUrl+"/updateRole/"+e.username;
    
    document.getElementById('roleSelect').value = e.roleID;
}  
function openModalProduct(e) {
    $getCurrentUrl = 'http://localhost/Bookstore/product';

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