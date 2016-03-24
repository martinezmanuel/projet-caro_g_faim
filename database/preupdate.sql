alter table plat add column fid_type_plat INT NOT NULL;
update plat set fid_type_plat = 1;
create table IF NOT EXISTS type_plat(id INT PRIMARY KEY AUTO_INCREMENT, libelle VARCHAR(255) NOT NULL UNIQUE) engine=InnoDB;
insert into type_plat(id, libelle) values (1,'Entrée'),(2, 'Plats'),(3, 'Dessert');
