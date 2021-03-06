USE [DYNAMICS]
GO

/****** Object:  Table [dbo].[MC40200]    Script Date: 11/07/2020 11:50:52  ******/
SET ANSI_NULLS OFF
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[MC40200](
	[CURNCYID] [char](15) NOT NULL,
	[CURRNIDX] [smallint] NOT NULL,
	[NOTEINDX] [numeric](19, 5) NOT NULL,
	[CRNCYDSC] [char](31) NOT NULL,
	[CRNCYSYM] [char](3) NOT NULL,
	[CNYSYMAR_1] [smallint] NOT NULL,
	[CNYSYMAR_2] [smallint] NOT NULL,
	[CNYSYMAR_3] [smallint] NOT NULL,
	[CYSYMPLC] [smallint] NOT NULL,
	[INCLSPAC] [tinyint] NOT NULL,
	[NEGSYMBL] [smallint] NOT NULL,
	[NGSMAMPC] [smallint] NOT NULL,
	[NEGSMPLC] [smallint] NOT NULL,
	[DECSYMBL] [smallint] NOT NULL,
	[DECPLCUR] [smallint] NOT NULL,
	[THOUSSYM] [smallint] NOT NULL,
	[CURTEXT_1] [char](25) NOT NULL,
	[CURTEXT_2] [char](25) NOT NULL,
	[CURTEXT_3] [char](25) NOT NULL,
	[ISOCURRC] [char](3) NOT NULL,
	[CURLNGID] [smallint] NOT NULL,
	[DEX_ROW_TS] [datetime] NOT NULL,
	[DEX_ROW_ID] [int] IDENTITY(1,1) NOT NULL,
 CONSTRAINT [PKMC40200] PRIMARY KEY NONCLUSTERED 
(
	[CURNCYID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[MC40200] ADD  CONSTRAINT [DF__MC40200__DEX_ROW__589C25F3]  DEFAULT (getutcdate()) FOR [DEX_ROW_TS]
GO