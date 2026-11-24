<?php 
#init the session to check if data exist
session_start();

#variable to confirm user is authenticated in the system
$auth = false;

#Check there's one session in the system
if(isset($_SESSION) AND !empty($_SESSION)){
    #if user's data exist in the session the variable $auth will be TRUE
    $auth = true;
}
#get the route and method to use
$route = (isset($_REQUEST['route'])) ? $_REQUEST['route'] : "";
$method = (isset($_REQUEST['method'])) ? $_REQUEST['method'] : "";

if($route === "auth"){
    require_once('app/controllers/auth/authController.php');
    $auth = new AuthController();
    switch ($method) {
        case 'login':
            $auth->login($_POST);   
            break;
        
        case 'logout':
            $auth->logout($_POST);   
            break;
    }
}


#check if user is authenticated to use this modules
if($auth){
    #route's and method's manager
    if(!empty($route) && !empty($method)){
        switch ($route) {
            case 'students':
                require_once('app/controllers/studentsController.php');
                $table = new StudentsController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'picture':
                require_once('app/controllers/save_img.php');
                $table = new StudentsPictureController();
                switch ($method) {

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    /*case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;*/
                }
                break;
            
            case 'studentsAcademic':
                require_once('app/controllers/academicController.php');
                $table = new AcademicController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'teachers':
                require_once('app/controllers/teachersController.php');
                $table = new TeachersController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'analyst':
                require_once('app/controllers/analystController.php');
                $table = new AnalystController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
        
            case 'subjects':
                require_once('app/controllers/subjectsController.php');
                $table = new SubjectsController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'pnf':
                require_once('app/controllers/pnfController.php');
                $table = new PNFController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'subjectStudents':
                require_once('app/controllers/relations/students/subjectStudentsController.php');
                $table = new SubjectStudentsController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'pnfAnalyst':
                require_once('app/controllers/relations/analyst/pnfAnalystController.php');
                $table = new PNFanalystController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'pnfStudents':
                require_once('app/controllers/relations/students/pnfStudentsController.php');
                $table = new PNFstudentsController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'pnfTeachers':
                require_once('app/controllers/relations/teachers/pnfTeachersController.php');
                $table = new PNFteachersController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'subjectsTeachers':
                require_once('app/controllers/relations/teachers/subjectsTeachersController.php');
                $table = new SubjectsTeachersController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'period':
                require_once('app/controllers/periodController.php');
                $table = new PeriodController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'periodStudents':
                require_once('app/controllers/relations/students/periodStudentsController.php');
                $table = new PeriodStudentsController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'periodSubjects':
                require_once('app/controllers/relations/subjects/periodSubjectsController.php');
                $table = new PeriodSubjectsController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'quarter':
                require_once('app/controllers/quarterController.php');
                $table = new QuarterController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;
                        
                    case 'active':
                        $table->active($_POST);
                        break;    
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
            
            case 'quarterStudents':
                require_once('app/controllers/relations/students/quarterStudentsController.php');
                $table = new QuarterStudentsController();
                switch ($method) {
                    case 'index':
                        $table->index();
                        break;
                    
                    case 'show':
                        $table->show($_REQUEST['id']);
                        break;
                    
                    case 'create':
                        $table->create();
                        break;

                    case 'store':
                        $table->store($_POST);
                        break;
                    
                    case 'edit':
                        $table->edit($_REQUEST['id']);
                        break;
                    
                    case 'update':
                        $table->update($_POST);
                        break;  
                        
                    case 'destroy':
                        $table->destroy($_REQUEST['id']);
                        break;
                    
                    default:
                        $table->index();
                        break;
                }
                break;
                case 'resources':
                    require_once('app/controllers/ResourcesController.php');
                    $table = new ResourcesController();
                    switch ($method) {
                        case 'index':
                            $table->index();
                            break;
                            // case 'show':
                            //     $table->show($_REQUEST['id']);
                            //     break;
                            
                            case 'create':
                                $table->create($_POST, $_FILES);
                                break;
        
                            case 'store':
                                $table->store($_POST,$_FILES);
                                break;
                            
                            case 'edit':
                                $table->edit($_REQUEST['id']);
                                break;
                            
                            case 'update':
                                $table->update($_POST, $_FILES);
                                break;  
                                
                            case 'destroy':
                                $table->destroy($_REQUEST['id']);
                                break;
                           
                                case 'download':
                                    $table->download($_REQUEST['id']);
                                    break;
                            
                            default:
                                $table->index();
                                break;

                    }
                    break;
        }
    }else{
        $title = "Escritorio";
        include("app/views/dashboard.php");    
    }

}else{
    $title = "Iniciar Sesión";
    include("app/views/auth/login.php");
}