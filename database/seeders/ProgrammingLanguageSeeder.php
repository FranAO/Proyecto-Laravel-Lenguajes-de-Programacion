<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProgrammingLanguage;

class ProgrammingLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'nombre' => 'Python',
                'imagen' => 'languages/python-logo-only.png',
                'descripcion' => 'Python es un lenguaje de programación interpretado de alto nivel y de propósito general. Su filosofía de diseño enfatiza la legibilidad del código con el uso de indentación significativa.',
                'creador' => 'Guido van Rossum',
                'año_creacion' => 1991,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Python utiliza tipado dinámico, lo que permite mayor flexibilidad en el desarrollo.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos con herencia múltiple.'],
                    ['titulo' => 'Interpretado', 'descripcion' => 'El código se ejecuta línea por línea a través de un intérprete.'],
                    ['titulo' => 'Multiplataforma', 'descripcion' => 'Puede ejecutarse en cualquier sistema operativo con un intérprete de Python instalado.']
                ],
                'sitio_web' => 'https://www.python.org'
            ],
            [
                'nombre' => 'JavaScript',
                'imagen' => 'languages/js.png',
                'descripcion' => 'JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos, basado en prototipos, imperativo, débilmente tipado y dinámico.',
                'creador' => 'Brendan Eich',
                'año_creacion' => 1995,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'JavaScript utiliza tipado dinámico, permitiendo mayor flexibilidad en el desarrollo.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Implementa programación orientada a objetos basada en prototipos.'],
                    ['titulo' => 'Funcional', 'descripcion' => 'Soporta programación funcional con funciones de primera clase.'],
                    ['titulo' => 'Interpretado', 'descripcion' => 'El código se ejecuta a través de un motor de JavaScript en el navegador.']
                ],
                'sitio_web' => 'https://developer.mozilla.org/es/docs/Web/JavaScript'
            ],
            [
                'nombre' => 'Java',
                'imagen' => 'languages/java.png',
                'descripcion' => 'Java es un lenguaje de programación orientado a objetos que se ejecuta en miles de millones de dispositivos. Es un lenguaje de programación de propósito general que es concurrente, basado en clases y orientado a objetos.',
                'creador' => 'James Gosling',
                'año_creacion' => 1995,
                'paradigma' => 'Orientado a objetos',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Java utiliza un sistema de tipos estático que ayuda a prevenir errores en tiempo de compilación.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código Java se compila a bytecode que se ejecuta en la JVM.'],
                    ['titulo' => 'Multiplataforma', 'descripcion' => 'El código Java puede ejecutarse en cualquier plataforma que tenga una JVM instalada.'],
                    ['titulo' => 'Seguro', 'descripcion' => 'Java incluye características de seguridad integradas como el sandbox y la gestión de memoria automática.']
                ],
                'sitio_web' => 'https://www.java.com'
            ],
            [
                'nombre' => 'C++',
                'imagen' => 'languages/c-.png',
                'descripcion' => 'C++ es un lenguaje de programación diseñado en 1979 por Bjarne Stroustrup. La intención de su creación fue extender al lenguaje de programación C mecanismos que permiten la manipulación de objetos.',
                'creador' => 'Bjarne Stroustrup',
                'año_creacion' => 1983,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'C++ utiliza un sistema de tipos estático que ayuda a prevenir errores en tiempo de compilación.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código se compila directamente a código máquina para mejor rendimiento.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos con clases y herencia.'],
                    ['titulo' => 'Bajo nivel', 'descripcion' => 'Permite acceso directo a la memoria y control de hardware.']
                ],
                'sitio_web' => 'https://isocpp.org'
            ],
            [
                'nombre' => 'Ruby',
                'imagen' => 'languages/header-ruby-logo.png',
                'descripcion' => 'Ruby es un lenguaje de programación interpretado, reflexivo y orientado a objetos, creado por el programador japonés Yukihiro "Matz" Matsumoto, quien comenzó a trabajar en Ruby en 1993.',
                'creador' => 'Yukihiro Matsumoto',
                'año_creacion' => 1995,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Ruby utiliza tipado dinámico para mayor flexibilidad en el desarrollo.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Todo en Ruby es un objeto, siguiendo el paradigma orientado a objetos puro.'],
                    ['titulo' => 'Interpretado', 'descripcion' => 'El código se ejecuta a través de un intérprete de Ruby.'],
                    ['titulo' => 'Flexible', 'descripcion' => 'Permite múltiples formas de resolver un mismo problema.']
                ],
                'sitio_web' => 'https://www.ruby-lang.org'
            ],
            [
                'nombre' => 'PHP',
                'imagen' => 'languages/new-php-logo.png',
                'descripcion' => 'PHP es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web. Fue creado inicialmente por el programador danés-canadiense Rasmus Lerdorf en 1994.',
                'creador' => 'Rasmus Lerdorf',
                'año_creacion' => 1994,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'PHP utiliza tipado dinámico para mayor flexibilidad.'],
                    ['titulo' => 'Interpretado', 'descripcion' => 'El código se ejecuta a través del intérprete de PHP.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos con clases y herencia.'],
                    ['titulo' => 'Web', 'descripcion' => 'Especialmente diseñado para el desarrollo web.']
                ],
                'sitio_web' => 'https://www.php.net'
            ],
            [
                'nombre' => 'Swift',
                'imagen' => 'languages/swift-playgrounds-96x96.png',
                'descripcion' => 'Swift es un lenguaje de programación multiparadigma creado por Apple enfocado en el desarrollo de aplicaciones para iOS y macOS. Fue presentado en la WWDC 2014.',
                'creador' => 'Apple Inc.',
                'año_creacion' => 2014,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Swift utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código se compila a código máquina para mejor rendimiento.'],
                    ['titulo' => 'Seguro', 'descripcion' => 'Incluye características de seguridad como manejo de memoria automático.'],
                    ['titulo' => 'Moderno', 'descripcion' => 'Incorpora características modernas de programación.']
                ],
                'sitio_web' => 'https://swift.org'
            ],
            [
                'nombre' => 'Go',
                'imagen' => 'languages/Go-Logo_Black.png',
                'descripcion' => 'Go es un lenguaje de programación concurrente y compilado inspirado en la sintaxis de C. Ha sido desarrollado por Google y sus diseñadores iniciales son Robert Griesemer, Rob Pike y Ken Thompson.',
                'creador' => 'Google',
                'año_creacion' => 2009,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Go utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código se compila a código máquina para mejor rendimiento.'],
                    ['titulo' => 'Concurrente', 'descripcion' => 'Soporta concurrencia a través de goroutines y channels.'],
                    ['titulo' => 'Eficiente', 'descripcion' => 'Diseñado para ser eficiente en tiempo de compilación y ejecución.']
                ],
                'sitio_web' => 'https://golang.org'
            ],
            [
                'nombre' => 'Rust',
                'imagen' => 'languages/rust-logo-128x128-blk-v2.png',
                'descripcion' => 'Rust es un lenguaje de programación compilado, de propósito general y multiparadigma que está siendo desarrollado por Mozilla. Fue diseñado para ser un lenguaje seguro, concurrente y práctico.',
                'creador' => 'Graydon Hoare',
                'año_creacion' => 2010,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Rust utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código se compila a código máquina para mejor rendimiento.'],
                    ['titulo' => 'Seguro', 'descripcion' => 'Garantiza la seguridad de memoria sin recolección de basura.'],
                    ['titulo' => 'Concurrente', 'descripcion' => 'Soporta concurrencia segura a través del sistema de ownership.']
                ],
                'sitio_web' => 'https://www.rust-lang.org'
            ],
            [
                'nombre' => 'Kotlin',
                'imagen' => 'languages/kotlin-logo.png',
                'descripcion' => 'Kotlin es un lenguaje de programación de tipado estático que corre sobre la máquina virtual de Java y que también puede ser compilado a código fuente de JavaScript.',
                'creador' => 'JetBrains',
                'año_creacion' => 2011,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Kotlin utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos con clases y herencia.'],
                    ['titulo' => 'Funcional', 'descripcion' => 'Incluye características de programación funcional.'],
                    ['titulo' => 'Interoperable con Java', 'descripcion' => 'Se integra perfectamente con código Java existente.']
                ],
                'sitio_web' => 'https://kotlinlang.org'
            ],
            [
                'nombre' => 'TypeScript',
                'imagen' => 'languages/ts-logo-256.png',
                'descripcion' => 'TypeScript es un lenguaje de programación libre y de código abierto desarrollado y mantenido por Microsoft. Es un superconjunto de JavaScript, que esencialmente añade tipos estáticos y objetos basados en clases.',
                'creador' => 'Microsoft',
                'año_creacion' => 2012,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'TypeScript añade tipos estáticos a JavaScript.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos con clases.'],
                    ['titulo' => 'Compilado a JavaScript', 'descripcion' => 'El código se compila a JavaScript estándar.'],
                    ['titulo' => 'Interoperable con JavaScript', 'descripcion' => 'Se integra perfectamente con código JavaScript existente.']
                ],
                'sitio_web' => 'https://www.typescriptlang.org'
            ],
            [
                'nombre' => 'C#',
                'imagen' => 'languages/c-sharp.png',
                'descripcion' => 'C# es un lenguaje de programación multiparadigma desarrollado y estandarizado por Microsoft como parte de su plataforma .NET. Su sintaxis básica deriva de C/C++ y utiliza el modelo de objetos de la plataforma .NET.',
                'creador' => 'Microsoft',
                'año_creacion' => 2000,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'C# utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos con clases y herencia.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código se compila a código intermedio (IL) para la plataforma .NET.'],
                    ['titulo' => 'Multiplataforma', 'descripcion' => 'Puede ejecutarse en cualquier plataforma con .NET Core.']
                ],
                'sitio_web' => 'https://docs.microsoft.com/dotnet/csharp'
            ],
            [
                'nombre' => 'Scala',
                'imagen' => 'languages/scala.png',
                'descripcion' => 'Scala es un lenguaje de programación multi-paradigma diseñado para expresar patrones de programación comunes de una forma concisa, elegante y tipada.',
                'creador' => 'Martin Odersky',
                'año_creacion' => 2004,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Scala utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Funcional', 'descripcion' => 'Soporta programación funcional con funciones de primera clase.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Implementa programación orientada a objetos con clases y traits.'],
                    ['titulo' => 'Interoperable con Java', 'descripcion' => 'Se integra perfectamente con código Java existente.']
                ],
                'sitio_web' => 'https://www.scala-lang.org'
            ],
            [
                'nombre' => 'Perl',
                'imagen' => 'languages/perl-programming-language-icon.png',
                'descripcion' => 'Perl es un lenguaje de programación interpretado, diseñado por Larry Wall, que toma características del lenguaje C, del lenguaje interpretado shell (sh), AWK, sed, Lisp y, en un grado inferior, de muchos otros lenguajes de programación.',
                'creador' => 'Larry Wall',
                'año_creacion' => 1987,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Perl utiliza tipado dinámico para mayor flexibilidad.'],
                    ['titulo' => 'Interpretado', 'descripcion' => 'El código se ejecuta a través del intérprete de Perl.'],
                    ['titulo' => 'Flexible', 'descripcion' => 'Permite múltiples formas de resolver un mismo problema.'],
                    ['titulo' => 'Procesamiento de texto', 'descripcion' => 'Excelente para manipulación de texto y expresiones regulares.']
                ],
                'sitio_web' => 'https://www.perl.org'
            ],
            [
                'nombre' => 'Haskell',
                'imagen' => 'languages/Logo_of_the_Haskell_programming_language.svg.png',
                'descripcion' => 'Haskell es un lenguaje de programación estandarizado, multipropósito, puramente funcional, con semánticas no estricta y fuerte tipificación estática.',
                'creador' => 'Comité de Haskell',
                'año_creacion' => 1990,
                'paradigma' => 'Funcional',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Haskell utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Funcional puro', 'descripcion' => 'Implementa programación funcional pura sin efectos secundarios.'],
                    ['titulo' => 'Evaluación perezosa', 'descripcion' => 'Utiliza evaluación perezosa para mejor eficiencia.'],
                    ['titulo' => 'Seguro', 'descripcion' => 'Garantiza la seguridad de tipos en tiempo de compilación.']
                ],
                'sitio_web' => 'https://www.haskell.org'
            ],
            [
                'nombre' => 'R',
                'imagen' => 'languages/R_logo.svg.png',
                'descripcion' => 'R es un lenguaje de programación y un entorno de software para análisis estadístico, gráficos y computación estadística.',
                'creador' => 'Ross Ihaka y Robert Gentleman',
                'año_creacion' => 1993,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'R utiliza tipado dinámico para mayor flexibilidad.'],
                    ['titulo' => 'Estadístico', 'descripcion' => 'Especializado en análisis estadístico y computación.'],
                    ['titulo' => 'Gráficos', 'descripcion' => 'Excelente para visualización de datos y gráficos.'],
                    ['titulo' => 'Análisis de datos', 'descripcion' => 'Potentes herramientas para análisis y manipulación de datos.']
                ],
                'sitio_web' => 'https://www.r-project.org'
            ],
            [
                'nombre' => 'MATLAB',
                'imagen' => 'languages/Matlab_Logo.png',
                'descripcion' => 'MATLAB es un entorno de computación numérica y un lenguaje de programación propietario desarrollado por MathWorks.',
                'creador' => 'MathWorks',
                'año_creacion' => 1984,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Computación numérica', 'descripcion' => 'Especializado en cálculos numéricos y matrices.'],
                    ['titulo' => 'Análisis de datos', 'descripcion' => 'Potentes herramientas para análisis de datos.'],
                    ['titulo' => 'Visualización', 'descripcion' => 'Excelente para visualización de datos y gráficos.'],
                    ['titulo' => 'Simulación', 'descripcion' => 'Herramientas avanzadas para simulación y modelado.']
                ],
                'sitio_web' => 'https://www.mathworks.com/products/matlab.html'
            ],
            [
                'nombre' => 'Julia',
                'imagen' => 'languages/Julia_Programming_Language_Logo.svg.png',
                'descripcion' => 'Julia es un lenguaje de programación dinámico de alto nivel y alto rendimiento para la computación técnica, con una sintaxis familiar para los usuarios de otros entornos de computación técnica.',
                'creador' => 'Jeff Bezanson, Stefan Karpinski, Viral B. Shah, Alan Edelman',
                'año_creacion' => 2012,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Julia utiliza tipado dinámico para mayor flexibilidad.'],
                    ['titulo' => 'Alto rendimiento', 'descripcion' => 'Diseñado para ser tan rápido como C.'],
                    ['titulo' => 'Computación científica', 'descripcion' => 'Especializado en computación científica y técnica.'],
                    ['titulo' => 'Paralelo', 'descripcion' => 'Soporte nativo para computación paralela y distribuida.']
                ],
                'sitio_web' => 'https://julialang.org'
            ],
            [
                'nombre' => 'Dart',
                'imagen' => 'languages/dartlang-icon.png',
                'descripcion' => 'Dart es un lenguaje de programación de código abierto, desarrollado por Google. Fue revelado en la conferencia goto; en Aarhus, Dinamarca, del 10 al 12 de octubre de 2011.',
                'creador' => 'Google',
                'año_creacion' => 2011,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Dart utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos con clases.'],
                    ['titulo' => 'Compilado a JavaScript', 'descripcion' => 'Puede compilarse a JavaScript para web.'],
                    ['titulo' => 'Flutter', 'descripcion' => 'Lenguaje principal para el framework Flutter de desarrollo móvil.']
                ],
                'sitio_web' => 'https://dart.dev'
            ],
            [
                'nombre' => 'Elixir',
                'imagen' => 'languages/elixir-lang-icon.png',
                'descripcion' => 'Elixir es un lenguaje de programación funcional, concurrente y de propósito general que se ejecuta en la máquina virtual de Erlang.',
                'creador' => 'José Valim',
                'año_creacion' => 2011,
                'paradigma' => 'Funcional',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Elixir utiliza tipado dinámico para mayor flexibilidad.'],
                    ['titulo' => 'Funcional', 'descripcion' => 'Implementa programación funcional pura.'],
                    ['titulo' => 'Concurrente', 'descripcion' => 'Soporta concurrencia a través del modelo de actores.'],
                    ['titulo' => 'Tolerante a fallos', 'descripcion' => 'Diseñado para sistemas distribuidos y tolerantes a fallos.']
                ],
                'sitio_web' => 'https://elixir-lang.org'
            ],
            [
                'nombre' => 'Clojure',
                'imagen' => 'languages/Clojure_logo.svg.png',
                'descripcion' => 'Clojure es un dialecto moderno de Lisp, un lenguaje de programación funcional que se ejecuta en la JVM y proporciona herramientas para abordar la concurrencia.',
                'creador' => 'Rich Hickey',
                'año_creacion' => 2007,
                'paradigma' => 'Funcional',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Clojure utiliza tipado dinámico para mayor flexibilidad.'],
                    ['titulo' => 'Funcional', 'descripcion' => 'Implementa programación funcional pura.'],
                    ['titulo' => 'Lisp', 'descripcion' => 'Dialecto moderno de Lisp con sintaxis simplificada.'],
                    ['titulo' => 'JVM', 'descripcion' => 'Se ejecuta en la máquina virtual de Java.']
                ],
                'sitio_web' => 'https://clojure.org'
            ],
            [
                'nombre' => 'F#',
                'imagen' => 'languages/F_Sharp_logo.svg.png',
                'descripcion' => 'F# es un lenguaje de programación multiparadigma, fuertemente tipado, funcional que también soporta programación orientada a objetos e imperativa.',
                'creador' => 'Microsoft Research',
                'año_creacion' => 2005,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'F# utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Funcional', 'descripcion' => 'Implementa programación funcional pura.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos.'],
                    ['titulo' => '.NET', 'descripcion' => 'Se integra con la plataforma .NET.']
                ],
                'sitio_web' => 'https://fsharp.org'
            ],
            [
                'nombre' => 'Groovy',
                'imagen' => 'languages/Groovy-logo.svg.png',
                'descripcion' => 'Groovy es un lenguaje de programación orientado a objetos para la plataforma Java. Es un lenguaje dinámico con características similares a Python, Ruby, Perl y Smalltalk.',
                'creador' => 'James Strachan',
                'año_creacion' => 2003,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Groovy utiliza tipado dinámico para mayor flexibilidad.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos.'],
                    ['titulo' => 'JVM', 'descripcion' => 'Se ejecuta en la máquina virtual de Java.'],
                    ['titulo' => 'Scripting', 'descripcion' => 'Excelente para scripting y automatización.']
                ],
                'sitio_web' => 'https://groovy-lang.org'
            ],
            [
                'nombre' => 'Lua',
                'imagen' => 'languages/Lua-Logo.svg.png',
                'descripcion' => 'Lua es un lenguaje de programación interpretado, imperativo y de muy fácil integración con C. Fue diseñado para ser un lenguaje interpretado con una semántica extendible.',
                'creador' => 'Roberto Ierusalimschy, Luiz Henrique de Figueiredo, Waldemar Celes',
                'año_creacion' => 1993,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Lua utiliza tipado dinámico para mayor flexibilidad.'],
                    ['titulo' => 'Ligero', 'descripcion' => 'Diseñado para ser ligero y eficiente.'],
                    ['titulo' => 'Embeddable', 'descripcion' => 'Fácil de integrar en aplicaciones C/C++.'],
                    ['titulo' => 'Scripting', 'descripcion' => 'Excelente para scripting y automatización.']
                ],
                'sitio_web' => 'https://www.lua.org'
            ],
            [
                'nombre' => 'Objective-C',
                'imagen' => 'languages/Objective-C.png',
                'descripcion' => 'Objective-C es un lenguaje de programación orientado a objetos creado como un superconjunto de C para que implementase un modelo de objetos parecido al de Smalltalk.',
                'creador' => 'Brad Cox y Tom Love',
                'año_creacion' => 1984,
                'paradigma' => 'Orientado a objetos',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Objective-C utiliza tipado dinámico para mayor flexibilidad.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Implementa programación orientada a objetos con mensajes.'],
                    ['titulo' => 'C con mensajes', 'descripcion' => 'Extiende C con capacidades de programación orientada a objetos.'],
                    ['titulo' => 'Apple', 'descripcion' => 'Lenguaje principal para desarrollo en plataformas Apple.']
                ],
                'sitio_web' => 'https://developer.apple.com/documentation/objectivec'
            ],
            [
                'nombre' => 'Pascal',
                'imagen' => 'languages/icons8-pascal-240.png',
                'descripcion' => 'Pascal es un lenguaje de programación desarrollado por el profesor suizo Niklaus Wirth entre los años 1968 y 1969 y publicado en 1970. Su objetivo era crear un lenguaje que facilitara el aprendizaje de programación a sus estudiantes.',
                'creador' => 'Niklaus Wirth',
                'año_creacion' => 1970,
                'paradigma' => 'Imperativo',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Pascal utiliza un sistema de tipos estático para mayor seguridad.'],
                    ['titulo' => 'Estructurado', 'descripcion' => 'Implementa programación estructurada.'],
                    ['titulo' => 'Educativo', 'descripcion' => 'Diseñado para facilitar el aprendizaje de programación.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código se compila a código máquina.']
                ],
                'sitio_web' => 'https://www.freepascal.org'
            ],
            [
                'nombre' => 'COBOL',
                'imagen' => 'languages/programming-language-cobol.png',
                'descripcion' => 'COBOL es un lenguaje de programación que sigue el paradigma de programación imperativa y orientada a objetos. Fue creado en el año 1959 con el objetivo de crear un lenguaje de programación universal que pudiera ser usado en cualquier ordenador.',
                'creador' => 'CODASYL',
                'año_creacion' => 1959,
                'paradigma' => 'Imperativo',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'COBOL utiliza un sistema de tipos estático.'],
                    ['titulo' => 'Orientado a negocios', 'descripcion' => 'Diseñado para aplicaciones de negocio.'],
                    ['titulo' => 'Legible', 'descripcion' => 'Sintaxis cercana al lenguaje natural.'],
                    ['titulo' => 'Mainframe', 'descripcion' => 'Ampliamente usado en sistemas mainframe.']
                ],
                'sitio_web' => 'https://www.microfocus.com/en-us/products/cobol'
            ],
            [
                'nombre' => 'Fortran',
                'imagen' => 'languages/Fortran_logo.svg.png',
                'descripcion' => 'Fortran es un lenguaje de programación de alto nivel de propósito general, procedimental e imperativo que está especialmente adaptado al cálculo numérico y a la computación científica.',
                'creador' => 'John Backus',
                'año_creacion' => 1957,
                'paradigma' => 'Imperativo',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Fortran utiliza un sistema de tipos estático.'],
                    ['titulo' => 'Científico', 'descripcion' => 'Especializado en computación científica.'],
                    ['titulo' => 'Numérico', 'descripcion' => 'Excelente para cálculos numéricos.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código se compila a código máquina.']
                ],
                'sitio_web' => 'https://fortran-lang.org'
            ],
            [
                'nombre' => 'Lisp',
                'imagen' => 'languages/512px-Lisp_logo.svg.png',
                'descripcion' => 'Lisp es una familia de lenguajes de programación de computadora de tipo multiparadigma con una larga historia y una sintaxis completamente entre paréntesis.',
                'creador' => 'John McCarthy',
                'año_creacion' => 1958,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Lisp utiliza tipado dinámico.'],
                    ['titulo' => 'Funcional', 'descripcion' => 'Implementa programación funcional.'],
                    ['titulo' => 'Símbolos', 'descripcion' => 'Manejo de símbolos y expresiones.'],
                    ['titulo' => 'Listas', 'descripcion' => 'Estructura de datos fundamental basada en listas.']
                ],
                'sitio_web' => 'https://common-lisp.net'
            ],
            [
                'nombre' => 'Prolog',
                'imagen' => 'languages/swipl-128.png',
                'descripcion' => 'Prolog es un lenguaje de programación lógico e interpretado usado habitualmente en el campo de la Inteligencia Artificial.',
                'creador' => 'Alain Colmerauer',
                'año_creacion' => 1972,
                'paradigma' => 'Lógico',
                'caracteristicas' => [
                    ['titulo' => 'Declarativo', 'descripcion' => 'Programación basada en declaraciones lógicas.'],
                    ['titulo' => 'Lógico', 'descripcion' => 'Implementa programación lógica.'],
                    ['titulo' => 'Backtracking', 'descripcion' => 'Soporte para backtracking automático.'],
                    ['titulo' => 'IA', 'descripcion' => 'Ampliamente usado en Inteligencia Artificial.']
                ],
                'sitio_web' => 'https://www.swi-prolog.org'
            ],
            [
                'nombre' => 'Ada',
                'imagen' => 'languages/ada_logo.png',
                'descripcion' => 'Ada es un lenguaje de programación orientado a objetos y fuertemente tipado de forma estática que fue diseñado por Jean Ichbiah de CII Honeywell Bull.',
                'creador' => 'Jean Ichbiah',
                'año_creacion' => 1980,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Ada utiliza un sistema de tipos estático fuerte.'],
                    ['titulo' => 'Orientado a objetos', 'descripcion' => 'Soporta programación orientada a objetos.'],
                    ['titulo' => 'Seguro', 'descripcion' => 'Diseñado para sistemas críticos y seguros.'],
                    ['titulo' => 'Crítico', 'descripcion' => 'Ideal para sistemas de misión crítica.']
                ],
                'sitio_web' => 'https://www.adaic.org'
            ],
            [
                'nombre' => 'Smalltalk',
                'imagen' => 'languages/Smalltalk.png',
                'descripcion' => 'Smalltalk es un lenguaje de programación orientado a objetos puro, reflexivo y dinámicamente tipado. Fue diseñado como un lenguaje para dar soporte al nuevo paradigma de programación orientada a objetos.',
                'creador' => 'Alan Kay',
                'año_creacion' => 1972,
                'paradigma' => 'Orientado a objetos',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Smalltalk utiliza tipado dinámico.'],
                    ['titulo' => 'Orientado a objetos puro', 'descripcion' => 'Todo es un objeto en Smalltalk.'],
                    ['titulo' => 'Reflexivo', 'descripcion' => 'Soporta reflexión y metaprogramación.'],
                    ['titulo' => 'Mensajes', 'descripcion' => 'Comunicación basada en envío de mensajes.']
                ],
                'sitio_web' => 'https://squeak.org'
            ],
            [
                'nombre' => 'Erlang',
                'imagen' => 'languages/Erlang_logo.svg.png',
                'descripcion' => 'Erlang es un lenguaje de programación concurrente y un sistema de ejecución que incluye una máquina virtual. Fue diseñado para construir sistemas con los siguientes requisitos: distribución, tolerancia a fallos, soft real-time, no-stop, hot-swapping.',
                'creador' => 'Joe Armstrong',
                'año_creacion' => 1986,
                'paradigma' => 'Funcional',
                'caracteristicas' => [
                    ['titulo' => 'Concurrente', 'descripcion' => 'Soporte nativo para concurrencia.'],
                    ['titulo' => 'Distribuido', 'descripcion' => 'Diseñado para sistemas distribuidos.'],
                    ['titulo' => 'Tolerante a fallos', 'descripcion' => 'Manejo robusto de errores y fallos.'],
                    ['titulo' => 'Telecomunicaciones', 'descripcion' => 'Ampliamente usado en sistemas de telecomunicaciones.']
                ],
                'sitio_web' => 'https://www.erlang.org'
            ],
            [
                'nombre' => 'OCaml',
                'imagen' => 'languages/ocaml.png',
                'descripcion' => 'OCaml es un lenguaje de programación avanzado de la familia de los lenguajes ML, desarrollado y distribuido como software libre por el INRIA en Francia.',
                'creador' => 'INRIA',
                'año_creacion' => 1996,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'OCaml utiliza un sistema de tipos estático.'],
                    ['titulo' => 'Funcional', 'descripcion' => 'Implementa programación funcional.'],
                    ['titulo' => 'Imperativo', 'descripcion' => 'Soporta programación imperativa.'],
                    ['titulo' => 'Objetos', 'descripcion' => 'Soporta programación orientada a objetos.']
                ],
                'sitio_web' => 'https://ocaml.org'
            ],
            [
                'nombre' => 'Racket',
                'imagen' => 'languages/racket.png',
                'descripcion' => 'Racket es un lenguaje de programación de la familia Lisp/Scheme. Es un lenguaje de propósito general que se destaca por su capacidad para crear nuevos lenguajes de programación.',
                'creador' => 'PLT Inc.',
                'año_creacion' => 1995,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado dinámico', 'descripcion' => 'Racket utiliza tipado dinámico.'],
                    ['titulo' => 'Funcional', 'descripcion' => 'Implementa programación funcional.'],
                    ['titulo' => 'Educativo', 'descripcion' => 'Excelente para enseñanza de programación.'],
                    ['titulo' => 'Extensible', 'descripcion' => 'Capaz de crear nuevos lenguajes de programación.']
                ],
                'sitio_web' => 'https://racket-lang.org'
            ],
            [
                'nombre' => 'D',
                'imagen' => 'languages/dlang-logo-png_seeklogo-473074.png',
                'descripcion' => 'D es un lenguaje de programación de sistemas de propósito general desarrollado por Walter Bright de Digital Mars. Su diseño y evolución está regido por The D Programming Language Foundation.',
                'creador' => 'Walter Bright',
                'año_creacion' => 2001,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'D utiliza un sistema de tipos estático.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código se compila a código máquina.'],
                    ['titulo' => 'Sistemas', 'descripcion' => 'Diseñado para programación de sistemas.'],
                    ['titulo' => 'Moderno', 'descripcion' => 'Incorpora características modernas de programación.']
                ],
                'sitio_web' => 'https://dlang.org'
            ],
            [
                'nombre' => 'Nim',
                'imagen' => 'languages/Nim.png',
                'descripcion' => 'Nim es un lenguaje de programación imperativo, multi-paradigma, compilado, con un sistema de tipos estático y una sintaxis similar a Python.',
                'creador' => 'Andreas Rumpf',
                'año_creacion' => 2008,
                'paradigma' => 'Multi-paradigma',
                'caracteristicas' => [
                    ['titulo' => 'Tipado estático', 'descripcion' => 'Nim utiliza un sistema de tipos estático.'],
                    ['titulo' => 'Compilado', 'descripcion' => 'El código se compila a código máquina.'],
                    ['titulo' => 'Eficiente', 'descripcion' => 'Diseñado para ser eficiente y rápido.'],
                    ['titulo' => 'Python-like', 'descripcion' => 'Sintaxis similar a Python.']
                ],
                'sitio_web' => 'https://nim-lang.org'
            ],
            [
                'nombre' => 'LabVIEW',
                'imagen' => 'languages/labview.png',
                'descripcion' => 'LabVIEW es un entorno de desarrollo gráfico utilizado principalmente para la adquisición de datos, instrumentación y control de sistemas. Utiliza programación gráfica en lugar de texto.',
                'creador' => 'National Instruments',
                'año_creacion' => 1986,
                'paradigma' => 'Gráfico',
                'caracteristicas' => [
                    ['titulo' => 'Programación gráfica', 'descripcion' => 'Utiliza programación visual en lugar de texto.'],
                    ['titulo' => 'Instrumentación', 'descripcion' => 'Especializado en control de instrumentos.'],
                    ['titulo' => 'Control', 'descripcion' => 'Excelente para sistemas de control.'],
                    ['titulo' => 'Automatización', 'descripcion' => 'Ideal para automatización industrial.']
                ],
                'sitio_web' => 'https://www.ni.com/labview'
            ]
        ];

        foreach ($languages as $language) {
            ProgrammingLanguage::create($language);
        }
    }
}
