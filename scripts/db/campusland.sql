USE campusland;

SELECT * FROM `work_reference`;


SELECT * FROM personal_ref;

SELECT * FROM countries;

SELECT * FROM regions;
SELECT * FROM cities;
SELECT * FROM areas;
select * FROM position;
select * FROM journey;
SELECT * FROM team_schedule;
SELECT * FROM team_educators;
SELECT * FROM subjects;
SELECT * FROM levels;
SELECT * FROM locations;
SELECT * FROM routes;
SELECT * FROM thematic_units;
SELECT * FROM chapters;
SELECT * FROM themes;
SELECT * FROM modules;
SELECT * FROM topics;
SELECT * FROM staff;
SELECT * FROM academic_area;

SELECT id AS "identification" FROM regions ORDER BY id DESC LIMIT 1;

SELECT id AS "identification" FROM journey ORDER BY id DESC LIMIT 1;

INSERT INTO team_schedule(team_name, check_in_skills, check_out_skills, check_in_soft, check_out_soft, check_in_english, check_out_english, check_in_review, check_out_review, id_journey) VALUES(:N_Team, :start_Skills, :ending_Skills, :start_Soft, :ending_Soft, :start_English, :ending_English, :start_Review, :ending_Review, :ID_Journey);

SELECT team_name AS "N_Team", check_in_skills AS "start_Skills", check_out_skills AS "ending_Skills", check_in_soft AS "start_Soft", check_out_soft AS "ending_Soft", check_in_english AS "start_English", check_out_english AS "ending_English", check_in_review AS "start_Review", check_out_review AS "ending_Review", id_journey AS "ID_Journey" FROM team_schedule;
INSERT INTO staff(doc, first_name,second_name,first_surname,second_surname,eps,id_area,id_city) VALUES(:ID_fModule,:1name,:2name,:1surname,:2surname,:
health_Insurance,:ID_fArea,:ID_fCity);