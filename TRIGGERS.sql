-----------------------------------Eliminacion Venta---------------------------------------------------------------------------------

delimiter //
DROP TRIGGER IF EXISTS ElimVenta //
CREATE TRIGGER ElimVenta
BEFORE DELETE ON Venta
FOR EACH ROW
BEGIN
	DELETE FROM Ventaaccesorios where Ventaaccesorios.ID_Venta = old.idVenta;
	DELETE FROM Orden where Orden.idVenta = old.idVenta;
END;//
delimiter ;

---------------------------------------------dELETE VENTA ACCESSORIOS

delimiter //
DROP TRIGGER IF EXISTS delVentaa //
CREATE TRIGGER delVentaa
BEFORE DELETE ON ventaaccesorios
FOR EACH ROW
BEGIN
	UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia + OLD.Cantidad WHERE Accesorios.idAccesorio = OLD.ID_Accessorio;
END; //
delimiter ;


---------------------------------------DELETE ORDEN------------------------------------------------------------------------------------

delimiter //
DROP TRIGGER IF EXISTS delOrden //
CREATE TRIGGER delOrden
BEFORE DELETE ON Orden
FOR EACH ROW
BEGIN
	IF OLD.idReceta IS NOT NULL THEN
		DELETE FROM Receta where Receta.idReceta = OLD.idReceta;
	END IF;
	IF OLD.idLentei IS NOT NULL THEN
		UPDATE Lente SET Lente.Existencia = Lente.Existencia + 1 WHERE Lente.idLente = OLD.idLentei; 
	END IF;
	IF OLD.idLented IS NOT NULL THEN
		UPDATE Lente SET Lente.Existencia = Lente.Existencia + 1 WHERE Lente.idLente = OLD.idLented;
	END IF;
	IF OLD.idAro IS NOT NULL THEN
		UPDATE Aro SET Aro.Existencia = Aro.Existencia + 1 WHERE Aro.idAro = OLD.idAro;
	END IF;
END; //
delimiter ;

----------------------------------------CREATE Venta Accessorios------------------------------------------------------------
delimiter //
DROP TRIGGER IF EXISTS creaVentaa//
CREATE TRIGGER creaVentaa
AFTER INSERT ON Ventaaccessorios
FOR EACH ROW
BEGIN
	UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia - NEW.Cantidad WHERE Accesorios.idAccesorio =NEW.ID_Accessorio;
END; //
delimiter ;

-----------------------------------------CREATE Orden-----------------------------------------------------------------------
delimiter //
DROP TRIGGER IF EXISTS creaOrden//
CREATE TRIGGER creaOrden
AFTER INSERT ON Orden
FOR EACH ROW
BEGIN
	IF NEW.idLentei IS NOT NULL THEN
		UPDATE Lente SET Lente.Existencia = Lente.Existencia - 1 WHERE Lente.idLente = NEW.idLentei; 
	END IF;
	IF NEW.idLented IS NOT NULL THEN
		UPDATE Lente SET Lente.Existencia = Lente.Existencia - 1 WHERE Lente.idLente = NEW.idLented;
	END IF;
	IF NEW.idAro IS NOT NULL THEN
		UPDATE Aro SET Aro.Existencia = Aro.Existencia - 1 WHERE Aro.idAro = NEW.idAro;
	END IF;
END;//
delimiter ;
----------------------------------------update venta accesorios ----------------------------------------------------------------
delimiter //
DROP TRIGGER IF EXISTS updVentaa//
CREATE TRIGGER updVentaa
BEFORE UPDATE ON Ventaaccesorios
FOR EACH ROW
BEGIN
	IF NEW.ID_Accessorio IS NOT NULL THEN
		IF NEW.ID_Accessorio != OLD.ID_Accessorio THEN
			UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia - NEW.Cantidad WHERE Accesorios.idAccesorio =NEW.ID_Accessorio;
			IF OLD.ID_Accessorio IS NOT NULL THEN
				UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia + OLD.Cantidad WHERE Accesorios.idAccesorio = OLD.ID_Accessorio;
			END IF; 
		END IF;
		IF NEW.ID_Accessorio = OLD.ID_Accessorio THEN
			IF NEW.Cantidad != OLD.Cantidad THEN
				UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia + OLD.Cantidad WHERE Accesorios.idAccesorio =NEW.ID_Accessorio;
				UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia - NEW.Cantidad WHERE Accesorios.idAccesorio =NEW.ID_Accessorio;
			END IF;
		END IF;
	END IF;
