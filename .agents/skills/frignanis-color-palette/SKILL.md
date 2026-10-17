---
name: frignanis-color-palette
description: >-
  Official brand color palette and style guide for FRIGNANI'S (extracted from logo).
  Defines official colors (Azul Marinho Real, Dourado Frignani, Marfim, Verde Itália, Vermelho Itália),
  CSS tokens, RGB/HSL values, usage hierarchy, accessibility/contrast rules, and UI component styling.
  Use when designing, styling, building, or reviewing templates, components, cards, buttons, or branding.
---

# FRIGNANI'S — Guia Oficial da Paleta de Cores (Brand Style Guide)
*Paleta de cores institucional extraída do logotipo oficial.*

---

## 1. Tabela Oficial da Paleta (Do Logotipo)

| Cor | Nome Oficial | Código Hex | RGB | HSL | Uso Sugerido |
| :---: | :--- | :--- | :--- | :--- | :--- |
| ![#14294A](https://placehold.co/24x24/14294A/14294A.png) | **Azul Marinho Real** | `#14294A` | `rgb(20, 41, 74)` | `hsl(217, 57%, 18%)` | Fundos nobres, hero, títulos, rodapé, superfícies escuras |
| ![#A8843A](https://placehold.co/24x24/A8843A/A8843A.png) | **Dourado Frignani** | `#A8843A` | `rgb(168, 132, 58)` | `hsl(40, 49%, 44%)` | Detalhes, linhas ornamentais, botões principais, ícones, acentos |
| ![#F6F1E6](https://placehold.co/24x24/F6F1E6/F6F1E6.png) | **Marfim** | `#F6F1E6` | `rgb(246, 241, 230)` | `hsl(41, 47%, 93%)` | Fundos de seções claras, caixas de destaque, cards |
| ![#2E7D4F](https://placehold.co/24x24/2E7D4F/2E7D4F.png) | **Verde Itália** | `#2E7D4F` | `rgb(46, 125, 79)` | `hsl(145, 46%, 34%)` | Acento discreto (faixa da bandeira) e selo de produtos biológicos |
| ![#B3261E](https://placehold.co/24x24/B3261E/B3261E.png) | **Vermelho Itália** | `#B3261E` | `rgb(179, 38, 30)` | `hsl(3, 71%, 41%)` | Acento discreto (faixa da bandeira italiana sob o logotipo) |

---

## 2. Tokens CSS e Variáveis de Design (`style.css`)

Utilize sempre as variáveis CSS nativas do tema:

```css
:root {
  /* Paleta Principal Oficial */
  --color-navy: #14294A;       /* Azul Marinho Real */
  --color-gold: #A8843A;       /* Dourado Frignani */
  --color-cream: #F6F1E6;      /* Marfim */
  --color-green-it: #2E7D4F;   /* Verde Itália */
  --color-red-it: #B3261E;     /* Vermelho Itália */

  /* Variações e Superfícies (Navy / Dark) */
  --color-navy-surface: #1B335A;
  --color-navy-subtle: #223F6E;
  --color-navy-border: rgba(255, 255, 255, 0.08);
  --color-navy-border-hover: rgba(168, 132, 58, 0.45);

  /* Variações Dourado (Gold) */
  --color-gold-hover: #BF9948;
  --color-gold-dark: #8C6B28;
  --color-gold-light: #CBB071;
  --color-gold-glow: rgba(168, 132, 58, 0.25);

  /* Variações Marfim (Cream / Light) */
  --color-cream-subtle: #EDE7DC;
  --color-card-bg: #F6F1E6;
  --color-card-border: #E5DEC9;
  --color-card-border-hover: #A8843A;

  /* Tipografia & Contraste */
  --color-text-light: #FFFFFF;
  --color-text-muted-light: #9DA8BD;
  --color-text-dark: #14294A;
  --color-text-muted-dark: #58657B;
}
```

---

## 3. Diretrizes de Uso & Hierarquia Visual (Regra 60-30-10)

### 60% — Base Estrutural e Fundos
* **Seções Nobres / Hero / Footer:** Utilizam o **Azul Marinho Real** (`#14294A`) com texto claro (`#FFFFFF` ou `#9DA8BD`).
* **Seções Editoriais / Conteúdo / Cards:** Utilizam o **Marfim** (`#F6F1E6`) para proporcionar leitura confortável, estética de alta gastronomia e herança europeia.

### 30% — Sofisticação e Elementos Nobres
* **Dourado Frignani** (`#A8843A`):
  * Bordas e fios divisores refinados (`1px solid var(--color-gold)` ou com opacidade).
  * Botões primários com efeito hover iluminado (`#BF9948`).
  * Ícones decorativos, monogramas e destaques tipográficos sutis.

### 10% — Identidade Nacional & Acentos Pontuais
* **Verde Itália (`#2E7D4F`) & Vermelho Itália (`#B3261E`):**
  * **Regra de Ouro:** NUNCA usar como cores dominantes de fundo ou botões grandes.
  * São aplicados estritamente como **acentos discretos**, como o friso tricolor italiano (faixa fina de 2px a 3px) sob o logotipo ou em divisores institucionais.
  * O **Verde Itália** (`#2E7D4F`) é também a cor oficial para identificar produtos e categorias **Biológicas / Orgânicas certificadas**.

---

## 4. Acessibilidade e Contraste (WCAG 2.1)

| Combinação | Cores | Relação de Contraste | Nível WCAG | Aplicação |
| :--- | :--- | :---: | :---: | :--- |
| **Texto Branco sobre Azul Marinho** | `#FFFFFF` em `#14294A` | **13.5:1** | AAA | Headings e corpo de texto no Hero, Footer e seções escuras |
| **Azul Marinho sobre Marfim** | `#14294A` em `#F6F1E6` | **12.1:1** | AAA | Títulos e leitura principal sobre fundo Marfim |
| **Dourado sobre Azul Marinho** | `#A8843A` em `#14294A` | **4.6:1** | AA | Rótulos, sub-títulos médios e grandes, ícones |
| **Texto Branco sobre Dourado** | `#FFFFFF` em `#A8843A` | **2.9:1** | ⚠️ Inadequado | ❌ **Evitar:** use texto Azul Marinho (`#14294A`) sobre botões Dourados para contraste AAA (4.6:1) |
| **Azul Marinho sobre Dourado** | `#14294A` em `#A8843A` | **4.6:1** | AA | ✅ Botão CTA com fundo dourado e texto azul escuro |

---

## 5. Exemplos de Componentes UI

### Botão Primário (Dourado Nobre)
```css
.btn-primary {
  background-color: var(--color-gold);
  color: var(--color-navy);
  border: 1px solid var(--color-gold-light);
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background-color: var(--color-gold-hover);
  box-shadow: 0 4px 15px var(--color-gold-glow);
}
```

### Faixa Decorativa da Bandeira Italiana (Tricolore Frise)
```css
.italian-flag-ribbon {
  height: 3px;
  background: linear-gradient(
    to right,
    var(--color-green-it) 0%,
    var(--color-green-it) 33.3%,
    #FFFFFF 33.3%,
    #FFFFFF 66.6%,
    var(--color-red-it) 66.6%,
    var(--color-red-it) 100%
  );
  width: 100%;
}
```

### Card de Produto / Categoria (Fundo Marfim com Borda Refinada)
```css
.category-card {
  background-color: var(--color-card-bg); /* #F6F1E6 */
  border: 1px solid var(--color-card-border); /* #E5DEC9 */
  color: var(--color-navy);
}

.category-card:hover {
  border-color: var(--color-gold);
  box-shadow: 0 10px 30px rgba(20, 41, 74, 0.08);
}
```

### Badge de Produto Biológico
```css
.badge-bio {
  background-color: rgba(46, 125, 79, 0.12);
  color: var(--color-green-it); /* #2E7D4F */
  border: 1px solid rgba(46, 125, 79, 0.3);
}
```
