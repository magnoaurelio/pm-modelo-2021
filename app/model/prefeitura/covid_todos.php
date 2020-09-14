CREATE TABLE alimentos( 
      alicodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      alimentos_tipo_id int   NOT NULL  , 
      unidadeGestora varchar  (6)   , 
      alinome varchar  (200)   , 
      aliendereco varchar  (200)   , 
      alibairro varchar  (200)   , 
      alihorario varchar  (100)   , 
      alidata date   , 
      alicontato varchar  (200)   , 
      alifone varchar  (200)   , 
      alifoto1 varchar  (100)   , 
      alifoto2 varchar  (100)   , 
      alifoto3 varchar  (100)   , 
      alisobre text   , 
 PRIMARY KEY (alicodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE alimentos_tipo( 
      alitipocodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      alitiponome varchar  (200)   , 
 PRIMARY KEY (alitipocodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE aquisicao( 
      aqusicao_id  INT  AUTO_INCREMENT    NOT NULL  , 
      aqu_nome varchar  (200)   NOT NULL  , 
 PRIMARY KEY (aqusicao_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE bancos( 
      bancodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      bancos_tipo_id int   NOT NULL  , 
      unidadeGestora varchar  (6)   , 
      bannome varchar  (400)   , 
      banfoto1 varchar  (100)   , 
      banfoto2 varchar  (200)   , 
      banfoto3 varchar  (100)   , 
      bansite varchar  (100)   , 
      banendereco varchar  (200)   , 
      banbairro varchar  (200)   , 
      bannumero int   , 
      bancep varchar  (50)     DEFAULT '9', 
      banfone varchar  (100)   , 
      bancelular varchar  (100)   , 
      bancontato varchar  (200)   , 
      bansobre text   , 
 PRIMARY KEY (bancodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE bancos_tipo( 
      bantipocodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      bantiponome varchar  (200)   , 
      bantipotipo varchar  (100)   , 
      bantipologo varchar  (100)   , 
      bantiposigla varchar  (50)   , 
 PRIMARY KEY (bantipocodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE combustivel( 
      comcodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      comnome varchar  (20)   , 
      comhorario varchar  (100)   , 
      comfoto1 varchar  (100)   , 
      comfoto2 varchar  (100)   , 
      comfoto3 varchar  (100)   , 
      comcontato varchar  (200)   , 
      comfone varchar  (100)   , 
      unidadegestora varchar  (6)   , 
 PRIMARY KEY (comcodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE covid_19( 
      covid_id  INT  AUTO_INCREMENT    NOT NULL  , 
      modalidade_id int   , 
      aquisicao_id int   , 
      fornecedor_id int   , 
      responsavel_id int   , 
      cov_numero varchar  (100)   , 
      cov_data date   , 
      cov_quantidade int   , 
      cov_valor double   , 
      cov_anexo varchar  (200)   , 
      cov_decreto varchar  (200)   , 
      unidadeGestora varchar  (6)   , 
      cov_objeto text   , 
 PRIMARY KEY (covid_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE decreto19( 
      decreto_id  INT  AUTO_INCREMENT    NOT NULL  , 
      responsavel_id int   , 
      objeto_id int   , 
      dec_numero varchar  (100)   , 
      dec_data date   , 
      dec_lei varchar  (200)   , 
      dec_inicio date   , 
      dec_fim date   , 
      dec_periodo varchar  (100)   , 
      dec_anexo varchar  (100)   , 
      dec_decreto varchar  (100)   , 
      unidadeGestora varchar  (6)   , 
      dec_sobre text   , 
 PRIMARY KEY (decreto_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE esportes( 
      espcodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      esporte_tipo_id int   NOT NULL  , 
      espnome varchar  (200)   , 
      espusual varchar  (100)   , 
      espendereco varchar  (200)   , 
      espbairro varchar  (200)   , 
      espfoto1 varchar  (100)   , 
      espfoto2 varchar  (100)   , 
      espfoto3 varchar  (100)   , 
      espdata date   , 
      espsobre text   , 
 PRIMARY KEY (espcodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE esporte_tipo( 
      esptipocodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      esptiponome varchar  (200)   , 
      esptipofoto varchar  (100)   , 
 PRIMARY KEY (esptipocodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE fornecedor19( 
      fornecedor_id  INT  AUTO_INCREMENT    NOT NULL  , 
      for_nome varchar  (200)   NOT NULL  , 
      for_cnpj varchar  (18)   NOT NULL  , 
      for_cpf varchar  (14)   , 
      for_cidade varchar  (100)   , 
      for_uf varchar  (2)   , 
      for_fone varchar  (200)   , 
      for_contato varchar  (200)   , 
      for_sobre text   , 
      unidadeGestora varchar  (6)   , 
 PRIMARY KEY (fornecedor_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE galeria( 
      galcodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      galnome varchar  (300)   , 
      galarquivo varchar  (200)   , 
      galdata date   , 
      galsobre text   , 
      codigoUnidGestora varchar  (6)   , 
 PRIMARY KEY (galcodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE modalidade( 
      modalidade_id  INT  AUTO_INCREMENT    NOT NULL  , 
      mod_nome varchar  (100)   NOT NULL  , 
 PRIMARY KEY (modalidade_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE objeto( 
      objeto_id  INT  AUTO_INCREMENT    NOT NULL  , 
      obj_nome text   , 
 PRIMARY KEY (objeto_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE Pontos( 
      poncodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      unidadeGestora varchar  (6)   , 
      ponnome varchar  (200)   , 
      pontipo varchar  (100)   , 
      ponendereco varchar  (200)   , 
      ponbairro varchar  (200)   , 
      ponhorario varchar  (100)   , 
      pondata date   , 
      ponfoto1 varchar  (100)   , 
      ponfoto2 varchar  (100)   , 
      ponfoto3 varchar  (100)   , 
      ponsobre text   , 
 PRIMARY KEY (poncodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE povoado( 
      povcodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      unidadeGestora varchar  (6)   , 
      povnome varchar  (200)   , 
      povdistancia int   , 
      povorientacao char  (100)   , 
      povfoto1 varchar  (100)   , 
      povfoto2 varchar  (100)   , 
      povfoto3 varchar  (100)   , 
      povfone varchar  (200)   , 
      povcontato varchar  (200)   , 
      povsobre text   , 
 PRIMARY KEY (povcodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE prefeitura( 
      unidadeGestora  INT  AUTO_INCREMENT    NOT NULL  , 
      codigoUnidGestora varchar  (6)   , 
      precodigo varchar  (3)   , 
      preorgao varchar  (25)   , 
      prenome varchar  (80)   , 
      precidade varchar  (50)   , 
      preibge varchar  (6)   , 
      premapa varchar  (200)   , 
      preclima varchar  (5)   , 
      preendereco varchar  (120)   , 
      precep varchar  (11)   , 
      prebairro varchar  (35)   , 
      preemail varchar  (80)   , 
      presite varchar  (80)   , 
      precnpj varchar  (25)   , 
      preimagem varchar  (60)   , 
      prelogo varchar  (100)   , 
      prebrasao varchar  (100)   , 
      prebandeira varchar  (100)   , 
      preddd varchar  (5)   , 
      prefone varchar  (50)   , 
      prefax varchar  (25)   , 
      prefoto varchar  (100)   , 
      pretema varchar  (60)   , 
      padcodigo varchar  (2)   , 
      preampar varchar  (11)   , 
      precoegemas varchar  (50)   , 
      preundime varchar  (15)   , 
      precosems varchar  (15)   , 
      prepiaui varchar  (50)   , 
      preconsorcio varchar  (50)   , 
      preamparlogo varchar  (15)   , 
      prech int   , 
      concheque int   , 
      preiptu int   , 
      prelicenca int   , 
      predata date   , 
      prehino text   , 
      historico text   , 
 PRIMARY KEY (unidadeGestora)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE publicidade( 
      pubcodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      unidadeGestora int   , 
      publicidadetipo_id int   , 
      pubimagem varchar  (200)   NOT NULL  , 
      pubgeral int   NOT NULL    DEFAULT 0, 
      pubativa int   NOT NULL    DEFAULT 0, 
      pubdata date     DEFAULT 'NULL', 
      pubsobre text   , 
 PRIMARY KEY (pubcodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE publicidadetipo( 
      pubtipocodigo int   , 
      pubtiponome varchar  (20)   , 
 PRIMARY KEY (pubtipocodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE rede( 
      redcodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      rede_tipo_id int   , 
      unidadeGestora varchar  (6)   , 
      reddata date   , 
 PRIMARY KEY (redcodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE rede_tipo( 
      redtipocodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      redtiponome varchar  (100)   , 
      redtipofoto varchar  (100)   , 
 PRIMARY KEY (redtipocodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE responsavel( 
      responsavel_id  INT  AUTO_INCREMENT    NOT NULL  , 
      res_orgao varchar  (200)   NOT NULL  , 
      res_cnpj varchar  (18)   NOT NULL  , 
      res_secretario varchar  (200)   , 
      res_fone varchar  (200)   , 
      unidadeGestora varchar  (6)   , 
      res_site varchar  (200)   , 
      res_gestor varchar  (200)   , 
      res_logo varchar  (100)   , 
 PRIMARY KEY (responsavel_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE secretaria_tipo( 
      sectipocodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      sectiponome varchar  (200)   , 
      sectiposigla varchar  (50)   , 
      sectipousual varchar  (200)   , 
      sectipofoto varchar  (100)   , 
      sectipodescricao text   , 
 PRIMARY KEY (sectipocodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE transportes( 
      trancodigo  INT  AUTO_INCREMENT    NOT NULL  , 
      trannome varchar  (200)   , 
      tranhorario varchar  (100)   , 
      tranfoto1 varchar  (100)   , 
      tranfoto2 varchar  (100)   , 
      tranfoto3 varchar  (100)   , 
      transdata date   , 
      trancontato varchar  (200)   , 
      tranfone varchar  (100)   , 
      transobre text   , 
      unidadeGestora varchar  (6)   , 
 PRIMARY KEY (trancodigo)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

 
  
 ALTER TABLE alimentos ADD CONSTRAINT fk_alimentos_1 FOREIGN KEY (alimentos_tipo_id) references alimentos_tipo(alitipocodigo); 
ALTER TABLE bancos ADD CONSTRAINT fk_bancos_1 FOREIGN KEY (bancos_tipo_id) references bancos_tipo(bantipocodigo); 
ALTER TABLE covid_19 ADD CONSTRAINT fk_covid_19_1 FOREIGN KEY (modalidade_id) references modalidade(modalidade_id); 
ALTER TABLE covid_19 ADD CONSTRAINT fk_covid_19_2 FOREIGN KEY (aquisicao_id) references aquisicao(aqusicao_id); 
ALTER TABLE covid_19 ADD CONSTRAINT fk_covid_19_3 FOREIGN KEY (fornecedor_id) references fornecedor19(fornecedor_id); 
ALTER TABLE covid_19 ADD CONSTRAINT fk_covid_19_4 FOREIGN KEY (responsavel_id) references responsavel(responsavel_id); 
ALTER TABLE decreto19 ADD CONSTRAINT fk_decreto_1 FOREIGN KEY (objeto_id) references objeto(objeto_id); 
ALTER TABLE decreto19 ADD CONSTRAINT fk_decreto_2 FOREIGN KEY (responsavel_id) references responsavel(responsavel_id); 
ALTER TABLE esportes ADD CONSTRAINT fk_esportes_1 FOREIGN KEY (esporte_tipo_id) references esporte_tipo(esptipocodigo); 
ALTER TABLE publicidade ADD CONSTRAINT fk_publicidade_2 FOREIGN KEY (unidadeGestora) references prefeitura(unidadeGestora); 
ALTER TABLE publicidade ADD CONSTRAINT fk_publicidade_2 FOREIGN KEY (publicidadetipo_id) references publicidadetipo(pubtipocodigo); 
ALTER TABLE rede ADD CONSTRAINT fk_rede_1 FOREIGN KEY (rede_tipo_id) references rede_tipo(redtipocodigo); 

  
INSERT INTO aquisicao (aqusicao_id,aqu_nome) VALUES (1,'Aquisição de EPIs e/ou equipamentos'); 

INSERT INTO aquisicao (aqusicao_id,aqu_nome) VALUES (2,'Aquisição de equipamentos médico-hospitalares'); 

INSERT INTO aquisicao (aqusicao_id,aqu_nome) VALUES (3,'Construção reforma e/ou ampliação de unidade hospitalar'); 

INSERT INTO bancos_tipo (bantipocodigo,bantiponome,bantipotipo,bantipologo,bantiposigla) VALUES (1,'AGENCIA','','',''); 

INSERT INTO bancos_tipo (bantipocodigo,bantiponome,bantipotipo,bantipologo,bantiposigla) VALUES (2,'CASH','','',''); 

INSERT INTO covid_19 (covid_id,modalidade_id,aquisicao_id,fornecedor_id,responsavel_id,cov_numero,cov_data,cov_quantidade,cov_valor,cov_anexo,cov_decreto,unidadeGestora,cov_objeto) VALUES (1,1,1,1,1,'DIS-001/2020',null,1,362584,'','',null,null); 

INSERT INTO decreto19 (decreto_id,responsavel_id,objeto_id,dec_numero,dec_data,dec_lei,dec_inicio,dec_fim,dec_periodo,dec_anexo,dec_decreto,unidadeGestora,dec_sobre) VALUES (1,1,1,'DIS 001/2020','2020-11-06','LEI 125','2020-11-06','2020-11-06','JUN A JUL','','','201175','SOBRE'); 

INSERT INTO decreto19 (decreto_id,responsavel_id,objeto_id,dec_numero,dec_data,dec_lei,dec_inicio,dec_fim,dec_periodo,dec_anexo,dec_decreto,unidadeGestora,dec_sobre) VALUES (2,2,1,'DIS 002/2020','2020-11-06','LEI 2587','2020-11-06','2020-11-06','MAR - MAIO','','','201116','SOBSRE'); 

INSERT INTO esporte_tipo (esptipocodigo,esptiponome,esptipofoto) VALUES (1,'CAMPO DE FUTEBOL',''); 

INSERT INTO esporte_tipo (esptipocodigo,esptiponome,esptipofoto) VALUES (2,'QUADRA POLIESPORTIVA',''); 

INSERT INTO fornecedor19 (fornecedor_id,for_nome,for_cnpj,for_cpf,for_cidade,for_uf,for_fone,for_contato,for_sobre,unidadeGestora) VALUES (1,'FARMACIA DOS POBRES ','265487874','125478','TERESINA','PI','','MAGNO','','201175'); 

INSERT INTO modalidade (modalidade_id,mod_nome) VALUES (1,'DISPENSA'); 

INSERT INTO modalidade (modalidade_id,mod_nome) VALUES (2,'CARTA-CONVITE'); 

INSERT INTO modalidade (modalidade_id,mod_nome) VALUES (3,'CONCORRÊNCIA'); 

INSERT INTO modalidade (modalidade_id,mod_nome) VALUES (4,'PREGÃO'); 

INSERT INTO objeto (objeto_id,obj_nome) VALUES (1,'Declara Estado de Emergência na Saúde Pública no município'); 

INSERT INTO prefeitura (unidadeGestora,codigoUnidGestora,precodigo,preorgao,prenome,precidade,preibge,premapa,preclima,preendereco,precep,prebairro,preemail,presite,precnpj,preimagem,prelogo,prebrasao,prebandeira,preddd,prefone,prefax,prefoto,pretema,padcodigo,preampar,precoegemas,preundime,precosems,prepiaui,preconsorcio,preamparlogo,prech,concheque,preiptu,prelicenca,predata,prehino,historico) VALUES (201002,'201002','','','AGRICOLÂNDIA','','','','','','','','','','','','','','','','','','','','','','','','','','','',null,null,null,null,null,'',''); 

INSERT INTO prefeitura (unidadeGestora,codigoUnidGestora,precodigo,preorgao,prenome,precidade,preibge,premapa,preclima,preendereco,precep,prebairro,preemail,presite,precnpj,preimagem,prelogo,prebrasao,prebandeira,preddd,prefone,prefax,prefoto,pretema,padcodigo,preampar,precoegemas,preundime,precosems,prepiaui,preconsorcio,preamparlogo,prech,concheque,preiptu,prelicenca,predata,prehino,historico) VALUES (201175,'201175','','','SANTA CRUZ DOS MILAGRES','','','','','','','','','','','','','','','','','','','','','','','','','','','',null,null,null,null,null,'',''); 

INSERT INTO publicidade (pubcodigo,unidadeGestora,publicidadetipo_id,pubimagem,pubgeral,pubativa,pubdata,pubsobre) VALUES (1,101002,null,'A',1,1,'NULL',''); 

INSERT INTO publicidadetipo (pubtipocodigo,pubtiponome) VALUES (1,'ES - ESQUERDA'); 

INSERT INTO rede_tipo (redtipocodigo,redtiponome,redtipofoto) VALUES (1,'facebook',''); 

INSERT INTO rede_tipo (redtipocodigo,redtiponome,redtipofoto) VALUES (2,'twiter',''); 

INSERT INTO rede_tipo (redtipocodigo,redtiponome,redtipofoto) VALUES (3,'instagran',''); 

INSERT INTO rede_tipo (redtipocodigo,redtiponome,redtipofoto) VALUES (4,'#',''); 

INSERT INTO responsavel (responsavel_id,res_orgao,res_cnpj,res_secretario,res_fone,unidadeGestora,res_site,res_gestor,res_logo) VALUES (1,'P M  DE SANTA CRUZ DOS MILAGRES','25','WINLEY','','201175','www','SECRETARIA DE SAUDE ',null); 

INSERT INTO responsavel (responsavel_id,res_orgao,res_cnpj,res_secretario,res_fone,unidadeGestora,res_site,res_gestor,res_logo) VALUES (2,'SECRETARIA DE SAÚDE - SEMS','15.254','EDILBERTO','','201175','','',null); 

INSERT INTO responsavel (responsavel_id,res_orgao,res_cnpj,res_secretario,res_fone,unidadeGestora,res_site,res_gestor,res_logo) VALUES (3,'P M DE PIO IX',' 06.553.812/0001-40 ','REGINA COELI VIANA DE ANDRADE E SILVA ','','201161','','',null); 

INSERT INTO responsavel (responsavel_id,res_orgao,res_cnpj,res_secretario,res_fone,unidadeGestora,res_site,res_gestor,res_logo) VALUES (4,'SECRETARIA DE SAÚDE - SEMS',' 06.553.812/0001-40 ','LUIS PEREIRA DE ALENCAR','','201161','','',null); 
