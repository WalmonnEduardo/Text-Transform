#Text Transform - Transformando texto em arte

Ao desenvolver sistemas no terminal nos deparamos com uma tela que a princípio não é muito atraente e com isso nós nos afastamos muito dessa parte por parecer algo muito confuso.
A oficina busca usar orientação a objetos para criar uma classe onde você pode usar para editar a forma de como você apresenta seus projetos no terminal tornando o seu projeto mais organizado.

PHP

Linguagem para 

Orientação a Objetos

Explicação dos conceitos de orientação a objetos
Demonstração com uma classe chamada aluno


<?php
class Aluno
{
	//Atributos
	private string $aluno;
  private int $idade;
  private int $numMatricula;
  private string $email;


  //Métodos
	public function __construct()
  {
	  //Método chamado quando a classe é instanciada
  }
  public function __toString()
  {
  	//Método chamado quando você tenta escrever o método
  }
}
?>
