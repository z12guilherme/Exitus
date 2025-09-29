<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{

	protected function initRoutes()
	{

		// Página inicial do sistema

		$routes['index'] = array(
			'route' => '/',
			'controller' => 'Index\\IndexController',
			'action' => 'index'
		);

		// Rotas do portal do administrador 

		$routes['admin'] = array(
			'route' => '/admin',
			'controller' => 'Admin\\AdminController',
			'action' => 'index'
		);

		$routes['adminHome'] = array(
			'route' => '/admin/home',
			'controller' => 'Admin\\AdminController',
			'action' => 'home'
		);

		$routes['adminLogin'] = array(
			'route' => '/admin/login',
			'controller' => 'Admin\\AdminController',
			'action' => 'auth'
		);

		$routes['adminExit'] = array(
			'route' => '/admin/sair',
			'controller' => 'Admin\\AdminController',
			'action' => 'exit'
		);

		// Rotas referente aos controles do aluno no portal do administrador

		$routes['adminStudentRegistration'] = array(
			'route' => '/admin/aluno/cadastro',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'studentRegistration'
		);

		$routes['adminStudentInsert'] = array(
			'route' => '/admin/aluno/cadastro/inserir',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'studentInsert'
		);

		$routes['adminStudentList'] = array(
			'route' => '/admin/aluno/lista',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'studentList'
		);

		$routes['adminStudentListing'] = array(
			'route' => '/admin/aluno/lista/listagem',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'studentListing'
		);

		$routes['adminStudentSeek'] = array(
			'route' => '/admin/aluno/lista/buscar',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'studentSeek'
		);

		$routes['adminStudentProfile'] = array(
			'route' => '/admin/aluno/lista/perfil-aluno',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'studentProfile'
		);

		$routes['adminUpdateStudentProfile'] = array(
			'route' => '/admin/aluno/lista/perfil-aluno/atualizar',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'updateStudentProfile'
		);

		$routes['adminUpdateStudentProfilePicture'] = array(
			'route' => '/admin/aluno/lista/perfil-aluno/atualizar-foto',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'updateStudentProfilePicture'
		);

		$routes['adminUpdateTeacherProfilePicture'] = array(
			'route' => '/admin/professor/lista/perfil-professor/atualizar-foto',
			'controller' => 'Admin\\AdminTeacherController',
			'action' => 'updateTeacherProfilePicture'
		);

		$routes['adminStudentProfileBulletin'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/boletim',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'bulletin'
		);

		$routes['adminDivisionStudentsBySex'] = array(
			'route' => '/admin/gestao/home/divisao-alunos-sexo',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'divisionStudentsBySex'
		);

		// Rota referente a verificação de redundância do Cpf 

		$routes['checkCpf'] = array(
			'route' => '/verificar-dados/cpf',
			'controller' => 'Admin\\AdminPeopleController',
			'action' => 'checkCpf'
		);

		// Rotas referente aos controles do docente no portal do administrador

		$routes['adminTeacherRegistration'] = array(
			'route' => '/admin/professor/cadastro',
			'controller' => 'Admin\\AdminTeacherController',
			'action' => 'teacherRegistration'
		);

		$routes['adminTeacherInsert'] = array(
			'route' => '/admin/professor/cadastro/inserir',
			'controller' => 'Admin\\AdminTeacherController',
			'action' => 'teacherInsert'
		);

		$routes['adminTeacherList'] = array(
			'route' => '/admin/professor/lista',
			'controller' => 'Admin\\AdminTeacherController',
			'action' => 'teacherList'
		);

		$routes['adminTeacherListing'] = array(
			'route' => '/admin/professor/lista/listagem',
			'controller' => 'Admin\\AdminTeacherController',
			'action' => 'teacherListing'
		);

		$routes['adminTeacherSeek'] = array(
			'route' => '/admin/professor/lista/buscar',
			'controller' => 'Admin\\AdminTeacherController',
			'action' => 'seek'
		);

		$routes['adminTeacherProfile'] = array(
			'route' => '/admin/professor/lista/perfil-professor',
			'controller' => 'Admin\\AdminTeacherController',
			'action' => 'teacherProfile'
		);

		$routes['adminTeacherUpdate'] = array(
			'route' => '/admin/professor/lista/perfil-professor/atualizar',
			'controller' => 'Admin\\AdminTeacherController',
			'action' => 'updateTeacherProfile'
		);

		// Rota da gestão geral no portal do administrador

		$routes['adminManagementGeneral'] = array(
			'route' => '/admin/gestao',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'managementGeneral'
		);

		// Rotas referente ao período letivo no portal do administrador

		$routes['adminSchoolTermManagement'] = array(
			'route' => '/admin/gestao/periodo-letivo',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'schoolTermManagement'
		);

		$routes['adminSchoolTermInsert'] = array(
			'route' => '/admin/gestao/periodo-letivo/inserir',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'schoolTermInsert'
		);

		$routes['adminSchoolTermList'] = array(
			'route' => '/admin/gestao/periodo-letivo/lista',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'schoolTermList'
		);

		$routes['adminSchoolTermUpdate'] = array(
			'route' => '/admin/gestao/periodo-letivo/atualizar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'schoolTermUpdate'
		);

		$routes['adminSchoolTermDelete'] = array(
			'route' => '/admin/gestao/periodo-letivo/deletar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'schoolTermDelete'
		);

		$routes['adminSchoolTermAvailable'] = array(
			'route' => '/admin/gestao/periodo-letivo/lista-anos-disponiveis',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'schoolTermAvailable'
		);

		// Rotas referente a sala de aula no portal do administrador

		$routes['adminClassRoomManagement'] = array(
			'route' => '/admin/gestao/sala',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classRoomManagement'
		);

		$routes['adminClassRoomInsert'] = array(
			'route' => '/admin/gestao/sala/inserir',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classRoomInsert'
		);

		$routes['adminClassRoomList'] = array(
			'route' => '/admin/gestao/sala/lista',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classRoomList'
		);

		$routes['adminAvailableRoomNumbers'] = array(
			'route' => '/admin/gestao/sala/lista-numeros-disponiveis',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'availableRoomNumbers'
		);

		$routes['adminClassRoomDelete'] = array(
			'route' => '/admin/gestao/sala/deletar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classRoomDelete'
		);

		$routes['adminClassRoomUpdate'] = array(
			'route' => '/admin/gestao/sala/atualizar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classRoomUpdate'
		);

		$routes['adminActiveClassRoom'] = array(
			'route' => '/admin/gestao/turma/lista-salas',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'activeClassRoom'
		);

		// Rotas referente ao curso no portal do administrador

		$routes['adminCourseManagement'] = array(
			'route' => '/admin/gestao/curso',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'courseManagement'
		);

		$routes['adminCourseInsert'] = array(
			'route' => '/admin/gestao/curso/inserir',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'courseInsert'
		);

		$routes['adminCourseList'] = array(
			'route' => '/admin/gestao/curso/lista',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'courseList'
		);

		$routes['adminCourseUpdate'] = array(
			'route' => '/admin/gestao/curso/atualizar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'courseUpdate'
		);

		$routes['adminCourseDelete'] = array(
			'route' => '/admin/gestao/curso/deletar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'courseDelete'
		);

		$routes['adminAvailableCourse'] = array(
			'route' => '/admin/gestao/turma/lista-cursos',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'availableCourse'
		);

		$routes['adminTotalStudentsCourse'] = array(
			'route' => '/admin/gestao/curso/total-alunos-curso',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'totalStudentsCourse'
		);

		$routes['adminTotalStudentSituationSchoolYear'] = array(
			'route' => '/admin/gestao/home/situacao-alunos-periodo-letivo',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'studentSituationSchoolYear'
		);

		$routes['adminTotalRematriumMarkedWithYesAndNo'] = array(
			'route' => '/admin/gestao/home/situacao-rematriculas-recebidas',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'totalRematriumMarkedWithYesAndNo'
		);

		// Rotas referente a disciplina no portal do administrador

		$routes['adminDisciplineManagement'] = array(
			'route' => '/admin/gestao/disciplina',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplineManagement'
		);

		$routes['adminDisciplineInsert'] = array(
			'route' => '/admin/gestao/disciplina/inserir',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplineInsert'
		);

		$routes['adminDisciplineList'] = array(
			'route' => '/admin/gestao/disciplina/lista',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplineList'
		);

		$routes['adminDisciplineUpdate'] = array(
			'route' => '/admin/gestao/disciplina/atualizar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplineUpdate'
		);

		$routes['adminDisciplineDelete'] = array(
			'route' => '/admin/gestao/disciplina/deletar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplineDelete'
		);

		$routes['adminDisciplineSeek'] = array(
			'route' => '/admin/gestao/disciplina/buscar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplineSeek'
		);

		$routes['adminDisciplineData'] = array(
			'route' => '/admin/gestao/disciplina/dados',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplineData'
		);

		$routes['adminDisciplineAvailable'] = array(
			'route' => '/admin/gestao/disciplina/disponiveis',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplineAvailable'
		);

		// Rotas referente a turma no portal do administrador

		$routes['adminClassManagement'] = array(
			'route' => '/admin/gestao/turma',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classManagement'
		);

		$routes['adminClassInsert'] = array(
			'route' => '/admin/gestao/turma/inserir',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classInsert'
		);

		$routes['adminClassUpdate'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/atualizar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classUpdate'
		);

		$routes['adminStudentsAverage'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/medias-alunos',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'studentsAverage'
		);

		$routes['adminStudentsAverageSeek'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/medias-alunos/buscar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'studentsAverageSeek'
		);

		$routes['adminClassDelete'] = array(
			'route' => '/admin/gestao/turma/deletar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classDelete'
		);

		$routes['adminClassData'] = array(
			'route' => '/admin/gestao/turma/dados',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classData'
		);

		$routes['adminClassList'] = array(
			'route' => '/admin/gestao/turma/lista',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classList'
		);

		$routes['adminClassCheck'] = array(
			'route' => '/admin/gestao/turma/verificar-dados',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classCheck'
		);

		$routes['adminClassSeek'] = array(
			'route' => '/admin/gestao/turma/buscar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classSeek'
		);

		$routes['adminAvailableListClass'] = array(
			'route' => '/admin/gestao/turma/turmas-disponiveis',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'classAvailable'
		);

		$routes['adminClassProfile'] = array(
			'route' => '/admin/gestao/turma/perfil-turma',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classProfile'
		);

		$routes['adminClassDisciplineInsert'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/turma-disciplina/inserir',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'classDisciplineInsert'
		);

		$routes['adminListTeacherClass'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/turma-disciplina/professores-turma',
			'controller' => 'Admin\\AdminTeacherController',
			'action' => 'listTeacherClass'
		);

		$routes['adminListTeachersDisciplineClass'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/turma-disciplina/professores-disciplina-turma',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'listTeachersDisciplineClass'
		);

		$routes['adminUpdateClassDiscipline'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/turma-disciplina/atualizar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'updateClassDiscipline'
		);

		$routes['adminSubjectAvailableClass'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/turma-disciplina/select-disciplinas',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'subjectAvailableClass'
		);

		$routes['adminDisciplinesClassAlreadyAdded'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/turma-disciplina/disciplinas-adicionadas',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplinesClassAlreadyAdded'
		);

		$routes['adminDisciplineClassDelete'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/turma-disciplina/deletar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'disciplineClassDelete'
		);

		$routes['adminExamInsert'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/avaliacoes/inserir',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'examInsert'
		);

		$routes['adminSumUnitGrades'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/avaliacoes/soma-notas-unidade',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'sumUnitGrades'
		);

		$routes['adminExamList'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/avaliacoes/lista',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'examList'
		);

		$routes['adminRecentsExam'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/avaliacoes/lista-recentes',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'recentsExam'
		);

		$routes['adminExamData'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/avaliacoes/dados',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'examData'
		);

		$routes['adminExamUpdate'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/avaliacoes/atualizar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'examUpdate'
		);

		$routes['adminExamDeletar'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/avaliacoes/deletar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'examDelete'
		);

		$routes['adminExamSeek'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/avaliacoes/buscar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'examSeek'
		);

		$routes['adminCheckExamName'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/avaliacoes/verificar-nome',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'checkExamName'
		);

		$routes['adminInsertExamNote'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/boletim/adicionar-nota-avaliacao',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'insertExamNote'
		);

		$routes['adminNotesNotAddedYet'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/notas-disponiveis',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'notesNotAddedYet'
		);

		$routes['adminOverallStudentAverages'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/medias-gerais',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'overallStudentAverages'
		);

		$routes['adminSeekOverallStudentAverages'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/medias-gerais/buscar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'seekOverallStudentAverages'
		);

		$routes['adminSwitchClasses'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/troca-turma',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'switchClasses'
		);

		$routes['adminNoteList'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/lista-notas',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'noteListStudent'
		);

		$routes['adminNoteListClass'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/lista-notas',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'noteListClass'
		);

		$routes['adminNoteSeek'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/lista-avaliacoes/buscar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'noteSeek'
		);

		$routes['adminNoteSeekClass'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/lista-notas/buscar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'noteSeekClass'
		);

		$routes['adminNoteData'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/lista-avaliacoes/dados',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'noteData'
		);

		$routes['adminNoteUpdate'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/avaliacoes/dados/atualizar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'noteUpdate'
		);

		$routes['adminNoteDelete'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/avaliacoes/dados/deletar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'noteDelete'
		);

		$routes['adminObservationInsert'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/obervacoes/inserir',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'observationInsert'
		);

		$routes['adminObservationList'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/obervacoes/lista',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'observationList'
		);

		$routes['adminObservationUpdate'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/obervacoes/atualizar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'observationUpdate'
		);

		$routes['adminObservationDelete'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/obervacoes/deletar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'observationDelete'
		);

		$routes['adminLackInsert'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/faltas/inserir',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'lackInsert'
		);

		$routes['adminLackAvailable'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/faltas/disponiveis',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'lackAvailable'
		);

		$routes['adminLackList'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/faltas/lista',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'lackList'
		);

		$routes['adminLackData'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/faltas/dados',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'lackData'
		);

		$routes['adminLackUpdate'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/faltas/atualizar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'lackUpdate'
		);

		$routes['adminLackSeek'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/faltas/buscar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'lackSeek'
		);

		$routes['adminDisciplineFinalData'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/medias-finais',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'disciplineFinalData'
		);

		$routes['adminDisciplineFinalDataInsert'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/medias-finais/inserir',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'disciplineFinalDataInsert'
		);

		$routes['adminDisciplineAverageList'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/medias-finais/lista',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'disciplineAverageList'
		);

		$routes['adminDisciplineMediaAlreadyAdded'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/medias-finais/disponiveis',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'disciplineMediaAlreadyAdded'
		);

		$routes['adminDisciplineMediaUpdate'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aluno/medias-finais/atualizar',
			'controller' => 'Admin\\AdminTeacherStudentController',
			'action' => 'disciplineMediaUpdate'
		);

		$routes['adminListRematrugRequests'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/solicitacoes-rematricula',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'listRematrugRequests'
		);

		$routes['adminStudentsAlreadyRegisteredNextYear'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/rematricula/alunos-ja-matriculados',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'studentsAlreadyRegisteredNextYear'
		);

		$routes['adminRematrug'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/rematricular',
			'controller' => 'Admin\\AdminStudentController',
			'action' => 'rematrug'
		);

		$routes['adminInsertWarning'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aviso/inserir',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'warningInsert'
		);

		$routes['adminListWarning'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aviso/listagem',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'warningList'
		);

		$routes['adminUpdateWarning'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aviso/atualizar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'warningUpdate'
		);

		$routes['adminDeleteWarning'] = array(
			'route' => '/admin/gestao/turma/perfil-turma/aviso/deletar',
			'controller' => 'Admin\\AdminManagementController',
			'action' => 'warningDelete'
		);

		// Rotas do portal do docente

		$routes['IndexTeacherPortal'] = array(
			'route' => '/portal-docente',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'index'
		);

		$routes['loginTeacherPortal'] = array(
			'route' => '/portal-docente/login',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'auth'
		);

		$routes['homeTeacherPortal'] = array(
			'route' => '/portal-docente/home',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'home'
		);

		$routes['teacherClassesTeacherPortal'] = array(
			'route' => '/portal-docente/turmas',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'teacherClasses'
		);

		$routes['seekTeacherClasses'] = array(
			'route' => '/portal-docente/turmas/buscar',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'seekTeacherClasses'
		);

		$routes['teacherPortalSettings'] = array(
			'route' => '/portal-docente/configuracoes',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'settings'
		);

		$routes['teacherPortalUpdate'] = array(
			'route' => '/portal-docente/perfil/atualizar',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'updateTeacherPortal'
		);

		$routes['teacherPortalHome'] = array(
			'route' => '/portal-docente/home',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'home'
		);

		$routes['teacherPortalStudentBasedFinalAverage'] = array(
			'route' => '/portal-docente/aproveitamento-alunos-base-media-final',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'studentBasedFinalAverage'
		);

		$routes['exitTeacherPortal'] = array(
			'route' => '/portal-docente/sair',
			'controller' => 'TeacherPortal\\TeacherPortalController',
			'action' => 'exit'
		);

		// Rotas do portal do aluno

		$routes['IndexStudentPortal'] = array(
			'route' => '/portal-aluno',
			'controller' => 'StudentPortal\\StudentPortalController',
			'action' => 'index'
		);

		$routes['StudentPortalUpdate'] = array(
			'route' => '/portal-aluno/atualizar',
			'controller' => 'StudentPortal\\StudentPortalController',
			'action' => 'updateStudentPortal'
		);

		$routes['HomeStudentPortal'] = array(
			'route' => '/portal-aluno/home',
			'controller' => 'StudentPortal\\StudentPortalController',
			'action' => 'home'
		);

		$routes['authStudentPortal'] = array(
			'route' => '/portal-aluno/login',
			'controller' => 'StudentPortal\\StudentPortalController',
			'action' => 'auth'
		);

		$routes['exitStudentPortal'] = array(
			'route' => '/portal-aluno/sair',
			'controller' => 'StudentPortal\\StudentPortalController',
			'action' => 'exit'
		);

		$routes['RematrugStudentPortal'] = array(
			'route' => '/portal-aluno/rematricular',
			'controller' => 'StudentPortal\\StudentPortalController',
			'action' => 'sendRematriumRequest'
		);

		$routes['StudentPortalSettings'] = array(
			'route' => '/portal-aluno/configuracoes',
			'controller' => 'StudentPortal\\StudentPortalController',
			'action' => 'settings'
		);

		$routes['StudentPortalUpdateSettings'] = array(
			'route' => '/portal-aluno/configuracoes/atualizar',
			'controller' => 'StudentPortal\\StudentPortalController',
			'action' => 'updateSettings'
		);

		// Rotas referente aos controles dos administradores no portal do administrador 

		$routes['adminSettings'] = array(
			'route' => '/admin/configuracoes',
			'controller' => 'Admin\\AdminController',
			'action' => 'settings'
		);

		$routes['adminSettingsUpdate'] = array(
			'route' => '/admin/configuracoes/atualizar',
			'controller' => 'Admin\\AdminController',
			'action' => 'settingsUpdate'
		);

		$routes['adminUpdateAdminProfilePicture'] = array(
			'route' => '/admin/configuracoes/atualizar-foto',
			'controller' => 'Admin\\AdminController',
			'action' => 'updateAdminProfilePicture'
		);

		$routes['adminUpdate'] = array(
			'route' => '/admin/configuracoes/perfil/atualizar',
			'controller' => 'Admin\\AdminController',
			'action' => 'adminUpdate'
		);

		$routes['adminRegistration'] = array(
			'route' => '/admin/administrador/cadastro',
			'controller' => 'Admin\\AdminController',
			'action' => 'adminRegistration'
		);

		$routes['adminInsert'] = array(
			'route' => '/admin/administrador/cadastro/inserir',
			'controller' => 'Admin\\AdminController',
			'action' => 'adminInsert'
		);

		$routes['adminList'] = array(
			'route' => '/admin/administrador/lista',
			'controller' => 'Admin\\AdminController',
			'action' => 'adminList'
		);

		$routes['adminProfile'] = array(
			'route' => '/admin/administrador/lista/perfil',
			'controller' => 'Admin\\AdminController',
			'action' => 'profile'
		);


		$this->setRoutes($routes);
	}
}
