
# Ejercicios PHP

# Instrucciones Generales:

**Entrega**: La entrega se realizará a través de un repositorio de Git. Crea un repositorio y sube tu código siguiendo la estructura que se detalla a continuación:

```
/nombre_del_repositorio
├── /ejercicio1
│   ├── saludo.html
│   └── saludo.php
├── /ejercicio2
│   ├── viaje.html
│   └── viaje.php
├── /ejercicio8
│   ├── lista_compras.html
│   └── lista_compras.php
└── README.md
```

**Valoración**: Se valorará la diferencia y originalidad en las soluciones propuestas. Asegúrate de documentar cada etapa del proceso y de comentar tu código PHP.

Si tienes preguntas o dudas, no dudes en consultarme. ¡Buena suerte!

**Instrucciones de Entrega**: La entrega se realizará a través de GitHub. Los estudiantes deberán realizar un fork de este repositorio, realizar sus ejercicios y finalmente realizar un pull request con sus soluciones. Asegúrate de que el repositorio esté disponible en la siguiente ruta: https://github.com/<su_usuario_github>/ejercicios_php. Además, deben apoyarse en la documentación oficial de PHP en: https://www.php.net/manual/es/ para cualquier consulta sobre las funciones y características del lenguaje.

**Acceso a Datos**: En todos los ejercicios, los estudiantes podrán utilizar tanto el método `$_GET` como el método `$_POST` para recoger los datos de los formularios, según lo consideren más adecuado para cada caso.  
   - [Manejo de datos con `$_GET`](https://www.php.net/manual/es/reserved.variables.get.php)  
   - [Manejo de datos con `$_POST`](https://www.php.net/manual/es/reserved.variables.post.php)

# Ejercicios de Estructura de Control Secuencial
## 1. Saludo Personalizado
**Enunciado**: Crea un formulario en PHP que solicite al usuario su nombre y apellido por separado. Al enviar el formulario, el programa debe mostrar un mensaje que diga "¡Hola [nombre] [apellido]!".  
   - Documentación recomendada:
     - [Concatenación de cadenas](https://www.php.net/manual/es/language.operators.string.php)

## 2. Cálculo del Tiempo de Viaje
**Enunciado**: Diseña un formulario que pida al usuario la distancia a recorrer (en kilómetros) y la velocidad promedio esperada (en km/h). Al enviar el formulario, el programa debe calcular y mostrar el tiempo que tomará el viaje en horas.  
   - Documentación recomendada:
     - [Operadores matemáticos en PHP](https://www.php.net/manual/es/language.operators.arithmetic.php)

# Ejercicios de Estructura de Control Selectivas

## 3. El Mayor de Tres
**Enunciado**: Crea un formulario en PHP que solicite al usuario tres números. Al enviar el formulario, el programa debe indicar cuál de los tres números es el mayor.  
   - Documentación recomendada:
     - [Condicionales if...else](https://www.php.net/manual/es/control-structures.if.php)
     - [Condicionales switch](https://www.php.net/manual/es/control-structures.switch.php)

## 4. Día de la Semana
**Enunciado**: Diseña un formulario que pida al usuario un número del 1 al 7. Al enviar el formulario, el programa debe retornar el día de la semana correspondiente (ejemplo: 1 = Lunes, 2 = Martes, etc.). Si el número está fuera de ese rango, muestra un mensaje de error.  
   - Documentación recomendada:
     - [Condicionales if...else](https://www.php.net/manual/es/control-structures.if.php)
     - [Condicionales switch](https://www.php.net/manual/es/control-structures.switch.php)

## 5. Categorización de Edades
**Enunciado**: Crea un formulario que solicite la edad del usuario. Al enviar el formulario, el programa debe mostrar:  
   - "Infante" si la edad es menor de 12 años.  
   - "Adolescente" si tiene entre 12 y 17 años.  
   - "Adulto" si está entre 18 y 60 años.  
   - "Anciano" si es mayor de 60.  
   - Documentación recomendada:
     - [Condicionales if...else](https://www.php.net/manual/es/control-structures.if.php)
     - [Condicionales switch](https://www.php.net/manual/es/control-structures.switch.php)

# Ejercicios de Estructura de Control de Repetición

## 6. Suma Acumulativa
**Enunciado**: Diseña un formulario que pida al usuario un número N. Al enviar el formulario, el programa debe calcular y mostrar la suma de todos los números desde 1 hasta N.  
   - Documentación recomendada:
     - [Bucles for](https://www.php.net/manual/es/control-structures.for.php)
     - [Bucles while](https://www.php.net/manual/es/control-structures.while.php)
     - [Bucles do...while](https://www.php.net/manual/es/control-structures.do.while.php)

## 7. Tabla de Multiplicar
**Enunciado**: Crea un formulario que solicite al usuario un número entre 1 y 10. Al enviar el formulario, el programa debe mostrar la tabla de multiplicar de ese número.  
   - Documentación recomendada:
     - [Bucles for](https://www.php.net/manual/es/control-structures.for.php)
     - [Bucles while](https://www.php.net/manual/es/control-structures.while.php)
     - [Bucles do...while](https://www.php.net/manual/es/control-structures.do.while.php)

# Ejercicio de Arrays

## 8. Lista de Compras
**Enunciado**: Crea un formulario que permita al usuario ingresar varios productos en una lista de compras. Al enviar el formulario, el programa debe mostrar la lista completa de productos ingresados, utilizando un array para almacenarlos. Permite que el usuario agregue productos hasta que decida finalizar.
