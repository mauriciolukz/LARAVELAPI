USE [DYNAMICS]
GO

/****** Object:  Table [dbo].[SY01400]    Script Date: 07/07/2020 11:36:18  ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[SY01400](
	[USERID] [nvarchar](255) NOT NULL,
	[USERNAME] [nvarchar](255) NOT NULL,
	[Zoom_Fields_Font_Color] [smallint] NOT NULL,
	[Zoom_Fields_Font_Style] [smallint] NOT NULL,
	[Editable_Fields_Backgrou] [smallint] NOT NULL,
	[Editable_Fields_Font_Col] [smallint] NOT NULL,
	[Editable_Fields_Pattern] [smallint] NOT NULL,
	[Editable_Fields_Pattern_] [smallint] NOT NULL,
	[Scrolling_Fields_Backgro] [smallint] NOT NULL,
	[Scrolling_Fields_Font_Co] [smallint] NOT NULL,
	[Scrolling_Fields_Pattern] [smallint] NOT NULL,
	[Scrolling_Fields_PatCor] [smallint] NOT NULL,
	[Required_Fields_Font_Col] [smallint] NOT NULL,
	[Required_Fields_Font_Sty] [smallint] NOT NULL,
	[Internet_Browser] [char](255) NOT NULL,
	[Internet_Address] [char](255) NOT NULL,
	[Internet_Type] [smallint] NOT NULL,
	[Internet_Address_Name] [char](81) NOT NULL,
	[PASSWORD] [binary](16) NOT NULL,
	[USRCLASS] [char](15) NOT NULL,
	[MDFRDENT] [smallint] NOT NULL,
	[MODIFDT] [datetime] NOT NULL,
	[CREATDDT] [datetime] NOT NULL,
	[LSTUSRED] [char](15) NOT NULL,
	[PRTOSCRN] [tinyint] NOT NULL,
	[PRTOPRTR] [tinyint] NOT NULL,
	[SHRQFLDS] [tinyint] NOT NULL,
	[DISTPROC] [smallint] NOT NULL,
	[HSCRLARW] [tinyint] NOT NULL,
	[SOPTYPE] [smallint] NOT NULL,
	[RELID] [int] NOT NULL,
	[SECACCS] [binary](4) NOT NULL,
	[TODOOPEN] [tinyint] NOT NULL,
	[TODOPERSOPEN] [tinyint] NOT NULL,
	[TODOPERSROLL] [tinyint] NOT NULL,
	[PALETTETYPE] [smallint] NOT NULL,
	[ORGANIZATIONALVIEW] [smallint] NOT NULL,
	[ACCOUNTINGVIEW] [tinyint] NOT NULL,
	[USERLANG] [smallint] NOT NULL,
	[UserRole] [smallint] NOT NULL,
	[UserType] [smallint] NOT NULL,
	[UserStatus] [smallint] NOT NULL,
	[DateInactivated] [datetime] NOT NULL,
	[Last_EWS_User_Name] [char](237) NOT NULL,
	[Last_EWS_Email_Address] [char](237) NOT NULL,
	[WCUser] [tinyint] NOT NULL,
	[ADObjectGuid] [char](37) NOT NULL,
	[SQLLoginID] [char](15) NOT NULL,
	[WindowCommandDisplay] [smallint] NOT NULL,
	[DEX_ROW_ID] [int] NOT NULL,
 CONSTRAINT [PKSY01400] PRIMARY KEY NONCLUSTERED 
(
	[USERID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[SY01400]  WITH CHECK ADD  CONSTRAINT [CK__SY01400__CREATDD__6477ECF3] CHECK  ((datepart(hour,[CREATDDT])=(0) AND datepart(minute,[CREATDDT])=(0) AND datepart(second,[CREATDDT])=(0) AND datepart(millisecond,[CREATDDT])=(0)))
GO

ALTER TABLE [dbo].[SY01400] CHECK CONSTRAINT [CK__SY01400__CREATDD__6477ECF3]
GO

ALTER TABLE [dbo].[SY01400]  WITH CHECK ADD  CONSTRAINT [CK__SY01400__DateIna__656C112C] CHECK  ((datepart(hour,[DateInactivated])=(0) AND datepart(minute,[DateInactivated])=(0) AND datepart(second,[DateInactivated])=(0) AND datepart(millisecond,[DateInactivated])=(0)))
GO

ALTER TABLE [dbo].[SY01400] CHECK CONSTRAINT [CK__SY01400__DateIna__656C112C]
GO

ALTER TABLE [dbo].[SY01400]  WITH CHECK ADD  CONSTRAINT [CK__SY01400__MODIFDT__66603565] CHECK  ((datepart(hour,[MODIFDT])=(0) AND datepart(minute,[MODIFDT])=(0) AND datepart(second,[MODIFDT])=(0) AND datepart(millisecond,[MODIFDT])=(0)))
GO

ALTER TABLE [dbo].[SY01400] CHECK CONSTRAINT [CK__SY01400__MODIFDT__66603565]
GO


