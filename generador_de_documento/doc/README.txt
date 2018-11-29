La generacion del documento de estadísticas se hace sobre PHP para manejar las
llamadas a la api y la creación del PDF.

La creación del PDF se hace sobre FPDF ( http://www.fpdf.org/ ).

-------------------------------------------------------------------------------------------------
Comentarios sobre la instalación de FPDF:

The FPDF library is made up of the following elements:

- the main file, fpdf.php, which contains the class
- the font definition files located in the font directory

The font definition files are necessary as soon as you want to output some text in a document.
If they are not accessible, the SetFont() method will produce the following error:

FPDF error: Could not include font definition file


Remarks:

- Only the files corresponding to the fonts actually used are necessary

--------------------------------------------------------------------------------------------------

Notas importantes!
--- El programa debe estar sobre una instalación de APACHE con soporte para PHP 7.


--------------------------------------------------------------------------------------------------

Instrucciones de uso e implementación

El generador funciona en base a la conección con el beck end en laravel.


Para recibir el formato de resumen en pdf se debe: 

Hacer una llamada get al archivo index.php encontrado en la carpeta src.

los parametros get deben ser:

inicio = dd-mm-yyyy
fin = dd-mm-yyyy

El generador mostrará una tabla en pdf con los datos entre als fechas solicitadas,
formateará automaticamente entre días o semanas segun sea necesario,
con respecto al espacio.
