USE [DYNAMICS]
GO

/****** Object:  StoredProcedure [dbo].[zDP_MC40200SI]    Script Date: 10/07/2020 07:20:24  ******/
SET ANSI_NULLS OFF
GO

SET QUOTED_IDENTIFIER OFF
GO

 CREATE PROC [dbo].[zDP_MC40200SI] (@CURNCYID char(15), @CURRNIDX smallint, @NOTEINDX numeric(19,5), @CRNCYDSC char(31), @CRNCYSYM char(3), @CNYSYMAR_1 smallint, @CNYSYMAR_2 smallint, @CNYSYMAR_3 smallint, @CYSYMPLC smallint, @INCLSPAC tinyint, @NEGSYMBL smallint, @NGSMAMPC smallint, @NEGSMPLC smallint, @DECSYMBL smallint, @DECPLCUR smallint, @THOUSSYM smallint, @CURTEXT_1 char(25), @CURTEXT_2 char(25), @CURTEXT_3 char(25), @ISOCURRC char(3), @CURLNGID smallint, @DEX_ROW_ID int OUT) AS  set nocount on BEGIN INSERT INTO .MC40200 (CURNCYID, CURRNIDX, NOTEINDX, CRNCYDSC, CRNCYSYM, CNYSYMAR_1, CNYSYMAR_2, CNYSYMAR_3, CYSYMPLC, INCLSPAC, NEGSYMBL, NGSMAMPC, NEGSMPLC, DECSYMBL, DECPLCUR, THOUSSYM, CURTEXT_1, CURTEXT_2, CURTEXT_3, ISOCURRC, CURLNGID) VALUES ( @CURNCYID, @CURRNIDX, @NOTEINDX, @CRNCYDSC, @CRNCYSYM, @CNYSYMAR_1, @CNYSYMAR_2, @CNYSYMAR_3, @CYSYMPLC, @INCLSPAC, @NEGSYMBL, @NGSMAMPC, @NEGSMPLC, @DECSYMBL, @DECPLCUR, @THOUSSYM, @CURTEXT_1, @CURTEXT_2, @CURTEXT_3, @ISOCURRC, @CURLNGID) SELECT @DEX_ROW_ID = @@IDENTITY END set nocount off    
GO

