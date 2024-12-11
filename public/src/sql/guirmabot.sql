-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla platzi.becas
CREATE TABLE IF NOT EXISTS `becas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `razon` text DEFAULT NULL,
  `documento` text DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `estado` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `becas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla platzi.becas: ~12 rows (aproximadamente)
INSERT INTO `becas` (`id`, `id_usuario`, `razon`, `documento`, `fecha_solicitud`, `estado`) VALUES
	(1, NULL, 'sa', 'Array', '2024-12-10', 'PENDIENTE'),
	(2, 1, 'sa', 'Array', '2024-12-10', 'PENDIENTE'),
	(3, 1, 'sa', 'PROYECTO GUIMARBOT.pdf', '2024-12-10', 'PENDIENTE'),
	(4, 1, 'sa', 'PROYECTO GUIMARBOT.pdf', '2024-12-10', 'PENDIENTE'),
	(5, 1, 'sa', 'PROYECTO GUIMARBOT.pdf', '2024-12-10', 'PENDIENTE'),
	(6, 1, 'sa', 'PROYECTO GUIMARBOT.pdf', '2024-12-10', 'PENDIENTE'),
	(7, 1, 'saassas', 'PROYECTO GUIMARBOT.pdf', '2024-12-10', 'PENDIENTE'),
	(8, 1, 'sasa', 'PROYECTO GUIMARBOT.pdf', '2024-12-10', 'PENDIENTE'),
	(9, 1, 'sasasa', 'PROYECTO GUIMARBOT.pdf', '2024-12-10', 'PENDIENTE'),
	(10, 1, 'sasasa', 'PROYECTO GUIMARBOT.pdf', '2024-12-10', 'PENDIENTE'),
	(11, 1, 'sasas', 'PROYECTO GUIMARBOT.pdf', '2024-12-10', 'PENDIENTE'),
	(12, 1, 'dsasadsadsa', 'replaced_image.png', '2024-12-10', 'PENDIENTE');

-- Volcando estructura para tabla platzi.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `duracion` varchar(190) DEFAULT NULL,
  `video` text DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla platzi.cursos: ~8 rows (aproximadamente)
