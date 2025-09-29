<div align="center">
  <img style="margin-bottom: 40px" src="https://user-images.githubusercontent.com/60266964/162435563-436fa05e-7e66-4419-8811-81ab90d758fa.png" width="300px">
</div>

<div align="center">
  <img src="https://img.shields.io/badge/STATUS-FINALIZADO-blue?style=for-the-badge"/>
</div>

# Manual de Instalação e Uso – Exitus Adaptado

---

## 1. Pré-requisitos

Certifique-se de ter instalado:

- Servidor Web (Apache, Nginx ou PHP embutido)  
- PHP >= 7.4  
- MySQL / MariaDB  
- Git  
- Git LFS (para arquivos grandes)  
- Composer (para dependências PHP)

---

## 2. Clonando o repositório

```bash
git clone https://github.com/z12guilherme/Exitus.git
cd Exitus
git lfs install
git lfs pull
Isso garante que todos os arquivos, incluindo PDFs e a pasta vendor/, sejam baixados corretamente.

3. Configurando o banco de dados
Crie o banco de dados:

sql
Copiar código
CREATE DATABASE Exitus;
Ajuste o arquivo config.php ou Connection.php com o nome do banco, usuário e senha:

php
Copiar código
$host = 'localhost';
$user = 'root';
$password = 'sua_senha';
$dbname = 'Exitus';
Crie as tabelas:

bash
Copiar código
mysql -u root -p Exitus < database_creation_script.sql
Insira os dados iniciais:

bash
Copiar código
mysql -u root -p Exitus < initial_data_insertion_script.sql
4. Rodando o projeto
No terminal, acesse a pasta public e execute:

bash
Copiar código
php -S localhost:8000
Acesse o sistema no navegador:

arduino
Copiar código
http://localhost:8000
5. Primeiro acesso
Portal Admin:

Usuário	Código de acesso
Usuário Padrão	867532

Configure escolas, turmas, professores e cadastre alunos.

Os alunos cadastrados podem acessar o portal do aluno.

Professores podem lançar notas, faltas e avisos.

6. Funcionalidades existentes (EXITUS original)
Funcionalidade	Status
Portal Admin (cadastra alunos, turmas, professores)	✅
Portal Docente (lança notas, faltas, avisos)	✅
Portal Aluno (consulta notas, faltas, comunicados)	✅
Scripts de criação e inserção do banco	✅
Login e autenticação básica	✅

7. Funcionalidades da adaptação
Funcionalidade	Status
Dashboard específico para alunos atípicos	❌ A implementar
Login de pais / responsáveis	❌ A implementar
Acompanhamento detalhado de filhos atípicos	❌ A implementar

Essas funcionalidades serão desenvolvidas sobre a base existente do Exitus.

8. Cadastro de alunos
No portal do admin: Admin > Alunos > Cadastrar

Preencha dados do aluno (nome, turma, RA etc.)

Clique em Salvar

O aluno agora aparece no portal do docente e pode ser vinculado a pais/responsáveis.

<div align="center"> <img src="https://user-images.githubusercontent.com/60266964/173252157-41a78e83-065d-4c35-ae1d-fc2666032c1c.png" width="400px"/> <p>:camera: Tela de home do portal do administrador</p> </div>
9. Cadastro de pais / responsáveis (a implementar)
No portal do admin: Responsáveis > Cadastrar

Vincule os responsáveis aos alunos correspondentes

Eles receberão login para acompanhar o desempenho dos filhos.

10. Observações finais
Faça backup do banco regularmente

Não versionar arquivos sensíveis como config.php com senhas reais

Crie branches separadas para implementar novas funcionalidades:

bash
Copiar código
git checkout -b adaptacao-alunos-atipicos
Teste cada módulo antes de integrar ao sistema principal.

11. Tecnologias utilizadas
<code><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" width="40" height="40"/></code>
<code><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" width="40" height="40"/></code>
<code><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="40" height="40" /></code>
<code><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" width="40" height="40" /></code>
<code><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" width="50" height="50" /></code>
<code><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" width="40" height="40" /></code>
<code><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg" width="50" height="50" /></code>
