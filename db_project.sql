-- --------------------------------------------------------
-- Host:                         zahra.tipnl.com
-- Server version:               10.5.20-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table tipn3594_zahra.failed_jobs: ~0 rows (approximately)

-- Dumping data for table tipn3594_zahra.migrations: ~6 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2023_06_20_080337_create_table_name', 2);

-- Dumping data for table tipn3594_zahra.password_resets: ~0 rows (approximately)

-- Dumping data for table tipn3594_zahra.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table tipn3594_zahra.personal_access_tokens: ~0 rows (approximately)

-- Dumping data for table tipn3594_zahra.table_name: ~0 rows (approximately)

-- Dumping data for table tipn3594_zahra.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Zahra Nabella El Kaffah', 'admin@admin.com', NULL, '$2y$10$rlAuwv2j35Oc49ohQtzbI.ENguNxFyvVBSdNU9rRxs7epmatEJpoy', NULL, '2023-06-20 00:59:37', '2023-06-20 00:59:37'),
	(2, 'Zahra Nabella El Kaffah', 'admin@gmail.com', NULL, '$2y$10$jPO.hRlZnAWypQ39cATWQOQ.vu7iouXr.JIQuqf6fvQr4zyKz7xAm', NULL, '2023-07-08 07:05:57', '2023-07-08 07:05:57');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