INSERT INTO `cursos` (`id`, `url`, `nombre`, `icon`, `descripcion`, `duracion`, `video`, `precio`) VALUES
	(1, 'inteligencia_artificial', 'inteligencia artificial', 'https://static.platzi.com/cdn-cgi/image/width=1024,quality=50,format=auto/media/achievements/inteligencia-artificial-para-el-trabajo-badge-fd13573b-3003-402b-8386-835531f3a851.png', '\nOptimiza el servicio al cliente de tu negocio con Inteligencia Artificial Generativa (Gen AI) y Machine Learning. Aplica análisis de datos y Procesamiento de Lenguaje Natural (NLP) para mejorar la experiencia del cliente. Crea asistentes virtuales personalizados, integra expertos virtuales y perfecciona MVPs para interacciones más eficientes.', '12h', 'https://www.youtube.com/embed/u28ns-tHA6g', 50),
	(2, 'programacion', 'programacion', 'https://static.platzi.com/cdn-cgi/image/width=1024,quality=50,format=auto/media/achievements/badge-taller-ciberseguridad-4e4b663e-50c2-4d1b-a204-4c88b78c6e49.png', 'Programa desde cero, domina Javascript, entiende HTML y aprende de algoritmos. Sí, desde cero. Entenderás la lógica del código, cómo piensan las programadoras expertas y cómo programar un videojuego web de principio a fin. Aprender a programar no es fácil, pero Platzi lo hace efectivo.', '14h', 'https://www.youtube.com/embed/TdITcVD64zI?si=XoStrhU9Et8fkrTt', 30),
	(3, 'base_datos', 'base de datos', 'https://static.platzi.com/cdn-cgi/image/width=1024,quality=50,format=auto/media/achievements/curso-ingles-basico-a1-para-principiantes_badge-65b8b027-2451-488b-b282-80077d60d62.png', 'Aprende los fundamentos de las bases de datos relacionales, utilizando el lenguaje SQL como herramienta fundamental. Aprenderás desde cero a crear bases de datos robustas y eficientes, siguiendo las mejores prácticas de la industria.', '18h', 'https://www.youtube.com/embed/OuJerKzV5T0?si=fgPkDsnejdoHsR05', 50),
	(4, 'ciberseguridad', 'ciberseguridad', 'https://static.platzi.com/media/learningpath/emblems/68c4c14c-729f-4c77-9a2f-0277ef607ab8.jpg', 'Cursos especializados en ciberseguridad. Aprende a prevenir ciberataques y especialízate para garantizar tu seguridad informática y la de tu empresa.', '22h', 'https://www.youtube.com/embed/gzES0MuWqHE', 80),
	(5, 'ingles', 'ingles', 'https://static.platzi.com/media/learningpath/emblems/c8bf262f-e3bd-4b4f-93c3-a4144a5eb19f.jpg', 'Aprende inglés en línea con cursos para todos los niveles y desarrolla un inglés profesional para negocios, viajes, programación e inteligencia artificial.', '10h', 'https://www.youtube.com/embed/Z6GGAQOMX8c?si=yNZAFASieDwdxdUt', 50),
	(6, 'marketing', 'marketing', 'https://static.platzi.com/media/learningpath/emblems/022ae749-6c4e-4b6f-a6f3-60405502aefe.jpg', 'Aprende SEO, Contenido para Redes Sociales, Email Marketing, Growth Marketing, y analítica. Potencia el crecimiento de tu producto o servicio.', '8h', 'https://www.youtube.com/embed/Ctd6BTuZmjA?si=M2VNyY6JL_-BhNUt', 30),
	(7, 'cloud', 'cloud', 'https://static.platzi.com/media/learningpath/emblems/35ad4e7b-ee64-494c-8b8c-7014a9bdff0f.jpg', 'Aprende CI/CD, Resiliencia y Despliegues con escenarios reales para construir habilidades en las últimas tecnologías Cloud y On-Premise.', '10h', 'https://www.youtube.com/embed/6iHT8XTi68A?si=GJVMxkidY5bCNS8Q', 100),
	(8, 'javascript', 'javascript', 'https://static.platzi.com/media/learningpath/emblems/26a9c51f-127f-4867-9f93-64c92f68bec4.jpg', 'La Escuela de JavaScript de Platzi es nuestra más completa colección de cursos, proyectos y actividades colaborativas. JavaScript se consolida como el lenguaje de programación más utilizado en el mundo, siendo la herramienta para creación de páginas web dinámicas, aplicaciones web y software moderno de mayor demanda laboral. Arranca con los Fundamentos de JavaScript, manipula el DOM, crea Web Componentes con JavaScript Vanilla y conviértete en Frontend Developer con bibliotecas y frameworks más utilizados como Angular, Vue.js y React.js. También, refuerza tus habilidades como Backend Developer con Node.js o Express.js.', '14h', 'https://www.youtube.com/embed/QoC4RxNIs5M?si=u43vsS5qE5O_OWh3', 80);

