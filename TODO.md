# TODO – Adaptação do Exitus para Alunos Atípicos

Este arquivo organiza todas as tarefas do projeto, desde a configuração inicial até a implementação das funcionalidades específicas para alunos atípicos e seus responsáveis.

---

## 1. Planejamento e Configuração Inicial

- [x] Clonar repositório base do Exitus  
- [x] Configurar ambiente de desenvolvimento (XAMPP, WSL ou servidor local)  
- [x] Configurar banco de dados e importar scripts originais  
- [x] Configurar Composer e dependências PHP  
- [x] Testar funcionamento do Exitus original no ambiente  

---

## 2. Estrutura de Banco de Dados

- [x] Analisar scripts originais (`database_creation_script.sql`)  
- [x] Analisar dados iniciais (`initial_data_insertion_script.sql`)  
- [ ] Criar tabela `responsaveis`  
- [ ] Adicionar relação `responsaveis_alunos` (vincular responsáveis aos alunos)  
- [ ] Garantir suporte a campos especiais para alunos atípicos (necessidades específicas, observações, relatórios personalizados)  

---

## 3. Backend – Funcionalidades Adicionais

- [ ] Criar login de pais/responsáveis  
- [ ] Implementar dashboard para pais com acompanhamento de filhos atípicos  
- [ ] Adicionar endpoints para relatórios específicos de alunos atípicos  
- [ ] Ajustar lógica de acesso e permissões para novos perfis (pais)  
- [ ] Implementar notificações (avisos de faltas, notas e comunicados especiais)  

---

## 4. Frontend – Interface e Experiência do Usuário

- [ ] Criar portal de pais/responsáveis  
- [ ] Ajustar portal de alunos para destacar informações relevantes de alunos atípicos  
- [ ] Adaptar dashboards existentes (admin, docente) para visualizar indicadores de alunos atípicos  
- [ ] Implementar gráficos e relatórios visuais (médias, faltas, progresso)  
- [ ] Garantir responsividade e compatibilidade mobile  

---

## 5. Integração e Testes

- [ ] Testar cadastro de responsáveis e vínculo com alunos  
- [ ] Testar login de pais/responsáveis  
- [ ] Testar dashboards (alunos atípicos, pais, docentes, admin)  
- [ ] Testar envio de notificações e relatórios  
- [ ] Testar compatibilidade com diferentes navegadores  

---

## 6. Documentação

- [ ] Atualizar README.md com as novas funcionalidades  
- [ ] Criar MANUAL.md para instalação e uso do sistema adaptado  
- [ ] Documentar banco de dados atualizado (ERD)  
- [ ] Registrar todas as alterações de backend e frontend  

---

## 7. Cronograma de Entregas

| Fase | Tarefas | Prazo |
|------|--------|-------|
| Planejamento | Configuração do ambiente, análise do Exitus original | 1 semana |
| Banco de Dados | Criar tabelas e relações para responsáveis e alunos atípicos | 1 semana |
| Backend | Implementar login de pais, dashboard e relatórios | 2 semanas |
| Frontend | Criar interface dos novos portais e dashboards | 2 semanas |
| Testes | Testar integração, funcionalidades e compatibilidade | 1 semana |
| Documentação | Atualizar README, criar MANUAL.md, documentar banco | 1 semana |
| Revisão Final | Ajustes finais e otimizações | 1 semana |

---

## 8. Observações

- Utilizar **branches separados** para cada grande funcionalidade (`feature/login-pais`, `feature/dashboard-atipicos`)  
- Realizar commits frequentes com mensagens claras  
- Garantir backup do banco antes de grandes alterações  
- Registrar bugs e melhorias em issues no GitHub
