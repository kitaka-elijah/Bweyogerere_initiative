
SELECT 
preg.parents_id AS parents_id,
preg.surname AS parents_surname,
preg.firstname AS parents_firstname,
preg.phone AS parents_phone_number,
preg.cdc AS parents_cdc,
preg.relationship AS parents_relation_to_child,
preg.passport_photo AS parents_passport_photo,
preg.date AS parents_Date_of_Reg,
preg.time AS parents_tine_of_Reg,
preg.status AS current_status,

crg.student_ID AS student1_ID,
crg.firstname AS student1_firstname,
crg.surname AS student1_surname,
crg.gender AS student1_agender,
crg.day AS student1_DOB_day,
crg.month AS student1_DOB_month,
crg.year AS student1_DOB_year,
crg.countryofbirth AS student1_countryofbirth,
crg.cityofbirth AS student1_cityofbirth,
crg.esbac AS student1_esbac,
crg.fromm AS student1_from,
crg.to AS student1_to,
crg.childpassport_photo AS student1_childpassport_photo,


crg2.student_ID AS student2_ID,
crg2.firstname AS student2_firstname,
crg2.surname AS student2_surname,
crg2.gender AS student2_agender,
crg2.day AS student2_DOB_day,
crg2.month AS student2_DOB_month,
crg2.year AS student2_DOB_year,
crg2.countryofbirth AS student2_countryofbirth,
crg2.cityofbirth AS student2_cityofbirth,
crg2.esbac AS student2_esbac,
crg2.fromm AS student2_from,
crg2.to AS student2_to,
crg2.childpassport_photo AS student2_childpassport_photo,


crg3.student_ID AS student3_ID,
crg3.firstname AS student3_firstname,
crg3.surname AS student3_surname,
crg3.gender AS student3_agender,
crg3.day AS student3_DOB_day,
crg3.month AS student3_DOB_month,
crg3.year AS student3_DOB_year,
crg3.countryofbirth AS student3_countryofbirth,
crg3.cityofbirth AS student3_cityofbirth,
crg3.esbac AS student3_esbac,
crg3.fromm AS student3_from,
crg3.to AS student3_to,
crg3.childpassport_photo AS student3_childpassport_photo,


crg4.student_ID AS student4_ID,
crg4.firstname AS student4_firstname,
crg4.surname AS student4_surname,
crg4.gender AS student4_agender,
crg4.day AS student4_DOB_day,
crg4.month AS student4_DOB_month,
crg4.year AS student4_DOB_year,
crg4.countryofbirth AS student4_countryofbirth,
crg4.cityofbirth AS student4_cityofbirth,
crg4.esbac AS student4_esbac,
crg4.fromm AS student4_from,
crg4.to AS student4_to,
crg4.childpassport_photo AS student4_childpassport_photo



FROM 
parentReg preg , 
childReg crg ,
childReg2 crg2 ,
childReg3 crg3 , 
childReg4 crg4 


ORDER BY preg.parents_id DESC LIMIT 1
