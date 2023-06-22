@echo off
setlocal

REM Cree este script para facilitar la tarea de creacion de archivos

REM Para usarlo copia este archivo en la ruta donde quieras pegar los archivos y ejecutalo

set "ubicacion=%~dp0"

mkdir "%ubicacion%academic_area"
echo. > "%ubicacion%academic_area\academic_area.php"

mkdir "%ubicacion%admin_area"
echo. > "%ubicacion%admin_area\admin_area.php"

mkdir "%ubicacion%areas"
echo. > "%ubicacion%areas\areas.php"

mkdir "%ubicacion%campers"
echo. > "%ubicacion%campers\campers.php"

mkdir "%ubicacion%chapters"
echo. > "%ubicacion%chapters\chapters.php"

mkdir "%ubicacion%cities"
echo. > "%ubicacion%cities\cities.php"

mkdir "%ubicacion%contact_info"
echo. > "%ubicacion%contact_info\contact_info.php"

mkdir "%ubicacion%countries"
echo. > "%ubicacion%countries\countries.php"

mkdir "%ubicacion%design_area"
echo. > "%ubicacion%design_area\design_area.php"

mkdir "%ubicacion%emergency_contact"
echo. > "%ubicacion%emergency_contact\emergency_contact.php"

mkdir "%ubicacion%english_skills"
echo. > "%ubicacion%english_skills\english_skills.php"

mkdir "%ubicacion%journey"
echo. > "%ubicacion%journey\journey.php"

mkdir "%ubicacion%levels"
echo. > "%ubicacion%levels\levels.php"

mkdir "%ubicacion%locations"
echo. > "%ubicacion%locations\locations.php"

mkdir "%ubicacion%maint_area"
echo. > "%ubicacion%maint_area\maint_area.php"

mkdir "%ubicacion%marketing_area"
echo. > "%ubicacion%marketing_area\marketing_area.php"

mkdir "%ubicacion%modules"
echo. > "%ubicacion%modules\modules.php"

mkdir "%ubicacion%optional_topics"
echo. > "%ubicacion%optional_topics\optional_topics.php"

mkdir "%ubicacion%personal_ref"
echo. > "%ubicacion%personal_ref\personal_ref.php"

mkdir "%ubicacion%position"
echo. > "%ubicacion%position\position.php"

mkdir "%ubicacion%psychologist"
echo. > "%ubicacion%psychologist\psychologist.php"

mkdir "%ubicacion%regions"
echo. > "%ubicacion%regions\regions.php"

mkdir "%ubicacion%review_skills"
echo. > "%ubicacion%review_skills\review_skills.php"

mkdir "%ubicacion%routes"
echo. > "%ubicacion%routes\routes.php"

mkdir "%ubicacion%software_skills"
echo. > "%ubicacion%software_skills\software_skills.php"

mkdir "%ubicacion%soft_skills"
echo. > "%ubicacion%soft_skills\soft_skills.php"

mkdir "%ubicacion%staff"
echo. > "%ubicacion%staff\staff.php"

mkdir "%ubicacion%subjects"
echo. > "%ubicacion%subjects\subjects.php"

mkdir "%ubicacion%teachers"
echo. > "%ubicacion%teachers\teachers.php"

mkdir "%ubicacion%team_educators"
echo. > "%ubicacion%team_educators\team_educators.php"

mkdir "%ubicacion%team_schedule"
echo. > "%ubicacion%team_schedule\team_schedule.php"

mkdir "%ubicacion%thematic_units"
echo. > "%ubicacion%thematic_units\thematic_units.php"

mkdir "%ubicacion%themes"
echo. > "%ubicacion%themes\themes.php"

mkdir "%ubicacion%topics"
echo. > "%ubicacion%topics\topics.php"

mkdir "%ubicacion%trainers"
echo. > "%ubicacion%trainers\trainers.php"

mkdir "%ubicacion%tutors"
echo. > "%ubicacion%tutors\tutors.php"

mkdir "%ubicacion%working_info"
echo. > "%ubicacion%working_info\working_info.php"

mkdir "%ubicacion%work_referenc"
echo. > "%ubicacion%work_referenc\work_referenc.php"

echo Archivos .php creados correctamente.

pause
