SELECT register_id,profile.name_lastName,department.departmentName,position.positionName,talent,applicationDate,education.educationName
FROM register
JOIN profile ON register.profile_id = register.profile_id
JOIN department ON register.department_id = department.department_id
JOIN position ON register.position_id = position.position_id
JOIN education ON register.education_id = education.education_id
