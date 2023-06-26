<?php
    namespace App;
        
    require "../vendor/autoload.php";


    // funciones work_references.
    // \App\work_reference::getInstance(json_decode(file_get_contents("php://input"), true))->postWork_reference();
    // \App\work_reference::getInstance(json_decode(file_get_contents("php://input"), true))->getAllWork_reference();
    // \App\work_reference::getInstance(json_decode(file_get_contents("php://input"), true))->updateWork_reference();
    // \App\work_reference::getInstance(json_decode(file_get_contents("php://input"), true))->deleteWork_reference();
    //  funciones personal_ref.
    // \App\personal_ref::getInstance(json_decode(file_get_contents("php://input"), true))->postPersonal_ref();
    // \App\personal_ref::getInstance(json_decode(file_get_contents("php://input"), true))->getAllPersonal_reF();
    // \App\personal_ref::getInstance(json_decode(file_get_contents("php://input"), true))->updatePersonal_ref();
    // \App\personal_ref::getInstance(json_decode(file_get_contents("php://input"), true))->deletePersonal_ref();
    //funciones Countries.
    // \App\countries::getInstance(json_decode(file_get_contents("php://input"), true))->postCountries();
    // \App\countries::getInstance(json_decode(file_get_contents("php://input"), true))->getAllCountries();
    // \App\countries::getInstance(json_decode(file_get_contents("php://input"), true))->updateCountries();
    // \App\countries::getInstance(json_decode(file_get_contents("php://input"), true))->deleteCountries();
    //funciones regions.
    // \App\regions::getInstance(json_decode(file_get_contents("php://input"), true))->postRegions();
    // \App\regions::getInstance(json_decode(file_get_contents("php://input"), true))->getAllRegions();
    // \App\regions::getInstance(json_decode(file_get_contents("php://input"), true))->updateRegions();
    // \App\regions::getInstance(json_decode(file_get_contents("php://input"), true))->deleteRegions();
    //funciones cities.
    // \App\cities::getInstance(json_decode(file_get_contents("php://input"), true))->postCities();
    // \App\cities::getInstance(json_decode(file_get_contents("php://input"), true))->getAllCities();
    // \App\cities::getInstance(json_decode(file_get_contents("php://input"), true))->updateCities();
    // \App\cities::getInstance(json_decode(file_get_contents("php://input"), true))->deleteCities();
    //funciones areas.
    // \App\areas::getInstance(json_decode(file_get_contents("php://input"), true))->postAreas();
    // \App\areas::getInstance(json_decode(file_get_contents("php://input"), true))->getAllAreas();
    // \App\areas::getInstance(json_decode(file_get_contents("php://input"), true))->updateAreas();
    // \App\areas::getInstance(json_decode(file_get_contents("php://input"), true))->deleteAreas();
    //funciones position.
    // \App\position::getInstance(json_decode(file_get_contents("php://input"), true))->postPosition();
    // \App\position::getInstance(json_decode(file_get_contents("php://input"), true))->getAllPosition();
    // \App\position::getInstance(json_decode(file_get_contents("php://input"), true))->updatePosition();
    // \App\position::getInstance(json_decode(file_get_contents("php://input"), true))->deletePosition();
    //funciones journey.
    // \App\journey::getInstance(json_decode(file_get_contents("php://input"), true))->postJourney();
    // \App\journey::getInstance(json_decode(file_get_contents("php://input"), true))->getAllJourney();
    // \App\journey::getInstance(json_decode(file_get_contents("php://input"), true))->updateJourney();
    // \App\journey::getInstance(json_decode(file_get_contents("php://input"), true))->deleteJourney();
    //funciones team_schedule.
    // \App\team_schedule::getInstance(json_decode(file_get_contents("php://input"), true))->postTeam_schedule();
    // \App\team_schedule::getInstance(json_decode(file_get_contents("php://input"), true))->getAllTeam_schedule();
    // \App\team_schedule::getInstance(json_decode(file_get_contents("php://input"), true))->updateTeam_schedule();
    // \App\team_schedule::getInstance(json_decode(file_get_contents("php://input"), true))->deleteTeam_schedule();
    //funciones team_educators.
    // \App\team_educators::getInstance(json_decode(file_get_contents("php://input"), true))->postTeam_educators();
    // \App\team_educators::getInstance(json_decode(file_get_contents("php://input"), true))->getAllTeam_educators();
    // \App\team_educators::getInstance(json_decode(file_get_contents("php://input"), true))->updateTeam_educators();
    // \App\team_educators::getInstance(json_decode(file_get_contents("php://input"), true))->deleteTeam_educators();
    //funciones subjects.
    // \App\subjects::getInstance(json_decode(file_get_contents("php://input"), true))->postSubjects();
    // \App\subjects::getInstance(json_decode(file_get_contents("php://input"), true))->getAllSubjects();
    // \App\subjects::getInstance(json_decode(file_get_contents("php://input"), true))->updateSubjects();
    // \App\subjects::getInstance(json_decode(file_get_contents("php://input"), true))->deleteSubjects();
    //funciones levels.
    // \App\levels::getInstance(json_decode(file_get_contents("php://input"), true))->postLevels();
    // \App\levels::getInstance(json_decode(file_get_contents("php://input"), true))->getAllLevels();
    // \App\levels::getInstance(json_decode(file_get_contents("php://input"), true))->updateLevels();
    // \App\levels::getInstance(json_decode(file_get_contents("php://input"), true))->deleteLevels();
    //funciones locations.
    // \App\locations::getInstance(json_decode(file_get_contents("php://input"), true))->postLocations();
    // \App\locations::getInstance(json_decode(file_get_contents("php://input"), true))->getAllLocations();
    // \App\locations::getInstance(json_decode(file_get_contents("php://input"), true))->updateLocations();
    // \App\locations::getInstance(json_decode(file_get_contents("php://input"), true))->deleteLocations();
    //funciones routes.
    // \App\routes::getInstance(json_decode(file_get_contents("php://input"), true))->postRoutes();
    // \App\routes::getInstance(json_decode(file_get_contents("php://input"), true))->getAllRoutes();
    // \App\routes::getInstance(json_decode(file_get_contents("php://input"), true))->updateRoutes();
    // \App\routes::getInstance(json_decode(file_get_contents("php://input"), true))->deleteRoutes();
    //funciones thematic_units.
    // \App\thematic_units::getInstance(json_decode(file_get_contents("php://input"), true))->postThematic_units();
    // \App\thematic_units::getInstance(json_decode(file_get_contents("php://input"), true))->getAllThematic_units();
    // \App\thematic_units::getInstance(json_decode(file_get_contents("php://input"), true))->updateThematic_units();
    // \App\thematic_units::getInstance(json_decode(file_get_contents("php://input"), true))->deleteThematic_units();
    //funciones chapters.
    // \App\chapters::getInstance(json_decode(file_get_contents("php://input"), true))->postChapters();
    // \App\chapters::getInstance(json_decode(file_get_contents("php://input"), true))->getAllChapters();
    // \App\chapters::getInstance(json_decode(file_get_contents("php://input"), true))->updateChapters();
    // \App\chapters::getInstance(json_decode(file_get_contents("php://input"), true))->deleteChapters();
    //funciones themes.
    // \App\themes::getInstance(json_decode(file_get_contents("php://input"), true))->postThemes();
    // \App\themes::getInstance(json_decode(file_get_contents("php://input"), true))->getAllThemes();
    // \App\themes::getInstance(json_decode(file_get_contents("php://input"), true))->updateThemes();
    // \App\themes::getInstance(json_decode(file_get_contents("php://input"), true))->deleteThemes();
    //funciones topics.
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->postTopics();
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->getAllTopics();
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->updateTopics();
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->deleteTopics();
    //funciones staff.
    // \App\staff::getInstance(json_decode(file_get_contents("php://input"), true))->postStaff();
    // \App\staff::getInstance(json_decode(file_get_contents("php://input"), true))->getAllStaff();
    // \App\staff::getInstance(json_decode(file_get_contents("php://input"), true))->updateStaff();
    // \App\staff::getInstance(json_decode(file_get_contents("php://input"), true))->deleteStaff();
    //funciones academic_area.
    // \App\academic_area::getInstance(json_decode(file_get_contents("php://input"), true))->postAcademic_area();
    // \App\academic_area::getInstance(json_decode(file_get_contents("php://input"), true))->getAllAcademic_area();
    // \App\academic_area::getInstance(json_decode(file_get_contents("php://input"), true))->updateAcademic_area();
    // \App\academic_area::getInstance(json_decode(file_get_contents("php://input"), true))->deleteAcademic_area();
    //funciones admin_area.
    // \App\admin_area::getInstance(json_decode(file_get_contents("php://input"), true))->postAdmin_area();
    // \App\admin_area::getInstance(json_decode(file_get_contents("php://input"), true))->getAllAdmin_area();
    // \App\admin_area::getInstance(json_decode(file_get_contents("php://input"), true))->updateAdmin_area();
    // \App\admin_area::getInstance(json_decode(file_get_contents("php://input"), true))->deleteAdmin_area();
    //funciones teachers.
    // \App\teachers::getInstance(json_decode(file_get_contents("php://input"), true))->postTeachers();
    // \App\teachers::getInstance(json_decode(file_get_contents("php://input"), true))->getAllTeachers();
    // \App\teachers::getInstance(json_decode(file_get_contents("php://input"), true))->updateTeachers();
    // \App\teachers::getInstance(json_decode(file_get_contents("php://input"), true))->deleteTeachers();
    //funciones contact_info.
    // \App\contact_info::getInstance(json_decode(file_get_contents("php://input"), true))->postContact_info();
    // \App\contact_info::getInstance(json_decode(file_get_contents("php://input"), true))->getAllContact_info();
    // \App\contact_info::getInstance(json_decode(file_get_contents("php://input"), true))->updateContact_info();
    // \App\contact_info::getInstance(json_decode(file_get_contents("php://input"), true))->deleteContact_info();
     //funciones design_area.
    // \App\design_area::getInstance(json_decode(file_get_contents("php://input"), true))->postDesign_area();
    // \App\design_area::getInstance(json_decode(file_get_contents("php://input"), true))->getAllDesign_area();
    // \App\design_area::getInstance(json_decode(file_get_contents("php://input"), true))->updateDesign_area();
    // \App\design_area::getInstance(json_decode(file_get_contents("php://input"), true))->deleteDesign_area();
     //funciones emergency_contact.
    // \App\emergency_contact::getInstance(json_decode(file_get_contents("php://input"), true))->postEmergency_contact();
    // \App\emergency_contact::getInstance(json_decode(file_get_contents("php://input"), true))->getAllEmergency_contact();
    // \App\emergency_contact::getInstance(json_decode(file_get_contents("php://input"), true))->updateEmergency_contact();
    // \App\emergency_contact::getInstance(json_decode(file_get_contents("php://input"), true))->deleteEmergency_contact();
     //funciones english_skills.
    // \App\english_skills::getInstance(json_decode(file_get_contents("php://input"), true))->postEnglish_skills();
    // \App\english_skills::getInstance(json_decode(file_get_contents("php://input"), true))->getAllEnglish_skills();
    // \App\english_skills::getInstance(json_decode(file_get_contents("php://input"), true))->updateEnglish_skills();
    // \App\english_skills::getInstance(json_decode(file_get_contents("php://input"), true))->deleteEnglish_skills();
     //funciones maint_area.
    // \App\maint_area::getInstance(json_decode(file_get_contents("php://input"), true))->postMaint_area();
    // \App\maint_area::getInstance(json_decode(file_get_contents("php://input"), true))->getAllMaint_area();
    // \App\maint_area::getInstance(json_decode(file_get_contents("php://input"), true))->updateMaint_area();
    // \App\maint_area::getInstance(json_decode(file_get_contents("php://input"), true))->deleteMaint_area();
     //funciones marketing_area.
    // \App\marketing_area::getInstance(json_decode(file_get_contents("php://input"), true))->postMarketing_area();
    // \App\marketing_area::getInstance(json_decode(file_get_contents("php://input"), true))->getAllMarketing_area();
    // \App\marketing_area::getInstance(json_decode(file_get_contents("php://input"), true))->updateMarketing_area();
    // \App\marketing_area::getInstance(json_decode(file_get_contents("php://input"), true))->deleteMarketing_area();
     //funciones psychologist.
    // \App\psychologist::getInstance(json_decode(file_get_contents("php://input"), true))->postPsychologist();
    // \App\psychologist::getInstance(json_decode(file_get_contents("php://input"), true))->getAllPsychologist();
    // \App\psychologist::getInstance(json_decode(file_get_contents("php://input"), true))->updatePsychologist();
    // \App\psychologist::getInstance(json_decode(file_get_contents("php://input"), true))->deletePsychologist();
     //funciones tutors.
    // \App\tutors::getInstance(json_decode(file_get_contents("php://input"), true))->postTutors();
    // \App\tutors::getInstance(json_decode(file_get_contents("php://input"), true))->getAllTutors();
    // \App\tutors::getInstance(json_decode(file_get_contents("php://input"), true))->updateTutors();
    // \App\tutors::getInstance(json_decode(file_get_contents("php://input"), true))->deleteTutors();
     //funciones working_info.
    // \App\working_info::getInstance(json_decode(file_get_contents("php://input"), true))->postWorking_info();
    // \App\working_info::getInstance(json_decode(file_get_contents("php://input"), true))->getAllWorking_info();
    // \App\working_info::getInstance(json_decode(file_get_contents("php://input"), true))->updateWorking_info();
    // \App\working_info::getInstance(json_decode(file_get_contents("php://input"), true))->deleteWorking_info();
     //funciones trainers.
    // \App\trainers::getInstance(json_decode(file_get_contents("php://input"), true))->postTrainers();
    // \App\trainers::getInstance(json_decode(file_get_contents("php://input"), true))->getAllTrainers();
    // \App\trainers::getInstance(json_decode(file_get_contents("php://input"), true))->updateTrainers();
    // \App\trainers::getInstance(json_decode(file_get_contents("php://input"), true))->deleteTrainers();
     //funciones campers.
    // \App\campers::getInstance(json_decode(file_get_contents("php://input"), true))->postCampers();
    // \App\campers::getInstance(json_decode(file_get_contents("php://input"), true))->getAllCampers();
    // \App\campers::getInstance(json_decode(file_get_contents("php://input"), true))->updateCampers();
    // \App\campers::getInstance(json_decode(file_get_contents("php://input"), true))->deleteCampers());
     //funciones optional_topics.
    // \App\optional_topics::getInstance(json_decode(file_get_contents("php://input"), true))->postOptional_topics();
    // \App\optional_topics::getInstance(json_decode(file_get_contents("php://input"), true))->getAllOptional_topics();
    // \App\optional_topics::getInstance(json_decode(file_get_contents("php://input"), true))->updateOptional_topics();
    // \App\optional_topics::getInstance(json_decode(file_get_contents("php://input"), true))->deleteOptional_topics();
     //funciones review_skills.
    // \App\review_skills::getInstance(json_decode(file_get_contents("php://input"), true))->postReview_skills();
    // \App\review_skills::getInstance(json_decode(file_get_contents("php://input"), true))->getAllReview_skills();
    // \App\review_skills::getInstance(json_decode(file_get_contents("php://input"), true))->updateReview_skills();
    // \App\review_skills::getInstance(json_decode(file_get_contents("php://input"), true))->deleteReview_skills();
     //funciones topics.
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->postTopics();
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->getAllTopics();
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->updateTopics();
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->deleteTopics();
     //funciones topics.
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->postTopics();
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->getAllTopics();
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->updateTopics();
    // \App\topics::getInstance(json_decode(file_get_contents("php://input"), true))->deleteTopics();

?>