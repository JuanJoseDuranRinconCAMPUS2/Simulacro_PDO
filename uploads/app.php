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
    \App\chapters::getInstance(json_decode(file_get_contents("php://input"), true))->deleteChapters();
    
?>