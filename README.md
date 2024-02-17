# Aulas de Linguagens de Servidor (Faculdade)

Esse repositório é destinado para as aulas de Linguagem de Servidor

# Assuntos

- Super Globais e Globais:

## Exemplo 1 de variável global :

```

 $x = 5;
 $y = 10;

 function myTest()
 {
     global $x, $y, $z;
     $z = $x + $y;
 }

 myTest();
echo $z;
```

## Exemplo 2 de variável global :

```´

 $variavel_global = "Olá, sou uma variável global";
 function teste()
 {
     global $variavel_global;
     $variavel_global = "<br>Olá, sou uma variável global alterada";
 }
 echo $variavel_global;
 teste();
 echo $variavel_global;
```

- Static
  Normalmente,quando uma função é concluida/executada, todas as sudas local NÃO seja excluida. Precisamos dela para outro trabalho. Para fazer isso, use a palavra-chave static ao declarar a variável pela primeira vez

## Exemplo 1 de variável estática :

```
function myTest()
{
   static $x = 0;
   echo $x;
   $x++;
}
echo "Saída da função myTest: <br>";
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
```

- Escopo de Variveis

## Exemplo de escopo de variáveis

```
// Exemplo de escopo de variáveis
$nome = "Pedro Lucas";

// Exemplo com erro de escopo de variáveis
// function exibaNome(){
//     echo $nome; // Não funciona pois a variável $nome está fora do escopo da função
// }
function exibaNome()
{
    global $nome; // Utilizando a palavra reservada global para acessar a variável $nome
    echo $nome;
}
exibaNome();
```
- Constante
## Exemplo de constante:
```
define('NOME', 'José Carlos'); //Não pode ser alterada
echo NOME;
```
## Exemplo de concatenação de constante

```
define('NOME', 'José Carlos'); //Não pode ser alterada
define('IDADE', 25);
echo "Meu nome é " . NOME . " e tenho " . IDADE . " anos.";
```
## Exemplo de constante do tipo array
```
define('NOME', 'José Carlos');
define('IDADE', 25);
define("TIMES", [
    "Flamengo",
    "Vasco",
    "Botafogo",
    "Fluminense"
]);
echo "Meu nome é " . NOME . " e tenho " . IDADE . " anos.";
echo "<br>";
echo TIMES[0];
``` 

- Formulário
## Exemplo do formulário
HTML

```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms PHP</title>
</head>

<body>
    <h1>Tabuada</h1>
    <form action="form.php" method="post">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="submit" value="ENVIAR">
    </form>
</body>

</html>
```
PHP
```
<?php 
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<h1>Olá, $name</h1>";
    echo "<p>Seu email é: $email</p>";
}
?>
```

