CREATE TABLE aquisicao( 
      aqusicao_id  INT  AUTO_INCREMENT    NOT NULL  , 
      aqu_nome varchar  (200)   NOT NULL  , 
 PRIMARY KEY (aqusicao_id)); 

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
 PRIMARY KEY (covid_id)); 

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
 PRIMARY KEY (fornecedor_id)); 

 CREATE TABLE modalidade( 
      modalidade_id  INT  AUTO_INCREMENT    NOT NULL  , 
      mod_nome varchar  (100)   NOT NULL  , 
 PRIMARY KEY (modalidade_id)); 

 CREATE TABLE responsavel( 
      responsavel_id  INT  AUTO_INCREMENT    NOT NULL  , 
      res_orgao varchar  (200)   NOT NULL  , 
      res_cnpj varchar  (18)   NOT NULL  , 
      res_secretario varchar  (200)   , 
      res_fone varchar  (200)   , 
 PRIMARY KEY (responsavel_id)); 

  
  
 ALTER TABLE covid_19 ADD CONSTRAINT fk_covid_19_1 FOREIGN KEY (modalidade_id) references modalidade(modalidade_id); 
ALTER TABLE covid_19 ADD CONSTRAINT fk_covid_19_2 FOREIGN KEY (aquisicao_id) references aquisicao(aqusicao_id); 
ALTER TABLE covid_19 ADD CONSTRAINT fk_covid_19_3 FOREIGN KEY (fornecedor_id) references fornecedor19(fornecedor_id); 
ALTER TABLE covid_19 ADD CONSTRAINT fk_covid_19_4 FOREIGN KEY (responsavel_id) references responsavel(responsavel_id); 

  
