create table user (
    username text not null unique,
    password text not null
);

insert into user values ('user1', 'password1');
insert into user values ('user2', 'password2');
