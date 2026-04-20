-- Database setup for Solidforge

CREATE DATABASE IF NOT EXISTS `solidforge` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `solidforge`;

-- Brands Table
CREATE TABLE IF NOT EXISTS `brands` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `slug` VARCHAR(255) NOT NULL UNIQUE,
    `logo_path` VARCHAR(255),
    `description` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Categories Table
CREATE TABLE IF NOT EXISTS `categories` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `brand_id` INT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `slug` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`brand_id`) REFERENCES `brands`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Products Table
CREATE TABLE IF NOT EXISTS `products` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `brand_id` INT NOT NULL,
    `category_id` INT,
    `name` VARCHAR(255) NOT NULL,
    `slug` VARCHAR(255) NOT NULL UNIQUE,
    `subtitle` VARCHAR(255),
    `cover_image` VARCHAR(255),
    `meta_title` VARCHAR(255),
    `meta_description` TEXT,
    `is_active` BOOLEAN DEFAULT TRUE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`brand_id`) REFERENCES `brands`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB;

-- Product Sections Table (Flexible Content)
CREATE TABLE IF NOT EXISTS `sections` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `type` ENUM('hero', 'video_banner', 'cards', 'specs', 'comparison', 'swiper', 'tabs', 'content') NOT NULL,
    `content` LONGTEXT NOT NULL, -- JSON data
    `sort_order` INT DEFAULT 0,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Admin Users Table
CREATE TABLE IF NOT EXISTS `admins` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `last_login` TIMESTAMP NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Seed Brands
INSERT INTO `brands` (`name`, `slug`) VALUES 
('Flashforge', 'flashforge'),
('Solidscape', 'solidscape'),
('Hispana', 'hispana'),
('GPA INNOVA', 'gpa-innova'),
('Gravotech', 'gravotech');

-- Seed initial admin (password: admin123)
-- In a real scenario, use password_hash() in PHP. This is just for initial setup.
-- $2y$10$8.z8p.fX.1y9/H/8y5x.eO1y/H/8y5x.eO1y/H/8y5x.eO1y/H/8 is a dummy hash.
INSERT INTO `admins` (`username`, `password`) VALUES ('admin', '$2y$10$nNQ8mGZ.p4v9rV6.z5.z5.z5.z5.z5.z5.z5.z5.z5.z5.z5.z5.');

-- Customers Table
CREATE TABLE IF NOT EXISTS `customers` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `company_name` VARCHAR(255),
    `phone` VARCHAR(50),
    `status` ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    `documents_json` TEXT, -- Stores paths to uploaded documents
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Quotes Table
CREATE TABLE IF NOT EXISTS `quotes` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `customer_id` INT NULL, -- Can be NULL for guest quotes
    `product_id` INT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `company` VARCHAR(255),
    `phone` VARCHAR(50),
    `message` TEXT,
    `status` ENUM('new', 'pending', 'completed') DEFAULT 'new',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`customer_id`) REFERENCES `customers`(`id`) ON DELETE SET NULL,
    FOREIGN KEY (`product_id`) REFERENCES `products`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Notifications Table
CREATE TABLE IF NOT EXISTS `notifications` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `type` ENUM('registration', 'quote') NOT NULL,
    `reference_id` INT NOT NULL, -- id from customers or quotes table
    `is_read` BOOLEAN DEFAULT FALSE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