-- Volcando estructura para tabla platzi.planes
CREATE TABLE IF NOT EXISTS `planes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `beneficios` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL CHECK (json_valid(`beneficios`)),
  `periodo` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla platzi.planes: ~3 rows (aproximadamente)
INSERT INTO `planes` (`id`, `nombre`, `precio`, `beneficios`, `periodo`) VALUES
	(1, 'Basico', 10, '{\n  "beneficios": [\n    {\n      "titulo": "Contenido profesional y actualizado",\n      "descripcion": "Acceso a contenido actualizado con certificados digitales tras completar cursos y rutas."\n    },\n    {\n      "titulo": "Certificados físicos",\n      "descripcion": "Certificados físicos disponibles para las rutas de aprendizaje profesional completadas."\n    },\n    {\n      "titulo": "Acceso a escuelas especializadas",\n      "descripcion": "Acceso exclusivo a escuelas de Startups, Inglés y Liderazgo."\n    },\n    {\n      "titulo": "Eventos exclusivos",\n      "descripcion": "Participación en eventos únicos como Platzi Conf y otras experiencias educativas."\n    },\n    {\n      "titulo": "Descarga de contenido",\n      "descripcion": "Posibilidad de descargar contenido a través de la app móvil para acceso offline."\n    }\n  ]\n}\n', 'Mensual'),
	(2, 'Experto', 40, '{\n  "beneficios": [\n    {\n      "titulo": "Certificados físicos para las rutas de aprendizaje profesional",\n      "descripcion": "Acceso a certificaciones físicas que validan tu aprendizaje."\n    },\n    {\n      "titulo": "Acceso a las escuelas de Startups, Inglés y liderazgo",\n      "descripcion": "Programas especializados para emprendedores, inglés y desarrollo de liderazgo."\n    },\n    {\n      "titulo": "Eventos exclusivos como Platzi Conf",\n      "descripcion": "Oportunidades para asistir a eventos y conferencias importantes en la comunidad."\n    },\n    {\n      "titulo": "Descarga contenido en la app móvil",\n      "descripcion": "Accede y descarga el contenido directamente en tu dispositivo móvil."\n    }\n  ]\n}\n', 'Bimestral'),
	(3, 'Premium', 80, '{\n  "beneficios": [\n    {\n      "titulo": "Certificados físicos para las rutas de aprendizaje profesional",\n      "descripcion": "Acceso a certificaciones físicas que validan tu aprendizaje."\n    },\n    {\n      "titulo": "Acceso a las escuelas de Startups, Inglés y liderazgo",\n      "descripcion": "Programas especializados para emprendedores, inglés y desarrollo de liderazgo."\n    },\n    {\n      "titulo": "Eventos exclusivos como Platzi Conf",\n      "descripcion": "Oportunidades para asistir a eventos y conferencias importantes en la comunidad."\n    },\n    {\n      "titulo": "Descarga contenido en la app móvil",\n      "descripcion": "Accede y descarga el contenido directamente en tu dispositivo móvil."\n    }\n  ]\n}\n', 'Anual');

-- Volcando estructura para tabla platzi.profesores
CREATE TABLE IF NOT EXISTS `profesores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla platzi.profesores: ~8 rows (aproximadamente)
INSERT INTO `profesores` (`id`, `id_curso`, `nombre`, `apellidos`, `imagen`) VALUES
	(1, 1, 'Carli', 'Florida', 'https://static.platzi.com/media/uploads/Carla_Florida_ebb63295d7.png'),
	(2, 4, 'Anibal', 'Rojas', 'https://static.platzi.com/media/uploads/Anibal_Rojas_4b57a6308d.png'),
	(3, 3, 'Carolina', 'Castañeda', 'https://static.platzi.com/media/uploads/Carolina_Castaneda_1935cf0de6.png'),
	(4, 6, 'Luis', 'Martinez', 'https://static.platzi.com/media/uploads/Luis_Martinez_6a15bc8e42.png'),
	(5, 2, 'Jose', 'Sanchez', 'https://static.platzi.com/media/uploads/Anibal_Rojas_4b57a6308d.png'),
	(6, 5, 'Carli', 'Florida', 'https://static.platzi.com/media/uploads/Carla_Florida_ebb63295d7.png'),
	(7, 7, 'Anibal', 'Rojas', 'https://static.platzi.com/media/uploads/Anibal_Rojas_4b57a6308d.png'),
	(8, 8, 'Carolina', 'Castañeda', 'https://static.platzi.com/media/uploads/Carolina_Castaneda_1935cf0de6.png');

