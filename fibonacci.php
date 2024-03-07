<?php 
   function fibonacci($numero){
       $matriz = [0,1];
    for($i = 1; $i < 10; $i++){
        array_push($matriz, $matriz[$i] + $matriz[$i-1]);
    }

    if(in_array($numero, $matriz)){
        return "Valor esta dentro da sequência";
    }
    return "Valor não esta dentro da sequência";
}

?>

<form method = 'post'>
    <label>Insira o Valor:</label>
    <input name='valor'>
</form>

<?php 
    if (isset($_POST['valor']) and !empty($_POST['valor'])){
        echo fibonacci($_POST['valor']);
    }
?>