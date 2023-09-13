
drop DATABASE HotelLosSuenos;

-- Crear la base de datos
CREATE DATABASE HotelLosSuenos;

/*drop DATABASE HotelLosSuenos;*/


USE HotelLosSuenos;

-- Crear tabla de huéspedes
CREATE TABLE clientes (
    ID INT auto_increment PRIMARY KEY,
	tipo_id VARCHAR(50)not null,
	id_usuario VARCHAR(50) not null,
	nombres_usuario varchar(100) not null,
	apellidos_usuario varchar(100) not null,
	telefono_usuario varchar(20) not null,
	correo_usuario varchar(50) not null,
	area_usuario int not null,          
	tipo_usuario bool null,             -- Entiendase que si esta en true es un colaborador y si es falso es un cliente.
	password varchar(50) not null, -- aleatoria
	estado_usuario bool not null        -- Entiendase que si esta en true esta activo y si es falso inactivo. 
);


-- Crear tabla de habitaciones
CREATE TABLE Habitaciones (
    NumeroHabitacion INT PRIMARY KEY,
    TipoHabitacion varchar(50),
    precio FLOAT,
    descripcion_habitacion varchar(45) not null,
    nivel_habitacion int not null,
    estado_habitacion int not null
);

-- Crear tabla de reservaciones
CREATE TABLE Reservaciones (
    ID INT auto_increment PRIMARY KEY,
    FechaInicio DATE,
    FechaFin DATE,
    IDcliente INT,
    NumeroHabitacion INT,
    estado varchar(1),
    FOREIGN KEY (IDcliente) REFERENCES clientes(ID),
    FOREIGN KEY (NumeroHabitacion) REFERENCES Habitaciones(NumeroHabitacion)
);

-- Crear tabla de pedidos de bar-restaurante
CREATE TABLE Pedidos (
    ID INT auto_increment PRIMARY KEY,
    FechaPedido DATETIME,
    IDHabitacion INT,
	categoria INT, --1 BEBIDAS FRIAS - 2 BEBIDAS CALIENTES - 3 POSTRES
    Descripcion NVARCHAR(255),
    Precio FLOAT,
    FOREIGN KEY (IDHabitacion) REFERENCES Habitaciones(NumeroHabitacion)
);

-- Crear tabla de órdenes de camarería
CREATE TABLE OrdenesCamareria (
    ID INT auto_increment PRIMARY KEY,
    FechaOrden DATETIME,
    IDHabitacion INT,
	categoria INT, --1 DESAYUNOS - 2 ALMUERZO - 3 CENA
    Descripcion NVARCHAR(255),
	Precio FLOAT,
    FOREIGN KEY (IDHabitacion) REFERENCES Habitaciones(NumeroHabitacion)
);

-- Crear tabla de facturas
CREATE TABLE Facturas (
    ID INT auto_increment PRIMARY KEY,
    FechaFactura DATE,
    IDReservacion INT,
    FOREIGN KEY (IDReservacion) REFERENCES Reservaciones(ID)
);

-- Crear tabla de detalles de factura
CREATE TABLE DetallesFactura (
    ID INT auto_increment PRIMARY KEY,
    IDFactura INT,
    IDPedido INT,
    IDOrdenCamareria INT,
    Precio FLOAT,
    FOREIGN KEY (IDFactura) REFERENCES Facturas(ID),
    FOREIGN KEY (IDPedido) REFERENCES Pedidos(ID),
    FOREIGN KEY (IDOrdenCamareria) REFERENCES OrdenesCamareria(ID)
);

-- Crear tabla de pagos
CREATE TABLE Pagos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    IDFactura INT,
    FechaPago DATE,
    Monto FLOAT,
    FOREIGN KEY (IDFactura) REFERENCES Facturas(ID)
);


INSERT INTO clientes (tipo_id, id_usuario, nombres_usuario, apellidos_usuario, telefono_usuario, correo_usuario, area_usuario, tipo_usuario, clave_usuario, estado_usuario)
VALUES ('DPI', 12345, 'Nombre', 'Apellido', '5551234567', 'admin@admin.com', 1, 0, '123', 1);


INSERT INTO Habitaciones (NumeroHabitacion, TipoHabitacion, precio, descripcion_habitacion, nivel_habitacion, estado_habitacion)
VALUES (101, 'Suite', 200.00, 'Habitación de lujo con vista al mar', 1, 1);

INSERT INTO Reservaciones (FechaInicio, FechaFin, IDcliente, NumeroHabitacion)
VALUES ('2023-09-15', '2023-09-20', 1, 101);

INSERT INTO Pedidos (FechaPedido, IDHabitacion, Descripcion, Precio)
VALUES ('2023-09-15 08:00:00', 101, 'Desayuno continental', 15.00);

INSERT INTO OrdenesCamareria (FechaOrden, IDHabitacion, Descripcion)
VALUES ('2023-09-16 10:30:00', 101, 'Limpieza de la habitación');

INSERT INTO Facturas (FechaFactura, IDReservacion)
VALUES ('2023-09-20', 1);

INSERT INTO DetallesFactura (IDFactura, IDPedido, IDOrdenCamareria, Precio)
VALUES (1, 1, 1, 15.00);

INSERT INTO Pagos (IDFactura, FechaPago, Monto)
VALUES (1, '2023-09-22', 200.00);


/*PROPUESTAS PARA INSERTAR LOS VALORES AUTOINCREMENTADOS
CREATE PROCEDURE InsertarClienteConID
    @tipo_id VARCHAR(50),
    @id_usuario VARCHAR(50),
    @nombres_usuario VARCHAR(100),
    @apellidos_usuario VARCHAR(100),
    @telefono_usuario VARCHAR(20),
    @correo_usuario VARCHAR(50),
    @area_usuario INT,
    @tipo_usuario BIT,
    @clave_usuario VARCHAR(50),
    @estado_usuario BIT,
    @NuevoID INT OUTPUT
AS
BEGIN
    INSERT INTO clientes (tipo_id, id_usuario, nombres_usuario, apellidos_usuario, telefono_usuario, correo_usuario, area_usuario, tipo_usuario, clave_usuario, estado_usuario)
    VALUES (@tipo_id, @id_usuario, @nombres_usuario, @apellidos_usuario, @telefono_usuario, @correo_usuario, @area_usuario, @tipo_usuario, @clave_usuario, @estado_usuario);

    -- Obtener el ID insertado
    SET @NuevoID = SCOPE_IDENTITY();
END;

/*COMO LLAMAR AL PROCEDIMIENTO ANTERIOR
DECLARE @NuevoID INT;

-- Ejecutar el procedimiento almacenado
EXEC InsertarClienteConID
    @tipo_id = 'TipoID',
    @id_usuario = 'UsuarioID',
    @nombres_usuario = 'Nombre',
    @apellidos_usuario = 'Apellido',
    @telefono_usuario = '1234567890',
    @correo_usuario = 'correo@example.com',
    @area_usuario = 1,
    @tipo_usuario = 1, -- O 0, según corresponda
    @clave_usuario = 'Contraseña',
    @estado_usuario = 1, -- O 0, según corresponda
    @NuevoID OUTPUT;

-- Imprimir el ID insertado
PRINT 'ID insertado: ' + CAST(@NuevoID AS VARCHAR(10));
