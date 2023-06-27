<?php
    namespace App;
        
    require "../vendor/autoload.php";
    $router = new \Bramus\Router\Router();

    $router->mount("/academic_area", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\academic_area::getInstance($data);
            $ruta->getAllAcademic_area();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\academic_area::getInstance($data);
            $ruta->postAcademic_area();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\academic_area::getInstance($data);
            $ruta->updateAcademic_area();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\academic_area::getInstance($data);
            $ruta->deleteAcademic_area();
        });
    });
    $router->mount("/admin_area", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\admin_area::getInstance($data);
            $ruta->getAllAdmin_area();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\admin_area::getInstance($data);
            $ruta->postAdmin_area();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\admin_area::getInstance($data);
            $ruta->updateAdmin_area();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\admin_area::getInstance($data);
            $ruta->deleteAdmin_area();
        });
    });
    $router->mount("/areas", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\areas::getInstance($data);
            $ruta->getAllAreas();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\areas::getInstance($data);
            $ruta->postAreas();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\areas::getInstance($data);
            $ruta->updateAreas();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\areas::getInstance($data);
            $ruta->deleteAreas();
        });
    });
    $router->mount("/campers", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\campers::getInstance($data);
            $ruta->getAllCampers();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\campers::getInstance($data);
            $ruta->postCampers();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\campers::getInstance($data);
            $ruta->updateCampers();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\campers::getInstance($data);
            $ruta->deleteCampers();
        });
    });
    $router->mount("/chapters", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\chapters::getInstance($data);
            $ruta->getAllChapters();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\chapters::getInstance($data);
            $ruta->postChapters();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\chapters::getInstance($data);
            $ruta->updateChapters();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\chapters::getInstance($data);
            $ruta->deleteChapters();
        });
    });
    $router->mount("/cities", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\cities::getInstance($data);
            $ruta->getAllCities();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\cities::getInstance($data);
            $ruta->postCities();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\cities::getInstance($data);
            $ruta->updateCities();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\cities::getInstance($data);
            $ruta->deleteCities();
        });
    });
    $router->mount("/contact_info", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\contact_info::getInstance($data);
            $ruta->getAllContact_info();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\contact_info::getInstance($data);
            $ruta->postContact_info();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\contact_info::getInstance($data);
            $ruta->updateContact_info();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\contact_info::getInstance($data);
            $ruta->deleteContact_info();
        });
    });
    $router->mount("/countries", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\countries::getInstance($data);
            $ruta->getAllCountries();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\countries::getInstance($data);
            $ruta->postCountries();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\countries::getInstance($data);
            $ruta->updateCountries();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\countries::getInstance($data);
            $ruta->deleteCountries();
        });
    });
    $router->mount("/design_area", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\design_area::getInstance($data);
            $ruta->getAllDesign_area();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\design_area::getInstance($data);
            $ruta->postDesign_area();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\design_area::getInstance($data);
            $ruta->updateDesign_area();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\design_area::getInstance($data);
            $ruta->deleteDesign_area();
        });
    });
    $router->mount("/emergency_contact", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\emergency_contact::getInstance($data);
            $ruta->getAllEmergency_contact();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\emergency_contact::getInstance($data);
            $ruta->postEmergency_contact();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\emergency_contact::getInstance($data);
            $ruta->updateEmergency_contact();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\emergency_contact::getInstance($data);
            $ruta->deleteEmergency_contact();
        });
    });
    $router->mount("/english_skills", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\english_skills::getInstance($data);
            $ruta->getAllEnglish_skills();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\english_skills::getInstance($data);
            $ruta->postEnglish_skills();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\english_skills::getInstance($data);
            $ruta->updateEnglish_skills();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\english_skills::getInstance($data);
            $ruta->deleteEnglish_skills();
        });
    });
    $router->mount("/journey", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\journey::getInstance($data);
            $ruta->getAllJourney();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\journey::getInstance($data);
            $ruta->postJourney();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\journey::getInstance($data);
            $ruta->updateJourney();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\journey::getInstance($data);
            $ruta->deleteJourney();
        });
    });
    $router->mount("/levels", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\levels::getInstance($data);
            $ruta->getAllLevels();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\levels::getInstance($data);
            $ruta->postLevels();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\levels::getInstance($data);
            $ruta->updateLevels();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\levels::getInstance($data);
            $ruta->deleteLevels();
        });
    });
    $router->mount("/locations", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\locations::getInstance($data);
            $ruta->getAllLocations();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\locations::getInstance($data);
            $ruta->postLocations();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\locations::getInstance($data);
            $ruta->updateLocations();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\locations::getInstance($data);
            $ruta->deleteLocations();
        });
    });
    $router->mount("/maint_area", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\maint_area::getInstance($data);
            $ruta->getAllMaint_area();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\maint_area::getInstance($data);
            $ruta->postMaint_area();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\maint_area::getInstance($data);
            $ruta->updateMaint_area();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\maint_area::getInstance($data);
            $ruta->deleteMaint_area();
        });
    });
    $router->mount("/marketing_area", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\marketing_area::getInstance($data);
            $ruta->getAllMarketing_area();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\marketing_area::getInstance($data);
            $ruta->postMarketing_area();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\marketing_area::getInstance($data);
            $ruta->updateMarketing_area();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\marketing_area::getInstance($data);
            $ruta->deleteMarketing_area();
        });
    });
    $router->mount("/modules", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\modules::getInstance($data);
            $ruta->getAllModules();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\modules::getInstance($data);
            $ruta->postModules();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\modules::getInstance($data);
            $ruta->updateModules();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\modules::getInstance($data);
            $ruta->deleteModules();
        });
    });
    $router->mount("/optional_topics", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\optional_topics::getInstance($data);
            $ruta->getAllOptional_topics();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\optional_topics::getInstance($data);
            $ruta->postOptional_topics();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\optional_topics::getInstance($data);
            $ruta->updateOptional_topics();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\optional_topics::getInstance($data);
            $ruta->deleteOptional_topics();
        });
    });
    $router->mount("/personal_ref", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\personal_ref::getInstance($data);
            $ruta->getAllPersonal_reF();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\personal_ref::getInstance($data);
            $ruta->postPersonal_ref();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\personal_ref::getInstance($data);
            $ruta->updatePersonal_ref();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\personal_ref::getInstance($data);
            $ruta->deletePersonal_ref();
        });
    });
    $router->mount("/position", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\position::getInstance($data);
            $ruta->getAllPosition();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\position::getInstance($data);
            $ruta->postPosition();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\position::getInstance($data);
            $ruta->updatePosition();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\position::getInstance($data);
            $ruta->deletePosition();
        });
    });
    $router->mount("/psychologist", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\psychologist::getInstance($data);
            $ruta->getAllPsychologist();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\psychologist::getInstance($data);
            $ruta->postPsychologist();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\psychologist::getInstance($data);
            $ruta->updatePsychologist();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\psychologist::getInstance($data);
            $ruta->deletePsychologist();
        });
    });
    $router->mount("/regions", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\regions::getInstance($data);
            $ruta->getAllRegions();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\regions::getInstance($data);
            $ruta->postRegions();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\regions::getInstance($data);
            $ruta->updateRegions();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\regions::getInstance($data);
            $ruta->deleteRegions();
        });
    });
    $router->mount("/review_skills", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\review_skills::getInstance($data);
            $ruta->getAllReview_skills();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\review_skills::getInstance($data);
            $ruta->postReview_skills();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\review_skills::getInstance($data);
            $ruta->updateReview_skills();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\review_skills::getInstance($data);
            $ruta->deleteReview_skills();
        });
    });
    $router->mount("/routes", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\routes::getInstance($data);
            $ruta->getAllRoutes();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\routes::getInstance($data);
            $ruta->postRoutes();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\routes::getInstance($data);
            $ruta->updateRoutes();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\routes::getInstance($data);
            $ruta->deleteRoutes();
        });
    });
    $router->mount("/software_skills", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\software_skills::getInstance($data);
            $ruta->getAllSoftware_skills();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\software_skills::getInstance($data);
            $ruta->postSoftware_skills();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\software_skills::getInstance($data);
            $ruta->updateSoftware_skills();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\software_skills::getInstance($data);
            $ruta->deleteSoftware_skills();
        });
    });
    $router->mount("/soft_skills", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\soft_skills::getInstance($data);
            $ruta->getAllSoft_skills();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\soft_skills::getInstance($data);
            $ruta->postSoft_skills();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\soft_skills::getInstance($data);
            $ruta->updateSoft_skills();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\soft_skills::getInstance($data);
            $ruta->deleteSoft_skills();
        });
    });
    $router->mount("/staff", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\staff::getInstance($data);
            $ruta->getAllStaff();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\staff::getInstance($data);
            $ruta->postStaff();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\staff::getInstance($data);
            $ruta->updateStaff();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\staff::getInstance($data);
            $ruta->deleteStaff();
        });
    });
    $router->mount("/subjects", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\subjects::getInstance($data);
            $ruta->getAllSubjects();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\subjects::getInstance($data);
            $ruta->postSubjects();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\subjects::getInstance($data);
            $ruta->updateSubjects();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\subjects::getInstance($data);
            $ruta->deleteSubjects();
        });
    });
    $router->mount("/teachers", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\teachers::getInstance($data);
            $ruta->getAllTeachers();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\teachers::getInstance($data);
            $ruta->postTeachers();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\teachers::getInstance($data);
            $ruta->updateTeachers();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\teachers::getInstance($data);
            $ruta->deleteTeachers();
        });
    });
    $router->mount("/team_educators", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\team_educators::getInstance($data);
            $ruta->getAllTeam_educators();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\team_educators::getInstance($data);
            $ruta->postTeam_educators();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\team_educators::getInstance($data);
            $ruta->updateTeam_educators();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\team_educators::getInstance($data);
            $ruta->deleteTeam_educators();
        });
    });
    $router->mount("/team_schedule", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\team_schedule::getInstance($data);
            $ruta->getAllTeam_schedule();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\team_schedule::getInstance($data);
            $ruta->postTeam_schedule();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\team_schedule::getInstance($data);
            $ruta->updateTeam_schedule();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\team_schedule::getInstance($data);
            $ruta->deleteTeam_schedule();
        });
    });
    $router->mount("/thematic_units", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\thematic_units::getInstance($data);
            $ruta->getAllThematic_units();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\thematic_units::getInstance($data);
            $ruta->postThematic_units();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\thematic_units::getInstance($data);
            $ruta->updateThematic_units();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\thematic_units::getInstance($data);
            $ruta->deleteThematic_units();
        });
    });
    $router->mount("/themes", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\themes::getInstance($data);
            $ruta->getAllThemes();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\themes::getInstance($data);
            $ruta->postThemes();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\themes::getInstance($data);
            $ruta->updateThemes();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\themes::getInstance($data);
            $ruta->deleteThemes();
        });
    });
    $router->mount("/topics", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\topics::getInstance($data);
            $ruta->getAllTopics();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\topics::getInstance($data);
            $ruta->postTopics();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\topics::getInstance($data);
            $ruta->updateTopics();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\topics::getInstance($data);
            $ruta->deleteTopics();
        });
    });
    $router->mount("/trainers", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\trainers::getInstance($data);
            $ruta->getAllTrainers();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\trainers::getInstance($data);
            $ruta->postTrainers();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\trainers::getInstance($data);
            $ruta->updateTrainers();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\trainers::getInstance($data);
            $ruta->deleteTrainers();
        });
    });
    $router->mount("/tutors", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\tutors::getInstance($data);
            $ruta->getAllTutors();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\tutors::getInstance($data);
            $ruta->postTutors();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\tutors::getInstance($data);
            $ruta->updateTutors();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\tutors::getInstance($data);
            $ruta->deleteTutors();
        });
    });
    $router->mount("/working_info", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\working_info::getInstance($data);
            $ruta->getAllWorking_info();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\working_info::getInstance($data);
            $ruta->postWorking_info();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\working_info::getInstance($data);
            $ruta->updateWorking_info();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\working_info::getInstance($data);
            $ruta->deleteWorking_info();
        });
    });
    $router->mount("/work_reference", function() use($router) {
        $router->get("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\work_reference::getInstance($data);
            $ruta->getAllWork_reference();
        });
        $router->post("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\postWork_reference::getInstance($data);
            $ruta->postTutors();
        });
        $router->put("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\work_reference::getInstance($data);
            $ruta->updateWork_reference();
        });
        $router->delete("/", function(){
            $data = json_decode(file_get_contents("php://input"), true);
            $ruta = \App\work_reference::getInstance($data);
            $ruta->deleteWork_reference();
        });
    });
    $router->run();
?>