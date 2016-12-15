-- convert Laravel migrations to raw SQL scripts --

-- migration:2016_12_14_085908_test_sql_generator_table --
create table `test_test_sql_generator_users` (
  `test_id` int unsigned not null auto_increment primary key, 
  `test_name` varchar(255) not null, 
  `test_email` varchar(255) not null, 
  `test_gender` enum('male', 'female') not null, 
  `test_password` varchar(255) not null, 
  `remember_token` varchar(100) null, 
  `created_at` timestamp null, 
  `updated_at` timestamp null
) default character set utf8 collate utf8_unicode_ci;
alter table 
  `test_test_sql_generator_users` 
add 
  unique `test_test_sql_generator_users_test_email_unique`(`test_email`);
create table `test_test_sql_blogs` (
  `test_id` int unsigned not null auto_increment primary key, 
  `test_userId` int unsigned not null, 
  `test_userName` varchar(255) not null, 
  `test_title` varchar(255) not null, 
  `test_blogMsg` text not null, 
  `created_at` timestamp null, 
  `updated_at` timestamp null
) default character set utf8 collate utf8_unicode_ci;
alter table 
  `test_test_sql_blogs` 
add 
  unique `test_test_sql_blogs_test_title_unique`(`test_title`);
alter table 
  `test_test_sql_blogs` 
add 
  constraint `test_test_sql_blogs_test_userid_foreign` foreign key (`test_userId`) references `test_sql_generator_` (`test_id`) on delete cascade;
