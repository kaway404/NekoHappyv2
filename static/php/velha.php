<?php
require '/database.php';
 require '/config.php';
?>

<?php
if(isset($_GET['onde'])){
$onde = $_GET['onde'];
?>


<?php
if($onde == 1){
?>
<script type="text/javascript">
$(function(){
    var quem = $("#what").text();
    var jogadas = parseInt(document.getElementById('jogadas').value, 10);
    var n2 = 1;
    if(jogadas == 0){
    if(quem == "X"){
    	$("#e1").text("X");
    	$("#what").text("O");
       document.getElementById('jogadas').value = jogadas + n2;
    }
    }
});

</script>
<?php }?>

<?php } ?>


<script>
    $(function(){
    var quem = $("#what").text(); 
     var jogadas = parseInt(document.getElementById('jogadas').value, 10);
    if(jogadas == 1){
    if(quem == "O"){
        $("#e2").text("O");
        $("#what").text("X");
        document.getElementById('jogadas').value = 2;
    }
    }

    if(jogadas == 2){
    if(quem == "O"){
        $("#e2").text("O");
        $("#what").text("X");
        document.getElementById('jogadas').value = 3;
    }
    }


    });
</script>