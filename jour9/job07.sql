-- on recul la date avec DATE_SUB, on récupére le date actuel avec curdate() 
SELECT * FROM `etudiants` WHERE naissance <= DATE_SUB(CURDATE(), INTERVAL 18 YEAR)