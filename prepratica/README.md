# Descrição atividade prepatória para prova prática:

## Descrição

O objetivo dessa atividade é praticar os conceitos de POO em PHP para preparar os estudantes para avaliação prática na disciplina.

## Funcionalidades esperadas

Você deverá construir as seguintes classes, com os respectivos atributos e métodos:
1. Pessoa
   - matricula 
   - nome 
   - quantidadeMaximaDeLivros 
   - Construtor que recebe nome, matricula e inicializa a quantidadeMaximaDeLivros com 0;
   - Getters e Setters
2. Usuario
   - qSubclasse de Pessoa
   - Construtor que recebe nome, matricula, invoca o construtor da superclasse (parent::__construct(nome, matricula)) e inicializa a quantidadeMaximaDeLivros com 2;
   - Método pegarLivroEmprestado() que deve verificar se o usuário ainda possui limite para pegar livros (quantidadeMaximaDeLivros). Caso possua, precisamos diminuir o valor do atributo em 1, indicando que o usuário está com um empréstimo ativo.
   - Método devolverLivroEmprestado() que deve aumentar em 1 o valor de quantidadeMaximaDeLivros.
3. Funcionario
   - Subclasse de Pessoa 
   - setor (atributo de Funcionario) + getter e setter 
   - Método pegarLivroEmprestado() que deve verificar se o usuário ainda possui limite para pegar livros (quantidadeMaximaDeLivros). Caso possua, precisamos diminuir o valor do atributo em 1, indicando que o usuário está com um empréstimo ativo 
   - Método devolverLivroEmprestado() que deve aumentar em 1 o valor de quantidadeMaximaDeLivros.
4. Livro
   - codigo 
   - titulo 
   - autor 
   - quantidadeDeLivros
   - Getters e Setters
   - Método realizarEmprestimo() - esse método deve verificar se a quantidade de livros em quantidadeDeLivros permite o empréstimo do livro. Caso seja possível é preciso subtrair um de quantidadeDeLivros 
   - Método realizarDevolucao() - esse método deve “devolver a cópia” do livro, ou seja, aumentar em um a quantidadeDeLivros
5. Biblioteca
   - Array indexado de Livros (código do livro)
   - Array indexado de Pessoas (código da pessoa)
   - Emprestimo - array associativo onde a chave é o código do usuário e o valor é um array indexado de livros que estão emprestados para o usuário. 
   - Métodos para adicionar pessoas, adicionar livros e adicionar empréstimos nos respectivos arrays. 
   - Lembre-se que ao devolver um livro, precisamos remover aquele livro do array de empréstimos daquele usuário.


## Instruções de desevolvimento

Observe os nomes dos métodos e atributos, eles não devem ser alterados. O teste de código será realizado com um arquivo que estará disponível no dia.

Você deve criar sua pasta principal do projeto e adicionar suas classes em uma pasta chamada classes.



