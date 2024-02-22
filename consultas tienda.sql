-- 1. Listar el total de clientes agrupados por el código del distrito
SELECT COUNT(*) CANTIDAD, C.ID_DISTRITO, DESCRIPCION
FROM cliente C JOIN distrito D ON C.ID_DISTRITO=D.ID_DISTRITO 
GROUP BY  C.ID_DISTRITO, DESCRIPCION
;
-- 2. Determinar el total de clientes registrados por cada distrito
SELECT COUNT(*) CANTIDAD, C.ID_DISTRITO, DESCRIPCION
FROM cliente C JOIN distrito D ON C.ID_DISTRITO=D.ID_DISTRITO 
GROUP BY  C.ID_DISTRITO, DESCRIPCION
;
-- 3. Determinar el total de boletas asociadas a los clientes en las cuales se debe mostrar el nombre completo del cliente,
SELECT COUNT(*), CONCAT(NOMBRES," ",PATERNO," ",MATERNO) NOMBRES 
FROM boleta B JOIN cliente C ON B.ID_CLIENTE=C.ID_CLIENTE
GROUP BY NOMBRES,PATERNO,MATERNO
;
-- 4. Determinar el monto subtotal por cada boleta, este se dará en base al precio del producto  y la cantidad registrada 
-- en el detalle de boleta,
SELECT DISTINCT B.NUM_BOLETA,SUM((CANTIDAD * PRECIO)) SUBTOTAL
FROM producto P JOIN detalleboleta DB ON DB.ID_PRODUCTO = P.ID_PRODUCTO
JOIN boleta B ON B.NUM_BOLETA=DB.NUM_BOLETA
GROUP BY B.NUM_BOLETA
;
-- 5. Determinar el monto total vendido por años, es decir, se debe listar los años registrados en la boleta y el subtotal por cada año
SELECT SUM((CANTIDAD * PRECIO)) SUBTOTAL, YEAR(FECHA) AÑO
FROM boleta B JOIN detalleboleta DB ON DB.NUM_BOLETA=B.NUM_BOLETA
JOIN producto P ON P.ID_PRODUCTO=DB.ID_PRODUCTO 
GROUP BY YEAR(FECHA)
;


