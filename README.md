# Strategy

O **Strategy** é um padrão de projeto comportamental que permite que você defina uma família de algoritmos, coloque-os em classes separadas, e faça os objetos deles intercambiáveis (que se possa trocar).

## Analogia com o mundo real
Imagine que você tenha um e-commerce. Durante os passos de finalização da compra de um produto, você define um método de envio do produto, pode ser Sedex, PAC, ou DHL. Essas são suas estratégias. Você pode escolher uma das estratégias dependendo de fatores como valor do frete, tempo de entrega ou disponibilidade.

## Aplicação
Utilize o padrão **Strategy** quando você quer usar diferentes variações de um algoritmo, no exemplo acima seriam os métodos de envio, dentro de um objeto e ser capaz de trocar de um algoritmo para outro durante a execução.
O padrão também pode ser utilizado quando você tem muitas classes parecidas que somente diferem na forma que elas executam algum comportamento.

## Implementação
Em nosso algoritmo, dividimos o problema na pasta *original* e a solução na pasta *refactored*. 
Alteramos o serviço *Freight* para, ao invés de fazer várias verificações, recebemos o serviço por meio do construtor da classe, e por meio de uma *interface*, selecionamos o método de envio a ser carregado.
Dessa forma podemos isolar os detalhes de implementação de um algoritmo, do código que ele usa. Também atendemos o **Open-Closed Principle** do **SOLID**, onde podemos introduzir novas estratégias, sem mudar o contexto.

## Fonte
[Refactoring Guru](https://refactoring.guru/design-patterns/strategy)
[Código Fonte TV](https://www.youtube.com/watch?v=WPdrnuSHAQs)
