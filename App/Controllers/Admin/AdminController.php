<?php

namespace App\Controllers\Admin;

use MF\Controller\Action;
use MF\Model\Container;
use App\Tools\Tools;

class AdminController extends Action
{
    public function index()
    {
        $this->render('index', 'SimpleLayout');
    }

    public function auth()
    {

        $Admin = Container::getModel('Admin\\Admin');
        $Tool = new Tools();

        $Admin->__set('accessCode', $Tool->formatElement($_POST['accessCode']));
        $Admin->__set('name', $_POST['name']);

        $auth = $Admin->login();
        $account_status = $Admin->accountStatus();

        if (count($auth) != 1) {

            header('Location: /admin?error=dados-incorretos');

        } else {

            if ($account_status[0]->account_status == 1) {

                if (!isset($_SESSION)) session_start();

                $adminName = explode(" ", $auth[0]->name);

                $_SESSION['Admin'] = [
                    'id' => $auth[0]->id,
                    'name' => $adminName[0] . ' ' . $adminName[1] . ' ' . $adminName[2],
                    'profilePhoto' => $auth[0]->profile_photo,
                    'hierarchyFunction' => $auth[0]->hierarchy_function
                ];

                header('Location: /admin/home');

            } else {

                header("Location: /admin?error=Conta desativada");
            }
        }
    }


    public function adminRegistration()
    {

        session_start();

        if($_SESSION['Admin']['hierarchyFunction'] == 1){

        $Admin = Container::getModel('Admin\\Admin');
        $HierarchyFunction = Container::getModel('GeneralManagement\\HierarchyFunction');

        $this->view->availableSex = $Admin->availableSex();
        $this->view->pcd = $Admin->pcd();
        $this->view->bloodType = $Admin->availablebloodType();
        $this->view->listHierarchyFunction = $HierarchyFunction->listStateAdmin();

        $this->render('admin/adminRegistration', 'AdminLayout');

        }else{
            header('Location: /admin/home');
        }
    }


    public function home()
    {

        $Student = Container::getModel('Student\\Student');
        $Settings = Container::getModel('Admin\\Settings');
        $SchoolTerm = Container::getModel('GeneralManagement\\SchoolTerm');
        $Exam = Container::getModel('TeacherStudent\\Exam');
        $Note = Container::getModel('TeacherStudent\\Note');
        $Lack = Container::getModel('TeacherStudent\\Lack');
        $ClasseWarning = Container::getModel('GeneralManagement\\ClasseWarning');
        $DisciplineAverage = Container::getModel('TeacherStudent\\DisciplineAverage');
        $Observation = Container::getModel('TeacherStudent\\Observation');

        $this->view->recentlyEnrolledStudents = $Student->recentlyEnrolledStudents(1000);
        $this->view->studentTotal = count($Student->readAll());
        $this->view->studentsAddedToday = $Student->studentsAddedToday();
        $this->view->unitControlCurrent = $Settings->unitControlCurrent();
        $this->view->SchoolTermActive = $SchoolTerm->active();
        $this->view->listExam = $Exam->readAll(1);
        $this->view->listNote = $Note->readAll(1);
        $this->view->listLack = $Lack->readAll(1);
        $this->view->listObservation = $Observation->readAll();
        $this->view->listDisciplineAverage = $DisciplineAverage->readAll();
        $this->view->listWarning = $ClasseWarning->readAll();

        $this->render('home', 'AdminLayout');
    }


    public function settings()
    {

        $Settings = Container::getModel('Admin\\Settings');
        $Admin = Container::getModel('Admin\\Admin');
        $HierarchyFunction = Container::getModel('GeneralManagement\\HierarchyFunction');

        if (!isset($_SESSION)) session_start();

        $Admin->__set('id', $_SESSION['Admin']['id']);

        $this->view->unitControlList = $Settings->unitControlList();
        $this->view->unitControlCurrent = $Settings->unitControlCurrent();
        $this->view->currentStatusRematrium = $Settings->currentStatusRematrium();
        $this->view->registrationControlOptions = $Settings->registrationControlOptions();
        $this->view->data = $Admin->dataGeneral();
        $this->view->availableSex = $Admin->availableSex();
        $this->view->pcd = $Admin->pcd();
        $this->view->bloodType = $Admin->availablebloodType();
        $this->view->listHierarchyFunction = $HierarchyFunction->listStateAdmin();
        $this->view->modalType = 'data-and-config';
        $this->view->adminCurrentHierarchy = $_SESSION['Admin']['hierarchyFunction'];
        $this->view->accountStates = $Admin->accountStates();

        $this->render('settings', 'SimpleLayout');
    }


