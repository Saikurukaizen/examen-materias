## EXAMEN MATERIAS FINAL FANTASY VII

**Descripción**

Hay una cierta cantidad de materias. Cada materia tiene sus propiedades. Para ello, he creado dos clases. La clase Materia en el cual contiene tantos métodos
de obtención de una propiedad como propiedades tiene (nombre, tipo, nivel máximo, nivel actual y AP).

En la clase Materias es donde están agrupadas. Se ha creado un array vacío para añadir en ese array las nuevas materias a añadir.
He tipado la clase Materia con la variable para que el valor, que se le pase a esa función, sea una instancia a la clase Materia y se guarde en la variable $materias.

A partir de ahí, creé los métodos getInfoMateria() i getMateriaLessAP()

En la primera llamamos a cada método de cada propiedad, de cada Materia (usando foreach).

la variable $materiaLessAP inicializa con la primera materia del array $materias, y paso un foreach, y comparo la obtención de AP de $materias con la que menos tiene.
La almaceno en la varibale y la devuelvo.

Agrego materias individuales instanciando la clase Materia y una variable de materias, y añado materia en la clase Materias.

Hago las consultas de su Info y de qué materia tiene menos AP con el metodo getMateriaLessAP().
