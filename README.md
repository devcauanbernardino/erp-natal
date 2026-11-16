<h1 align="center">🎄 ERP do Polo Norte</h1>

<p align="center">
  Sistema de gestão da oficina do Papai Noel, das cartas das crianças até o brinquedo pronto.<br>
  Projeto de estudo e portfólio feito com <strong>Laravel</strong>.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12-c8283a?logo=laravel&logoColor=white" alt="Laravel 12">
  <img src="https://img.shields.io/badge/PHP-8.2+-1d5c3f?logo=php&logoColor=white" alt="PHP 8.2+">
  <img src="https://img.shields.io/badge/Tailwind-4-f0b93a?logo=tailwindcss&logoColor=white" alt="Tailwind 4">
  <img src="https://img.shields.io/badge/status-em%20desenvolvimento-c8283a" alt="Em desenvolvimento">
</p>

---

## Sobre

Todo ano chegam milhares de cartas ao Polo Norte. O **ERP do Polo Norte** organiza esse trabalho:
as cartas são cadastradas, cada criança recebe uma avaliação de comportamento no ano, e as cartas
das crianças bem-comportadas viram **ordens de produção** que os duendes fabricam.

A ideia do projeto é praticar Laravel "do zero". Por isso a autenticação é **feita à mão, sem starter kit**:
sessão, `Auth`, hash de senha e middleware de perfil.

## Perfis de usuário

| Perfil | Quem é | O que pode fazer |
|---|---|---|
| `noel` | Papai Noel | Admin master: vê e gerencia tudo |
| `mamae_noel` | Mamãe Noel | Gestão: avaliações de comportamento e, futuramente, estoque |
| `duende` | Duendes | Vê e atualiza apenas as próprias ordens de produção |

> As crianças **não** são usuários do sistema, apenas cadastros.

## Fluxo principal

```
Carta chega (recebida)
   └─▶ em análise
         └─▶ criança é avaliada no ano
               ├─▶ bem-comportada → carta aprovada → ordem de produção (na fila)
               │                                       └─▶ duende pega (fabricando) → pronta ✅
               └─▶ não → carta recusada
```

## Modelo de dados

| Tabela | Campos principais |
|---|---|
| `users` | name, email (único), password, role (`noel` \| `mamae_noel` \| `duende`) |
| `criancas` | nome, data_nascimento, cidade |
| `cartas` | crianca_id, brinquedo, ano, status (`recebida` \| `em_analise` \| `aprovada` \| `recusada`) |
| `comportamentos` | crianca_id, ano, bonzinho, avaliado_por → users, observacao. Único por criança + ano |
| `ordens_producao` | carta_id (único), duende_id → users, status (`na_fila` \| `fabricando` \| `pronta`), concluida_em |

**Regras de negócio:** uma carta = um brinquedo; uma ordem de produção por carta; uma avaliação de
comportamento por criança por ano.

## Stack

- **Backend:** Laravel 12 (PHP 8.2+), sem starter kit
- **Banco:** SQLite
- **Frontend:** Blade + componentes Blade, Vite e Tailwind CSS 4
- **Testes:** Pest

## Visual

Tema de cartão de Natal moderno: fundo creme, vermelho-cereja, verde-azevinho e dourado, com
tipografia Fraunces (títulos) e Inter (texto). Os personagens (Papai Noel, Mamãe Noel e duendes)
aparecem como avatares de cada perfil e em ilustrações pelas telas: boas-vindas, estados vazios
e mensagens de sucesso ou erro.

Componentes Blade reutilizáveis em `resources/views/components/`:
`<x-layout>`, `<x-hero>`, `<x-personagem>`, `<x-avatar>`, `<x-alerta>`, `<x-estado-vazio>`, `<x-badge>`, `<x-field>`.

> As ilustrações foram geradas com IA e recortadas para uso no projeto.

## Roadmap

**v1: núcleo**
- [x] Identidade visual, layout e componentes Blade
- [x] Telas: login, dashboard, crianças, cartas, ordens do duende
- [ ] Migrations e models
- [ ] Seeders
- [ ] Login manual com perfis e middleware
- [ ] CRUD de crianças e cartas
- [ ] Avaliação de comportamento
- [ ] Ordens de produção e tela do duende
- [ ] Testes com Pest

**v2: estoque e dashboard.** Brinquedos, matéria-prima e indicadores.

**v3: logística.** Entregas por região, renas e rota do trenó.

## Como rodar

Pré-requisitos: PHP 8.2+, Composer e Node.js.

```bash
git clone https://github.com/devcauanbernardino/erp-natal.git
cd erp-natal

composer install
npm install

cp .env.example .env
php artisan key:generate

# cria o banco SQLite e roda as migrations
touch database/database.sqlite
php artisan migrate
```

Em dois terminais:

```bash
php artisan serve   # aplicação em http://localhost:8000
npm run dev         # Vite (CSS/JS com recarga automática)
```

Para rodar os testes:

```bash
php artisan test
```

## Autor

Feito por **Cauan Bernardino** · [@devcauanbernardino](https://github.com/devcauanbernardino)
