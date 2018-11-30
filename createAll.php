<?php
include "connect.php";

  $db = new DB("trains2"); // Create Database

  $q = "CREATE TABLE IF NOT EXISTS train(
   id int(11) not null auto_increment PRIMARY KEY,
   name varchar(100) not null,degree varchar(100) not null,speed varchar(100) not null,
   leavingStation  varchar(100) not null,arrivingStation  varchar(100) not null,
   leavingTime varchar(100) not null,
   period varchar(100) not null, 
   arrivingTime  varchar(100) not null)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

  $db->myExec($q); // Create Table

if($db->getCount("SELECT COUNT(*) FROM train",array()) == 0)
{
  $db->add_Rem_updat_Row("INSERT INTO train(
                                    name,speed,degree,leavingStation,
                                    arrivingStation,leavingTime,arrivingTime,period)
                                    VALUES
                                  ('Mgary189', '185 كم/س', 'مكيف', 'اسيوط','سوهاج','10.00 م','12.00 م','2.00 س'),
                                    ('55555', '155 كم/س', 'نوم', 'اسيوط','الأقصر','1.30 م','9.30 م','8.00 س'),
                                    ('Lghtra99', '120 كم/س', 'اولى وثانية مكيفة', 'ديروط','اسيوط','5.00 م','7.00 م','2.00 س'),
                                    ('Express', '100 كم/س', 'أكس بريس بعربيات مطوره(ركاب)ء', 'اسيوط','المنيا','11.00 ص','1.30 م','2.30 س'),
                                    ('Motoree55', '160 كم/س', 'VIP', 'رمسيس','الجيزة','10.00 م','10.30 م','30 د'),
                                    ('9999', '170 كم/س', 'مكيف', 'اسيوط','بني سويف','5.00 ص','9.00 ص','4.00 س'),
                                    ('7676', '110 كم/س', 'أكس بريس بعربيات مطوره(ركاب)ء ', 'القوصيه','اسيوط','10.00 م','11.30 م','1.30 س'),
                                    ('7575', '195 كم/س', 'VIP', 'اسيوط','الجيزة','10.00 م','4.00 ص','6.00 س'),
                                    ('9797', '185 كم/س', 'مكيف', 'اسيوط','رمسيس','10.00 م','4.30 ص','6.30 س'),
                                    ('gfdd', '115 كم/س', 'اولى وثانية مكيفة', 'المنيا','ملوي','10.00 م','12.00 م','2.00 س'),
                                    ('gf4vfd54', '185 كم/س', 'نوم', 'نجع حمادي','اسوان','10.00 ص','5.00 م','7.00 س'),
                                    ('feds87f', '185 كم/س', 'مكيف', 'اسيوط','سوهاج','10.00 م','12.00 م','2.00 س'),
                                    ('fds48', '110 كم/س', 'اولى وثانية مكيفة', 'اسيوط','قنا','10.00 م','1.00 ص','3.00 س'),
                                    ('fd1568', '185 كم/س', 'مكيف', 'قنا','اسيوط','10.00 م','12.00 م','2.00 س'),
                                    ('4fd', '190 كم/س', 'نوم', 'اسيوط','اسوان','10.00 م','6.00 ص','8.00 س'),
                                    ('egsuyhgsh', '180 كم/س', 'مكيف', 'اسوان','اسيوط','10.00 م','6.00 ص','8.00 س'),
                                    ('sdks788', '115 كم/س', 'أكس بريس بعربيات مطوره(ركاب)ء', 'اسيوط','قنا','10.00 م','12.00 م','2.00 س'),
                                    ('Mgary189', '185 كم/س', 'VIP', 'سوهاج','اسوان','10.00 م','4.00 ص','6.00 س'),
                                    ('Thania Mokayaf', '105 كم/س', 'اولى وثانية مكيفة', 'سوهاج','الأقصر','8.00 م','12.00 م','4.00 س'),
                                    ('6767', '165 كم/س', 'مكيف', 'قنا','سوهاج','1.00 م','3.00 م','2.00 س'),
                                    ('Rokab', '110 كم/س', 'أكس بريس بعربيات مطوره(ركاب)ء', 'قنا','سوهاج','10.00 م','12.00 م','2.00 س'),
                                    ('Mokayaf2223', '145 كم/س', 'اولى وثانية مكيفة', 'قنا','اسوان','2.00 م','6.00 م','4.00 س'),
                                    ('VIP8999', '185 كم/س', 'VIP', 'اسوان','الجيزة','10.00 م','9.00 ص','11.00 س'),
                                    ('Mokayaf', '145 كم/س', 'اولى وثانية مكيفة', 'قنا','المنيا','5.00 م','12.00 م','7.00 س'),
                                    ('AAJSUH56', '185 كم/س', 'مكيف', 'المنيا','الأقصر','3.00 م','12.00 م','9.00 س'),
                                    ('Mgary189', '185 كم/س', 'مكيف', 'المنيا','نجع حمادي','5.00 م','12.00 م','7.00 س'),
                                    ('ELganar777', '185 كم/س', 'VIP', 'قنا','نجع حمادي','10.00 م','2.00 ص','4.00 س'),
                                    ('Saeed454', '145 كم/س', 'اولى وثانية مكيفة', 'نجع حمادي','سوهاج','10.00 م','12.00 م','2.00 س'),
                                    ('Aqua', '115 كم/س', 'أكس بريس بعربيات مطوره(ركاب)ء', 'نجع حمادي','اسيوط','9.00 م','12.00 م','3.00 س'),
                                    ('PoGo', '185 كم/س', 'مكيف', 'المنيا','اسيوط','11.00 م','1.00 ص','2.00 س'),
                                    ('Aqua333', '185 كم/س', 'نوم', 'اسيوط','المنيا','10.00 م','12.00 م','2.00 س'),
                                    ('Sleep888', '170 كم/س', 'نوم', 'اسيوط','بني سويف','8.00','12.00 ص','4.00 س'),
                                    ('VIP666', '185 كم/س', 'VIP', 'بني سويف','اسيوط','10.00 م','2.00 ص','4.00 س'),
                                    ('Marakez', '170 كم/س', 'مكيف', 'الجيزة','سوهاج','10.00 م','5.00 ص','7.00 س'),
                                    ('Saeed1233', '115 كم/س', 'اولى وثانية مكيفة', 'قنا','الأقصر','10.00 م','12.00 م','2.00 س'),
                                    ('werd789', '185 كم/س', 'مكيف', 'الجيزة','اسيوط','2.00 م','8.00 م','6.00 س'),
                                    ('LTh9', '175 كم/س', 'VIP', 'الاسكندرية','اسيوط','10.00 م','10.00 ص','12.00 س'),
                                    ('M9999', '115 كم/س', 'أكس بريس بعربيات مطوره(ركاب)ء', 'الأقصر','سوهاج','9.00 م','12.00 م','3.00 س'),
                                    ('Sho169', '185 كم/س', 'مكيف', 'الفشن','مطاي','10.00 م','11.00 م','1.00 س'),
                                    ('Galary189', '185 كم/س', 'مكيف', 'الاسكندرية','سوهاج','10.00 م','12.00 ص','14.00 س'),
                                    ('ASD189', '185 كم/س', 'VIP', 'اسيوط','الاسكندرية','10.00 م','12.00 ص','14.00 س'),
                                    ('Elsaree3', '185 كم/س', 'مكيف', 'سوهاج','اسيوط','10.00 م','12.00 م','2.00 س'),
                                    ('Elmomiaz', '185 كم/س', 'أكس بريس بعربيات مطوره(ركاب)ء', 'اسيوط','العياط','8.00 م','12.00 م','4.00 س')"
                                    ,array());
}