END;//
delimiter ;
----------------------------------------update Orden----------------------------------------------------------------------------
delimiter //
DROP TRIGGER IF EXISTS updOrden//
CREATE TRIGGER updOrden
BEFORE UPDATE ON Orden
FOR EACH ROW
BEGIN
	IF NEW.idLentei IS NOT NULL THEN
		IF NEW.idLentei != OLD.idLentei THEN
			UPDATE Lente SET Lente.Existencia = Lente.Existencia - 1 WHERE Lente.idLente = NEW.idLentei;
			IF OLD.idLentei IS NOT NULL THEN
				UPDATE Lente SET Lente.Existencia = Lente.Existencia + 1 WHERE Lente.idLente = OLD.idLentei;
			END IF; 
		END IF;
	ELSE
		IF OLD.idLentei IS NOT NULL THEN
				UPDATE Lente SET Lente.Existencia = Lente.Existencia + 1 WHERE Lente.idLente = OLD.idLentei;
		END IF;
	END IF;
	IF NEW.idLented IS NOT NULL THEN
		IF NEW.idLented != OLD.idLented THEN
			UPDATE Lente SET Lente.Existencia = Lente.Existencia - 1 WHERE Lente.idLente = NEW.idLentei;
			IF OLD.idLentei IS NOT NULL THEN
				UPDATE Lente SET Lente.Existencia = Lente.Existencia + 1 WHERE Lente.idLente = OLD.idLentei;
			END IF; 
		END IF;
	ELSE
		IF OLD.idLented IS NOT NULL THEN
				UPDATE Lente SET Lente.Existencia = Lente.Existencia + 1 WHERE Lente.idLente = OLD.idLented;
		END IF;
	END IF;
	IF NEW.idAro IS NOT NULL THEN
		IF NEW.idAro != OLD.idAro THEN
			UPDATE Aro SET Aro.Existencia = Aro.Existencia - 1 WHERE Aro.idAro = NEW.idAro;
			IF OLD.idLentei IS NOT NULL THEN
				UPDATE Aro SET Aro.Existencia = Aro.Existencia + 1 WHERE Aro.idAro = OLD.idAro;
			END IF; 
		END IF;
	ELSE
		IF OLD.idAro IS NOT NULL THEN
				UPDATE Lente SET Lente.Existencia = Lente.Existencia + 1 WHERE Lente.idLente = OLD.idLented;
		END IF;
	END IF;
END;//
delimiter ;
-------------------------------------------------create detalle compra---------------------------------------
delimiter //
DROP TRIGGER IF EXISTS creaDcomp//
CREATE TRIGGER creaDcomp
AFTER INSERT ON Detallecompra
FOR EACH ROW
BEGIN
	IF NEW.ID_Accesorio IS NOT NULL THEN
		UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia + NEW.Cantidad WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
		IF (SELECT Precio_Compra FROM Accesorios WHERE Accesorios.idAccesorio = NEW.ID_Accesorio ) != NEW.Precio_Compra THEN
			IF NEW.Precio_Compra != 0 THEN
				UPDATE Accesorios SET Accesorios.Precio_Compra = NEW.Precio_Compra WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
			END IF;
		END IF;
		IF (SELECT Precio_Venta FROM Accesorios WHERE Accesorios.idAccesorio = NEW.ID_Accesorio ) != NEW.Precio_Venta THEN
			IF NEW.Precio_Venta != 0 THEN
				UPDATE Accesorios SET Accesorios.Precio_Venta = NEW.Precio_Venta WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
			END IF;
		END IF;
	END IF;
	IF NEW.Lente_idLente IS NOT NULL THEN
		UPDATE Lente SET Lente.Existencia = Lente.Existencia + NEW.Cantidad WHERE Lente.idLente = NEW.Lente_idLente;
		IF (SELECT Precio_Compra FROM Lente WHERE Lente.idLente = NEW.Lente_idLente ) != NEW.Precio_Compra THEN
			IF NEW.Precio_Compra != 0 THEN
				UPDATE Lente SET Lente.Precio_Compra = NEW.Precio_Compra WHERE Lente.idLente = NEW.Lente_idLente;
			END IF;
		END IF;
		IF (SELECT Precio_Venta FROM Lente WHERE Lente.idLente = NEW.Lente_idLente ) != NEW.Precio_Venta THEN
			IF NEW.Precio_Venta != 0 THEN
				UPDATE Lente SET Lente.Precio_Venta = NEW.Precio_Venta WHERE Lente.idLente = NEW.Lente_idLente;
			END IF;
		END IF;
	END IF;
	IF NEW.ID_Aro IS NOT NULL THEN
		UPDATE Aro SET Aro.Existencia = Aro.Existencia + NEW.Cantidad WHERE Aro.idAro = NEW.ID_Aro;
		IF (SELECT Precio_Compra FROM Aro WHERE Aro.idAro = NEW.ID_Aro ) != NEW.Precio_Compra THEN
			IF NEW.Precio_Compra != 0 THEN
				UPDATE Aro SET Aro.Precio_Compra = NEW.Precio_Compra WHERE Aro.idAro = NEW.ID_Aro;
			END IF;
		END IF;
		IF (SELECT Precio_Venta FROM Aro WHERE Aro.idAro = NEW.ID_Aro ) != NEW.Precio_Venta THEN
			IF NEW.Precio_Venta != 0 THEN
				UPDATE Aro SET Aro.Precio_Venta = NEW.Precio_Venta WHERE Aro.idAro = NEW.ID_Aro;
			END IF;
		END IF;
	END IF;
