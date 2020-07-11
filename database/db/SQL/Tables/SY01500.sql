USE [DYNAMICS]
GO

/****** Object:  Table [dbo].[SY01500]    Script Date: 10/07/2020 07:16:21  ******/
SET ANSI_NULLS OFF
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[SY01500](
	[LSTUSRED] [char](15) NOT NULL,
	[CREATDDT] [datetime] NOT NULL,
	[MODIFDT] [datetime] NOT NULL,
	[CMPANYID] [smallint] NOT NULL,
	[CMPNYNAM] [char](65) NOT NULL,
	[TAXEXMT1] [char](25) NOT NULL,
	[TAXEXMT2] [char](25) NOT NULL,
	[TAXREGTN] [char](25) NOT NULL,
	[COPTXSCH] [char](15) NOT NULL,
	[COSTXSCH] [char](15) NOT NULL,
	[LOCATNNM] [char](31) NOT NULL,
	[ADRCNTCT] [char](61) NOT NULL,
	[ADDRESS1] [char](61) NOT NULL,
	[ADDRESS2] [char](61) NOT NULL,
	[ADDRESS3] [char](61) NOT NULL,
	[CITY] [char](35) NOT NULL,
	[COUNTY] [char](61) NOT NULL,
	[STATE] [char](29) NOT NULL,
	[ZIPCODE] [char](11) NOT NULL,
	[PHONE1] [char](21) NOT NULL,
	[PHONE2] [char](21) NOT NULL,
	[PHONE3] [char](21) NOT NULL,
	[FAXNUMBR] [char](21) NOT NULL,
	[USESCRTY] [tinyint] NOT NULL,
	[UDCOSTR1] [char](31) NOT NULL,
	[UDCOSTR2] [char](31) NOT NULL,
	[CMPCNTRY] [char](61) NOT NULL,
	[NOTEINDX] [numeric](19, 5) NOT NULL,
	[PPSFRNUM] [char](25) NOT NULL,
	[PPSTAXRT] [smallint] NOT NULL,
	[PPSVNDID] [char](15) NOT NULL,
	[VATMODE] [tinyint] NOT NULL,
	[LOCATNID] [char](15) NOT NULL,
	[INTERID] [char](5) NOT NULL,
	[ACSEGSEP] [char](1) NOT NULL,
	[SECOPTS] [binary](4) NOT NULL,
	[DisplayRegisteredPalette] [tinyint] NOT NULL,
	[Company_Options] [binary](4) NOT NULL,
	[Vets100CompanyNumber] [char](21) NOT NULL,
	[TYPEOFBUSINESS] [char](31) NOT NULL,
	[DUNS_Number] [char](21) NOT NULL,
	[SICNUMBER] [char](15) NOT NULL,
	[GOVCRPID] [char](31) NOT NULL,
	[BRNCHNMBR] [char](21) NOT NULL,
	[DFLTTXDTLID] [char](15) NOT NULL,
	[PurchasesTaxDetailID] [char](15) NOT NULL,
	[CCode] [char](7) NOT NULL,
	[IVTRFDOCFMT] [smallint] NOT NULL,
	[Offline_User] [char](15) NOT NULL,
	[WORKFLOWENABLED] [tinyint] NOT NULL,
	[CrmCredentialsMethod] [smallint] NOT NULL,
	[CrmOrganizationName] [char](255) NOT NULL,
	[CrmServiceUrl] [char](255) NOT NULL,
	[EnableGLReporting] [tinyint] NOT NULL,
	[EnableAAReporting] [tinyint] NOT NULL,
	[UseDateEffectiveTax] [tinyint] NOT NULL,
	[DateToUse] [smallint] NOT NULL,
	[DEX_ROW_ID] [int] IDENTITY(1,1) NOT NULL,
 CONSTRAINT [PKSY01500] PRIMARY KEY CLUSTERED 
(
	[CMPANYID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[SY01500]  WITH CHECK ADD CHECK  ((datepart(hour,[CREATDDT])=(0) AND datepart(minute,[CREATDDT])=(0) AND datepart(second,[CREATDDT])=(0) AND datepart(millisecond,[CREATDDT])=(0)))
GO

ALTER TABLE [dbo].[SY01500]  WITH CHECK ADD CHECK  ((datepart(hour,[MODIFDT])=(0) AND datepart(minute,[MODIFDT])=(0) AND datepart(second,[MODIFDT])=(0) AND datepart(millisecond,[MODIFDT])=(0)))
GO