-- Volcando estructura para tabla platzi.secciones
CREATE TABLE IF NOT EXISTS `secciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `duracion` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `secciones_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla platzi.secciones: ~55 rows (aproximadamente)
INSERT INTO `secciones` (`id`, `id_curso`, `nombre`, `descripcion`, `duracion`) VALUES
	(1, 4, 'Simulador Práctico en WhatsApp', 'Aprende a proteger tu información y datos personales para evitar fraudes y garantizar la privacidad y seguridad en línea.', '2h'),
	(2, 4, 'Prevencion de Ataques Informaticos', 'Aprende a proteger tu información y datos personales para evitar fraudes y garantizar la privacidad y seguridad en línea.', '2h'),
	(3, 4, 'Ingenieria Social', 'Aprende a proteger tu información y datos personales para evitar fraudes y garantizar la privacidad y seguridad en línea.', '4h'),
	(4, 2, 'Introducción a la Programación', 'Conoce los fundamentos básicos de la programación, incluyendo variables, condicionales y estructuras de control.', '3h'),
	(5, 2, 'Programación Orientada a Objetos', 'Aprende los conceptos de clases, objetos, herencia y encapsulación para desarrollar software modular y escalable.', '4h'),
	(6, 2, 'Estructuras de Datos', 'Domina las estructuras de datos como listas, pilas, colas y árboles para optimizar tus algoritmos.', '5h'),
	(7, 2, 'Algoritmos Básicos', 'Desarrolla algoritmos para resolver problemas comunes como búsquedas y ordenamiento.', '4h'),
	(8, 2, 'Bases de Datos para Programadores', 'Entiende cómo diseñar y trabajar con bases de datos relacionales y no relacionales.', '3h'),
	(9, 2, 'Desarrollo Web con HTML y CSS', 'Aprende a crear páginas web con diseño responsivo utilizando HTML y CSS.', '4h'),
	(10, 2, 'JavaScript Avanzado', 'Domina funciones avanzadas de JavaScript, como asincronía, promesas y uso de APIs.', '6h'),
	(11, 3, 'Introducción a Bases de Datos', 'Aprende los conceptos básicos de bases de datos, incluyendo tablas, registros y relaciones.', '2h'),
	(12, 3, 'Modelado de Datos', 'Descubre cómo diseñar bases de datos utilizando diagramas entidad-relación.', '3h'),
	(13, 3, 'SQL Básico', 'Domina consultas básicas en SQL como SELECT, INSERT, UPDATE y DELETE.', '4h'),
	(14, 3, 'Normalización de Bases de Datos', 'Aprende a optimizar el diseño de bases de datos para reducir redundancias y mejorar la eficiencia.', '3h'),
	(15, 3, 'Transacciones y Control de Concurrencia', 'Entiende cómo manejar transacciones y resolver problemas de concurrencia en bases de datos.', '4h'),
	(16, 3, 'Bases de Datos NoSQL', 'Conoce los conceptos y usos de bases de datos NoSQL como MongoDB y Redis.', '3h'),
	(17, 3, 'Optimización de Consultas', 'Descubre técnicas para optimizar consultas SQL y mejorar el rendimiento.', '4h'),
	(18, 1, 'Introducción a la Inteligencia Artificial', 'Explora los fundamentos de la inteligencia artificial y sus aplicaciones en el mundo real.', '2h'),
	(19, 1, 'Machine Learning Básico', 'Aprende los principios del aprendizaje automático y cómo entrenar modelos básicos.', '3h'),
	(20, 1, 'Redes Neuronales Artificiales', 'Descubre cómo funcionan las redes neuronales y cómo usarlas en tareas complejas.', '4h'),
	(21, 1, 'Procesamiento de Lenguaje Natural', 'Conoce cómo las máquinas procesan y entienden el lenguaje humano.', '3h'),
	(22, 1, 'Visión por Computadora', 'Aprende cómo las computadoras analizan y comprenden imágenes y videos.', '4h'),
	(23, 1, 'Inteligencia Artificial Ética', 'Explora las implicaciones éticas y sociales del uso de la IA.', '2h'),
	(24, 1, 'Implementación de Proyectos de IA', 'Aplica tus conocimientos para desarrollar y desplegar proyectos reales de inteligencia artificial.', '5h'),
	(25, 6, 'Fundamentos del Marketing', 'Conoce los conceptos básicos del marketing y su importancia en el mundo empresarial.', '2h'),
	(26, 6, 'Estrategias de Marketing Digital', 'Aprende a diseñar y ejecutar estrategias efectivas en plataformas digitales.', '3h'),
	(27, 6, 'SEO y Posicionamiento Web', 'Descubre cómo optimizar páginas web para mejorar su visibilidad en buscadores.', '4h'),
	(28, 6, 'Publicidad en Redes Sociales', 'Aprende a crear campañas de publicidad en plataformas como Facebook, Instagram y LinkedIn.', '3h'),
	(29, 6, 'Email Marketing', 'Diseña estrategias de email marketing efectivas para atraer y fidelizar clientes.', '2h'),
	(30, 6, 'Marketing de Contenidos', 'Crea y distribuye contenido valioso para atraer y retener a tu público objetivo.', '3h'),
	(31, 6, 'Análisis de Datos en Marketing', 'Utiliza herramientas para medir el impacto de tus estrategias y optimizar resultados.', '4h'),
	(32, 5, 'Introducción al Inglés', 'Familiarízate con los conceptos básicos y vocabulario inicial del inglés.', '2h'),
	(33, 5, 'Gramática Básica', 'Aprende las reglas fundamentales de la gramática inglesa para construir frases simples.', '3h'),
	(34, 5, 'Inglés Conversacional', 'Desarrolla habilidades para mantener conversaciones básicas en inglés.', '4h'),
	(35, 5, 'Pronunciación y Fonética', 'Mejora tu pronunciación y entiende los sonidos del inglés.', '2h'),
	(36, 5, 'Inglés para Negocios', 'Aprende vocabulario y expresiones útiles para el entorno empresarial.', '3h'),
	(37, 5, 'Comprensión Auditiva', 'Entrena tu oído para comprender el inglés hablado en distintos contextos.', '2h'),
	(38, 5, 'Preparación para Exámenes', 'Practica y mejora tus habilidades para aprobar certificaciones como TOEFL o IELTS.', '5h'),
	(39, 7, 'Introducción a Cloud Computing', 'Conoce los conceptos básicos de la computación en la nube y sus beneficios.', '2h'),
	(40, 7, 'Modelos de Servicio en la Nube', 'Explora los diferentes modelos de servicio: IaaS, PaaS y SaaS.', '3h'),
	(41, 7, 'Infraestructura como Servicio (IaaS)', 'Aprende a gestionar servidores virtuales, almacenamiento y redes en la nube.', '3h'),
	(42, 7, 'Plataforma como Servicio (PaaS)', 'Descubre cómo desarrollar, implementar y gestionar aplicaciones en la nube.', '2h'),
	(43, 7, 'Seguridad en la Nube', 'Conoce las mejores prácticas y herramientas para proteger datos y aplicaciones.', '4h'),
	(44, 7, 'Gestión de Costos en la Nube', 'Aprende estrategias para optimizar el uso de recursos y reducir costos.', '2h'),
	(45, 7, 'Introducción a AWS y Azure', 'Familiarízate con los principales proveedores de servicios en la nube.', '3h'),
	(46, 7, 'Automatización y DevOps en la Nube', 'Descubre cómo implementar pipelines de CI/CD en entornos cloud.', '4h'),
	(47, 8, 'Introducción a JavaScript', 'Conoce los fundamentos del lenguaje, su sintaxis y casos de uso.', '2h'),
	(48, 8, 'Manipulación del DOM', 'Aprende a interactuar y modificar el Document Object Model con JavaScript.', '3h'),
	(49, 8, 'Eventos y Listeners', 'Descubre cómo manejar eventos como clics, teclas y más en tus aplicaciones.', '2h'),
	(50, 8, 'Funciones y Scope', 'Entiende cómo trabajar con funciones, variables y el concepto de alcance.', '3h'),
	(51, 8, 'Programación Orientada a Objetos en JavaScript', 'Conoce cómo implementar clases, objetos y herencia.', '4h'),
	(52, 8, 'Promesas y Async/Await', 'Domina la programación asíncrona para gestionar llamadas a APIs y más.', '3h'),
	(53, 8, 'Introducción a ES6+', 'Descubre las nuevas características del lenguaje, como destructuración y módulos.', '2h'),
	(54, 8, 'Frameworks y Librerías Populares', 'Conoce las bases de React, Angular y Vue para desarrollo frontend.', '3h'),
	(55, 8, 'Pruebas Unitarias en JavaScript', 'Aprende a escribir y ejecutar tests con herramientas como Jest y Mocha.', '2h');

