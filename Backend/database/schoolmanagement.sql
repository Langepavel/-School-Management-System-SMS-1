-- Database 1: schools
CREATE DATABASE IF NOT EXISTS sms_schools;
USE sms_schools;

CREATE TABLE IF NOT EXISTS schools (
    school_id VARCHAR(37) PRIMARY KEY,
    school_name VARCHAR(255),
    school_logo VARCHAR(255),
    school_header1 VARCHAR(255),
    school_subtitle VARCHAR(255),
    school_header2 VARCHAR(255),
    minimum_passing_average VARCHAR(4),
    fee_management_enabled BOOLEAN NOT NULL DEFAULT FALSE
);

CREATE TABLE IF NOT EXISTS school_year (
    school_year_id VARCHAR(37) PRIMARY KEY,
    start_date DATE,
    end_date DATE
);

-- Database 2: users
CREATE DATABASE IF NOT EXISTS sms_users;
USE sms_users;

CREATE TABLE IF NOT EXISTS users (
    user_id VARCHAR(37) PRIMARY KEY,
    school_id VARCHAR(37),
    name VARCHAR(255),
    phone_number VARCHAR(15),
    email VARCHAR(255),
    password VARCHAR(255),
    role ENUM('student', 'teacher', 'admin', 'owner'),
    date DATE
);

CREATE TABLE IF NOT EXISTS students (
    user_id VARCHAR(37) PRIMARY KEY,
    class_id VARCHAR(37),
    status ENUM("repeat", "new"),
    date_of_birth DATE,
    gender ENUM('male', 'female', 'other')
);

CREATE TABLE IF NOT EXISTS teachers (
    user_id VARCHAR(37) PRIMARY KEY,
    qualification VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS teachers_subject (
    user_id VARCHAR(37),
    subject_id VARCHAR(37),
    PRIMARY KEY (user_id, subject_id)
);

-- Database 3: classes
CREATE DATABASE IF NOT EXISTS sms_classes;
USE sms_classes;

CREATE TABLE IF NOT EXISTS classes (
    class_id VARCHAR(37) PRIMARY KEY,
    school_id VARCHAR(37),
    class_name VARCHAR(200)
);

CREATE TABLE IF NOT EXISTS teacher_classes (
    teacher_id VARCHAR(37),
    class_id VARCHAR(37),
    PRIMARY KEY (teacher_id, class_id)
);

CREATE TABLE IF NOT EXISTS student_classes (
    student_id VARCHAR(37),
    class_id VARCHAR(37),
    PRIMARY KEY (student_id, class_id)
);

CREATE TABLE IF NOT EXISTS student_attendance (
    student_attendance_id VARCHAR(37) PRIMARY KEY,
    student_id VARCHAR(37),
    number_hour_absent VARCHAR(4)
);

-- Database 4: terms
CREATE DATABASE IF NOT EXISTS sms_terms;
USE sms_terms;

CREATE TABLE IF NOT EXISTS terms (
    term_id VARCHAR(37) PRIMARY KEY,
    school_id VARCHAR(37),
    term_name VARCHAR(255),
    start_date DATE,
    end_date DATE
);

CREATE TABLE IF NOT EXISTS term_combinations (
    combination_id VARCHAR(37) PRIMARY KEY,
    school_id VARCHAR(37),
    term_grouping VARCHAR(2) -- Eg by 2, 3, 4
);

-- Database 5: academic
CREATE DATABASE IF NOT EXISTS sms_academic;
USE sms_academic;

CREATE TABLE IF NOT EXISTS report_cards (
    report_id VARCHAR(37) PRIMARY KEY,
    student_id VARCHAR(37),
    term_id VARCHAR(37),
    subject_id VARCHAR(37),
    marks VARCHAR(3)
);

CREATE TABLE IF NOT EXISTS subjects (
    subject_id VARCHAR(37) PRIMARY KEY,
    name VARCHAR(255),
    school_id VARCHAR(37)
);

-- Database 6: fee_management
CREATE DATABASE IF NOT EXISTS sms_fees;
USE sms_fees;

CREATE TABLE IF NOT EXISTS fee_structures (
    fee_structure_id VARCHAR(37) PRIMARY KEY,
    class_id VARCHAR(37),
    amount VARCHAR(10),
    due_date DATE
);

CREATE TABLE IF NOT EXISTS payments (
    payment_id VARCHAR(37) PRIMARY KEY,
    student_id VARCHAR(37),
    fee_structure_id VARCHAR(37),
    payment_date DATE,
    amount_paid VARCHAR(10)
);
