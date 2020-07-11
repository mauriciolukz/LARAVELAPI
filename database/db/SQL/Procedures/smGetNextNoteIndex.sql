USE [DYNAMICS]
GO

/****** Object:  StoredProcedure [dbo].[smGetNextNoteIndex]    Script Date: 10/07/2020 07:18:23  ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER OFF
GO

 create procedure [dbo].[smGetNextNoteIndex]         @I_sCompanyID           smallint        = NULL,  @I_iSQLSessionID                int             = NULL,  @O_mNoteIndex           numeric(19,5)= NULL  output,  @O_iErrorState          int             = NULL  output as  declare @tTransaction                   tinyint  select          @O_mNoteIndex = 0.0,  @O_iErrorState = 0  if       (       (@I_sCompanyID is NULL) or  (@I_iSQLSessionID is NULL) ) begin  select  @O_iErrorState = 20231  return end  if @@trancount = 0 begin  select @tTransaction = 1  begin transaction end   update   SY01500 set   @O_mNoteIndex = NOTEINDX,  NOTEINDX = NOTEINDX + 1.0 where   CMPANYID = @I_sCompanyID  if (@@rowcount <> 1) begin  select          @O_iErrorState = 20081  if @tTransaction = 1  rollback transaction  return end  if (@O_mNoteIndex < 1)  select @O_mNoteIndex = 1.0  if @tTransaction = 1  commit transaction  return    
GO


