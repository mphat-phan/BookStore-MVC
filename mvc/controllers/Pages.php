<?php
class Pages extends Controller{
    function __construct(){
        $this->view("404");
    }
    
}
?>
<script>
    window.history.pushState("", "404", "404.php");
</script>