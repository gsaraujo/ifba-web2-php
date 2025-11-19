# Descrição atividade prepatória para prova prática:

## Descrição

O objetivo dessa atividade é praticar os conceitos de POO em PHP para preparar os estudantes para avaliação prática na disciplina.

## Funcionalidades esperadas

Você deverá construir as seguintes classes, com os respectivos atributos e métodos:
1. Pessoa
   2. matricula 
   3. nome 
   4. quantidadeMaximaDeLivros 
   5. Construtor que recebe nome, matricula e inicializa a quantidadeMaximaDeLivros com 0;
   6. Getters e Setters
7. Usuario
   8. Subclasse de Pessoa
   9. Construtor que recebe nome, matricula, invoca o construtor da superclasse (parent::__construct(nome, matricula)) e inicializa a quantidadeMaximaDeLivros com 2;
   10. Método pegarLivroEmprestado() que deve verificar se o usuário ainda possui limite para pegar livros (quantidadeMaximaDeLivros). Caso possua, precisamos diminuir o valor do atributo em 1, indicando que o usuário está com um empréstimo ativo.
   11. Método devolverLivroEmprestado() que deve aumentar em 1 o valor de quantidadeMaximaDeLivros.
12. Funcionario
    13. Subclasse de Pessoa 
    14. setor (atributo de Funcionario) + getter e setter 
    15. Método pegarLivroEmprestado() que deve verificar se o usuário ainda possui limite para pegar livros (quantidadeMaximaDeLivros). Caso possua, precisamos diminuir o valor do atributo em 1, indicando que o usuário está com um empréstimo ativo 
    16. Método devolverLivroEmprestado() que deve aumentar em 1 o valor de quantidadeMaximaDeLivros.
17. Livro
    18. codigo 
    19. titulo 
    20. autor 
    21. quantidadeDeLivros
    22. Getters e Setters
    23. Método realizarEmprestimo() - esse método deve verificar se a quantidade de livros em quantidadeDeLivros permite o empréstimo do livro. Caso seja possível é preciso subtrair um de quantidadeDeLivros 
    24. Método realizarDevolucao() - esse método deve “devolver a cópia” do livro, ou seja, aumentar em um a quantidadeDeLivros
25. Biblioteca
    26. Array indexado de Livros (código do livro)
    27. Array indexado de Pessoas (código da pessoa)
    28. Emprestimo - array associativo onde a chave é o código do usuário e o valor é um array indexado de livros que estão emprestados para o usuário. 
    29. Métodos para adicionar pessoas, adicionar livros e adicionar empréstimos nos respectivos arrays. 
    30. Lembre-se que ao devolver um livro, precisamos remover aquele livro do array de empréstimos daquele usuário.


## Instruções de desevolvimento

Observe os nomes dos métodos e atributos, eles não devem ser alterados. O teste de código será realizado com um arquivo que estará disponível no dia.

Você deve criar sua pasta principal do projeto e adicionar suas classes em uma pasta chamada classes.



