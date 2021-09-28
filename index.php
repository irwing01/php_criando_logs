<h1>Trabalhando com arquivos</h1>
<li><a href="https://www.youtube.com/watch?v=BNF5KEgH9lM" target="_blank">Curso de PHP #41 - Trabalhando com arquivos - Parte 1</a></li>
<li><a href="https://www.youtube.com/watch?v=LhcPYJFEhWQ" target="_blank">Curso de PHP #42 - Trabalhando com arquivos - Parte 2 guestbook</a></li>
<li><a href="https://www.youtube.com/watch?v=w0BVYcmXn5M" target="_blank">Curso de PHP #43 - Trabalhando com arquivos - Parte 3 Contador de visitas</a></li>
<br>

<fieldset>
<?php
// r   abre para leitura - ponteiro no início
// r+  abre para leitura e escrita
// w   abre apara escrita - ponteiro no inicio e zera o arquivo se arquivo não existir ele cria
// w+  abre para leitura e escrita
// a   abre apara escrita - ponteiro no final - arquivo não existir ele cria
// a+  abre para leitura e escrita
// x   abre para escrita - ponteiro no inicio se arquivo já existir ele gera um erro do tipo E_WARNING
// x+   abre para leitura e escrita

if(!file_exists("logs/log_erro.txt")) {
    $arquivo = fopen("logs/log_erro.txt","w");

}else{
    $arquivo = fopen("logs/log_erro.txt","a");
//    fwrite($arquivo,"\r\nTeste escrevendo log");

    $arquivo = fopen("logs/log_erro.txt","r");
    $conteudo = fread($arquivo, 10000);
    echo $conteudo;

fclose($arquivo);
}



////escreve um conteudo no arquivo
//$arquivo = fopen("aula.txt","w");
//fwrite($arquivo,"\r\n Teste escrevendo texto no arquivo!. (" . date("d/m/Y - H:m:s"). ")");
//
////leitura
//$arquivo = fopen("aula.txt","r");
//$conteudo = fread($arquivo, 1000000);
//
//echo $conteudo;
//
//
//fclose($arquivo);
?>
</fieldset>
<br>
<fieldset>
    <?php
    $data = new DateTime();
    echo $data->format("d.m.Y - H:i:s");


    ?>
</fieldset>

<?php
$conn = new PDO("mysql:dbname=testes;host=localhost","root","");
$stmt = $conn->prepare("select * from tb_usuarios");
$res = $stmt->fetchAll(PDO::FETCH_OBJ);

var_dump($res);
var_dump($conn);
?>
