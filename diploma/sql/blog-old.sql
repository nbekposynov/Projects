-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 22 2022 г., 09:45
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `diplomas`
--

CREATE TABLE `diplomas` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `dcompany` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `mentor` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `results` text NOT NULL,
  `requirements` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `diplomas`
--

INSERT INTO `diplomas` (`id`, `user_id`, `faculty_id`, `dcompany`, `location`, `mentor`, `title`, `description`, `results`, `requirements`, `published`, `created_at`) VALUES
(34, 45, 11, 'ТОО «NTS Design»', '', 'По прибытии в компанию', 'Разработка QPSK/QAM модулятора', 'Рабочий QPSK/QAM модулятор способный принимать цифровые данные с микроконтроллера/микропроцессора и обеспечивать передачу сигналов в радиоэфир в собственном протоколе. Предполагается что разработка будет осуещствлена на основе дискретных элементов (не готовой интегральной схемой)', 'Знание основ аналоговой и цифровой схемотехники. Умение пользоваться прикладными САПР для разработки и моделирования. Умение вести расчеты ВЧ схемотехники. Умение пользоваться контрольно-измерительным оборудованием', 'Разработка QPSK/QAM модулятора', 1, '2022-04-21 09:56:47'),
(35, 45, 14, 'ТОО «Адал-метео»', 'Алматы', 'Николаев Виталий Евгеньевич', 'Разработка информационной системы для сбора, обработки, анализа и хранения метеорологических и экологических данных', 'Дипломный проект предусматривает разработку информационной системы, которая включает в себя свободно распространяемую базу данных, модуль приема данных, модули обработки, анализа и записи результатов в базу данных. ', 'В результате выполнения дипломного проекта должна быть реализована информационная система для сбора, обработки, анализа и хранения метеорологических и экологических данных.', 'Студент должен обладать базовыми и специальными компетенциями по специальности ВТиПО', 1, '2022-04-22 11:51:16');

-- --------------------------------------------------------

--
-- Структура таблицы `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `description`) VALUES
(11, 'Кибербезопасность', ''),
(14, 'Телекоммуникация', '');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(32, 45, 13, 'Hotforwords Can Explain Lorem Ipsum far better than I can', '1650048059_изображение_2022-04-16_003903633.png', '&lt;p&gt;Ornare etiam risus egestas est conubia dictum sollicitudin montes Vel urna gravida egestas sollicitudin. Sit, hymenaeos netus nam tempor nonummy cum accumsan sollicitudin praesent. Fames suscipit eros mollis torquent, tellus auctor rutrum, mollis nunc consectetuer vel diam penatibus lorem phasellus inceptos, elementum. Est ante. Varius turpis pretium, litora dis penatibus eros. Habitant facilisis. Auctor, dignissim tortor cum accumsan facilisi laoreet diam. Platea facilisis justo facilisi. Mattis nibh. Taciti ante. Accumsan consequat arcu phasellus gravida.&lt;/p&gt;&lt;p&gt;Egestas massa senectus mauris ligula rhoncus pretium sagittis lacus. Ornare accumsan maecenas viverra aliquet tortor leo hendrerit. Purus porttitor faucibus nisl aptent ante iaculis mus consectetuer erat. Elementum tortor ornare vestibulum parturient non fermentum posuere cras magna sociosqu, faucibus sociosqu odio. Euismod lacinia. Vel. Penatibus nunc bibendum vestibulum inceptos natoque elementum pellentesque Hendrerit imperdiet cubilia. Id ante feugiat natoque. Dictumst etiam morbi habitasse imperdiet. Primis ultricies risus habitasse Lorem ac tincidunt, ut posuere imperdiet quisque tincidunt porttitor litora nec consequat lacinia euismod convallis duis convallis euismod senectus. Proin erat accumsan.&lt;/p&gt;&lt;p&gt;Aptent vivamus pellentesque, faucibus diam fusce natoque tristique id. Curabitur non in commodo in. Elementum consectetuer metus. Magnis. Pretium laoreet ultricies class donec auctor pellentesque adipiscing suscipit tellus dictum Quisque. Natoque netus ligula, venenatis vivamus viverra vehicula fermentum purus cras condimentum pharetra ut amet at. Aliquet ullamcorper. Lacinia Cum accumsan est nascetur, tortor erat primis congue erat nostra sollicitudin turpis. Turpis convallis commodo nascetur fusce. Velit in sem nibh quam facilisis pulvinar sociosqu aenean dis cum aliquam lacus porta torquent per est turpis placerat. Purus per nonummy habitant justo aptent cum accumsan lacinia mollis. Eleifend taciti imperdiet tortor mi. Quam fusce Gravida habitasse hac sapien. Sociosqu, erat consequat semper dis lobortis urna. Proin mi per faucibus nunc rutrum adipiscing. Inceptos integer taciti potenti condimentum dolor nam. Dignissim fringilla odio nec nostra. Consequat eget cubilia Sociosqu dignissim.&lt;/p&gt;', 1, '2022-04-16 00:40:59');

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(13, 'Студенческая жизнь', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `company` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `name`, `lastname`, `email`, `password`, `avatar`, `created_at`, `company`) VALUES
(45, 1, 'jamadogg', 'Нарулан', 'Бауыржанулы', 'jamadogg@gmail.com', '$2y$10$gMMcoATGXo9jDoavjK8JKOri72BMIVfGG0tT5Qjghok/f1bRjj3rG', '06ffc8658488b63b89041cb300172d83.jpg', '2022-03-08 15:47:56', 0),
(56, 0, 'naru', 'Нарулан', 'Бауыржанулы', 'narulanba@gmail.com', '$2y$10$6HE9Q.FTP8OQucS2N9nE4exMS0TJV3KgkD/npq6VU31V5XOIuqQ.2', '', '2022-04-17 17:15:01', 0),
(57, 0, 'jd', 'Энрик', 'Ларрсон', 'trayj188@gmail.com', '$2y$10$Isu6h3NIiyZdQMQHa.B.quu00oame0XDztV0MlgXqSw5VaB4FMB3u', '06ffc8658488b63b89041cb300172d83.jpg', '2022-04-22 06:58:20', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `diplomas`
--
ALTER TABLE `diplomas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`faculty_id`);

--
-- Индексы таблицы `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Индексы таблицы `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `diplomas`
--
ALTER TABLE `diplomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
