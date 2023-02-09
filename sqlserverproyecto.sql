USE [MIGRACION DEL PROYECTO ]
GO
/****** Object:  Schema [bgo39cyguoenla3tpaqm]    Script Date: 15/11/2022 3:57:29 p. m. ******/
CREATE SCHEMA [bgo39cyguoenla3tpaqm]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[balance]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[balance](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[total] [nvarchar](25) NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_balance_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[cargo]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[cargo](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[nombre] [nvarchar](70) NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_cargo_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[cargo_usuarios]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[cargo_usuarios](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[cargo_id] [int] NOT NULL,
	[usuarios_id] [int] NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_cargo_usuarios_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[comentarios]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[comentarios](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[detalle] [nvarchar](max) NOT NULL,
	[usuario_id] [int] NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_comentarios_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[factura]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[factura](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[estado_pago] [nvarchar](75) NOT NULL,
	[usuarios_id] [int] NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_factura_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[pagos]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[pagos](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[metodo_pago] [nvarchar](70) NOT NULL,
	[total_pagar] [nvarchar](12) NOT NULL,
	[usuarios_id] [int] NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_pagos_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[pedidos]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[pedidos](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[numero_orden] [nvarchar](25) NOT NULL,
	[fecha] [date] NOT NULL,
	[descripcion] [nvarchar](max) NOT NULL,
	[pagos_id] [int] NOT NULL,
	[comentarios_id] [int] NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_pedidos_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[pqr]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[pqr](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[mensaje] [nvarchar](70) NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_pqr_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[productos]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[productos](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[nombres] [nvarchar](30) NOT NULL,
	[descripcion] [nvarchar](max) NOT NULL,
	[precio] [nvarchar](20) NOT NULL,
	[estado] [nvarchar](25) NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_productos_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[usuarios]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[usuarios](
	[id] [int] IDENTITY(5,1) NOT NULL,
	[nombres] [nvarchar](70) NOT NULL,
	[apellidos] [nvarchar](70) NOT NULL,
	[tipo_documento] [nvarchar](70) NOT NULL,
	[numero_documento] [nvarchar](70) NOT NULL,
	[correo] [nvarchar](70) NOT NULL,
	[contrasena] [nvarchar](70) NOT NULL,
	[telefono] [nvarchar](20) NOT NULL,
	[codigo_administrador] [nvarchar](30) NOT NULL,
	[pqr_id] [int] NOT NULL,
	[balance_id] [int] NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_usuarios_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[usuarios_pedidos]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[usuarios_pedidos](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[usuarios_id] [int] NOT NULL,
	[pedidos_id] [int] NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_usuarios_pedidos_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[usuarios_productos]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[usuarios_productos](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[usuarios_id] [int] NOT NULL,
	[productos_id] [int] NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_usuarios_productos_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [bgo39cyguoenla3tpaqm].[verificar_pedido]    Script Date: 15/11/2022 3:57:29 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [bgo39cyguoenla3tpaqm].[verificar_pedido](
	[id] [int] IDENTITY(3,1) NOT NULL,
	[estado] [nvarchar](20) NOT NULL,
	[usuarios_id] [int] NOT NULL,
	[created_at] [datetime] NOT NULL,
	[updated_at] [datetime] NOT NULL,
 CONSTRAINT [PK_verificar_pedido_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Index [cargo_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [cargo_id] ON [bgo39cyguoenla3tpaqm].[cargo_usuarios]
(
	[cargo_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [usuarios_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [usuarios_id] ON [bgo39cyguoenla3tpaqm].[cargo_usuarios]
(
	[usuarios_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [usuario_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [usuario_id] ON [bgo39cyguoenla3tpaqm].[comentarios]
(
	[usuario_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [usuarios_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [usuarios_id] ON [bgo39cyguoenla3tpaqm].[factura]
(
	[usuarios_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [usuarios_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [usuarios_id] ON [bgo39cyguoenla3tpaqm].[pagos]
(
	[usuarios_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [comentarios_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [comentarios_id] ON [bgo39cyguoenla3tpaqm].[pedidos]
(
	[comentarios_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [pagos_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [pagos_id] ON [bgo39cyguoenla3tpaqm].[pedidos]
(
	[pagos_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [balance_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [balance_id] ON [bgo39cyguoenla3tpaqm].[usuarios]
(
	[balance_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [pqr_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [pqr_id] ON [bgo39cyguoenla3tpaqm].[usuarios]
(
	[pqr_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [pedidos_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [pedidos_id] ON [bgo39cyguoenla3tpaqm].[usuarios_pedidos]
(
	[pedidos_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [usuarios_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [usuarios_id] ON [bgo39cyguoenla3tpaqm].[usuarios_pedidos]
(
	[usuarios_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [productos_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [productos_id] ON [bgo39cyguoenla3tpaqm].[usuarios_productos]
(
	[productos_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [usuarios_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [usuarios_id] ON [bgo39cyguoenla3tpaqm].[usuarios_productos]
(
	[usuarios_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
/****** Object:  Index [usuarios_id]    Script Date: 15/11/2022 3:57:30 p. m. ******/
CREATE NONCLUSTERED INDEX [usuarios_id] ON [bgo39cyguoenla3tpaqm].[verificar_pedido]
(
	[usuarios_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[balance] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[balance] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[cargo] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[cargo] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[cargo_usuarios] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[cargo_usuarios] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[comentarios] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[comentarios] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[factura] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[factura] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pagos] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pagos] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pedidos] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pedidos] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pqr] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pqr] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[productos] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[productos] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_pedidos] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_pedidos] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_productos] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_productos] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[verificar_pedido] ADD  DEFAULT (getdate()) FOR [created_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[verificar_pedido] ADD  DEFAULT (getdate()) FOR [updated_at]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[cargo_usuarios]  WITH CHECK ADD  CONSTRAINT [cargo_usuarios$cargo_usuarios_ibfk_1] FOREIGN KEY([cargo_id])
REFERENCES [bgo39cyguoenla3tpaqm].[cargo] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[cargo_usuarios] CHECK CONSTRAINT [cargo_usuarios$cargo_usuarios_ibfk_1]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[cargo_usuarios]  WITH CHECK ADD  CONSTRAINT [cargo_usuarios$cargo_usuarios_ibfk_2] FOREIGN KEY([usuarios_id])
REFERENCES [bgo39cyguoenla3tpaqm].[usuarios] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[cargo_usuarios] CHECK CONSTRAINT [cargo_usuarios$cargo_usuarios_ibfk_2]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[comentarios]  WITH CHECK ADD  CONSTRAINT [comentarios$comentarios_ibfk_1] FOREIGN KEY([usuario_id])
REFERENCES [bgo39cyguoenla3tpaqm].[usuarios] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[comentarios] CHECK CONSTRAINT [comentarios$comentarios_ibfk_1]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[factura]  WITH CHECK ADD  CONSTRAINT [factura$factura_ibfk_1] FOREIGN KEY([usuarios_id])
REFERENCES [bgo39cyguoenla3tpaqm].[usuarios] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[factura] CHECK CONSTRAINT [factura$factura_ibfk_1]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pagos]  WITH CHECK ADD  CONSTRAINT [pagos$pagos_ibfk_1] FOREIGN KEY([usuarios_id])
REFERENCES [bgo39cyguoenla3tpaqm].[usuarios] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pagos] CHECK CONSTRAINT [pagos$pagos_ibfk_1]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pedidos]  WITH CHECK ADD  CONSTRAINT [pedidos$pedidos_ibfk_1] FOREIGN KEY([pagos_id])
REFERENCES [bgo39cyguoenla3tpaqm].[pagos] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pedidos] CHECK CONSTRAINT [pedidos$pedidos_ibfk_1]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pedidos]  WITH CHECK ADD  CONSTRAINT [pedidos$pedidos_ibfk_2] FOREIGN KEY([comentarios_id])
REFERENCES [bgo39cyguoenla3tpaqm].[comentarios] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[pedidos] CHECK CONSTRAINT [pedidos$pedidos_ibfk_2]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios]  WITH CHECK ADD  CONSTRAINT [usuarios$usuarios_ibfk_1] FOREIGN KEY([pqr_id])
REFERENCES [bgo39cyguoenla3tpaqm].[pqr] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios] CHECK CONSTRAINT [usuarios$usuarios_ibfk_1]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios]  WITH CHECK ADD  CONSTRAINT [usuarios$usuarios_ibfk_2] FOREIGN KEY([balance_id])
REFERENCES [bgo39cyguoenla3tpaqm].[balance] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios] CHECK CONSTRAINT [usuarios$usuarios_ibfk_2]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_pedidos]  WITH CHECK ADD  CONSTRAINT [usuarios_pedidos$usuarios_pedidos_ibfk_1] FOREIGN KEY([usuarios_id])
REFERENCES [bgo39cyguoenla3tpaqm].[usuarios] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_pedidos] CHECK CONSTRAINT [usuarios_pedidos$usuarios_pedidos_ibfk_1]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_pedidos]  WITH CHECK ADD  CONSTRAINT [usuarios_pedidos$usuarios_pedidos_ibfk_2] FOREIGN KEY([pedidos_id])
REFERENCES [bgo39cyguoenla3tpaqm].[pedidos] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_pedidos] CHECK CONSTRAINT [usuarios_pedidos$usuarios_pedidos_ibfk_2]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_productos]  WITH CHECK ADD  CONSTRAINT [usuarios_productos$usuarios_productos_ibfk_1] FOREIGN KEY([usuarios_id])
REFERENCES [bgo39cyguoenla3tpaqm].[usuarios] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_productos] CHECK CONSTRAINT [usuarios_productos$usuarios_productos_ibfk_1]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_productos]  WITH CHECK ADD  CONSTRAINT [usuarios_productos$usuarios_productos_ibfk_2] FOREIGN KEY([productos_id])
REFERENCES [bgo39cyguoenla3tpaqm].[productos] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[usuarios_productos] CHECK CONSTRAINT [usuarios_productos$usuarios_productos_ibfk_2]
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[verificar_pedido]  WITH CHECK ADD  CONSTRAINT [verificar_pedido$verificar_pedido_ibfk_1] FOREIGN KEY([usuarios_id])
REFERENCES [bgo39cyguoenla3tpaqm].[usuarios] ([id])
GO
ALTER TABLE [bgo39cyguoenla3tpaqm].[verificar_pedido] CHECK CONSTRAINT [verificar_pedido$verificar_pedido_ibfk_1]
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.balance' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'balance'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.cargo' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'cargo'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.cargo_usuarios' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'cargo_usuarios'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.comentarios' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'comentarios'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.factura' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'factura'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.pagos' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'pagos'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.pedidos' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'pedidos'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.pqr' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'pqr'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.productos' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'productos'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.usuarios' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'usuarios'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.usuarios_pedidos' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'usuarios_pedidos'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.usuarios_productos' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'usuarios_productos'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_SSMA_SOURCE', @value=N'bgo39cyguoenla3tpaqm.verificar_pedido' , @level0type=N'SCHEMA',@level0name=N'bgo39cyguoenla3tpaqm', @level1type=N'TABLE',@level1name=N'verificar_pedido'
GO
