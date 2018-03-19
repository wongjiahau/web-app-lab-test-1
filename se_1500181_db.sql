DROP DATABASE IF EXISTS uecs2094_ptest;
CREATE DATABASE uecs2094_ptest
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
;

USE uecs2094_ptest;
DROP TABLE IF EXISTS se_1500181_staff;

CREATE TABLE se_1500181_staff (
    id      INT(11)     AUTO_INCREMENT PRIMARY KEY,
    staffNo INT(5)      UNIQUE NOT NULL,
    name    VARCHAR(25) NOT NULL,
    email   VARCHAR(30) UNIQUE NOT NULL,
    phone   VARCHAR(12) UNIQUE NOT NULL
);

INSERT INTO se_1500181_staff(staffNo, name, email, phone) VALUES(1001, 'Wong Li Kheng' , 'wonglk@company.my' , '012-3258896');
INSERT INTO se_1500181_staff(staffNo, name, email, phone) VALUES(1025, 'Lim Wang Lei'  , 'limwl@company.my'  , '013-7854123');
INSERT INTO se_1500181_staff(staffNo, name, email, phone) VALUES(1030, 'Chia Liu Fang' , 'chialf@company.my' , '012-9721463');
INSERT INTO se_1500181_staff(staffNo, name, email, phone) VALUES(1056, 'Chong Liu Jie' , 'chonglj@company.my', '019-7893024');
INSERT INTO se_1500181_staff(staffNo, name, email, phone) VALUES(1074, 'Ng Li Yong'    , 'ngly@company.my'   , '016-2143657');
INSERT INTO se_1500181_staff(staffNo, name, email, phone) VALUES(1117, 'Chia Zhang Jie', 'chiajz@company.my' , '012-3322654');