    public function adminUpdate()
    {

        $Admin = Container::getModel('Admin\\Admin');
        $Address =  Container::getModel('People\\Address');
        $Telephone = Container::getModel('People\Telephone');

        $Tool = new Tools();

        if (!isset($_SESSION)) session_start();

        $Address->__set('addressId', $_POST['addressId']);
        $Address->__set('district', $_POST['district']);
        $Address->__set('address', $_POST['address']);
        $Address->__set('uf', $_POST['uf']);
        $Address->__set('county', $_POST['county']);
        $Address->__set('zipCode', $Tool->formatElement($_POST['zipCode']));

        $Telephone->__set('telephoneId', $_POST['telephoneId']);
        $Telephone->__set('telephoneNumber', $Tool->formatElement($_POST['telephoneNumber']));

        $Admin->__set('name', $_POST['name']);
        $Admin->__set('accessCode', $Tool->formatElement($_POST['accessCode']));
        $Admin->__set('birthDate', $_POST['birthDate']);
        $Admin->__set('cpf', $Tool->formatElement($_POST['cpf']));
        $Admin->__set('naturalness', $_POST['naturalness']);
        $Admin->__set('nationality', $_POST['nationality']);
        $Admin->__set('email', $_POST['email']);
        $Admin->__set('fk_id_sex', $_POST['sex']);
        $Admin->__set('fk_id_blood_type', $_POST['bloodType']);
        $Admin->__set('fk_id_pcd', $_POST['pcd']);
        $Admin->__set('fk_id_hierarchy_function', $_POST['hierarchyFunction']);
        $Admin->__set('id', $_POST['adminId']);
        $Admin->__set('fk_id_account_state', $_POST['accountState']);

        $Telephone->update();
        $Address->update();
        $Admin->update();
    }


    public function settingsUpdate()
    {

        $Settings = Container::getModel('Admin\\Settings');

        $Settings->__set('fk_id_control_unity', $_POST['controlUnity']);
        $Settings->__set('fk_id_control_rematrug', $_POST['controlRematrug']);

        $Settings->update();
    }


    public function updateAdminProfilePicture()
    {

        $Admin = Container::getModel('Admin\\Admin');
        $Tool = new Tools();

        empty($_GET['oldPhoto']) ? '' : unlink('../public/assets/img/adminProfilePhotos/' . $_POST['oldPhoto']);

        $Tool->image($Admin, '../public/assets/img/adminProfilePhotos/');
        
        $Admin->__set('id', $_POST['id']);

        if (!isset($_SESSION)) session_start();

        $Admin->updateProfilePicture();
        $profilePhoto = $Admin->dataGeneral();
        
        $_SESSION['Admin']['profilePhoto'] = $profilePhoto[0]->profile_photo;
        
    }


    public function profile()
    {

        $Admin = Container::getModel('Admin\\Admin');
        $HierarchyFunction = Container::getModel('GeneralManagement\\HierarchyFunction');

        $Admin->__set('id', $_GET['id']);

        if (!isset($_SESSION)) session_start();

        $this->view->data = $Admin->dataGeneral();
        $this->view->modalType = 'data';
        $this->view->availableSex = $Admin->availableSex();
        $this->view->pcd = $Admin->pcd();
        $this->view->bloodType = $Admin->availablebloodType();
        $this->view->listHierarchyFunction = $HierarchyFunction->listStateAdmin();
        $this->view->accountStates = $Admin->accountStates();
        $this->view->adminCurrentHierarchy = $_SESSION['Admin']['hierarchyFunction'];

        $this->render('settings', 'SimpleLayout');
    }


    public function adminInsert()
    {

        $Tool = new Tools();

        $Address =  Container::getModel('People\\Address');
        $Telephone = Container::getModel('People\Telephone');
        $Admin = Container::getModel('Admin\\Admin');

        $Address->__set('district', $_POST['district']);
        $Address->__set('address', $_POST['address']);
        $Address->__set('uf', $_POST['uf']);
        $Address->__set('county', $_POST['county']);
        $Address->__set('zipCode', $Tool->formatElement($_POST['zipCode']));

        $Telephone->__set('telephoneNumber', $Tool->formatElement($_POST['telephoneNumber']));
        $Admin->__set('accessCode', $Tool->formatElement($_POST['accessCode']));

        $Admin->__set('name', $_POST['name']);
        $Admin->__set('birthDate', $_POST['birthDate']);
        $Admin->__set('cpf', $Tool->formatElement($_POST['cpf']));
        $Tool->image($Admin, '../public/assets/img/adminProfilePhotos/');
        $Admin->__set('naturalness', $_POST['naturalness']);
        $Admin->__set('nationality', $_POST['nationality']);
        $Admin->__set('email', $_POST['email']);
        $Admin->__set('fk_id_account_state', 1);
        $Admin->__set('fk_id_hierarchy_function', $_POST['hierarchyFunction']);
        $Admin->__set('fk_id_sex', $_POST['sex']);
        $Admin->__set('fk_id_blood_type', $_POST['bloodType']);
        $Admin->__set('fk_id_pcd', $_POST['pcd']);
        $Admin->__set('fk_id_telephone', $Telephone->insert());
        $Admin->__set('fk_id_address', $Address->insert());

        $Admin->insert();

        header('Location: /admin/aluno/cadastro');
    }


    public function adminList()
    {

        session_start();

        if($_SESSION['Admin']['hierarchyFunction'] == 1){

            $Admin = Container::getModel('Admin\\Admin');

            $this->view->listAdmin = $Admin->list();

            $this->render('admin/adminList', 'AdminLayout');

        }else{
            header('Location: /admin/home');
        }
    }


    public function exit()
    {

        if (!isset($_SESSION)) session_start();

        unset($_SESSION['Admin']);

        header('Location: /admin');
    }
}
