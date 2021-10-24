<?php
class Pages extends Controller{
    function __construct(){
        $this->view("pages/404");
        
    }
    
}
?>
<script>
window.history.pushState("", "404", "404.php");
</script>