<?php
function inverter($string){
    $letra = '';
    for ($i = mb_strlen($string); $i>=0; $i--) {
        $letra .= mb_substr($string, $i, 1);
    }
    return $letra;
}

?>

<form method = 'post'>
    <label>Insira a string:</label>
    <input name='nome'>
</form>
<?php 
    if (isset($_POST['nome']) and !empty($_POST['nome'])){
        echo inverter($_POST['nome']);
    }
?>