drop schema if exists words;
create schema words default character set utf8 collate utf8_polish_ci;
grant all on words.* to editor@localhost identified by 'secretPASSWORD';
flush privileges;