<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration {
    public function up() {
        Schema::create('libros', function (Blueprint $table) {
            $table->string('codlib');
            $table->string('titlib');
            $table->string('codtem');
            $table->string('codaut');
            $table->timestamps();
            $table->primary('codlib');
        });
    }

    public function down() {
        Schema::dropIfExists('libros');
    }
}
/*
INSERT INTO `libros` (`codlib`, `titlib`, `codtem`,  `codaut`) VALUES
('01', 'Algebra Lineal y sus Aplicaciones', '01', '03'),
('02', 'Fisica para Dummies', '03', '04'),
('03', 'Algebra Lineal', '01', '02'),
('04', 'Fisica Avanzada', '03', '03'),
('05', 'El libro de la Quimica', '04', '05'),
('06', 'Geometria Elemental', '02', '01'),
('07', 'Quimica para Dummies', '04', '05'),
('08', 'Geometria Plana', '02', '02'),
('09', 'Geomtria Moderna', '02', '03');



--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `codtem` varchar(2)  NOT NULL,
  `nomtem`   varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`codtem`, `nomtem`) VALUES
('01', 'Algebra Lineal'),
('02', 'Geometria'),
('03', 'Fisica'),
('04', 'Quimica');


--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `codaut` varchar(2)  NOT NULL,
  `nomaut` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`codaut`, `nomaut`) VALUES
('01', 'Aleksei Pogorelov'),
('02', 'Aurelio Baldor'),
('03', 'David Lay'),
('04', 'Esteban Holzner'),
('05', 'John Moore');




--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`codlib`);
COMMIT;

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`codtem`);
COMMIT;

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`codaut`);
COMMIT;

*/


