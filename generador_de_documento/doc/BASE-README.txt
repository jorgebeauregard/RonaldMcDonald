La generacion del documento de estadísticas se hace sobre PHP para manejar las
llamadas a la api y la creación del PDF.

La creación del PDF se hace sobre FPDF ( http://www.fpdf.org/ ).


Comentarios sobre la instalación de FPDF:

The FPDF library is made up of the following elements:

- the main file, fpdf.php, which contains the class
- the font definition files located in the font directory

The font definition files are necessary as soon as you want to output some text in a document.
If they are not accessible, the SetFont() method will produce the following error:

FPDF error: Could not include font definition file


Remarks:

- Only the files corresponding to the fonts actually used are necessary


