# Arquitetura e Modelagem do Sistema Tropykaly Pizza

# Arquitetura do Sistema Tropykaly Pizza

Proponho a seguinte arquitetura a ser seguida:

- Aplicação web em camadas:
	- Frontend: interface responsiva para catálogo, busca e carrinho.
	- API: serviços para regras de negócio e verificação do estado operacional.
	- Persistência: banco de dados para produtos, pedidos e clientes.
- Estado operacional centralizado: endpoint único que determina se pedidos são aceitos (aberto/fechado).
- Padrões recomendados: Factory, Singleton, State.

Recomendo adotar esta proposta como guia arquitetural mínimo.
- id
- tipo
- status
- valor

#### StatusOperacional
- status
- mensagem
- horarioFuncionamento

### 8.2 Relacionamentos básicos

- Categoria 1 -> * Produto
- Cliente 1 -> * Pedido
- Pedido 1 -> * ItemPedido
- ItemPedido * -> 1 Produto
- Pedido 1 -> 0..1 Pagamento
- Cliente 1 -> * Endereco
- StatusOperacional 1 -> 1 Pedido, no sentido de controlar se o fluxo pode ser executado

### 8.3 Versão textual do diagrama

```
Categoria 1 --- * Produto
Cliente 1 --- * Pedido
Cliente 1 --- * Endereco
Pedido 1 --- * ItemPedido
ItemPedido * --- 1 Produto
Pedido 1 --- 0..1 Pagamento
StatusOperacional controla Pedido
```

### 8.4 Como desenhar primeiro

1. Desenhe as classes principais como caixas.
2. Coloque os atributos dentro de cada caixa.
3. Ligue as classes com as multiplicidades acima.
4. Depois, refine com métodos apenas se o professor exigir mais detalhe.
5. Se quiser simplificar, foque em Produto, Categoria, Pedido, ItemPedido e Cliente como núcleo do modelo.