END; //
delimiter ;
------------------------------------------------update  compra----------------------------------
delimiter //
DROP TRIGGER IF EXISTS updDcomp//
CREATE TRIGGER updDcomp
BEFORE UPDATE ON Detallecompra
FOR EACH ROW
BEGIN
	IF NEW.ID_Accesorio IS NOT NULL THEN
		IF NEW.ID_Accesorio != OLD.ID_Accesorio THEN
			IF OLD.ID_Accesorio IS NOT NULL THEN
				UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia - OLD.Cantidad WHERE Accesorios.idAccesorio = OLD.ID_Accesorio;
			END IF;
			UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia + NEW.Cantidad WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
			IF new.Precio_Compra != 0 THEN
				UPDATE Accesorios SET Accesorios.Precio_Compra = NEW.Precio_Compra WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
			END IF;
			IF NEW.Precio_Venta != 0 THEN
				UPDATE Accesorios SET Accesorios.Precio_Venta = NEW.Precio_Venta WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
			END IF;
			 
		ELSE
			IF NEW.Cantidad != OLD.Cantidad THEN
					UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia - OLD.Cantidad WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
					UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia + NEW.Cantidad WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
			END IF;  
			IF NEW.Precio_Compra != 0 THEN
				UPDATE Accesorios SET Accesorios.Precio_Compra = NEW.Precio_Compra WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
			END IF;
			IF NEW.Precio_Venta != 0 THEN
				UPDATE Accesorios SET Accesorios.Precio_Venta = NEW.Precio_Venta WHERE Accesorios.idAccesorio = NEW.ID_Accesorio;
			END IF;
		END IF;
	END IF;
	IF NEW.Lente_idLente IS NOT NULL THEN
		IF NEW.Lente_idLente != OLD.Lente_idLente THEN
			IF OLD.Lente_idLente IS NOT NULL THEN
				UPDATE Lente SET Lente.Existencia = Lente.Existencia - OLD.Cantidad WHERE Lente.idLente = OLD.Lente_idLente;
			END IF;
			UPDATE Lente SET Lente.Existencia = Lente.Existencia + NEW.Cantidad WHERE Lente.idLente = NEW.Lente_idLente;
			IF NEW.Precio_Compra != 0 THEN
				UPDATE Lente SET Lente.Precio_Compra = NEW.Precio_Compra WHERE Lente.idLente = NEW.Lente_idLente;
			END IF;
			IF NEW.Precio_Venta != 0 THEN
				UPDATE Lente SET Lente.Precio_Venta = NEW.Precio_Venta WHERE Lente.idLente = NEW.Lente_idLente;
			END IF;
		ELSE
			UPDATE Lente SET Lente.Existencia = Lente.Existencia - OLD.Cantidad WHERE Lente.idLente = OLD.Lente_idLente;
			UPDATE Lente SET Lente.Existencia = Lente.Existencia + NEW.Cantidad WHERE Lente.idLente = NEW.Lente_idLente;
			IF NEW.Precio_Compra != 0 THEN
				UPDATE Lente SET Lente.Precio_Compra = NEW.Precio_Compra WHERE Lente.idLente = NEW.Lente_idLente;
			END IF;
			IF NEW.Precio_Venta != 0 THEN
				UPDATE Lente SET Lente.Precio_Venta = NEW.Precio_Venta WHERE Lente.idLente = NEW.Lente_idLente;
			END IF;
		END IF;
	END IF;
	IF NEW.ID_Aro IS NOT NULL THEN
		IF NEW.ID_Aro != OLD.ID_Aro THEN
			IF OLD.ID_Aro IS NOT NULL THEN
				UPDATE Aro SET Aro.Existencia = Aro.Existencia - OLD.Cantidad WHERE Aro.idAro = OLD.ID_Aro;
			END IF;
			UPDATE Aro SET Aro.Existencia = Aro.Existencia + NEW.Cantidad WHERE Aro.idAro = NEW.ID_Aro;
			IF New.Precio_Compra != 0 THEN
				UPDATE Aro SET Aro.Precio_Compra = NEW.Precio_Compra WHERE Aro.idAro = NEW.ID_Aro;
			END IF;
			IF NEW.Precio_Venta != 0 THEN
				UPDATE Aro SET Aro.Precio_Venta = NEW.Precio_Venta WHERE Aro.idAro = NEW.ID_Aro;
			END IF;
		ELSE
			UPDATE Aro SET Aro.Existencia = Aro.Existencia - OLD.Cantidad WHERE Aro.idAro = OLD.ID_Aro;
			UPDATE Aro SET Aro.Existencia = Aro.Existencia + NEW.Cantidad WHERE Aro.idAro = NEW.ID_Aro;
			IF New.Precio_Compra != 0 THEN
				UPDATE Aro SET Aro.Precio_Compra = NEW.Precio_Compra WHERE Aro.idAro = NEW.ID_Aro;
			END IF;
			IF NEW.Precio_Venta != 0 THEN
				UPDATE Aro SET Aro.Precio_Venta = NEW.Precio_Venta WHERE Aro.idAro = NEW.ID_Aro;
			END IF;
		END IF;
	END IF;
