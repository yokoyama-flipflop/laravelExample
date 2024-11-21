# **Guia de Inicialização: Projeto Laravel com SASS**

Este guia irá te ajudar a configurar um projeto Laravel com **SASS** para o processamento de estilos. Vamos percorrer as etapas necessárias para instalar o Laravel, configurar o SASS e fazer o ambiente funcionar corretamente.

## **Pré-requisitos**

- [Composer](https://getcomposer.org/) (para gerenciar dependências do PHP)
- [Node.js e NPM](https://nodejs.org/en/) (para gerenciar dependências JavaScript e SASS)
- [Laravel](https://laravel.com/docs/9.x) (framework PHP)

---

## **Passos para Inicialização**

### 1. **Instalar o Laravel**

Primeiro, vamos criar um novo projeto Laravel. Abra o terminal e execute o comando abaixo:

```bash
composer create-project --prefer-dist laravel/laravel nome-do-projeto
```

Substitua `nome-do-projeto` pelo nome desejado para seu projeto.

### 2. **Configurar o ambiente de desenvolvimento**

Entre no diretório do seu projeto:

```bash
cd nome-do-projeto
```

Instale as dependências necessárias para o Laravel com o comando:

```bash
composer install
```

### 3. **Instalar o Node.js e NPM**

Certifique-se de que o [Node.js e NPM](https://nodejs.org/en/) estão instalados em seu sistema. Para verificar, rode o comando:

```bash
node -v
npm -v
```

Se ambos estiverem instalados corretamente, prossiga para o próximo passo.

### 4. **Instalar Dependências de Frontend**

No diretório do seu projeto, execute o seguinte comando para instalar as dependências JavaScript e do Laravel Mix (responsável por compilar o SASS):

```bash
npm install
```

### 5. **Instalar o SASS**

Para trabalhar com SASS no Laravel, precisamos instalar o pacote do **SASS**. Execute o seguinte comando:

```bash
npm install sass sass-loader --save-dev
```

Este comando vai instalar o compilador SASS e o `sass-loader`, que irá permitir que você utilize o SASS no Laravel Mix.

### 6. **Configurar o Laravel Mix**

No Laravel, o Laravel Mix é utilizado para compilar e agrupar assets. Abra o arquivo `webpack.mix.js` na raiz do seu projeto e faça a seguinte configuração:

```js
const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css');
```

Este código vai compilar o arquivo SASS localizado em `resources/sass/app.scss` e gerar o arquivo CSS em `public/css`.

### 7. **Criar o Arquivo SASS**

Dentro do diretório `resources/sass`, crie o arquivo `app.scss` (se ele ainda não existir). Aqui é onde você colocará seu código SASS.

```bash
resources/sass/app.scss
```

Adicione seus estilos SASS neste arquivo. Por exemplo:

```scss
// resources/sass/app.scss

$primary-color: #4C4C47;
$secondary-color: #e5dcc548;

body {
    background-color: $secondary-color;
    color: $primary-color;
}
```

### 8. **Compilar o SASS**

Agora, você está pronto para compilar o SASS. No terminal, execute o comando abaixo para rodar o Laravel Mix:

```bash
npm run dev
```

Este comando vai compilar seus arquivos SASS e gerar o CSS em `public/css/app.css`.

Para compilar automaticamente sempre que houver uma alteração no arquivo SASS, use:

```bash
npm run watch
```

### 9. **Iniciar o Servidor Laravel**

Por fim, inicie o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

Isso iniciará o servidor e você pode acessar seu site localmente em [http://localhost:8000](http://localhost:8000).

---

## **Estrutura do Projeto**

Após seguir todos os passos, a estrutura básica do seu projeto Laravel com SASS será semelhante a esta:

```
/nome-do-projeto
├── /app
├── /bootstrap
├── /config
├── /database
├── /public
│   └── /css
│       └── app.css         # Arquivo CSS gerado
├── /resources
│   └── /sass
│       └── app.scss        # Seu arquivo SASS
├── /routes
├── /storage
├── /tests
└── webpack.mix.js          # Configuração do Laravel Mix
```

---

## **Conclusão**

Agora você tem um projeto Laravel configurado com SASS! Você pode adicionar seus estilos no arquivo `app.scss` e o Laravel Mix irá compilar para `app.css` automaticamente. Sempre que for necessário, rode `npm run dev` ou `npm run watch` para compilar seus arquivos.

Se precisar de mais ajustes ou configurações, consulte a [documentação do Laravel Mix](https://laravel-mix.com/).