-- Volcando estructura para tabla platzi.subscripciones
CREATE TABLE IF NOT EXISTS `subscripciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_plan` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado_pago` varchar(190) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_plan` (`id_plan`),
  CONSTRAINT `subscripciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `subscripciones_ibfk_2` FOREIGN KEY (`id_plan`) REFERENCES `planes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla platzi.subscripciones: ~0 rows (aproximadamente)

-- Volcando estructura para tabla platzi.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(190) NOT NULL,
  `apellido_paterno` varchar(190) NOT NULL,
  `apellido_materno` varchar(190) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contasena` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla platzi.usuarios: ~2 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nombres`, `apellido_paterno`, `apellido_materno`, `correo`, `contasena`, `edad`) VALUES
	(1, 'prueba', 'prueba', 'prueba', 'prueba@gmail.com', '$2y$10$XfIasJxcXQp9.OVITuX1QOVpPZEnparhd1C7oER9xByl603kusAiq', 10),
	(2, 'Guirmabot', 'Guirmabot', 'Guirmabot', 'guirmabto@gmail.com', '$2y$10$ufATvBcF7JdFNFoZeS2t2e9URw3tonq8X7/kd8QMtiZNRGNkksA..', 28);

-- Volcando estructura para tabla platzi.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_seccion` int(11) DEFAULT NULL,
  `url` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_seccion` (`id_seccion`),
  CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla platzi.videos: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
