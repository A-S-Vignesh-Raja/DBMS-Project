BEGIN
    INSERT INTO user_details_backup (u_id, address, role, salary, phone)
    VALUES (NEW.u_id, NEW.address, new.role, new.salary, new.phone); 
END