END; //
delimiter ;
--------------------------------------------Eliminar compra -------------------------------------------------------------------------
delimiter //
DROP TRIGGER IF EXISTS delDcomp//
CREATE TRIGGER delDcomp
AFTER DELETE ON Detallecompra
FOR EACH ROW
BEGIN
	IF OLD.ID_Accesorio IS NOT NULL THEN
		UPDATE Accesorios SET Accesorios.Existencia = Accesorios.Existencia - OLD.Cantidad WHERE Accesorios.idAccesorio = OLD.ID_Accesorio;
		UPDATE Accesorios SET Accesorios.Precio_Compra = OLD.Precio_Compra WHERE Accesorios.idAccesorio = OLD.ID_Accesorio;
		UPDATE Accesorios SET Accesorios.Precio_Venta = OLD.Precio_Venta WHERE Accesorios.idAccesorio = OLD.ID_Accesorio;
	END IF;
	IF OLD.Lente_idLente IS NOT NULL THEN
		UPDATE Lente SET Lente.Existencia = Lente.Existencia - OLD.Cantidad WHERE Lente.idLente = OLD.Lente_idLente;
		UPDATE Lente SET Lente.Precio_Compra = OLD.Precio_Compra WHERE Lente.idLente = OLD.Lente_idLente;
		UPDATE Lente SET Lente.Precio_Venta = OLD.Precio_Venta WHERE Lente.idLente = OLD.Lente_idLente;
	END IF;
	IF OLD.ID_Aro IS NOT NULL THEN
		UPDATE Aro SET Aro.Existencia = Aro.Existencia - OLD.Cantidad WHERE Aro.idAro = OLD.ID_Aro;
		UPDATE Aro SET Aro.Precio_Compra = OLD.Precio_Compra WHERE Aro.idAro = OLD.ID_Aro;
		UPDATE Aro SET Aro.Precio_Venta = OLD.Precio_Venta WHERE Aro.idAro = OLD.ID_Aro;
	END IF;
END; //
delimiter ;
----------------------------------------eLIMINAR COMPRA-----------------------------------------------------
delimiter //
DROP TRIGGER IF EXISTS ElimCompra //
CREATE TRIGGER ElimCompra
BEFORE DELETE ON Compra
FOR EACH ROW
BEGIN
	DELETE FROM Detallecompra where Detallecompra.ID_Compra = old.ID;
END;//
delimiter ;