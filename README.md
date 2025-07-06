# 🗺️ Projeto MAPA Unicesumar - Dona Rita Marmitas

Este repositório contém o projeto desenvolvido para a disciplina **MAPA** da graduação em **Tecnologia em Sistemas para Internet** na **Unicesumar**. O objetivo foi criar um site estático para a **Dona Rita Marmitas**, utilizando **PHP** para a gestão dos dados e **HTML/CSS** para a interface do usuário.

---

## 🍽️ O Caso de Negócio: Dona Rita Marmitas

Dona Rita, uma empreendedora dedicada, enfrentava desafios financeiros. Com o apoio de seus filhos, ela vendia marmitas caseiras em *Palmas, Paraná*. Observando seu esforço, o empresário e estudante **Marcos Renato** propôs a criação de um site simples, atuando como um **catálogo online**, para ampliar a visibilidade de seus produtos.

O site foi concebido como uma ferramenta de divulgação sem custos por dois anos, permitindo que Dona Rita gerenciasse as vendas e entregas de forma independente.

---
## Demonstração
[Dona-Rita-Marmitas.webm](https://github.com/user-attachments/assets/78c21703-0bb4-4898-847b-9af33707ec2c)


---
## 🚀 Funcionalidades Implementadas

O site foi desenvolvido como um **catálogo estático**, oferecendo as seguintes funcionalidades:

- **Cabeçalho e Rodapé Personalizados**  
  Cada página exibe um cabeçalho e um rodapé customizados para a marca *Dona Rita Marmitas*, incluindo a assinatura do desenvolvedor no rodapé.

- **Listagem Dinâmica de Marmitas**  
  Na página principal (`index.php`), todas as marmitas são listadas dinamicamente. Os dados de cada marmita (nome, tamanho, preço, imagem e ingredientes) são recuperados de um **array multidimensional em PHP**.

- **Página de Detalhes da Marmita**  
  Ao clicar na imagem de uma marmita, o usuário é redirecionado para uma página de detalhes (`detalhes.php`). Essa página exibe todas as informações da marmita selecionada, buscando os dados no mesmo array através de um **ID único** passado via URL. Também são apresentadas as informações de contato da Dona Rita para facilitar os pedidos.

---

## 💻 Tecnologias Utilizadas

- **PHP**: Responsável pela lógica de negócio e geração dinâmica do conteúdo HTML.
- **HTML5**: Utilizado para a estruturação do conteúdo das páginas.
- **CSS3**: Aplicado para estilizar o site com uma apresentação agradável e responsiva.

---

## 💾 Armazenamento de Dados (Sem Banco de Dados)

Conforme a especificação do projeto, **não foi utilizado banco de dados**. Todos os dados das marmitas estão armazenados em um **array estático multidimensional** no arquivo:


A estrutura do array pode ser visualizada no arquivo:
```
dados/receitas.php
```


---

## ⚙️ Como Rodar o Projeto Localmente

Para configurar e executar este projeto em seu ambiente local, siga os passos abaixo:

### 📥 Clonar o Repositório

Abra seu terminal ou prompt de comando e execute:

```
git clone https://github.com/marcosrenatodev/projeto_mapa_unicesumar_backend_1.git
```

---

### 🖥️ Executar com o Servidor Embutido do PHP

Se você tiver o PHP instalado localmente, navegue até a pasta do projeto e execute:

```
cd projeto_mapa_unicesumar_backend_1
php -S localhost:8000
```

Depois, acesse no navegador:
```
http://localhost:8000
```


---

## 📂 Estrutura do Repositório

A estrutura de diretórios do projeto é organizada da seguinte forma:

```
projeto_mapa_unicesumar_backend_1/
├── dados/                  # Contém o arquivo PHP com o array de dados das marmitas
│   └── receitas.php
├── css/                    # Contém os arquivos CSS para estilização
│   └── style.css
├── img/                    # (Opcional) Pasta para futuras imagens locais das marmitas
├── index.php               # Página principal que lista todas as marmitas
├── detalhes.php            # Página que exibe os detalhes de uma marmita específica
└── README.md               # Este arquivo de documentação
```

---

## 📞 Contato

Para quaisquer dúvidas ou informações adicionais sobre este projeto, sinta-se à vontade para entrar em contato.
