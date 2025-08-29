# Formatando saídas no terminal com orientação a objetos

Ao desenvolver sistemas pelo terminal, muitas vezes nos deparamos com uma interface pouco atrativa, o que pode causar certo afastamento por transmitir a impressão de ser algo confuso.

A oficina tem como objetivo aplicar os conceitos de orientação a objetos para criar uma classe capaz de personalizar a forma de apresentação dos projetos no terminal, tornando-os mais claros e organizados.

---

## Orientação a Objetos

O objetivo da orientação a objetos é aproximar a programação do mundo real:

- Representar conceitos reais em um programa de computador
- Programar de uma forma mais próxima de como expressamos as mesmas coisas na vida real

### Algumas facilidades

- Implementação em camadas  
- Facilidade de manutenção  
- Distribuição das responsabilidades para classes/objetos  

### Facilidade para incluir novas funcionalidades

- Partes já implementadas em classes/objetos podem ser reutilizadas  

---

## Demonstração com uma classe chamada `Aluno`

```php
<?php
class Aluno
{
    // Atributos
    public string $nome;
    public int $idade;
    public int $numMatricula;
    public string $email;

    // Métodos
    public function seApresentar()
    {
        return "Nome: ".$this->nome."\nIdade: ".$this->idade."\nNúmero de matrícula: ".$this->numMatricula."\nEmail: ".$this->email."\n";
    }
}
?>
```
## Método para remover acentos
```php
public function removerAcentos($texto)
{
    $acentos = array(
        'Á' => 'A', 'À' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A',
        'É' => 'E', 'È' => 'E', 'Ê' => 'E', 'Ë' => 'E',
        'Í' => 'I', 'Ì' => 'I', 'Î' => 'I', 'Ï' => 'I',
        'Ó' => 'O', 'Ò' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O',
        'Ú' => 'U', 'Ù' => 'U', 'Û' => 'U', 'Ü' => 'U',
        'Ç' => 'C', 'Ñ' => 'N',
        'á' => 'a', 'à' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a',
        'é' => 'e', 'è' => 'e', 'ê' => 'e', 'ë' => 'e',
        'í' => 'i', 'ì' => 'i', 'î' => 'i', 'ï' => 'i',
        'ó' => 'o', 'ò' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o',
        'ú' => 'u', 'ù' => 'u', 'û' => 'u', 'ü' => 'u',
        'ç' => 'c', 'ñ' => 'n'
    );
    return strtr($texto, $acentos);
}
```
## Array para o método contarAcentos
```php
$acentos = array(
    'Á','À','Â','Ã','Ä','Å',
    'É','È','Ê','Ë',
    'Í','Ì','Î','Ï',
    'Ó','Ò','Ô','Õ','Ö',
    'Ú','Ù','Û','Ü',
    'Ç','Ñ',
    'á','à','â','ã','ä','å',
    'é','è','ê','ë',
    'í','ì','î','ï',
    'ó','ò','ô','õ','ö',
    'ú','ù','û','ü',
    'ç','ñ'
);
```
