# Laravel smart APIs: filtrare dinamicamente modelli

Il video del talk è disponibile su [https://www.youtube.com/watch?v=iMKObhTMKCk](https://www.youtube.com/watch?v=iMKObhTMKCk())

## Obiettivo
Realizzare un meccanismo "furbo" e "pulito" per filtrare i risultati delle API in base ai parametri passati come variabili GET o POST.

Es:
- /products?search=keyword
- /products?order=price&dir=desc
- /products?category=food

## Da dove partiamo

### Due modelli
####- `Product`
- id
- name
- category_id
- price

####- `Category`
- id
- name

### Una rotta 
- `/products`

## Steps
Ognuno degli step del tutorial è rappresentato da un branch del repository. Per studiare 
come si sia arrivati alla soluzione, si suggerisce di analizzarli uno alla volta (seguendo il video).

 
### Lista dei branches
- git checkout 00-initial-setup
- git checkout 01-use-when-clause
- git checkout 02-use-scopes
- git checkout 03-use-single-scope
- git checkout 04-filters-to-separate-class
- git checkout 05-generalization
- git checkout 06-inject-filters
- git checkout 07-filters-for-categories
- git checkout 08-refactor-filters
- git checkout 09-refactor-models-with-trait
- git checkout 10-add-sorting-by-category-name
