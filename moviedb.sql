-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 13, 2024 lúc 06:26 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `moviedb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `episodes`
--

CREATE TABLE `episodes` (
  `episode_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `season` int(11) DEFAULT NULL,
  `episode_number` varchar(50) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `duration` varchar(50) NOT NULL,
  `release_date` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `episodes`
--

INSERT INTO `episodes` (`episode_id`, `movie_id`, `season`, `episode_number`, `title`, `duration`, `release_date`) VALUES
(1, 3, 1, '28 tập', 'Xuân Hoa Yếm', '45 phút', '2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorites`
--

CREATE TABLE `favorites` (
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'Tâm Lý - Tình Cảm'),
(2, 'Cổ Trang - Thần Thoại'),
(3, 'Hoạt hình'),
(4, 'Điện ảnh'),
(5, 'Bí ẩn - Siêu nhiên'),
(6, 'Hài hước'),
(7, 'Phiêu lưu - Hành động'),
(8, 'Võ thuật - Kiếm hiệp'),
(9, 'Gây cấn - Hành động - Hình sự');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `moviegenres`
--

CREATE TABLE `moviegenres` (
  `movie_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `moviegenres`
--

INSERT INTO `moviegenres` (`movie_id`, `genre_id`) VALUES
(1, 9),
(3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quality` varchar(10) NOT NULL,
  `description` text DEFAULT NULL,
  `release_date` year(4) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `country` varchar(50) NOT NULL,
  `img_url` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `quality`, `description`, `release_date`, `genre`, `duration`, `rating`, `country`, `img_url`, `status`, `category`, `subcategory`, `created_at`) VALUES
(1, 'Vây Hãm Trên Không', 'HD', 'Dựa trên câu chuyện có thật tại Hàn Quốc năm 1971, “Vây Hãm Trên Không” lấy bối cảnh từ vụ cướp máy bay khiến tính mạng của nhiều hành khách có thể gặp nguy hiểm. Kết cục của cuộc chiến sống còn này sẽ ra sao?', '2024', 'Tâm Lý - Tình Cảm', '117 phút', 4.5, 'Hàn Quốc', 'img/poster/vay-ham-tren-khong.jpg', 'Hoàn thành', 'Phim Lẻ', 'Vietsub', '2024-11-08 07:53:53'),
(2, 'Anh Trai Vượt Mọi Tam Tai\r\n\r\n', 'FHD', 'Cho Su-gwang là một thanh tra cực kỳ nóng tính, dù có tỷ lệ bắt giữ tội phạm ấn tượng nhưng anh luôn gặp khó khăn trong việc kiểm soát cơn giận của mình. Vì liên tục tấn công các nghi phạm, Cho Su-gwang bị chuyển đến đảo Jeju. Tại đây, vị thanh tra nhận nhiệm vụ truy bắt kẻ lừa đảo giỏi nhất Hàn Quốc - Kim In-hae với 7 tiền án, nổi tiếng thông minh và có khả năng “thiên biến vạn hoá” để ngụy trang hoàn hảo mọi nhân dạng. Cùng lúc đó, Kim In-hae bất ngờ dính vào vụ án mạng nghiêm trọng có liên quan đến tên trùm xã hội đen đang nhăm nhe “thôn tính” đảo Jeju. Trước tình hình nguy cấp phải “giải cứu” hòn đảo Jeju và triệt phá đường dây nguy hiểm của tên trùm xã hội đen, thanh tra Cho Su-gwang bất đắc dĩ phải hợp tác cùng nghi phạm Kim In-hae, tận dụng triệt để các kỹ năng từ phá án đến lừa đảo trên hành trình rượt đuổi vừa gay cấn vừa hài hước để có thể hoàn thành nhiệm vụ cam go.', '2024', 'Phim lẻ', '128 phút', 3.0, 'Hàn Quốc', 'img/poster/anh-trai-vuot-tam-tai.jpg', 'Hoàn thành', 'Phim Bộ', 'Vietsub', '2024-11-08 06:53:42'),
(3, 'Xuân Hoa Yếm', 'HD', 'Xuân Hoa Yếm xoay quanh duyên nợ ngang trái giữa nữ sát thủ Mi Lâm với Hoàng tử Mộ Dung Cảnh Hòa. Sau khi bị vu oan là người ra lệnh thiêu hủy thành Thanh Châu, khiến hàng triệu dân lành chết oan, Mộ Dung Cảnh Hòa lập ra tổ chức bí mật Ám Xưởng để điều tra sự thật. Mất người thân trong thảm kịch Thanh Châu, Mi Lâm gia nhập Ám Xưởng để trở thành sát thủ. Sau nhiều năm khổ luyện, Mi Lâm nhận nhiệm vụ tiếp cận và ám sát Mộ Dung Cảnh Hòa mà không hề hay biết hắn chính là kẻ đứng sau giật dây.', '2024', 'Phim bộ', '45 phút', 4.0, 'Trung Quốc', 'img/poster/xuan-hoa-yem.jpg', '', '', '', '2024-11-08 08:08:53'),
(4, 'Đại Mộng Quy Ly', 'HD', 'Đại Mộng Quy Ly kể về một câu chuyện truyền kỳ quỷ lệ về \"yêu muốn bắt yêu\". Trong thời kỳ Trinh Nguyên, do nữ thần Bạch Tắc, người kiểm soát hai giới người và yêu bất ngờ mất mạng, Bạch Tắc mất tích không dấu vết, yêu thú hoành hành trên đất người, gây ra nhiều vụ án đẫm máu.', '2020', 'Cổ trang, Thần Thoại', '45 phút', 3.5, 'Trung Quốc', 'img/poster/dai-mong-quy-ly.jpg', 'Đang chiếu', 'Phim Bộ', 'Vietsub', '2024-11-08 08:25:44'),
(5, 'Nữ Hoàng', 'HD', 'nữ hoàng', '2022', 'Phim bộ', '45 phút', 4.0, 'Thái Lan', 'img/poster/nu-hoang.jpg', 'Full', 'Phim Bộ', 'Vietsub', '2024-11-11 13:21:12'),
(6, 'Thám Tử Lừng Danh Conan - Ngôi Sao 5 Cánh 1 Triệu Đô', 'HD', 'Nội dung Conan Movie 27 xoay quanh chuyến đi Hakodate của Conan và Heiji. Khi cả hai đến địa điểm này để thi đấu kiếm đạo thì bất ngờ vướng vào vụ án ly kỳ liên quan đến siêu trộm Kaito Kid. Mục tiêu của Kid lần này là một thanh kiếm Nhật Bản quý giá được cất giấu trong kho báu của một gia đình tài phiệt.\r\n\r\nVụ việc trở nên phức tạp khi thi thể của tay buôn vũ khí khét tiếng được phát hiện và mang trên mình vết chém hình chữ thập bí ẩn. Điều trùng hợp là \"kho báu\" mà Kaito Kid nhắm đến dường như có mối liên hệ mật thiết với thanh kiếm cổ mà gã thèm muốn.', '2024', 'Bí ẩn, Hoạt Hình, Tình cảm', '130 phút', 5.0, 'Nhật Bản', 'img/anime/conan27.jpg', 'Hoàn thành', 'Anime', 'Vietsub', '2024-11-11 16:30:23'),
(7, 'Thế Giới Hoàn Mỹ: Hoả Chi Hôi Tẫn', 'HD', 'Cốt truyện chính của phiên bản movie dựa trên thiết lập nguyên tác khai thác câu chuyện tình yêu giữa Thạch Hạo và Hỏa Linh Nhi, giải thích lý do đằng sau những lựa chọn đầy cảm xúc trong nguyên tác, những tình cảm chân thành và trong sáng mang lại cho nhau sự tương hợp lớn về tâm hồn.', '2024', 'Anime movie', '25 phút', 4.4, 'Trung Quốc', 'img/anime/anime1.jpg', 'Chưa Full', 'Anime', 'VietSub', '2024-11-12 04:07:21'),
(8, 'Ta Muốn Trở Thành Chúa Tể Bóng Tối!', 'FHD', 'Như bao người ngưỡng mộ những anh hùng khi còn nhỏ, nhân vật chính của chúng ta lại ngưỡng mộ những con người trong bóng tối. Sau khi giấu đi khả năng thật sự và sống 1 cuộc đời tầm thường của 1 thường dân vào ban ngày trong khi trải qua những khóa huấn luyện điên rồ vào ban đêm, anh ta cuối cùng cũng được chuyển sinh sang thê giới khác. Người đàn ông ấy, người mà chỉ phô diễn sức mạnh trong bóng tối, những người hầu cận và cùng với đó là tổ chức lớn mạnh của anh… Đây là câu chuyện về một chàng trai, người luôn khao khát sức mạnh trong màn đêm, trị vì thế giới ngầm ở thế giới khác.', '2023', 'Anime bộ, Fantasy, Comedy, Action', '20 phút', 3.0, 'Nhật Bản', 'img/anime/anime2.jpg', 'Full', 'Anime', 'Vietsub', '2024-11-12 04:07:21'),
(9, 'Bố già', 'FHD', 'Bố Già được phát triển từ web drama từng tạo nên hiện tượng hồi Tết năm 2020. Phiên bản điện ảnh lần này dù có cùng nhan đề và vẫn lấy cảm hứng từ chất liệu hiện thực trong một khu phố lao động ở TPHCM, nhưng nội dung hoàn toàn khác, phim xoay quanh cha con Ba Sang và Quắn với bao khác biệt suy nghĩ giữa các thế hệ.', '2020', 'Hài Kịch Tình Cảm Gia Dình Tâm Lý', '150 phút', 4.9, 'Việt Nam', 'img/movie/bo-gia.jpg', 'Full', 'Movie', 'English', '2024-11-12 04:14:23'),
(10, 'Mắt Biếc', 'HD', 'Đạo diễn Victor Vũ trở lại với một tác phẩm chuyển thể từ truyện ngắn cùng tên nổi tiếng của nhà văn Nguyễn Nhật Ánh: Mắt Biếc. Phim kể về chuyện tình đơn phương của chàng thanh niên Ngạn dành cho cô bạn từ thuở nhỏ Hà Lan... Ngạn và Hà Lan vốn là hai người bạn từ thuở nhỏ, cùng ở làng Đo Đo an bình. Họ cùng nhau đi học, cùng trải qua quãng đời áo trắng ngây thơ vụng dại với những cảm xúc bồi hồi của tuổi thiếu niên. \"Ngày cô ấy đi theo chốn phồn hoa, chàng trai bơ vơ từ xa...\", Hà Lan lên thành phố học và sớm bị thành thị xa hoa làm cho quên lãng Đo Đo. Cô quên mất cậu bạn thân mà chạy theo gã lãng tử hào hoa Dũng. Để rồi...\r\n\r\nXem thêm tại: https://www.galaxycine.vn/dat-ve/mat-biec/', '2019', 'Việt Nam, Phim chính kịch, Phim lãng mạn, Phim chuyển thể từ sách', '117 phút', 4.0, 'Việt Nam', 'img/movie/mat-biec-1.jpg', 'Full', 'Movie', 'English ', '2024-11-12 04:18:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `Id_Phim` int(11) NOT NULL,
  `Phim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`Id_Phim`, `Phim`) VALUES
(1, 'TV Show'),
(2, 'Movie'),
(3, 'Anime');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 10),
  `comment` text DEFAULT NULL,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userprogress`
--

CREATE TABLE `userprogress` (
  `user_id` int(11) NOT NULL,
  `episode_id` int(11) NOT NULL,
  `watched_duration` int(11) DEFAULT NULL,
  `last_watched` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `watchhistory`
--

CREATE TABLE `watchhistory` (
  `history_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `watch_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`episode_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Chỉ mục cho bảng `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`user_id`,`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Chỉ mục cho bảng `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Chỉ mục cho bảng `moviegenres`
--
ALTER TABLE `moviegenres`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`Id_Phim`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `userprogress`
--
ALTER TABLE `userprogress`
  ADD PRIMARY KEY (`user_id`,`episode_id`),
  ADD KEY `episode_id` (`episode_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `watchhistory`
--
ALTER TABLE `watchhistory`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `episodes`
--
ALTER TABLE `episodes`
  MODIFY `episode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `Id_Phim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `watchhistory`
--
ALTER TABLE `watchhistory`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);

--
-- Các ràng buộc cho bảng `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);

--
-- Các ràng buộc cho bảng `moviegenres`
--
ALTER TABLE `moviegenres`
  ADD CONSTRAINT `moviegenres_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `moviegenres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);

--
-- Các ràng buộc cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `userprogress`
--
ALTER TABLE `userprogress`
  ADD CONSTRAINT `userprogress_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `userprogress_ibfk_2` FOREIGN KEY (`episode_id`) REFERENCES `episodes` (`episode_id`);

--
-- Các ràng buộc cho bảng `watchhistory`
--
ALTER TABLE `watchhistory`
  ADD CONSTRAINT `watchhistory_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `watchhistory_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
