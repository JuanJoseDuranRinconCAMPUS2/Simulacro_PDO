export let wsMyTables= {
    displayIntro(p1){
        return`
        <div id="contenedor">
            <h1 class="title"><i class='bx bxs-lemon bx-spin'></i>${p1}</h1>
            <ul class="breadcrumbs">
                <li><a>Home</a></li>
                <li class="divider">/</li>
                <li><a class="active">${p1}</a></li>
            </ul>
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Tabla De Datos(${p1})</h3>
                    </div>
                    <!-- conteido -->
                    <div id="contenedorTabla">
                        <table id="TablaDatos">
                        <thead>
                            <tr id="Thead">
                                <th> ¡Borrar! </th>
                                <th> ¡Actualizar! </th>
                            </tr>
                        </thead>
                        <tbody id="Tbody">
                        </tbody>
                    </div>
                    <br>
                    <button class="Post" id="post"> Añadir Datos!</button>
                </table>
                </div>
            
            </div>
        </div>
        <section class="modal">
            <div class="modal__container">
            <img src="https://cdn.dribbble.com/users/592004/screenshots/2953817/___.gif" class="modal__img">
            <h2 class="modal__paragraph">Data Eliminada correctamente!</h2>
            <p class="modal__paragraph">La fila seleccionada ha sido borrada
            exitosamente.</p>
            <button class="modal__close">Cerrar Modal</button>
            </div>
        </section>
        <section class="modalPost">
            <div class="modal__container">
                <form id= "FormPost">
                
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
        <section class="modalPut">
            <div class="modal__container">
                <form id= "FormPut">
                    
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
        `
    },
    academic_area(p1){
        return`
            <label for="id_area">Área:</label>
            <select name="id_areas" id="id_areas" required>
            </select>
        
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>
        
            <label for="id_position">Posición:</label>
            <select name="id_position" id="id_position" required>
            </select>
        
            <label for="id_journeys">Jornadas:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        `;
    },
    admin_area(p1){
        return`
            <label for="id_areas">Área:</label>
            <select name="id_areas" id="id_areas" required>
            </select>
        
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>
        
            <label for="id_position">Posición:</label>
            <select name="id_position" id="id_position" required>
            </select>
        
            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        `;
    },
    areas(p1){
        return`
            <label for="name_area">Nombre de Área:</label>
            <input type="text" name="name_area" id="name_area" maxlength="80" required>
        `;
    },
    campers(p1){
        return`
            <label for="id_team_schedule">Horario del Equipo:</label>
            <select name="id_team_schedule" id="id_team_schedule" required>
            </select>
        
            <label for="id_routes">Id de la Ruta:</label>
            <select name="id_routes" id="id_routes" required>
            </select>
        
            <label for="id_trainer">Entrenador:</label>
            <select name="id_trainers" id="id_trainers" required>
            </select>
        
            <label for="id_psychologist">Psicólogo:</label>
            <select name="id_psychologist" id="id_psychologist" required>
            </select>
        
            <label for="id_teachers">Profesor:</label>
            <select name="id_teachers" id="id_teachers" required>
            </select>
        
            <label for="id_levels">nivel:</label>
            <select name="id_levels" id="id_levels" required>
            </select>
        
            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>
        `;
    },
    chapters(p1){
        return`
            <label for="id_thematic_units">Unidades Temáticas:</label>
            <select name="id_thematic_units" id="id_thematic_units" required>
            </select>
        
            <label for="name_chapter">Nombre del Capítulo:</label>
            <input type="text" name="name_chapter" id="name_chapter" maxlength="100" required>
        
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" name="start_date" id="start_date" required>
        
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" name="end_date" id="end_date" required>
        
            <label for="description">Descripción:</label>
            <textarea name="description" id="description" required></textarea>
        
            <label for="duration_days">Duración en Días:</label>
            <input type="number" name="duration_days" id="duration_days" required>
        `;
    },
    cities(p1){
        return`
            <label for="name_city">Nombre de la Ciudad:</label>
            <input type="text" name="name_city" id="name_city" maxlength="100" required>

            <label for="id_regions">Región:</label>
            <select name="id_regions" id="id_regions" required>
            </select>
        `;
    },
    contact_info(p1){
        return`
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>

            <label for="whatsapp">WhatsApp:</label>
            <input type="text" name="whatsapp" id="whatsapp" maxlength="15" required>

            <label for="instagram">Instagram:</label>
            <input type="text" name="instagram" id="instagram" maxlength="50" required>

            <label for="linkedin">LinkedIn:</label>
            <input type="text" name="linkedin" id="linkedin" maxlength="150" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" maxlength="250" required>

            <label for="address">Dirección:</label>
            <input type="text" name="address" id="address" maxlength="100" required>

            <label for="cel_number">Número de Celular:</label>
            <input type="text" name="cel_number" id="cel_number" maxlength="15" required>
        `;
    },
    countries(p1){
        return`
            <label for="name_country">Nombre del País:</label>
            <input type="text" name="name_country" id="name_country" maxlength="50" required>
        `;
    },
    design_area(p1){
        return`
            <label for="id_areas">Áreas:</label>
            <select name="id_areas" id="id_areas" required>
            </select>

            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>

            <label for="id_position">Posición:</label>
            <select name="id_position" id="id_position" required>
            </select>

            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        `;
    },
    emergency_contact(p1){
        return`
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>

            <label for="cel_number">Número de Celular:</label>
            <input type="text" name="cel_number" id="cel_number" maxlength="15" required>
        
            <label for="relationship">Relación:</label>
            <input type="text" name="relationship" id="relationship" maxlength="50" required>
        
            <label for="full_name">Nombre Completo:</label>
            <input type="text" name="full_name" id="full_name" maxlength="100" required>
        
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" maxlength="150" required>
      
        `;
    },
    english_skills(p1){
        return`
            <label for="id_team_schedule">Horario del Equipo:</label>
            <select name="id_team_schedule" id="id_team_schedule" required>
            </select>
        
            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        
            <label for="id_teachers">Docentes:</label>
            <select name="id_teachers" id="id_teachers" required>
            </select>
        
            <label for="id_locations">Ubicaciones:</label>
            <select name="id_locations" id="id_locations" required>
            </select>
        
            <label for="id_subjects">Asignaturas:</label>
            <select name="id_subjects" id="id_subjects" required>
            </select>
        `;
    },
    journey(p1){
        return`
            <label for="name_journey">Nombre de la Jornada:</label>
            <input type="text" name="name_journey" id="name_journey" maxlength="25" required>
        
            <label for="check_in">Hora de entrada:</label>
            <input type="time" name="check_in" id="check_in" required>
        
            <label for="check_out">Hora de salida:</label>
            <input type="time" name="check_out" id="check_out" required>
        `;
    },
    levels(p1){
        return`
            <label for="name_level">Nombre del Nivel:</label>
            <input type="text" name="name_level" id="name_level" maxlength="25" required>
        
            <label for="group_level">Grupo del Nivel:</label>
            <input type="text" name="group_level" id="group_level" maxlength="25" required>
        `;
    },
    locations(p1){
        return`
            <label for="name_location">Nombre de la Ubicación:</label>
            <input type="text" name="name_location" id="name_location" maxlength="50" required>
        `;
    },
    maint_area(p1){
        return`
            <label for="id_areas">Áreas:</label>
            <select name="id_areas" id="id_areas" required>
            </select>
        
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>
        
            <label for="id_position">Posición:</label>
            <select name="id_position" id="id_position" required>
            </select>
        
            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        `;
    },
    marketing_area(p1){
        return`
            <label for="id_areas">Áreas:</label>
            <select name="id_areas" id="id_areas" required>
            </select>
        
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>
        
            <label for="id_position">Posición:</label>
            <select name="id_position" id="id_position" required>
            </select>
        
            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        `;
    },
    modules(p1){
        return`
            <label for="id_theme">Tema:</label>
            <select name="id_themes" id="id_themes" required>
            </select>
        
            <label for="name_module">Nombre del Módulo:</label>
            <input type="text" name="name_module" id="name_module" maxlength="100" required>
        
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" name="start_date" id="start_date" required>
        
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" name="end_date" id="end_date" required>
        
            <label for="description">Descripción:</label>
            <textarea name="description" id="description" required></textarea>
        
            <label for="duration_days">Duración en Días:</label>
            <input type="number" name="duration_days" id="duration_days" required>
        `;
    },
    optional_topics(p1){
        return`
            <label for="id_topics">Temas:</label>
            <select name="id_topics" id="id_topics" required>
            </select>
        
            <label for="id_team_schedule">Horario del Equipo:</label>
            <select name="id_team_schedule" id="id_team_schedule" required>
            </select>
        
            <label for="id_subjects">Asignaturas:</label>
            <select name="id_subjects" id="id_subjects" required>
            </select>
        
            <label for="id_campers">Campers:</label>
            <select name="id_campers" id="id_campers" required>
            </select>
        
            <label for="id_team_educators">Educadores del Equipo:</label>
            <select name="id_team_educators" id="id_team_educators" required>
            </select>
        `;
    },
    personal_ref(p1){
        return`
            <label for="full_name">Nombre Completo:</label>
            <input type="text" name="full_name" id="full_name" maxlength="100" required>
        
            <label for="cel_number">Número de Celular:</label>
            <input type="text" name="cel_number" id="cel_number" maxlength="15" required>
        
            <label for="relationship">Relación:</label>
            <input type="text" name="relationship" id="relationship" maxlength="50" required>
        
            <label for="occupation">Ocupación:</label>
            <input type="text" name="occupation" id="occupation" maxlength="100" required>
        `;
    },
    position(p1){
        return`
            <label for="name_position">Nombre del Cargo:</label>
            <input type="text" name="name_position" id="name_position" maxlength="80" required>
        
            <label for="arl">ARL:</label>
            <input type="text" name="arl" id="arl" maxlength="50" required>
            `;
    },
    psychologist(p1){
        return`
            <label for="id_routes">Rutas:</label>
            <select name="id_routes" id="id_routes" required>
            </select>
        
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>
        
            <label for="id_academic_area">Área Académica:</label>
            <select name="id_academic_area" id="id_academic_area" required>
            </select>
        
            <label for="id_position">Posición:</label>
            <select name="id_position" id="id_position" required>
            </select>
        
            <label for="id_team_educators">Educadores del Equipo:</label>
            <select name="id_team_educators" id="id_team_educators" required>
            </select>
        `;
    },
    regions(p1){
        return`
            <label for="name_region">Nombre de la Región:</label>
            <input type="text" name="name_region" id="name_region" maxlength="50" required>
        
            <label for="id_countries">País:</label>
            <select name="id_countries" id="id_countries" required>
            </select>
        `;
    },
    review_skills(p1){
        return`
            <label for="id_team_schedule">Horario del Equipo:</label>
            <select name="id_team_schedule" id="id_team_schedule" required>
            </select>
        
            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        
            <label for="id_tutors">Tutores:</label>
            <select name="id_tutors" id="id_tutors" required>
            </select>
        
            <label for="id_locations">Ubicaciones:</label>
            <select name="id_locations" id="id_locations" required>
            </select>
        `;
    },
    routes(p1){
        return`
            <label for="name_route">Nombre de la Ruta:</label>
            <input type="text" name="name_route" id="name_route" maxlength="50" required>
        
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" name="start_date" id="start_date" required>
        
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" name="end_date" id="end_date" required>
        
            <label for="description">Descripción:</label>
            <textarea name="description" id="description" required></textarea>
        
            <label for="duration_month">Duración en Meses:</label>
            <input type="number" name="duration_month" id="duration_month" min="1" required>
        `;
    },
    soft_skills(p1){
        return`
            <label for="id_team_schedule">Horario del Equipo:</label>
            <select name="id_team_schedule" id="id_team_schedule" required>
            </select>
        
            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        
            <label for="id_psychologist">Psicólogo/a:</label>
            <select name="id_psychologist" id="id_psychologist" required>
            </select>
        
            <label for="id_locations">Ubicaciones:</label>
            <select name="id_locations" id="id_locations" required>
            </select>
        
            <label for="id_subjects">Materias:</label>
            <select name="id_subjects" id="id_subjects" required>
            </select>
        `;
    },
    software_skills(p1){
        return`
            <label for="id_team_schedule">Horario del Equipo:</label>
            <select name="id_team_schedule" id="id_team_schedule" required>
            </select>
        
            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        
            <label for="id_trainers">Entrenadores:</label>
            <select name="id_trainers" id="id_trainers" required>
            </select>
        
            <label for="id_locations">Ubicaciones:</label>
            <select name="id_locations" id="id_locations" required>
            </select>
        
            <label for="id_subjects">Materias:</label>
            <select name="id_subjects" id="id_subjects" required>
            </select>
        `;
    },
    staff(p1){
        return`
            <label for="doc">Documento:</label>
            <input type="text" name="doc" id="doc" maxlength="10" required>
        
            <label for="first_name">Primer Nombre:</label>
            <input type="text" name="first_name" id="first_name" maxlength="25" required>
        
            <label for="second_name">Segundo Nombre:</label>
            <input type="text" name="second_name" id="second_name" maxlength="25" required>
        
            <label for="first_surname">Primer Apellido:</label>
            <input type="text" name="first_surname" id="first_surname" maxlength="25" required>
        
            <label for="second_surname">Segundo Apellido:</label>
            <input type="text" name="second_surname" id="second_surname" maxlength="25" required>
        
            <label for="eps">EPS:</label>
            <input type="text" name="eps" id="eps" maxlength="100" required>
        
            <label for="id_areas">Área:</label>
            <select name="id_areas" id="id_areas" required>
            </select>
        
            <label for="id_cities">Ciudad:</label>
            <select name="id_cities" id="id_cities" required>
            </select>
        `;
    },
    subjects(p1){
        return`
            <label for="name_subject">Nombre de la Materia:</label>
            <input type="text" name="name_subject" id="name_subject" maxlength="50" required>
        `;
    },
    teachers(p1){
        return`
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff">
            </select>
        
            <label for="id_routes">Rutas:</label>
            <select name="id_routes" id="id_routes" required>
            </select>
        
            <label for="id_academic_area">Área Académica:</label>
            <select name="id_academic_area" id="id_academic_area" required>
            </select>
        
            <label for="id_position">Posición:</label>
            <select name="id_position" id="id_position" required>
            </select>
        
            <label for="id_team_educators">Equipo de Educadores:</label>
            <select name="id_team_educators" id="id_team_educators" required>
            </select>
        `;
    },
    team_educators(p1){
        return`
            <label for="name_rol">Nombre del Rol:</label>
            <input type="text" name="name_rol" id="name_rol" maxlength="50" required>
        `;
    },
    team_schedule(p1){
        return`
            <label for="team_name">Nombre del Equipo:</label>
            <input type="text" name="team_name" id="team_name" maxlength="2" required>
        
            <label for="check_in_skills">Check-In Habilidades:</label>
            <input type="time" name="check_in_skills" id="check_in_skills" required>
        
            <label for="check_out_skills">Check-Out Habilidades:</label>
            <input type="time" name="check_out_skills" id="check_out_skills" required>
        
            <label for="check_in_soft">Check-In Soft:</label>
            <input type="time" name="check_in_soft" id="check_in_soft" required>
        
            <label for="check_out_soft">Check-Out Soft:</label>
            <input type="time" name="check_out_soft" id="check_out_soft" required>
        
            <label for="check_in_english">Check-In Inglés:</label>
            <input type="time" name="check_in_english" id="check_in_english" required>
        
            <label for="check_out_english">Check-Out Inglés:</label>
            <input type="time" name="check_out_english" id="check_out_english" required>
        
            <label for="check_in_review">Check-In Revisión:</label>
            <input type="time" name="check_in_review" id="check_in_review" required>
        
            <label for="check_out_review">Check-Out Revisión:</label>
            <input type="time" name="check_out_review" id="check_out_review" required>

            <label for="id_journey">Jornada:</label>
            <select name="id_journey" id="id_journey" required>
            </select>
        `;
    },
    thematic_units(p1){
        return`
            <label for="id_routes">Rutas:</label>
            <select name="id_routes" id="id_routes" required>
            </select>
        
            <label for="name_thematics_units">Nombre de las Unidades Temáticas:</label>
            <input type="text" name="name_thematics_units" id="name_thematics_units" maxlength="100" required>
        
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" name="start_date" id="start_date" required>
        
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" name="end_date" id="end_date" required>
        
            <label for="description">Descripción:</label>
            <textarea name="description" id="description" required></textarea>
        
            <label for="duration_days">Duración en Días:</label>
            <input type="number" name="duration_days" id="duration_days" required>
        `;
    },
    themes(p1){
        return`
            <label for="id_chapters">Capítulos:</label>
            <select name="id_chapters" id="id_chapters" required>
            </select>
        
            <label for="name_theme">Nombre del Tema:</label>
            <input type="text" name="name_theme" id="name_theme" maxlength="100" required>
        
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" name="start_date" id="start_date" required>
        
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" name="end_date" id="end_date" required>
        
            <label for="description">Descripción:</label>
            <textarea name="description" id="description" required></textarea>
        
            <label for="duration_days">Duración en Días:</label>
            <input type="number" name="duration_days" id="duration_days" required>
        `;
    },
    topics(p1){
        return`
            <label for="id_modules">Módulos:</label>
            <select name="id_modules" id="id_modules" required>
            </select>
        
            <label for="name_topic">Nombre del Tema:</label>
            <input type="text" name="name_topic" id="name_topic" maxlength="50" required>
        
            <label for="start_date">Fecha de Inicio:</label>
            <input type="date" name="start_date" id="start_date" required>
        
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" name="end_date" id="end_date" required>
        
            <label for="description">Descripción:</label>
            <textarea name="description" id="description" required></textarea>
        
            <label for="duration_days">Duración en Días:</label>
            <input type="number" name="duration_days" id="duration_days" required>
        `;
    },
    trainers(p1){
        return`
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>
        
            <label for="id_levels">Niveles:</label>
            <select name="id_levels" id="id_levels" required>
            </select>
        
            <label for="id_routes">Rutas:</label>
            <select name="id_routes" id="id_routes" required>
            </select>
        
            <label for="id_academic_area">Área Académica:</label>
            <select name="id_academic_area" id="id_academic_area" required>
            </select>
        
            <label for="id_position">Posición:</label>
            <select name="id_position" id="id_position" required>
            </select>
        
            <label for="id_team_educators">Equipo de Educadores:</label>
            <select name="id_team_educators" id="id_team_educators" required>
            </select>
        `;
    },
    tutors(p1){
        return`
            <label for="id_staff">Personal:</label>
            <select name="id_staff" id="id_staff" required>
            </select>
        
            <label for="id_academic_area">Área Académica:</label>
            <select name="id_academic_area" id="id_academic_area" required>
            </select>
        
            <label for="id_position">Posición:</label>
            <select name="id_position" id="id_position" required>
            </select>
        `;
    },
    work_reference(p1){
        return`
            <label for="full_name">Nombre completo:</label>
            <input type="text" name="full_name" id="full_name" maxlength="100" required>
        
            <label for="cel_number">Número de celular:</label>
            <input type="text" name="cel_number" id="cel_number" maxlength="15" required>
        
            <label for="position">Posición:</label>
            <input type="text" name="position" id="position" maxlength="100" required>
        
            <label for="company">Compañía:</label>
            <input type="text" name="company" id="company" maxlength="100" required>
        `;
    },
    working_info(p1){
        return`
        <label for="id_staff">Personal:</label>
        <select name="id_staff" id="id_staff">
        </select>

        <label for="years_exp">Años de experiencia:</label>
        <input type="number" name="years_exp" id="years_exp" required>
      
        <label for="months_exp">Meses de experiencia:</label>
        <input type="number" name="months_exp" id="months_exp" required>
      
        <label for="id_work_reference">Referencia laboral:</label>
        <input type="number" name="id_work_reference" id="id_work_reference" required>
      
        <label for="id_personal_ref">Referencia personal:</label>
        <input type="number" name="id_personal_ref" id="id_personal_ref" required>
      
        <label for="start_contract">Fecha de inicio de contrato:</label>
        <input type="date" name="start_contract" id="start_contract" required>
      
        <label for="end_contract">Fecha de fin de contrato:</label>
        <input type="date" name="end_contract" id="end_contract" required>
        `;
    },
}

self.addEventListener("message", (e)=>{
    postMessage(wsMyTables[`${e.data.module}`](e.data.data));
})