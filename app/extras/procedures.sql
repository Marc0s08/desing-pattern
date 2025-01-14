DELIMITER $$

CREATE PROCEDURE login_attempt(IN p_username VARCHAR(255), IN p_password VARCHAR(255), IN p_ip_address VARCHAR(45))
BEGIN
    DECLARE v_user_id INT;
    DECLARE v_attempts_count INT;
    DECLARE v_hashed_password VARCHAR(64);

    SELECT id_morador, senha
        INTO v_user_id, v_hashed_password
    FROM morador
    WHERE email = p_username AND ativo = TRUE;
    

    IF v_user_id IS NOT NULL AND v_hashed_password = p_password THEN

        INSERT INTO login_logs (user_id, username, success, ip_address)
        VALUES (v_user_id, p_username, TRUE, p_ip_address);
        
        DELETE FROM login_attempts WHERE user_id = v_user_id;
        
    ELSE
        INSERT INTO login_logs (user_id, username, success, ip_address)
        VALUES (NULL, p_username, FALSE, p_ip_address);

        SELECT COUNT(*) INTO v_attempts_count
        FROM login_attempts
        WHERE user_id IS NULL AND ip_address = p_ip_address AND attempt_time >= NOW() - INTERVAL 1 DAY;
        
        INSERT INTO login_attempts (user_id, ip_address, success)
        VALUES (NULL, p_ip_address, FALSE);
    END IF;
    
END$$

DELIMITER ;
