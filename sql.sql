-- function get next id
DELIMITER $$

CREATE FUNCTION getNextId(
	prefix VARCHAR(10)
) 
RETURNS VARCHAR(20)
DETERMINISTIC

BEGIN
    DECLARE nextIndex INT;
    DECLARE nextId VARCHAR(20);
    
    SELECT AUTO_INCREMENT
    INTO nextIndex
    FROM information_schema.TABLES 
    WHERE TABLE_SCHEMA = "hrm_db" 
    AND TABLE_NAME = "employees";

	SET nextId = CONCAT(prefix,RIGHT(CONCAT("000",nextIndex),3));
	RETURN (nextId);
END$$
DELIMITER ;

-- procedured to insert employees


BEGIN
	DECLARE empId VARCHAR(20);
    
    SET empId = getNextId('EMP_');
    
    INSERT INTO employees(name, email, id)
    VALUES (empName, empEmail,empId );
    
END