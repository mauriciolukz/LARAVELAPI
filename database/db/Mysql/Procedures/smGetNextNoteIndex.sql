delimiter //
CREATE PROCEDURE `smGetNextNoteIndex`(
	IN `p_I_sCompanyID` SMALLINT,
	IN `p_I_iSQLSessionID` INT,
	OUT `p_O_mNoteIndex` decimal(19,5),
	OUT `p_O_iErrorState` INT

)
sp_lbl:
 
BEGIN  
	declare v_tTransaction tinyint unsigned;  
	declare v_x INT;  
	SET p_O_mNoteIndex = 0.0, p_O_iErrorState = 0,v_x = 0;
	
	if((p_I_sCompanyID is NULL) or  (p_I_iSQLSessionID is NULL)) then  
		set  p_O_iErrorState = 20231;  
		leave sp_lbl; 
	end if;  
	
	if V_x = 0 then  
		set v_tTransaction = 1;
		START TRANSACTION; 
	end if; 
	
	update   SY01500 SET  NOTEINDX = NOTEINDX + 1.0 where CMPANYID = p_I_sCompanyID;
	SET p_O_mNoteIndex = (SELECT NOTEINDX FROM SY01500 where CMPANYID = p_I_sCompanyID);
	
	if (Found_rows() <> 1) then  
		set p_O_iErrorState = 20081;  
		if v_tTransaction = 1 then  
			ROLLBACK;
		end if;
		leave sp_lbl;    
	end if;
	
	if (p_O_mNoteIndex < 1) then  
		set p_O_mNoteIndex = 1.0;
	end if;
	
	if v_tTransaction = 1 then  
		commit;
	end if;  
	
    select 0 as retstat,p_O_mNoteIndex as param3,p_O_iErrorState as param4;
	
end
//

delimiter ;