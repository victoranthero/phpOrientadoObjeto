# 1 Criando classes e objetos em PHP (05/06/2020) - ENTREGUE (SEM NOTA)

Faça um programa em PHP que implemente uma classe Pessoa e uma classe Produto. A classe Pessoa deve ter os atributos nome, telefone, data de nascimento e endereço (pense a melhor maneira de armazenar). A classe Produto deve ter os atributos nome, preço e categoria. Crie os getters e setters para as classes.

No programa instâncie cada uma das classes atribiundo valores aos atributos e os mostrando na tela.

# 2 Modularizando código em PHP OO (12/06/2020) - ENTREGUE (Insulficiente)

Instruções
Baseado no exercício anterior, modularize seu código, com base nos conceitos tratados na aula. Além disso, altere o nome da classe Pessoa para Cliente, adicione a classe Estoque ao seu código e adicione o atributo código às classes Cliente e Produto. A classe Estoque deve ter o atributo produtos, que é um array de arrays de produtos (código do produto e quantidade) e os métodos saídaProduto e entradaProduto.

Obs.: Não compactar (zip, rar, tar, gz, etc...) os arquivos para enviar.

# 3 Herança em PHP OO (26/06/2020) - ENTREGUE (Regular)

Instruções
Baseado no exercício anterior (também apresentado em aula), crie uma classe Pessoa, adicione os atributos pertinentes e torne a classe cliente "filha" de pessoa, para que herde os atributos pertinentes.

Obs.: Os alunos que tiverem a tarefa anterior desconsiderada por cópia, sugiro que refaça toda a tarefa anterior, para que tenha uma nova oportunidade de aporendizado.


# 4 Trabalhando com atributos e métodos estáticos - (10/07/2020) - 

Instruções
Implemente um controle de estoque do sistema da mercearia, construído nas aulas, utilizando atributos e métodos estáticos. Ao menos um método para entrada de produto, um método para saída de produto, um método para listagem de produtos e um atribito com os produtos e suas quantidades.
Faça as verifições de consistência do estoque. Não deve existir produto com quantidade negativa no estoque, nem é possível fazer entrada de produto ou saída de produto com quantidades negativas (Não se pode comprar -2 arroz). Agilize o controle do estoque, realizando entrada de produtos quando um objeto, da classe produto for criada.