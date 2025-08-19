# Text Transform - Transformando texto em arte

Ao desenvolver sistemas no terminal nos deparamos com uma tela que a princípio não é muito atraente e com isso nós nos afastamos muito dessa parte por parecer algo muito confuso.  
A oficina busca usar orientação a objetos para criar uma classe onde você pode usar para editar a forma de como você apresenta seus projetos no terminal, tornando o seu projeto mais organizado.

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
    private string $nome;
    private int $idade;
    private int $numMatricula;
    private string $email;

    // Métodos
    public function __construct()
    {
        // Método chamado quando a classe é instanciada
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;
        return $this;
    }

    public function getNumMatricula(): int
    {
        return $this->numMatricula;
    }

    public function setNumMatricula(int $numMatricula): self
    {
        $this->numMatricula = $numMatricula;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
}
?>
